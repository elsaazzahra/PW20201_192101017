<?php

define('BASEURL', 'http://localhost/PW20201_192101017/UAS-192101017-Elsa_Aprilia_Azzahra/public/');

//DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'uas_db_pemweb');

class connect {
    private $conn;

    function __construct() {
        $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(!$link){
            echo 'Error:</br>'. mysqli_error($link);
        }else{
            $this->conn = $link;
        }
    }

    function getConn(){
        return $this->conn;
    }
    function setConn($conn){
        $this->conn = $conn;
    }
}
