<?php 
include 'connection.php';
session_start();
$coder=$_SESSION['user_name'];
if ($coder== true) {
	
}else{
	header('location:loginfrom.php');
}
// error_reporting(0);
$id=$_GET['id'];
$sql="SELECT * FROM logint WHERE id='$id'";
$data=mysqli_query($conn,$sql);
mysqli_num_rows($data);
$row=mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
	<style type="text/css">
		form{
			width: 500px;
			margin: auto;
			height: 400px;
			background-color: lightblue;
			border-radius: 30px;
		}
		label{
			padding-bottom: 20px;
			text-transform: uppercase;
			margin-left: 20px;
		}
		.s{
			width: 200px;
			height: 35px;
			background-color: black;
			color: white;
			margin-top: 20px;
			margin-left: 150px;
			border-radius: 18px;
		}
		.s:hover{
			background-color: lightcoral;
			color: black;
		}
		input{
			width: 80%;
			margin-left: 20px;
			height: 25px;
			border-radius: 10px;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
	<h1>HK CLASSES</h1>
	<label>id</label>
	<input type="text" name="id" value="<?php echo $row['id'];?>">
	<label>IMAGES UPLOAD</label><br><br>
	<input type="file" name="uploadfile"value="<?php echo $row['file_source'];?>"><br>
	<label>email</label><br><br>
	<input type="email" name="email" placeholder="Enter Your Email"value="<?php echo $row['email'];?>"><br>
	<label>password</label><br><br>
	<input type="password" name="password" placeholder="Enter your password" value="<?php echo $row['password'];?>"><br>
	<input type="submit" name="submit" class="s">
</form>
</body>
</html>
<?php 
error_reporting(1);
// include 'connection.php';
if (isset($_POST["submit"])) {
	$id = $_POST["id"];
	$filename= $_FILES["uploadfile"]["name"];
	$temp_name= $_FILES["uploadfile"]["tmp_name"];
	$folder= "images/".$filename;
	move_uploaded_file($temp_name, $folder);
	$email= $_POST["email"];
	$password= $_POST["password"];
}
	// $sql="INSERT INTO `logint`(`id`, `file_source`, `email`, `password`) VALUES ('$id','$folder','$email','$password')";
$sql ="UPDATE logint SET id='$id', file_source='$folder',email='$email',password='$password' WHERE id='$id'";
	if (mysqli_query($conn,$sql)) {
		echo " <script>
     alert('your data successfull updated ');
   </script>";
	}else{
		echo "error;";
	}

?>