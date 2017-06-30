<?php
        


if (isset($_POST["nameyar_lao"])){
	$id = $_POST["id"];
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
$sql = "UPDATE `tb_yar` SET `nameyar_lao`='$nameyar_lao',`nameyar_en`='$nameyar_en',`type_id`='$type_id',`ingredient`='$ingredient',
`properties`='$properties',
`direction`='$direction',`note`='$note',`category`='$category' WHERE id='$id'";
	if($conn->query($sql)){
	$confirm_alert = "Successful edit data";
					$url = "/WebManager/medicine.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}else{
	$confirm_alert = "Failed edit data";
	$url = "/WebManager/medicine.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}

}






?>