<?php 
include("sqlconnect.php");

$sidf = $_POST["idf"];
$fnamef = $_POST["fnamef"];
$lnamef = $_POST["lnamef"];
$mif = $_POST["mnamef"];
$genderf =$_POST["sgenderf"];


$res = mysqli_query($connect, "SELECT * FROM tbl_faculty WHERE faculty_ID = '$sidf'")or die(mysqli_error());

if (mysqli_num_rows($res)>0) {
    header("location: ../webpages/viewfaculty.php?msg=exist");
} else {

    $sql = "INSERT INTO tbl_faculty(faculty_ID, f_fname, f_lname, f_mname, gender)
		VALUES ('".$sidf."', '".$fnamef."', '".$lnamef."', '".$mif."', '".$genderf."')";

        mysqli_query($connect,$sql)or die(mysqli_error($connect));
    header("location: ../webpages/viewfaculty.php?msg=success");
}




?>