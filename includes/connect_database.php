<?php 

$host="localhost";
$username="root";
$password="";
$database_name="matrimony_project_db";

$connect=mysqli_connect("$host", "$username", "$password"); 

mysqli_select_db($connect,"$database_name");

?>
