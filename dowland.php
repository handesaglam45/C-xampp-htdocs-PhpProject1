<?php


include (dp.php);
if(isset($_GET['dow'])){
    $path=$_GET['dow'];
    
    
    $res=mysql_query("SELECT * FROM documents  WHERE path='$path'");

    
    header('Content-Type:application/octet-stream');
    header('Content-Disposition: attachment;filename="'.basename($path).'"');
    header('Content-Lenght:'. filesize($path));
    readfile($path);
    
}

?>