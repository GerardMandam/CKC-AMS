<?php 
include("sqlconnect.php");


$sid = $_POST["ssid"];
$doc = $_POST["addstud"];
$sub = $_POST["schede"];





$res = mysqli_query($connect, "SELECT * FROM tbl_student_subject WHERE ss_id = '$sid'")or die(mysqli_error());

if (mysqli_num_rows($res)>0) {
    header("location: ../webpages/studentsubject.php?msg=exist");
} else {

    $sql = "INSERT INTO tbl_student_subject( ss_id, school_ID, c_sched_id)
		VALUES ('".$sid."','".$doc."','".$sub."')";

        mysqli_query($connect,$sql)or die(mysqli_error($connect));
    header("location: ../webpages/studentsubject.php?msg=success");
}



mysqli_close($connect);
?>

 