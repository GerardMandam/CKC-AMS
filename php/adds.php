<?php 
include("sqlconnect.php");

$sid = $_POST["id"];
$crs = $_POST["course"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mi = $_POST["mname"];
$phone = $_POST["mobile"];
$yl = $_POST["ylevel"];
$gender=$_POST["sgender"];


$res = mysqli_query($connect, "SELECT * FROM tbl_student WHERE school_ID = '$sid'")or die(mysqli_error());

if (mysqli_num_rows($res)>0) {
    header("location: ../webpages/viewstudent.php?msg=exist");
} else {

    $sql = "INSERT INTO tbl_student(school_ID, password, fname, mname, lname, course, level,gender,phoneNumber)
		VALUES ('".$sid."', '".$lname."', '".$fname."', '".$mi."', '".$lname."', '".$crs."', '".$yl."', '".$gender."','".$phone."')";

        mysqli_query($connect,$sql)or die(mysqli_error($connect));
    header("location: ../webpages/viewstudent.php?msg=success");
}
mysqli_close($connect);
?>