<?php
namespace ead\model;


class model{
    private $connect;

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

        if(strlen($password > 100)){
            return array('message' => 'Batas panjang password adalah 100 karakter');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return array ('message' => 'Masukkan user dengan benar.');
        }

        $password_hash = hash('sha256', $this->salt, $password);

        $login = $this->connect->prepare('SELECT usr_username FROM tbl_user WHERE usr_email = ? AND usr_password = ?');
        $login->bind_param('ss', $email, $password_hash);
        $login->execute();
        $login->store_result();
        if ($login->num_rows == 0) {
          return false;
        }

        $loginDetail['log_detail'] = array();
        $login->bind_result($usrUsername);
        while ($login->fetch()) {
          array_push($loginDetail['log_detail'], $usrUsername);
        }
        return $loginDetail['log_detail'];


    }

    public function register($email, $username, $password, $repassword, $role){
        $email    = mysqli_real_escape_string($this->connect, $email);
        $username = mysqli_real_escape_string($this->connect, $username);
        $password = mysqli_real_escape_string($this->connect, $password);
        $repassword = mysqli_real_escape_string($this->connect, $repassword);
        $role     = mysqli_real_escape_string($this->connect, $role);

        if($password !== $repassword){
            return array(
                'status' => 0,
                'message' => 'Password tidak sama
                ');
        }

        $register = $this->connect->prepare('INSERT INTO tbl_user(usr_username, usr_role, usr_password, usr_email) VALUES(?,?,?,?)');
        $register->bind_param('ssss', $username, $role, $password, $email);
        $register->execute();
        $register->store_result();
        if($register->affected_rows == 0){
            return false;
        }
        return true;
    }
}

 ?>
