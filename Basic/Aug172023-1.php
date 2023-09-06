<?php
# PHP Logical Operators
# AND
$x = true;$y = true;
echo "<p> true AND true = ";
var_dump($x && $y);
echo "</p>";
$x = true;$y = false;
echo "<p> true AND false = ";
var_dump($x && $y);
echo "</p>";
$x = false;$y = true;
echo "<p> false AND true = ";
var_dump($x && $y);
echo "</p>";
$x = false;$y = false;
echo "<p> false AND false = ";
var_dump($x && $y);
echo "</p>";
# OR
$x = true;$y = true;
echo "<p> true OR true = ";
var_dump($x || $y);
echo "</p>";
$x = true;$y = false;
echo "<p> true OR false = ";
var_dump($x || $y);
echo "</p>";
$x = false;$y = true;
echo "<p> false OR true = ";
var_dump($x || $y);
echo "</p>";
$x = false;$y = false;
echo "<p> false OR false = ";
var_dump($x || $y);
echo "</p>";
# XOR
$x = true;$y = true;
echo "<p> true XOR true = ";
var_dump($x xor $y);
echo "</p>";
$x = true;$y = false;
echo "<p> true XOR false = ";
var_dump($x xor $y);
echo "</p>";
$x = false;$y = true;
echo "<p> false XOR true = ";
var_dump($x xor $y);
echo "</p>";
$x = false;$y = false;
echo "<p> false XOR false = ";
var_dump($x xor $y);
echo "</p>";
# NOT
$x = true;
echo "<p> NOT true = ";
var_dump(!$x);
echo "</p>";
$x = false;
echo "<p> NOT false = ";
var_dump(!$x);
echo "</p>";
# PHP String Operators
$firstName = "Hiba";
$lastName = "Farhan";
$fullName = $firstName . ' ' . $lastName;
echo "<p>Full Name : $fullName</p>";
echo "<p>First Name : $firstName</p>";
echo "<p>Last Name : $lastName</p>";
$name = "Hiba";
echo "<p>Name : $name</p>";
$name .= " Farhan";
echo "<p>Name : $name</p>";
# PHP Conditional Statements
$name = null;
// $name = "Mujtaba Khanani";
// if($name != ""){
//     echo "<h1>Welcome $name</h1>";
// }else{
//    echo "<h1>Welcome Guest</h1>";
//}
if(!empty($name)){
    echo "<h1>Welcome $name</h1>";
}else{
    echo "<h1>Welcome Guest</h1>";
}
// $num = null;
// $num = 1;
// $num = 3;
$num = 15;
if(empty($num)){
    echo "<h3>user pressed Nothing</h3>";
}elseif($num === 1){
    echo "<h3>user pressed ONE</h3>";
}elseif($num === 2){
    echo "<h3>user pressed TWO</h3>";    
}elseif($num === 3){
    echo "<h3>user pressed THREE</h3>";    
}else{
    echo "<h3>!Invalid Choice</h3>";
}
