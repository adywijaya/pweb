<?php 

class M_anggota extends CI_Model{
	function tampil_data(){
		return $this->db->get('users');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}