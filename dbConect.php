<?php
header('Content-Type: text/html;charset=UTF-8');  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citiyar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	
	
?>