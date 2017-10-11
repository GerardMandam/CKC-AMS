<?php
include('sqlconnect.php');
$sql=mysql_query("SELECT * FROM tbl_faculty");
if(mysql_num_rows($sql)){
    $data = array();
    while($row = mysql_fetch_array($sql)){
        $data[] = array(
            'faculty_ID' => $row['faculty_ID'],
            'fname'=> $row['fname']
        );
    }
    header('Content-type: application/json');
    echo json_encode($data);
}
?>