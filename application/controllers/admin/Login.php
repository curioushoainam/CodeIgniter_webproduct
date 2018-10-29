<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Controller {

	public function index()
	{
		$this->load->view('admin/login/index');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */
?>