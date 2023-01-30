<?php 	
session_start();
echo "welcome ".$_SESSION['user_name'];
 ?>
<?php 
include"connection.php";
error_reporting(0);
$coder=$_SESSION['user_name'];
if ($coder== true) {
	
}else{
	header('location:loginfrom.php');
}
$sql="SELECT * FROM logint";
$result =mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<button><a href="loginfrom.php">logout</a> </button>
		<h1>HK CLASSES SURENDRAGAR</h1>
		<button><a href="userinput.php">add</a></button>
	<table border="3" class="tb">
		<tr>
		<th>id</th>
		<th>file</th>
		<th>email</th>
		
		<th>email</th>
		<th colspan="2">operations</th>

		</tr>
	</body>
	<?php
	while ($row=mysqli_fetch_assoc($result)) {
		echo"<tr>
			<td>".$row["id"]."</td>
			<td><img src='".$row['file_source']."'height=50px' 'width=50px'></td>
			<td>".$row["file_source"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["password"]."</td>
			<td><a href='update.php?id=$row[id]' class='up'>updates</a></td>
			<td><a href='delete.php?id=$row[id]' class='de'>delete</a></td>

			</tr>";
	}
}else{
	echo "error:";
	}

 ?>
 	</table>
</html>