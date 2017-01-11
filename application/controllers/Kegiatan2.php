<?php 

class Kegiatan2 extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kegiatan');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
		redirect(base_url("home2"));
		}
	}

	function index(){
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav2.php');
		$data['kegiatan'] = $this->m_kegiatan->tampil_kegiatan()->result();
		$this->load->view('kegiatan2',$data);
		$this->load->view('templates/footer2.php');
	}
}