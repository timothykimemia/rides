<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Topup_m extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

//          GENERAL =============================================
    function getAdditionAmount($nomor) {
        $query = $this->db->query(" 
            SELECT jumlah FROM `topup` WHERE `nomor`= '$nomor'
            ");
        return $query->result_array();
    }

    function updateSaldo($iduser, $saldobaru) {
        $query = $this->db->query(" 
            UPDATE `saldo` SET `saldo` = '$saldobaru' , `update_at` = CURRENT_TIME( ) WHERE `id_user` = '$iduser';
            ");
    }

    function updateStatusTopup($nomor, $status) {
        if ($status == 2) {
            $this->db->query(" 
        UPDATE `topup` SET `status` = '2' WHERE `topup`.`nomor` = $nomor;
            ");
        } else if ($status == 3) {
            $this->db->query(" 
        UPDATE `topup` SET `status` = '3' WHERE `topup`.`nomor` = $nomor;
            ");
        }
    }

//          DRIVER ================================================
    function getDriverTopup() {
//        SELECT author FROM lyrics WHERE author LIKE 'B%';
        $query = $this->db->query(" SELECT * 
            FROM `topup` a, status_topup b, driver c
            WHERE a.`status` = '1'
            AND a.status = b.id
            AND a.id_user = c.id
            AND (a.id_user LIKE 'D%' OR a.id_user LIKE 'T%' OR a.id_user LIKE 'M%')
            ");
        return $query->result();
    }

    function pengecekanTopUpDriver($nomor) {
        $query = $this->db->query(" SELECT * 
            FROM topup 
            WHERE nomor = '$nomor'
            ");
        return $query->result_array();
    }

    function getDriverTopUpSpec($nomor) {
        $query = $this->db->query(" SELECT * 
            FROM topup a, status_topup b, driver c
            WHERE a.status = '1'
            AND a.status = b.id
            AND a.id_user = c.id
            AND a.nomor = '$nomor'
            ");
        return $query->result_array();
    }

    function getBalanceAmountDriver($iddriver) {
        $query = $this->db->query(" 
            SELECT saldo FROM `saldo` WHERE `id_user`= '$iddriver'
            ");
        return $query->result_array();
    }

    function addTransaksiDriver($idDriver, $saldoPenambahan, $saldojumlah) {
        $query = $this->db->query(" 
        INSERT INTO `transaksi_driver` (`nomor`, `id_driver`, `debit`, `kredit`, `waktu`, `id_transaksi`, `tipe_transaksi`, `saldo`, `keterangan`) 
        VALUES (NULL, '$idDriver', '0', '$saldoPenambahan', CURRENT_TIMESTAMP, '0', '4', '$saldojumlah', NULL);             
");
    }

//    PELANGGAN ======================================================
    function getPelangganTopUp() {
        $query = $this->db->query(" SELECT * 
            FROM topup a, status_topup b, pelanggan c
            WHERE a.status = '1'
            AND a.status = b.id
            AND a.id_user = c.id
            AND a.id_user LIKE 'P%'
            ");
        return $query->result();
    }

    function pengecekanTopUpPelanggan($nomor) {
        $query = $this->db->query(" SELECT * 
            FROM topup 
            WHERE nomor = '$nomor'
            ");
        return $query->result_array();
    }

    function getPelangganTopUpSpec($nomor) {
        $query = $this->db->query(" SELECT * 
            FROM topup a, status_topup b, pelanggan c
            WHERE a.status = '1'
            AND a.status = b.id
            AND a.id_user = c.id
            AND a.nomor = '$nomor'
            ");
        return $query->result_array();
    }

    function getBalanceAmountPelanggan($idpelanggan) {
        $query = $this->db->query(" 
            SELECT saldo FROM `saldo` WHERE `id_user`= '$idpelanggan'
            ");
        return $query->result_array();
    }

    function addTransaksiPelanggan($idpelanggan, $saldoPenambahan, $saldojumlah) {
        $query = $this->db->query(" 
    INSERT INTO `transaksi_pelanggan` (`nomor`, `id_pelanggan`, `debit`, `kredit`, `waktu`, `tipe_transaksi`, `pakai_mpay`, `saldo`, `keterangan`) 
    VALUES (NULL, '$idpelanggan', '0', '$saldoPenambahan', CURRENT_TIMESTAMP, '4', '0', '$saldojumlah', NULL);          
    ");
    }

}

?>
