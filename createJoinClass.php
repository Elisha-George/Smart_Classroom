<?php 
include("header.php");
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
?>

<?php 
        
        if(isset($_POST['joinClass_button'])) {
        	echo '
             <script>
               $(document).ready(function(){
                 $("#first").hide();
                 $("#second").show();
               });
             </script>
        	';
        }
	 ?>
<div class="bg">
    
<!-- style=" background-color: #ecf9f2;" -->

    <div class="wrapper" style="background-image: url('assets/img/StudyTime.jpg'); background-size: cover;">


        <div class="creatClass_box" style="border: 2px solid green; ">  	
			
            <div id="first" >
                <div class="creatClass_header" style="border-radius: 10px; border: 2px solid green; background-color: #40bf80;">
                    <h1>Create Class</h1>
                </div>

			   <form action="createJoinClass.php" method="POST">
					<input type="text" name="className" autocomplete="off" placeholder="Class Name" value = "<?php 
					// if(isset($_SESSION['className'])){
				    //    echo $_SESSION['className'];
					// } 
					?>" >
				   	<br>

				    <input type="text" name="section" autocomplete="off" placeholder="Section" value = "<?php 
					// if(isset($_SESSION['section'])){
				    //    echo $_SESSION['section'];
					// } 
					?>" >
				    <br>

				    <input type="text" name="subject" autocomplete="off" placeholder="Subject/Course Code" value = "<?php 
					// if(isset($_SESSION['subject'])){
				    //    echo $_SESSION['subject'];
					// } 
					?>" >
				    <br>

                    <button style="background-color: #40bf80; color: white; border: 1px solid green;" class="cancel_button"><a href="index.php">Cancel</a></button>
				     <button style="background-color: #40bf80; color: white ;border: 1px solid green;" type="sumbit" name="createClass_button" id ="create_class_button">Create</button>
	                <br>
                    <br>
                    <a href="#" id="joinClass" class="joinClass">Want to join a Class? Click Here</a>
		     		 </form>
             </div>
             
             <div id="second">
                    <div class="joinClass_header" style=" border-radius: 10px; border: 2px solid green; background-color: #40bf80;">
                        <h1>Join class</h1>
                    </div>

                        <form action="createJoinClass.php" method="POST">
                                <input type="text" name="code" placeholder="Class code" autocomplete="off" value = "<?php 
                                if(isset($_SESSION['code'])){
                                echo $_SESSION['code'];
                                } 
                                ?>">
                                <br>
                                <button  style="background-color: #40bf80; color: white ; border: 1px solid green;" class="cancel_button" ><a href="index.php">Cancel</a></button>
                                <button   style="background-color: #40bf80; color: white;  border: 1px solid green;" type="sumbit" name="joinClass_button" id="create_class_button">Join</button>
                                
                                <br>
                                <br>
                                <a href="#" id="createClass" class="createClass">Want to create a new Class? Click here!</a>
                                </form>
                   
            </div>
     </div>          
</div>
               
                    
		 </div>   

 
</div> 
</body>
</html>