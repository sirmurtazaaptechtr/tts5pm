<?php
    $username = "";
    $password = "";

    function pr ($input) {
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="responce.php" method="post">
        <input type="text" id="username" name="user" placeholder="username">
        <br>
        <input type="text" id="passwd" name="pass" placeholder="password">
        <br>
        <input type="submit" value="Login" name="submit">
    </form>
    
</body>
</html>