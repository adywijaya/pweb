<?php 

class Kegiatan2 extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kegiatan');
        $this->load->helper('url');
	}

	function index(){
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav2.php');
		$data['kegiatan'] = $this->m_kegiatan->tampil_kegiatan()->result();
		$this->load->view('kegiatan2',$data);
		$this->load->view('templates/footer2.php');
	}

	function tambah(){
	$this->load->view('f_tambah_kegiatan');
	}

	function tambah_aksi(){
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$tempat = $this->input->post('tempat');
		$acara = $this->input->post('acara');

		$data = array(
			'tanggal' => $tanggal,
			'jam' => $jam,
			'tempat' => $tempat,
			'acara' => $acara,
			);
		$this->m_kegiatan->input_data($data,'kegiatan');
		redirect('kegiatan2');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_kegiatan->hapus_data($where,'kegiatan');
		redirect('kegiatan2');
	}

}