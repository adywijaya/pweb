<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {

    public function __construct() {
          parent::__construct();
		      $this->load->model('user_model');
    }

    public function index(){
      $this->data['reward'] = $this->user_model->get_poin();

      $this->load->view('templates/header');
      $this->load->view('templates/nav');
      $this->load->view('poin',  $this->data);
      $this->load->view('templates/footer');
    }

}
