<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('coming_soon');	
	}
	
	public function subscribeAction()
	{
		$this->load->helper('email');
		$this->load->library('form_validation');
		
		$email = htmlentities($_POST['email']);
		$name = htmlentities($_POST['name']);
		
		if (valid_email($email) && preg_match('/^[ a-zA-Z._-]{2,40}$/', $name)) {
				echo 'all good';
				$sql = "INSERT INTO subscribed_users(name, email)
					VALUES(?, ?)";

				$this->db->query($sql, array($name, $email));
				
				if (mysql_affected_rows() == 1) {
					include "../private_application/views/includes/subscribe_email.php";
				}
		}
		
		if (!valid_email($email)) {
			echo 'not valid email';
			$email_error = 'Your email is not valid.';
			
		}
		if (!preg_match('/^[ a-zA-Z._-]{2,40}$/', $name)) {
			echo $name;
			echo 'not valid name';
			$name_error = 'Your name is not valid.';			
		}
		
		
	
		//header("Location: index.php/welcome");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */