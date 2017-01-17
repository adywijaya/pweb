<?php 

class Admin_struktur extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kegiatan');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
		redirect(base_url("admin_home"));
		}
	}

	function index(){
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['kegiatan'] = $this->m_kegiatan->tampil_kegiatan()->result();
		$this->load->view('admin_struktur',$data);
		$this->load->view('templates/admin_footer.php');
	}
}