<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="description=" content="Ideal Deals offers you the best deals in New Zealand. 50-90% off Guaranteed. Deals straight from the supplier to you. Still under construction however but sign up now and we'll let you know when we're up and running." />
                     
		<title>Ideal Deals - Ideal deals coming soon! Subscribe now!</title>
		<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.validate.js"></script>
		<script type="text/javascript" src="scripts/validate_subscription.js"></script>
	</head>
	<!--[if IE ]>
	<body class="ie">
	<![endif]-->
	<body>
		<div id="container">
					<?php
if($error == 'email') {
	include ("private_application/views/includes/subscribe_form_emailerr.php");
} elseif($error == 'name') {
	include ("private_application/views/includes/subscribe_form_nameerr.php");
} elseif($error == 'both') {
	include ("private_application/views/includes/subscribe_form_botherr.php");
} elseif($error == 'duplicateEmail') {
	include ("private_application/views/includes/subscribe_form_dupEmail.php");
} elseif($error == 'noAjaxComplete') {
	include ("private_application/views/includes/subscribe_form_noAjax.php");
} else {
	echo '<ul id="messageBox"></ul>';
	include ("private_application/views/includes/subscribe_form.php");
}?>
					<ul class="social-media-icons">
			<li><a href="#"><img src="images/facebook-icon.png" alt="Like Us On Facebook" /></a></li>
			<li><a href="#"><img src="images/twitter-icon.png" alt="Follow Us On Twitter" /></a></li>
		</ul>
	</div>
	</body>
</html>
