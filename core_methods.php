<?php
include("includes/connect_database.php");


function signup(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $secret_code=$_POST['secret_code'];

        
        include("includes/connect_database.php");
    
        $sql = "INSERT INTO users (profile_status, username, password, email, secret_code) 
                VALUES(0, '$uname', '$pass', '$email', '$secret_code')";
        
        if (mysqli_query($connect,$sql)) {

            $sql_for_id = "SELECT * FROM users WHERE email='$email'";
            $get_results = $connect -> query($sql_for_id );
            $final = $get_results -> fetch_assoc();

            $_SESSION["id"] = $final["id"];

            echo "<script> alert('You successfully signed up! Now update your profile information.');
            window.location.href='update_user_info.php?id={$final['id']}';
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
        full_name = '$fullName',
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
        echo "<script> window.location=\"add_partner_preferences.php?id=$id\"</script>";
        echo "Back to home";
        echo "</a>";
    
	  
	} 
    else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
	 
}





function update_partner_preferences_info($id){

    $age_min = $_POST['age_min'];
    $age_max = $_POST['age_max'];
    $marital_status = $_POST['marital_status'];
    $height = $_POST['height'];
    $religion = $_POST['religion'];
    $education = $_POST['education'];
    $occupation = $_POST['occupation'];
    $country = $_POST['country'];
    $description = $_POST['description'];
	

	include("includes/connect_database.php");

	$sql="SELECT userid FROM partner_preferences WHERE userid=$id";
	$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			partner_preferences 
		SET
        age_min = '$age_min',
        age_max = '$age_max',
        marital_status = '$marital_status',
        height = '$height',
        religion = '$religion',
        education = '$education',
        occupation = '$occupation',
        country = '$country',
        description = '$description'
		WHERE userid=$id;";


   if (mysqli_query($connect,$sql)) {
   	echo "<script>alert(\"Successfully Updated Partner Preferences. Now add a profile picture.\")</script>";
   	echo "<script> window.location=\"user_profile.php?id=$id\"</script>";
   }
}else{
	//Insert the data
	$sql = "INSERT 
				INTO
				   partner_preferences
				   (userid,
                    age_min,  
                   age_max,
                   marital_status, 
                   height,
                   religion, 
                   education,
                   occupation,
                   country, 
                   description) 
				VALUES
				   ('$id', 
                   '$age_min', 
                   '$age_max',
                   '$marital_status',
                   '$height',
                   '$religion',  
                   '$education',
                   '$occupation',
                   '$country', 
                   '$description')
			";
	if (mysqli_query($connect,$sql)) {
        echo "<script>alert(\"Successfully Updated Partner Preferences\")</script>";
        echo "<script> window.location=\"upload_profile_pictures.php?id=$id\"</script>";
        echo "Back to home";
        echo "</a>";
    
	  
	} 
    else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
}








function upload_picture($id){
    include("includes/connect_database.php");
    
	$target = "User_Profiles/". $id ."/";
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }

//specifying target for each file
$target1 = $target . basename( $_FILES['picture_1']['name']);



// This gets all the other information from the form
$picture_1=($_FILES['picture_1']['name']);


$sql="SELECT id FROM user_pictures WHERE user_id = '$id'";
$result = mysqli_query($connect,$sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		$sql="INSERT INTO user_pictures (id, user_id, picture_1) VALUES ('', '$id', '$picture_1' )";
		// Writes the information to the database
		mysqli_query($connect,$sql);

		
} else {
    // There is a photo for customer so up
     $sql="UPDATE user_pictures SET picture_1 = '$picture_1' WHERE user_id=$id";
		// Writes the information to the database
        mysqli_query($connect,$sql);
}

// Writes the photo to the server
if(move_uploaded_file($_FILES['picture_1']['tmp_name'], $target1))
{

// Tells you if its all ok
echo "<script> alert('Your profile picture is uploaded!');
window.location.href='user_profile.php?id=$id';
</script>
";
}
else {

// Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}

}//end uploadphoto function












?>