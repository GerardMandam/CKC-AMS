<?php
include('../php/session.php');
include('../php/sqlconnect.php');
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href=".././fonts/font-awesome/css/font-awesome.min.css">

    <!-- Custom CSS -->

    <link href="../css/adminstyle.css" rel="stylesheet">   <!--main edit css of the the entire page-->
    <link href="../css/load.css" rel="stylesheet">        <!--for website loader-->
<script src="../js/jquery.js"></script> 
<style> 
    .row{
        margin-top: 20px;
    }    
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
                    <li>
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
                    <li  class="active">
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
		<li class="active"><span>Add report</span></li>
	</ol>    
             <?php
              if (isset($_GET["msg"]) && $_GET["msg"] == 'success') {
                echo '<div class="alert alert-success" style="text-align:center;"><strong>Report Successfully Added!</strong></div>';
                }
              else if (isset($_GET["msg"]) && $_GET["msg"] == 'exist'){
                  echo '<div class="alert alert-danger" style="text-align:center;"><strong>User with that report ID already exists!</strong></div>';
              }
            ?>
           
     <div class="col-lg-12">
            <div class="panel panel-default" style="border:none;">
                <div class="panel-body">
                               
                                
    <div class="ibox-content">
          <div class="feed-activity-list">
       

            <form  action="../php/addre.php" method="post">
           
                <fieldset>
                    

    <div class="controls">

        <div class="row">
            
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="form_name">School ID</label>
                    <input id="form_name" type="text" name="id" class="form-control" placeholder="Enter School ID.... " required="required" data-error="School ID is required!">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label for="form_subject">Subject</label>
                    <select name="subjectname" class="form-control">
                    <?php
                        $subject = mysqli_query($connect,"SELECT * FROM tbl_subject");
                        while($row1=mysqli_fetch_array($subject)){
                            echo "<option value=".$row1['sub_id'].">".$row1['subject_code']." ".$row1['subject_name']."</option>";
                        }
                    ?>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label >Subject Teacher</label>
                      <select class="form-control" name="adviser" id="teacherName">
                        <?php 
                        $faculty = mysqli_query($connect,"SELECT * FROM tbl_faculty");
                        while($rows= mysqli_fetch_array($faculty)){
                            echo "<option value=".$rows['faculty_ID'].">".$rows['f_fname']." ".$rows['f_lname']."</option>";
                        }
                        ?>
                      </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label > Subject Time</label>
                    <input type="text" list="opts"  name="time" class="form-control" placeholder="Pick time.."/>
                    <datalist id="opts">
                  <option value="7:30 - 9:00am">7:30 - 9:00am</option>
                  <option value="9:00 - 10:30am">9:00 - 10:30am</option>
                  <option value="10:30 - 12:00pm">10:30 - 12:00pm</option>
                  <option value="1:00 - 2:30pm">1:00 - 2:30pm</option>
                  <option value="2:30 - 4:00pm">2:30 - 4:00pm</option>
                  <option value="4:00 - 5:30pm">4:00 - 5:30pm</option>
                  <option value="5:30 - 7:00pm">5:30 - 7:00pm</option>
                  <option value="7:00 - 8:30pm">7:00 - 8:30pm</option>
                   
                </datalist>
                </div>
            </div>

        </div> 
        <div class="row">
                  <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label for="form_message">Reason</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="State your Reason...." rows="1" required="required" data-error="Reason is required"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
            <div class="col-md-3">
                       <label for="form_lastname"> Date</label>
                       <div class="input-group date input-group-lg " data-provide="datepicker"> 
                        <input type="text" size="16" class="form-control datepicker" name="date"  placeholder="mm/dd/yy">
                        <div class="input-group-addon  ">
                            <span class="fa fa-calendar-plus-o "></span>
                        </div>
                    </div>
            </div>
            
            

            <div class="col-md-3">
                <div class="form-group form-group-lg">
                    <label for="form_email">Submitted Documents</label>
                            <select id="blood_group" name="docu" class="form-control input-lg">
                              <option value="None">None</option>
                              <option value="Medical Certificate">Medical Certificate</option>
                              <option value="Death Certificate">Death Certificate</option>
                              <option value="Incident Report">Incident Report</option>
                              
                            </select>                    
                    <div class="help-block with-errors"></div>
                </div>
            </div>
    
        </div>
<hr>
<hr>
        <div class="row">
         
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit Report">
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
    
    
    <script>
    
    $(function(){
    
    $('.datepicker').datepicker({
        autoclose: true,
        todayBtn: true,
//        orientation: 'bottom auto',
        todayBtn: 'linked',
        todayHighlight: true
    });

    });
    </script>
  
    
    <script src=".././js/datepicker.js"></script>
 

    


</body>

</html>
