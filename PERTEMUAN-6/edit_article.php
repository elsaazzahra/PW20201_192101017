<?php
    include_once("koneksi.php");

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $lead = $_POST['lead'];
        $content = $_POST['content'];

        $result = mysqli_query($mysqli, "UPDATE articles SET judul='$judul',penulis='$penulis',lead='$lead',content='$content' WHERE id=$id");

        header("Location: tampil_articles.php");

    }
?>
<?php
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM articles WHERE id=$id");

    if(mysqli_num_rows($result) > 0 ){
    while($data = mysqli_fetch_array($result))
    {
        $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
        $penulis = isset($_POST['penulis']) ? $_POST['penulis'] : '';
        $lead = isset($_POST['lead']) ? $_POST['lead'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
    }
}

    ?>

<html>
    <head>
        <title>Edit Article</title>
    </head>
    <body>
        <a href="tampil_articles.php">Home</a>
    </br>
    </br>

        <form nama="update_article" method="post" action="edit_article.php">
            <table border="0">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="name" value=<?php echo $judul;?>></td>
                </tr>
                 <tr>
                     <td>Penulis</td>
                     <td>:</td>
                     <td><input type="text" name="name" value=<?php echo $penulis;?>></td>

                 </tr>
                 <tr>
                    <td>Lead</td>
                    <td>:</td>
                    <td><textarea name="name" value=<?php echo $lead;?>></td>
                    
                </tr>
                <tr>
                    <td>Content</td>
                    <td>:</td>
                    <td><textarea name="content" value=<?php echo $content;?>></td>
                    
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>

            </table>
        </form>
    </body>
</html>

