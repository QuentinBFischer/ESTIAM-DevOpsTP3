<?php

/*phpinfo();*/

$username = "root";
$password = "";
$dbname = "mydb";

/*$db = new PDO('mysql:host=db;dbname=mydb;charset=UTF-8', 
              'root', 
              '');
*/
$conn = mysqli_connect('192.168.99.100:3306', $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>