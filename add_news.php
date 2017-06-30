<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ເພິ່ມຂ່າວ</title>
<?php include '_bootstrap.php'; ?>
</head>
<body>
<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>ເພິ່ມຍາ</h4>
			</div>
			<div class="panel-body">
				<form class="form form-horizontal" action="add_news_toMYSQL.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
						<label class="col-xs-2 control-label">ຫົວຂໍ້</label>
						<div class="col-xs-10">
							<input class="form-control" name="title_nw" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ເນື້ອຫາຍໍ້</label>
						<div class="col-xs-10">
							<input class="form-control" name="text_title" value="" type="text" 
								required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ເນື້ອຫາເຕັມ</label>
						<div class="col-xs-10">
						<textarea class="form-control" name="text_nw" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຮູບຫົວຂໍ້</label>
						<div class="col-xs-3">
						<input class="form-control" name="img" value="" type="file" accept="image/*"
								required>
					</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">ຮູບໃນຂ່າວ</label>
						<div class="col-xs-3">
						<input class="form-control" name="img_text" value="" type="file" accept="image/*"
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