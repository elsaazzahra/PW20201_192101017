<?php   
    $conn = mysqli_connect("localhost","root","","phpdasar");
?>

<!DOCTYPE html>
<html>
        <head>
            <title>Halaman Admin</title>
        </head>
        <body>
            <h1>Daftar Mahasiswa </h1>
            <?php $mahasiswa = mysqli_query("SELECT * FROM mahasiswa"); ?>

            <table border="1" cellpadding="10" cellpadding="0">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($mahasiswa as $row);?>
                    <tr>
                        <td><?= $i ; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>Ubah</a>
                        </td>
                    </tr>
            </table>
        </body>
</html>