<?php 

class M_anggota extends CI_Model{
	
	function tampil_data(){
		
	$this->db->order_by('nim');
		
	return $this->db->get('users');
	}

	

	function hapus_data($where,$table){
		
	$this->db->where($where);
		
	$this->db->delete($table);
	}

	

	function updatepoint($nim, $point){

        
	$this->db->where('nim',$nim);
        
	$nilai = 'point+'.$point;
        
        
	$this->db->set('point', $nilai, FALSE);
        
	$this->db->update('users');
    }

}