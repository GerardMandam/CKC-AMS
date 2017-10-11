<?php
include("sqlconnect.php");
if(isset($POST["submit"]))
{
  if($_FILES['file']['name'])
  {
    $filename = explode('.',$_FILES['file']['name']);
    if($filename[1] == 'csv')
    {
        $handle =fopen($_FILES['file']['tmp_name'], "r");
        while($data = fgetcsv($handle))
        {
            $item1 = mysqli_real_escape_string($connect, $data[0]);
            $item2 = mysqli_real_escape_string($connect, $data[1]); 
            $sql="INSERT into tbl_faculty(faculty_ID, fname) values('$item', '$item2')";
            mysql_query($connect,$sql);
        }
        
        fclose($handle);
        print "Import done";
    }
  }
}
?>