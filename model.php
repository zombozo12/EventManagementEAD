<?php
namespace ead\model;


class model{
    private $connect;

    private $salt;

    public static function initDatabase(){
        define("DBHOSTNAME", "127.0.0.1");
        define("DBUSERNAME", "root");
        define("DBPASSWORD", "");
        define("DBNAME", "db_eventmanagement");
        $connect = mysqli_connect(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME) or die(mysqli_error($connect));

        if($connect->connect_error){
            die("Connection to Database Failed");
        }else{
            $statement = new self();
            $statement->connect = $connect;
            $statement->salt    = "ThIsISs4Lt";
            return $statement;
        }
    }

    public function login($email, $password){
        $email    = mysqli_real_escape_string($this->connect, $email);
        $password = mysqli_real_escape_string($this->connect, $password);

        if (empty($email) || empty($password)) {
          return false;
        }

        if(strlen($email) > 254){
            return array('message' => 'Batas panjang email adalah 254 karakter');
        }

        if(strlen($password > 50)){
            return array('message' => 'Batas panjang password adalah 50 karakter');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return array ('message' => 'Masukkan user dengan benar.');
        }

        $password_hash = hash('sha256', $password);

        $login = $this->connect->prepare('SELECT usr_username FROM tbl_user WHERE usr_email = ? AND usr_password = ?');
        $login->bind_param('ss', $email, $password_hash);
        $login->execute();
        $login->store_result();
        if ($login->num_rows == 0) {
          return false;
        }

        $loginDetail['log_detail'] = array();
        $login->bind_result($usrUsername);
        while($login->fetch()){
            array_push($loginDetail['log_detail'], $usrUsername);
        }
        return $loginDetail['log_detail'];
    }

    public function register($fullname, $email, $username, $password, $repassword, $role = 'User'){
        $fullname   = mysqli_real_escape_string($this->connect, $fullname);
        $email      = mysqli_real_escape_string($this->connect, $email);
        $username   = mysqli_real_escape_string($this->connect, $username);
        $password   = mysqli_real_escape_string($this->connect, $password);
        $repassword = mysqli_real_escape_string($this->connect, $repassword);
        $role       = mysqli_real_escape_string($this->connect, $role);

        $check = $this->connect->prepare('SELECT * FROM tbl_user WHERE usr_username = ? OR usr_email = ?');
        $check->bind_param('ss', $username, $email);
        $check->execute();
        $check->store_result();
        if($check->num_rows != 0){
            return array(
                'message' => 'Username atau email sudah terdaftar'
            );
        }
        if($password !== $repassword){
            return array(
                'message' => 'Password tidak sama'
            );
        }

        $password_hash = hash('sha256', $password);

        $register = $this->connect->prepare('INSERT INTO tbl_user(usr_fullname, usr_username, usr_role, usr_password, usr_email) VALUES(?,?,?,?,?)');
        $register->bind_param('sssss', $fullname, $username, $role, strtoupper($password_hash), $email);
        $register->execute();
        $register->store_result();
        if($register->affected_rows == 0){
            return false;
        }
        return true;
    }

    public function newsletter($email){
        $email = mysqli_real_escape_string($this->connect, $email);

        if (empty($email)) {
            return false;
        }

        if(strlen($email) > 254){
            return array('message' => 'Batas panjang email adalah 254 karakter');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return array ('message' => 'Masukkan user dengan benar.');
        }

        $newsletter = $this->connect->prepare('INSERT INTO tbl_newsletter(new_email) VALUES(?)');
        $newsletter->bind_param('s', $email);
        $newsletter->execute();
        $newsletter->store_result();
        if($newsletter->affected_rows == 0){
            return false;
        }

        return true;
    }

