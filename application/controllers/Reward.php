<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {

    public function __construct() {
          parent::__construct();
		      $this->load->model('user_model');
    }

    public function index()
    {

      $data['users'] = $this->user_model->tampil_data()->result();
      $this->load->view('templates/header');
      $this->load->view('templates/nav');
      $this->load->view('poin', $data);
      $this->load->view('templates/footer');
    }

}
