<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ptpmhdv";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Kết nối MySQL thất bại: " . mysqli_connect_error());
}
?>