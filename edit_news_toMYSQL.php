<?php
       

if (isset($_POST["title_nw"])){
	$id = $_POST["id"];
	$title_nw = $_POST["title_nw"];
	$text_title = $_POST["text_title"];
	$text_nw = $_POST["text_nw"];
	$now = new DateTime();
	$import =  $now->format('Y-m-d H:i:s');
	$old_img = $_POST["old_img"];
	$old_img_text = $_POST["old_img_text"];
	include('dbConect.php');
$conn->set_charset("utf8");
$target_dir = "images/";
$filename_img = $target_dir . basename($_FILES["img"]["name"]);
$filename_img_text = $target_dir . basename($_FILES["img_text"]["name"]);
if($filename_img == 'images/' && $filename_img_text == 'images/'){
$sql = "UPDATE `tb_news` SET `title_nw`='$title_nw',`text_title`='$text_title',`text_nw`='$text_nw',`datetime`='$import' WHERE id='$id'";
}
else if($filename_img == 'images/' && $filename_img_text != 'images/'){
	if (move_uploaded_file($_FILES["img_text"]["tmp_name"], $filename_img_text)){
		$filename_img_text='/WebManager/'.$filename_img_text;
		$sql = "UPDATE `tb_news` SET `title_nw`='$title_nw',`text_title`='$text_title',`text_nw`='$text_nw',`img_text`='$filename_img_text',`datetime`='$import' WHERE id='$id'";	
	}
}else if($filename_img_text == 'images/' && $filename_img != 'images/'){
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $filename_img)){
				$filename_img='/WebManager/'.$filename_img;
		$sql = "UPDATE `tb_news` SET `title_nw`='$title_nw',`text_title`='$text_title',`text_nw`='$text_nw',`img`='$filename_img',`datetime`='$import' WHERE id='$id'";	
		}
}else{
if (move_uploaded_file($_FILES["img"]["tmp_name"], $filename_img) && move_uploaded_file($_FILES["img_text"]["tmp_name"], $filename_img_text)) {
	$filename_img='/WebManager/'.$filename_img;
	$filename_img_text='/WebManager/'.$filename_img_text;
	$sql = "UPDATE `tb_news` SET `title_nw`='$title_nw',`text_title`='$text_title',`text_nw`='$text_nw',`img`='$filename_img',`img_text`='$filename_img_text',`datetime`='$import' WHERE id='$id'";	
}
}

if($conn->query($sql)){
	$confirm_alert = "Successful edit data";
					$url = "/WebManager/news.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}else{
	$confirm_alert = "Failed edit data";
	$url = "/WebManager/news.php?confirm_alert=".$confirm_alert;
					header( "Location: $url" );
}




}






?>