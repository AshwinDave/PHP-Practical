<?php 
/* DATABASE Connection */
include "config/db_conf.php";
include "config/db_functions.php";
$conn=db_connect();
$errors_name = $errors_number = $errors_email = $errors_days = $errors_time = $errors_date =''; /* Error Variable Defined*/
if(isset($_POST['booking_submit'])){

	$user_name   = mysqli_real_escape_string($conn, $_POST['user_name']);
	$user_number = mysqli_real_escape_string($conn, $_POST['user_number']);
	$user_email  = mysqli_real_escape_string($conn, $_POST['user_email']);
	$user_days   = mysqli_real_escape_string($conn, $_POST['user_days']);
	$user_time   = mysqli_real_escape_string($conn, $_POST['user_time']);
	$user_date   = mysqli_real_escape_string($conn, $_POST['user_date']);

	if($user_name == ''){
		$errors_name = "Enter Your Name";
	}elseif($user_number == ''){
		$errors_number = "Enter Your Mobile Number";
	}elseif($user_email == ''){
		$errors_email = "Enter Your Email ID";
	}elseif($user_days == ''){
		$errors_days = "Select Your Days";
	}elseif($user_time == ''){
		$errors_time = "Select Timeslots";
	}elseif($user_date == ''){
		$errors_date = "Select Dates";
	}else{
		$query = "select * from `user_booking_master` where user_email='$user_email' AND user_date='$user_date'";
		
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result) == true){

			echo "<script> sweetAlert('Hi,', 'You have already booking ', 'error');</script>";
			return false;
		}else{
			
			$insert_query = "INSERT INTO `user_booking_master`(`user_id`, `user_name`, `user_number`, `user_email`, `user_days`, `user_time`, `user_date`, `inserted_date`) VALUES (NULL,'$user_name','$user_number','$user_email','$user_days','$user_time','$user_date',now())";
			$insert_result = mysqli_query($conn, $insert_query);

			if($insert_result){
				header('location: index.php');
			}else{
				echo "<script> alert('Somthing Went Wrong'); </script>";
			}
		}
	}
}
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
					<div class="row">
						<div class="col-md-7 col-md-push-5">
							<div class="booking-form">
								<form method="post" name="booking-form">
									<div class="form-group">
										<span class="form-label">Your Name</span>
										<input class="form-control" name="user_name" type="text" placeholder="Enter your name">
										<span class="error"><?php echo $errors_name; ?></span>
									</div>

									<div class="form-group">
										<span class="form-label">Mobile Number</span>
										<input class="form-control" name="user_number" type="text" placeholder="Enter your Number">
										<span class="error"><?php echo $errors_number; ?></span>
									</div>

									<div class="form-group">
										<span class="form-label">Email ID</span>
										<input class="form-control" name="user_email" type="email" placeholder="Enter your Email ID">
										<span class="error"><?php echo $errors_email; ?></span>
									</div>

									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Select Days</span>
												<select id="days" class="form-control" name="user_days">
													<option value="None">-- Select Days --</option>
												<?php
													$query = "select * from booking_days";
													$result = mysqli_query($conn, $query);
													if(mysqli_num_rows($result) > 0){
														while($rows = mysqli_fetch_assoc($result)){
												?>
														<option value="<?php echo $rows['days']; ?>"><?php echo $rows['days']; ?></option>
												<?php } } ?>
												</select>
												<span class="select-arrow"></span>
												<span class="error"><?php echo $errors_days; ?></span>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Select Time Slot </span>
												<select class="form-control" name="user_time">
													<option value="None">-- Select Time Slots --</option>
												<?php
													$query = "select * from booking_timeslots";
													$result = mysqli_query($conn, $query);
													if(mysqli_num_rows($result) > 0){
														while($rows = mysqli_fetch_assoc($result)){
												?>
													<option value="<?php echo $rows['timeslots']; ?>"><?php echo $rows['timeslots']; ?></option>
												<?php } } ?>
												</select>
												<span class="select-arrow"></span>
												<span class="error"><?php echo $errors_time; ?></span>
											</div>
										</div>
										 <div class="col-sm-4">
											<div class="form-group">
												<div class="form-group">
													<span for="inputDate">Date</span>
	          										<input type="input" placeholder="mm/dd/yy" name="user_date" class="form-control" id="datepicker">
	          										<span class="error"><?php echo $errors_date; ?></span>
												</div>
											</div>
										</div>  
									</div>
									<div class="form-btn">
										<input type="Submit" class="submit-btn" name="booking_submit" value="Submit Your Booking">
									</div>
								</form>
							</div>
							<div class="booking_data_wrap">
								<button type="button" class="btn btn-info" name="booking_data"><a href="booking_data">Booking Table</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
