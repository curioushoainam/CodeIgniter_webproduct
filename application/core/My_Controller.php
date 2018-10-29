<?php 
/**
 * summary
 */
class My_Controller extends CI_Controller
{

	// Bien de truyen data den views
	public $data = array();
    /**
     * summary
     */
    public function __construct()
    {
        parent:: __construct();

        $controller = $this->uri->segment(1);

        switch($controller){
        	case 'admin':{
        		// admin page
        		$this->_check_login();
        		break;
        	}

        	default:{
        		// client page
        	}
        }
    }

    /**
     * Kiem tra trang thai dang nhap cua admin
     * @return [type] [description]
     */
    private function _check_login(){

    }
}
?>