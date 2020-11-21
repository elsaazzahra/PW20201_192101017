<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lat_dbase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Karina', 'Suwandi', '29'), ('Glenn', 'Gandari', '32')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
