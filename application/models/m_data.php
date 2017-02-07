<?php

class M_data extends CI_Model{

	function ambil_data(){
		return $this->db->get('planning');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

// ========================================================================================================  Untuk bagian edit info kas-->
	
	function tampil_info(){
		return $this->db->get('kas');
	}

	function edit_info($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_info($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


// =====================================================================================  Untuk bagian edit info cara mendapatkan point-->
	
	function tampil_point(){
		return $this->db->get('info');
	}

	function edit_point($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_point($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
