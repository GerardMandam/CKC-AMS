<?php
    //export.php
    if(isset($_POST["export"]))
    {
        $connect = mysqli_connect("localhost", "root", "", "db_ckcams");
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        $output = fopen("php://output", "w");
        fputcsv($output, array('faculty_ID', 'fname', 'lname', 'mname', 'gender'));
        $query = "SELECT * from tbl_faculty ORDER BY faculty_ID DESC";
        $result = mysql_query($connect, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            fputcsv($output, $row);
        }
            fclose($output);
    }

?>