<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper('url'); 
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/polos_nav.php');
		$this->load->view('admin');
		$this->load->view('templates/login_footer.php');
	}

/*==========================================================================Login KHUSUS admin N*/
	function aksi_login()
	{
		if ($user= $this->m_admin->get_user() ){
			$_SESSION['login'] = 1;
			redirect(base_url()."admin_home_page");
		}else{
			$_SESSION['notif'] = 1;
			redirect(base_url().'admin_login');
		}
	}

/*==========================================================================Logout admin*/
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}
}