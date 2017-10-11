<?php
include('sqlconnect.php');


$id = $_GET['sidss'];
$sql = mysqli_query($connect, "DELETE FROM tbl_subject WHERE sub_id= '".$id."'");

header("location: ../webpages/viewsubject.php?edite=successful");

mysqli_close($connect);
?>
