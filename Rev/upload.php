<?php
session_start();

function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";

}

if(isset($_POST['submit'])) {
    $target_dir = "assets/uploads/";
pr($GLOBALS);
pr($_FILES);
pr($_POST);
pr($_SESSION);
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
echo $target_file;
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    echo "File is an image - " . $check["mime"] . ".";
    // move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file);

}