<?php
include('sqlconnect.php');


$id = $_GET['sid'];
$sql = mysqli_query($connect, "DELETE FROM tbl_student WHERE school_ID = '".$id."'");

header("location: ../webpages/viewstudent.php?edite=successful");

mysqli_close($connect);
?>
