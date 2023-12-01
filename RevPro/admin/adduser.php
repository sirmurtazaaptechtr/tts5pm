<?php include('include/header.php');

$nameErr = $emailErr = $genderErr = $phoneErr = $addressErr = $cityidErr = $roleidErr = "";
$name = $email = $gender = $phone = $address = $cityid = $roleid = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    if (empty($nameErr) && empty($emailErr) ) {
        $sql = "INSERT INTO `users` (`name`, `email`) VALUES ('$name','$email')";
        $isAdded = mysqli_query($conn, $sql);
        if ($isAdded) {
            header('Location: users.php');
            exit;
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
                                <strong>Add User</strong>
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
                                                <input type="radio" id="female" name="gender" value="female" class="form-check-input">Female &nbsp;
                                            </label>
                                            <label for="male" class="form-check-label">
                                                <input type="radio" id="male" name="gender" value="male" class="form-check-input">Male &nbsp;
                                            </label>
                                            <label for="other" class="form-check-label">
                                                <input type="radio" id="other" name="gender" value="other" class="form-check-input">Other &nbsp;
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="address" class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="address" id="address" rows="3" placeholder="Type complete address here." class="form-control"></textarea>
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
                                        <label for="city" class=" form-control-label">City</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="city" id="city" class="form-control">
                                            <option value="0">Please select City</option>
                                            <?php
                                            $sql_cities = "SELECT * FROM `cities`";
                                            $cities = mysqli_query($conn,$sql_cities);
                                            foreach($cities as $city){
                                            ?>
                                            <option value="<?php echo $city['id']?>"><?php echo $city['city']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="role" class=" form-control-label">Role</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="role" id="role" class="form-control">
                                            <option value="0">Please select role</option>
                                            <?php
                                            $sql_roles = "SELECT * FROM `roles`";
                                            $roles = mysqli_query($conn,$sql_roles);
                                            foreach($roles as $role){
                                            ?>
                                            <option value="<?php echo $role['id']?>"><?php echo $role['role']?></option>
                                            <?php }?>
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

<?php include('include/footer.php'); ?>