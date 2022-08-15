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
        $birth_date=$year ."-" . $month . "-" .$day ;
        $gender=$_POST['gender'];
        include("includes/connect_database.php");
    
        $sql = "INSERT INTO users (profilestat, username, password, email, dateofbirth, gender, userlevel) 
                VALUES(0, '$uname', '$pass', '$email', '$birth_date', '$gender', 0)";
        
        if (mysqli_query($conn,$sql)) {
            echo "<script> alert('You successfully signed up!');
            window.location.href='index.php';
            </script>
            ";
        
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


function isLogged(){
    if(!isset($_SESSION['id'])){
        return false;
   }
   else{
       return true;
   }
}



?>