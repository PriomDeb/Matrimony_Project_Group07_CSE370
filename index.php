<?php include("includes/session_start.php");?>


<!DOCTYPE HTML>
<html>
<head>


<!-- Edited -->
<title>Matrimony Project Group 07 </title>



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
<link href="css/navstyle.css" rel='stylesheet' type='text/css' />
<link href="css/homeimage.css" rel='stylesheet' type='text/css' />
<link href="css/happy_clients.css" rel='stylesheet' type='text/css' />
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


<!-- Added -->
 <?php include("includes/nav_bar.php");?>






<!-- Edited for Project -->
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Matrimony 24/7</h3>
      <a href="sign_up.php" class="hvr-shutter-out-horizontal">Sign Up</a>
	  <a href="login_page.php" class="hvr-shutter-out-horizontal">Login</a>
	  <a href="login.php" class="hvr-shutter-out-horizontal">Admin Login</a>
    </div>
  </div>
 
</div> 


<div id="about">
<!-- Added -->
<?php include("footer.php");?>
</div>


</body>
</html>	
