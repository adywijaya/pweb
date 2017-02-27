<?php

class User_model extends CI_Model {


public function __construct() {
        parent::__construct();
    }



public function registeruser(){

// var_dump($this->input->post());

$data = [

'id' => date('U'),

'no_telp' => $this->input->post('phonenumber'),

'nama' => $this->input->post('name'),

'tgl_lahir' => $this->input->post('bday'),

'jenis_kelamin' => $this->input->post('gender'),

'nim' => $this->input->post('nim'),

'alamat' => $this->input->post('alamat'),

'email' =>  $this->input->post('email'),

'jurusan' =>  $this->input->post('jurusan'),

'angkatan' =>  $this->input->post('angkatan'),
                ];


$this->db->insert( 'users', $data );
    }


    public function emailsudahterdaftar( $emailaddr ){
        $query = $this->db->get_where( 'users', array( 'email' => $emailaddr) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }
    public function nimsudahterdaftar( $nimnya){
        $query = $this->db->get_where( 'users', array( 'nim' => $nimnya) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }


    public function userterdaftar( $username ){
        $query = $this->db->get_where( 'users', array( 'user_name' => $username) );
        if( !empty( $query->row_array() ) ) {
            $_SESSION['user_name'] = $query->row_array()['user_name'];
            $_SESSION['password'] = $query->row_array()['password'];
            $_SESSION['email'] = $query->row_array()['email'];
            $_SESSION['id'] = $query->row_array()['id'];
            $_SESSION['nama'] = $query->row_array()['nama'];
            return true;
        }
        return false;
    }



public function passwordok( $pass ){
      // var_dump($pass);
        if( password_verify( $this->input->post('password') , $_SESSION['password'] ) ){
            return true;
        }

        return FALSE;
    }



function tampil_data(){

$this->db->order_by('nim');

return $this->db->get('users');
    }

}
