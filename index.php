<?php
 	require_once('conn.php');
 	if(isset($_POST['submit'])){
 		$fname=$_POST['fname'];
 		$lname=$_POST['lname'];
 		$email=$_POST['email'];
 		$phone=$_POST['phone'];
 		$datas=$_POST['data'];
 		$allData=implode(",",$datas);
 		$gender=$_POST['gender'];	
 		$place=$_POST['place'];

 		$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
 		$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
 		$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 		$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
 		$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
 		//$allData = mysqli_real_escape_string($conn, $_REQUEST['allData']);	
 		$place = mysqli_real_escape_string($conn, $_REQUEST['place']);

 		$sql="INSERT INTO `user` (fname,lname,email,phone,multipleData,gender,place) VALUES ('$fname','$lname','$email','$phone','$allData','$gender','$place')";

 		$result=mysqli_query($conn,$sql);

 		if (!$result) {
 			die(mysqli_error($conn));
    	} else {
 			echo header('location:read.php');
 		}
 	}
?>
<?php include('header.php'); ?>
    <div class="container my-5">
    	<form method="post" autocomplete="off">
    	<div class="mb-3 text-light">
		  <label class="form-label">First Name</label>
		  <input type="text" class="form-control" name="fname" placeholder="Enter your first name" required>
		</div>
		<div class="mb-3 text-light">
		  <label class="form-label">Last Name</label>
		  <input type="text" class="form-control" name="lname" placeholder="Enter your last name" required>
		</div>
		<div class="mb-3 text-light">
		  <label class="form-label">Email</label>
		  <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
		</div>
		<div class="mb-3 text-light">
		  <label class="form-label">Phone number</label>
		  <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
		</div>
		<div class="my-3">
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
		<button class="btn btn-success btn-lg my-5" name="submit">Submit</button>
	</form>
    </div>

<?php include("footer.php"); ?>