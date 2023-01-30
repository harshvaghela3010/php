<?php 
session_start()

 ?>
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
<form action="#" method="POST" autocomplete="off">
	<h1>LOGIN FORM</h1>
	<label>USERNAME</label><br>
	<input type="email" name="username" placeholder="Enter Your Username"><br>
	<label>PASSWORD</label><br>
	<input type="" name="password" placeholder="Enter Your Password"><br>
	<input type="submit" value="login" class="a" name="login">

</form>
</body>
</html>
<?php 
include 'connection.php';
	error_reporting(1);	
if (isset($_POST['login'])) {
	$email =$_POST['username'];
	$password =$_POST['password'];

	$sql="SELECT * FROM 

	 WHERE email='$email' && password='$password'";

	$data =mysqli_query($conn,$sql);
	$result =mysqli_num_rows($data);
	// echo $result;
	if ($result ==1) {
		$_SESSION['user_name']=$email;
		echo "login successfully";
		header('location:select.php');
	}else{
		echo "login failed";
	}
}

 ?>