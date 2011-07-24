<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function Welcome() {
		parent::__construct();

		$this -> load -> helper('form');
		$this -> load -> helper('email');
	}

	public function index() {
		$data['error'] = 'nothing';
		$this -> load -> view('coming_soon', $data);
	}
	
	public function badEmail() {
		$data['error'] = 'email';
		$this -> load -> view('coming_soon', $data);
	} 
	
	public function badName() {
		$data['error'] = 'name';
		$this -> load -> view('coming_soon', $data);	
	}
	
	public function noAjaxComplete() {
		$data['error'] = 'noAjaxComplete';
		$this-> load -> view('coming_soon', $data);
	}

	public function subscribeAction() {
		$email = htmlentities($this -> input -> post('email'));
		$name = htmlentities($this -> input -> post('name'));
		$is_ajax = $this -> input -> post('ajax');

		if(valid_email($email) && preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
			$sql = "INSERT INTO subscribed_users(name, email)
					VALUES(?, ?)";

			$this -> db -> query($sql, array($name, $email));

			if(mysql_affected_rows() == 1) {
				include ("../private_application/views/includes/subscribe_email.php");
				if ($is_ajax) {
					echo $this -> load -> view('includes/subscribe_complete');
				} else {
					$this -> noAjaxComplete();
				}
			}
		}
		if($is_ajax) {
				
			if(!valid_email($email)) {
				echo '<form action="http://localhost/IdealDeals/public/index.php/welcome/subscribeAction" method="post" accept-charset="utf-8" name="ideal_form" id="subscription_form">				
				<div class="fieldHolder">
					<label>name:</label> <input type="text" name="name" class="textInput" id="name" />
					<!--end .fieldHolder-->
				</div>
				<div class="fieldHolder">
					<p id ="bad_name">Sorry your email ws not valid</p>
					<label>email:</label> <input type="text" name="email" class="textInput" id="email" />
					<!--end .fieldHolder-->
				</div>
				<div id="submitSubscription">
					<input id="submitButton" name="submitButton"  type="image" value="Subscribe" alt="subscribe button" src="images/subscribe-button.png" />
					<!-- end .submit-->
				</div>
				</form>';
			}
			if(!preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
				echo '<form action="http://localhost/IdealDeals/public/index.php/welcome/subscribeAction" method="post" accept-charset="utf-8" name="ideal_form" id="subscription_form">				
				<div class="fieldHolder">
					<p id ="bad_name">Sorry your name was not valid.</p>
					<label>name:</label> <input type="text" name="name" class="textInput" id="name" />
					<!--end .fieldHolder-->
				</div>
				<div class="fieldHolder">
					<label>email:</label> <input type="text" name="email" class="textInput" id="email" />
					<!--end .fieldHolder-->
				</div>
				<div id="submitSubscription">
					<input id="submitButton" name="submitButton"  type="image" value="Subscribe" alt="subscribe button" src="images/subscribe-button.png" />
					<!-- end .submit-->
				</div>
				</form>';
			}
		} else {
				
			if(!valid_email($email)) {
				$this -> badEmail();
			}
			elseif(!preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
				$this -> badName();
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./private_application/controllers/welcome.php */