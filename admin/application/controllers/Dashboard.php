<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
            // data buat jumlah dan status driver
            $this->load->model('Driver_m');
            $this->datakirim['jumlahDriver1'] = $this->Driver_m->getJumlahDriverAktif();
            $this->datakirim['jumlahDriver2'] = $this->Driver_m->getJumlahDriverNonAktif();
            $this->datakirim['jumlahDriver3'] = $this->Driver_m->getJumlahDriverBanned();

            // data jumlah transaksi driver (leastest transaction)
            $this->datakirim['transaksiDriver'] = $this->Driver_m->getAllHistoryTransaksi();

            // data jumlah transaksi driver
            $this->datakirim['transaksiBulan'] = $this->Driver_m->getTotalTransaksiBulanan(date('n'), date('Y'));

            // data jumlah pelanggan
            $this->load->model('Pelanggan_m');
            $this->datakirim['jumlahPelanggan1'] = $this->Pelanggan_m->getJumlahPelangganAktif();
            $this->datakirim['jumlahPelanggan2'] = $this->Pelanggan_m->getJumlahPelangganNonAktif();
            $this->datakirim['jumlahPelanggan3'] = $this->Pelanggan_m->getJumlahPelangganBanned();

//        data buat chart
            $this->datakirim['bln1'] = $this->Driver_m->getTotalTransaksiBulanan(1, date('Y'));
            $this->datakirim['bln2'] = $this->Driver_m->getTotalTransaksiBulanan(2, date('Y'));
            $this->datakirim['bln3'] = $this->Driver_m->getTotalTransaksiBulanan(3, date('Y'));
            $this->datakirim['bln4'] = $this->Driver_m->getTotalTransaksiBulanan(4, date('Y'));
            $this->datakirim['bln5'] = $this->Driver_m->getTotalTransaksiBulanan(5, date('Y'));
            $this->datakirim['bln6'] = $this->Driver_m->getTotalTransaksiBulanan(6, date('Y'));
            $this->datakirim['bln7'] = $this->Driver_m->getTotalTransaksiBulanan(7, date('Y'));
            $this->datakirim['bln8'] = $this->Driver_m->getTotalTransaksiBulanan(8, date('Y'));
            $this->datakirim['bln9'] = $this->Driver_m->getTotalTransaksiBulanan(9, date('Y'));
            $this->datakirim['bln10'] = $this->Driver_m->getTotalTransaksiBulanan(10, date('Y'));
            $this->datakirim['bln11'] = $this->Driver_m->getTotalTransaksiBulanan(11, date('Y'));
            $this->datakirim['bln12'] = $this->Driver_m->getTotalTransaksiBulanan(12, date('Y'));

            // piechart
            $this->datakirim['Mencari'] = $this->Driver_m->getTotalTransaksi(1);
            $this->datakirim['Menawarkan'] = $this->Driver_m->getTotalTransaksi(2);
            $this->datakirim['Berhasil'] = $this->Driver_m->getTotalTransaksi(3);
            $this->datakirim['Ditolak'] = $this->Driver_m->getTotalTransaksi(4);
            $this->datakirim['Dibatalkan'] = $this->Driver_m->getTotalTransaksi(5);
            $this->datakirim['Memulai'] = $this->Driver_m->getTotalTransaksi(6);
            $this->datakirim['Selesai'] = $this->Driver_m->getTotalTransaksi(7);

            $this->load->view('dashboard_view', $this->datakirim);
        }
    }

    function allTransaction() {
        $this->load->model('Driver_m');
        $this->datakirim['transaksi'] = $this->Driver_m->getDetilHistoryTransaksi();

//        $this->datakirim['transaksiDriver'] = $this->Driver_m->getAllHistoryTransaksi();
// Get JUMLAH masing-masing status TRANSAKSI ===================================
//    1 Mencari == tidak
//    2 bidding == tidak
//    3 success
//    4 rejected
//    5 canceled
//    6 start
//    7 finish 

        $this->datakirim['Mencari'] = $this->Driver_m->getTotalTransaksi(1);
        $this->datakirim['Menawarkan'] = $this->Driver_m->getTotalTransaksi(2);

        $this->datakirim['Berhasil'] = $this->Driver_m->getTotalTransaksi(3);
        $this->datakirim['Ditolak'] = $this->Driver_m->getTotalTransaksi(4);
        $this->datakirim['Dibatalkan'] = $this->Driver_m->getTotalTransaksi(5);
        $this->datakirim['Memulai'] = $this->Driver_m->getTotalTransaksi(6);
        $this->datakirim['Selesai'] = $this->Driver_m->getTotalTransaksi(7);

        $this->load->view('dashboard2_view', $this->datakirim);
    }

    function cancelTransaction() {
        $this->load->model('Driver_m');
        $this->datakirim['transaksi'] = $this->Driver_m->listCancelTransaksi();
        $this->datakirim['message'] = $this->message;

        $this->load->view('dashboard2cancel_view', $this->datakirim);
    }

    function cancelTransactionProcess($idHistoryTransaksi, $idTrans, $idDriver, $idPelanggan) {
//        echo $idhistorytransaksi."| $idtransaksi | $iddriver | $idpelanggan";
        $this->load->model('Driver_m');
        $this->Driver_m->cancelTransaksi($idHistoryTransaksi, $idTrans, $idDriver, $idPelanggan);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Transaksi Order berhasil di cancel</p> <br>";
        $this->cancelTransaction();
    }

}