<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
	<link rel="stylesheet" type="text/css" href="dist/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Header Area -->
	<div class="container text-center">
		<div class="row">
			<div class="header col-md-12">
				<a href="index.html"><h1> Phone Book</h1></a>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<div class="row">
			<div class="head_page col-md-12">
				<h2>Details of : Shubham Mishra</h2>
			</div>
		</div>
	</div>

	<!-- User Image -->
	<div class="container user-image">
		<div class="row">
			<img class="img-user-details" src="img/img1.jpg">
		</div>
	</div>

	<div class="container">
		<div class="row">
			<form action="" method="post" class="col-md-12" enctype="multipart/form-data">
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Name: </label>
					<input class="col-md-8" type="text" name="name" placeholder="" value="">
				</div>
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Phone No: </label>
					<input class="col-md-8" type="text" name="phone" placeholder="" value="">
				</div>
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Email: </label>
					<input class="col-md-8" type="email" name="email" placeholder="" value="">
				</div>
				<div class="sigle-input col-md-12">
					<label class="col-md-3">Address: </label>
					<input class="col-md-8" type="text" name="address" placeholder="" value="">
				</div>
				
				<div class="sigle-input col-md-12 text-center submit-data">
					<input class="col-md-2" type="submit" name="update" value="Update">
					<input class="col-md-2" type="reset" name="reset" value="Reset">
					<input class="col-md-2" type="submit" name="delete" value="Delete">
				</div>
			</form>
		</div>
	</div>


	<?php

$servername="localhost";
	$username="root";
	$password="";
	$dbname="project";
	
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	
			$q="select * from detail";
			 
	
			$query_num=mysqli_query($conn,$q);
	
	
			?>
	  
	
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">Id</th>
		  <th scope="col">Name</th>
		  <th scope="col">phone</th>
		  <th scope="col">email</th>
		  <th scope="col">address</th>
	
		  
	
	
		  
	  </thead>
	
	  <tbody>
		  <?php
		  if(mysqli_num_rows($query_num)>0)
		  {
			  while($row= mysqli_fetch_assoc($query_num))
			  {
				  ?>
	
			  
	
	
		  
		<tr>
		  
		  <td><?php echo $row['id']; ?></td>
		  <td><?php echo $row['name'];  ?></td>
		<td><?php echo $row['phone'];  ?></td>
		<td><?php echo $row['email'];  ?></td>
		
		<td><?php echo $row['address'];  ?></td>
		
		  
		  
		  
		 
		</tr>
		<?php
	}
	}
	else
	{
		echo "no record";
	}
	  ?>


    

	
	
	

	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/scrolltop.js"></script>
	<script src="dist/bootstrap/bootstrap.min.js"></script>
</body>
</html>
