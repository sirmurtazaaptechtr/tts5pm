<?php
include('include/header.php');
$role = $description = $roleErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['role'])) {
        $roleErr = "Role is Required";
    } else {
        $role = test_input($_POST['role']);
    }
    $description = test_input($_POST['description']);

    if ($roleErr == "") {
        $sql = "INSERT INTO `roles` (`role`, `description`) VALUES ('$role', '$description')";
        $isAdded = mysqli_query($conn, $sql);
        if ($isAdded) {
            header('Location: roles.php');
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
                                <strong>Add Role</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Role</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="role" placeholder="Enter Role" class="form-control" value="<?php echo $role; ?>" required>
                                        <small class="text-danger Invalid Feedback"><?php echo $roleErr; ?></small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="description" placeholder="Enter Description" class="form-control" value="<?php echo $description; ?>">
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

<?php
include('include/footer.php');
?>