<!-- <?php
echo "User profile";
?> -->


<?php 
include("includes/session_start.php");
include("core_methods.php");
include("includes/connect_database.php");
?>



<?php
if(isLogged()){
 //do nothing stay here
} else{
   header("location:login_page.php");
}
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;

//getting profile details from db
$sql="SELECT * FROM user_information WHERE user_id = $id";
$result = mysqli_query($connect, $sql);
if($result){
$row=mysqli_fetch_assoc($result);

$email = $row['email'];
$age=$row['age'];
$height=$row['height'];
$sex=$row['sex'];
$religion=$row['religion'];
$district=$row['district'];
$division=$row['division'];
$country = $row['country'];
$maritalStatus=$row['marital_status'];
$education=$row['education'];
$fullName=$row['full_name'];
$weight=$row['weight'];
$bloodGroup=$row['blood_group'];
$birthDate=['date_of_birth'];
$occupation=$row['occupation'];
$annualIncome=$row['annual_income'];
$father_info=$row['father_name_and_occupation'];
$mother_info=$row['mother_name_and_occupation'];
$brother=$row['brothers_number'];
$sister=$row['sisters_number'];
$aboutMe=$row['about_me'];



$picture_1="";
$picture_2="";
$picture_3="";
$picture_4="";

// getting image filenames from db
$sql2="SELECT * FROM user_pictures WHERE user_id = $profileid";
$result2 = mysqli_query($connect, $sql2);
if($result2){
	// $row2=mysqli_fetch_array($result2);
	// $picture_1=$row2['picture_1'];
	// $picture_2=$row2['picture_2'];
	// $picture_3=$row2['picture_3'];
	// $picture_4=$row2['picture_4'];
}
}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}

?>






<!DOCTYPE HTML>
<html>
<head>
<title>view profile
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>




<body>

 <?php 
 include("includes/user_nav_bar.php");
 ?>




 
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="user_index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $profileid;?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">


                     <!-- Edited -->
                     <!-- -------------------------------------------------- -->
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $picture_1;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $picture_1;?>" />
						</li>
						


					 </ul>
				  </div>







                  <!-- Edited -->
                     <!-- -------------------------------------------------- -->
			</div>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $fullName  ?></td>
						</tr><tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $age . " Years"; ?>/<?php echo $height . " Cm";?> </td>
						</tr>
					  	<tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $religion;?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $maritalStatus;?></td>
						</tr>
					    
					   
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $education;?></span></td>
						</tr>
				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>







        <!-- Edited -->
        <!-- -------------------------------------------------- -->
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   </ul>





               <!-- Edited -->
               <!-- -------------------------------------------------- -->
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>About Me.</h1>
				    	<p><?php echo $aboutMe; ?></p>
				    </div>




                    <!-- Edited -->
                    <!-- -------------------------------------------------- -->
				    <div class="basic_1">
				    	<h3>Basics &amp; Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $fullName ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalStatus;?></td>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Age / Height :</td>
									<td class="day_value"><?php echo $age; ?>/<?php echo $height;?> cm</td>
								</tr>
						    </tbody>
				          </table>
				         </div>






                         <!-- Edited -->
                         <!-- -------------------------------------------------- -->
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $age;?></td>
								</tr>


							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $weight;?> KG</td>
								</tr>
							 
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>





                    <!-- Edited -->
                    <!-- -------------------------------------------------- -->
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education:</td>
									<td class="day_value"><?php echo $education;?></td>
								</tr>
				        	
							    <tr class="opened">
									<td class="day_label">Occupation:</td>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span><?php echo $annualIncome;?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>







                  <!-- Edited -->
                  <!-- -------------------------------------------------- -->
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        	
							    <tr class="opened">
									<td class="day_label">Mother's Name and Occupation:</td>
									<td class="day_value closed"><span><?php echo $father_info;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Father's Name and Occupation:</td>
									<td class="day_value closed"><span><?php echo $mother_info;?></span></td>
								</tr>



								<tr class="opened">
									<td class="day_label">No. of Brothers :</td>
									<td class="day_value closed"><span><?php echo $brother;?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of Sisters :</td>
									<td class="day_value closed"><span><?php echo $sister;?></span></td>
								</tr>




							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>









<!-- Edited -->
<!-- -------------------------------------------------- -->
<?php

//getting partner prefernce
$sql = "SELECT * FROM partner_preferences WHERE userid = $id";
$result = mysqli_query($connect, $sql);
$row= mysqli_fetch_assoc($result);

$age_min=$row['age_min'];
$age_max=$row['age_max'];
$marital_status=$row['marital_status'];
$height=$row['height'];
$religion=$row['religion'];
$education=$row['education'];
$occupation=$row['occupation'];
$description=$row['description'];



?>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value"><?php echo $age_min . " to " . $age_max;?></td>
								</tr>

				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $marital_status;?></td>
								</tr>
							   
							   
								<tr class="opened">
									<td class="day_label">Height:</td>
									<td class="day_value closed"><span><?php echo $height;?> Cm</span></td>
								</tr>
								
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span><?php echo $religion;?></span></td>
								</tr>
							
								
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><span><?php echo $education;?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"><span><?php echo $occupation;?></span></td>
								</tr>
								
								
								
							 </tbody>
				          </table>
				        </div>
				     </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>






<div class="clearfix"> </div>



<?php 
include("footer.php");
?>


<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	
