<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Drivertopup extends CI_Controller {

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
            $this->load->model('Topup_m');
            $this->datakirim['topupdriver'] = $this->Topup_m->getDriverTopup();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Drivertopup_view', $this->datakirim);
        }
    }

    public function batalTopup($nomor) {
        $this->load->model('Topup_m');
        $this->Topup_m->updateStatusTopup($nomor, 3);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Topup berhasil digagalkan</p> <br>";
        $this->index();
    }

    public function validationTopupForm($nomor, $iduser) {
//        echo "$nomor | $iduser";
        $this->load->model('Topup_m');
        $this->datakirim['detailtopup'] = $this->Topup_m->getDriverTopUpSpec($nomor);

        $this->load->view('Drivertopup2_view', $this->datakirim);
    }

    public function validationTopup($nomor, $iduser) {

        $this->load->model('Topup_m');
        $pengecekan = $this->Topup_m->pengecekanTopUpDriver($nomor);
//        var_dump($pengecekan);
        if ($pengecekan[0]['status'] == 1) {
            //        DATA BALANCE SETTINGS =========================================
//       TAKE BALANCE DATA NOW
            $s = $this->Topup_m->getBalanceAmountDriver($iduser);
            $saldoSaatIni = $s[0]['saldo'];

//       TAKE ADDITIONAL BALANCE
            $s2 = $this->Topup_m->getAdditionAmount($nomor);
            $saldoPenambahan = $s2[0]['jumlah'];

//        SALDO JUMLAH 
            $saldojumlah = $saldoSaatIni + $saldoPenambahan;

//        TAMBAH TRANSAKSI DRIVER ======================================
            $this->Topup_m->addTransaksiDriver($iduser, $saldoPenambahan, $saldojumlah);

//        UPDATE SALDO =================================================
            $this->Topup_m->updateSaldo($iduser, $saldojumlah);

//        UPDATE STATUS TOPUP ===========================================
            $this->Topup_m->updateStatusTopup($nomor, 2);

//        REDIRECT + message =======================================

            $this->message = "<p style=\"color:green\" class=\"text-center\">Topup berhasil di validation</p> <br>";
            $this->index();
        } else {
            $this->message = "";
            $this->index();
        }
    }

}
