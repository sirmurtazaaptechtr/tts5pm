<?php include "include/connection.php";

$userId = $_GET["userId"];
$sql_hospitals = "SELECT  * FROM `hospitals` WHERE `hospitals`.`cityid` = (SELECT `users`.`cityid` FROM `users` WHERE `users`.`id` = $userId)";
$hospitals = mysqli_query($conn, $sql_hospitals);

$options = '<option value="0">Please select hospital</option>';
foreach ($hospitals as $hospital) {
    $options .= "<option value='{$hospital["id"]}'>{$hospital["hospital_name"]}</option>";
}
echo $options;
?>
