<?php
$host = "localhost";
$username = "root";
$userpassword = "";
$dbname = "spa";
  
$conn = mysqli_connect($host ,$username ,$userpassword ,$dbname);

if (mysqli_connect_errno())
{
	echo "Database Connect Failed : " . mysqli_connect_error();
}
else
{
	// echo "Database Connected.";
}

mysqli_close($conn);
?>

<!-- ตัวอย่าง -->

<!-- $host = "localhost";
$username = "root";
$userpassword = "root";
$dbname = "mydatabase";
  
$conn = mysqli_connect($host ,$username ,$userpassword ,$dbname);

if (mysqli_connect_errno())
{
	echo "Database Connect Failed : " . mysqli_connect_error();
}
else
{
	echo "Database Connected.";
}

mysqli_close($conn); -->
