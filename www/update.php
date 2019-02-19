<?php
//@w3schools
include 'connect.php';

$sql = 'UPDATE mydata SET data1='.rand(10,100).' WHERE id = 1';

mysql_query($conn, $sql);

$sql = 'UPDATE mydata SET data1='.rand(10,100).' WHERE id = 2';

mysql_query($conn, $sql);

mysql_close($conn);
?>