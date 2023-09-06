<?php 
    $stnum = 7;
    $ednum = 15;
    $isPrime = true;
    $nums = [];
    for($tn=$stnum;$tn<=$ednum;$tn++){        
        for($dvr=2;$dvr<$tn;$dvr++)
        {
            if($tn%$dvr == 0){
                $isPrime = false;
                array_push($nums,$dvr);
            }
        }
        echo "</p>";
        if($isPrime){
            echo "<p>$tn is PRIME</p>";
        }else{
            echo "<p>$tn is NOT PRIME Because it is divisiable by : ";
            foreach($nums as $num){
                echo " $num ";
            }
            echo "</p>";
            $isPrime = true;
            $nums = [];
        }
    }
    $tab = 17;
    $st = 1;
    $ed = 10;
    echo "<h3>Displaying Table of $tab From $st TO $ed</h3>";
    for($mul=$st;$mul<=$ed;$mul++){
        echo "<p>$tab X $mul = " . $tab*$mul . "</p>";
    }