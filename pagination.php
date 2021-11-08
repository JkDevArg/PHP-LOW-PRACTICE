<?php 

	require_once('conn.php');
?>

<?php include 'header.php'; ?>
	<div class="container my-5">
		<table class="table table-dark table-hover">
			<thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">F. Name</th>
			      <th scope="col">L. Name</th>
			      <th scope="col">Phone</th>
			    </tr>
			</thead>
			<tbody>
				<?php
					$sql="SELECT * FROM user";
					$result=mysqli_query($conn,$sql);
					$num=mysqli_num_rows($result);
					$numberPages=10;
					$totalPages=ceil($num/$numberPages);
					//echo $totalPages;
					for ($btn=1;$btn<=$totalPages;$btn++) { 
						echo '<a href="pagination.php?page='.$btn.'" class="text-light" ><button class="btn btn-info mx-1 mb-3">'.$btn.'</button></a>';
					}
					if (isset($_GET['page'])) {
						$page=$_GET['page'];
						//echo $page;
					}else{
						$page=1;
					}

					$startingLimit=($page-1)*$numberPages;
					$sql="SELECT * FROM user LIMIT ".$startingLimit.','.$numberPages;
					$result=mysqli_query($conn,$sql);

					while ($row=mysqli_fetch_assoc($result)) {
						echo '<tr>
			      		<th scope="row">'.$row['id'].'</th>
			      		<td>'.$row['fname'].'</td>
			      		<td>'.$row['lname'].'</td>
			      		<td>'.$row['phone'].'</td>
			    		</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
<?php include 'footer.php'; ?>