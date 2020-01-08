<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Layananpijat extends CI_Controller {

    public $datakirim;
    public $message = "";

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            //
when the session user is empty back to 'Login'
            redirect(base_url());
        } else {
            $this->load->model('Layananpijat_m');

            $this->datakirim['layananpijat'] = $this->Layananpijat_m->getAllLayananPijat();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Layananpijat_view', $this->datakirim);
        }
    }

    public function insertLayanan() {
        $layanan = $this->input->post('layanan');
		$harga = $this->input->post('harga');
        $namafoto = time() . "_" . $_FILES["userfile"]['name'];

        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_pijat/";

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
        $this->load->model('Layananpijat_m');
        $this->Layananpijat_m->insertLayanan($layanan, $harga, $namafoto);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Layanan Berhasil di tambah</p> <br>";
        $this->index();
    }

    public function editLayananForm($idLayanan) {
        $this->load->model('Layananpijat_m');
        $this->datakirim['layanan'] = $this->Layananpijat_m->getLayanan($idLayanan);
		$this->datakirim['harga'] = $this->Layananpijat_m->getLayanan($idLayanan);

        $this->load->view('Layananpijat2_view', $this->datakirim);
    }
	
	public function hapusLayanan($id, $foto) {

//        echo $id."|".$foto;
//        hapus entry database 
        $this->load->model('Layananpijat_m');

//        hapus file 
        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_pijat/$foto";
        if (unlink("$pathfiledelete")) {
            $this->Layananpijat_m->hapusLayanan($id);
            $this->message = "<p style=\"color:green\" class=\"text-center\">Data berhasil di hapus</p> <br>";
            $this->index();
        } else {
            $this->message = "<p style=\"color:red\" class=\"text-center\">Data Promosi gagal hapus, mohon contact Admin</p> <br>";
            $this->index();
        }
    }

    public function updateLayananPijat() {
        $id = $this->input->post('id');
        $layanan = $this->input->post('layanan');
		$harga = $this->input->post('harga');
        $namafotolama = $this->input->post('fotolama');
        $namafotobaru = time() . "_" . $_FILES["userfile"]['name'];

        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_pijat/$namafotolama";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/foto_pijat/";

        // UPLOAD FILE ke server
        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            unlink("$pathfiledelete");
            
            //upload foto
            $config['file_name'] = $namafotobaru;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();

            // Update database
            $this->load->model('Layananpijat_m');
            $this->Layananpijat_m->updateLayananPijat1($id, $layanan, $harga, $namafotobaru);

            $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil diedit</p> <br>";
            $this->index();
        } else {
            // Update database
            $this->load->model('Layananpijat_m');
            $this->Layananpijat_m->updateLayananPijat2($id, $layanan, $harga);

            $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil diedit</p> <br>";
            $this->index();
        } 
    }

}