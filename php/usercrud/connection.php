<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="form";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("connectin field" .mysqli_connect_error());
}
echo "ok";

 ?>