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

	<div class="forgotpassword-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 offset-lg-3">
					<div class="section-right">
						<h2 class="title">
							Forgot Password
						</h2>
						<form class="form" id="forgotpassword_submit_form">
							<div class="form-row">
							    <input type="text" class="form-input" id="forgotpassword-email" autocomplete="off">
							    <span class="error-msg"></span>
							    <span class="form-placeholder">
							    	Registered Email
							    </span>
							</div>
							<div class="form-row mt-2">
								<button type="submit" class="form-submit" id="forgotpassword-success">
									<div id="remove-text-forgotpassword">
										Reset Password
									</div>
						          	<span></span><span></span><span></span><span></span>
								</button>
							</div>
							<div class="form-row text-center">
								<span class="re-activate">
									Return to login Page
									<a href="login.php">
										Click here
									</a>
									<i class="fa fa-hand-pointer-o pl-1"></i>
								</span>
							</div>	
						</form>
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