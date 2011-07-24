
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function Welcome() {
		parent::__construct();
		
		$this->load->helper('form');
		$this->load->helper('email');
	}

	public function index()
	{
		$this->load->view('coming_soon');
	}

	public function subscribeAction()
	{
		$email = htmlentities($this->input->post('email'));
		$name = htmlentities($this->input->post('name'));
		$is_ajax = $this->input->post('ajax');
	
		if (valid_email($email) && preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) {
			$sql = "INSERT INTO subscribed_users(name, email)
					VALUES(?, ?)";

			$this->db->query($sql, array($name, $email));

			if (mysql_affected_rows() == 1) {
				include("../private_application/views/includes/subscribe_email.php");
				echo "<p id='load'>Thankyou for subscribing with Ideal Deals! You will receive an email shortly.</p>";
			}
		} 

		if (!valid_email($email)) {
			echo 'not valid email';
			echo 'Your email is not valid.';
		}
		if (!preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) 		{
			echo "Sorry your name is not valid";
		} 

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */