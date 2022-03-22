<?php 
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
include("includes/classes/User.php");
include("includes/classes/User2.php");
include("includes/classes/Post.php");

   if(isset($_SESSION['username'])){
		 $userLoggedIn  = $_SESSION['username'];
		 $userLoggedIn2  = $_SESSION['username'];
		 $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
		 $user_details_query2 = mysqli_query($con, "SELECT * FROM createclass WHERE username = '$userLoggedIn2' ORDER BY id DESC");
		 $user = mysqli_fetch_array($user_details_query);
		 $user2 = mysqli_fetch_array($user_details_query2);
   }
   else{
   	header("Location:register.php");
   }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Smart- C</title>

	<!-- javaScripts -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="assets\js\createJoinClass.js"></script>
			<script src="assets/js/demo.js"></script>
			<script src="assets/js/jquery.jcrop.js"></script>
	    <script src="assets/js/jcrop_bits.js"></script>

	<!-- css -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets\css\styling.css">
	
		<!-- for tab image -->
		<link rel="shortcut icon" type="image/png" href="assets/images/background/graduation.png">
		<link rel="stylesheet" href="assets/css/jquery.Jcrop.css" >
</head>

<body>
  
  <!-- <div class="background"></div> -->
	<div class="top_bar"  style="background-color: #40bf80 ; height: 55px; padding-top:5px">
		<div class="logo">
			<a style= "text-decoration: underline; font-weight: bolder;" href="index.php" style="text-decoration: none"><i class="fa fa-graduation-cap"></i> Smart Classroom</a>
		</div>
             <div class="icon">
					<nav>

						<!-- CODE FOR NOTIFICATIONS  -->
						
						<?php 
							//Unread notifications 
							$notifications = new User2($con, $userLoggedIn);
							$num_notifications = $notifications->getUnreadNumber();
						?>
						<i class="fa fa-user"></i>
					<a style="font-weight: bolder; font-size: 23px;" href="<?php echo $userLoggedIn; ?>">
									<?php echo $user['first_name'] ?>
									<!-- THIS WILL BE SHOWN WHEN HOVER ON USERNAME  -->
									<span  class="tooltiptext">Profile</span>
					</a>

					<!-- FONT AWSOME ICONS -->
					<a href="index.php"><i class="fas fa-home"></i>
							<span class="tooltiptext">Home</span>
							</a>
					
							<!-- <a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'notification')"><i class="fas fa-bell"></i>  
								<?php
								if($num_notifications > 0)
								echo '<span class="notification_badge" id="unread_notification">' . $num_notifications . '</span>';
								?>
							<span class="tooltiptext">Notifications</span>
							</a> -->
					<a href="createJoinClass.php"><i class="fa fa-plus-square"></i>
							<span class="tooltiptext">Create or Join Class</span>
							</a>
							<a href="includes/handlers/logout.php">
							<i class="fas fa-power-off"></i>
							<span class="tooltiptext">Logout</span>
							</a>

				</nav>
				
				</div>
			
			</div>
	

	