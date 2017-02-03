<?php
class Admin_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login")
        {
			redirect("admin_home");
		}	
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['planning'] = $this->m_data->ambil_data()->result();
		$this->load->view('admin_home',$data);
		$this->load->view('templates/admin_footer.php');
	}	
}
