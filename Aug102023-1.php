<?php
// single line comment 
# single line comment 

/*
this 
is 
multiline / partline comment
*/

$a = 10;
$b = 5;
$c = $a + $b /*+ 5*/ ;

echo "<p>$c</p>";

$str = "Muhammad Ali";
echo "<p>";
var_dump($str);
echo "</p>";

$len = strlen($str);
echo "<p>\"$str\" has $len characters in it.";

$wc = str_word_count($str);
echo "<p>\"$str\" has $wc words in it.";

echo "<p>".strrev($str)." is reverse of $str</p>";

echo "<p>\"Ali\" in \"$str\" is at ".strpos($str,"Ali")."</p>";

$newStr = str_replace("Muhammad Ali","M A Ahmed",$str);

echo "<p>$newStr</p>";
?>