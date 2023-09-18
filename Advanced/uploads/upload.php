<?php require('header.inc.php'); ?>
    
<div class="container">
    <h1>Upload Status</h1>    
    <?php
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    
    $target_dir = "images/";
    $target_file = $target_dir . $_FILES['fileToUpload']['name'];
    $flag = true;
    $target_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // echo $target_file . "<br>";
    // echo $target_file_type . "<br>";
    // die();
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, </strong> file already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $flag = false;
    }
    // Check file size not > 2MB    
    if($_FILES['fileToUpload']['size'] > 2097152) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, </strong> file is too large.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $flag = false;
    }
    // Allow certain file formats
    if($target_file_type != "jpg" && $target_file_type != "png" && $target_file_type != "jpeg" && $target_file_type != "gif" ) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, </strong> only JPG, JPEG, PNG & GIF files are allowed.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        $flag = false;
    }
    if($flag) {
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>File Uploaded Successfully!</strong> File "' . $_FILES['fileToUpload']['name'] . '" has been uploaded to the server successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }else {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>File Upload Failed!</strong> there was an error uploading your file.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }else {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>File Upload Failed!</strong> your file was not uploaded.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
</div>

<?php require('footer.inc.php'); ?>