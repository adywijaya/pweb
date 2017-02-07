<?php
class Admin_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login")
        {
			redirect("admin");
		}	
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['kas'] = $this->m_data->tampil_info()->result();
		$data['info'] = $this->m_data->tampil_point()->result();
		$data['planning'] = $this->m_data->ambil_data()->result();
		$this->load->view('admin_home',$data);
		$this->load->view('templates/admin_footer.php');
	}	
}
