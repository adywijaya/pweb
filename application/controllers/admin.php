<?php 

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/polos_nav.php');
		$this->load->view('loginadmin');
		$this->load->view('templates/login_footer.php');
	}

/*==========================================================================Login KHUSUS admin*/
	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0)
		{
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect("admin_home");


		}
		else
		{
			$_SESSION['notif'] = 1;
			redirect('admin');
		}
	}

/*==========================================================================Logout admin*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}