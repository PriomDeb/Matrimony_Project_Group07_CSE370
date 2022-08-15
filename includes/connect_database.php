<?php 

$host="localhost";
$username="root";
$password="";
$db_name="matrimony_project_db";

$conn=mysqli_connect("$host", "$username", "$password"); 

mysqli_select_db($conn,"$db_name");

?>
