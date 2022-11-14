<?php
	require('fnc.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"mart");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$password = "";

	$query = "select * from user";
?>


<!DOCTYPE html>
<html>
<body>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){

						$name = $row['name'];
						$email = $row['email'];
						$mobile = $row['mobile'];
						$address = $row['address'];
				?>
						<tr>
							
							<td><?php echo $name;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $mobile;?></td>
							<td><?php echo $address;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>