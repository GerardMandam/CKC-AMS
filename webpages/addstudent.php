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
    <link href=".././css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=".././fonts/font-awesome/css/font-awesome.min.css">


    <!-- Custom CSS -->
 
    <link href=".././css/adminstyle.css" rel="stylesheet" type="text/css">   <!--main edit css of the the entire page-->
    <link href=".././css/load.css" rel="stylesheet" type="text/css">        <!--for website loader-->
    

<script src=".././js/jquery.js"></script> 
    

<style>
    .btn{
        float: right;
    }
    .form-control{
 
        border-width: 2px; 
        border-color:#b1c4cc;
        
    }
    .form-control:focus{
        border-color: #55819b;
        border-width: 4px; 
        box-shadow: none;
    }
    label{
    color: grey;
    font-family: roboto;    
}   
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
                    <li>
                        <a href="calendar.php"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i> Calendar</a>
                    </li>
               
                    <li>
                        <a href="viewfaculty.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Faculty</a>
                    </li>
                    
                    <li class="active">
                        <a data-toggle="collapse" data-target="#stud1"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Student <i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
                        <ul id="stud1" class="collapse">
                            <li>
                                <a href="addstudent.php">Add Student</a>
                            </li>
                            <li>
                                <a href="viewstudent.php">View Student</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="collapse" data-target="#stud5"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Subject <i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
                        <ul id="stud5" class="collapse">
                            <li>
                                <a href="addsubject.php">Add Subject</a>
                            </li>
                            <li>
                                <a href="viewsubject.php">View Subject</a>
                            </li>
                        </ul>
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
		<li class="active"><span>Add Student</span></li>
	</ol>    
        
        
        <?php
          if (isset($_GET["msg"]) && $_GET["msg"] == 'success') {
            echo '<div class="alert alert-success" style="text-align:center;"><strong>User Successfully Added!</strong></div>';
            }
          else if (isset($_GET["msg"]) && $_GET["msg"] == 'exist'){
              echo '<div class="alert alert-danger" style="text-align:center;"><strong>User with that school ID already exists!</strong></div>';
          }
        ?>

     <div class="col-lg-12">
            <div class="panel panel-default" style="border:none;">
                <div class="panel-body">
                               
                                
    <div class="ibox-content">
          <div class="feed-activity-list">
        

          
            <form  action="../php/adds.php" method="post">
           
                <fieldset>
                    

    <div class="controls">

        <div class="row">
            
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="name">School ID</label>
                    <input id="form_name" type="text" name="id" class="form-control" placeholder="Enter School ID.... " required="required" data-error="School ID is required!">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>
        
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group form-group-lg">
                    <label for="form_subject">Lastname</label>
                    <input id="Lastname" type="text" name="lname" class="form-control" placeholder="lastname..." required="required" data-error="lastname is required!">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group form-group-lg">
                    <label for="form_email">Firstname</label>
                    <input id="Firstname" type="text" name="fname" class="form-control" placeholder="firstname..." required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group form-group-lg">
                    <label for="form_email">Middlename</label>
                    <input id="middlename" type="text" name="mname" class="form-control" placeholder="middle name..." required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        </div> 
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="form_email">Mobile no.</label>
                    <input id="Firstname" type="text" name="mobile" class="form-control" placeholder="mobile no..." required="required" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
         
            
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="form_email">Year level</label>
                            <select id="blood_group" name="ylevel" class="form-control input-lg">
                              <option value="1">1st</option>
                              <option value="2">2nd</option>
                              <option value="3">3rd</option>
                              <option value="4">4th</option>
                              
                            </select>                    
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="form_email">Course</label>
                            <select id="blood_group" name="course" class="form-control input-lg">
                             <option value="BSIT">BSIT</option>
                              <option value="BSHRM">BSRHM</option>
                              <option value="BSBA">BSA</option>
                              <option value="BSCRIM">BSCRIM</option>
                              <option value="BSN">BSN</option>
                              <option value="BSSW">BSSW</option>
                              <option value="BSBA">BSBA</option>
                              <option value="BEED">BEED</option>
                            </select>                    
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="form_email">Gender</label>
                            <select id="blood_group" name="sgender" class="form-control input-lg">
                              <option value="F">Female</option>
                              <option value="M">Male</option>
                             
                              
                            </select>                    
                    <div class="help-block with-errors"></div>
                </div>
            </div>
    
        </div>
<hr>
<hr>
       <div class="row">
         
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit">
            </div>
        </div>
     
    </div>
               
                </fieldset>
                
                
                
            </form>
          </div><!--feed-activity-list-->

    </div><!-- ibox content end -->
                    
                    

                                
               
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

    <div id="loader"></div> <!--Loader-->

    
   <!-- Bootstrap Core JavaScript -->
    <script src=".././js/bootstrap.min.js"></script>
    
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
        
            window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
            }, 4000); 
    </script>   
    
    <script src=".././js/Chart.bundle.min.js"></script>
    <script src=".././js/api.js"></script>
    <script src=".././js/jscostumize.js"></script>

    


</body>

</html>
