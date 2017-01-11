<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
			redirect(base_url("home2"));
		}
			
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav2.php');
		$data['planning'] = $this->m_data->ambil_data()->result();
		$this->load->view('home2',$data);
		$this->load->view('templates/footer2.php');
	}	
}
