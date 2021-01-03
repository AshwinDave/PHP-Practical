<?php 

/* DATABASE Connection*/
include "config/db_conf.php";
include "config/db_functions.php";
$conn=db_connect();

if(isset($_POST['booking_submit'])){

	$user_name 	 = mysqli_real_escape_string($conn, $_POST['user_name']);
	$user_number = mysqli_real_escape_string($conn, $_POST['user_number']);
	$user_email  = mysqli_real_escape_string($conn, $_POST['user_email']);
	$user_days   = mysqli_real_escape_string($conn, $_POST['user_days']);
	$user_time   = mysqli_real_escape_string($conn, $_POST['user_time']);
	$user_date   = mysqli_real_escape_string($conn, $_POST['user_date']);

	$query = "select * from `user_booking_master` where user_email='$user_email' AND user_days='$user_days' AND user_time='$user_time' AND user_date='$user_date'";
	echo $query;exit;
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) == 1){
		echo "<script> alert('You Have already booking'); return false;</script>";
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
