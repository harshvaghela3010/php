<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="fileupload">
	<input type="submit" name="submit" >
</form>
</body>
</html>
<?php
error_reporting(0);

$filename= $_FILES["fileupload"]["name"]; 
$template= $_FILES["fileupload"]["tmp_name"]; 
$folder ="images/.$filename";
echo $folder;
move_uploaded_file($template, $folder);

 ?>