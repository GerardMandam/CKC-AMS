<?php 
include("sqlconnect.php");


$su = $_POST["subcod"];
$sub = $_POST["subdescr"];
$uni = $_POST["subunit"];
$subsem = $_POST["sem"];
$semid = $_POST["sidss"];



 $sql = mysqli_query($connect, "UPDATE tbl_subject SET  subject_code = '$su', subject_name = '$sub', units = '$uni', sem = '$subsem'  WHERE sub_id = '$semid'" );
        

 header("location: ../webpages/viewsubject.php?edit=successful");

mysqli_close($connect);
?>