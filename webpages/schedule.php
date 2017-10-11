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

    <title>CKC Attendance Monitoring System -Schedule</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../css/buttons.bootstrap.min.css">
    <link href="../css/bootstrap-toggle.min.css" rel="stylesheet">
    <!--<link href="../css/jquery.dataTables.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href=".././fonts/font-awesome/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="../css/additionalstyle.css" rel="stylesheet" type="text/css">
    <!--main edit css of the the entire page-->
    <link href="../css/adminstyle.css" rel="stylesheet">
    <!--main edit css of the the entire page-->
    <link href="../css/load.css" rel="stylesheet">
    <!--for website loader-->


    <script src="../js/jquery.js"></script>



    <style>
        .btn-edit label label-success {
            margin-right: 566px;
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
        
        .file {
            visibility: hidden;
            position: absolute;
        }
        
        .form-control {
            border-width: 2px;
            border-color: #b1c4cc;
        }
        
        .form-control:focus {
            border-color: #55819b;
            border-width: 4px;
            box-shadow: none;
        }
        
        label {
            color: grey;
            font-family: roboto;
        }
        
      
        
        #viewcalendar .modal-dialog {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        
        #viewcalendar .modal-content {
            width: 100%;
            height: 100%;
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
                        <a href="viewfaculty.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Faculty</a>
                    </li>
                    <li>
                        <a href="viewstudent.php"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Student</a>
                    </li>
                    <li>
                        <a href="viewsubject.php"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Subject</a>
                    </li>

                    <li class="active">
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
                        <li class="active"><span>Schedule</span></li>
                    </ol>


                </div>


                <div class="row">


                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" data-toggle="modal" data-target="#viewcalendar" class="btn btn-primary pull-right sbtn-lg">
                                <i class="fa fa-calendar-plus-o"></i>
                            </button>
                            <button type="button" data-toggle="modal" data-target="#addsched" class="btn btn-primary pull-right sbtn-lg" style="margin-right:10px;">
                                <i class="glyphicon glyphicon-plus"></i>
                            </button>

                        </div>
                    </div>

                    <hr>


                    <?php
                  if (isset($_GET["edits"]) && $_GET["edits"] == 'success') {
                    echo '<div class="alert alert-success" style="text-align:center;"><strong>Schedule Successfully Added!</strong></div>';
                    }
                  else if (isset($_GET["msg"]) && $_GET["msg"] == 'exist'){
                      echo '<div class="alert alert-danger" style="text-align:center;"><strong>Schedule is already exists!</strong></div>';
                    }
                  else if (isset($_GET["edit"]) && $_GET["edit"] == 'successful') {
                      echo '<div class="alert alert-success" style="text-align:center;"><strong>Schedule Successfully Updated!</strong></div>';
                    }
                  else if (isset($_GET["edite"]) && $_GET["edite"] == 'successful') {
                      echo '<div class="alert alert-success" style="text-align:center;"><strong>Schedule Successfully Deleted!</strong></div>';
                    }
                ?>


                        <div class="table-responsive">
                            <table id="searchtable" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%" style="background-color:#E8EEF5;">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Faculty</th>
                                        <th>Subject</th>
                                        <th>Day/Time</th>
                                        <th>Semester</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php
//                        $result = mysqli_query($connect, "SELECT * FROM tbl_schedule") or die(mysql_error());
                        $result = mysqli_query($connect, "SELECT * FROM tbl_class_schedule INNER JOIN tbl_faculty ON tbl_faculty.faculty_ID=tbl_class_schedule.faculty_ID LEFT JOIN tbl_subject ON tbl_subject.sub_id=tbl_class_schedule.sub_id RIGHT JOIN tbl_schedule ON tbl_schedule.sched_id=tbl_class_schedule.sched_id WHERE tbl_class_schedule.c_sched_id!=0") or die(mysql_error());
                    ?>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
                                        <tr>
                                            <td>
                                                <?php echo $row['c_sched_id']; ?>
                                            </td>
                                            <td>

                                                <?php echo $row['f_fname']." ".$row['f_lname'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['subject_code']." - ".$row['subject_name'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['day']." ".$row['time_in']." ".$row['time_out'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['sem'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['year'];?>
                                            </td>

                                            <td><button class="btn-editsched btn btn-primary btn-sm" data-toggle="modal" data-sids='<?php echo $row['c_sched_id']; ?>' data-faculty='<?php echo $row['faculty_ID']; ?>' data-subject='<?php echo $row['sub_id']; ?>' data-schedule='<?php echo $row['sched_id']; ?>' data-semester='<?php echo $row['sem']; ?>' data-year='<?php echo $row['year']; ?>' data-target="#editsched"> <span class="fa fa-fw fa-edit" aria-hidden="true"></span>
                                            </button> <a data-confirm="Are you sure you want to delete?" href="../php/deletesched.php?sids=<?php echo $row['c_sched_id']; ?>" class="btn btn-danger btn-sm"><span class="fa fa-fw fa-trash-o" aria-hidden="true"></span></a>

                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>


                        <!-- Modal for edit-->
                <div class="modal fade" id="addsched" role="dialog">
                    <div class="modal-dialog">


                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><i class="glyphicon glyphicon-time"></i> Add Faculty Schedule</h4>
                            </div>
                        <form action="../php/addsched.php" method="post">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">


                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="id" name="sd">
                                        </div>

                                        <div class="form-group form-group-lg">
                                            <select name="faculty" id="facult" class="form-control input-lg" style="margin-bottom:10px;" required>
                                                                            <option>Select Faculty</option>
                                                                            <?php
                                                                                $faculty = mysqli_query($connect,"SELECT * FROM tbl_faculty");
                                                                                while($row = mysqli_fetch_array($faculty,MYSQLI_ASSOC)){
                                                                                    echo "<option value=".$row['faculty_ID'].">".$row['f_fname']." ".$row['f_lname']."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                        </div>

                                        <div class="form-group form-group-lg">
                                            <select name="subject" id="subj" class="form-control input-lg">
                                                                            <option>Select Subject</option>
                                                                            <?php
                                                                                $faculty = mysqli_query($connect,"SELECT * FROM tbl_subject");
                                                                                while($row = mysqli_fetch_array($faculty,MYSQLI_ASSOC)){
                                                                                    echo "<option value=".$row['sub_id'].">".$row['subject_code']." - ".$row['subject_name']."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                        </div>

                                        <div class="form-group form-group-lg">

                                            <select name="schedule" id="sched" class="form-control input-lg">
                                                                            <option>Select Schedule</option>
                                                                            <?php
                                                                                $faculty = mysqli_query($connect,"SELECT * FROM tbl_schedule");
                                                                                while($row = mysqli_fetch_array($faculty,MYSQLI_ASSOC)){
                                                                                    echo "<option value=".$row['sched_id'].">".$row['day']." | ".$row['time_in']." - ".$row['time_out']."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                        </div>

                                        <div class="form-group form-group-lg">
                                            <!--<label for="form_email">Submitted Documents</label>-->

                                            <select name="semester" id="seme" class="form-control input-lg">
                                                                            <option value="1">1st Semester</option>
                                                                            <option value="2">2nd Semester</option>
                                                                            </select>

                                        </div>
                                    
                                    </div>
                                </div>
                            </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                        </div>

                    </div>
                </div>

                        <!-- Modal for edit-->
                        <div class="modal fade" id="editsched" role="dialog">
                            <div class="modal-dialog">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"> </i> Update Faculty Schedule</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/updatesched.php" method="post">
                                      


                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="u_id" name="sids">
                                                </div>

                                                <div class="form-group form-group-lg">
                                                    <select name="faculty" id="u_facult" class="form-control input-lg" style="margin-bottom:10px;" required>                                                                                  
                                                     <?php
                                                      $faculty = mysqli_query($connect,"SELECT * FROM tbl_faculty");
                                                            while($row = mysqli_fetch_array($faculty,MYSQLI_ASSOC)){
                                                                echo "<option value=".$row['faculty_ID'].">".$row['f_fname']." ".$row['f_lname']."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="form-group form-group-lg">
                                                    <select name="subject" id="u_sub" class="form-control input-lg">
                                                                                    
                                                                                    <?php
                                                                                        $faculty = mysqli_query($connect,"SELECT * FROM tbl_subject");
                                                                                        while($row = mysqli_fetch_array($faculty,MYSQLI_ASSOC)){
                                                                                            echo "<option value=".$row['sub_id'].">".$row['subject_code']." - ".$row['subject_name']."</option>";
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                </div>

                                                <div class="form-group form-group-lg">

                                                    <select name="schedule" id="u_sch" class="form-control input-lg">
                                                                                    
                                                                                    <?php
                                                                                        $faculty = mysqli_query($connect,"SELECT * FROM tbl_schedule");
                                                                                        while($row = mysqli_fetch_array($faculty,MYSQLI_ASSOC)){
                                                                                            echo "<option value=".$row['sched_id'].">".$row['day']." | ".$row['time_in']." - ".$row['time_out']."</option>";
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                </div>

                                                <div class="form-group form-group-lg">
                                                    <!--<label for="form_email">Submitted Documents</label>-->

                                                    <select name="semester" id="u_sem" class="form-control input-lg">
                                                                                    <option value="1">1st Semester</option>
                                                                                    <option value="2">2nd Semester</option>
                                                                                    </select>

                                                </div>
                                             
                                        


                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>




                        <!-- Modal for edit-->
                        <div class="modal fade" id="viewcalendar" role="dialog">
                            <div class="modal-dialog">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-calendar"></i> View Day/Time</h4>
                                    </div>
                                    <form action="../php/addsched.php" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <button type="button" data-toggle="modal" data-target="#addcalen" class="btn btn-primary pull-right sbtn-lg" style="margin-right:10px; margin-bottom:10px;">
                                                                <i class="glyphicon glyphicon-plus"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table id="searchtable" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%" style="background-color:#E8EEF5; border-color:#afafaf;">

                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Day</th>
                                                                    <th>Time In</th>
                                                                    <th>Time Out</th>
                                                                    <th>action</th>
                                                                </tr>
                                                            </thead>

                                                            <?php
                    //                        $result = mysqli_query($connect, "SELECT * FROM tbl_schedule") or die(mysql_error());
                                            $result = mysqli_query($connect, "SELECT * FROM tbl_schedule") or die(mysql_error());
                                        ?>
                                                                <tbody>
                                                                    <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $row['sched_id']; ?>
                                                                        </td>
                                                                        <td>

                                                                            <?php echo $row['day'];?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['time_in']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $row['time_out'];?>
                                                                        </td>
                                                                        <td><button class="btn-edite btn btn-primary btn-sm" data-toggle="modal" data-sids='<?php echo $row[' sched_id ']; ?>' data-day='<?php echo $row[' day ']; ?>' data-tin='<?php echo $row[' time_in ']; ?>' data-tout='<?php echo $row[' time_out ']; ?>' data-target="#edit"> <span class="fa fa-fw fa-edit" aria-hidden="true"></span>
                                                                </button> <a data-confirm="Are you sure you want to delete?" href="../php/deletesched.php?sids=<?php echo $row['sched_id']; ?>" class="btn btn-danger btn-sm"><span class="fa fa-fw fa-trash-o" aria-hidden="true"></span></a>

                                                                            <?php } ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div class="modal fade" id="addcalen" role="dialog">
                            <div class="modal-dialog">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-clock"> </i> Add Day/Time</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/addsched.php" method="post">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control " id="ids" name="sids">
                                            </div>

                                            <div class="form-group form-group-lg">

                                                <select id="sday" name="day" class="form-control input-lg">
                                                            
                                                          <option value=" ">--- Please Select Day ---</option>
                                                          <option value="Monday">Monday</option>
                                                          <option value="Tuesday">Tuesday</option>
                                                          <option value="Wednesday">Wednesday</option>
                                                          <option value="Thursday">Thursday</option>
                                                          <option value="Friday">Friday</option>
                                                          <option value="Saturday">Saturday</option>

                                                        </select>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group form-group-lg">

                                                <input type="text" list="opts" class="form-control" id="stin" name="tin" placeholder="Time in"> <datalist id="opts">
                                                  <option value="7:30">7:30 am</option>
                                                  <option value="9:00">9:00 am</option>
                                                  <option value="10:30">10:30 am</option>
                                                  <option value="12:00">12:00 pm</option>
                                                  <option value="1:00">1:00 pm</option>
                                                  <option value="2:30">2:30 pm</option>
                                                  <option value="4:00">4:00 pm</option>
                                                  <option value="5:30">5:30 pm</option>
                                                  <option value="7:00">7:00 pm</option>
                                                  <option value="8:00">8:00 pm</option>

                                                </datalist>
                                            </div>


                                            <div class="form-group form-group-lg">

                                                <input type="text" list="opts" class="form-control" id="stout" name="tout" placeholder="Time out"> <datalist id="opts">
                                                  <option value="7:30">7:30 am</option>
                                                  <option value="9:00">9:00 am</option>
                                                  <option value="10:30">10:30 am</option>
                                                  <option value="12:00">12:00 pm</option>
                                                  <option value="1:00">1:00 pm</option>
                                                  <option value="2:30">2:30 pm</option>
                                                  <option value="4:00">4:00 pm</option>
                                                  <option value="5:30">5:30 pm</option>
                                                  <option value="7:00">7:00 pm</option>
                                                  <option value="8:00">8:00 pm</option>

                                                </datalist>
                                            </div>



                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Modal for edit-->
                        <div class="modal fade" id="edit" role="dialog">
                            <div class="modal-dialog">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"> </i> Update Schedule</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/updatesched.php" method="post">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control " id="ids" name="sids">
                                            </div>

                                            <div class="form-group form-group-lg">

                                                <select id="sday" name="day" class="form-control input-lg">
                                                            
                                                          <option value=" ">--- Please Select Day ---</option>
                                                          <option value="Monday">Monday</option>
                                                          <option value="Tuesday">Tuesday</option>
                                                          <option value="Wednesday">Wednesday</option>
                                                          <option value="Thursday">Thursday</option>
                                                          <option value="Friday">Friday</option>
                                                          <option value="Saturday">Saturday</option>

                                                        </select>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group form-group-lg">

                                                <input type="text" list="opts" class="form-control" id="stin" name="tin" placeholder="Time in"> <datalist id="opts">
                                                  <option value="7:30">7:30 am</option>
                                                  <option value="9:00">9:00 am</option>
                                                  <option value="10:30">10:30 am</option>
                                                  <option value="12:00">12:00 pm</option>
                                                  <option value="1:00">1:00 pm</option>
                                                  <option value="2:30">2:30 pm</option>
                                                  <option value="4:00">4:00 pm</option>
                                                  <option value="5:30">5:30 pm</option>
                                                  <option value="7:00">7:00 pm</option>
                                                  <option value="8:00">8:00 pm</option>

                                                </datalist>
                                            </div>


                                            <div class="form-group form-group-lg">

                                                <input type="text" list="opts" class="form-control" id="stout" name="tout" placeholder="Time out"> <datalist id="opts">
                                                  <option value="7:30">7:30 am</option>
                                                  <option value="9:00">9:00 am</option>
                                                  <option value="10:30">10:30 am</option>
                                                  <option value="12:00">12:00 pm</option>
                                                  <option value="1:00">1:00 pm</option>
                                                  <option value="2:30">2:30 pm</option>
                                                  <option value="4:00">4:00 pm</option>
                                                  <option value="5:30">5:30 pm</option>
                                                  <option value="7:00">7:00 pm</option>
                                                  <option value="8:00">8:00 pm</option>

                                                </datalist>
                                            </div>



                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>








            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- /#wrapper -->


    <div id="loader"></div>
    <!--Loader-->



    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap.min.js"></script>
    <script src="../js/dataTables.buttons.min.js"></script>
    <script src="../js/buttons.print.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <!--    <script src="../js/dataTables.select.min.js"></script>  <!-- for row selection -->
    <script src="../js/buttons.bootstrap.min.js"></script>
    <script src="../js/buttons.html5.min.js"></script>
    <script src="../js/buttons.colVis.min.js"></script>
    <!-- for column visible -->
    <script src="../js/buttons.flash.min.js"></script>
    <!-- for exporting csv -->
    <script src="../js/bootstrap-toggle.min.js"></script>
    <!-- <script src="../js/vfs_fonts.js"></script>    -->





    <script>
        $(function() {
            $(".btn-editsched").click(function() {


                var s_id = $(this).data("sids");
                var fupdate = $(this).data("faculty");
                var subupdate = $(this).data("subject");
                var scheupdate = $(this).data("schedule");
                var semeupdate = $(this).data("semester");
//                var years = $(this).data("year");



                $("#u_id").val(s_id);
                $("#u_facult").val(fupdate);
                $("#u_sub").val(subupdate);
                $("#u_sch").val(scheupdate);
                $("#u_sem").val(semeupdate);
//                $("#yr").val(years);
//                console.log(s_id+' '+fupdate+' '+subupdate+' sched'+scheupdate+' sem'+semeupdate+' '+years);


            });
            $(document).on('click', '.browse', function() {
                var file = $(this).parent().parent().parent().find('.file');
                file.trigger('click');
            });
            $(document).on('change', '.file', function() {
                $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });

        });

        $(document).ready(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#dataConfirmModal').length) {
                    $('body').append('<div id="dataConfirmModal" class="modal fade" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header modal-header-warning"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> <h4 class="modal-title" id="dataConfirmLabel">Delete Faculty Schedule</h4></div><div class="modal-body"></div><div class="modal-footer"><a class="btn btn-danger" id="dataConfirmOK">Yes</a><a class="btn btn-danger" data-dismiss="modal">No</a></div></div></div></div>');
                }
                id = "dataConfirmOK"
                $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                $('#dataConfirmOK').attr('href', href);
                $('#dataConfirmModal').modal({
                    show: true
                });
                return false;
            });
        });


        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);


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
    <script>
        $(function() {
            $('#toggle-one').bootstrapToggle();
        })
        $(document).ready(function() {
            $('#searchtable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        text: 'Print all',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        text: 'Export',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        columns: ':not(.noVis)',
                        text: 'Column Visible'
                    },
                    {
                        extend: 'print',
                        text: 'Print selected',
                        exportOptions: {
                            columns: ':visible',
                            modifier: {
                                selected: true
                            }
                        }
                    }
                ],
                select: true
            });


        });

    </script>






</body>

</html>
