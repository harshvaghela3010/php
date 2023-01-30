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
<form action="login.php" method="POST">
	<h1>LOGIN FORM</h1>
	<label>USERNAME</label><br>
	<input type="text" name="uid" placeholder="Enter Your Username"><br>
	<label>PASSWORD</label><br>
	<input type="" name="password" placeholder="Enter Your Password"><br>
	<input type="submit" value="login" class="a">

</form>
</body>
</html>