<?php
    $name = $email = $website = $comment = $gender = "";    
    $nameerror = $emailerror = $websiteerror = $commenterror = $gendererror = "";

    function safe_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }    
    if(isset($_POST['submit'])) {
        if(empty($_POST['fullname'])) {
            $nameerror = "name is required";
        }else {
            $name = safe_input($_POST['fullname']);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameerror = "Only letters and white space are allowed";
            }
        }

        if(empty($_POST['email'])) {
            $emailerror = "email is required";
        }else {
            $email = safe_input($_POST['email']);
            if(!preg_match('/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/',$email)){
                $emailerror = "Invalid email format";
            }
        }
        $website = safe_input($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $websiteerror = "Invalid URL";
        }
        $comment = safe_input($_POST['comment']);
        if(empty($_POST['gender'])) {
            $gendererror = "select gender";
        }else {
            $gender = safe_input($_POST['gender']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label class="red">* required field</label>
        <br><br>
        <label for="fullname"><b>Name:</b></label>
        <input type="text" name="fullname" id="fullname" value="<?php echo htmlspecialchars($name); ?>">
        <span class="red" id="namespan">* <?php echo $nameerror; ?></span>
        <br><br>
        <label for="email"><b>e-Mail:</b></label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="red" id="emailspan">* <?php echo $emailerror; ?></span>
        <br><br>
        <label for="website"><b>Website:</b></label>
        <input type="url" name="website" id="website" value="<?php echo htmlspecialchars($website); ?>">
        <span class="red" id="websitespan"><?php echo $websiteerror; ?></span>
        <br><br>
        <label for="comment"><b>Comment:</b></label>
        <textarea name="comment" id="comment" cols="30" rows="10"><?php echo htmlspecialchars($comment); ?></textarea>
        <br><br>
        <label><b>Gender:</b></label>
        <input type="radio" name="gender" id="female" value="female" <?php if($gender === 'female') {echo 'checked';}?>>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="male" value="male" <?php if($gender === 'male') {echo 'checked';}?>>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="other" value="other" <?php if($gender === 'other') {echo 'checked';}?>>
        <label for="other">Other</label>
        <span class="red" id="genderspan">* <?php echo $gendererror; ?></span>
        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <h2>Your Input</h2>
    <?php
        if($nameerror == "" && $emailerror == "" && $websiteerror == "" && $gendererror == "") {
            echo 
            "<ul>
                <li>Name : $name</li>
                <li>e-Mail : $email</li>
                <li>Website : $website</li>
                <li>Comment : $comment</li>
                <li>Gender : $gender</li>
            </ul>";
        }
    ?>
</body>
</html>