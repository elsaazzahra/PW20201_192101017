<?php
    
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con, 'lat_dbase') or die(mysqli_error($con));
    $hasil=mysqli_query($con,"SELECT * FROM tbl_mhs"); 
    While($data=mysqli_fetch_array($hasil))
    {
    echo "$data[FirstName] $data[LastName] $data[Age]<br>";
    }
?>
