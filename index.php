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
				<a href="index.php"><h1>Phone Book Web App</h1></a>
			</div>
		</div>
	</div>

	<!-- Input Part -->
	<div class="container text-center">
		<div class="row">
			<div class="input_area col-md-12">
				<form method="post" action="">
					<button type="submit" name="add_button">Add New</button>
					<br/><br/>
					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">
  <li><a href="#">Shubham Mishra</a></li>
  <li><a href="#">Saurav Bhatia</a></li>

  <li><a href="#">Nirbhay Triphati</a></li>
  </ul>
  

  
				</form>
			</div>
		</div>
	</div>

<?php
if (isset($_POST['add_button'])) {
	header('Location: addnew.php');
}

?>


	<!-- Show Data -->
	<div class="container text-center">
		<div class="row">
			<div class="show_data_area col-md-12">
				<table class="table col-md-12">
					<tr class="success">
						<td>#</td>
						<td>Name</td>
						<td>Phone</td>
						<td>Action</td>
					</tr>

					<tr>
						<td>01</td>
						<td>Shubham Mishra
						
						
						
						</td>
						<td><a href="tel:9123250973">9123345367</a></td>
						<td><a class="btn btn-success" href="showdetails.php">Show Details</a></td>
					</tr>
					<tr>
						<td>02</td>
						<td>Saurav Bhatia</td>
						<td><a href="tel:9200957478">9200957478</a></td>
						<td><a class="btn btn-success" href="showdetails.php">Show Details</a></td>
					</tr>
					<tr>
						<td>03</td>
						<td>Nirbhay Triphati</td>
						<td><a href="tel:9171920095">9171920095</a></td>
						<td><a class="btn btn-success" href="showdetails.php">Show Details</a></td>
					</tr>
				
				</table>
			</div>
		</div>
	</div>
	
	
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/scrolltop.js"></script>
	<script src="dist/bootstrap/bootstrap.min.js"></script>
</body>
</html>
