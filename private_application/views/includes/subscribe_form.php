<?php $attributes = array('name' => 'ideal_form', 'id' => 'subscription_form');
			echo form_open('welcome/subscribeAction', $attributes); ?>
				<div class="fieldHolder">
					<label>name:</label> <input type="text" name="name" class="textInput" id="name" />
					<!--end .fieldHolder-->
				</div>
				<div class="fieldHolder">
					<label>email:</label> <input type="text" name="email" class="textInput" id="email" />
					<!--end .fieldHolder-->
				</div>
				<div id="submitSubscription">
					<input id="submitButton" name="submitButton"  type="image" value="Subscribe" alt="subscribe button"
						src="images/subscribe-button.png" />
					<!-- end .submit-->
				</div>
				</form>