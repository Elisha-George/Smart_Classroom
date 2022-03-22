<?php 

require 'config/config.php';

require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';


?>

<!-- Form handelers code ends here -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/register_style.css"> -->
<link rel="stylesheet" href="assets/css/styleRegister.css">
<title>Log-In</title>
</head>
<body style="background-image: url(); background-size: cover;
  background-repeat: no-repeat; font-weight: bolder; 
    ">


<br><br>
<?php
include('includes/header.inc.php');
include('includes/topbar.inc.php');?>
<!-- LOGIN BOX (FIRST) START  -->

<div id="first">

<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="register.php" method="POST" id="login-form">
  <div class="form-group">
  <h3 style = "text-align: center";><strong>User Login</strong></h3>
  <hr style="height:2px">
 <!-- <img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter" class="logo img-fluid"> <br> -->

    <label class="label_txt"> Email </label>
    <input type="email" name="log_email" placeholder="Email address" value="<?php if (isset($_SESSION['log_email'])) { echo $_SESSION['log_email'];}?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="log_password" placeholder="Password" class="form-control" required="">
    <br>
      <?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "<span style='color:red; font-size:0.78rem;'>Email or password was incorrect<br><br></span>"; ?>
  </div>

  <button  type="submit" name="login_button" id="button" value="Login" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
<!-- <p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a> </p> -->
 <br>
   <a  id="signup" class="signup"  a href="registerLogin.php">Need an account? Register Here</a>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 

</div>


<!-- LOGIN BOX(FIRST) END -->







</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>