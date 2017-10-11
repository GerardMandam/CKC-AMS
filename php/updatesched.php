<?php 
include("sqlconnect.php");

$id = $_POST["sids"];
$sday = $_POST["day"];
$stin = $_POST["tin"];
$stout = $_POST["tout"];



 $sql = mysqli_query($connect, "UPDATE tbl_schedule SET day = '$sday', time_in = '$stin', time_out = '$stout' WHERE sched_id = '$id'");
        

 header("location: ../webpages/schedule.php?edit=successful");

mysqli_close($connect);
?>



