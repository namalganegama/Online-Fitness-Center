<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "trainer details";


$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error)
{
	die("Connection faild: " . $conn->connect_error);
}

echo "Connected Successfully";

?> 