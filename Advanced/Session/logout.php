<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();

    echo "Logout successfully!";
    
    ?>
<h3><a href="index.php">Home</a></h3>
<h3><a href="second.php">Page 2</a></h3>
<h3><a href="third.php">Page 3</a></h3>

</body>
</html>