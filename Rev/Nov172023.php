<?php
    function fun1 ($num) {
        return $num * $num;
    }
//Assignment Op.
    $name = "Hussain";    
    $data = 15;
    echo $data . "<br>";
    $data = $name;
    echo $data . "<br>";
    $data = 12 + 2;
    echo $data . "<br>";
    $data = fun1(2);
    echo $data . "<br>";
    
// +, -, *, /, %, **, ++, --

    $data = 12 + 5;
    echo $data . "<br>";
    $data = 12 - 5;
    echo $data . "<br>";
    $data = 12 * 5;
    echo $data . "<br>";
    $data = 12 / 5;
    echo $data . "<br>";
    $data = 12 ** 5;
    echo $data . "<br>";
    $data = 5;
    echo $data . "<br>";
    $data++;
    echo $data . "<br>";
    ++$data;
    echo $data . "<br>";
    echo 2 + $data++ . "<br>"; 
    echo $data . "<br>";
    
    echo 2 + ++$data . "<br>";
    echo $data . "<br>";
    

    
// ==, ===, != or <>, !==, <, <=, >, >=, <=> 

    var_dump(5 == "5");
    echo "<br>";

    var_dump(5 === "5");
    echo "<br>";

    var_dump(5 != "5");
    echo "<br>";
    var_dump(5 <> "5");
    echo "<br>";

    var_dump(5 !== "5");
    echo "<br>";

    var_dump(5 < 5);
    echo "<br>";

    var_dump(5 <= 5);
    echo "<br>";

    var_dump(5 > 5);
    echo "<br>";

    var_dump(5 >= 5);
    echo "<br>";

    var_dump(5 <=> 5);
    echo "<br>";

    var_dump(6 <=> 5);
    echo "<br>";

    var_dump(5 <=> 6);
    echo "<br>";

    var_dump(true && true);
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    var_dump(false && true);
    echo "<br>";
    var_dump(false && false);
    echo "<br>";

    var_dump(true || true);
    echo "<br>";
    var_dump(true || false);
    echo "<br>";
    var_dump(false || true);
    echo "<br>";
    var_dump(false || false);
    echo "<br>";
    
    var_dump(!true);
    echo "<br>";    
    var_dump(!false);
    echo "<br>";

    // .

    $firstName = "Ahmed";
    $lastName = "Raza";
    $age = 21;

    echo $firstName . " " . $lastName . " is " . $age . " years old.<br>";

    $data = 10;
    echo $data . "<br>";            
    $data += 5;// $data = $data + 5;
    echo $data . "<br>";
    
    // ??

    // $datafromdb = "Ahmed Raza";
    $datafromdb = null;
    
    $name = $datafromdb ?? "No Name";
    echo $name . " is Aptech Student.";

    