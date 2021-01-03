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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-push-5">
							<div class="booking-form">
								<form method="post" name="booking-form" action="">
									<div class="form-group">
										<span class="form-label">Your Name</span>
										<input class="form-control" type="text" placeholder="Enter your name">
									</div>

									<div class="form-group">
										<span class="form-label">Mobile Number</span>
										<input class="form-control" type="text" placeholder="Enter your Number">
									</div>

									<div class="form-group">
										<span class="form-label">Email ID</span>
										<input class="form-control" type="text" placeholder="Enter your Email ID">
									</div>

									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Select Days</span>
												<select id="days" class="form-control">
													<option value="None">-- Select Days --</option>
												<?php
													$query = "select * from booking_days";
													$result = mysqli_query($conn, $query);
													if(mysqli_num_rows($result) > 0){
														while($rows = mysqli_fetch_assoc($result)){
												?>
														<option value="<?php echo $rows['days_id']; ?>"><?php echo $rows['days']; ?></option>
												<?php } } ?>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Select Time Slot </span>
												<select class="form-control">
													<option value="None">-- Select Time Slots --</option>
												<?php
													$query = "select * from booking_timeslots";
													$result = mysqli_query($conn, $query);
													if(mysqli_num_rows($result) > 0){
														while($rows = mysqli_fetch_assoc($result)){
												?>
													<option value="<?php echo $rows['timeslots_id	']; ?>"><?php echo $rows['timeslots']; ?></option>
												<?php } } ?>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										 <div class="col-sm-4">
											<div class="form-group">
												<div class="form-group">
												<span class="form-label">Select Date</span>
												<input class="form-control" type="date">
											</div>
											</div>
										</div>  
									</div>
									<div class="form-btn">
										<button class="submit-btn">Submit Your Booking</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
