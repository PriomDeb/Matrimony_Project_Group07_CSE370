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
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Find Match</li>
     </ul>
   </div>


<br/>







<?php

$sql_users = "SELECT * FROM user_information";
$results = $connect->query($sql_users); 

while($final=$results->fetch_assoc()) { ?>

<a href="visit_other.php?other_id=<?php echo $final['user_id']; ?>">
<h3> <?php echo "Profile ID {$final['user_id']} : <br/> {$final['full_name']}"; ?> <hr> </h3>
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
