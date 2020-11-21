<?php
    $host = 'localhost';
    $username = 'root';
    $pass   = '';
    $dbname = 'artikel_db';

    //lakukkan koneksi dengan mysql
    $mysqli = mysqli_connect($host,$username,$pass,$dbname) or die("gagal, database tidak ditemukan");
?>