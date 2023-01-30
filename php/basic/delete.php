<?php 	
include'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM logint WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo "
 		<script>
    		alert('your data successfull delete ');
   	</script>
	";
	?>
		 <meta http-equiv="refresh" content="1; url = http://localhost/basic/select.php"/>
	<?php
}else{
	echo "error";
}
?>