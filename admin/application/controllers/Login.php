<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $messageerror = array("message" => "");

    //Session 
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('email') == NULL) {
            echo "login";
            $this->load->view('login_view', $this->messageerror);
        } else {
            echo "dashboard page";
            $this->load->helper('url');
            //bila belum logout
            header('Location: ' . base_url() . "index.php/dashboard");
        }
    }

    public function pengecekan() {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

//        die("$email | $pass");
        $this->load->database();
        $data = $this->db->query("select * from admin where email = '$email'");

        if ($d = $data->result_array()) {
            $emailDB = $d[0]['email'];
            $passDB = $d[0]['password'];
            if ($passDB != $pass) {
                $this->messageerror = array(
                    "message" => "Password Salah"
                );
                $this->load->view('login_view', $this->messageerror);
            } else {
                $this->session->set_userdata('id', $d[0]['id']);
                $this->session->set_userdata('nik', $d[0]['nik']);
                $this->session->set_userdata('email', $d[0]['email']);

                $this->load->view('dashboard_view');
                /*$this->load->helper('url');*/
                /*header('Location: ' . base_url() . "index.php/dashboard");*/
            }
        } else {
//            echo 'tidak ada data';
            $this->messageerror = array(
                "message" => "User Admin not listed"
            );
            $this->load->view('login_view', $this->messageerror);
        }
    }

}

