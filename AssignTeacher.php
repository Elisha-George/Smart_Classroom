
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Assignnment</title>
</head>
<body>
  

    
        <div class="container w-75 p-3">
        <?php 

include("header.php");
?>
<br><br>
          <h2><u> ASSIGNMENT DETAILS</u></h2>
          <!-- <h5><u> Teacher Name</u></h5> -->
    
            
          <form method="post" enctype="multipart/form-data">
    
              <div class="form-floating mb-3">
                <input  style="border-radius: 20px;  border: 2px solid grey;" type="text" class="form-control" id="floatingInput" placeholder="name" required name="txttitle">
                <label for="floatingInput">Title</label>
              </div>
              <div class="form-floating">
                <div class="form-floating" style="height: 300px;">
                    <textarea  class="form-control" name="txtDesc"  placeholder="Instructions " id="floatingTextarea2" style="height: 270px; border: 2px solid grey; border-radius: 20px;"></textarea>
                    <label for="floatingTextarea2">Instructions (Optional) </label>
                  </div>
    
                  
                    
                    <input type="file" class="btn btn-primary" name="file">
                   
    
                    <form class="row g-3 mt-2">
    
                      <div class="col-auto ">
                      <label for="">Assign Marks</label>  
                      </div>
                      <div class="col-auto">
                        <label for="input"  class="visually-hidden">Marks</label>
                        <input name="txtmarks" style="border-radius: 20px;  border: 2px solid grey;" type="number" class="form-control" id="input" placeholder="0-100">
                      </div>
                      
                 
                  
    
                      <div class="col-auto ">
                      <label for="">Due Date</label>  
                      </div>
                      <div class="col-auto">
                        <label for="input" class="visually-hidden">Date</label>
                        <input name="txtdate" style="border-radius: 20px;  border: 2px solid grey;" type="date" class="form-control" id="input" placeholder="dd/mm/yy">
                      </div>
                 
                    <div class="d-grid gap-2 mt-2">
                      
                      <button style="height: 50px; font-size: larger; font-weight: bolder; border-radius: 10px;" class="btn btn-primary" type="submit" name="btnSave">Upload Assignment</button>
                    </div>
    
                  </form>
    
                
              </div>
    
            <?php 
            
            if(isset($_POST["btnSave"]))
            {
              $title = $_POST['txttitle'];
              $desc = $_POST['txtDesc'];
              $marks= $_POST['txtmarks'];
              $dueDate= $_POST['txtdate'];  
              $techname =  $_SESSION['username'];
              $file_name = $_FILES['file']['name'];
              $file_tmp =$_FILES['file']['tmp_name'];

              
              move_uploaded_file($file_tmp,"Assignment/".$file_name);

              $query ="INSERT INTO assignment VALUES ('','$title','$desc', '$file_name', '$marks','$dueDate','$techname')";
              $res = mysqli_query($con, $query);
                 
            }
           
            
            ?>
    
              
    
         
            
    
              
    
             
         
          </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>