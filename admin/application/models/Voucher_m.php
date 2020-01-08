<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher_m extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function getAllVoucher() {
        $query = $this->db->query("
                SELECT a.id, a.voucher, a.tanggal_expired , a.nilai , a.keterangan , a.count_to_use , a.is_valid , b.tipe_voucher , c.fitur
                FROM `voucher` a , tipe_voucher b , fitur_goeks c
                WHERE a.tipe_voucher = b.id
                AND a.untuk_fitur = c.id
            ");
        return $query->result();
    }

    function hapusVoucher($idVoucher) {
        $query = $this->db->query("
                DELETE FROM `voucher` WHERE `voucher`.`id` = '$idVoucher'
            ");
    }

    function insertVoucher($nama, $tipe, $fitur, $nilai, $kuota, $keterangan) {
        $query = $this->db->query("
                INSERT INTO `voucher` (`id`, `voucher`, `tipe_voucher`, `untuk_fitur`, `tanggal_expired`, `nilai`, `keterangan`, `count_to_use`, `is_valid`) 
                VALUES (NULL, '$nama', '$tipe', '$fitur', CURDATE() , '$nilai', '$keterangan', '$kuota', 'yes')
            ");
    }

    function editVoucher($data){
        // $this->db->update
        $this->db->query("update voucher set tipe_voucher =". $data['tipe'].", untuk_fitur =". $data['fitur']." ,nilai = ".$data['nilai']." where id=".$data['id']);
    }

    function getFitur() {
        $query = $this->db->select('id, fitur')->from('fitur_goeks')->get();
        return $query->result();
    }

    function getTipe() {
        $query = $this->db->select('id, tipe_voucher')->from('tipe_voucher')->get();
        return $query->result();
    }

}

?>
