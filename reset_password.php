<?php
session_start();
include("includes/connect_database.php");

$email = $_POST["email"];
$secret_code = $_POST["secret_code"];
$new_password = $_POST["password"];



$sql = "SELECT * FROM users WHERE email='$email' AND secret_code='$secret_code'";
$results = $connect -> query($sql);
$final = $results -> fetch_assoc();



$_SESSION["email"] = $final["email"];
$_SESSION["password"] = $final["password"];
$_SESSION["id"] = $final["id"];



if($email=$final["email"] AND $password=$final["secret_code"]){

    $reset_sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
    $result=mysqli_query($connect,$reset_sql);


    echo "<script> alert('You succuessfully reset your password! Now login to continue.');
    window.location.href='login_page.php';
    </script>";

    // header("location: user_home.php?id={$final['id']}");
}
else{
    echo "<script> alert('Wrong email and secret code combination/No account found!');
    window.location.href='forgot_password.php';
    </script>
    ";
}

?>