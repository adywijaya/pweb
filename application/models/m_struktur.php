<?php

class M_struktur extends CI_Model{

// ============================================================================================================= Ketua -->
	
	function tampil_s(){
		return $this->db->get('struktur');
	}

// ============================================================================================================= Wakil -->

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

	 public function updateuser(){
        $this->db->where('id', $_SESSION['id'] );
    }
}