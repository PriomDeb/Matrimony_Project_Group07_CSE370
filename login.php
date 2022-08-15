<?php
session_start();
include("includes/connect_database.php");

$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$results = $connect -> query($sql);
$final = $results -> fetch_assoc();

$_SESSION["email"] = $final["email"];
$_SESSION["password"] = $final["password"];

if($email=$final["email"] AND $password=$final["password"]){
    echo "Successfully loged in.";
}
else{
    echo "<script> alert('Wrong email and password combination/No account found!');
    window.location.href='login_page.php';
    </script>
    ";
}

?>