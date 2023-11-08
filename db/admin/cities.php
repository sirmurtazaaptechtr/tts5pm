<?php
    include('header.inc.php');    
    $showcities_sql = "SELECT * FROM `cities`";
    $rows = mysqli_query($conn,$showcities_sql);    
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List of Cities</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Cities</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Cities</h5>             

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">City ID</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Latitude</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $srno = 1;
                        foreach($rows as $city)
                        {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $srno; ?></th>
                        <td><?php echo $city['id']; ?></td>
                        <td><?php echo $city['city_name']; ?></td>
                        <td><?php echo $city['lng']; ?></td>
                        <td><?php echo $city['lat']; ?></td>
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
  