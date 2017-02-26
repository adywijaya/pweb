<?php 

class M_saran extends CI_Model{
	function tampil_data(){
		$this->db->order_by('tanggal DESC');
		return $this->db->get('saran');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}