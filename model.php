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


    }

    public function register($email, $username, $password, $repassword, $role){
        $email    = mysqli_real_escape_string($this->connect, $email);
        $username = mysqli_real_escape_string($this->connect, $username);
        $password = mysqli_real_escape_string($this->connect, $password);
        $repassword = mysqli_real_escape_string($this->connect, $repassword);
        $role     = mysqli_real_escape_string($this->connect, $role);

        //Ini untuk mengecek password dan password konfirmasi
        if($password !== $repassword){
            return false;
        }
    }
}

 ?>
