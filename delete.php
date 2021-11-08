<?php 
	require_once('conn.php');
	$id=$_GET['user'];
	$sql="DELETE FROM user WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo header('location:read.php');
	} else {
		die(mysqli_error($conn));
	}
	mysqli_close($conn);
?>