<?php

class M_struktur extends CI_Model{

// ============================================================================================================= Ketua -->
	
	function tampil_s(){
		return $this->db->get('struktur');
<<<<<<< HEAD
	}

// ============================================================================================================= Wakil -->
=======
	}

	function edit_ketua($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_ketua($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

// ============================================================================================================= Wakil -->
	
	function tampil_s2(){
		return $this->db->get('struktur2');
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
>>>>>>> origin/master

	function update_dataorg($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function getorganisasi( $id = '0'){
	if( $id =='0') {
		$query =  $this->db->get('struktur');
		return $query->result_array();
	} else {
		$query =  $this->db->get_where('struktur',['id'=>$id]);
		return $query->row_array();		
	}
	}

<<<<<<< HEAD
	 public function updateuser(){
        $this->db->where('id', $_SESSION['id'] );
    }
=======
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_dataorg($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function getorganisasi( $id = '0'){
	if( $id =='0') {
		$query =  $this->db->get('struktur');
		return $query->result_array();
	} else {
		$query =  $this->db->get_where('struktur',['id'=>$id]);
		return $query->row_array();		
	}
}

	public function getorganisasi2( $id = '0'){
	if( $id =='0') {
		$query =  $this->db->get('struktur2');
		return $query->result_array();
	} else {
		$query =  $this->db->get_where('struktur2',['id'=>$id]);
		return $query->row_array();		
	}

}	
>>>>>>> origin/master
}