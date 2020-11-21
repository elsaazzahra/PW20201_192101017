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

    $sql = "SELECT * FROM tbl_mhs";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["mhsID"]. " - FirstName: " . $row["LastName"]. " " . $row["Age"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>

