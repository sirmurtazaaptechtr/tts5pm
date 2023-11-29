<?php 
$students = [
    ["Moiz","26-Nov-2001","male"],
    ["Hiba","06-Jul-2006","female",4000],
    ["Affan","06-Mar-2006","male"],
    ["Saad","01-Apr-2006"]
];

foreach($students as $student) {
    echo "<p>";
    foreach($student as $data) {
        echo $data . " | " ;
    }
    echo "</p>";

}

echo __DIR__ . "<br>";
echo __FILE__ . "<br>";