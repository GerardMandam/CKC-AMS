
<?php
include('sqlconnect.php');
session_start();
if(session_destroy()){
	header("location:../index.php");
}
mysqli_close($db);
?>