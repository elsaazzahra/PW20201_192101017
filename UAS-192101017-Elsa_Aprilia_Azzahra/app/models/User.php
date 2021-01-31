<?php
    include_once '..\config\config.php';

    class User {
        private $link;

        function __construct(){
            $connect = new connect();
            $this->link = $connect->getConn();

        }

        public function checklogin($usr,$pwd){
            $q = "SELECT * FROM user"
                    . "WHERE username='$usr' "
                    . "AND password='$pwd' "
                    . "AND blocked='N'";
            $result = mysqli_query($this->link, $q);
            $data = mysqli_fetch_row($result);
            return $data;

        }
        
        public function updateBlokir($usr){
            $query = "UPDATE user SET blocked='Y' WHERE username='$ur'";
            echo $query. '<br>';
            mysqli_query($thus->link, $query);
        }
   
    }



