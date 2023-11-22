<?php

function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";    
}

$students = [
    ["Moiz","26-Nov-2001","male"],
    ["Hiba","06-Jul-2006","female",4000],
    ["Affan","06-Mar-2006","male"],
    ["Saad","01-Apr-2006"]
];

// echo $students[0][0] . " | " . $students[0][1] . " | " . $students[0][2];
for($row=0;$row<count($students);$row++) {
    echo "<p>";
    for($col=0;$col<count($students[$row]);$col++) {
        echo $students[$row][$col] . " | ";
    }
    echo "</p>";
}


$ages = [38,37,43];
foreach($ages as $a)
{
    echo $a . "<br>";
}
// sort($ages); //  sort value in assending 
rsort($ages); // sort value in decending
foreach($ages as $a)
{
    echo $a . "<br>";
}

$age = ["Peter"=>"38", "Ben"=>"37", "Joe"=>"43"];

pr($age);

// asort($age); // sort by value
// ksort($age); // sort by index/key
// arsort($age); // sort reverse by index/key
krsort($age); // sort reverse by index/key
pr($age);


/* Ittration construct - LOOPS  for, while, do-while foreach*/

for($c=1;$c<=5;$c++) {
    echo $c . ". Syed Murtaza Hussain<br>";
}
echo "<br><br>";
$c = 1;
while($c<=5) {
    echo $c . ". Syed Murtaza Hussain<br>";
    $c++; 
}
echo "<br><br>";

$c = 1;
do {
    echo $c . ". Syed Murtaza Hussain<br>";
    $c++; 
}while($c<=5);




