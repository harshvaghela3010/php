<?php 
include 'connection.php';
$sql="INSERT INTO emp(`id`,`fristname`,`lastname`,`email`) VALUES('1','HK','CLASSES','HKCLASSES@GMAIL.COM')";

if (mysqli_query($conn,$sql)) {
	echo "INSERTED";
}else{
	echo "error";
}
?>