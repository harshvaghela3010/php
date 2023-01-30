<?php 

include 'connection.php';
$sql="SELECT * FROM contact";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {

 ?>

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
	 	.column th{
	 		color: black;
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
	 	.viewqueries{
	 		overflow-x: auto;
	 	}
	 	.viewqueries table{
	 		margin-top: 100px;
	 		border: 2px solid #576671;
	 	}
	 	.viewqueries table th{
	 		border: 2px solid #576671;
	 		text-align: center;
	 		color: grey;
	 	}
	 	.viewqueries h1{
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
			<div class="col-lg-9 col-md-9 col-sm-12 viewqueries">
				<h1>Queries</h1>
				<table>
					<tr class="column">
						<th>roll number</th>
						<th>name</th>
						<th>phone number</th>
						<th>email address</th>
						<th>course</th>
					</tr>

<?php 

while ($row=mysqli_fetch_assoc($result)) {
	echo "
	<tr>
		<th>".$row['roll_no']."</th>
		<th>".$row['name']."</th>
		<th>".$row['phone_no']."</th>
		<th>".$row['email']."</th>
		<th>".$row['course']."</th>
	</tr>";
}
}
 ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>