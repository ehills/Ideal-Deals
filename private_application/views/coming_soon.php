<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Ideal deals for you!</title>

<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
<!-- include jQuery library -->
<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.js"></script>
<script type="text/javascript" src="scripts/validate_subscription.js"></script>
</head>
<!--[if IE ]>
<body class="ie">
<![endif]-->
<body>
	<div id="container">
		<div id="content">
			<div id="logoImgHolder">
				<img src="images/ideal-logo.png" alt="logo" width="512" height="615" />
				<!--end .logoImgHolder-->
			</div>
			<div id="subscribeForm">
			<?php 
				include("../private_application/views/includes/subscribe_form.php");
			?>
				<div class="followBtnHolder">
					<a href="http://www.twitter.com"> <img
						src="images/twitter-icon.png" alt="Follow on Twitter" width="40"
						height="40" /> </a> <a href="http://www.facebook.com"> <img
						src="images/facebook-icon.png" alt="Follow on Facebook" width="40"
						height="40" /> </a>
				</div>
			</div>
			<div class="greyFiller">
				<!--end .greyFiller-->
			</div>
			<!-- end .content -->
		</div>
		<!-- end .container -->
	</div>
</body>
</html>
