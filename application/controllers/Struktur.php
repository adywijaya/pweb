<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_struktur');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$data['struktur'] = $this->m_struktur->tampil_s()->result();
<<<<<<< HEAD
=======
		$data['struktur2'] = $this->m_struktur->tampil_s2()->result();
>>>>>>> origin/master
		$this->load->view('struktur',$data);
		$this->load->view('templates/footer.php');
	}

}