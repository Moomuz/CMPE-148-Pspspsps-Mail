<?php
	ob_start();
    session_start();

	$timezone = date_default_timezone_set("America/Los_Angeles");//google search php timezone

	$con = mysqli_connect("localhost", "root", "", "team6");
	if($con){
       // echo "Connected database successfully";
    }
	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}

?>
