<?php 

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function flogin()
	{
		$this->load->view('admin');
	}

/*==========================================================================Login KHUSUS admin*/

	function aksi_login()
	{
		if( $this->m_login->userterdaftar( $this->input->post('username') )) {
			if( $this->m_login->passwordok( $this->input->post('password') ) ){
				// user OK
				redirect( base_url().'admin_home');
			} else {
				// password salah
				$_SESSION['notif'] = 1;
				redirect( base_url().'admin/login');
			}
		} else {
			// username salah
			$_SESSION['notif'] = 1;
			redirect( base_url().'admin/login');
		}
	}

/*==========================================================================Logout admin*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}
}