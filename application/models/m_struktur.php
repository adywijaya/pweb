<?php

class M_struktur extends CI_Model{

// ======================================================================================================= Tampil Ketua -->
	
	function tampil_ketua(){
		return $this->db->get('ukm_ketua');
	}

// ======================================================================================================= Tampil Wakil -->
	
	function tampil_wakil(){
		return $this->db->get('ukm_wakil');
	}

// ================================================================================================== Tampil Sekretaris -->
	
	function tampil_sekretaris(){
		return $this->db->get('ukm_sekretaris');
	}

// ================================================================================================= Tampil Bendahara 1 -->
	
	function tampil_bendahara1(){
		return $this->db->get('ukm_bendahara1');
	}

// ================================================================================================= Tampil Bemdahara 2 -->
	
	function tampil_bendahara2(){
		return $this->db->get('ukm_bendahara2');
	}

// ===================================================================================================== Function humas -->
	
	function tampil_humas(){
		return $this->db->get('ukm_humas');
	}

// ==================================================================================================================== -->
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}