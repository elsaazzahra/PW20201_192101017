<?php
        include_once("koneksi.php");
        
        $result = mysqli_query($mysqli,"SELECT * FROM articles  ORDER BY id DESC")
?>
<html>
        <h2>List Article </h2>
        <a href="add_article.php">Tambah Article</a>
        </br>
        </br>
        <table width='80%' border='1'>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Lead</th>
                <th>Content</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
                <?php
                        if(mysqli_num_rows($result) > 0 ){
                        while($data = mysqli_fetch_array($result)){
                             echo "<tr>";
                             echo "<td>".$data['judul']."</td>";
                             echo "<td>".$data['penulis']."</td>";
                             echo "<td>".$data['lead']."</td>";
                             echo "<td>".$data['content']."</td>";
                             echo "<td><a href='edit_article.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
                        }
                }

                ?>
                </table>

        </body>


</html>
