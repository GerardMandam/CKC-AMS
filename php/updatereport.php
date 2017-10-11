<?php 
include("sqlconnect.php");

$id = $_POST["sid"];
$sbname = $_POST["subjectname"];
$sbtname = $_POST["subjectteacher"];
$doc = $_POST["docu"];
$res = $_POST["reasn"];
$tm = $_POST["times"];
$dte = $_POST["date"];


 $sql = mysqli_query($connect, "UPDATE tbl_absentdetails SET subject = '$sbname', adviser = '$sbtname', document = '$doc', reason = '$res', time = '$tm', date = '$dte' WHERE report_id = '$id'");
        

 header("location: ../webpages/viewreport.php?edit=successful");

mysqli_close($connect);
?>