<?php 
include("sqlconnect.php");


$subco = $_POST["subc"];
$subdesc = $_POST["subdes"];
$subuni = $_POST["subun"];
$subsem = $_POST["sem"];





$res = mysqli_query($connect, "SELECT * FROM tbl_subject WHERE sub_id = '$subi'")or die(mysqli_error());

if (mysqli_num_rows($res)>0) {
    header("location: ../webpages/viewsubject.php?msg=exist");
} else {

    $sql = "INSERT INTO tbl_subject( subject_code, subject_name, units, sem)
		VALUES ('".$subco."', '".$subdesc."', '".$subuni."', '".$subsem."')";

        mysqli_query($connect,$sql)or die(mysqli_error($connect));
    header("location: ../webpages/viewsubject.php?msg=success");
}
mysqli_close($connect);
?>