<?php include('include/header.php');

$nameErr = $emailErr = $genderErr = $phoneErr = $addressErr = $cityidErr = $roleidErr = "";
$id = $name = $email = $gender = $phone = $address = $cityid = $roleid = "";
$doctor_id = $specialization_id = $hospital_id = "";
$doctor_idErr = $specialization_idErr = $hospital_idErr = "";
$fileUploadErr = $myData = [];

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = test_input($_GET['ID']);
    if(isset($_GET['Action']) && $_GET['Action'] == 'Edit') {
        $get_sql = "SELECT *, `users`.`id` as id FROM `users` LEFT JOIN `doctor_details` ON `users`.`id` = `doctor_details`.`doctorid` WHERE `doctor_details`.`id` = $id;";
        $doctor_detail = mysqli_query($conn,$get_sql);
        
        foreach($doctor_detail as $detail) {
            $myData = $detail;
            $id = $detail['id'];
            $name = $detail['name'];
            $email = $detail['email'];
            $gender = $detail['gender'];
            $phone = $detail['phone'];
            $Address = $detail['Address'];
            $cityid = $detail['cityid'];
            $roleid = $detail['roleid'];
            $photo = $detail['photo'];
            $doctor_id = $detail['doctorid'];
            $specialization_id = $detail['spid'];
            $hospital_id = $detail['hospid'];            
        }
    }    
}

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
    if (empty($_POST["name"])) {
        $nameErr = "Name is required!";
    } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Please enter your email!";
    } else {
        $email = test_input($_POST['email']);
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

    if (empty($nameErr) && empty($emailErr) && empty($fileUploadErr) && empty($specialization_idErr) && empty($hospital_idErr)) {
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
        $sql = "INSERT INTO `users` (`name`, `email`) VALUES ('$name','$email')";
        $isAdded = mysqli_query($conn, $sql);
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
    <?php pr($myData);?>  
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Doctor's Details</strong>
                            </div>
                            <div class="card-body card-block">
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Static</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static">Username</p>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="fullName" class=" form-control-label">Full Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="fullName" name="name" placeholder="Enter Full Name" class="form-control" value="<?php echo $name; ?>" required>
                                        <small class="text-danger Invalid Feedback"><?php echo $nameErr; ?></small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" value="<?php echo $email; ?>" required>
                                        <small class="help-block form-text"><?php echo $emailErr;?></small>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                        <small class="help-block form-text">Please enter a complex password</small>
                                    </div>
                                </div> -->
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Select Gender</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="female" class="form-check-label">
                                                <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" class="form-check-input">Female &nbsp;
                                            </label>
                                            <label for="male" class="form-check-label">
                                                <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" class="form-check-input">Male &nbsp;
                                            </label>
                                            <label for="other" class="form-check-label">
                                                <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>  value="other" class="form-check-input">Other &nbsp;
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="address" class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="address" id="address" rows="3" placeholder="Type complete address here." class="form-control"><?php echo $Address;?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="phone" class=" form-control-label">Phone</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="tel" id="phone" name="phone" placeholder="Enter phone" class="form-control" value="<?php echo $phone; ?>" required>
                                        <small class="help-block form-text"><?php echo $phoneErr;?></small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="cityid" class=" form-control-label">City</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="cityid" id="cityid" class="form-control">
                                            <option value="0">Please select City</option>
                                            <?php
                                            $sql_cities = "SELECT * FROM `cities`";
                                            $cities = mysqli_query($conn,$sql_cities);
                                            foreach($cities as $city){
                                            ?>
                                            <option value="<?php echo $city['id']?>" <?php if (isset($cityid) && $cityid==$city['id']) echo "selected";?>><?php echo $city['city']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="fileToUpload" class=" form-control-label">Photo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img src="<?php echo $photo;?>" alt="">
                                    </div>
                                </div>                               
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
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="selectLg" class=" form-control-label">Select Large</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="selectSm" class=" form-control-label">Select Small</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                            <option value="4">Option #4</option>
                                            <option value="5">Option #5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="disabledSelect" class=" form-control-label">Disabled Select</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="multiple-select" class=" form-control-label">Multiple select</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                            <option value="4">Option #4</option>
                                            <option value="5">Option #5</option>
                                            <option value="6">Option #6</option>
                                            <option value="7">Option #7</option>
                                            <option value="8">Option #8</option>
                                            <option value="9">Option #9</option>
                                            <option value="10">Option #10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Radios</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Checkboxes</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Inline Checkboxes</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                            </label>
                                            <label for="inline-checkbox2" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                            </label>
                                            <label for="inline-checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="file-input" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                    </div>
                                </div> -->
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
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
        $("#cityid").change(function () {
            let city_id = $(this).val();
            if (city_id !== "") {
                // Fetch hospitals based on selected city
                $.get("get_hospitalsbycityid.php", { cityid: city_id }, function (options) {
                    $("#hospital_id").html(options).prop("disabled", false);
                });
            } else {
                $("#hospital").html("<option value=''>Select Hospital</option>").prop("disabled", true);                    
            }
        });            
    });
</script>
<?php include('include/footer.php'); ?>