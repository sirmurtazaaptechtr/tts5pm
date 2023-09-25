<?php 

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

$target_file ="uploads/".$_FILES['fileToUpload']['name'];
$tem_file = $_FILES['fileToUpload']['tmp_name'];
$uploadOk = true;

if(file_exists($target_file)) {
    echo '"' . $_FILES['fileToUpload']['name']  . '" already exists!<br>';
    $uploadOk = false;

}
if($_FILES['fileToUpload']['size'] > 2097152) {
    echo '"' . $_FILES['fileToUpload']['name']  . '" is too large!<br>';
    $uploadOk = false;
}

if($uploadOk) {
    if(move_uploaded_file($tem_file,$target_file)) {
        echo "File uploaded successfully<br>";
    }else {
        echo "Sorry, there was error while uploading file!<br>";
    }
}else {
    echo "File Upload Failed!<br>";
}