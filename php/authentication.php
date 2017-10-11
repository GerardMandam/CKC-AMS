
<?php
session_start();

include('sqlconnect.php');
$em = $_POST["user"];
$pword = $_POST["pass"];


$sql = "SELECT * FROM DSA WHERE ID = '$em' AND password = '$pword'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
if(count($row)>0){
if ($row['usertype'] == "0") {

    $_SESSION['loggedin'] = true;
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['Firstname'] = $row['Firstname'];
	$_SESSION['Lastname'] = $row['Lastname'];
	$_SESSION['usertype']=$row['usertype'];
	header("location:./webpages/home.php");

}


}
else {
     header("location: ./index.php?msg=failed");
}
?>
