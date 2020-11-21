<?php
   include "koneksi.php";

    $judul= $_POST['judul'];
    $penulis = $_POST['penulis'];
    $lead = $_POST['lead'];
    $isi = $_POST['isi'];
    $time=date("d M Y, H:i");
    $lead = str_replace($lead);
    $content = str_replace($content);
    $query = mysqli_query("INSERT INTO articles (judul,penulis,lead,content,waktu)
    values('$judul','$penulis','$lead','$isi','$time')");        
    if($query){ // Cek jika proses simpan ke database sukses atau tidak  // Jika Sukses, Lakukan :  
        header("location: index.php"); // Redirect ke halaman index.php
    }else{  // Jika Gagal, Lakukan :  
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";  
        echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";}

?>