<?php

class M_struktur extends CI_Model{

// ============================================================================================================= Ketua -->
	
	function tampil_ketua(){
		return $this->db->get('ukm_ketua');
	}

	function edit_ketua($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_ketua($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

// ============================================================================================================= Wakil -->
	
	function tampil_wakil(){
		return $this->db->get('ukm_wakil');
	}

	function edit_wakil($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_wakil($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

// ======================================================================================================== Sekretaris -->
	
	function tampil_sekretaris(){
		return $this->db->get('ukm_sekretaris');
	}

	function edit_sekretaris($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_sekretaris($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

// ======================================================================================================== Bendahara 1 -->
	
	function tampil_bendahara1(){
		return $this->db->get('ukm_bendahara1');
	}

	function edit_bendahara1($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_bendahara1($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

// ======================================================================================================== Bemdahara 2 -->
	
	function tampil_bendahara2(){
		return $this->db->get('ukm_bendahara2');
	}

	function edit_bendahara2($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_bendahara2($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
// ============================================================================================================== Humas -->
	
	function tampil_humas(){
		return $this->db->get('ukm_humas');
	}

	function edit_humas($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_humas($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
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