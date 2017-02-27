<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Signup extends CI_Controller {

	public function __construct() {
	parent::__construct();

		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->model('user_model');

	}

	public function index()
	{
	}

	public function signuppage(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('signuppage');
		$this->load->view('templates/footer');
	}

	public function register(){
		// var_dump( $this->input->post() );
		$this->user_model->registeruser();
		redirect( base_url() );
	}

}
