<?php

	$con = mysqli_connect("localhost","root","","lat_dbase") or die ("could not connect to mysql");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db($con,'lat_dbase');
	$sql="INSERT INTO tbl_mhs (FirstName, LastName, Age)
	VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[Age]')";
	
	if (mysqli_query($con, $sql)) {
		echo "New record created successfully";
  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  mysqli_close($con);
?>