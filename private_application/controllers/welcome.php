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
	
	public function badBoth() {
		$data['error'] = 'both';
		$this -> load -> view('coming_soon', $data);	
	}
	
	public function noAjaxComplete() {
		$data['error'] = 'noAjaxComplete';
		$this-> load -> view('coming_soon', $data);
	}
	
	public function duplicateEmail() {
		$data['error'] = 'duplicateEmail';
		$this-> load -> view('coming_soon', $data);
	}

	public function subscribe() {
		$email = htmlentities($this -> input -> post('email'));
		$name = htmlentities($this -> input -> post('name'));
		$is_ajax = $this -> input -> post('ajax');
		
		if(valid_email($email) && preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
			$sql = "SELECT email FROM subscribed_users
					WHERE email = ?";

			$this -> db -> query($sql, array($email));
			
			if(mysql_affected_rows() == 1) {
				if ($is_ajax) {
					echo $this -> load -> view('includes/subscribe_form_dupEmail');
				} else {
					$this -> duplicateEmail();
				}
				
			} else {
				$sql = "INSERT INTO subscribed_users(name, email)
					VALUES(?, ?)";

				$this -> db -> query($sql, array($name, $email));
				
				if(mysql_affected_rows() == 1) {
					//include ("private_application/views/includes/subscribe_email.php");
					if ($is_ajax) {
						echo $this -> load -> view('includes/subscribe_complete');
					} else {
						$this -> noAjaxComplete();
					}
				}
			}
		}
		if($is_ajax) {
			if(!valid_email($email) && !preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
				echo $this -> load -> view('includes/subscribe_form_botherr');
			}	
			elseif(!preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
				echo $this -> load -> view('includes/subscribe_form_nameerr');
			}
			elseif(!valid_email($email)) {
				echo $this -> load -> view('includes/subscribe_form_emailerr');
			}
		} else {
			if (!valid_email($email) && !preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
				$this -> badBoth();
			} elseif(!preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
				$this -> badName();
			} elseif(!valid_email($email)) {
				$this -> badEmail();
			}
		}
	
	
}
}
/* End of file welcome.php */
/* Location: ./private_application/controllers/welcome.php */