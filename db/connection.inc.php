<!-- MySQLi Procedural -->
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "test16oct2023_db";

    // For Connection
    $conn = mysqli_connect($hostname,$username,$password,$database);

    if($conn) {
        echo ("$database connected successfully");        
    }