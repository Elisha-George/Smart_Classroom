<?php 
include("header.php");


$ooo = "";
$username = $user['username'];
$userCode = $user2['courseCode'];
$post = new Post($con, $username, $userCode);
$checkTeaching = $post->checkTeachingClass();
$checkEnrolled = $post->checkEnrolledClass();
?>

<div class="bg">
    <div class="wrapper" style="background-image: url('assets/img/StudyTime.jpg'); background-size: cover;">

        <?php 
          if ($checkTeaching == true) {
               echo "<div class='teaching'>
             <h2 ><span style='text-decoration: underline; font-weight: bolder; font-size:medium;' class='header'>TEACHING:</span></h2>";
            
               $post->loadTeachingClasses();
               echo "</div>";
          }

          if ($checkEnrolled == true) {
               echo "<div  class='enrolled'>
             <h2><span style='text-decoration: underline; font-weight: bolder; font-size:medium;' class='header'>ENROLLED:</span></h2>";
               $post->loadEnrolledClasses();
               echo "</div>";
             
          }
          if (($checkEnrolled == false) && ($checkTeaching == false)) {
               echo "<div id='nullTeachingEnrolled' >
                         <p>It seems you haven't created or enrolled in any class yet!</p>
                         <p>Click the button below or <i class='fas fa-plus' style='padding:0.4rem; color:inherit'></i> above to start with your class</p>
                         
     <a href='createJoinClass.php'>
     <button class='null-button' style= 'color: white;
     background-color: green;
     width: 12rem;'>Create/Join</button></a>
                     </div>";
          }
          ?>





    </div>
</div>


</body>

</html> 