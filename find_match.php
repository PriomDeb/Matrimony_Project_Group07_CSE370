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
        <a href=""><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Find Match</li>
     </ul>
   </div>


<br/>









<?php

$logged_user_info = "SELECT * FROM user_information WHERE user_id=$profileid";
$result_info = mysqli_query($connect, $logged_user_info);
$row=mysqli_fetch_assoc($result_info);
$logged_sex = $row['sex'];


$logged_user_partner_preference = "SELECT * FROM partner_preferences WHERE userid=$profileid";
$result_preferences = mysqli_query($connect, $logged_user_partner_preference);
$row_preferences = mysqli_fetch_assoc($result_preferences);
$age_pref_min = $row_preferences['age_min'];
$age_pref_max = $row_preferences['age_max'];
$marital_status_pref = $row_preferences['marital_status'];
$height_pref_max = $row_preferences['height'] + 10;
$height_pref_min = $row_preferences['height'] - 10;
$religion_pref = $row_preferences['religion'];


// Finding perfect match based on user partner preference data
$sql_users = "SELECT * FROM user_information 
WHERE user_id!=$profileid AND sex!='$logged_sex' AND religion='$religion_pref' 
AND age BETWEEN '$age_pref_min' AND '$age_pref_max' AND height BETWEEN $height_pref_min AND $height_pref_max";
$results = $connect->query($sql_users); 



// Showing the found matches in the frontend
while($final=$results->fetch_assoc()) { ?>


<?php
$picture_1="";
$profileid = $final['user_id'];
$fullName = $final['full_name'];
$age = $final['age'];
$height = $final['height'];
$religion = $final['religion'];
$maritalStatus = $final['marital_status'];
$education = $final['education'];
$annual_income = $final['annual_income'];





// getting image filenames from db
$sql2="SELECT * FROM user_pictures WHERE user_id = $profileid";
$result2 = mysqli_query($connect, $sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);

	$picture_1=$row2['picture_1'];

}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}
?>





<a href="visit_other.php?other_id=<?php echo $final['user_id']; ?>">
<h3> 


<div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">

                <?php echo "Profile ID: {$final['user_id']}"; ?>

					 <ul class="slides">
						<li data-thumb="User_Profiles/<?php echo $profileid;?>/<?php echo $picture_1;?>">
							<img src="User_Profiles/<?php echo $profileid;?>/<?php echo $picture_1;?>" />
						</li>
						
					 </ul>
				  </div>





                  </div>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name :</td>
							<td class="day_value"><?php echo $fullName  ?></td>
						</tr>

                        <tr class="opened_1">
							<td class="day_label">Age :</td>
							<td class="day_value"><?php echo $age . " Years"; ?> </td>
						</tr>

                        <tr class="opened_1">
							<td class="day_label">Height :</td>
							<td class="day_value"><?php echo $height . " Cm";?> </td>
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

                        <tr class="closed">
							<td class="day_label">Annual Income :</td>
							<td class="day_value closed"><span><?php echo $annual_income;?></span></td>
						</tr>



				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>



    <!-- <?php echo "Profile ID {$final['user_id']} : <br/> {$final['full_name']}"; ?>  -->

    <hr> </h3>
</a>



<?php }
?>











       <div class="clearfix"> </div>
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
