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

	<div class="pagenotfound-section">
		<div class="container">
			<div class="alert alert-danger">
			  	<strong>Sorry!</strong> Page is not found. Please check the link. You might want to find something else.
			</div>
			<div class="banner">
				<img src="https://demo4leotheme.com/prestashop/leo_arcana_demo/themes/leo_arcana/assets/img/404.png" alt="Banner 404">
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