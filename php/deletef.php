<?php
include('sqlconnect.php');


$id = $_GET['sidf'];
$sql = mysqli_query($connect, "DELETE FROM tbl_faculty WHERE faculty_ID = '".$id."'");

header("location: ../webpages/viewfaculty.php?edite=successful");

mysqli_close($connect);
?>
