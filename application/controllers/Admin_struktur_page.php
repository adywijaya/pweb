<?php 

class Admin_struktur_page extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_struktur');
        $this->load->helper('url');

	}

	function index()
	{
		if(!isset($_SESSION['login'])) redirect(base_url().'admin_login');
		
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['struktur'] = $this->m_struktur->tampil_s()->result();
		$this->load->view('admin_struktur',$data);
		$this->load->view('templates/admin_footer.php');
	}

// ==================================================================================================== Function Ketua -->
	
	public function update_ketua()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/ketua.jpg');
		redirect( base_url().'admin_struktur_page');
	}


// ==================================================================================================== Function Wakil -->

	public function update_wakil()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/wakil.jpg');
		redirect( base_url().'admin_struktur_page');
	}


// ==================================================================================================== Function Sekretaris -->


	public function update_sekretaris()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/sekretaris.jpg');
		redirect( base_url().'admin_struktur_page');
	}


// ==================================================================================================== Function Bendahara1 -->

	public function update_bendahara1()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/bendahara1.jpg');
		redirect( base_url().'admin_struktur_page');
	}


// ==================================================================================================== Function Bendahara2 -->

	public function update_bendahara2()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/bendahara2.jpg');
		redirect( base_url().'admin_struktur_page');
	}


// ==================================================================================================== Function Humas -->

	public function update_humas()
	{
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/humas.jpg');
		redirect( base_url().'admin_struktur_page');
	}


	function updateorg(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$jurusan = $this->input->post('jurusan');
		$angkatan = $this->input->post('angkatan');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'jurusan' => $jurusan,
			'angkatan' => $angkatan,		
		);

		$where = array(
			'id' => $id
		);

		$this->m_struktur->update_dataorg($where,$data,'struktur');
		redirect('admin_struktur_page');
	}

}