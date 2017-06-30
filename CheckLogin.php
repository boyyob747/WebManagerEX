<?php
$user = NULL;
$pass = NULL;
if (isset($_POST["username"]) && isset($_POST["password"])){
	$user  = $_POST["username"];
	$pass = $_POST["password"];
}
include('dbConect.php');
$conn->set_charset("utf8");
$sql = "SELECT * FROM `admin` WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	setcookie("login", $user, time()+3600);
	$confirm_alert = "Successful Login";
					$url = "/WebManager/HomePage.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}else
	echo 'false';
?>