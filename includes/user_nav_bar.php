<link href="css/navstyle.css" rel='stylesheet' type='text/css' />
 <div class="navbar navbar-inverse-blue navbar">
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>



                  <!-- Edited -->
				  <?php 
				  if(isLogged()){
				  	$id=$_SESSION['id'];
				  	echo "<li><a href=\"user_home.php?id=$id\">Home</a></li>";
				  	echo "<li><a href=\"logout.php\">Logout</a></li>";
				  }
				  else{
				  	echo "<li><a href=\"login.php\">Login</a></li>";
				  	echo "<li><a href=\"sign_up.php\">Register</a></li>";
				  }
				  ?>
					

				  </ul>
				</li>
			   </ul>
             </nav>
           </div>




           <!-- Edited  -->
           <!-- ---------------------------------------- -->
           <a href="user_home.php?id=<?php echo $id; ?> "><img src="images/matrimony_logo.png" alt="logo" width="100"></a>

           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="user_profile.php?id=<?php echo $id;?>">My Profile</a></li>
		            <li><a href="update_partner_preferences.php?id=<?php echo $id;?>">Partner Preference</a></li>
					<li><a href="find_match.php?id=<?php echo $id;?>">Find Match</a></li>
		    		<li class="dropdown">


                    <!-- Edited  -->
                    <!-- ---------------------------------------- -->
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit Profile<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		               
                      <li><a href="upload_profile_pictures.php?id=<?php echo $id;?>">Upload Photo</a></li>
		            
		               <li><a href="update_user_info.php?id=<?php echo $id;?>">Edit Profile</a></li>  
		              </ul>
		            </li>

                    
					<!-- Edited  -->
                    <!-- ---------------------------------------- -->
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search_profiles.php?id=<?php echo $id;?>">Regular Search</a></li>
		                
		              </ul>
					  <li><a href="logout.php">Logout</a></li>  
		            </li>
		        </ul>
		</div>
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
