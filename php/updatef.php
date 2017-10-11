<?php 
include("sqlconnect.php");

$id = $_POST["sidf"];
$fname = $_POST["fnamef"];
$lname = $_POST["lnamef"];
$mi = $_POST["mif"];
$gender = $_POST["genderf"];



 $sql = mysqli_query($connect, "UPDATE tbl_faculty SET f_lname = '$lname', f_fname = '$fname', f_mname = '$mi', gender = '$gender' WHERE faculty_ID = '$id'");
        

 header("location: ../webpages/viewfaculty.php?edit=successful");

mysqli_close($connect);
?>