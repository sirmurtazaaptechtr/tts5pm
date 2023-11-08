<?php
    include('header.inc.php');        
    $showteachers_sql = "SELECT *,users.id as userid FROM `users` LEFT JOIN `cities` ON users.city_id = cities.id WHERE users.type = 'teacher'";
    $rows = mysqli_query($conn,$showteachers_sql);    
    
    if(isset($_GET['id']) && $_GET['action'] == 'delete') {
      $user_id = $_GET['id'];
      $deletestudent_sql = "DELETE FROM `users` where id = $user_id";
      $isDeleted = mysqli_query($conn,$deletestudent_sql);
      if($isDeleted) {
        header('Location: teachers.php');
        exit;
      }
    }
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List of Teachers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Teachers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Teachers</h5>             

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teacher ID</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $srno = 1;
                        foreach($rows as $teacher)
                        {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $srno; ?></th>
                        <td><?php echo $teacher['userid']; ?></td>
                        <td><?php echo $teacher['name']; ?></td>
                        <td><?php echo $teacher['age']; ?></td>
                        <td><?php echo $teacher['email']; ?></td>
                        <td><?php echo $teacher['city_name']; ?></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Action buttons">
                            <a type="button" class="btn btn-warning btn-sm" href="<?php echo '?id='.$teacher['userid'].'&action=edit'; ?>" >Edit</a>
                            <a type="button" class="btn btn-danger btn-sm" href="<?php echo '?id='.$teacher['userid'].'&action=delete'; ?>" >Delete</a>
                          </div>
                        </td>
                    </tr>                  
                    <?php
                        $srno++;
                        }
                    ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php
    include('footer.inc.php');
?>
  