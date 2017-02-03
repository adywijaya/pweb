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
                    'user_name' =>  $this->input->post('username'),
                    'password' =>  password_hash( $this->input->post('password'), PASSWORD_BCRYPT )
                ];

        $this->db->insert( 'users', $data );
    }

    public function namausersudahterdaftar( $namauser ){
        $query = $this->db->get_where( 'users', array( 'user_name' => $namauser) );
        if( !empty( $query->row_array() ) ) {
            return true;
        }
        return false;
    }

    public function emailsudahterdaftar( $emailaddr ){
        $query = $this->db->get_where( 'users', array( 'email' => $emailaddr) );
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

    public function get_poin(){
      $sql = "SELECT u.nim, u.nama , u.jurusan, p.poin
                  FROM poin p
                  LEFT JOIN users u
                  USING (nim)
                  ORDER BY u.nim ASC";
      $query = $this->db->query( $sql );
      if( !empty( $query->result_array() ) ) {
          return $query->result_array();
      } else {
          return false;
      }
    }

}
