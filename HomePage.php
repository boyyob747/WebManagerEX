<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trang chủ</title>
<?php include '_bootstrap.php';  ?>
<?php 
if(isset($_GET['confirm_alert'])) {
	$msg = $_GET['confirm_alert'];
	echo $confirm_alert = "<script type=\"text/javascript\">"
					. "alert('$msg');" //
					. "</script>";
}
?>

</head>
<body>
	<div class="container-fluid">
		<div class="panel panel-primary">
		<div class="panel-heading"><h4><?php if(isset($_COOKIE["login"]) != true) 
		echo "Please login";
		else
			echo "Welcome";
		?></h4></div>
			<div class="panel-body">
				<hr>
				<?php
if(isset($_COOKIE["login"]) != true){ ?>
	<form action="CheckLogin.php" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-xs-4 control-label">Username</label>
						<div class="col-xs-6">
							<input type="text" class="form-control" name="username" required="required" class="form-control" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-4 control-label">Password</label>
						<div class="col-xs-6">
							<input type="password" class="form-control" name="password" required="required" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3 col-xs-offset-4">
							<input type="submit" class="btn btn-block btn-primary black-background white"
								value="Login">
						</div>
						<div class="col-xs-3">
							<input type="reset" class="btn btn-block btn-primary" value="Reset">
						</div>
					</div>
				</form>
<?php	
} else{ 
	echo "<h1><b>ສະບາຍດີ ".$_COOKIE["login"].'</b></h1>';
	?>
	 <a style="float:right!important" class="btn btn-danger" href="xulylogout.php">Logout</a></h3>
					ຄວາມສາມາດຈັດການຕຽມພ້ອມໃຫ້ທ່ານແລ້ວ
<?php
}
?>			
			</div>
		</div>
	</div>
	
</body>
</html>