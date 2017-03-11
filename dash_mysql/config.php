<?php 
$server="localhost";
$user="root";
$password="";
$db="dynamic_db";
$connect=mysql_connect($server,$user,$password);
$con=mysql_select_db($db,$connect);
?>