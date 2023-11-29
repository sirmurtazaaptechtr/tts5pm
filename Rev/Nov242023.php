<?php
    session_start();
    $_SESSION["username"] = "Ali Raza";
    $_SESSION["login"] = true;   

    echo "<pre>";    
    print_r(filter_list());
    echo "</pre>";

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select File</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br>
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName">
        <input type="submit" value="Save" name="submit">
    </form>

    <table>
        <thead>
            <tr>
                <th>sr.no.</th>
                <th>Filter</th>
                <th>Filter ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            foreach (filter_list() as $id =>$filter) {
                echo '<tr><td>' . $srno . '</td><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
                $srno++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>