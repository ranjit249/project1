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

	<div class="signup-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="section-right">
						<h2 class="title">
							New Account Signup
						</h2>
						<form class="form" id="signup_submit_form">
							<div class="form-row">
							    <input type="text" class="form-input" id="signup-name" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	First and Last Name 
							    </span>
							</div>
							<div class="form-row">
							    <input type="text" class="form-input" id="signup-email" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	Email Id
							    </span>
							</div>
							<div class="form-row mb-1">
							    <input type="password" class="form-input" id="signup-password" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	Password
							    </span>
							</div>
							<div class="form-row">
							    <input type="password" class="form-input" id="signup-con-pass" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	Re Enter Password
							    </span>
							</div>
							<div class="form-row">
								<button type="submit" class="form-submit" id="signup-success">
									<div id="remove-text-signup">
										Register Now
									</div>
						          	<span></span><span></span><span></span><span></span>
								</button>
							</div>
							<div class="form-row">
								<span class="re-activate">
									Already have an Account
									<a href="login.php">
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
							Couses Offer by our Project 
						</h2>
						<p>
							We have key specialization in given courses, Register yourself and enjoy premium courses, evaluate yourself and get certified at the end. 
						</p>
						<a class="btn btn-success btn-sm" href="">
							Sign Up Now
							<i class="fa fa-chevron-right pl-2"></i>
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