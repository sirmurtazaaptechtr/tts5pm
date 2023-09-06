<?php
     $a = 20;
     $b = 50;
     $names = ["Shoaib","Moiz","Hiba","Mujtaba","Affan","Saad","Khizar"];

     $regEx = "/[ae]l[iy]/i";
     $regEx_FullName = "/([A-Z]+)(\s[A-Z])*/i";  
     $regEx_CNIC = "/4\d{4}-\d{7}-\d{1}/";   

    //  $res = preg_match($regEx,"BLI");
    //  $res = preg_match($regEx_FullName,"Syed Affan Mansoor Shah");
     $res = preg_match($regEx_CNIC,"52301-6871539-6");

     echo "<h1>$res</h1>";

    function pr($input) {
        echo "<pre>";        
        print_r($input);
        echo "</pre>";        
    }
    function f() {
        $x = 10;
        $y = 20;
        $z = $x + $y;
        return $z;
    }
    function x() {
       $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];        
    }
    x();
   

    // pr($names); 
    pr($GLOBALS);
    echo $c;

    // pr($_SERVER);
    // pr($GLOBALS['_SERVER']);
    

    pr($_REQUEST);
    ?>
    <form action="" method="post">
        <input type="text" name="fullName" id="fn" placeholder="Full Name">
        <br>
        <label for="">Select Gender :</label>
        <select name="gender" id="gdr">
            <option value="F">Female</option>
            <option value="M">Male</option>
            <option value="O">Other</option>
        </select>
        <br>
        <input type="submit" name="submit" id="subBtn" value="Save">
    </form>  