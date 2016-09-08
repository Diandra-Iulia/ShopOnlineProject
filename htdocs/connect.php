<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magazin";
/*
// Deschide conexiune
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
	echo "Failed to connect";
}

?>