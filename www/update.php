<?php
//@w3schools
include 'connect.php';

$sql = 'UPDATE mydata SET data1='.rand(10,100).' WHERE id = 1';

mysqli_query($conn, $sql);

$sql = 'UPDATE mydata SET data1='.rand(10,100).' WHERE id = 2';

mysqli_query($conn, $sql);

mysqli_close($conn);

?>