<?php
// PHP INT
    echo "<p>" . PHP_INT_MAX . "</p>";
    echo "<p>" . PHP_INT_MIN . "</p>";
    echo "<p>" . PHP_INT_SIZE . "</p>";

    $num = 12;    
    echo "<pre>" . var_dump(is_int($num)) . "</pre>";
    echo "<pre>" . var_dump(is_numeric($num)) . "</pre>";
    $num = 12.75;
    echo "<pre>" . var_dump(is_int($num)) . "</pre>";
    echo "<pre>" . var_dump(is_numeric($num)) . "</pre>";
    
    $data = "12";
    
    $num = $data;
    echo "<p>" . var_dump($num) . "</p>";
    //type casting string to int
    $num = (int)$data;
    echo "<p>" . var_dump($num) . "</p>";
    
    // PHP FLOAT
    $num = 0.0987654321123456789;
    echo "<p> $num </p>";
    echo "<p>" . var_dump($num) . "</p>";
    echo "<p>" . PHP_FLOAT_MAX . "</p>";
    echo "<p>" . PHP_FLOAT_MIN . "</p>";
    echo "<p>" . PHP_FLOAT_DIG . "</p>";
    
    $num = 2.1e408;
    echo "<p> $num </p>";
    echo "<p>" . var_dump($num) . "</p>";
    
    $num = 2.1e307;
    echo "<p> $num </p>";
    echo "<p>" . var_dump($num) . "</p>";    
    echo "<pre>" . var_dump(is_float($num)) . "</pre>";
    echo "<pre>" . var_dump(is_numeric($num)) . "</pre>";
    
    $num = acos(8);
    echo "<p> $num </p>";
    
    //type casting string to int    
    $num = (float)$data;
    echo "<p>" . var_dump($num) . "</p>";
    
    $res = 4 * 2.5;
    echo "<p> $res </p>";
    echo "<p>" . var_dump($res) . "</p>";
    
    // PHP Math
    echo(pi());
    
    $mypi = 22/7;
    echo "<p> $mypi </p>";
    echo "<p>" . var_dump($mypi) . "</p>";

    echo("<p>" . min(0, 150, 30, 20, -8, -200) . "</p>");  // returns -200
    echo("<p>" . max(0, 150, 30, 20, -8, -200) . "</p>");  // returns 150
    
    
