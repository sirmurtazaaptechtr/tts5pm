<?php
    //list timezones
    // $timezone_identifiers = DateTimeZone::listIdentifiers();
    // echo "<pre>";
    // print_r($timezone_identifiers);
    // echo "</pre>";

    // set the default timezone to use.
    date_default_timezone_set('Asia/Karachi');

    echo "<p>" . date("j/n/y") . "</p>";
    echo "<p>" . date("d-m-Y") . "</p>";
    echo "<p>" . date("d-M-Y") . "</p>";
    echo "<p>" . date("l, j F Y h:i:s a") . "</p>";

    //mktime(hour, minute, second, month, day, year) function returns the Unix timestamp for a date.
    $dob_moiz = mktime(12,35,15,11,26,2001);
    echo "<p>" . date("l, j F Y h:i:s a",$dob_moiz) . "</p>";
    

    //strtotime(time, now) function is used to convert a human readable date string into a Unix timestamp
    $thedate = "26-11-2001 12:35:15 pm";
    $thedate = strtotime($thedate);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";    

    $thedate = "Today";
    $thedate = strtotime($thedate);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";    

    $thedate = "Yesterday";
    $thedate = strtotime($thedate);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";    

    $thedate = "Tomorrow";
    $thedate = strtotime($thedate);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";    

    $thedate = "Next Month";
    $thedate = strtotime($thedate);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";    

    $thedate = "Next Year";
    $thedate = strtotime($thedate);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";    

    $thedate = strtotime("+21 years",$dob_moiz);
    echo "<p>" . date("l, j F Y h:i:s a",$thedate) . "</p>";

    // moiz birthdays for next 30 years
    $stdate = strtotime("26-Nov-2001 12:35:15 pm");//moiz birthday
    $eddate = strtotime("+30 years",$stdate);
    echo "<ol>";
    while($stdate < $eddate){
        $stdate = strtotime("+1 year",$stdate);
        echo "<li> " . date("l, j F Y h:i:s a",$stdate) . "</li>";
    }
    echo "</ol>";

    $tdate = strtotime("1-Jan-2024 00:00:01");
    $daysleft = ceil(($tdate-time())/86400);
    echo "There are " . $daysleft ." days until New Year Eve.";