<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Validatedriver extends CI_Controller {

    public $datakirim;
    public $message = "";

    public function __construct() {
        parent::__construct();

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user' => 'YOUR_EMAIL',
            'smtp_pass' => 'YOUR_PASSWORD_EMAIL',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        $this->load->library('email', $config);
    }

    public function index() {
//        echo 'validate driver';
//        $this->load->model('DataPendaftarDriver_m');
//        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getAllDataPendaftarDriver();
//        $this->datakirim['message'] = $this->message;
//
//        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function driverMotor() {
//        echo 'validate driver';

        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getPendaftarDriverMotor();
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tittle'] = 'Driver Motor';

        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function mcar() {
//        echo 'validate driver';

        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getPendaftarMcar();
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tittle'] = 'Car';

        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function mbox() {
//        echo 'validate driver';

        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getPendaftarMbox();
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tittle'] = 'Box';

        $this->load->view('validatedriver_view', $this->datakirim);
    }

    public function mmassage() {
//        masih blm beres harusnya bikin model baru untuk pendaftaran pemijat

        $this->load->model('DataPendaftarMmassage_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMmassage_m->getAllDataPendaftarMmassage();
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tittle'] = 'Massage';

        $this->load->view('validatemmassage_view', $this->datakirim);
    }

    public function mservice() {
//        masih blm beres harusnya bikin model baru untuk pendaftaran mekanik service
        $this->load->model('DataPendaftarMservice_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMservice_m->getAllDataPendaftarMservice();
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tittle'] = 'Service';

        $this->load->view('validatemservice_view', $this->datakirim);
    }

    public function mfood() {
//        masih blm beres harusnya bikin model baru untuk pendaftaran mekanik service
        $this->load->model('Mitra_m');
        $this->datakirim['pendaftarmitra'] = $this->Mitra_m->getPendaftarMitraMfood();
        $this->datakirim['message'] = $this->message;
        $this->datakirim['tittle'] = 'Food';

        $this->load->view('validatemfood_view', $this->datakirim);
    }

//    END OF LIST PENDAFTAR =============================================================================================================

    public function detilPelamarDriver($idPelamar, $tittle) {
        $this->load->model('DataPendaftarDriver_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarDriver_m->getDetilPendaftarDriver($idPelamar);
        $this->datakirim['tittle'] = $tittle;
        $this->load->view('validatedriver2_view', $this->datakirim);
    }

    public function detilPelamarMmassage($idPelamar) {
        $this->load->model('DataPendaftarMmassage_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMmassage_m->getDetilPendaftarMmassage($idPelamar);
        $this->load->view('validatemmassage2_view', $this->datakirim);
    }

    public function detilPelamarMservice($idPelamar) {
        $this->load->model('DataPendaftarMservice_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMservice_m->getDetilPendaftarMservice($idPelamar);
        $this->load->view('validatemservice2_view', $this->datakirim);
    }

//    validation  ==========================================================================================================

    public function validationDriver($idPelamar, $tittle) {
        $this->load->model('DataPendaftarDriver_m');
        $detil = $this->DataPendaftarDriver_m->getDetilPendaftarDriver($idPelamar);

//        UPDATE DATABASE VALID ================================
        $this->DataPendaftarDriver_m->validateDriver($idPelamar);


//        KIRIM EMAIL PASSWORD ====================================
        $generatePass = $this->generateRandomString(8);
        $emailtujuan = $detil[0]['email'];
        $nama = $detil[0]['nama_depan'] . " " . $detil[0]['nama_belakang'];
        $nokendaraan = $detil[0]['nomor_kendaraan'];
        $this->emailvalidation($emailtujuan, $nama, $nokendaraan, $generatePass);


//        INSERT DATA KE TABEL DRIVER + PINDAHIN FOTO DI TABEL FOTO DRIVER ============================
        $namadepan = $detil[0]['nama_depan'];
        $namabelakang = $detil[0]['nama_belakang'];
        $noktp = $detil[0]['no_ktp'];
        $tgllahir = $detil[0]['tgl_lahir'];
        $tempatlahir = $detil[0]['tempat_lahir'];
        $notlp = $detil[0]['no_telepon'];
        $email = $detil[0]['email'];
        $password = sha1($generatePass);
        $foto = $detil[0]['foto_diri'];
        $job = $detil[0]['job'];
        $idkendaraan = $detil[0]['kendaraan'];
        $this->DataPendaftarDriver_m->insertDriver($namadepan, $namabelakang, $noktp, $tgllahir, $tempatlahir, $notlp, $email, $password, $foto, $job, $idkendaraan);

//        Redirect page ===========
        switch ($tittle) {
            case 'Driver%20Motor':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
                $this->driverMotor();
                break;
            case 'Car':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
                $this->mcar();
                break;
            case 'Box':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
                $this->mbox();
                break;
            case 'Massage':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
                $this->mmassage();
                break;
            case 'Service':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
                $this->mservice();
                break;

            default:
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
                $this->index();
                break;
        }
    }

    public function validationMmassage($idPelamar) {
        $this->load->model('DataPendaftarMmassage_m');
        $detil = $this->DataPendaftarMmassage_m->getDetilPendaftarMmassage($idPelamar);

        //        UPDATE DATABASE VALID ================================
        $this->DataPendaftarMmassage_m->validateMmassage($idPelamar);

        //        KIRIM EMAIL PASSWORD ====================================
        $generatePass = $this->generateRandomString(8);
        $emailtujuan = $detil[0]['email'];
        $nama = $detil[0]['nama_lengkap'];
        $this->emailvalidation($emailtujuan, $nama, "-", $generatePass);

        //        INSERT DATA KE TABEL DRIVER + PINDAHIN FOTO DI TABEL FOTO DRIVER ============================
        $namadepan = $detil[0]['nama_lengkap'];
        $noktp = $detil[0]['nomor_ktp'];
        $tgllahir = $detil[0]['tanggal_lahir'];
        $tempatlahir = $detil[0]['tempat_lahir'];
        $notlp = $detil[0]['nomor_telepon'];
        $email = $detil[0]['email'];
        $password = sha1($generatePass);
        $foto = $detil[0]['foto_diri'];
        $job = $detil[0]['job'];
        $gender = $detil[0]['jenis_kelamin'];
        $keahlian = $detil[0]['keahlian_pijat'];
        $this->DataPendaftarMmassage_m->insertMmassage($namadepan, $noktp, $tgllahir, $tempatlahir, $notlp, $email, $password, $foto, $job, $gender, $keahlian);


        $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
        $this->mmassage();
    }

    public function validationMservice($idPelamar) {
        $this->load->model('DataPendaftarMservice_m');
        $detil = $this->DataPendaftarMservice_m->getDetilPendaftarMservice($idPelamar);

        //        UPDATE DATABASE VALID ================================
        $this->DataPendaftarMservice_m->validateMservice($idPelamar);

        //        KIRIM EMAIL PASSWORD ====================================
        $generatePass = $this->generateRandomString(8);
        $emailtujuan = $detil[0]['email'];
        $nama = $detil[0]['nama_lengkap'];
        $this->emailvalidation($emailtujuan, $nama, "-", $generatePass);

        //        INSERT DATA KE TABEL DRIVER + PINDAHIN FOTO DI TABEL FOTO DRIVER ============================
        $namadepan = $detil[0]['nama_lengkap'];
        $noktp = $detil[0]['nomor_ktp'];
        $tgllahir = $detil[0]['tanggal_lahir'];
        $tempatlahir = $detil[0]['tempat_lahir'];
        $notlp = $detil[0]['nomor_telepon'];
        $email = $detil[0]['email'];
        $password = sha1($generatePass);
        $foto = $detil[0]['foto_diri'];
        $job = $detil[0]['job'];
//        $gender = $detil[0]['jenis_kelamin'];
        $keahlian = $detil[0]['keahlian'];
        $this->DataPendaftarMservice_m->insertMservice($namadepan, $noktp, $tgllahir, $tempatlahir, $notlp, $email, $password, $foto, $job, '1', $keahlian);


        $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di validation</p> <br>";
        $this->mservice();
    }

    public function validationMfood($idMitra, $idResto) {
//        echo $idMitra;
        $this->load->model('Mitra_m');
        $this->Mitra_m->validationMfood($idMitra, $idResto);
        $email = $this->Mitra_m->getEmailMfood($idMitra);

        $this->emailTerimaMfood($email[0]['email_penanggung_jawab']);
        
        $this->message = "<p style=\"color:green\" class=\"text-center\">Data pendaftaran mitra berhasil di validation</p> <br>";
        $this->mfood();
    }

//                        T O L A K ================================================================================
    public function tolakDriver($idPelamar, $tittle) {
        $this->load->model('DataPendaftarDriver_m');
        $this->DataPendaftarDriver_m->tolakDriver($idPelamar);

        switch ($tittle) {
            case 'Driver%20Motor':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
                $this->driverMotor();
                break;
            case 'Car':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
                $this->mcar();
                break;
            case 'Box':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
                $this->mbox();
                break;
            case 'Massage':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
                $this->mmassage();
                break;
            case 'Service':
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
                $this->mservice();
                break;

            default:
                $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
                $this->index();
                break;
        }



//        $this->load->view('validatedriver2_view', $this->datakirim);
    }

    public function tolakMmassage($idPelamar) {
//        echo $idPelamar;
        $this->load->model('DataPendaftarMmassage_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMmassage_m->tolakMmassage($idPelamar);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
        $this->mmassage();
    }

    public function tolakMservice($idPelamar) {
//        echo $idPelamar;
        $this->load->model('DataPendaftarMservice_m');
        $this->datakirim['pendaftar'] = $this->DataPendaftarMservice_m->tolakMservice($idPelamar);

        $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pelamar Berhasil di tolak</p> <br>";
        $this->mservice();
    }

    public function tolakMfood() {
//        echo $idPelamar;
        $email = $this->input->post('email');
        $idmitra = $this->input->post('idmitra');
        $idresto = $this->input->post('idresto');
        $alasan = $this->input->post('alasan');
//        echo "$alasan | $idmitra | $idresto";
        //hapus data mitra & restoran
        $this->load->model('Mitra_m');
        $this->datakirim['pendaftar'] = $this->Mitra_m->tolakPendaftaranMfood($idmitra, $idresto);

        //email konfirmasi validation
        $this->emailTolakMfood($email, $alasan);


        $this->message = "<p style=\"color:green\" class=\"text-center\">Data Pendaftar Food Berhasil di tolak</p> <br>";
        $this->mfood();
    }

//                          F U N G S I    T A M B A H A N ==============================
    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function emailvalidation($emailtujuan, $nama, $nokendaraan, $pass) {
        $this->email->set_newline("\r\n");

//        $this->email->initialize($config);
        $this->email->from('YOUR_EMAIL', 'Admin Gorideme.fun');
        $this->email->to($emailtujuan);
        $this->email->subject('[Gorideme.fun] validation Berkas Pendaftaran ');
        $this->email->message("
            <html>
            <head>
            <title>Berkas Pendaftaran anda telah di validation oleh Admin</title>
            </head>
            <body>
            <p>Terimakasih telah mendaftarkan diri anda sebagai mitra dari Gorideme.fun. data pendaftaran anda telah di validation oleh pihak admin Gorideme, silakan hubungi kami untuk melakukan konfirmasi.</p>

            <table>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>$nama</td>
            </tr>
            <tr>
                <th>No Kendaraan</th>
                <th>:</th>
                <td>$nokendaraan</td>
            </tr>            
            <tr>
                <th>Password</th>
                <th>:</th>
                <td>$pass</td>
            </tr>
            </table><br>           
            <p>Anda dapat melakukan Login dengan password tersebut, dan harap untuk segera melakukan pengubahan password dengan Login kedalam aplikasi kami. Harap untuk tidak membalas email ini.</p><br><br><br><br>

            <p>Hormat Kami</p><br><br>
            <p>Admin Gorideme </p>

            </body>
            </html>
");
        $this->email->send();
    }

    public function emailTolakMfood($email, $alasan) {
        $this->email->set_newline("\r\n");

//        $this->email->initialize($config);
        $this->email->from('YOUR_EMAIL', 'Admin Gorideme.fun');
        $this->email->to($email);
        $this->email->subject('[gorideme.fun] validation Berkas Pendaftaran ');
        $this->email->message("
            <html>
            <head>
            <title>Pendaftaran Food anda ditolak oleh admin</title>
            </head>
            <body>
            <p>Mohon Maaf pendaftaran Mitra Food anda tidak dapat diterima , dengan alasan : $alasan</p>
            <br><br><br>

            <p>Hormat Kami</p><br><br>
            <p>Admin Gorideme </p>

            </body>
            </html>
");
        $this->email->send();
    }

    public function emailTerimaMfood($email) {
        $this->email->set_newline("\r\n");

//        $this->email->initialize($config);
        $this->email->from('YOUR_EMAIL', 'Admin Gorideme.fun');
        $this->email->to($email);
        $this->email->subject('[gorideme.fun] validation Berkas Pendaftaran ');
        $this->email->message("
            <html>
            <head>
            <title>Pendaftaran Food anda telah divalidation oleh admin</title>
            </head>
            <body>
            <p>Terimakasih telah melakukan pendaftaran. Pendaftaran anda telah divalidation oleh admin. Silakan kunjungi <a href='https://gorideme.fun/vendor/'>https://gorideme.fun/vendor/</a> dan melakukan login menggunakan Email dan Password yang telah anda daftarkan</p>
            <br><br><br>

            <p>Hormat Kami</p><br><br>
            <p>Admin Gorideme </p>

            </body>
            </html>
");
        $this->email->send();
    }

}