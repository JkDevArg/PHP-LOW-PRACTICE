<?php
	require_once('conn.php');
	if (isset($_POST['submit'])) {
		$place=$_POST['place'];

		$sql="INSERT INTO selectdata (place) VALUES ('$place')";

		$result=mysqli_query($conn,$sql);
		if(!$result){
			die(mysql_error($conn));
		}
	}
mysqli_close($conn);
?>
<?php include('header.php'); ?>
	<div class="container my-5">
		<form method="post">
			<select class="form-select" name="place">
			  <option selected>Open this select menu</option>
			  <option value="Mumbai">Mumbai</option>
			  <option value="Bangalore">Bangalore</option>
			  <option value="Kolkata">Kolkata</option>
			  <option value="Mysore">Mysore</option>
			</select>
			<div class="my-5">
				<button type="submit" name="submit" class="btn btn-info my-5">Submit</button>
			</div>
		</form>
	</div>
<?php include("footer.php"); ?>