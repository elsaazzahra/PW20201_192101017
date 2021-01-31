<?php
    session_start();
    include_once '../models/User.php';
    $usr = $_POST['username'];
    $pwd = $