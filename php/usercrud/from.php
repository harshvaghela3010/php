
<?php 
include 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
	<h1>REGISTATION FORM</h1>
	<table>
		<tr>
			<td><label>First Name</label></td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td><label>Last Name</label></td>
			<td><input type="text" name="lname"></td>
		</tr>

		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><label>Confirm Password</label></td>
			<td><input type="password" name="cpassword"></td>
		</tr>
		<tr>
			<td><label>gender</label></td>
			<td><select name="gander">
				<option value="noselect">Select</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td><label>phone</label></td>
			<td><input type="text" name="phone"></td>
		</tr>
		<tr>
			<td><label>address</label></td>
			<td>
				<textarea name="address">
					
				</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="checkbox" name="" class="a"><span>agree your terms and condition</span></td>
		
		</tr>
		<tr>
			<td>images upload</td>
			<td><input type="file" name="fileupload" value="upload file"></td>
		</tr>
		<tr>
			
			<td colspan="2" ><input type="submit" name="submit"  id="d"></td>
		</tr>
		
	</table>
</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$gander=$_POST['gander'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$filename= $_FILES["fileupload"]["name"]; 
	$template= $_FILES["fileupload"]["tmp_name"]; 
	$folder ="images/.$filename";
	move_uploaded_file($template, $folder);
	
	$sql= "INSERT INTO `student`(`fname`, `lname`, `password`, `cpassword`, `gander`, `email`, `phone`, `address`, `img_source`) VALUES ('$fname','$lname','$password','$cpassword','$gander','$email','$phone','$address','$folder')";
	$data=mysqli_query($conn,$sql);
	if ($data) {
		echo "insertd";
	}else{
		echo"error";
	}
}

 ?>