<h1>Revision of PHP</h1>
<?php
    $name = "Khizar Mansoor";
    
    // print($name);
    // echo($name);
    // echo $name;
    // print $name;

    echo "Hello $name <br>";
    echo "Hello " . $name . "<br>";

    function abc () {
        static $x = 1;
        echo "<p>$x</p>";
        $x++;
    }

    
   $z = fopen('abc.txt','r');


   var_dump(is_resource($z));


   function _mypi() {
    return 22.0/7.0;
   }

//    $p = _mypi();
//    echo $p;
    echo _mypi();

    $myname = "Syed Murtaza Hussain";

    define("MY_NAME","Syed Murtaza Hussain");
    define("BOYS",["Hiba","Ali"]);

    // echo $myname;
    echo MY_NAME;

    echo "<pre>";
    print_r(BOYS);
    echo "</pre>";

?>