<?php
	require_once('conn.php');
?>
<?php include 'header.php'; ?>
	<div class="container my-3">
		<form method="post" class="d-flex">
        		<input class="form-control me-2" type="text" name="search" placeholder="Search" autocomplete="off">
        		<button class="btn btn-outline-success" name="submit" type="submit">Search</button>
        	<div class="result"></div>
      	</form>
      	<div class="container my-3">
      		<table class="table text-light">
      			<?php
      				if(isset($_POST['submit'])){
      					$search=$_POST['search'];
      					$sql="SELECT * FROM user WHERE id LIKE '%$search%' or fname LIKE '%$search%' or lname LIKE '%$search%'";
      					 $result=mysqli_query($conn,$sql);
      					if($result){
      						if(mysqli_num_rows($result) > 0){
      							echo '<thead>
      							<tr>
      							<th>Sl no</th>
      							<th>First Name</th>
      							<th>Last Name</th>
      							</tr>
      							</thead>';
      							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	      							echo '<tbody>
	      							<tr>
	      								<td><a href="searchData.php?data='.$row['id'].'">'.$row['id'].'</a></td>
	      								<td>'.$row['fname'].'</td>
	      								<td>'.$row['lname'].'</td>
	      							</tr>
	      							</tbody>';
      							}
      						}else{
      							echo "<p class='text-danger'>No matches found</p>";
      						}
      					}
      				}
      			?>
      		</table>
      	</div>
    </div>

<?php include 'footer.php'; ?>