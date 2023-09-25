<?php
    // echo "<pre>";
    // print_r(filter_list());
    // echo "</pre>";

    $email = "abc@example.com";
    // $email = "abcexample.com";

    //1. Remove all illegal characters from email
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);

    //2. Validate e-mail
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "<br> $email is a valid email";
    }else{
        echo "<br> Invalid Email!";
    }

    $str = "<h1>Hello World!</h1>";
    echo $str;
    $str = filter_var($str,FILTER_SANITIZE_STRING);
    echo $str;

    $int = 10.7;
    if (filter_var($int, FILTER_VALIDATE_INT)) {
        echo("<br>Integer is valid");
    } else {
        echo("<br>Integer is not valid");
    }

    // $ip = "127.0.0.1";
    // $ip = "127.0.0.256";
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo("<br>$ip is a valid IP address");
    } else {
        echo("<br>$ip is not a valid IP address");
    }
    
    if (filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)) {
        echo("<br>$ip is a valid IPV4 address");
    } else {
        echo("<br>$ip is not a valid IPV4 address");
    }

    if (filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
        echo("<br>$ip is a valid IPV6 address");
    } else {
        echo("<br>$ip is not a valid IPV6 address");
    }

    // $marks = 12;
    $marks = 22;
    $min = 0;
    $max = 20;
    if (filter_var($marks, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)))) {
        echo("<br>Student Marks is within the legal range");
    } else {
        echo("<br>Student Marks is not within the legal range");
    }