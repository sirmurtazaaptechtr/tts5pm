<?php include('include/header.php');

$city_name = $city_nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["city_name"])) {
        $city_nameErr = "City Name is required";
    } else {
        $city_name = test_input($_POST['city_name']);
    }

    if (empty($city_nameErr)) {
        $sql = "INSERT INTO `cities` (`city`) VALUES ('$city_name')";
        $isAdded = mysqli_query($conn, $sql);
        if ($isAdded) {
            header('Location: cities.php');
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
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">City Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="city_name" placeholder="Enter City's Name" class="form-control" value="<?php echo $city_name; ?>" required>
                                        <small class="text-danger Invalid Feedback"><?php echo $city_nameErr; ?></small>
                                    </div>
                                </div>

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