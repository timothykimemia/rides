<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listmitramfood extends CI_Controller {

    public $datakirim;
    public $message = "";

    public function index() {
        $this->load->model('Mitra_m');
        $this->datakirim['mitra'] = $this->Mitra_m->getAllMitraMfood();
        $this->datakirim['message'] = $this->message;

        $this->load->view('Listmitramfood_view', $this->datakirim);
    }

    public function editStatus() {
        $status = $this->input->post('status');
        $idmitra = $this->input->post('idmitra');
        $idresto = $this->input->post('idresto');

//        echo "status = $status | idmitra = $idmitra | id resto = $idresto";
        $this->load->model('Mitra_m');
        $this->datakirim['mitra'] = $this->Mitra_m->updateStatusMfood($idmitra, $status, $idresto);

        if ($status == 3) {
            $this->message = "<p style=\"color:green\" class=\"text-center\">Status Mitra Berhasil di Delete</p> <br>";
            $this->index();
        } else if ($status == 2) {
            $this->message = "<p style=\"color:green\" class=\"text-center\">Status Mitra Berhasil di Non Aktifkan</p> <br>";
            $this->index();
        } else {
            $this->message = "<p style=\"color:green\" class=\"text-center\">Status Mitra Berhasil di Aktifkan</p> <br>";
            $this->index();
        }

//        echo $status.$idmitra;
    }

}