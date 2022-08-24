<?php 
include_once("includes/session_start.php");
include_once("core_methods.php");

if(!isLogged()){
   header("location:login_page.php");
}

$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    update_partner_preferences_info($id);
}
?>

<?php 
// Retrieving the data from partner_preferences

		$sql="SELECT * FROM partner_preferences WHERE userid = $id";
		$result=mysqli_query($connect, $sql);

		if($result){
			$row=mysqli_fetch_assoc($result);

			$age_min=$row['age_min'];
			$age_max=$row['age_max'];
			$marital_status=$row['marital_status'];
			$height=$row['height'];
			$religion=$row['religion'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$country=$row['country'];
			$description=$row['description'];
			
		}
		else{
			echo mysqli_error($connect);
		}
?>






<!DOCTYPE HTML>
<html>
<head>
<title>Partner Preferences</title>
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
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Prefernces</li>
     </ul>
   </div>







   
   <div class="profile">
   	 <div class="col-md-12 profile_left">   	 	
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Partner Preference</a></li>
			   </ul>
			   <form action="" method="post" name="partner">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">



                  <!-- Edited -->
                  <!-- -------------------------------------------------- -->
                  <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    	<p><textarea name="description" rows="5" cols="150"><?php echo $description;?></textarea></p>
				    </div>



                    <!-- Edited -->
                    <!-- -------------------------------------------------- -->
				    <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">
									<input type="text" name="age_min" value="<?php echo $age_min; ?>">to <input type="text" name ="age_max" value="<?php echo $age_max; ?>"> 
									</td>
								</tr>




                                <!-- Edited -->
                                <!-- -------------------------------------------------- -->
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<div class="select-block1">
										<select name="marital_status">
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>

						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
									</td>
								</tr>





                                <!-- Edited -->
                                <!-- -------------------------------------------------- -->
								</tr>
								<tr class="opened">
									<td class="day_label">Height</td>
									<td class="day_value closed"><input type="text"  id="edit-name" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text">cm</td>
								</tr>




                                <!-- Edited -->
                                <!-- -------------------------------------------------- -->
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					                    <select name="religion">
                                        <option value="Not Selected">Not Selected</option>
						                    <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option> 
                                            <option value="Hindu">Buddha</option>
						                    <option value="Christian">Christian</option>
					                    </select>
	                 				</div></span>
	                  			</td>
								</tr>



                                <!-- Edited -->
                                <!-- -------------------------------------------------- -->
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><div class="select-block1">
						                <select name="education">
						                <option value="Not Selected">Not Selected</option>
                                        <option value="SSC">SSC</option>
                                        <option value="HSC">HSC</option> 
                                        <option value="Undergraduate">Undergraduate</option> 
                                        <option value="Postgraduate">Postgraduate</option>  
                                        <option value="PhD">PhD</option> 
						                </select>
								    </div>
								    </td>
								</tr>



                                <!-- Edited -->
                                <!-- -------------------------------------------------- -->
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value="<?php echo $occupation;?>" class="form-text"></td>
								</tr>



                                <!-- Edited -->
                                <!-- -------------------------------------------------- -->
								<tr class="opened">
									<td class="day_label">Country of Residence :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                    <select name="country">
                                            <option value="Not Selected">Not Selected</option>
						                    <option value="Bangladesh">Bangladesh</option>
                                            <option value="India">India</option> 
                                            <option value="UK">UK</option>
						                    <option value="USA">USA</option>
                                            <option value="France">France</option>
                                            <option value="Italy">Italy</option>
						                    </select>
						                 </div>
						            </td>
								</tr>




							 </tbody>
				          </table>
				        </div>
				  
				  </div>
				 <input type="submit" value="Update Preferences">
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>



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




