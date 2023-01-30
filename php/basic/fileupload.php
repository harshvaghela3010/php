 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>File Upload</title>
 </head>
 <body>
<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="uploadfile"><br><br>
	<input type="submit" name="submit" >
</form>

 </body>
 </html>

 <?php 
 error_reporting(0);
$folder ="/images";
// $filename=$_FILES["uploadfile"]["name"];
// $temp_name=$_FILES["uploadfile"]["tmp_name"];
// $folder= "images/".$filename;
// echo $folder;
// move_uploaded_file($temp_name, $folder);
$file =$_FILES['uploadfile'] ['name'];
$temp_name =$_FILES['uploadfile'] ['tmp_name'];
// print_r($file);
$forlder="images/".$file;
echo $forlder;
move_uploaded_file($temp_name, $forlder);
 ?>