<?php
include('sqlconnect.php');


$id = $_GET['sids'];
$sql = mysqli_query($connect, "DELETE FROM tbl_class_schedule WHERE c_sched_id = '".$id."'");

header("location: ../webpages/schedule.php?edite=successful");

mysqli_close($connect);
?>