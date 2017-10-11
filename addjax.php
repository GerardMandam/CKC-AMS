<?php
include './php/sqlconnect.php';
if(isset($_POST['sid'])){
    $id = mysqli_real_escape_string($connect,$_POST['sid']);
    $sql = mysqli_query($connect,"SELECT * FROM tbl_student_subject INNER JOIN tbl_class_schedule ON tbl_class_schedule.c_sched_id=tbl_student_subject.c_sched_id LEFT JOIN tbl_subject ON tbl_subject.sub_id=tbl_class_schedule.sub_id  WHERE tbl_student_subject.school_ID='$id'");
    echo "<option value='sid'>-- Select Subject Here --</option>";
    while($row = mysqli_fetch_array($sql)){
        echo "<option value=".$row['ss_id'].">".$row['subject_code']." ".$row['subject_name']."</option>";    
    }
}elseif(isset($_POST['ca_sid'])){
    $id = mysqli_real_escape_string($connect,$_POST['ca_sid']);
    $st = mysqli_real_escape_string($connect,$_POST['ca_stat']);
    switch($st){
        case $st=='P':
            $sql = mysqli_query($connect,"INSERT INTO tbl_class_attendance (ss_id,ca_status) values ('".$id."','".$st."')");
            if(!$sql){
                return false;
            }else{
                return true;
            }                
            break;
        case $st=='L':
            $sql = mysqli_query($connect,"INSERT INTO tbl_class_attendance (ss_id,ca_status) values ('".$id."','".$st."')");
            if(!$sql){
                return false;
            }else{
                return true;
            }   
            break;
        case $st=='A':
            $sql = mysqli_query($connect,"INSERT INTO tbl_class_attendance (ss_id,ca_status) values ('".$id."','".$st."')");
            if(!$sql){
                return false;
            }else{
                return true;
            }   
            break;
        default:
            return false;
            break;
    }
}
?>