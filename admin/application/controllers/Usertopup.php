<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usertopup extends CI_Controller {

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
            $this->datakirim['topupdriver'] = $this->Topup_m->getPelangganTopup();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Usertopup_view', $this->datakirim);
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
        $this->datakirim['detailtopup'] = $this->Topup_m->getPelangganTopUpSpec($nomor);

        $this->load->view('Usertopup2_view', $this->datakirim);
    }

    public function validationTopup($nomor, $iduser) {
        $this->load->model('Topup_m');
        $pengecekan = $this->Topup_m->pengecekanTopUpPelanggan($nomor);
//        var_dump($pengecekan);
        if ($pengecekan[0]['status'] == 1) {
            //        DATA BALANCE SETTINGS =========================================
            $s = $this->Topup_m->getBalanceAmountPelanggan($iduser);
            $saldoSaatIni = $s[0]['saldo'];

//       TAKE ADDITIONAL BALANCE
            $s2 = $this->Topup_m->getAdditionAmount($nomor);
            $saldoPenambahan = $s2[0]['jumlah'];

//        SALDO JUMLAH 
            $saldojumlah = $saldoSaatIni + $saldoPenambahan;


//        TAMBAH TRANSAKSI DRIVER ======================================
            $this->Topup_m->addTransaksiPelanggan($iduser, $saldoPenambahan, $saldojumlah);

//        UPDATE SALDO =================================================
            $this->Topup_m->updateSaldo($iduser, $saldojumlah);
//
////        UPDATE STATUS TOPUP ===========================================
            $this->Topup_m->updateStatusTopup($nomor, 2);
//
////        REDIRECT + message =======================================

            $this->message = "<p style=\"color:green\" class=\"text-center\">Topup berhasil di verifikasi</p> <br>";
            $this->index();
        } else {
            $this->message = "";
            $this->index();
        }
    }

}
