<?php
//PHP Math
    echo "<p>" . pi() . "</p>";
    echo "<p>" . min(3,5,7,2,1,14,10,12) . "</p>";
    echo "<p>" . max(3,5,7,2,1,14,10,12) . "</p>";
    
    $x = -12;
    echo "<p>" . abs($x) . "</p>";
    
    $x = 121;
    echo "<p>" . sqrt($x) . "</p>";    
    
    echo "<p>" . round(pi()) . "</p>";
    echo "<p>" . round(10.75) . "</p>";

    echo "<p>" . rand() . "</p>";
    echo "<p>" . rand(1,10) . "</p>";
//PHP Constants

    echo PHP_INT_MAX;

    define("MY_NAME","Syed Murtaza Hussain");
    echo "<p>" . MY_NAME . "</p>";
    
    define("MY_CARS",["Honda","Toyota","Suzuki","BMW","MG"]);    
    echo "<p>" . MY_CARS[1] . "</p>";    

//PHP Operators
//PHP Arithmetic Operators
    $x = 12;
    $y = 3;

    $res = $x + $y;
    echo "<p>$res</p>";

    $res = $x - $y;
    echo "<p>$res</p>";

    $res = $x * $y;
    echo "<p>$res</p>";

    $res = $x / $y;
    echo "<p>$res</p>";

    $res = $x % $y;
    echo "<p>$res</p>";

    $res = $x ** $y;
    echo "<p>$res</p>";    
    
//PHP Assignment Operators
    $z = 15;
    echo "<p>$z</p>";
    
    $z += 2; //$z = $z + 2;
    echo "<p>$z</p>";
    
    $z -=2; //$z = $z - 2;
    echo "<p>$z</p>";
    
    $z *=2; //$z = $z * 2;
    echo "<p>$z</p>";
    
    $z /=2; //$z = $z / 2;
    echo "<p>$z</p>";
    
    $z %=2; //$z = $z % 2;
    echo "<p>$z</p>";
    
    $z **=2; //$z = $z % 2;
    echo "<p>$z</p>";
//PHP Comparison Operators
    $x = 10;
    $y = 5;

    $res = $x < $y;
    echo "<p>$x , $y $x<$y" . var_dump($res) . "</p>";

    $res = $x > $y;
    echo "<p>$x , $y $x>$y" . var_dump($res) . "</p>";

    $res = $x <= $y;
    echo "<p>$x , $y $x<=$y" . var_dump($res) . "</p>";

    $res = $x >= $y;
    echo "<p>$x , $y $x>=$y" . var_dump($res) . "</p>";

    $res = $x == $y;
    echo "<p>$x , $y $x==$y" . var_dump($res) . "</p>";
    
    $y = "10"; // if we update the value of $y
    
    $res = $x == $y;
    echo "<p>$x , $y $x==$y" . var_dump($res) . "</p>";
    
    $res = $x != $y;
    echo "<p>$x , $y $x!=$y" . var_dump($res) . "</p>";
    
    $res = $x === $y;
    echo "<p>$x , $y $x===$y" . var_dump($res) . "</p>";
    
    $res = $x !== $y;
    echo "<p>$x , $y $x!==$y" . var_dump($res) . "</p>";
    
    $x = 2;
    $y = 1;
    $res = $x <=> $y;
    echo "<p>$x , $y $x!==$y" . var_dump($res) . "</p>";

    $y = 2;
    $res = $x <=> $y;
    echo "<p>$x , $y $x!==$y" . var_dump($res) . "</p>";

    $y = 3;
    $res = $x <=> $y;
    echo "<p>$x , $y $x!==$y" . var_dump($res) . "</p>";
//PHP Increment / Decrement Operators
    $x = 3;
    $res = 0;
    
    echo "<p>($x, $res)</p>";

    // $res = $x++ * 3; // POST increment
    $res = ++$x * 3; // PRE increment

    echo "<p>($x, $res)</p>";
?>