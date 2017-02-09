<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_home_page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');
			
	}

/*==========================================================================Tambah planning*/
	function tambah()
	{
	$this->load->view('f_tambah_planning');
	}

	function tambah_aksi()
	{
		$tanggal = $this->input->post('tanggal');
		$acara = $this->input->post('acara');

		$data = array(
			'tanggal' => $tanggal,
			'acara' => $acara,
			);
		$this->m_data->input_data($data,'planning');
		redirect('admin_home_page');
	}

/*==========================================================================Hapus planning*/

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'planning');
		redirect('admin_home_page');
	}

/*==========================================================================Edit planning*/
	function edit($id)
	{
	$where = array('id' => $id);
	$data['planning'] = $this->m_data->edit_data($where,'planning')->result();
	$this->load->view('f_ubah_planning',$data);
	}
	
	function update()
	{
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
	redirect('admin_home_page');
	}

/*==========================================================================Edit info kas*/
	function update_info_kas()
	{
	$id = $this->input->post('id');
	$kas = $this->input->post('kas');

	$data = array(
		'kas' => $kas,

	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_info($where,$data,'kas');
	redirect('admin_home_page');
	}

/*==========================================================================Edit info kas*/
	function update_info_point()
	{
	$id = $this->input->post('id');
	$info = $this->input->post('info');

	$data = array(
		'info' => $info,

	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_info($where,$data,'info');
	redirect('admin_home_page');
	}
	
}