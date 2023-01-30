

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login form</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		form{
			width: 30%;
			background-color: lightblue;
			margin: auto;
			display: block;
			height: 300px;
		/*	padding-left: 30px*/;
			text-align: center;
			margin-top: 30px;
			padding-top: 30px;
		}
		input{
			padding-left: 10px;
			width: 80%;
			margin-bottom: 20px;
			border-radius: 15px;
		}
		label{
			float: left;
			padding-left: 30px;
		}
	h1{
		text-align: center;
		margin-bottom: 30px;
	}
	.a{
		background-color: black;
		color: wheat;
	}
	</style>
</head>
<body>
<form action="#" method="get" autocomplete="off">
	<h1>LOGIN FORM</h1>
	<label>USERNAME</label><br>
	<input type="email" name="username" placeholder="Enter Your Username"><br>
	<label>PASSWORD</label><br>
	<input type="password" name="password" placeholder="Enter Your Password"><br>
	<input type="submit" class="a" name="login" value="login">

</form>
</body>
</html>
<?php 
require 'connection.php'; 
	// error_reporting(1);	
if (isset($_GET['login'])) {
	$username =$_GET['username'];
	$password =$_GET['password'];

	$sql="SELECT * FROM student WHERE email='$username' && cpassword=' $password'";

	$data =mysqli_query($conn,$sql);
	$total =mysqli_num_rows($data);
 	// echo $total;
 	if ($total ==1) {
 		echo "login ok";
 	}else{
 		echo "login faild";
		
  	
}
}
?>
