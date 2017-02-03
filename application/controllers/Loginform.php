<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginform extends CI_Controller {

	 public function __construct() {
        parent::__construct();

		$this->load->model('user_model');
    }

    public function index( $status = 0 ){
      $data['status'] = $status;
      $this->load->view('templates/header');
      $this->load->view('signin',$data);
      $this->load->view('templates/footer');
    }

		// proses login user
	public function login(){
		if( $this->user_model->userterdaftar( $this->input->post('username') )) {
			if( $this->user_model->passwordok( $this->input->post('password') ) ){
				// user OK
				redirect( base_url().'home');
			} else {
				// password salah
				redirect( base_url().'login/2');
			}
		} else {
			// username salah
			redirect( base_url().'login/1');
		}

	}

  public function logout(){
  session_destroy();
  redirect('login');
  }
}
