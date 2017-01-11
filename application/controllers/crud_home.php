<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');
			
	}

function tambah(){
	$this->load->view('f_tambah_planning');
	}

	function tambah_aksi(){
		$tanggal = $this->input->post('tanggal');
		$acara = $this->input->post('acara');

		$data = array(
			'tanggal' => $tanggal,
			'acara' => $acara,
			);
		$this->m_data->input_data($data,'planning');
		redirect('home2');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'planning');
		redirect('home2');
	}

	function edit($id){
	$where = array('id' => $id);
	$data['planning'] = $this->m_data->edit_data($where,'planning')->result();
	$this->load->view('f_ubah_planning',$data);
	}
	
	function update(){
	$id = $this->input->post('id');
	$tanggal = $this->input->post('tanggal');
	$acara = $this->input->post('acara');

	$data = array(
		'tanggal' => $tanggal,
		'acara' => $acara,
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'planning');
	redirect('home2');
	}
}