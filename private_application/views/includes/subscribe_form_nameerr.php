<form action="http://localhost/IdealDeals/public/index.php/welcome/subscribeAction" method="post" accept-charset="utf-8" name="ideal_form" id="subscription_form">	
<div class="fieldHolder">
	<label>name:</label>
	<p id ="bad_name">Sorry your name is not valid.</p>
	<input type="text" name="name" class="textInput" id="name" />
	<!--end .fieldHolder-->
</div>
<div class="fieldHolder">
	<label>email:</label>
	<input type="text" name="email" class="textInput" id="email" />
	<!--end .fieldHolder-->
</div>
<div id="submitSubscription">
	<input id="submitButton" name="submitButton"  type="image" value="Subscribe" alt="subscribe button"
	src= "http://localhost/IdealDeals/public/images/subscribe-button.png" />
	<!-- end .submit-->
</div>
</form>