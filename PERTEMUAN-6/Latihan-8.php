<?php
    $con = mysqli_connect("localhost","root","","");
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con,'lat_dbase') or die(mysqli_error($con));
    mysqli_query($con,"UPDATE tbl_mhs SET Age = '46'
    WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
    mysqli_close($con);
?>
