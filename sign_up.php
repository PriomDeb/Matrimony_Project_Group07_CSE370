<?php 
include("includes/session_start.php");
include("core_methods.php");
signup();

?>


<!DOCTYPE HTML>
<html>
<head>
<title>User Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/login_page.css" rel='stylesheet' type='text/css' />
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->

</head>



<body>

<?php 
include_once("includes/nav_bar.php");
?>



<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Create Your Account</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">


	  	    <div class="form-group">
		      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>


			<div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>


		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" minlength="6" class="form-text required" required>
		    </div>


			<div class="form-group">
		      <label for="edit-name"> Secret Code - Enter your favourite color and 2 digits (Ex. yellow10) <span class="form-required" title="This field is required.">*</span></label>
			  <p style="font-size: 12px"> This secret code will help you to reset your password when you forgot the password. <br> Please keep this code save somewhere as a backup. Otherwise you will not be able to reset your password.</p>
		      <input type="text" id="edit-name" name="secret_code" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>


		    











              

			  
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	