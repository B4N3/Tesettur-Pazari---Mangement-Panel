<?php
include '../../config/Database.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql    = "SELECT * FROM kargo ORDER BY code DESC";
$result = mysqli_query($conn, $sql);

      // output data of each row
