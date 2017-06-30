<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tài liêu</title>
<?php include '_bootstrap.php'; ?>
</head>
<?php
if(isset($_COOKIE["login"]) != true){
$confirm_alert = "Please login ..!!";
	$url = "/WebManager/HomePage.php?confirm_alert=".$confirm_alert;
	header( "Location: $url" );
}
if(isset($_GET['confirm_alert'])) {
	$msg = $_GET['confirm_alert'];
	echo $confirm_alert = "<script type=\"text/javascript\">"
					. "alert('$msg');" //
					. "</script>";
}
?>

<body>
<?php
	include('dbConect.php');
	$conn->set_charset("utf8");
$sql = "SELECT * FROM `tb_yar`";
if(isset($_GET['key'])) {
	$key = $_GET['key'];
	$sql.=" WHERE nameyar_lao LIKE '%$key%' OR nameyar_en LIKE '%$key%'";
}
$result = $conn->query($sql);
?>
<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<?php 
			if(isset($_GET['key'])) {
				echo '<h4>ລາຍການຍາທີ່ຄົ້ນຫາ</h4>';
				}else{
					echo '<h4>ລາຍການຍາທັ້ງໝົດ</h4>';
					}?>
				
			</div>
			<div class="panel-body">
						<div class="table-responsive"> 
				<table class="table table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>ຊື່ລາວ</th>
						<th>ຊື່ການຄ້າ</th>
						<th>ຊະນິດ</th>
						<th>ສ່ວນປະກອບ</th>	
						<th>ສັບພະຄຸນ</th>	
						<th>ວີທີນຳໃຊ້</th>
						<th>ໝາຍເຫດ</th>
						<th>ປະເພດສິນຄ້າ</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
				<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
					<tr>
						<td scope="row"><?php echo $row['id']; ?></td>
						<td><?php echo $row['nameyar_lao']; ?></td>
						<td><?php echo $row['nameyar_en']; ?></td>
  						<td><?php 
  						if($row['type_id'] == 1)
  							echo 'ນ້ຳ';
  						else
  						echo 'ເມັດ';	
  						?></td>
  						<td><?php echo $row['ingredient']; ?></td>
  						<td><?php echo $row['properties']; ?></td>
  						<td><?php echo $row['direction']; ?></td>
  						<td><?php echo $row['note']; ?></td>
  						<td><?php echo $row['category']; ?></td>
  						<td><a class="btn btn-primary" href="edit_medicine.php?id=<?php echo $row['id']; ?>">
  <i class="fa fa-pencil-square"></i></a>
  						</td>
  						<td><a class="btn btn-primary" href="delete_medicine_MYSQL.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có thực sự muốn xóa không?')">
  <i class="fa fa-trash-o"></i></a>
  						</td>
  						
					</tr>
					<?php }}else {
						echo 'ບໍ່ມີຍາທີ່ອ່ານຄົ້ນຫາ';
						} ?>
				</tbody>
				</table>
				<div class = "panel-footer">
				<form action="add_medicine.php" method="post">
			<input type="submit" name="send" class="btn btn-primary btn-sm btn-block"
				value="Add medicine">
		</form>
			</div>
			</div>
			</div>		
			</div>
		</div>
</body>
</html>