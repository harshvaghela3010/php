<?php 
include 'connection.php';
error_reporting(0);
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<style type="text/css">
			table{

				width: 100%;
				background-color: red;
			}
			table,tr,td,th{
				border: 2px solid black;
			}
		</style>
	</head>
	<body>
	<table>
		<tr>
			<th>firstname</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>password</th>
			<th>cpassword</th>
			<th>gander</th>
			<th>email</th>
			<th>phone</th>
			<th>address</th>
			<th>img_source</th>
			<th colspan="2">operations</th>


		</tr>
	
	
	<?php
	while ($row=mysqli_fetch_assoc($result)) {
		echo "
		<tr>
		<td>".$row['id']."</td>
		<td>".$row['fname']."</td>
		<td>".$row['lname']."</td>
		<td>" .$row['password']."</td>
		<td>".$row['cpassword']."</td>
		<td>".$row['gander']."</td>
		<td>".$row['email']."</td>
		<td>".$row['phone']."</td>
		<td>".$row['address']."</td>
		<td><img src='".$row['img_source']."' height='50px'></td>
		<td><a href='update.php?id=$row[id]' class='up'>updates</a></td>
		<td><a href='delete.php?id=$row[id]' class='de'>delete</a></td>
		</tr>

		";
}
}else
{echo 
	"error";
}

 ?>
 </table>
 </body>
	</html>
		<!-- echo 
		"firstname: " .$row['fname']. 
		"lastname" .$row['lname']. 
		"password " .$row['password']. 
		"cpassword " .$row['cpassword'].
		"gander " .$row['gander'].
		"email " .$row['email']. 
		"phone " .$row['phone'].   
		"address"  .$row['address']. 
		"<br>
		"
		;
	} -->