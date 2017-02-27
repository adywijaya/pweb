<?php 
class Admin_kegiatan_page extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_kegiatan');
        $this->load->helper('url');
	
	}

	function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin_login');
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['planning'] = $this->m_kegiatan->ambil_data()->result();
		$data['kegiatan'] = $this->m_kegiatan->tampil_kegiatan()->result();
		$this->load->view('admin_kegiatan',$data);
		$this->load->view('templates/admin_footer.php');
	}

}