<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CKC AMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/slide.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .login_box{
            font-family:serif;
        }
    </style>
</head>
    
<?php 
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    if (isset($_POST['login'])) //user login 
    {
        require './php/authentication.php';
}
    
}

?>                     
    <body>   
 
        
            <div class="con">
    
                        
                    <ul class="cb-slideshow">
                        <li><span>Image 01</span></li>
                        <li><span>Image 02</span></li>
                        <li><span>Image 03</span><div><h3>Faith</h3></div></li>
                        <li><span>Image 04</span><div><h3>Excellence</h3></div></li>
                        <li><span>Image 05</span><div><h3>Service</h3></div></li>
                        <li><span>Image 06</span></li>


                    </ul>
                                    
                       <div class="row" style="margin-bottom:4em;">
                          <div class="col-lg-12">
                              <p>CKC&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; ATTENDANCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  MONITORING SYSTEM</p>
                            <div class="image"> <img src="image/logoo.png" style="height:90px;"></div>
                            </div>
                        </div>     
                <div class="container">
  
                        <!-- Codrops top bar -->
                        <div class="codrops-top" >
     
    

                            <div class="clr">

                                <div class="card card-container">
                                 <h2 class='login_title text-center'>Login</h2>
                                  <hr style="background:white;">
                                            <?php 
                                            if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                                            echo '<div class="alert alert-danger">Incorrect School ID or Password!</div>';
                                            }
                                            ?>


                                    <form class="form-signin"  method="post">

                                        <span id="reauth-email" class="reauth-email"></span>
                                        <p class="input_title">ID</p>
                                        <input type="text" id="inputEmail" class="login_box" name="user" placeholder="School ID" required autofocus>
                                        <p class="input_title">Password</p>
                                        <input type="password" id="inputPassword" class="login_box" name="pass" placeholder="Enter password" required>
                                        <div id="remember" class="checkbox">
                                            <label>

                                            </label>
                                        </div>
                                        <button class="btn btn-lg btn-primary" name="login" type="submit">Login</button>
                                    </form><!-- /form -->
                                </div><!-- /card-container -->

                            </div>
                        </div><!--/ Codrops top bar -->

                    </div>
   </div>  
               
          
                         <div class="row" style="margin-top:3em;">
                          <div class="col-lg-12">
                            
                            </div>
                        </div>     

                <!-- jQuery -->
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>
         
</body>

</html>
