<?php
include('sqlconnect.php');


$id = $_GET['sid'];
$sql = mysqli_query($connect, "DELETE FROM tbl_class_attendance WHERE ca_id = '".$id."'");

header("location: ../webpages/viewreport.php?edite=successful");

mysqli_close($connect);
?>
