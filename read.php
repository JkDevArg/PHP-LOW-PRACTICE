<?php 
	require_once('conn.php');

?>

<?php include('header.php'); ?>
    <div class="container my-5">
    	<table class="table table-dark table-hover">
    		<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">F. Name</th>
			      <th scope="col">L. Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Phone</th>
			      <th scope="col">Code</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Place</th>
			      <th scope="col">Action</th>
			    </tr>
			</thead>
			<tbody>
			<?php
				$sql="SELECT * FROM user";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result)){
					$id=$row['id'];
					$fname=$row['fname'];
					$lname=$row['lname'];
					$email=$row['email'];
					$phone=$row['phone'];
					$datas=$row['multipleData'];
					$gender=$row['gender'];
					$place=$row['place'];
					echo '<tr>
						    <th scope="row">'.$id.'</th>
						    <td>'.$fname.'</td>
						    <td>'.$lname.'</td>
						    <td>'.$email.'</td>
						    <td>'.$phone.'</td>
						    <td>'.$datas.'</td>
						    <td>'.$gender.'</td>
						    <td>'.$place.'</td>
						    <td>
						    	<a href="update.php?user='.$id.'" class="btn btn-info">Update</a>
						    	<a href="delete.php?user='.$id.'" class="btn btn-danger">Delete</a>
						   	</td>
						</tr>';
				}
			?>
			</tbody>
		</table>
    </div>

<?php include("footer.php"); 
mysqli_close($conn); ?>