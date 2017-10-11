<?php
include('sqlconnect.php');
session_start();

$user_check = $_SESSION['loggedin'];

    
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
header("location: ../index.php");
}

?>

