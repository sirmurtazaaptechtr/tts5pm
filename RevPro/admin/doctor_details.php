<?php require('include/header.php');
if(isset($_GET['ID'])) {
    $id = test_input($_GET['ID']);
    if(isset($_GET['Action']) && $_GET['Action'] == 'Delete') {
        $del_sql = "DELETE FROM `doctor_details` WHERE `id` = $id";
        $isDeleted = mysqli_query($conn,$del_sql);
        if($isDeleted) {
            header("Location: doctor_details.php");
            exit;
        }
    }    
}

$sql = "SELECT *, `doctor_details`.`id` AS ddid FROM `doctor_details`
        JOIN `users` ON `doctor_details`.`doctorid` = `users`.`id`
        JOIN `specializations` ON `doctor_details`.`spid` = `specializations`.`id`
        JOIN `hospitals` ON `doctor_details`.`hospid` = `hospitals`.`id`
        JOIN `cities` ON `hospitals`.`cityid` = `cities`.`id`";
$doctor_details = mysqli_query($conn, $sql);

// echo "<pre>";
// print_r($doctor_details);
// echo "</pre>";
// pr($doctor_details);

// foreach ($doctor_details as $doctor_detail) {
    // echo "<pre>";
    // print_r($doctor_detail);
    // echo "</pre>";
    // pr($doctor_detail);
// }
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
            <a href="adddoctor_detail.php" type="button" class="btn btn-dark text-white">
                <i class="fa fa-plus"></i>&nbsp; Add doctor_detail
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
                                    <th>Photo</th>
                                    <th>Doctor ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Specialization ID</th>
                                    <th>Specialization</th>
                                    <th>Hospital ID</th>
                                    <th>Hospital</th>                                    
                                    <th>City ID</th>                                    
                                    <th>City</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $srno = 1; foreach($doctor_details as $doctor_detail) {?>
                                <tr>
                                    <td><?php echo $srno;?></td>
                                    <td><?php echo $doctor_detail['ddid'];?></td>
                                    <td><?php echo $doctor_detail['photo'];?></td>
                                    <td><?php echo $doctor_detail['doctorid'];?></td>
                                    <td><?php echo $doctor_detail['name'];?></td>
                                    <td><?php echo $doctor_detail['gender'];?></td>
                                    <td><?php echo $doctor_detail['email'];?></td>
                                    <td><?php echo $doctor_detail['phone'];?></td>
                                    <td><?php echo $doctor_detail['Address'];?></td>
                                    <td><?php echo $doctor_detail['spid'];?></td>
                                    <td><?php echo $doctor_detail['specialization'];?></td>
                                    <td><?php echo $doctor_detail['hospid'];?></td>
                                    <td><?php echo $doctor_detail['hospital_name'];?></td>
                                    <td><?php echo $doctor_detail['cityid'];?></td>
                                    <td><?php echo $doctor_detail['city'];?></td>
                                    <td><a href="?ID=<?php echo $doctor_detail['ddid'];?>&Action=Delete">Delete</a> | <a href="">Edit</a></td>
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