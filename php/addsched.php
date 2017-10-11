<?php 
include("sqlconnect.php");

$sidf= $_POST["sd"];
$facult= $_POST["faculty"];
$subj= $_POST["subject"];
$sched= $_POST["schedule"];
$seme= $_POST["semester"];
$yer= $_POST["year"];

$res = mysqli_query($connect, "SELECT * FROM tbl_class_schedule WHERE c_sched_id = '$sidf'")or die(mysqli_error());

if (mysqli_num_rows($res)>0) {
    header("location: ../webpages/schedule.php?msg=exist");
} else {

    $sql = "INSERT INTO tbl_class_schedule( faculty_ID, sub_id, sched_id, sem, year)
		VALUES ('".$facult."', '".$subj."', '".$sched."', '".$seme."', '".$yer."')";
    

        
        
        mysqli_query($connect,$sql)or die(mysqli_error($connect));
    header("location: ../webpages/schedule.php?edits=success");
}




?>