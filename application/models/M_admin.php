<?php 

class M_admin extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function get_user(){
	$query =  $this->db->get_where('admin', array (
												'username'=>$this->input->post('username'),
												'password'=>MD5($this->input->post('password'))
												
												));

	return $query->result_array();
	}	
}