<?php
    function pr($input) {
        echo "<pre>";
            print_r($input);
        echo "</pre>";
    }
//Indexed arrays 
    $students = array("Junaid","Hiba","Areesha","Mujtaba","Khizar","Saad","Ali","Shoaib","Affan","Ahmed","Moiz");

    pr($students);

//Multidimensional arrays
    $students = array(["Junaid","N/A"],["Hiba","6-July-2006"],["Areesha","N/A"],["Mujtaba","13-Feb-2002"],["Khizar","13-Dec-2005"],["Saad","N/A"],["Ali","8-Apr-2004"],["Shoaib","4-Feb-2004"],["Affan","10-Mar-2006"],["Ahmed","7-Apr-2003"],["Moiz","26-Nov-2002"],["Hunain","14-Oct-2005"]);

    echo "<p>" . $students[4][0] . $students[4][1] . "</p>";
    pr($students);

    $students = array("Mujtaba" => "13-Feb-2002","Affan" => "10-Mar-2006");

    echo "<p>" . $students["Mujtaba"] . "</p>";
    echo "<p>" . $students["Affan"] . "</p>";
    pr($students);