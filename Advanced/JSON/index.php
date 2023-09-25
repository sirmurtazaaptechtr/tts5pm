<?php
    function vd ($input) {
        echo "<pre>";
        var_dump($input);
        echo "</pre>";
    }
    function pr ($input) {
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
    $students = ['Junaid'=>17,'Moiz'=>22,'Mohib'=>18,'Arbaz'=>18,'Affan'=>17,'Ahmed'=>20,'Saad'=>17,'Ali'=>19,'Shoaib'=>19];
    vd($students);

    $json_data = json_encode($students);
    vd($json_data);

    $data = json_decode($json_data);
    vd($data);