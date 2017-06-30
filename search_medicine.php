<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php 
if(isset($_COOKIE["login"]) != true){
$confirm_alert = "Please login ..!!";
	$url = "/WebManager/HomePage.php?confirm_alert=".$confirm_alert;
	header( "Location: $url" );
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include '_bootstrap.php';  ?>
	<script>  
var request=new XMLHttpRequest();  
function searchInfo(){  
var key=document.vinform.name.value;    
var url="medicine.php?key="+key;  
  
try{  
request.onreadystatechange=function(){  
if(request.readyState==4){  
var val=request.responseText;  
document.getElementById('mylocation').innerHTML=val;  
}  
}//end of function  
request.open("GET",url,true);  
request.send();  
}catch(e){alert("Unable to connect to server");}  
}  
</script>
</head>
<body>
<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>ຄົ້ນຫາຍາ</h4>
			</div>
			<div class="panel-body">
				<form class="form form-horizontal" name="vinform">
						<div class="col-xs-8">
							<input class="form-control" type="text" name="name" 
								required placeholder="ພິມຊື່ຍາທີ່ຕ້ອງການຄົ້ນຫາ" onkeydown="searchInfo()">
						</div>
						<div class="col-xs-2">
							<input class="btn btn-primary btn-block" name="sreach" value="Sreach" type="button" onclick="searchInfo()">
						</div>
					</div>
				</form>
			</div>
		</div>			
	</div>
	<div>
	<span id="mylocation"></span>  
</body>
</html>