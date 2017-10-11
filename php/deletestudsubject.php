<?php
include('sqlconnect.php');


$id = $_GET['ssid'];
$sql = mysqli_query($connect, "DELETE FROM tbl_student_subject WHERE ss_id = '".$id."'");

header("location: ../webpages/studentsubject.php?edite=successful");

mysqli_close($connect);
?>
