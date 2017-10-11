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
                    <li class="active">
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
                        <li class="active"><span>Subject</span></li>
                    </ol>
                    
         <!-- Import CSV-->
              <?php
                    if(isset($_POST['importSubmit'])){
                        
                        //validate whether uploaded file is a csv file
                        $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
                        if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
                            if(is_uploaded_file($_FILES['file']['tmp_name'])){
                                //open uploaded csv file with read only mode
                                $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                                //skip first line
                                fgetcsv($csvFile);
                                //parse data from csv file line by line
                                while(($line = fgetcsv($csvFile)) !== FALSE){
                                    //check whether member already exists in database with same email
                                    $sql = mysqli_query($connect,"SELECT * FROM tbl_subject WHERE subject_code = '".$line[0]."'");
                                    $result = mysqli_fetch_assoc($sql);
                                    if($result > 0){
                                        //update member data
                                        $query1 = mysqli_query($connect,"UPDATE tbl_subject SET subject_name = '".$line[1]."', units = '".$line[2]."' WHERE subject_code = '".$line[0]."'");
                                    }else{
                                        //insert member data into database
                                        $query2 = mysqli_query($connect,"INSERT INTO tbl_subject (subject_code, subject_name, units) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."')");
                                    }
                                }
                                
                                //close opened csv file
                                fclose($csvFile);
                                $qstring = '?status=succ';                                
                                ?>
                                <div class="alert alert-success alert-dismissable">
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong><b class="fa fa-check fa-bg">&nbsp;</b>Successfully Imported!</strong>
                                          </div>
                                <?php
                            }else{
                                $qstring = '?status=err';
                                ?>
                                    <div class="alert alert-warning alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><b class="fa fa-check fa-bg">&nbsp;</b>Failed to Import CSV File!</strong>Try Again.
                                    </div>
                                <?php            
                            }
                        }else{
                            $qstring = '?status=invalid_file';              
                            ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong><b class="fa fa-check fa-bg">&nbsp;</b>Invalid CSV File!</strong>
                                </div>
                            <?php        
                        }
                    }
                ?>
            <!-- End Import CSV-->

                    <div class="row">

                        <div class="col-md-12">
                           

                            <button type="button" data-toggle="modal" data-target="#import" data-toggle="tooltip" data-placement="bottom" title="import CSV" class="btn btn-primary pull-right sbtn-lg" value="import" style="float:right; margin-bottom:1em; margin-left:1px;">
                                <i class="glyphicon glyphicon-import"></i>
                            </button>

                            <button type="button" data-toggle="modal" data-target="#addsubject" class="btn btn-primary pull-right sbtn-lg">
                                <i class="glyphicon glyphicon-plus"></i>
                            </button>
                        </div>
                    </div>
                    <hr>

                </div>
                
            


                <div class="row">


                    
               
                    
            <?php
              if (isset($_GET["msg"]) && $_GET["msg"] == 'success') {
                        echo '<div class="alert alert-success" style="text-align:center;"><strong>Subject Successfully Added!</strong></div>';
                }
              else if (isset($_GET["msg"]) && $_GET["msg"] == 'exist'){
                        echo '<div class="alert alert-danger" style="text-align:center;"><strong>Subject is already exists!</strong></div>';
                }
              else if (isset($_GET["edit"]) && $_GET["edit"] == 'successful') {
                        echo '<div class="alert alert-success style="text-align:center;"><strong>Subject Successfully Updated!</strong></div>';
                }
              else if (isset($_GET["edite"]) && $_GET["edite"] == 'successful') {
                        echo '<div class="alert alert-success" style="text-align:center;"><strong>Subject Successfully Deleted!</strong></div>';
                }        
            ?>     





                        <div class="table-responsive">
                                <table id="searchtable" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%" style="background-color:#E8EEF5;">

                                <thead>
                                    <tr>
                                     
                                        <th>Subject code</th>
                                        <th>Subject title</th>
                                        <th>Units</th>
                                        <th>Semester</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                     <?php
                        $result = mysqli_query($connect, "SELECT * FROM tbl_subject") or die(mysql_error());
                        $result = mysqli_query($connect, "SELECT * FROM tbl_subject") or die(mysql_error());
                    ?>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
                                        <tr>
                                           
                                            <td>
                                                <?php echo $row['subject_code']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['subject_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['units']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['sem']; ?>
                                            </td>

                                           
                                        
                                           <td><button class="btn-edit btn btn-primary btn-sm" data-toggle="modal" data-sidss='<?php echo $row['sub_id']; ?>' data-subcod='<?php echo $row['subject_code']; ?>' data-subdescr='<?php echo $row['subject_name']; ?>' data-subunit='<?php echo $row['units']; ?>' data-sem='<?php echo $row['sem']; ?>' data-target="#edit"> <span class="fa fa-fw fa-edit" aria-hidden="true"></span>
                                            </button> <a data-confirm="Are you sure you want to delete?" href="../php/deletesub.php?sidss=<?php echo $row['sub_id']; ?>" class="btn btn-danger btn-sm"><span class="fa fa-fw fa-trash-o" aria-hidden="true"></span></a> 

                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>

                          
              <!-- Modal for add-->
                        <div class="modal fade" id="addsubject" role="dialog">
                            <div class="modal-dialog">

                             
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><i class="glyphicon glyphicon-list" aria-hidden="true">
                                            </i>  Add Subject </h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/addsub.php" method="post">

                                            <div class="form-group form-group-lg">
                                               
                                                <input type="text" class="form-control" id="st" name="subc" placeholder="Subject Code">
                                            </div>
                                            <div class="form-group form-group-lg">
                                               
                                                <input type="text" class="form-control" id="st" name="subdes" placeholder="Subject Title">
                                            </div>
                 
                                             <div class="form-group form-group-lg">
                                               
                                                <input type="text" class="form-control" id="st" name="subun" placeholder="Units">
                                            </div>
                                            <div class="form-group form-group-lg">
                                                <!--<label for="form_email">Submitted Documents</label>-->
                                                        <select id="blood_group" name="sem" class="form-control input-lg">
                                                          <option value="">Select Semester</option>
                                                          <option value="1">1st</option>
                                                          <option value="2">2nd</option>


                                                        </select>                    
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
                    
                   <div class="modal fade" id="edit" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"> <i class="glyphicon glyphicon-pencil" aria-hidden="true">
                                            </i> Update Subject</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../php/updatesub.php" method="post">
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control " id="ids" name="sidss" >
                                                        </div>
                                                        <div class="form-group form-group-lg">
                                                             <div class="form-group">
                                                            <!--<label class="col-md-4 control-label" for="name">Subject code</label>-->
                                                            <input type="text" class="form-control" id="su" name="subcod">
                                                        </div>
                                                           <!-- <label class="col-md-4 control-label" for="name">Subject descriptive title</label>-->
                                                            <input type="text" class="form-control" id="sub" name="subdescr">
                                                        </div>
                                                        <div class="form-group form-group-lg">
                                                           <!-- <label class="col-md-4 control-label" for="name">units</label>-->
                                                            <input type="text" class="form-control" id="uni" name="subunit">
                                                        </div>
                                                           <div class="form-group form-group-lg">
                                                            <!--<label for="form_email">Submitted Documents</label>-->
                                                                    <select id="semm" name="sem" class="form-control input-lg">

                                                                      <option value="1">1st</option>
                                                                      <option value="2">2nd</option>


                                                                    </select>                    
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
                                    <!--Modal -->


               


</div>





            </div>
            <!-- /pagewrapper -->

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
    <script src="../js/buttons.print.min.js"></script>
   <!-- <script src="../js/dataTables.select.min.js"></script>-->
    <script src="../js/buttons.bootstrap.min.js"></script>
    <script src="../js/buttons.html5.min.js"></script>
    <script src="../js/buttons.colVis.min.js"></script>
   <!-- <script src="../js/vfs_fonts.js"></script>    -->
<!--    <script src="../js/Chart.bundle.min.js"></script>-->
 
    
  <script>
        $(".btn-edit").click(function() {

           var s_id = $(this).data("sidss");
            var scod = $(this).data("subcod");
            var sdes = $(this).data("subdescr");
            var sunit = $(this).data("subunit");
            var subsem = $(this).data("sem");
         

  
            $("#su").val(scod);
            $("#sub").val(sdes);
            $("#uni").val(sunit);
            $("#semm").val(subsem);
            $("#ids").val(s_id);
         
        });
        
        
        
            $(document).on('click', '.browse', function(){
              var file = $(this).parent().parent().parent().find('.file');
              file.trigger('click');
            });
            $(document).on('change', '.file', function(){
              $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
        
      
      

        $(document).ready(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#dataConfirmModal').length) {
                    $('body').append('<div id="dataConfirmModal" class="modal fade" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header modal-header-warning"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> <h4 class="modal-title" id="dataConfirmLabel">Delete Subject</h4></div><div class="modal-body"></div><div class="modal-footer"><a class="btn btn-danger" id="dataConfirmOK">Yes</a><a class="btn btn-danger" data-dismiss="modal">No</a></div></div></div></div>');
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
                     
                        extend: 'colvis',
                        columns: ':not(.noVis)',
                        text: 'Column Visible'
                    },
                    {
                        extend: 'csv',
                        text: 'Export',
                        exportOptions: {
                        columns: ':visible'
                                        }
                    },
                  {
                        extend: 'print',
                        text: 'Print all',
                        exportOptions: {
                        columns: ':visible'
                                        }
                    }
                ],
                select: true
            } );


        } );

    </script>





</body>

</html>