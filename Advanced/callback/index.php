<?php
    // function length_of_text($input) {
    //     return strlen($input);
    // }
    $names = ["Junaid","Moiz","Mohib","Arbaz","Affan","Ahmed","Saad","Ali","Shoaib"];

    // $lengths = array_map("length_of_text",$names);

    $lengths = array_map(function($name) {
        return "$name - " . strlen($name);
    },$names);

    echo "<pre>";
    print_r($lengths);
    echo "</pre>";
    // foreach($lengths as $len){
    //     echo $len ."<br>";
    // }

    // echo length_of_text("Murtaza");
?>