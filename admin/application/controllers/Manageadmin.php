<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manageadmin extends CI_Controller {

    public $datakirim = array();

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
            $this->load->model('manageadmin_model');
            $model = $this->manageadmin_model;

            $this->datakirim = array(
                "message" => "",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        }
    }

    public function pengecekan() {
        $this->load->model('manageadmin_model');
        $model = $this->manageadmin_model;
        $nik = $model->nik;
        $passDB = $model->password;
        $passlama = $_POST['passlama'];
        $passbaru = $_POST['passbaru'];
        $repassbaru = $_POST['repassbaru'];

        if ($passDB != $passlama) {
            $this->datakirim = array(
                "message" => "<p style=\"color:red\" class=\"text-center\">Password lama yang anda masukkan salah</p> <br>",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        } elseif ($passbaru != $repassbaru) {
            $this->datakirim = array(
                "message" => "<p style=\"color:red\" class=\"text-center\">Password baru yang anda masukkan tidak sesuai</p> <br>",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        } else {
            $model->setData($nik, $passbaru);
            $this->datakirim = array(
                "message" => "<p style=\"color:green\" class=\"text-center\">Data Admin berhasil di update</p> <br>",
                "nik" => "$model->nik",
                "email" => "$model->email",
            );

            $this->load->view('manageadmin_view', $this->datakirim);
        }
    }

}
