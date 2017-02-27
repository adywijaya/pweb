<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_saran_page extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_saran');
		$this->load->helper('url');
	}

	public function index()
	{	
		if(!isset($_SESSION['login'])) redirect(base_url().'admin_login');
		$this->load->view('templates/header.php');
		$this->load->view('templates/admin_nav.php');
		$data['saran'] = $this->m_saran->tampil_data()->result();
		$this->load->view('admin_saran',$data);
		$this->load->view('templates/admin_footer.php');
	}

	function tambah(){
		$this->load->view('saran');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$saran = $this->input->post('saran');


		$data = array(
			'nama' => $nama,
			'email' => $email,
			'saran' => $saran,
			);
		$this->m_saran->input_data($data,'saran');
		redirect('saran');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_saran->hapus_data($where,'saran');
		redirect('admin_saran_page');
	}
}
