<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriresto extends CI_Controller {

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
            $this->load->model('Kategoriresto_m');

            $this->datakirim['kategoriresto'] = $this->Kategoriresto_m->getAllKategori();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Kategoriresto_view', $this->datakirim);
        }
    }

    public function insertKategori() {
        $kategori = $this->input->post('kategori');
        $namafoto = time() . "_" . $_FILES["userfile"]['name'];

//        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotokategoriresto/$namafoto";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotokategoriresto/";

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
        $this->load->model('Kategoriresto_m');
        $this->Kategoriresto_m->insertKategori($kategori, $namafoto);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil di tambah</p> <br>";
        $this->index();
    }

    public function editKategoriForm($idKategori) {
        $this->load->model('Kategoriresto_m');
        $this->datakirim['kategori'] = $this->Kategoriresto_m->getKategori($idKategori);

        $this->load->view('Kategoriresto2_view', $this->datakirim);
    }
	
	public function hapusKategori($id, $foto) {

//        echo $id."|".$foto;
//        hapus entry database 
        $this->load->model('Kategoriresto_m');

//        hapus file 
        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotokategoriresto/$foto";
        if (unlink("$pathfiledelete")) {
            $this->Kategoriresto_m->hapusKategori($id);
            $this->message = "<p style=\"color:green\" class=\"text-center\">Data Banner Food berhasil di hapus</p> <br>";
            $this->index();
        } else {
            $this->message = "<p style=\"color:red\" class=\"text-center\">Data Promosi gagal hapus, mohon contact Admin</p> <br>";
            $this->index();
        }
    }

    public function editKategori() {
        $idketegori = $this->input->post('idkategori');
        $kategori = $this->input->post('kategori');
        $namafotolama = $this->input->post('fotolama');
        $namafotobaru = time() . "_" . $_FILES["userfile"]['name'];

        $pathfiledelete = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotokategoriresto/$namafotolama";
        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/admin/fotokategoriresto/";

//        echo "$kategori | $namafotobaru | $namafotolama";
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
            $this->load->model('Kategoriresto_m');
            $this->Kategoriresto_m->editKategori1($idketegori,$kategori, $namafotobaru);

            $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil diedit</p> <br>";
            $this->index();
        } else {
            // Update database
            $this->load->model('Kategoriresto_m');
            $this->Kategoriresto_m->editKategori2($idketegori,$kategori);

            $this->message = "<p style=\"color:green\" class=\"text-center\">Kategori Berhasil diedit</p> <br>";
            $this->index();
        }
    }

}