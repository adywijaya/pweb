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
		$data['ukm_ketua'] = $this->m_struktur->tampil_ketua()->result();
		$data['ukm_wakil'] = $this->m_struktur->tampil_wakil()->result();
		$data['ukm_sekretaris'] = $this->m_struktur->tampil_sekretaris()->result();
		$data['ukm_bendahara1'] = $this->m_struktur->tampil_bendahara1()->result();
		$data['ukm_bendahara2'] = $this->m_struktur->tampil_bendahara2()->result();
		$data['ukm_humas'] = $this->m_struktur->tampil_humas()->result();
		$this->load->view('struktur',$data);
		$this->load->view('templates/footer.php');
	}

}