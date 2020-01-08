<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Controller {

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
            $this->load->model('Promotion_m');

            $this->datakirim['promosi'] = $this->Promotion_m->getAllPromotion();
            $this->datakirim['message'] = $this->message;

            $this->load->view('Promosi_view', $this->datakirim);
        }
    }

    public function tambahPromosi() {
        $this->load->model('Promotion_m');

        $fiturpromosi = $_POST['fiturpromosi'];
//        $jml = $this->Promotion_m->jumlahPromotion();
        $no = time() . "-" . date("Y-m-d");

        $path = $_FILES["userfile"]['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $new_name = "$no." . $ext;

//        echo $fiturpromosi." | ".$new_name;
//        config upload foto
        $config['file_name'] = $new_name;
        $config['upload_path'] = './fotopromosi/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);
//        $this->upload->do_upload();
//        echo "$nama | $kategori | $harga | $deskripsi | $new_name";
        if ($this->upload->do_upload()) {
//            insert database

            $this->Promotion_m->tambahPromotion($fiturpromosi, $new_name);
//            echo "$nama | $kategori | $harga | $deskripsi | $new_name";
            $this->message = "<p style=\"color:green\" class=\"text-center\">Banner Promosi berhasil di tambahkan</p> <br>";
            $this->index();
        } else {
            $this->message = "<p style=\"color:red\" class=\"text-center\">Foto yang anda upload tidak sesuai persyaratan</p> <br>";
            $this->index();
        }
    }

    public function hapusPromosi($id, $foto) {

//        echo $id."|".$foto;
//        hapus entry database 
        $this->load->model('Promotion_m');

//        hapus file 
        $path = "./fotopromosi/$foto";
        if (unlink("$path")) {
            $this->Promotion_m->hapusPromotion($id);
            $this->message = "<p style=\"color:green\" class=\"text-center\">Data Promosi berhasil di hapus</p> <br>";
            $this->index();
        } else {
            $this->message = "<p style=\"color:red\" class=\"text-center\">Data Promosi gagal hapus, mohon contact Admin</p> <br>";
            $this->index();
        }
    }

}
