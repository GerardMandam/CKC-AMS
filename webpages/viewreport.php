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

    <title>CKC Attendance Monitoring System - Report</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
     <link rel="stylesheet" href="../css/buttons.bootstrap.min.css">
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
        #test +.tooltip>.tooltip-inner {
            background-color: #9ec3ff;
            color: white;
            border: 1px solid #d0d3d8;
            padding: 15px;
            font-size: 14px;
        }
        
        #test +.tooltip.bottom>.tooltip-arrow {
            border-bottom: 5px solid #d0d3d8;
        }
        .file {
          visibility: hidden;
          position: absolute;
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
                    <li class="active">
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
                        <li class="active"><span>Absent Details</span></li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">                       
                            <button type="button" data-toggle="modal" data-target="#import" data-toggle="tooltip" data-placement="bottom" title="import CSV" class="btn btn-primary pull-right sbtn-lg" value="import" style="float:right; margin-bottom:1em; margin-left:1px;">
                                <i class="glyphicon glyphicon-import"></i>
                            </button>

                            <button type="button" data-toggle="modal" data-target="#addabsentdetails" class="btn btn-primary pull-right sbtn-lg">
                                <i class="glyphicon glyphicon-plus"></i>
                            </button>
                        </div>
                    </div>
                    <hr>

                </div>
            <!--    <div class="modal fade" id="import" role="dialog">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header modal-header-primary">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Import</h4>

                            </div>
                            <form class="form-horizontal" action="../php/functioncsvimport.php" method="post" name="upload_excel" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group ">
                                    <div class="col-lg-10 col-lg-offset-1">
                                    <input type="file" name="file" class="file">
                                    <div class="input-group col-xs-z">
                                        <span class="input-group-addon"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control input-lg" disabled placeholder="Upload CSV file">
                                        <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                      </span>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                                <button class="btn btn-primary" data-dismiss="modal">No</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>-->



                <div class="row">


                <?php if (isset($_GET["edit"]) && $_GET["edit"] == 'successful') {
                echo '<div class="alert alert-success" style="text-align:center;"><strong>Report Successfully Updated!</strong></div>';
                }?>

                <?php if (isset($_GET["edite"]) && $_GET["edite"] == 'successful') {
                echo '<div class="alert alert-success" style="text-align:center;"><strong>Report Successfully Deleted!</strong></div>';
                }?>




                        <div class="table-responsive">
                            <table id="searchtable" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%" style="background-color:#E8EEF5; border-color:#afafaf;">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Student Name</th>
                                        <th>Subject Name</th>
                                        <th>Document</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                  <?php
//                        $result = mysqli_query($connect, "SELECT * FROM tbl_schedule") or die(mysql_error());
                        $result = mysqli_query($connect, "SELECT * FROM tbl_class_attendance INNER JOIN tbl_student_subject ON tbl_student_subject.ss_id=tbl_class_attendance.ss_id LEFT JOIN tbl_student ON tbl_student.school_ID=tbl_student_subject.school_ID RIGHT JOIN tbl_class_schedule ON tbl_class_schedule.c_sched_id=tbl_student_subject.c_sched_id JOIN tbl_subject ON tbl_subject.sub_id=tbl_class_schedule.sub_id WHERE tbl_class_attendance.ca_id!=0") or die(mysql_error());
                             
                    ?>
                                    <tbody>
                                        <?php 
                                        $i=1;
                                        while($row = mysqli_fetch_array($result)){?>
                                        <tr>
                                            <td>
                                                <?php echo $i++;?>
                                            </td>
                                            <td>
                                                 <?php echo $row['fname']." ".$row['lname'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['subject_name'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['document']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['reason']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['timestamp']; ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if($row['ca_status']=='L'){
                                                    echo "<span class='label label-warning'>Late</span>";
                                                }elseif($row['ca_status']=='A'){
                                                    echo "<span class='label label-danger'>Absent</span>";
                                                }elseif($row['ca_status']=='P'){
                                                    echo "<span class='label label-success'>Present</span>";
                                                }                       
                                                ?>
                                            </td>
                                            <td><button class="btn-edit btn btn-primary btn-sm" data-toggle="modal" data-sid='<?php echo $row['report_id']; ?>' data-subjectname='<?php echo $row['sub_id']; ?>' data-subjectteacher='<?php echo $row['faculty_ID']; ?>' data-docu='<?php echo $row['document']; ?>' data-reasn='<?php echo $row['reason']; ?>' data-times='<?php echo $row['time']; ?>' data-date='<?php echo $row['date']; ?>' data-target="#edit"> <span class="fa fa-fw fa-edit" aria-hidden="true"></span>
                                            </button> <a data-confirm="Are you sure you want to delete?" href="../php/deleterep.php?sid=<?php echo $row['ca_id']; ?>" class="btn btn-danger btn-sm"><span class="fa fa-fw fa-trash-o" aria-hidden="true"></span></a>  <button data-toggle="modal" data-target="#view" class="btn btn-success btn-sm"><span class="fa fa-fw fa-eye" aria-hidden="true"></span></button>


                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>

                        <!-- Modal for add-->
                        <div class="modal fade" id="addabsentdetails" role="dialog">
                            <div class="modal-dialog">

                             
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-user" aria-hidden="true">
                                            </i>  Add Absent Details </h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/addre.php" method="post">

                                            <div class="form-group form-group-lg">
                                           
                                             <select class="form-control" name="aid" id="aid">
                                                  <option value=" ">Select ID</option>
                                                <?php 
                                                    $faculty = mysqli_query($connect,"SELECT * FROM tbl_student");
                                                    while($rows= mysqli_fetch_array($faculty)){
                                                        echo "<option value=".$rows['school_ID'].">".$rows['fname'].", ".$rows['lname']."</option>";
                                                    }
                                                ?>
                                             </select>
                                            </div>
                                            
                                             <div class="form-group form-group-lg">
                                               <select name="sub" id="subj" class="form-control input-lg">
                                                    
                                               </select>
                                            </div>

                                            <div class="form-group form-group-lg">
                                                <!--<label for="form_email">Submitted Documents</label>-->
                                                        <select id="blood_group" name="docu" id="docs" class="form-control input-lg">
                                                          <option >Select Document</option>
                                                          <option value="None">None</option>
                                                          <option value="Medical Certificate">Medical Certificate</option>
                                                          <option value="Death Certificate">Death Certificate</option>
                                                          <option value="Incident Report">Incident Report</option>

                                                        </select>                    
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            
                                            
                                             <div class="form-group form-group-lg">
                                                <div class="input-group date input-group-lg " data-provide="datepicker">
                                                    <input type="text" size="16" class="form-control datepicker" name="date" id="dat" placeholder="mm/dd/yy">
                                                    <div class="input-group-addon  ">
                                                        <span class="fa fa-calendar-plus-o "></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group form-group-lg">
                                                <!--<label for="form_message">Reason</label>-->
                                                <textarea id="form_message" name="message" class="form-control" placeholder="State your Reason...." rows="3" required="required" data-error="Reason is required"></textarea>
                                                <div class="help-block with-errors"></div>
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

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-pencil" aria-hidden="true">
                                            </i>  Update Absent Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/updatereport.php" method="post">
                                            <div class="form-group form-group-lg">
                                                <input type="hidden" class="form-control" id="id" name="sid">
                                            </div>
                                            <div class="form-group form-group-lg">
                                           
                                             <select class="form-control" name="aid" id="aid">
                                                  <option value="sid">Select ID</option>
                                                <?php 
                                                    $faculty = mysqli_query($connect,"SELECT * FROM tbl_absent");
                                                    while($rows= mysqli_fetch_array($faculty)){
                                                        echo "<option value=".$rows['aid'].">".$rows['school_ID']."</option>";
                                                    }
                                                ?>
                                             </select>
                                            </div>
                                            <div class="form-group form-group-lg">
                                                <!--<label class="col-md-4 control-label" for="name">Document</label>-->
                                                <select class="form-control" id="dc" name="docu">
                                       
                                                     <option value="None">None</option>
                                                      <option value="Medical Certificate">Medical Certificate</option>
                                                      <option value="Death Certificate">Death Certificate</option>
                                                      <option value="Incident Report">Incident Report</option>
                                              </select>
                                            </div>
                                            <div class="form-group form-group-lg">
<!--                                                <label class="col-md-4 control-label" for="mobile">Reason</label>-->
                                                <input type="text" class="form-control" id="rsn" name="reasn">
                                            </div>
                                          
                                          

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Modal -->


                </div>
                    <!-- /.row -->






            </div>
                   <!-- /.container-fluid --> 

        </div>
        <!-- /#pagewrapper -->


    </div>
    <!-- /#wrapper -->
    
    
    <div id="loader"></div>
    <!--Loader-->


    
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap.min.js"></script>
    <script src="../js/dataTables.buttons.min.js"></script>
    <script src=".././js/datepicker.js"></script>
    <script src="../js/buttons.print.min.js"></script>      <!-- Bootstrap Core JavaScript -->
    <script src="../js/dataTables.select.min.js"></script>  <!-- for row selection -->
    <script src="../js/buttons.bootstrap.min.js"></script>
    <script src="../js/buttons.html5.min.js"></script>
   <script src="../js/buttons.colVis.min.js"></script>       <!-- for column visible -->
    <script src="../js/buttons.flash.min.js"></script>       <!-- for exporting csv -->
   <!-- <script src="../js/vfs_fonts.js"></script>    -->

  

 
    
    <script>
        $(function(){
            $(".btn-edit").click(function() {

                var s_id = $(this).data("sid");
                var sname = $(this).data("subjectname");
                var tname = $(this).data("subjectteacher");
                var docum = $(this).data("docu");
                var reas = $(this).data("reasn");
                var timee = $(this).data("times");
                var datee = $(this).data("date");
     

                $("#id").val(s_id);
                $("#sb").val(sname);
                $("#st").val(tname);
                $("#dc").val(docum);
                $("#rsn").val(reas);
                $("#t").val(timee);
                $("#dt").val(datee);
                
            });
            $(document).on('click', '.browse', function(){
              var file = $(this).parent().parent().parent().find('.file');
              file.trigger('click');
            });
            $(document).on('change', '.file', function(){
              $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });

        });
        
        $(document).ready(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#dataConfirmModal').length) {
                    $('body').append('<div id="dataConfirmModal" class="modal fade" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header modal-header-warning"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> <h4 class="modal-title" id="dataConfirmLabel">Delete Student</h4></div><div class="modal-body"></div><div class="modal-footer"><a class="btn btn-danger" id="dataConfirmOK">Yes</a><a class="btn btn-danger" data-dismiss="modal">No</a></div></div></div></div>');
                } id="dataConfirmOK"
                $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                $('#dataConfirmOK').attr('href', href);
                $('#dataConfirmModal').modal({show:true});
                return false;
            });
        });

        
        
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
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
            $(document).ready(function() {
            $('#searchtable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
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
            } );


        } );

    </script>

    <script>
        $(function(){

        $('.datepicker').datepicker({
            autoclose: true,
            todayBtn: true,
            orientation: 'bottom auto',
            todayBtn: 'linked',
            todayHighlight: true
        });
        $("#aid").change(function(){
           var id = $("#aid").val();
            if(id!='sid'){
                $.post('../addjax.php',{sid:id},function(data){
                    $("#subj").html(data);
                });
            }    
        });
        });
    </script>




</body>

</html>
