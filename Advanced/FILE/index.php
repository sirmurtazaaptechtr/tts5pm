<?php
//readfile()
    // $content = readfile('webdictionary.txt');
    // echo $content;

    $file = fopen('webdictionary.txt',"r");
    // feof() and fgets functions
    echo "<ul>";
    while(!feof($file)) {
        echo "<li>" . fgets($file) . "</li>";
    }
    echo "</ul>";
    
    $file = fopen('abc.txt',"w");
    $text = "My name is Syed Murtaza Hussain";
    fwrite($file,$text);
    $text = "I live in Karachi";
    fwrite($file,$text);

    // readfile('abc.txt');

    $file = fopen('abc.txt',"r");
    echo "<ul>";
    while(!feof($file)) {
        echo "<li>" . fgets($file) . "</li>";
    }
    echo "</ul>";   
?>