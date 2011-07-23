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
				echo $this->load->view('subscription_success');
			}
		} 

		if (!valid_email($email)) {
			echo 'not valid email';
			$email_error = 'Your email is not valid.';
				
		}
		if (!preg_match('/^[ a-zA-Z.\-\']{2,40}$/', $name)) 		{
			echo $name;
			echo 'not valid name';
			$name_error = 'Your name is not valid.';
		} 

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */