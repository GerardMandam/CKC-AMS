<?php


$em = $_POST["user"];
$pword = $_POST["pass"];


$sql = "SELECT * FROM DSA WHERE ID = '$em' AND password = '$pword'";
$result = mysqli_query($connect,$sql);
if($result->num_rows == 0){
    $_SESSION['message']="User with tha id doesn't exist!";
    
}
else{ //user exists
    $user = $result->fetch_assoc();
    
    if(password_verify($_POST['password'],$user['password']) ){
        
        $_SESSION['user'] = $user['user'];
        $_SESSION['Firstname'] = $user['Firstname'];
        $_SESSION['Lastname'] = $user['Lastname'];
    

        $_SESSION['loggedin'] = true;
  
	     header("location: ../webpages/home.php");

    }
    else{
        header("location: ../index.php?msg=failed");
    }
}
?>