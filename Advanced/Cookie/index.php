<?php
    // setcookie(name, value, expire, path, domain, secure, httponly);
    $cookie_name = "user";
    // $cookie_value = "Affan Mansoor";
    $cookie_value = json_encode(["name"=>"Affan Mansoor","age"=>17, "gender"=>"male"]);
    $cookie_expiry = time() + 30 * 24 * 60 * 60;
    $cookie_path = "/";

    setcookie($cookie_name,$cookie_value,$cookie_expiry,$cookie_path);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$cookie_name])) {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            // echo "Value is: " . $_COOKIE[$cookie_name];
            $data = json_decode($_COOKIE[$cookie_name]);
            foreach($data as $key => $value){
                echo "$key :  $value <br>";
            }
        }else {
            echo "No Cookie Found!";
        }
    ?>
    
</body>
</html>

