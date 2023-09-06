<h1>This is Responce file</h1>
<a href="form.php">&lt;-back</a>
<?php
        if(isset($_POST['submit'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];
        }      
        
        if($username != "" && $password != "") {
            echo "<p>UserName : $username<br>Password : $password</p>";
        }
?>