<?php 
	require_once('conn.php');
	$id=$_GET['user'];
	$sql="SELECT * FROM user WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$phone=$row['phone'];
	$datas=$row['multipleData'];
	$gender=$row['gender'];
	$place=$row['place'];
	
	if (isset($_POST['update'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$datas=$_POST['data'];
		$allData=implode(",",$datas);
		$gender=$_POST['gender'];
		$place=$_POST['place'];

		$sql="UPDATE user SET fname='$fname',lname='$lname',email='$email',phone='$phone',multipleData='$allData',gender='$gender',place='$place' WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			//echo $result;
			echo header('location:read.php');
		} else {
			die(mysqli_error($conn));
		}
	}
	mysqli_close($conn);
 ?>
<?php include('header.php'); ?>
  	<div class="container my-5">
  		<form class="container" method="post" autocomplete="off">
  			<div class="form-group">
			  <label class="form-label text-light">First Name</label>
			  <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" required>
			</div>
			<div class="form-group">
			  <label class="form-label text-light">Last Name</label>
			  <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>" required>
			</div>
			<div class="form-group">
			  <label class="form-label text-light">Email</label>
			  <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
			  <label class="form-label text-light">Phone</label>
			  <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
			</div>
			<div>
				<input class="form-check-input" type="checkbox" name="data[]" value="JavaScript">
				<label class="form-check-label text-light">JavaScript</label>
				<input class="form-check-input" type="checkbox" name="data[]" value="React">
				<label class="form-check-label text-light">React</label>
				<input class="form-check-input" type="checkbox" name="data[]" value="HTML">
				<label class="form-check-label text-light">HTML</label>
				<input class="form-check-input" type="checkbox" name="data[]" value="CSS">
				<label class="form-check-label text-light">CSS</label>
			</div>
			<div class="my-3">
				<input class="form-check-input" type="radio" name="gender" value="male">
				<label class="form-check-label text-light">Male</label>
				<input class="form-check-input" type="radio" name="gender" value="female">
				<label class="form-check-label text-light">Female</label>
				<input class="form-check-input" type="radio" name="gender" value="no binary">
				<label class="form-check-label text-light">No Binary</label>
			</div>
			<div class="my-3">
				<select class="form-select" name="place">
			  	<option selected>Open this select menu</option>
			  	<option value="Mumbai">Mumbai</option>
			  	<option value="Bangalore">Bangalore</option>
			  	<option value="Kolkata">Kolkata</option>
			  	<option value="Mysore">Mysore</option>
			</select>
		</div>
			<button class="btn btn-success btn-lg my-3" name="update">Update</button>
			<a class="btn btn-success btn-lg my-3 " href="read.php">Back</button></a>
  		</form>
  	</div>
<?php include("footer.php"); ?>