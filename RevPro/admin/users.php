<?php 
include('include/header.php');

if(isset($_GET['ID'])) {
    $id = test_input($_GET['ID']);
    if(isset($_GET['Action']) && $_GET['Action'] == 'Delete') {
        $del_sql = "DELETE FROM `roles` WHERE `id` = $id";
        $isDeleted = mysqli_query($conn,$del_sql);
        if($isDeleted) {
            header("Location: roles.php");
            exit;
        }
    }    
}

$sql = "SELECT * FROM `users` JOIN `cities` ON `users`.`cityid` = `cities`.`id` JOIN `roles` ON `users`.`roleid` = `roles`.`id`";
$users = mysqli_query($conn,$sql);
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
            <a href="adduser.php" type="button" class="btn btn-dark text-white">
                <i class="fa fa-plus"></i>&nbsp; Add User
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $srno = 1; foreach($users as $user) {?>
                                <tr>
                                    <td><?php echo $srno;?></td>
                                    <td><?php echo $user['id'];?></td>
                                    <td><?php echo $user['name'];?></td>
                                    <td><?php echo $user['email'];?></td>
                                    <td><?php echo $user['gender'];?></td>
                                    <td><?php echo $user['phone'];?></td>
                                    <td><?php echo $user['Address'];?></td>
                                    <td><?php echo $user['city'];?></td>
                                    <td><?php echo $user['role'];?></td>
                                    <td><a href="?ID=<?php echo $user['id'];?>&Action=Delete">Delete</a> | <a href="">Edit</a></td>
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
<?php
include('include/footer.php');
?>