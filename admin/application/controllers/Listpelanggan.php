<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listpelanggan extends CI_Controller {

    public $datakirim;
    public $message = "";

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            //
//when the session user is empty back to 'Login'
            redirect(base_url());
        } else {
            $this->load->model('Pelanggan_m');
            $this->datakirim['pelanggan'] = $this->Pelanggan_m->getAllpelanggan();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Listpelanggan_view', $this->datakirim);
        }
    }

    public function editstatus() {

        $id = $_POST['id'];
        $status = $_POST['status'];

//        echo "$id | $status";
        $this->load->model('Pelanggan_m');
        $this->datakirim['pelanggan'] = $this->Pelanggan_m->editStatusPelanggan($id, $status);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Status Pelanggan telah berhasil di edit</p> <br>";
        $this->index();
    }

}
