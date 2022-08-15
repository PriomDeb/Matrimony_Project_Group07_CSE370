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
    
        $sql = "INSERT INTO users (profile_status, username, password, email, dateofbirth, gender) 
                VALUES(0, '$uname', '$pass', '$email', '$birth_date', '$gender')";
        
        if (mysqli_query($connect,$sql)) {
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






function update_profile($id){
   
	$fullName=$_POST['full_name'];
	$sex=$_POST['sex'];

	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];

	$birthDate=$year ."-" . $month . "-" .$day ;
    
	$religion=$_POST['religion'];
	$country = $_POST['country'];
    $district=$_POST['district'];
	$division=$_POST['division'];

	$age=$_POST['age'];
	$maritalStatus=$_POST['marital_status'];
	$education=$_POST['education'];
	$weight=$_POST['weight'];

	$height=$_POST['height'];
	$occupation=$_POST['occupation'];
	$annualIncome=$_POST['annual_income'];

    $sister=$_POST['sisters_number'];
	$brother=$_POST['brothers_number'];
    $bloodGroup=$_POST['blood'];
	
	$aboutMe=$_POST['about_me'];

    $father_info=$_POST['father'];
    $mother_info=$_POST['mother'];
	

	include("includes/connect_database.php");

	$sql="SELECT user_id FROM user_information WHERE user_id=$id";
	$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			user_information 
		SET
        full_name = '$full_name',
        sex = '$sex',
        date_of_birth = '$birthDate',
		religion = '$religion',
        country = '$country',
        district = '$district',
        division = '$division',
        age = '$age',
        marital_status = '$maritalStatus',
		education  = '$education',
		weight = '$weight',
        height = '$height',
        occupation = '$occupation', 
        annual_income = '$annualIncome', 
        sisters_number = '$sister',
        brothers_number = '$brother', 
        blood_group = '$bloodGroup',
		about_me = '$aboutMe',
        father_name_and_occupation = '$father_info',
        mother_name_and_occupation = '$mother_info'
		WHERE user_id=$id;";

//    $result=mysqlexec($sql);
   if (mysqli_query($connect,$sql)) {
   	echo "<script>alert(\"Successfully Updated Profile\")</script>";
   	echo "<script> window.location=\"user_profile.php?id=$id\"</script>";
   }
}else{
	//Insert the data
	$sql = "INSERT 
				INTO
				   user_information
				   (user_id,  
                   age, 
                   height,
                   sex, 
                   religion,   
                   district, 
                   division, 
                   country, 
                   marital_status,  
                   education, 
                   full_name,     
                   weight,
                   blood_group,
                   date_of_birth, 
                   occupation,  
                   annual_income, 
                   father_name_and_occupation,
                   mother_name_and_occupation,
                   brothers_number,
                   sisters_number,  
                   about_me, 
                   information_updated_date) 
				VALUES
				   ('$id', 
                   '$age', 
                   '$height',
                   '$sex', 
                   '$religion',  
                   '$district', 
                   '$division', 
                   '$country', 
                   '$maritalStatus',  
                   '$education',  
                   '$fullName',    
                   '$weight', 
                   '$bloodGroup',
                   '$birthDate', 
                   '$occupation',  
                   '$annualIncome',
                   '$father_info',
                   '$mother_info',  
                   '$brother', 
                   '$sister', 
                   '$aboutMe', 
                   CURDATE())
			";
	if (mysqli_query($connect,$sql)) {
        echo "<script>alert(\"Successfully Updated Profile\")</script>";
        echo "<script> window.location=\"user_profile.php?id=$id\"</script>";
        echo "Back to home";
        echo "</a>";
    
	  
	} 
    else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

	 
}



?>