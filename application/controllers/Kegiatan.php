<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_kegiatan');
        $this->load->helper('url');
	}

	function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$data['planning'] = $this->m_kegiatan->ambil_data()->result();
		$data['kegiatan'] = $this->m_kegiatan->tampil_kegiatan()->result();
		$this->load->view('kegiatan',$data);
		$this->load->view('templates/footer.php');
	}
}