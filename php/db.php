<?php
$host = 'localhost';
$dbname = 'novella';
$username = 'root';
$password = ''; // or your password

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
