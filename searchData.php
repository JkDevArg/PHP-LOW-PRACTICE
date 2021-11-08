<?php
	require_once('conn.php');
?>

<?php include 'header.php';?>
<div class="container text-light my-3">
<?php	
	$data=$_GET['data'];
	//echo $data;
	$sql="SELECT * FROM user WHERE id=$data";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		$row=mysqli_fetch_assoc($result);
		echo '';
	}
?>
</div>
<div class="container text-light">
	<div class="jumbotron">
		<div class="jumbotron">
		  <h1 class="display-4">Hello, <?php echo $row['fname'];  echo ' '.$row['lname']; ?> </h1>
		  <p class="lead">Your email is: <span class="text-warning"><?php echo $row['email']; ?></span><br>
		  	Your phone is: <span class="text-info"><?php echo $row['phone']; ?></span><br>
		  	Your Code: <span class="text-info"><?php echo $row['multipleData']; ?></span><br>
		  	Your Gender: <span class="text-info"><?php echo $row['gender']; ?></span><br>
		  	Your Place: <span class="text-info"><?php echo $row['place']; ?></span></p>
		  <hr class="my-4">
		  <p></p>
		  <a class="btn btn-primary btn-lg" href="search.php" role="button">Back</a>
		</div>
	</div>
</div>
<?php include 'footer.php';?>
