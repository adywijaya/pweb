<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
        $this->load->helper('url');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("home2"));
		}
	}

	function index(){
		$this->load->view('home2');
	}
}