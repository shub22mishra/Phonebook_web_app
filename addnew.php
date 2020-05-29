<!DOCTYPE html>
<html>
<head>
	<title>Online Phone Book</title>
	<link rel="stylesheet" type="text/css" href="dist/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Header Area -->
	<div class="container text-center">
		<div class="row">
			<div class="header col-md-12">
				<a href="index.php"><h1> Phone Book Web App</h1></a>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<div class="row">
			<div class="head_page col-md-12">
				<h2>Add New Contact</h2>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<form action="" method="post" class="col-md-12"  enctype="multipart/form-data">
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Name: *</label>
					<input class="col-md-8" type="text" name="name" placeholder="">
				</div>
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Phone No: *</label>
					<input class="col-md-8" type="text" name="phone" placeholder="">
				</div>
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Email: </label>
					<input class="col-md-8" type="email" name="email" placeholder="">
				</div>
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Address: </label>
					<input class="col-md-8" type="text" name="address" placeholder="">
				</div>
				  
				<div class="sigle-input col-md-12 text-center submit-data">
					<input class="col-md-2" type="submit" name="submit" value="Save">
					<input class="col-md-2" type="reset"  value="Reset">
                    <input class="col-md-2" type="reset"  value="Home">
                    
				</div>
			</form> 
		</div>
	</div>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phonebook";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$q="INSERT INTO detail(name,phone,email,address)VALUES('$name','$phone','$email','$address')";
   
	$conn->query($q);
}

	
	


?>


	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/scrolltop.js"></script>
	<script src="dist/bootstrap/bootstrap.min.js"></script>
</body>
</html>
