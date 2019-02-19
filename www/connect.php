<?php
//@w3schools
$servername = "192.168.99.100:3306";
$username = "root";
$password = "root";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>