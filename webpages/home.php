<?php

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
    <link href=".././css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=".././fonts/font-awesome/css/font-awesome.min.css" type="text/css">


    <!-- Custom CSS -->

    <link href="../css/adminstyle.css" rel="stylesheet" type="text/css">
    <!--main edit css of the the entire page-->
    <link href="../css/load.css" rel="stylesheet" type="text/css">
    <!--for website loader-->
    <link href="tooltip.css" rel="stylesheet" type="text/css">


    <script src=".././js/jquery.js"></script>



<style>
     .panel-heading{
            
        }
        #badge {
            background-color: #f74f4f;
        }
        
        .text-muted {
            margin-top: 10px;
            text-transform: uppercase;
        }
        
        #test+.tooltip>.tooltip-inner {
            background-color: #9ec3ff;
            color: white;
            border: 1px solid #d0d3d8;
            padding: 15px;
            font-size: 14px;
        }
        
        #test+.tooltip.bottom>.tooltip-arrow {
            border-bottom: 5px solid #d0d3d8;
        }
        
        #test1+.tooltip>.tooltip-inner {
            background-color: #95d8ba;
            color: #FFFFFF;
            border: 1px solid #d0d3d8;
            padding: 15px;
            font-size: 12px;
        }
        
        #test1+.tooltip.bottom>.tooltip-arrow {
            border-bottom: 5px solid #d0d3d8;
        }
        
        #test2+.tooltip>.tooltip-inner {
            background-color: #f7c37b;
            color: #FFFFFF;
            border: 1px solid #d0d3d8;
            padding: 15px;
            font-size: 12px;
        }
        
        #test2+.tooltip.bottom>.tooltip-arrow {
            border-bottom: 5px solid #d0d3d8;
        }
        
        #test3+.tooltip>.tooltip-inner {
            background-color: #f9b6ae;
            color: #FFFFFF;
            border: 1px solid #d0d3d8;
            padding: 15px;
            font-size: 12px;
        }
        
        #test3+.tooltip.bottom>.tooltip-arrow {
            border-bottom: 5px solid #d0d3d8;
        }SSS
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
                        <b class="badge" id="badge"> 7</b>
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
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-dashboard" aria-hidden="true"></i> Dashboard</a>
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
                        <a href="schedule.php"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i> Schedule </a>
                    
                    </li>
                    <li>
                        <a href="studentsubject.php"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Student Subject</a>
                    </li>
                    <li>
                        <a href="viewreport.php"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Class Attendance</a>
                    </li>
                    <li>
                        <a href="attendance.php"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Attendance</a>
                    </li>
                    <li>
                        <a href="event.php"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Event Attendance</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Generate SMS</a>
                    </li> 
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file" aria-hidden="true"></i> Generate Report</a>
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
                        <li><span><i class="fa fa-home" aria-hidden="true"></i></span></li>
                        <li class="active"><span>Dashboard</span></li>
                    </ol>

                    <div class="col-lg-12">
                        <div class="panel panel-default" style="border:none" ;>

                            <div class="panel-body">


                                <div class="col-xs-12 col-md-6 col-lg-3">
                                    <div class="panel panel-blue panel-widget " id="test" data-toggle="tooltip" data-placement="bottom" title="There are  <?php $sql = mysqli_query($connect," SELECT COUNT(*) AS TOTAL FROM tbl_student ");
                                     $row = mysqli_fetch_assoc($sql);
                                     echo $row['TOTAL']; ?> registered students in the database." style="border:1px solid #e8e5e5; border-radius:10px;">
                                        <div class="row no-padding" id="shadow">
                                            <div class="col-sm-3 col-lg-5 widget-left">
                                                <span class="fa fa-database fa-4x" aria-hidden="true"><use xlink:href="#stroked-bag"></use></span>

                                            </div>
                                            <div class="col-sm-9 col-lg-7 widget-right" > 
                                                <div class="large">
                                                    <?php $sql = mysqli_query($connect,"SELECT COUNT(*) AS TOTAL FROM tbl_student");
                                                                 $row = mysqli_fetch_assoc($sql);
                                                                 echo $row['TOTAL']; ?>
                                                </div>
                                                <!--PHP code for showing the total number of students from database-->

                                                <div class="text-muted">Students</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-6 col-lg-3">
                                    <div class="panel panel-teal panel-widget" id="test1" data-toggle="tooltip" data-placement="bottom" title="Chaching" style="border:1px solid #e8e5e5; border-radius:10px;">
                                        <div class="row no-padding" id="shadow">
                                            <div class="col-sm-3 col-lg-5 widget-left">
                                                <span class="fa fa-user-o fa-4x" aria-hidden="true"><use xlink:href="#stroked-empty-message"></use></span>
                                            </div>
                                            <div class="col-sm-9 col-lg-7 widget-right">
                                                <div class="large">24</div>
                                                <div class="text-muted">Absent</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-6 col-lg-3">
                                    <div class="panel panel-orange panel-widget" id="test2" data-toggle="tooltip" data-placement="bottom" title="chachingg" style="border:1px solid #e8e5e5; border-radius:10px;">
                                        <div class="row no-padding" id="shadow">
                                            <div class="col-sm-3 col-lg-5 widget-left">
                                                <span class="fa fa-frown-o fa-4x" aria-hidden="true"><use xlink:href="#stroked-empty-message"></use></span>
                                            </div>
                                            <div class="col-sm-9 col-lg-7 widget-right">
                                                <div class="large">52</div>
                                                <div class="text-muted">Dropped</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-6 col-lg-3">
                                    <div class="panel panel-red1 panel-widget" id="test3" data-toggle="tooltip" data-placement="bottom" title="There are " style="border:1px solid #e8e5e5; border-radius:10px;">
                                        <div class="row no-padding" id="shadow">
                                            <div class="col-sm-3 col-lg-5 widget-left">
                                                <span class="fa fa-folder-open fa-4x" aria-hidden="true"><use xlink:href="#stroked-empty-message"></use></span>
                                            </div>
                                            <div class="col-sm-9 col-lg-7 widget-right">
                                                <div class="large">

                                                </div>
                                                <div class="text-muted">Reports</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

<hr>

                    <div class="col-lg-12">
                        <div class="panel panel-default" style="border:none;">
                            <div class="panel-heading" style="background-color:white; font-size:2em; color:darkgrey;">1st Semester</div>
                            <div class="panel-body">
                                <canvas id="myChart" width="400" height="100"></canvas>

                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
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
    <div id="loader"></div>
    <!--Loader-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/Chart.bundle.min.js"></script>
   

    <script>
        
    //script for badges    
        var $document = $(document);
        (
            function check() {
                var bd = $("#badge").text();
                if (bd == '0') {
                    $("#badge").hide();
                }
            }
            check(); $("#notify").click(function() {
                $("#badge").hide();
            });
        })();

        (function() {
            $document.bind('contextmenu', function(e) {
                e.preventDefault();
            });
        })();

    </script>
    <script>
        
    //script for chart    
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["June", "July", "August", "September", "October"],
                datasets: [{
                    label: 'total numbers of absent',
                    data: [5, 17, 12, 5, 0],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    //script for show tooltip   
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

    
  //javascript for loader
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

        onReady(function() {
            show('wrapper', true);
            show('loader', false);
        });


    </script>

</body>

</html>
