<?php
        


if (isset($_POST["title_nw"])){
	$title_nw = $_POST["title_nw"];
	$text_title = $_POST["text_title"];
	$text_nw = $_POST["text_nw"];
	$now = new DateTime();
	$import =  $now->format('Y-m-d H:i:s');
	include('dbConect.php');
$conn->set_charset("utf8");
$target_dir = "images/";
$filename_img = $target_dir . basename($_FILES["img"]["name"]);
$filename_img_text = $target_dir . basename($_FILES["img_text"]["name"]);

if (move_uploaded_file($_FILES["img"]["tmp_name"], $filename_img) && move_uploaded_file($_FILES["img_text"]["tmp_name"], $filename_img_text)) {
	$filename_img='/WebManager/'.$filename_img;
	$filename_img_text='/WebManager/'.$filename_img_text;
	$sql = "INSERT INTO `tb_news`( `title_nw`, `text_title`, `text_nw`, `img`, `img_text`, `datetime`) 
	VALUES ('$title_nw','$text_title','$text_nw','$filename_img','$filename_img_text','$import')";
	if($conn->query($sql)){
	$confirm_alert = "Successful data recording";
					$url = "/WebManager/news.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}else{
	$confirm_alert = "Failed data recording";
	$url = "/WebManager/news.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}
}



}






?>