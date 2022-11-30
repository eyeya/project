<?php
$Host = "localhost";
$Database = "spa";
$DB_Username = "root";
$DB_Password = "";

$conn = mysqli_connect($Host ,$DB_Username,$DB_Password,$Database)or die("Can not connect Guest Database");

mysqli_set_charset($conn, 'utf8');
date_default_timezone_set('Asia/Bangkok');
?>

