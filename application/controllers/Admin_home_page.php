<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home_page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url'); 	
	}

	public function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin_login');
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['kas'] = $this->m_data->tampil_info()->result();
		$data['info'] = $this->m_data->tampil_point()->result();
		$data['planning'] = $this->m_data->ambil_data()->result();
		$this->load->view('admin_home',$data);
		$this->load->view('templates/admin_footer.php');
	}	
}
