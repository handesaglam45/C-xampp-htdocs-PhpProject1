<?php

$error="error";
$con= mysql_connect('localhost','','') or die($error);
mysql_select_db('test',$con)  or die($error);


?>