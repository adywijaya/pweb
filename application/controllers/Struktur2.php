<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur2 extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav2.php');
		$this->load->view('struktur2');
		$this->load->view('templates/footer2.php');
	}
}
