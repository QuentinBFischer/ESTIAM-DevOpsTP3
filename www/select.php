<?php
//@w3schools
include 'connect.php';

$sql = "SELECT id, data1 FROM mydata";
$result = $conn->query($sql);

$i = "";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    	echo "id: " . $row["id"]. " - Data: " . $row["data1"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


?>