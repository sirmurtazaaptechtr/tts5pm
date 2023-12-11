<?php include "include/connection.php";

$cityid = $_GET["cityid"];
$sql_hospitals = "SELECT  * FROM `hospitals` WHERE `hospitals`.`cityid` = $cityid";
$hospitals = mysqli_query($conn, $sql_hospitals);

$options = '<option value="0">Please select hospital</option>';
foreach ($hospitals as $hospital) {
    $options .= "<option value='{$hospital["id"]}'>{$hospital["hospital_name"]}</option>";
}
echo $options;
?>
