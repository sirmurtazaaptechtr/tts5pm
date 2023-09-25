<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Page 2
    </title>
</head>
<body>
    <h1><?php echo "Welcome" . $_SESSION['name'] ?></h1>
    <h2>Username : <?php echo $_SESSION['username']?></h2>
    <h2>Password : <?php echo $_SESSION['password']?></h2>
    <h3><a href="index.php">Home</a></h3>
    <h3><a href="third.php">Page 3</a></h3>
    <h3><a href="logout.php">Logout</a></h3>

    
</body>
</html>