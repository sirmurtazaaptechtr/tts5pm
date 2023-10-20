<?php
include('header.inc.php');
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Teacher</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="teachers.php">Teachers</a></li>
      <li class="breadcrumb-item active">Add Teacher</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add New Teacher</h5>
          <p><span class="text-danger">* required field</span></p>
          <!-- Add new City -->
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row mb-3">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-5">
                <input type="text" name="name" id="name" class="form-control">
              </div>
              <p class="text-danger col-sm-5">* </p>
            </div>
            <div class="row mb-3">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-5">
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <p class="text-danger col-sm-5">* </p>
            </div>            
            <div class="row mb-3">
              <label for="age" class="col-sm-2 col-form-label">Age</label>
              <div class="col-sm-5">
                <input type="number" name="age" id="age" min="1" class="form-control">
              </div>
              <p class="text-danger col-sm-5">* </p>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">City</label>
              <div class="col-sm-5">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select a City</option>
                  <?php
                  $showcities_sql = "SELECT * FROM `cities`";
                  $cities = mysqli_query($conn,$showcities_sql);
                  foreach($cities as $city)
                  { 
                  ?>
                  <option value="<?php echo $city['id']?>"><?php echo $city['city_name']?></option>
                  <?php
                  }
                  ?>                  
                </select>
              </div>
            </div>            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-5">
                <button type="reset" class="btn btn-danger">Clear</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form><!-- End Add New City -->
        </div>
      </div>

    </div>   
  </div>
</section>
</main><!-- End #main -->


<?php
include('footer.inc.php');
?>