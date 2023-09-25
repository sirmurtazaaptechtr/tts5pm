<?php
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    // echo divide(5, 0);

    try {
        echo divide(5, 0);
    }
    catch(Exception $ex) {
        echo "Unable to download!<br>";
        // echo "$ex";
    }
    finally {
        echo "The End";
    }
?>