<?php 
include("core_methods.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>User Login</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/login_page.css" rel='stylesheet' type='text/css' />

<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
</head>





<body>

<?php 
include("includes/nav_bar.php");
?>



<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li>
		
     </ul>
   </div>


   <div class="services">
   	  <div class="col-sm-6 login_left">

	  <!-- Edited  -->
	   <form action="login.php" method="POST">

  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Email<span class="form-required" title="This field is required." required>*</span></label>
	      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required" required>
	    </div>


	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required." required>*</span></label>
	      <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required" required>
	    </div>

        
	    <div class="form-actions">

			<!-- Edited -->
	    	<input type="submit" id="edit-submit" name="login" value="Log in" class="btn_1 submit" method="POST">
	    </div>
	   </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>

   <br/>
   <p><a href="forgot_password.php"> Forgot Password? </a></p>

  </div>
</div>




<?php 
include("footer.php");
?>

</body>
</html>	