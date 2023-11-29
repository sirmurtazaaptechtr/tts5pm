<?php require('include/header.php');
$sql = "SELECT * FROM `cities`";

$cities = mysqli_query($conn, $sql);

// echo "<pre>";
// print_r($cities);
// echo "</pre>";
// pr($cities);

// foreach ($cities as $city) {
    // echo "<pre>";
    // print_r($city);
    // echo "</pre>";
    // pr($city);
// }
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
            <a href="addcity.php" type="button" class="btn btn-dark text-white">
                <i class="fa fa-plus"></i>&nbsp; Add City
            </a>
            </div>          
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Sr. #</th>
                                    <th>ID</th>
                                    <th>City Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $srno = 1; foreach($cities as $city) {?>
                                <tr>
                                    <td><?php echo $srno;?></td>
                                    <td><?php echo $city['id'];?></td>
                                    <td><?php echo $city['city'];?></td>
                                    <td><a href="">Delete</a> | <a href="">Edit</a></td>
                                </tr>
                                <?php $srno++; }?>    
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
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
<?php require('include/footer.php'); ?>