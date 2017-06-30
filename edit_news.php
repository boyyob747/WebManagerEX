<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ແກ້ໄຂຂ່າວ</title>
<?php include '_bootstrap.php'; ?>
<?php
if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
include('dbConect.php');
	$conn->set_charset("utf8");
$sql = "SELECT * FROM `tb_news` WHERE id='$id'";
$result = $conn->query($sql);
?>
</head>
<body>
<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>ເພິ່ມຍາ</h4>
			</div>
			<div class="panel-body">
				<form class="form form-horizontal" action="edit_news_toMYSQL.php" method="post" enctype="multipart/form-data">
				<?php
				if ($result->num_rows > 0) {
  					if($row = $result->fetch_assoc()) {
				?>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="old_img" value="<?php echo $row['img']; ?>">
				<input type="hidden" name="old_img_text" value="<?php echo $row['img_text']; ?>">
				<div class="form-group">
						<label class="col-xs-2 control-label">ຫົວຂໍ້</label>
						<div class="col-xs-10">
							<input class="form-control" name="title_nw" value="<?php echo $row['title_nw']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ເນື້ອຫາຍໍ້</label>
						<div class="col-xs-10">
							<input class="form-control" name="text_title" value="<?php echo $row['text_title']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ເນື້ອຫາເຕັມ</label>
						<div class="col-xs-10">
						<textarea class="form-control" name="text_nw" required><?php echo $row['text_nw']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຮູບຫົວຂໍ້</label>
						<div class="col-xs-3">
						ຮູບເກົ່າ : <a href="<?php echo $row['img']; ?>"><?php echo $row['img']; ?></a>
						<input class="form-control" name="img" value="" type="file" accept="image/*"
								>
					</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຮູບໃນຂ່າວ</label>
						<div class="col-xs-3">
						ຮູບເກົ່າ : <a href="<?php echo $row['img']; ?>"><?php echo $row['img_text']; ?></a>
						<input class="form-control" name="img_text" value="<?php echo $row['img_text']; ?>" type="file" accept="image/*"
								>
					</div>
					</div>
					<?php  }}?>
					<div class="form-group">
						<div class="col-xs-2 col-xs-offset-2">
							<input class="btn btn-primary btn-block" value="ເພິ່ມ"
								type="submit"> <input type="hidden" name="add">
						</div>
					</div>
			</div>
		</div>
	</div>
</body>
</html>