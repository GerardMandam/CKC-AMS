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
    body {
              padding-top: 50px;
            }
            #loginForm {
              max-width: 500px;
              margin: 0 auto;
            }

            #loginForm .form-control {
              position: relative;
              height: 60px;
              font-size: 25px;
              text-align: center;
              border-radius: 0;
            margin-top:3em;


            }

    </style>
</head>
                 
    <body>   
 
              <div class="row" style="margin-bottom:4em;">
                    <div class="col-lg-12">

                        <div class="image"> <img src="image/logoo.png" style="height:90px;"></div>
                    </div>
                </div>  
                <div class="container">

                                <form id="loginForm">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="School ID...." required autofocus>
                                    <button class="btn btn-lg btn-primary" name="login" style="margin-top:1em; width:100%;" type="submit"> <i class="glyphicon glyphicon-check"></i>
                                </button>
                                </form>
                </div>
          
                   
                <!-- jQuery -->
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>
         
</body>

</html>
