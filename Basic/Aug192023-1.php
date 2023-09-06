<?php
// PHP switch Statement 
$num1 = 12;
$num2 = 4;
$op = '/';

switch($op){
    case '+':
        $res = $num1 + $num2;
        echo "<p>$num1 + $num2 = $res</p>";
    break;
    case '-':
        $res = $num1 - $num2;
        echo "<p>$num1 - $num2 = $res</p>";
    break;
    case '*':
        $res = $num1 * $num2;
        echo "<p>$num1 X $num2 = $res</p>";
    break;
    case '/':
        $res = $num1 / $num2;
        echo "<p>$num1 / $num2 = $res</p>";
    break;
    default:        
        echo "<p>Invalid Input!</p>";
    break;
}

$favcolor = "blue";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
    break;
    case "blue":
        echo "Your favorite color is blue!";
    break;
    case "green":
        echo "Your favorite color is green!";
    break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    break;
}
// PHP Loops
# while Loop
$cnt = 1;
while($cnt <= 5){
    echo "<p>$cnt - WL</p>";
    $cnt++;
}
# For Loop
for($cnt = 1;$cnt <= 5;$cnt++){
    echo "<p>$cnt - FL</p>";    
}
# while Loop
$cnt = 1;
do{
    echo "<p>$cnt - DW</p>";
    $cnt++;
}while($cnt <= 5);
# Nested Loops
$row = 1;
while($row <= 5){
    echo "<p>$row -> ";
    for($col = 5;$col >= $row;$col--)
    {
        echo " $col ";
    }
    echo "</p>";
    $row++;
}
