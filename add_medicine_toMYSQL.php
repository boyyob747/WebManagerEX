<?php
        


if (isset($_POST["nameyar_lao"])){
	$nameyar_lao = $_POST["nameyar_lao"];
	$nameyar_en = $_POST["nameyar_en"];
	$type_id = $_POST["type_id"];
	$ingredient = $_POST["ingredient"];
	$properties = $_POST["properties"];
	$direction = $_POST["direction"];
	$note = $_POST["note"];
	$category = $_POST["category"];
	include('dbConect.php');
$conn->set_charset("utf8");
$sql = "INSERT INTO `tb_yar`(`nameyar_lao`, `nameyar_en`, `type_id`, `ingredient`, `properties`, `direction`, `note`, `category`) VALUES ('$nameyar_lao','$nameyar_en','$type_id'
,'$ingredient','$properties','$direction'
,'$note','$category')";
	if($conn->query($sql)){
	$confirm_alert = "Successful data recording";
					$url = "/WebManager/medicine.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}else{
	$confirm_alert = "Failed data recording";
	$url = "/WebManager/medicine.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}

}






?>