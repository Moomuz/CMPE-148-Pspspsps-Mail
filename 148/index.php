<?php
include("src/config.php"); //run session_start() firstly
//session_destroy(); //this function will make you every time log out
afterUserLogin();

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Pspsps Mail</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- modal -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/board.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"> </script>
		<script src="assets/js/drag.js"></script>
		<link rel="icon" type="image/png" href="\148\assets\images\icons\pspspsps.png"/>
	</head>

	<body>
			<div id="background">

					<body>
</br>
					<td><a href='/148/logout.php' style="color: F7AA52"><h3 style="margin: 0 auto; padding: 0 25px">Logout</h3></a></td>

					<div id="header" style="width: 80%; margin: 0 auto; margin-bottom: 50px; color: white; background-color: rgba(117, 110, 103, 0.75); border-radius: 40px">
						<h1 style="text-align:center; padding-top: 20px; font-size: 70px;"><?php echo "Welcome, " . $_SESSION['userLoggedIn']?></h1>
						<h3 style="text-align:center; padding-bottom: 20px"><?php echo "Today's Date is: " . date("m-d-Y",time()) ?></h3>
					</div>
					<!-- &nbsp tabs-->
					<center>
					<button type="button" name="AddButton" id="AddButton" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" style="font-size: 16px">New Message</button>
					</center>
					</br>
						<div class="row" style="width:80%; margin:0 auto;">




							<div id="todo">
							<div class="column" style="width:33.33%; margin:15 auto; background-color: #F7E6D9; border: 3px solid #756E67; border-radius: 15px">
								<div class="title" style="color: #756E67">Mail</div>
								<?php
									//use this line if you want to filter by ProjectID as well
									//$result = mysqli_query($con,"Select description From cards WHERE `column` = 2 and `projectID` = 4");
									//we need to grab the users name.
									//we need to grab the sent date and then turn that into date. strtotime() use this
									$user = $_SESSION['userLoggedIn'];
									$result = mysqli_query($con,"Select * From messages WHERE `recipient` = '" . $user . "' AND `messageType` = 1");
									$count = mysqli_num_rows($result);
									$now = time();
									while($row = mysqli_fetch_array($result)){
										echo "<div id="."item2"." draggable=true>";
										echo "<div class="."'card'"."style="."'text-align: center;padding: 2px 0px;border-radius: 5px;font-weight: bold;color: #756E67;background-color: white;border: 1px solid #756E67;margin: 10px;'".">";
										echo "Date Sent: " . $row['dateSent'] ;
										echo "</br>";
										echo "From ".$row['sender'].": ";
										echo "<h6>".$row['message']."</h6>";
										echo "</div>";
										echo "</div>";
									}

									?><!--
									<div id="item2" draggable="true">
										<div class="card">
											Team Peer Reviews DUE 5/1
										</div>
									</div> -->
								</div>
							</div>

							<div id="Important Message">
								<div class="column" style="width:33.33%; margin:15 auto; background-color: #F7E6D9; border: 3px solid #756E67; border-radius: 15px">
									<div class="title" style="color: #756E67">Important Messages</div>
								<?php
									//use this line if you want to filter by ProjectID as well
									//$result = mysqli_query($con,"Select description From cards WHERE `column` = 2 and `projectID` = 4");
									$user = $_SESSION['userLoggedIn'];
									$result = mysqli_query($con,"Select * From messages WHERE `recipient` = '" . $user . "' AND `messageType` = 2");
									$count = mysqli_num_rows($result);
									$now = time();
									while($row = mysqli_fetch_array($result)){
										echo "<div id="."item2"." draggable=true>";
										echo "<div class="."'card'"."style="."'text-align: center;padding: 2px 0px;border-radius: 5px;font-weight: bold;color: #756E67;background-color: white;border: 1px solid #756E67;margin: 10px;'".">";
										echo "Date Sent: " . $row['dateSent'] ;
										echo "</br>";
										echo "From ".$row['sender'].": ";
										echo "<h6>".$row['message']."</h6>";
										echo "</div>";
										echo "</div>";
									}

									?><!--
									<div id="item2" draggable="true">
										<div class="card">
											Team Peer Reviews DUE 5/1
										</div>
									</div> -->
								</div>
							</div>

							<div id="Work Message">
								<div class="column" style="width:33.33%; margin:15 auto; background-color: #F7E6D9; border: 3px solid #756E67; border-radius: 15px">
									<div class="title" style="color: #756E67">Work Messages</div>
								<?php
									//use this line if you want to filter by ProjectID as well
									//$result = mysqli_query($con,"Select description From cards WHERE `column` = 2 and `projectID` = 4");
									$user = $_SESSION['userLoggedIn'];
									$result = mysqli_query($con,"Select * From messages WHERE `recipient` = '" . $user . "' AND `messageType` = 3");
									$count = mysqli_num_rows($result);
									$now = time();
									while($row = mysqli_fetch_array($result)){
										echo "<div id="."item2"." draggable=true>";
										echo "<div class="."'card'"."style="."'text-align: center;padding: 2px 0px;border-radius: 5px;font-weight: bold;color: #756E67;background-color: white;border: 1px solid #756E67;margin: 10px;'".">";
										echo "Date Sent: " . $row['dateSent'] ;
										echo "</br>";
										echo "From ".$row['sender'].": ";
										echo "<h6>".$row['message']."</h6>";
										echo "</div>";
										echo "</div>";
									}
									?><!--
									<div id="item2" draggable="true">
										<div class="card">
											Team Peer Reviews DUE 5/1
										</div>
									</div> -->
								</div>
							</div>


					</div>

			</div>

  </div>
 </div>
</div>

	</body>



  <!-- Modal 1 to Add cards -->
<div id="add_data_Modal" class="modal fade" >
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h2 class="title">New Message</h2>
   </div>
   <div class="modal-body">
    <form method="POST" id="insert_form" action="index.php" >
	<label class="title">To:</label>
	<input type="text" name="recipient"  class="form-control" autocomplete="off" />
	<br />
	<label class="title">Select Type of Message to send</label>
     <select name="column"  class="form-control">
	  <option disabled selected value> -- select a message type -- </option>
      <option value="1">Mail</option>
	  <option value="2">Important Message</option>
	  <option value="3">Work Message</option>
	 </select>
	 <br />
	 <label class="title">Message:</label>
     <input type="text" name="description"  class="form-control" />
     <br />

     <input type="submit" name="insert" id="insert" value="Send Message" class="btn btn-success" autocomplete="off" required>

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>


   </html>




<?php
	// Send the message by adding it into the server
	$messageType = $_POST['column'];
	$theMessage = $_POST['description'];
	$sendTo = $_POST['recipient'];
	$now = time();
	$date = date("m-d-Y",$now);
	$sender = $_SESSION['userLoggedIn'];

	if(isset($_POST['column'])){
		$sql = "INSERT INTO messages VALUES (NULL, '$sender', '$sendTo', '$messageType', '$theMessage', '$date' )";
		if (mysqli_query($con, $sql)) {
			//echo "<script type='text/javascript'>alert('$theDesc');</script>";
			echo "<meta http-equiv='refresh' content='0'>";
		} else {
			echo "<script type='text/javascript'>alert('ERROR');</script>";
			echo "<meta http-equiv='refresh' content='0'>";
		}

	}else{

	}

	function afterUserLogin(){
		// if login in successfully, for index.php, user login
		if (isset($_SESSION['userLoggedIn'])) {
			$userLoggedIn = $_SESSION['userLoggedIn'];
		}else{
			header("Location: register.php");
		}
	}
?>
