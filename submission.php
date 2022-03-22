<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student</title>
</head>

<?php
    session_start();
    if(isset($_GET['Ass_id'])){
        $assignmentid = $_GET['Ass_id'];
        $assignment_detail = mysqli_connect("localhost","root","","virtualclassroom")->query("select *from assignment where id = $assignmentid");
        $assignment = $assignment_detail->fetch_assoc();
    }
    if(isset($_POST['Submit'])){
        $username = $_SESSION['username'];
        $assignmentid = $_POST['assignmentid'];

            $file_name = $_FILES['file']['name'];
            $file_tmp =$_FILES['file']['tmp_name'];
            move_uploaded_file($file_tmp,"Assignment/".$file_name);

        $assignment_submission = mysqli_connect("localhost","root","","virtualclassroom")->query(
            "INSERT INTO submission_assignment (id, assignment_id, student_username, created_date, submission_file, assignment_marks, status) VALUES (NULL, $assignmentid, '$username', NULL, '$file_name', NULL, 'done')"
        );
    }

    


?>
<body>




    <!-- <div class="p-3 mb-2 bg-success text-white">
        <p class="fs-3">ASSIGNMENT SUBMISSION</p>

    </div> -->

    <div class="container">
        <h2><u>ASSIGNMENT SUBMISSION</u></h2>
        <h5 style="display: block;"><u>ASSIGNMENT DETAILS</u></h5>
        <div class="p-3 mb-2  bg-light text-dark" style="height: 270px; border: 2px solid grey; border-radius: 15px;">
        <?php echo $assignment['Ass_Desc']. "<br>" . "Marks : ". $assignment['Ass_Marks']; ?>
        </div>
        <div>
            <div class="container">
                <h3 style="text-align: center;"><u> SUBMISSION</u></h3>
                <div class="container px-4 mb-5">
                <?php if(isset($assignment_submission)) { ?>  
                    <h2>Assignement Submited !</h2>
                <?php } else{?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="row gx-5">
                        <div class="col" >
                            <div class="p-3 border bg-dark"  >
                                <div class="p-3 mb-2  bg-light text-black" style="height: 270px;
                                border-radius: 20px; ">

                                    <input type="hidden" name="assignmentid" value="<?php echo $assignmentid; ?>">

                                    <div class="mb-3 ">
                                        <label for="formFileMultiple" class="form-label">
                                            <h3>Add Files</h3>
                                        </label>
                                        <input class="form-control mt-4" name="file" type="file" id="formFileMultiple" multiple>
                                    </div>

                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <input class="btn btn-primary mt-4" type="submit" name="Submit" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php } ?>
                



                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>