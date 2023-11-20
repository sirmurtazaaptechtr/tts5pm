<?php declare(strict_types=1); // strict requirement


function fun1 () {
    echo "<p>This is my Message</p>";
}

fun1();

function fun2 (string $name) {
    echo "<p>Dear $name, How do you do?</p>";
}

fun2("Murtaza");
fun2("Ahmed");
fun2("Moiz");
fun2("Urooj");
fun2("123");

FUN2("Ali Raza");

function fun3 () {
    return "<p>My name is fun3</p>";
}

$msg = fun3();
echo $msg;

echo fun3();

function fun4 (int $a, int $b) : float {
    $result = $a/$b;
    return $result;    
}

echo fun4(1,2) . "<br>";

$number = 5;

function fun5 (&$input) {
    $input++;
    echo $input . "<br>";
}

fun5($number);
echo $number;


$obt_marks = 6;
$max_marks = 75;

$percentage = round($obt_marks/$max_marks*100,2);

if($percentage >= 40) {
    echo "<p>Percentage = $percentage<br>Status = PASS</p>";
}else {
    echo "<p>Percentage = $percentage<br>Status = FAIL</p>";
}

if($percentage >= 80) {
    echo "<p>Grade = A+</p>";
}elseif($percentage >= 70) {
    echo "<p>Grade = A</p>";
}elseif($percentage >= 60) {
    echo "<p>Grade = B</p>";
}elseif($percentage >= 50) {
    echo "<p>Grade = C</p>";
}elseif($percentage >= 40) {
    echo "<p>Grade = D</p>";
}else {
    echo "<p>Grade = N/A</p>";
}

$op = 3;
$num1 = 10;
$num2 = 5;

switch ($op) {
    case 1:
        echo "<p>$num1 + $num2 = " . $num1+$num2 . "</p>";
        break;
    case 2:
        echo "<p>$num1 - $num2 = " . $num1-$num2 . "</p>";
        break;
    case 3:
        echo "<p>$num1 X $num2 = " . $num1*$num2 . "</p>";
        break;
    case 4:
        echo "<p>$num1 / $num2 = " . $num1/$num2 . "</p>";
        break;    
}

$data = 15;
$data = "Ali";
echo $data . "<br>";

$data = array(15,"Ali",22,"Moiz");

echo "<pre>";
 print_r($data);
//var_dump($data);
echo "</pre>";

foreach($data as $i=>$v) {
    echo "$v";
    if($i%2 != 0) {
        echo "<br>";
    }
}

$data = array("Ali"=>15,"Moiz"=>22,"Urooj"=>23,"Shoaib"=>19);
echo "<pre>";
 print_r($data);
//var_dump($data);
echo "</pre>";

foreach($data as $index=>$value) {
    echo "<p>$index is $value years old</p>";
}