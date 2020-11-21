<?
    include_once("koneksi.php");

    $judul= $_POST['title'];
    $penulis = $_POST['author'];
    $lead = $_POST['abstraksi'];
    $isi = $_POST['content'];
    $time=date("d M Y, H:i");
    $lead = str_replace($lead);
    $content = str_replace($content);
    
    $query = mysqli_query("INSERT INTO articles (judul,penulis,lead,content,waktu)
    values('$judul','$penulis','$lead','$isi','$time')");
    $result = mysqli_query($mysqli,$query);
    if($mysqli,$result){
        echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
        echo "<A href="tampil_articles.php">List</A>";
    }else{
        echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
    }
?>
