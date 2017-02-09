<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function userterdaftar( $username ){
        $query = $this->db->get_where( 'admin', array( 'username' => $username) );
        if( !empty( $query->row_array() ) ) {
            $_SESSION['username'] = $query->row_array()['username'];
            $_SESSION['password'] = $query->row_array()['password'];
            return true;
        }
        return false;
    }

    public function passwordok( $password ){
        if( password_verify( $this->input->post('password') , $_SESSION['password'] ) ){
            return true;
        }

        return FALSE;
    }
}