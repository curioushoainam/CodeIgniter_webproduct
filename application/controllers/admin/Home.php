<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

	public function index()
	{
		$this->data['temp'] = 'admin/home/index';
		$this->load->view('admin/layout', $this->data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */