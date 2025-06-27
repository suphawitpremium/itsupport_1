<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "it_support";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");
?>
