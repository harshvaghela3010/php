<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'connection.php';
// require 'connection.php';
$sql="SELECT * FROM emp INNER JOIN emp1 ON emp.id=emp1.id"; 
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {
	while ($row=mysqli_fetch_assoc($result)) {
		echo 
		"id".$row['id'].
		"fristname".$row['fristname'].
		"lastname".$row['lastname'].
		"email".$row['email'].
		"result".$row['result'].
		"<br>"
		;
	}
}
?>