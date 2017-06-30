<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ເພິ່ມຍາ</title>
<?php include '_bootstrap.php'; ?>
</head>
<body>
<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>ເພິ່ມຍາ</h4>
			</div>
			<div class="panel-body">
				<form class="form form-horizontal" action="add_medicine_toMYSQL.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
						<label class="col-xs-2 control-label">ຊື່ລາວ</label>
						<div class="col-xs-10">
							<input class="form-control" name="nameyar_lao" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຊື່ການຄ້າ</label>
						<div class="col-xs-10">
							<input class="form-control" name="nameyar_en" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຊະນິດ</label>
						<div class="col-xs-3">
							<select class="form-control" name="type_id">
    <option value="1">ນ້ຳ</option>
    <option value="2">ເມັດ</option>
  </select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ສ່ວນປະກອບ</label>
						<div class="col-xs-10">
							<input class="form-control" name="ingredient" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ສັບພະຄຸນ</label>
						<div class="col-xs-10">
							<input class="form-control" name="properties" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ວີທີນຳໃຊ້</label>
						<div class="col-xs-10">
						<textarea class="form-control" name="direction" style="resize: none;" required></textarea>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-xs-2 control-label">ໝາຍເຫດ</label>
						<div class="col-xs-10">
							<input class="form-control" name="note" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ປະເພດສິນຄ້າ</label>
						<div class="col-xs-10">
							<input class="form-control" name="category" value="" type="text" 
								required>
						</div>
					</div>
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