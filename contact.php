<?php
include('includes/header.inc.php');
include('includes/topbar.inc.php');
$con = mysqli_connect("localhost", "root", "", "virtualclassroom");

?>
<br><br><br>

<div class="container my-4">
        <h2>Contact Us</h2>
        <form method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input  name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"required>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select your Query</label>
                <input  name="query" type="text" class="form-control" id="exampleFormControlInput1" placeholder="e.g Web/ Technology.....etc" required>

            </div>
            <br>
          

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tell us about yourself</label>
                <textarea  name="txtAbout" class="form-control" id="exampleFormControlTextarea1" rows="3" required ></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Elaborate Your Concern</label>
                <textarea  name="txtConcern" class="form-control" id="exampleFormControlTextarea2" rows="3" required></textarea>
            </div>
            <br>
            <div class="d-grid gap-2">
  <button  name="btnSub" class="btn btn-primary" type="submit">Submit</button>

</div>
        </form>

    </div>

<?php
if(isset($_POST["btnSub"]))
{
  $email = $_POST['email'];
  $abt_query = $_POST['query'];
//   $student= $_POST['checkStd'];
//   $professor= $_POST['checkteach'];  
  $about =  $_POST['txtAbout'];
  $concern = $_POST['txtConcern'];

  $query = "INSERT INTO about VALUES ('','$email','$about','$concern','$abt_query')";
  $res = mysqli_query($con, $query);


  echo "$email, $concern,$about,$abt_query";

}
include('includes/footer.inc.php');
?>