<?php 
    session_start();

    $name = "Affan Mansoor";
    $id = "affan";
    $pwd = "af123";

    $_SESSION['name'] = $name;
    $_SESSION['username'] = $id;
    $_SESSION['password'] = $pwd;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><a href="second.php">Page 2</a></h3>
    <h3><a href="third.php">Page 3</a></h3>
    <h3><a href="logout.php">Logout</a></h3>
    
</body>
</html>