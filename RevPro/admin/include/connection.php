<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "phpcare_db";
    $conn = mysqli_connect($hostname,$username,$password,$database);

    if($conn) {
        echo "<p><b>$database</b> is connected successfully!</p>";
    }

    // FUFs

    function pr($input) {
        echo "<pre>"; 
        print_r($input);
        echo "</pre>";
    }
    
    function prx($input) {
        echo "<pre>"; 
        print_r($input);
        echo "</pre>";
        die();
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
?>