    public function addEvent($nama, $deskripsi, $tanggal, $poster){
        $nama      = mysqli_real_escape_string($this->connect, $nama);
        $deskripsi = mysqli_real_escape_string($this->connect, $deskripsi);
        $tanggal   = mysqli_real_escape_string($this->connect, $tanggal);
        $poster    = mysqli_real_escape_string($this->connect, $poster);

        $add = $this->connect->prepare('INSERT INTO tbl_event(evt_nama, evt_deskripsi, evt_tanggal, evt_poster) VALUES(?,?,?,?)');
        $add->bind_param('ssis', $nama, $deskripsi, $tanggal, $poster);
        $add->execute();
        $add->store_result();
        if($add->affected_rows == 0){
            return false;
        }
        return true;
    }

    public function deleteEvent($evt_id){
        $evt_id = mysqli_real_escape_string($this->connect, $evt_id);

        $delete = $this->connect->prepare('DELETE FROM tbl_event WHERE evt_id = ?');
        $delete->bind_param('i', $evt_id);
        $delete->execute();
        $delete->store_result();
        if($delete->affected_rows == 0){
            return false;
        }
        return true;
    }

    public function updateEvent($evt_id, $evt_nama, $evt_deskrpsi, $evt_tanggal, $evt_poster){
        $evt_id       = mysqli_real_escape_string($this->connect, $evt_id);
        $evt_nama     = mysqli_real_escape_string($this->connect, $evt_nama);
        $evt_deskrpsi = mysqli_real_escape_string($this->connect, $evt_deskrpsi);
        $evt_tanggal  = mysqli_real_escape_string($this->connect, $evt_tanggal);
        $evt_poster   = mysqli_real_escape_string($this->connect, $evt_poster);

        $update = $this->connect->prepare('UPDATE tbl_event SET evt_nama = ?, evt_deskripsi = ?, evt_tanggal = ?, evt_poster = ? WHERE evt_id = ?');
        $update->bind_param('ssisi', $evt_id, $evt_nama, $evt_deskrpsi, $evt_tanggal, $evt_poster);
        $update->execute();
        $update->store_result();
        if($update->affected_rows == 0){
            return false;
        }
        return true;
    }
    public function getEventDetail($evt_id){
        $evt_id = mysqli_real_escape_string($this->connect, $evt_id);

        $get = $this->connect->prepare('SELECT evt.evt_nama, evt.evt_deskripsi, evt.evt_tanggal, evt.evt_kuota, evt.evt_poster 
                                        FROM tbl_event AS evt
                                        WHERE evt_id = ?');
        $get->bind_param('i', $evt_id);
        $get->execute();
        $get->store_result();
        if($get->num_rows == 0){
            return false;
        }

        $get->bind_result($evt_nama, $evt_deskripsi, $evt_tanggal, $evt_kuota, $evt_poster);
        $data = array();
        while($get->fetch()){
            $data[] = ['evt_nama' => $evt_nama, 'evt_deskripsi' => $evt_deskripsi, 'evt_tanggal' => $evt_tanggal,
                'evt_kuota' => $evt_kuota, 'evt_poster' => $evt_poster];
        }

        return array_slice($data, 0, 1);
    }

    public function getEventWithLimit($limit = 3){
        $limit = mysqli_real_escape_string($this->connect, $limit);

        $get = $this->connect->prepare('SELECT evt.evt_id, evt.evt_nama, evt.evt_deskripsi, evt.evt_tanggal, evt.evt_kuota, evt.evt_poster, evt.evt_createdDate,
                                        evt.evt_lokasi, evc.evc_name, usr.usr_nohp
                                        FROM tbl_event as evt
                                        JOIN tbl_eventcatrel as ecl
                                        ON evt.evt_id = ecl.evt_id
                                        JOIN tbl_eventcat as evc
                                        ON ecl.evc_id = evc.evc_id
                                        JOIN tbl_eventuser as evr
                                        ON evt.evt_id = evr.evt_id
                                        JOIN tbl_user as usr
                                        ON evr.usr_id = usr.usr_id
                                        ORDER BY evt_createdDate 
                                        LIMIT ?');
        $get->bind_param('i', $limit);
        $get->execute();
        $get->store_result();
        if($get->num_rows == 0){
            return array('message' => 'Event not found');
        }

        $data = array();
        $get->bind_result($evt_id, $evt_nama, $evt_deskripsi, $evt_tanggal, $evt_kuota, $evt_poster, $evt_createdDate, $evt_lokasi, $evc_name, $usr_nohp);
        while($get->fetch()){
            $desc = substr($evt_deskripsi, 0, 200) . '...';
            $data[] = ['evt_id' => $evt_id, 'evt_nama' => $evt_nama, 'evt_deskripsi' => $desc, 'evt_tanggal' => $evt_tanggal,
                'evt_kuota' => $evt_kuota, 'evt_poster' => $evt_poster, 'evt_createdDate' => $evt_createdDate,
                'evt_lokasi' => $evt_lokasi, 'evc_name' => $evc_name, 'usr_nohp' => $usr_nohp];
        }

        usort($data, function($a, $b){
            return $b['evt_createdDate'] <=> $a['evt_createdDate'];
        });

        return array_slice($data, 0, 3);
    }

    public function getEventHosts($evt_id){
        $evt_id = mysqli_real_escape_string($this->connect, $evt_id);

        $get = $this->connect->prepare('SELECT hst_name, hst_pic FROM tbl_host WHERE evt_id = ?');
        $get->bind_param('i', $evt_id);
        $get->execute();
        $get->store_result();
        if($get->num_rows == 0){
            return array('message' => 'Data pembicara tidak ditemukan');
        }

        $data = array();
        $get->bind_result($hst_name, $hst_pic);
        while($get->fetch()){
            $data[] = ['hst_name' => $hst_name, 'hst_pic' => $hst_pic];
        }

        return array_slice($data, 0, 2);
    }

    public function pendaftaranEventAuto($usr_username, $evt_id, $epf_jumlah){
        $usr_username = mysqli_real_escape_string($this->connect, $usr_username);
        $get = $this->connect->prepare('SELECT usr_id FROM tbl_user WHERE usr_username = ?');
        $get->bind_param('s', $usr_username);
        $get->execute();
        $get->store_result();
        if($get->num_rows == 0){
            return false;
        }

        $get->bind_result($usr_id);

        $usr_id = mysqli_real_escape_string($this->connect, $usr_id);
        $evt_id = mysqli_real_escape_string($this->connect, $evt_id);
        $epf_jumlah = mysqli_real_escape_string($this->connect, $epf_jumlah);

        $daftar = $this->connect->prepare('INSERT INTO tbl_eventpendf(usr_id, evt_id, epf_jumlah) VALUES(?,?,?)');
        $daftar->bind_param('iii', $usr_id, $evt_id, $epf_jumlah);
        $daftar->execute();
        $daftar->store_result();
        if($daftar->affected_rows == 0){
            return false;
        }
        return true;
    }

    public function pendaftaranEventManual($evt_id, $fullname, $email, $phonenum){
        $evt_id = mysqli_real_escape_string($this->connect, $evt_id);
        $fullname = mysqli_real_escape_string($this->connect, $fullname);
        $email = mysqli_real_escape_string($this->connect, $email);
        $phonenum = mysqli_real_escape_string($this->connect, $phonenum);

        $check = $this->connect->prepare('SELECT * FROM tbl_eventpendfmanual WHERE epm_email = ? AND evt_id = ?');
        $check->bind_param('si', $email, $evt_id);
        $check->execute();
        $check->store_result();

        if($check->num_rows != 0){
            return false;
        }

        $daftar = $this->connect->prepare('INSERT INTO tbl_eventpendfmanual(evt_id, epm_nama, epm_email, epm_nohp) VALUES(?,?,?,?)');
        $daftar->bind_param('issi', $evt_id, $fullname, $email, $phonenum);
        $daftar->execute();
        $daftar->store_result();
        if($daftar->affected_rows == 0){
            return false;
        }
        return true;
    }

}

?>
