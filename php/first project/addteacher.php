<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin pannel</title>
	<!-- for icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- for font -->
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mukta&family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Open+Sans&family=Raleway&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- for animation -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	 <style type="text/css">
	 	.admin{
	 		background-color: lightgrey;
	 		height: auto;
	 	}
	 	.menu{
	 		background-color: grey;
	 		height: 745px;
	 	}
	 	.menu h1{
	 		padding-top: 50px;
	 		color: white;
	 		text-align: center;
			font-family: 'Mukta', sans-serif;
			font-weight: 700;
	 	}
	 	table tr td a{
	 		text-decoration: none;
	 		color: white;
	 		font-size: 20px;
	 	}
	 	table{
	 		width: 100%;
	 		height: auto;
	 	}
	 	table tr td{
	 		border: 2px solid #576671;
	 		padding: 20px;
	 	}
	 	.addteacher table tr td{
	 		text-decoration: none;
	 		text-align: center;
	 		color: gray;
	 		font-size: 20px;
	 	}
	 	.addteacher table{
	 		width: 100%;
	 		height: auto;
	 	}
	 	.addteacher table tr td{
	 		border: 2px solid #576671;
	 		padding: 20px;
	 	}
	 	.addteacher input{
	 		width: 100%;
	 	}
	 	.addteacher h1{
	 		padding-top: 50px;
	 		color: gray;
	 		text-align: center;
			font-family: 'Mukta', sans-serif;
			font-weight: 700;
	 	}
	 </style>
</head>
<body>
	<div class="admin container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 menu">
				<table>
					<h1>DASHBOARD</h1>
					<tr>
						<td>
							<a href="addstudent.php">add student</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="viewstudent.php">view student</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="addteacher.php">add teacher</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="viewteacher.php">view teacher</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="viewqueries.php">view queries</a>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 addteacher">
				<h1>teacher registration form</h1>
				<form method="POST" action="#" enctype="multipart/form-data">
				<table>
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" name="name" placeholder="enter name here..."></td>
					</tr>
					<tr>
						<td><label>qualification</label></td>
						<td><input type="text" name="qualification" placeholder="enter qualification here..."></td>
					</tr>
					<tr>
						<td><label>phone number</label></td>
						<td><input type="number" name="phone" placeholder="enter phone number here..."></td>
					</tr>
					<tr>
						<td><label>email</label></td>
						<td><input type="email" name="email" placeholder="enter email here..."></td>
					</tr>
					<tr>
						<td><label>photo</label></td>
						<td><input type="file" name="photos"></td>
					</tr>
					<tr>
						<td><label>select course</label></td>
							<td><select name="course">
								<option>select</option>
								<option value="html">html</option>
								<option value="css">css</option>
								<option value="javascript">javascript</option>
								<option value="bootstrap">bootstrap</option>
								<option value="jquery">jquery</option>
								<option value="php">php</option>
								<option value="python">python</option>
								<option value="react native">react native</option>
								<option value="wordpress">wordpress</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit"> </td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php 

include 'connection.php';

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$qualification=$_POST['qualification'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$photos=$_FILES['photos']['name'];
	$temp_file=$_FILES['photos']['tmp_name'];
	$folder="images/".$photos;
	move_uploaded_file($temp_file, $folder);
	$course=$_POST['course'];

	$sql="INSERT INTO `addteacher`(`name`, `qualification`, `phone`, `email`, `photos`, `course`) VALUES (  '$name','$qualification','$phone','$email','$folder','$course')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		echo "inserted";
	} else {
		echo "error";
	}
	
}
 ?>
