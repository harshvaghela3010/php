<?php 	
$uid=$_POST['uid'];
$pwd=$_POST['password'];

if ($uid=='hk' and $pwd=='hk123') {
	session_start();
	$_SESSION['sid']=session_id();
	echo "login successfully";
}
?>