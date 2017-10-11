<?php

include('../php/sqlconnect.php');
include('../php/session.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CKC Attendance Monitoring System</title>

    <!-- Bootstrap Core CSS -->
    <link href=".././css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=".././fonts/font-awesome/css/font-awesome.min.css">


    <!-- Custom CSS -->

    <link href="../css/adminstyle.css" rel="stylesheet">   <!--main edit css of the the entire page-->
    <link href="../css/load.css" rel="stylesheet">        <!--for website loader-->
    <link href="../css/calendar.css" rel="stylesheet"> 
     <link rel='stylesheet' href='../css/fullcalendar.css' />


  
    
   <script src="../js/jquery.js"></script> 

    <script>
    
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        dayClick: function() {
             var moment = $('#calendar').fullCalendar('getDate');
        alert("The current date of the calendar is " + moment.format());
        }
    });
    });
    
    </script>

  <style>
    #badge{
        background-color: #f74f4f;
    }
      .text-muted{
          margin-top:10px;
          text-transform: uppercase;
      }  
      
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

  </style>
 

    
</head>

<body>


    
    <div id="wrapper">

      <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="link link--ams navbar-brand" href="home.php" data-letters="CKC-AMS">CKC-AMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="notify">
                        <i class="fa fa-bell fa-lg"></i>
                        <b class="badge" id="badge"> 2</b>
                    </a>
                    <ul class="dropdown-menu alert-dropdown">

                    </ul>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o fa-lg " aria-hidden="true"></i>  &nbsp; <?php echo ucwords(strtolower($_SESSION['Firstname'])).' '.ucwords(strtolower($_SESSION['Lastname']));?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../php/logout.php"><i class="fa fa-fw fa-power-off" aria-hidden="true"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="home.php"><i class="fa fa-fw fa-dashboard" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="calendar.php"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i> Calendar</a>
                    </li>
               
                    <li>
                        <a href="viewfaculty.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Faculty</a>
                    </li>
                    <li>
                        <a href="viewstudent.php"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Student</a>
                    </li>
                     <li>
                        <a href="viewsubject.php"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Subject</a>
                    </li>
                    <li>
                        <a data-toggle="collapse" data-target="#report1"><i class="fa fa-fw fa-share" aria-hidden="true"></i> Report <i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
                        <ul id="report1" class="collapse">
                            <li>
                                <a href="addreport.php">Add Report</a>
                            </li>
                            <li>
                                <a href="viewreport.php">View Report</a>
                            </li>
                        </ul>
                    </li>
                         <li>
                        <a href="#"><i class="fa fa-fw fa-envelope-open-o" aria-hidden="true"></i> Generate SMS</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-record" aria-hidden="true"></i> Generate Report</a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Notification </a>
                    
                    </li>
                    <li>
                        <a href="attendance.php"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Attendance </a>
                    
                    </li>
                   
                  


                </ul>


            </div>
            <!-- /.navbar-collapse -->


        </nav>

        
        

    <div id="page-wrapper">

    <div class="container-fluid">

        

       
        
      <!-- This row is for panel adding -->
    <div class="row">
        
    <ol class="breadcrumb breadcrumb-arrow">
		<li class="active"><span>Calendar</span></li>
	</ol>
                    


     <div class="col-lg-12">
            <div class="panel panel-default">
            

   <div id='calendar'></div>
       
  </div>
 
</div>
                    
        </div>
    </div>       
    
        
    </div>
         <!-- /.row -->

    </div>
        <!-- /.container-fluid -->

    </div>
        <!-- /#page-wrapper -->

    </div>
        <!-- /#wrapper -->

    </div>
    <div id="loader"></div> <!--Loader-->
    
     <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src='../js/moment.min.js'></script>
    <script src='../js/fullcalendar.js'></script>


   
<script>
   var $document = $(document);
(function () { 
 
    function check(){
            var bd = $("#badge").text();
            if(bd=='0'){
                $("#badge").hide();     
            }
        }
        check();
        $("#notify").click(function(){
           $("#badge").hide(); 
        });
    })();

    (function () {
      $document.bind('contextmenu', function (e) {
        e.preventDefault();
      });  
    })();
</script>s
    
    <script>
    function onReady(callback) {
        var intervalID = window.setInterval(checkReady, 1000);

        function checkReady() {
            if (document.getElementsByTagName('body')[0] !== undefined) {
                window.clearInterval(intervalID);
                callback.call(this);
            }
        }
    }

    function show(id, value) {
        document.getElementById(id).style.display = value ? 'block' : 'none';
    }

    onReady(function () {
        show('wrapper', true);
        show('loader', false);
    });
    </script>    

</body>

</html>
