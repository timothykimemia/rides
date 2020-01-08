<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw extends CI_Controller {

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
            $this->load->model('Withdraw_m');
            $this->datakirim['withdraw'] = $this->Withdraw_m->getAllWithdraw();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Withdraw_view', $this->datakirim);
        }
    }

    public function approveWithdraw($idwithdraw, $iddriver, $jumlah, $status) {
        $this->load->model('Withdraw_m');
        $saldo = $this->Withdraw_m->getBalanceAmount($iddriver);
        $saldoX = $saldo[0]['saldo'];
//        echo "$idwithdraw | $iddriver | $jumlah | $status";
//        var_dump($status);

        if ($status == '1') {
            if ($saldoX < $jumlah) {
                $this->message = "<p style=\"color:red\" class=\"text-center\">Jumlah Withdraw melebihi saldo saat ini Rp $saldoX </p> <br>";
                $this->index();
            } else {
                $this->Withdraw_m->approveWithdraw($idwithdraw, $iddriver, $jumlah, $saldoX);
                $this->message = "<p style=\"color:green\" class=\"text-center\">Withdraw driver berhasil diapprove</p> <br>";
                $this->index();
            }
        } else {
            $this->index();
        }
    }

    public function batalWithdraw($idwithdraw) {
        $this->load->model('Withdraw_m');
        $this->datakirim['withdraw'] = $this->Withdraw_m->batalWithdraw($idwithdraw);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Withdraw driver berhasil digagalkan</p> <br>";
        $this->index();
    }

}
