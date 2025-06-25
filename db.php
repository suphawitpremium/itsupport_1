<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "it_support";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}
?>
