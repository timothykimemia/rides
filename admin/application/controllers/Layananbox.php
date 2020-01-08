<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Layananbox extends CI_Controller {

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
            $this->load->model('Layananbox_m');

            $this->datakirim['layananbox'] = $this->Layananbox_m->getAllLayananBox();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Layananbox_view', $this->datakirim);
        }
    }

    public function insertLayanan() {
        $jenis = $this->input->post('jenis_kendaraan');
		$harga = $this->input->post('harga');
		$hargaminimum = $this->input->post('hargaminimum_mbox');
		$dimensi = $this->input->post('dimensi_kendaraan');
		$maxweight = $this->input->post('maxweight_kendaraan');
        $namafoto = $_FILES["userfile"]['name'];

        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_kendaraan/";

        echo "$namafoto";

        // UPLOAD FILE ke server
        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            //            unlink("$pathfiledelete");
            //upload foto
            $config['file_name'] = $namafoto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
        }

        // Isert ke database
        $this->load->model('Layananbox_m');
        $this->Layananbox_m->insertLayanan($jenis, $harga, $hargaminimum, $dimensi, $maxweight, $namafoto);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Layanan Berhasil di tambah</p> <br>";
        $this->index();
    }

    public function editLayananForm($id) {
        $this->load->model('Layananbox_m');
        $this->datakirim['jenis_kendaraan'] = $this->Layananbox_m->getLayanan($id);
		$this->datakirim['harga'] = $this->Layananbox_m->getLayanan($id);
		$this->datakirim['hargaminimum_mbox'] = $this->Layananbox_m->getLayanan($id);
		$this->datakirim['dimensi_kendaraan'] = $this->Layananbox_m->getLayanan($id);
		$this->datakirim['maxweight_kendaraan'] = $this->Layananbox_m->getLayanan($id);

        $this->load->view('Layananbox2_view', $this->datakirim);
    }
	
	public function hapusLayanan($id, $foto) {

//        echo $id."|".$foto;
//        hapus entry database 
        $this->load->model('Layananbox_m');

//        hapus file 
        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_kendaraan/$foto";
        if (unlink("$pathfiledelete")) {
            $this->Layananbox_m->hapusLayanan($id);
            $this->message = "<p style=\"color:green\" class=\"text-center\">Data berhasil di hapus</p> <br>";
            $this->index();
        } else {
            $this->message = "<p style=\"color:red\" class=\"text-center\">Data gagal hapus, mohon contact Admin</p> <br>";
            $this->index();
        }
    }

    public function updateLayananbox() {
        $id = $this->input->post('id');
        $jenis = $this->input->post('jenis_kendaraan');
		$harga = $this->input->post('harga');
		$hargaminimum = $this->input->post('hargaminimum_mbox');
		$dimensi = $this->input->post('dimensi_kendaraan');
		$maxweight = $this->input->post('maxweight_kendaraan');
		$namafotolama = $this->input->post('fotolama');
        $namafoto = $_FILES["userfile"]['name'];

        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_kendaraan/$namafotolama";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_kendaraan/";

        // UPLOAD FILE ke server
        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
            
            //upload foto
            $config['file_name'] = $namafoto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();

            // Update database
            $this->load->model('Layananbox_m');
            $this->Layananbox_m->updateLayananBox1($id,$jenis, $harga, $hargaminimum, $dimensi, $maxweight, $namafoto);

            $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil diedit</p> <br>";
            $this->index();
        } else {
            // Update database
            $this->load->model('Layananbox_m');
            $this->Layananbox_m->updateLayananBox2($id,$jenis, $harga, $hargaminimum, $dimensi, $maxweight);

            $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil diedit</p> <br>";
            $this->index();
        } 
    }
	
	public function mbox($tittle) {
        $this->load->model('Fiturgoeks_m');
        $d = $this->Fiturgoeks_m->getMbox();

        $this->biaya = $d[0]['biaya'];
        $this->biayaminimum = $d[0]['biaya_minimum'];
        $this->keterangan_biaya = $d[0]['keterangan_biaya'];

//        set persentase
        $this->load->model('ProporsiBiaya_m');
        $proporsi = $this->ProporsiBiaya_m->getPersentaseDriver($d[0]['id']);
        $persentase = 100 - $proporsi[0]['persentase_driver'];

//            harga kendaraan angkut
        $this->load->model('Kendaraanangkut_m');
        $l = $this->Kendaraanangkut_m->getKendaraanAngkut();
//        var_dump($l);
        $this->datakirim['l1'] = $l[0]['harga'];
        $this->datakirim['l2'] = $l[1]['harga'];
        $this->datakirim['l3'] = $l[2]['harga'];
        $this->datakirim['l4'] = $l[3]['harga'];

//        biaya minimum per kendaraan 
        $this->datakirim['m1'] = $l[0]['hargaminimum_mbox'];
        $this->datakirim['m2'] = $l[1]['hargaminimum_mbox'];
        $this->datakirim['m3'] = $l[2]['hargaminimum_mbox'];
        $this->datakirim['m4'] = $l[3]['hargaminimum_mbox'];


        $this->datakirim['message'] = "$this->message";
//        $this->datakirim['biaya'] = "$this->biaya";
//        $this->datakirim['biayaminimum'] = "$this->biayaminimum";
        $this->datakirim['keterangan_biaya'] = "$this->keterangan_biaya";
        $this->datakirim['tittle'] = "$tittle";
        $this->datakirim['persentase'] = "$persentase";
        $this->datakirim['id'] = $d[0]['id'];
        $this->datakirim['f'] = "Mbox";

        $this->load->view('layananbox_view', $this->datakirim);
    }

    public function setMbox() {
//        $biaya = $_POST['biaya'];
//        $biayaminimum = $_POST['biayaminimum'];
        $id = $_POST['id'];
        $persentase = 100 - $_POST['persentase'];

        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $l3 = $_POST['l3'];
        $l4 = $_POST['l4'];

        $m1 = $_POST['m1'];
        $m2 = $_POST['m2'];
        $m3 = $_POST['m3'];
        $m4 = $_POST['m4'];

//        echo "$biaya";
//        update data 
//        $this->load->model('Fiturgoeks_m');
//        $d = $this->Fiturgoeks_m->updateMbox($biaya, $biayaminimum);

        $this->load->model('ProporsiBiaya_m');
        $this->ProporsiBiaya_m->updateProportsiDriver($id, $persentase);

        $this->load->model('Kendaraanangkut_m');
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l1, $m1, 3);
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l2, $m2, 4);
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l3, $m3, 5);
        $this->Kendaraanangkut_m->updateKendaraanAngkut($l4, $m4, 6);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Data berhasil di update</p> <br>";
        $tittle = 'm-box';
        $this->mbox($tittle);
    }

}