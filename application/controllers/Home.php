<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * summary
 */
class Home extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {	
        parent:: __construct();
    }

    public function index(){
    	$data = array();
    	$data['temp'] = 'site/home/index';
    	$this->load->view('site/layout', $data);
    }
}

?>