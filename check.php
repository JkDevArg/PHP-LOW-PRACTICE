<?php 
	require_once('conn.php');
	if(isset($_POST['submit'])){
		$datas=$_POST['data'];
		$allData=implode(",",$datas);
		//echo $allData;

		$sql="INSERT INTO multipledata (checkBoxData) VALUES ('$allData')";
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "Inserted Succesfully";
		} else {
			die(mysql_error($conn));
		}
	}
	mysqli_close($conn);
?>

<?php include('header.php'); ?>
  	<div class="container my-5">
  		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  			<div class="card-header">CHECKBOX PRO</div>
			<div class="card-body">
		  		<form method="post">
			  		<div class="form-check my-3">
			  			<input class="form-check-input" type="checkbox" name="data[]" value="JavaScript">
						<label class="form-check-label">
							JavaScript
						</label>
					</div>
					<div class="form-check my-3">
			  			<input class="form-check-input" type="checkbox" name="data[]" value="React">
						<label class="form-check-label">
							React
						</label>
					</div> 
					<div class="form-check my-3">
			  			<input class="form-check-input" type="checkbox" name="data[]" value="HTML">
						<label class="form-check-label">
							HTML
						</label>
					</div>
					<div class="form-check my-3">
			  			<input class="form-check-input" type="checkbox" name="data[]" value="CSS">
						<label class="form-check-label">
							CSS
						</label>
					</div>  		
					<button class="btn btn-dark my-3" name="submit" type="submit">Submit</button>	
		  		</form>
		  	</div>
	  	</div>
  	</div>
<?php include("footer.php"); ?>