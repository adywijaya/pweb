<?php 

class Crud_kegiatan_page extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_kegiatan');
        $this->load->helper('url');
	}

/*==========================================================================Tambah kegiatan*/
	function tambah()
	{
	$this->load->view('f_tambah_kegiatan');
	}

	function tambah_aksi()
	{
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
		redirect('admin_kegiatan_page');
	}

/*==========================================================================Hapus kegiatan*/
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_kegiatan->hapus_data($where,'kegiatan');
		redirect('admin_kegiatan_page');
	}

/*==========================================================================Edit kegiatan*/
	function edit($id)
	{
		$where = array('id' => $id);
		$data['kegiatan'] = $this->m_kegiatan->edit_data($where,'kegiatan')->result();
		$this->load->view('f_ubah_agenda',$data);
	}
	
	function update()
	{
		$id = $this->input->post('id');
		$tanggal2 = $this->input->post('tanggal');
		$jam2 = $this->input->post('jam');
		$tempat2 = $this->input->post('tempat');
		$acara2 = $this->input->post('acara');

		$data = array(
			'tanggal' => $tanggal2,
			'jam' => $jam2,
			'tempat' => $tempat2,
			'acara' => $acara2,
		);

		$where = array(
			'id' => $id
		);

		$this->m_kegiatan->update_data($where,$data,'kegiatan');
		redirect('admin_kegiatan_page');
	}
}