<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Helpcenter extends CI_Controller {

    public $datakirim;
    public $message = "";

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            ////when the session user is empty back to 'Login'
            redirect(base_url());
        } else {
            $this->load->model('Helpcenter_m');
            $this->datakirim['help'] = $this->Helpcenter_m->getHelpcenter();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Helpcenter_view', $this->datakirim);
        }
    }

}
