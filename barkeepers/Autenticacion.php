<?php
$servername = "localhost";
$username = "u366701800_root";
$password = "Gonza1703";
$dbname = "u366701800_barkeerpers";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>