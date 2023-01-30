<?php 
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `student` WHERE id='$id'";

if (mysqli_query($conn,$sql)) {
	echo "
	<script>
		confirm('your data deleted');
	</script>
	";
	?>
	 <meta http-equiv="refresh" content="1; url = http://localhost/usercrud/select.php" />
	<?php
}

else{
	echo "error";
}
 ?>