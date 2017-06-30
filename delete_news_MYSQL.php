<?php
	$id = NULL;
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	include('dbConect.php');
	$sql1 = "DELETE FROM `tb_news` WHERE id='$id'";
if($conn->query($sql1)){
	$confirm_alert = "Successful data delete";
					$url = "/WebManager/news.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}else{
	$confirm_alert = "Failed data delete";
	$url = "/WebManager/news.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}
?>