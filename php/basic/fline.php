<html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>File Upload</title>
 </head>
 <body>
<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="uploadfile"><br><br>
	<input type="submit" name="submit">
</form>
 </body>
 </html>
<?php 	
	// $folder="/images";
	$filename=$_FILES['uploadfile']['name'];
	$file_tmp=$_FILES['uploadfile']['tmp_name'];
	$folder= "images/".$filename;
 	echo $folder;
 	move_uploaded_file($file_tmp,$folder);
 ?>