<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ideal deals for you!</title>
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
</head>
﻿
<!--[if IE ]>
  <body class="ie">
<![endif]-->
<!--[if !IE]>-->
<body>
	<!--<![endif]-->
	<div id="container">
		<div id="content">
			<div class="logo">
				<div class="logoImgHolder">
					<img src="images/ideal-logo.png" alt="logo" width="512"
						height="615" />
					<!--end .logoImgHolder-->
				</div>
				<div class="featureImage">
					<div id="subscribeForm">
					<?php $attributes = array('name' => 'ideal_form', 'id' => 'form');
					echo form_open('welcome/subscribeAction', $attributes);?>
						<div class="fieldHolder">
							<label>name:</label> <input type="text" name="name"
								class="textInput" id="name" />
							<!--end .fieldHolder-->
						</div>
						<div class="fieldHolder">
							<label>email:</label> <input type="text" name="email"
								class="textInput" id="emailInput" />
							<!--end .fieldHolder-->
						</div>
						<div class="submitHolder">
							<div class="submit">
								<input name="submitButton" type="image" value="Subscribe"
									alt="subscribe button" src="images/subscribe-button.png"
									width="142" height="45" />
								<!-- end .submit-->
							</div>
						</div>
						</form>
						<div class="followBtnHolder">
							<a href="http://www.twitter.com"> <img
								src="images/twitter-icon.png" alt="Follow on Twitter" width="42"
								height="42" /> </a>
							<!--end .followBtn-->
							<a href="http://www.facebook.com"> <img
								src="images/facebook-icon.png" alt="Follow on Facebook"
								width="48" height="48" /> </a>
						</div>
					</div>
					<!--end .featureImage-->
				</div>
				<!--end .logo-->
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
