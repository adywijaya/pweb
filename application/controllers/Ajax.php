<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('user_model');
    }


    public function cekemail(){
        if( $this->user_model->emailsudahterdaftar( $this->input->post('emailaddr') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }
    public function ceknim(){
        if( $this->user_model->nimsudahterdaftar( $this->input->post('nimnya') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }

}
