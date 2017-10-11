<?php 
include("sqlconnect.php");

$id = $_POST["sid"];
$crs = $_POST["course"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mi = $_POST["mi"];
$yl = $_POST["lvl"];
$gender = $_POST["gender"];
$mbs = $_POST["mobile"];


 $sql = mysqli_query($connect, "UPDATE tbl_student SET password = '$lname', lname = '$lname', fname = '$fname', mname = '$mi', course = '$crs', level = '$yl', gender = '$gender',phoneNumber = '$mbs' WHERE school_ID = '$id'");
        

 header("location: ../webpages/viewstudent.php?edit=successful");

mysqli_close($connect);
?>