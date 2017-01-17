<?php 

class Loginadmin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
        $this->load->helper('url');
	}

	public function index(){
		$this->load->view('templates/header.php');
		$this->load->view('loginadmin');
		$this->load->view('templates/login_footer.php');
	}
}