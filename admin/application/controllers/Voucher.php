<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

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
            $this->load->model('Voucher_m');

            $this->datakirim['voucher'] = $this->Voucher_m->getAllVoucher();
            $this->datakirim['message'] = $this->message;
            $this->datakirim['fiturVoucher'] = $this->Voucher_m->getFitur();
            $this->datakirim['tipeVoucher'] = $this->Voucher_m->getTipe();


            $this->load->view('Voucher_view', $this->datakirim);
        }
    }

    public function hapusVoucher($idvoucher) {
//        echo $idvoucher;
        $this->load->model('Voucher_m');
        $this->Voucher_m->hapusVoucher($idvoucher);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Voucher berhasil dihapus</p> <br>";
        $this->index();

//        var_dump($mride);
    }

    public function editVoucher() {
//        echo $idvoucher;

        $data = array(
            // 'nama' => $this->input->post('namavoucher'),
            'fitur' => $this->input->post('fiturvoucher'),
            'tipe' => $this->input->post('tipevoucher'),
            'nilai' => $this->input->post('nilaivoucher'),
            // 'keterangan' => $this->input->post('ketvoucher'),
            // 'kuota' => $this->input->post('kuotavoucher'),
            'id' => $this->input->post('idvoucher')
        );

        $this->load->model('Voucher_m');
        $this->Voucher_m->editVoucher($data);

        redirect(base_url('index.php/Voucher'));
        // echo "hallo world";
        // echo $data['fitur'];
        // print_r($data);
//        var_dump($mride);
    }

    public function tambahVoucherDiskonPersen() {

        $this->datakirim['message'] = $this->message;
        $this->datakirim['tipe_voucher'] = 1;
        $this->datakirim['tittle'] = "Voucher Diskon Persen";


        $this->load->view('VoucherFormPersen_view', $this->datakirim);
    }

    public function insertDiskonPersen() {
        $this->load->model('Voucher_m');

        $nama = $_POST['nama'];
        $fitur = $_POST['fitur'];
        $nilai = $_POST['nilai'];
        $kuota = $_POST['kuota'];
        $keterangan = $_POST['keterangan'];
        $tipe = 1;

        foreach ($fitur as $value) {
//            echo "insert $nama | $nilai | $kuota | $keterangan | Diskon dengan fitur = $value<br>";
            $this->Voucher_m->insertVoucher($nama, $tipe, $value, $nilai, $kuota, $keterangan);
        }

        $this->message = "<p style=\"color:green\" class=\"text-center\">Voucher Diskon Persen berhasil ditambahkan</p> <br>";
        $this->index();
//        var_dump($mride);
    }

    public function tambahVoucherDiskonNominal() {
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tipe_voucher'] = 2;
        $this->datakirim['tittle'] = "Voucher Diskon Nominal";
        $this->datakirim['insert'] = "DiskonNominal";
//        echo 'Form input Diskon nominal';

        $this->load->view('VoucherForm_view', $this->datakirim);
    }

    public function insertDiskonNominal() {
        $this->load->model('Voucher_m');

        $nama = $_POST['nama'];
        $fitur = $_POST['fitur'];
        $nilai = $_POST['nilai'];
        $kuota = $_POST['kuota'];
        $keterangan = $_POST['keterangan'];
        $tipe = 2;

        foreach ($fitur as $value) {
//            echo "insert $nama | $nilai | $kuota | $keterangan | Diskon dengan fitur = $value<br>";
            $this->Voucher_m->insertVoucher($nama, $tipe, $value, $nilai, $kuota, $keterangan);
        }

        $this->message = "<p style=\"color:green\" class=\"text-center\">Voucher Diskon Nominal berhasil ditambahkan</p> <br>";
        $this->index();
//        var_dump($mride);
    }

    public function tambahVoucherDapatSaldo() {
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tipe_voucher'] = 3;
        $this->datakirim['tittle'] = "Voucher Dapat Saldo";
        $this->datakirim['insert'] = "DapatSaldo";

        $this->load->view('VoucherForm_view', $this->datakirim);

//        echo 'Form input dapat saldo';
    }

    public function insertDapatSaldo() {
        $this->load->model('Voucher_m');

        $nama = $_POST['nama'];
        $fitur = $_POST['fitur'];
        $nilai = $_POST['nilai'];
        $kuota = $_POST['kuota'];
        $keterangan = $_POST['keterangan'];
        $tipe = 3;

        foreach ($fitur as $value) {
//            echo "insert $nama | $nilai | $kuota | $keterangan | Diskon dengan fitur = $value<br>";
            $this->Voucher_m->insertVoucher($nama, $tipe, $value, $nilai, $kuota, $keterangan);
        }

        $this->message = "<p style=\"color:green\" class=\"text-center\">Voucher Diskon Nominal berhasil ditambahkan</p> <br>";
        $this->index();
//        var_dump($mride);
    }

}
