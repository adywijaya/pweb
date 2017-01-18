<?php 

class Admin_struktur extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_struktur');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
		redirect(base_url("admin_home"));
		}
	}

	function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['ukm_ketua'] = $this->m_struktur->tampil_ketua()->result();
		$data['ukm_wakil'] = $this->m_struktur->tampil_wakil()->result();
		$data['ukm_sekretaris'] = $this->m_struktur->tampil_sekretaris()->result();
		$data['ukm_bendahara1'] = $this->m_struktur->tampil_bendahara1()->result();
		$data['ukm_bendahara2'] = $this->m_struktur->tampil_bendahara2()->result();
		$data['ukm_humas'] = $this->m_struktur->tampil_humas()->result();
		$this->load->view('admin_struktur',$data);
		$this->load->view('templates/admin_footer.php');
	}

// ==================================================================================================== Function upload -->
	
	public function update_ketua()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/ketua.jpg');
		redirect( base_url().'admin_struktur');
	}

	public function update_wakil()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/wakil.jpg');
		redirect( base_url().'admin_struktur');
	}

	public function update_sekretaris()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/sekretaris.jpg');
		redirect( base_url().'admin_struktur');
	}

	public function update_bendahara1()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/bendahara1.jpg');
		redirect( base_url().'admin_struktur');
	}

	public function update_bendahara2()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/bendahara2.jpg');
		redirect( base_url().'admin_struktur');
	}

	public function update_humas()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/humas.jpg');
		redirect( base_url().'admin_struktur');
	}

}