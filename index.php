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
												<select class="form-control">
													<option value="All">All</option>
													<option value="Monday">Monday</option>
													<option value="Tuesday">Tuesday</option>
													<option value="Wednesday">Wednesday</option>
													<option value="Thuresday">Thuresday</option>
													<option value="Friday">Friday</option>
													<option value="Saturday">Saturday</option>
													<option value="Sunday">Sunday</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Select Time Slot </span>
												<select class="form-control">
													<option value="10:00 AM - 10:30 AM">10:00 AM - 10:30 AM</option>
													<option value="10:30 AM - 11:00 AM">10:30 AM - 11:00 AM</option>
													<option value="11:00 AM - 11:30 AM">11:00 AM - 11:30 AM</option>
													<option value="11:30 AM - 12:00 PM">11:30 AM - 12:00 PM</option>
													<option value="12:00 PM - 12:30 PM">12:00 PM - 12:30 PM</option>
													<option value="12:30 PM - 01:00 PM">12:30 PM - 01:00 PM</option>
													<option value="01:00 PM - 01:30 PM">01:00 PM - 01:30 PM</option>
													<option value="01:30 PM - 02:00 PM">01:30 PM - 02:00 PM</option>
													<option value="02:00 PM - 02:30 PM">02:00 PM - 02:30 PM</option>
													<option value="02:30 PM - 03:00 PM">02:30 PM - 03:00 PM</option>
													<option value="03:00 PM - 03:30 PM">03:00 PM - 03:30 PM</option>
													<option value="03:30 PM - 04:00 PM">03:30 PM - 04:00 PM</option>
													<option value="04:00 PM - 04:30 PM">04:00 PM - 04:30 PM</option>
													<option value="04:30 PM - 05:00 PM">04:30 PM - 05:00 PM</option>
													<option value="05:00 PM - 05:30 PM">05:00 PM - 05:30 PM</option>
													<option value="05:30 PM - 06:00 PM">05:30 PM - 06:00 PM</option>
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
