<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{

/*		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('welcome', $data);
		}
*/
		$data['registerForm'] = 'Registration Form';
		$data['loginForm'] = '<a href="'.base_url('auth/login').'">Login Form</a>';
		$this->load->view('layout', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */