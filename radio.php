<?php

	require_once('conn.php');
	if(isset($_POST['submit'])){

		$gender=$_POST['gender'];
		$sql="INSERT INTO radioData (gender) VALUES ('$gender')";
		$result=mysqli_query($conn,$sql);
		if(!$result){
			die(mysqli_error($conn));
		}
	}

//radioData SQL table
mysqli_close($conn);
?>
<?php include('header.php'); ?>
  	<div class="container my-5">
  		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  			<div class="card-header">RADIO PRO</div>
			<div class="card-body">
		  		<form method="post">
		  			<div class="form-check my-3">
		  				<input class="form-check-input" type="radio" name="gender" value="male">
		  				<label class="form-check-label text-light">
						    Male
						</label>
		  			</div>
		  			<div class="form-check my-3">
		  				<input class="form-check-input" type="radio" name="gender" value="female">
		  				<label class="form-check-label text-light">
						    Female
						</label>
		  			</div>
		  			<div class="form-check my-3">
		  				<input class="form-check-input" type="radio" name="gender" value="no binary">
		  				<label class="form-check-label text-light">
						    No Binary
						</label>
		  			</div>
		  		<button class="btn btn-dark my-3" type="submit" name="submit">Submit</button>
		  		</form>
  			</div>
  		</div>
  	</div>
<?php include("footer.php"); ?>