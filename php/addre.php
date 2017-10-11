<?php 
include("sqlconnect.php");


$sid = $_POST["aid"];
$doc = $_POST["docu"];
$sub = $_POST["sub"];
$rmessage = $_POST["message"];




$res = mysqli_query($connect, "SELECT * FROM tbl_class_attendance WHERE ca_id = '$sid'")or die(mysqli_error());

if (mysqli_num_rows($res)>0) {
    header("location: ../webpages/viewreport.php?msg=exist");
} else {

    $sql = "INSERT INTO tbl_class_attendance( ca_id, ss_id,document, reason)
		VALUES ('".$sid."','".$sub."','".$doc."', '".$rmessage."')";

        mysqli_query($connect,$sql)or die(mysqli_error($connect));
    header("location: ../webpages/viewreport.php?msg=success");
}



mysqli_close($connect);
?>

 