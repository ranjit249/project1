<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		
	<title>Project Title</title>

	<!--- meta data of page specific ---->

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link rel="icon" href="">

	<!--- css file common to all page ------>
	
	<?php require 'include/css.php'; ?>
	
    <!-- External Imports -->

   	<?php require 'include/config.php'; ?>

</head>

<body>

	<!--==================================
		Header 
	===================================-->

	<header id="header">

		<?php require 'include/header.php'; ?>

	</header>

	<!-- #header ended -->

	<!--==================================
		Main Body
	===================================-->

	<div class="login-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="section-right">
						<h2 class="title">
							Account Login
						</h2>
						<form class="form" id="login_submit_form">
							<div class="form-row">
							    <input type="text" class="form-input" id="login-email" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	Email Id
							    </span>
							</div>
							<div class="form-row mb-1">
							    <input type="password" class="form-input" id="login-password" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	Password
							    </span>
							</div>
							<div class="form-row forgot-password">
								<div class="float-right">
									<a href="forgotpassword.php">
										Forgot Password 
									</a>
								</div>
							</div>	
							<div class="form-row mt-2">
								<button type="submit" class="form-submit" id="login-success">
									<div id="remove-text-login">
										Login to your Account!
									</div>
						          	<span></span><span></span><span></span><span></span>
								</button>
							</div>
							<div class="form-row">
								<span class="re-activate">
									If you did not receive an activation email after register, please 
									<a href="">
										Click here
									</a>
									<i class="fa fa-hand-pointer-o pl-1"></i>
								</span>
							</div>	
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="section-left">
						<h2>
							Are you not Registered Yet?
						</h2>
						<p>
							By creating an account, you will be able to enroll in our sustainable development courses, keep track of your learning progress, and access our community.
						</p>
						<a class="btn btn-success btn-sm" href="signup.php">
							Sign Up Now
							<i class="fa fa-chevron-circle-right pl-1"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- #mainbody ended -->	

	<!--==================================
		Footer
	===================================-->

	<footer id="footer">	

		<?php include ('include/footer.php'); ?>

	</footer>	

	<!-- #footer ended -->	

	<!--==================================
		Notification
	===================================-->

	<?php include ('include/notification.php'); ?>	

	<!-- #notification ended -->	

</body>

	<?php require 'include/js.php'; ?>	

</html>