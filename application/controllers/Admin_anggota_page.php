<?php
class Admin_anggota_page extends CI_Controller {

	

	function __construct()
	{
		
	parent::__construct();
		
	$this->load->model('m_anggota');
        
	$this->load->helper('url');	
	}

	

	public function index()
	{
		
	if(!isset($_SESSION['login'])) redirect(base_url().'admin_login');
		
	$this->load->view('templates/header.php');
		
	$this->load->view('templates/admin_nav.php');
		
	$data['users'] = $this->m_anggota->tampil_data()->result();
		
	$this->load->view('admin_anggota',$data);
		
	$this->load->view('templates/admin_footer.php');
	}	

	

	function hapus($id)
	{
		
$where = array('id' => $id);
		
$this->m_anggota->hapus_data($where,'users');
		
redirect('admin_anggota_page');
	}

	

	public function updatepoint($nim){
		
	$this->m_anggota->updatepoint($nim, $this->input->post('point'));
		
	redirect('admin_anggota_page');
	}
}