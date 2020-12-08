<?php
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("index.php"); //to redirect back to "index.php" after logging out

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pspsps Mail - You have been logged out</title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/board.css">
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<link rel="icon" type="image/png" href="\148\assets\images\icons\pspspsps.png"/>
	</head>
	<body>
		<div id="background">
			<div id="main" style ="width: 80%; margin: 25px auto; padding: 25px; background-color: rgba(117, 110, 103, 0.75); border-radius: 40px">
				<h1 style="text-align:center; font-size: 70px">Pspsps Mail</h1>
				<br/><br/><br/>
				<center>
					<h4 style="text-align:center; font-size: 40px">Thank You for Using Pspsps Mail!</h4>
					<h4 style="text-align:center; font-size: 20px">You have been logged out click <td><a href='/148/index.php' style="color: #F7AA52">here</a></td> to return home.</h4>
				</center>
			</div>
		</div>

	</body>
</html>
