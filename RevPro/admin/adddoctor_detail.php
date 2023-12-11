<?php include "include/header.php";
$doctor_id = $specialization_id = $hospital_id = "";
$doctor_idErr = $specialization_idErr = $hospital_idErr = "";
$fileUploadErr = $myData = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "images/doctors/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            array_push($fileUploadErr, "File is not an image.");
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        array_push($fileUploadErr, "Sorry, file already exists.");
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 1500000) {
        array_push($fileUploadErr, "Sorry, your file is too large.");
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" &&
        $imageFileType != "png" &&
        $imageFileType != "jpeg" &&
        $imageFileType != "gif"
    ) {
        array_push(
            $fileUploadErr,
            "Sorry, only JPG, JPEG, PNG & GIF files are allowed."
        );
        $uploadOk = 0;
    }

    if (empty($_POST["doctor_id"]) || $_POST["doctor_id"] == 0) {
        $doctor_idErr = "select doctor";
    } else {
        $doctor_id = test_input($_POST["doctor_id"]);
    }

    if (empty($_POST["specialization_id"]) || $_POST["specialization_id"] == 0) {
        $specialization_idErr = "select specialization";
    } else {
        $specialization_id = test_input($_POST["specialization_id"]);
    }

    if (empty($_POST["hospital_id"]) || $_POST["hospital_id"] == 0) {
        $hospital_idErr = "select hospital";
    } else {
        $hospital_id = test_input($_POST["hospital_id"]);
    }

    if (empty($fileUploadErr) && empty($specialization_idErr) && empty($hospital_idErr)) {
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            array_push($fileUploadErr, "Sorry, your file was not uploaded.");
            // if everything is ok, try to upload file
        } else {
            if (
                move_uploaded_file(
                    $_FILES["fileToUpload"]["tmp_name"],
                    $target_file
                )
            ) {
                echo "The file " .
                    htmlspecialchars(
                        basename($_FILES["fileToUpload"]["name"])
                    ) .
                    " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }        
        $sql = "INSERT INTO `doctor_details` (`photo`, `doctorid`, `spid`, `hospid`) VALUES ('$target_file','$doctor_id','$specialization_id','$hospital_id')";
        $isAdded = mysqli_query($conn, $sql);
        if ($isAdded) {
            header("Location: doctor_details.php");
            exit();
        }
    }
}
?>

<!-- MAIN CONTENT-->
<div class="main-content">    
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
                        <div class="card">
                            <div class="card-header">
                                <strong>Add Doctor Details</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="fileToUpload" class=" form-control-label">Select Photo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="fileToUpload" name="fileToUpload" class="form-control-file">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="doctor_id" class=" form-control-label">Select Doctor</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="doctor_id" id="doctor_id" class="form-control">
                                            <option value="0">Please select doctor</option>
                                            <?php
                                            $sql_doctors = "SELECT * FROM `users` WHERE `roleid` = 2";
                                            $doctors = mysqli_query($conn,$sql_doctors);
                                            foreach($doctors as $doctor){
                                            ?>
                                            <option value="<?php echo $doctor['id']?>"><?php echo $doctor['name']?></option>
                                            <?php }?>
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="specialization_id" class=" form-control-label">Select Specialization</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="specialization_id" id="specialization_id" class="form-control">
                                            <option value="0">Please select specialization</option>
                                            <?php
                                            $sql_specializations = "SELECT * FROM `specializations`";
                                            $specializations = mysqli_query($conn,$sql_specializations);
                                            foreach($specializations as $specialization){
                                            ?>
                                            <option value="<?php echo $specialization['id']?>"><?php echo $specialization['specialization']?></option>
                                            <?php }?>
                                        </select>
                                    </div>                               
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hospital_id" class=" form-control-label">Select Hospital</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="hospital_id" id="hospital_id" class="form-control" disabled>
                                            
                                            
                                        </select>
                                    </div>                               
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#doctor_id").change(function () {
            let docId = $(this).val();
            if (docId !== "") {
                // Fetch hospitals based on selected city
                $.get("get_hospitals.php", { userId: docId }, function (options) {
                    $("#hospital_id").html(options).prop("disabled", false);
                });
            } else {
                $("#hospital").html("<option value=''>Select Hospital</option>").prop("disabled", true);                    
            }
        });            
    });
</script>

<?php include('include/footer.php'); ?>