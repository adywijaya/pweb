<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('loginadmin');
		$this->load->view('templates/footer3.php');
	}
}