<?php
ob_start();
session_start();

if(!isset($_SESSION["emailid"]))
{
	header('location:clientlogin.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>PBMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!----drop down----->
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
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="col-sm-3 logo">
			  <h1><a href="index.html"><span class="highlight">P</span>bms</a></h1>
			</div>
		    <div class="col-sm-9 logo_right">
			<!-- script for menu -->
			<span class="menu"></span>
			
				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog_2">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel">
					        		<div class="head_4">
			                          <p>Login</p>
			                        </div>
			                    </h4>
					      	</div>
	                        <div class="modal-body">
                             <form class="register">
                               <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="username" id="username" placeholder="Username">
                                    <label for="username" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                               </div>
                               <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                             </div>
                             <div class="section">
                                <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
                             </div>
                             <ul class="new">
								<li class="new_left"><p><a href="clientforgotpwd.php">Forgot Password ?</a></p></li>
								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="clientregister.php" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
								<div class="clearfix"></div>
						     </ul>
                           </form>
                        </div>
				    </div>
				 </div>
				</div>
				 <!-- Modal -->
				
						</div>
					</div>
				  </div>
				</div>
			  <div class="clearfix"></div>
		 </div>
	   </div>
</div>

