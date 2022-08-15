<?php
include("includes/connect_database.php");

function signup(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];
            $day=$_POST['day'];
            $month=$_POST['month'];
            $year=$_POST['year'];
        $dob=$year ."-" . $month . "-" .$day ;
        $gender=$_POST['gender'];
        require_once("includes/dbconn.php");
    
        $sql = "INSERT INTO users (profilestat, username, password, email, dateofbirth, gender, userlevel) 
                VALUES(0, '$uname', '$pass', '$email', '$dob', '$gender', 0)";
        
        if (mysqli_query($conn,$sql)) {
            echo "Registration Successful. Go back and login.";
        
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}

?>