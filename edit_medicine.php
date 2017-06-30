<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ແກ້ໄຂຍາ</title>
<?php include '_bootstrap.php'; ?>
<?php
if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
include('dbConect.php');
	$conn->set_charset("utf8");
$sql = "SELECT * FROM `tb_yar` WHERE id='$id'";
$result = $conn->query($sql);
?>
</head>
<body>
<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>ແກ້ໄຂຍາ</h4>
			</div>
			<div class="panel-body">
				<form class="form form-horizontal" action="edit_medicine_toMYSQL.php" method="post" enctype="multipart/form-data">
				<?php
				if ($result->num_rows > 0) {
  					if($row = $result->fetch_assoc()) {
				?>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<div class="form-group">
						<label class="col-xs-2 control-label">ຊື່ລາວ</label>
						<div class="col-xs-10">
							<input class="form-control" name="nameyar_lao" value="<?php echo $row['nameyar_lao']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຊື່ການຄ້າ</label>
						<div class="col-xs-10">
							<input class="form-control" name="nameyar_en" value="<?php echo $row['nameyar_en']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຊະນິດ</label>
						<div class="col-xs-3">
							<select class="form-control" name="type_id">
    <option value="1" <?php if($row['type_id']==1) echo 'selected';?>>ນ້ຳ</option>
    <option value="2" <?php if($row['type_id']==2) echo 'selected';?>>ເມັດ</option>
  </select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ສ່ວນປະກອບ</label>
						<div class="col-xs-10">
							<input class="form-control" name="ingredient" value="<?php echo $row['ingredient']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ສັບພະຄຸນ</label>
						<div class="col-xs-10">
							<input class="form-control" name="properties" value="<?php echo $row['properties']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ວີທີນຳໃຊ້</label>
						<div class="col-xs-10">
						<textarea class="form-control" name="direction" style="resize: none;" required><?php echo $row['direction']; ?></textarea>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-xs-2 control-label">ໝາຍເຫດ</label>
						<div class="col-xs-10">
							<input class="form-control" name="note" value="<?php echo $row['note']; ?>" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ປະເພດສິນຄ້າ</label>
						<div class="col-xs-10">
							<input class="form-control" name="category" value="<?php echo $row['category']; ?>" type="text" 
								required>
						</div>
					</div>
					<?php  }}?>
					<div class="form-group">
						<div class="col-xs-2 col-xs-offset-2">
							<input class="btn btn-primary btn-block" value="ແກ້ໄຂ"
								type="submit"> <input type="hidden" name="edit">
						</div>
					</div>
			</div>
		</div>
	</div>
</body>
</html>