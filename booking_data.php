<?php 
	/* DATABASE Connection*/
	include "config/db_conf.php";
	include "config/db_functions.php";
	$conn=db_connect();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booking Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

		<script src="custom.js"></script>

		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">USER NAME</th>
					      <th scope="col">USER MOBILE NUMBER</th>
					      <th scope="col">USER EMAIL ID</th>
					      <th scope="col">BOOKING DAY</th>
					      <th scope="col">BOOKING TIME</th>
					      <th scope="col">BOOKING DATE</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					      	$query = "select * from user_booking_master";
							$result = mysqli_query($conn, $query);
							if(mysqli_num_rows($result) > 0){
								while($rows = mysqli_fetch_assoc($result)){
					      ?>
					    <tr>
					      <th scope="row"><?php echo $rows['user_id']; ?></th>
					      <td><?php echo $rows['user_name']; ?></td>
					      <td><?php echo $rows['user_number']; ?></td>
					      <td><?php echo $rows['user_email']; ?></td>
					      <td><?php echo $rows['user_days']; ?></td>
					      <td><?php echo $rows['user_time']; ?></td>
					      <td><?php echo $rows['user_date']; ?></td>
					    </tr>
					    <?php } } ?>
					  </tbody>
					</table>
				</div>
				<div class="booking_data_wrap">
					<button type="button" class="btn btn-info" name="booking_data"><a href="index">Back</a></button>
				</div>
			</div>
		</div>
	</body>
</html>