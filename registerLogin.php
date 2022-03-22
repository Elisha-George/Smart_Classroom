<?php 
require 'config/config.php';

require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/styleRegister.css">
<title>Sign Up</title>
</head>
<body style="background-color: url(img/tips-for-taking-online-clases.jpg); background-size: cover;
  background-repeat: no-repeat; font-weight: bolder;">



<br><br>
<?php
include('includes/header.inc.php');
include('includes/topbar.inc.php');?>



        <!-- REGISTER BOX STARTED -->
   
   <div class="container d-flex justify-content-center"  >
  <div class="row" >
    <div  class="col-sm-4">
    </div>
     <div class="col-sm-4">

   
      <!-- <img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter" class="logo img-fluid">  -->
    </div>
     <div class="col-sm-4">
    </div>
  </div>
	<div class="row" >

		</div>
		<div class="col-sm-4">
      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here... </a> </div>
      <?php } else { ?>
       <div class="signup_form" style= " border-radius: 20px;background-color:white; height: 100%;   margin-top: 40px;">
       <h3 style = "text-align: center; padding-top:20px;";><strong>User Sign-up </strong></h3>
       <hr style="height:2px; width: 80%; margin: auto">
       <form action="" method="POST" style="color: black; ">
  <div class="form-group">
  	
        <label class="label_txt">First Name</label>
    <input type="text" name="reg_fname" class="form-control" placeholder="First name"value="<?php if (isset($_SESSION['reg_fname'])) {echo $_SESSION['reg_fname'];} ?>" required="">
    

     <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; ?>
 
    </div>
  <div class="form-group">
    <label class="label_txt">Last Name </label>
    <input type="text" class="form-control"name="reg_lname" placeholder="Last name"value="<?php if (isset($_SESSION['reg_lname'])) {echo $_SESSION['reg_lname'];} ?>" required>
  </div>
  

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="reg_email" placeholder="Email" value="<?php  if (isset($_SESSION['reg_email'])) {echo $_SESSION['reg_email'];} ?>" required>
  </div>

  

  <div class="form-group">
    <label class="label_txt">Confirm Email </label>
    <input type="email" name="reg_email2" placeholder="Confirm email"  class="form-control" value="<?php if (isset($_SESSION['reg_email2'])) {echo $_SESSION['reg_email2'];} ?>" required="">
    

<?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
else if (in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
else if (in_array("Email do not match<br>", $error_array)) echo "Email do not match<br>"; ?>
</div>
  

 
<div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="reg_password" placeholder="Password"  class="form-control"  required="">
  </div>


   <div class="form-group">
    <label class="label_txt">Confirm Password </label>
    <input  type="password" name="reg_password2" placeholder="Confirm password" class="form-control" required="">
  </div>
  <br>
  
  <button type="submit" name="register_button" id="button" value="Register" class="btn btn-primary btn-group-lg form_btn">SignUp</button>
  <br><br>
  <?php if (in_array("<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>", $error_array)) echo "<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>"; ?>
  
  
  <a  id="signin" class="signin" a href="Login.php">Already have an account? Sign In</a>
</form>
<?php } ?> 
</div>
		</div>


	</div>


</div>
</div>
<br>

<!-- REGISTER BOX ENDED -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>