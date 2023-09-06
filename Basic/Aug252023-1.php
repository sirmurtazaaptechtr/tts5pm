<?php
    declare(strict_types=1);
    function myfun() {
        echo "<h1>Hi there</h1>";        
    }
    function greetings($name)  {
        echo "Hi $name, How are you?";
    }
    function add2nums($x,$y)  {
        $total = $x + $y;        
        return $total;
    }
    myfun();
?>
    <h1><?php greetings("Junaid");?></h1>
    <h1><?php greetings("Hiba");?></h1>
    <h1><?php greetings("Mujtaba");?></h1>    
<?php
    $result = add2nums(12,24);
    echo "<h2>$result</h2>";    
    echo "<h2>" . add2nums(44,13) . "</h2>";
    $names = ["Junaid","Hiba","Areesha","Mujtaba","Khizar","Saad","Ali","Shoaib","Affan","Ahmed"];    
    // for($cnt=0;$cnt<count($names);$cnt++){
    //     echo "<h4>" . $cnt+1 . ". ";
    //     echo greetings($names[$cnt]);
    //     echo "</h4>";
    // }   
    foreach($names as $index=>$name){
        echo "<h4>" . $index+1 . ". ";
        echo greetings($name);
        echo "</h4>";
    }

    function squarer(int $number = 1) : int {
        return $number * $number;
    }

    echo "<p>".squarer(10)."</p>";
    echo "<p>".squarer(121)."</p>";

    function is_Even(int $value) : bool {
        $rem = $value % 2;
        return $rem === 0;        
    }

    var_dump(is_Even(squarer(12)));
    var_dump(is_Even(squarer(7)));

//Part 2 - Scope of variables
    $age = 0;

    function thefun() {
        // global $age;
        // $age = 12;        
        // echo "<p>$age</p>";
    //OR
        $GLOBALS['age'] = 12;        
        echo "<p>" . $GLOBALS['age'] . "</p>";
    }
    thefun();
    echo "<p>$age</p>";

    
    $a = 10;
    $b = 20;

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";

    echo "<p>Outside-Before : $a,$b</p>";
    
    function swap(&$x,&$y) {
        echo "<p>Inside-Before : $x,$y</p>";
        $z = $x;
        $x = $y;
        $y = $z;
        echo "<p>Inside-After : $x,$y</p>";
    }
    
    swap($a,$b);
    echo "<p>Outside-After : $a,$b</p>";

    function counter() {
        static $cnt = 0;
        $cnt++;

        echo "<p>$cnt</p>";
    }

    counter();
    counter();
    counter();
    counter();
    counter();