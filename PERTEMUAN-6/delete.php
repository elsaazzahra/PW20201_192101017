<?php
    include_once("koneksi.php");

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM articles WHERE id=$id");
   
    header("Location:tampil_articles.php");
?>