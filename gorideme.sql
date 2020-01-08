-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 03:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dejasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_type`
--

CREATE TABLE `ac_type` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `ac_type` varchar(50) NOT NULL,
  `fare` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_type`
--

INSERT INTO `ac_type` (`nomor`, `ac_type`, `fare`) VALUES
(1, 'Split 0.5 - 1 PK', 1),
(2, 'Split 1.5 - 2 PK', 1.2),
(3, 'Inverter 0.5 - 1 PK', 1.4),
(4, 'Inverter 1.5 - 2 PK', 1.6),
(5, 'Cassete', 1.8),
(6, 'Standing', 2),
(7, 'Central', 2.2);

-- --------------------------------------------------------

--
-- Table structure for table `additional_config`
--

CREATE TABLE `additional_config` (
  `id` int(11) NOT NULL,
  `fitur` int(11) NOT NULL,
  `additional` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_config`
--

INSERT INTO `additional_config` (`id`, `fitur`, `additional`, `value`) VALUES
(1, 7, 'additional_shipper', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip_addr` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nik`, `email`, `password`, `ip_addr`) VALUES
(1, '1125508761', 'admin@admin.com', 'admin', '101.128.80.148');

-- --------------------------------------------------------

--
-- Table structure for table `alamat_perusahaan`
--

CREATE TABLE `alamat_perusahaan` (
  `id` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `alamat_perusahaan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat_perusahaan`
--

INSERT INTO `alamat_perusahaan` (`id`, `id_cabang`, `alamat_perusahaan`) VALUES
(1, 1, 'Jl. Ahmad Yani No. 9, Garut');

-- --------------------------------------------------------

--
-- Table structure for table `app_versions`
--

CREATE TABLE `app_versions` (
  `id` int(11) NOT NULL,
  `application` int(11) NOT NULL,
  `version` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_versions`
--

INSERT INTO `app_versions` (`id`, `application`, `version`) VALUES
(1, 0, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `asuransi`
--

CREATE TABLE `asuransi` (
  `id` int(11) NOT NULL,
  `premi` int(11) NOT NULL,
  `estimasi_biaya` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asuransi`
--

INSERT INTO `asuransi` (`id`, `premi`, `estimasi_biaya`) VALUES
(2, 2000, 10000000),
(3, 10000, 25000000),
(4, 12500, 30000000),
(5, 15000, 50000000),
(6, 20000, 100000000),
(7, 30000, 200000000),
(8, 50000, 500000000),
(1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang_toko`
--

CREATE TABLE `barang_toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kategori_barang` int(11) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `satuan_barang` varchar(10) NOT NULL COMMENT 'gr/ml'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_toko`
--

INSERT INTO `barang_toko` (`id`, `nama_barang`, `harga`, `foto`, `kategori_barang`, `deskripsi`, `satuan_barang`) VALUES
(1, 'piring cantik', 10000, '14791263891478844920353.jpg', 1, '', '200gr'),
(2, 'gelas beling cantik', 15000, '1479179423Chrysanthemum.jpg', 1, '', '100gr'),
(3, 'garpu cantik', 11000, '1479398912Jellyfish.jpg', 1, '', '100gr');

-- --------------------------------------------------------

--
-- Table structure for table `belanja_mfood`
--

CREATE TABLE `belanja_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belanja_mfood`
--

INSERT INTO `belanja_mfood` (`id`, `id_makanan`, `id_transaksi`, `jumlah`, `catatan`, `total_harga`) VALUES
(608, 4, 317, 1, '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `belanja_mmart`
--

CREATE TABLE `belanja_mmart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belanja_mmart`
--

INSERT INTO `belanja_mmart` (`id`, `id_transaksi`, `nama_barang`, `jumlah`) VALUES
(895, 306, 'mie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `belanja_mstore`
--

CREATE TABLE `belanja_mstore` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkas_lamaran_kerja`
--

CREATE TABLE `berkas_lamaran_kerja` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `foto_stnk` varchar(50) NOT NULL,
  `foto_sim` varchar(50) NOT NULL,
  `foto_diri` varchar(50) NOT NULL,
  `berkas_lamaran` varchar(50) NOT NULL,
  `berkas_cv` varchar(50) NOT NULL,
  `kendaraan` int(11) NOT NULL,
  `job` int(11) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `is_valid` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_lamaran_kerja`
--

INSERT INTO `berkas_lamaran_kerja` (`nomor`, `nama_depan`, `nama_belakang`, `tempat_lahir`, `tgl_lahir`, `no_telepon`, `email`, `no_ktp`, `foto_ktp`, `foto_stnk`, `foto_sim`, `foto_diri`, `berkas_lamaran`, `berkas_cv`, `kendaraan`, `job`, `keterangan`, `is_valid`) VALUES
(1, 'driver', 'bike', 'new york', '2018-07-29', '081234567891', 'demo@bike.com', '67534457780799', 'ktp_1.png', 'stnk_1.png', 'sim_1.png', 'diri_1.png', '', '', 2, 1, NULL, 'valid'),
(2, 'demo', 'car', 'new york', '2018-07-29', '081234567892', 'demo@car.com', '56345668', 'ktp_2.png', 'stnk_2.png', 'sim_2.png', 'diri_2.png', '', '', 3, 2, NULL, 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `biaya_promo`
--

CREATE TABLE `biaya_promo` (
  `id` int(11) NOT NULL,
  `fitur` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biaya_minimum` int(11) NOT NULL,
  `keterangan_biaya` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biaya_promo`
--

INSERT INTO `biaya_promo` (`id`, `fitur`, `biaya`, `biaya_minimum`, `keterangan_biaya`) VALUES
(1, 3, 10, 10, 'per ORDER');

-- --------------------------------------------------------

--
-- Table structure for table `blog_content`
--

CREATE TABLE `blog_content` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabang_perusahaan`
--

CREATE TABLE `cabang_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cabang_perusahaan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang_perusahaan`
--

INSERT INTO `cabang_perusahaan` (`id`, `cabang_perusahaan`) VALUES
(1, 'Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `config_driver`
--

CREATE TABLE `config_driver` (
  `id_driver` varchar(10) NOT NULL,
  `latitude` varchar(30) NOT NULL DEFAULT '0',
  `longitude` varchar(30) NOT NULL DEFAULT '0',
  `uang_belanja` int(11) NOT NULL DEFAULT '1',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` char(1) NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config_driver`
--

INSERT INTO `config_driver` (`id_driver`, `latitude`, `longitude`, `uang_belanja`, `update_at`, `status`) VALUES
('D74', '0', '0', 1, '2018-08-29 08:22:16', '2'),
('D73', '-5.1361397', '119.483185', 1, '2018-09-01 19:52:42', '5'),
('D72', '-5.1359551', '119.4842276', 1, '2018-09-01 23:41:32', '1'),
('T1', '-5.1361397', '119.483185', 1, '2018-09-01 23:11:42', '5'),
('M36', '0', '0', 1, '2018-08-30 08:24:09', '5');

-- --------------------------------------------------------

--
-- Table structure for table `data_temp`
--

CREATE TABLE `data_temp` (
  `id_driver` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` varchar(10) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `rating` double NOT NULL DEFAULT '0',
  `job` int(11) NOT NULL,
  `gender` int(11) DEFAULT '2',
  `kendaraan` int(11) DEFAULT '1',
  `nama_bank` varchar(50) DEFAULT NULL,
  `rekening_bank` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reg_id` varchar(250) DEFAULT NULL,
  `status` char(1) DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `nama_depan`, `nama_belakang`, `no_ktp`, `tgl_lahir`, `tempat_lahir`, `no_telepon`, `email`, `password`, `foto`, `rating`, `job`, `gender`, `kendaraan`, `nama_bank`, `rekening_bank`, `atas_nama`, `created_at`, `update_at`, `reg_id`, `status`) VALUES
('D73', 'demo', 'car', '56345668', '2018-07-29', 'new york', '081234567892', 'demo@car.com', 'fdda0c46f953c1a45bdc520849be1e4edf4e228c', 'foto73.jpg', 5, 2, 2, 3, NULL, NULL, NULL, '2018-08-29 09:14:27', '2018-09-01 19:52:42', '0', '1'),
('D72', 'driver', 'bike', '67534457780799', '2018-07-29', 'new york', '081234567891', 'demo@bike.com', 'fdda0c46f953c1a45bdc520849be1e4edf4e228c', 'foto72.jpg', 5, 1, 2, 2, NULL, NULL, NULL, '2018-08-29 08:43:53', '2018-09-01 23:38:01', 'fkiRvNergpQ:APA91bGmw30oxwYV2G-CHqvEsIxJ04iAA-0pwbBpLO-tOeThkkNCX_ziCYkgIMeOo396sjV-y6LYJnqkjXOwFkncIaC9JC9lpJ3fULOhIaHhaKOYHoFkWvDAtYGqXj_Ie70sHzrrDt-0', '1'),
('T1', 'demo Service', '', '232132456', '2018-07-29', 'Makassar', '081234567893', 'demo@service.com', 'fdda0c46f953c1a45bdc520849be1e4edf4e228c', 'foto1.jpg', 0, 5, 1, 1, NULL, NULL, NULL, '2018-08-30 08:17:34', '2018-09-01 23:11:42', '0', '1'),
('M36', 'demo Massage', '', '92832838271', '2018-07-29', 'Makassar', '08123456794', 'demo@massage.com', 'fdda0c46f953c1a45bdc520849be1e4edf4e228c', 'foto36.jpg', 0, 3, 2, 1, NULL, NULL, NULL, '2018-08-30 08:24:09', '2018-08-30 08:25:35', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `driver_job`
--

CREATE TABLE `driver_job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_job` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_job`
--

INSERT INTO `driver_job` (`id`, `driver_job`) VALUES
(1, 'mride'),
(2, 'mcar'),
(3, 'mmassage'),
(4, 'mbox'),
(5, 'mservice');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_goeks`
--

CREATE TABLE `fitur_goeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fitur` varchar(20) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biaya_minimum` int(11) NOT NULL,
  `keterangan_biaya` varchar(50) NOT NULL,
  `driver_job` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur_goeks`
--

INSERT INTO `fitur_goeks` (`id`, `fitur`, `biaya`, `biaya_minimum`, `keterangan_biaya`, `driver_job`, `keterangan`) VALUES
(1, 'm-ride', 10, 15, 'per KM', 1, 'Ojek online menggunakan sepeda motor'),
(2, 'm-car', 15, 25, 'per KM', 2, 'Ojek online menggunakan mobil'),
(3, 'm-food', 11, 11, 'per ORDER', 1, 'Order makanan'),
(4, 'm-mart', 15, 15, 'per ORDER', 1, 'Order barang apapun'),
(5, 'm-send', 10, 15, 'per KM', 1, 'Kirim barang kilat'),
(6, 'm-massage', 45, 0, 'per JAM', 3, 'Order tukang pijat online'),
(7, 'm-box', 100, 100, 'per KM', 4, 'Kirim barang menggunakan mobil box'),
(8, 'm-service', 50, 50, 'per ORDER', 5, 'Order layanan service online');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_mservice`
--

CREATE TABLE `fitur_mservice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_service` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur_mservice`
--

INSERT INTO `fitur_mservice` (`id`, `nama_service`) VALUES
(1, 'service-ac');

-- --------------------------------------------------------

--
-- Table structure for table `fitur_promosi`
--

CREATE TABLE `fitur_promosi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fitur_promosi` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur_promosi`
--

INSERT INTO `fitur_promosi` (`id`, `fitur_promosi`) VALUES
(0, 'general'),
(1, 'm-ride'),
(2, 'm-car'),
(3, 'm-food'),
(4, 'm-mart'),
(5, 'm-send'),
(6, 'm-massage'),
(7, 'm-box'),
(8, 'm-service');

-- --------------------------------------------------------

--
-- Table structure for table `gender_pemijat`
--

CREATE TABLE `gender_pemijat` (
  `id` int(11) NOT NULL,
  `pemijat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender_pemijat`
--

INSERT INTO `gender_pemijat` (`id`, `pemijat`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'Umum'),
(4, 'SD'),
(5, 'SMP'),
(6, 'SMA'),
(7, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `help_general`
--

CREATE TABLE `help_general` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `isi_bantuan` varchar(1000) NOT NULL,
  `is_helped` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `help_pelanggan`
--

CREATE TABLE `help_pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_fitur` int(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi_bantuan` varchar(1000) NOT NULL,
  `is_helped` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_transaksi`
--

CREATE TABLE `history_transaksi` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `catatan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kendaraan`
--

CREATE TABLE `jenis_kendaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `hargaminimum_mbox` int(11) NOT NULL,
  `dimensi_kendaraan` varchar(50) DEFAULT NULL,
  `maxweight_kendaraan` varchar(50) DEFAULT NULL,
  `foto_kendaraan` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kendaraan`
--

INSERT INTO `jenis_kendaraan` (`id`, `jenis_kendaraan`, `harga`, `hargaminimum_mbox`, `dimensi_kendaraan`, `maxweight_kendaraan`, `foto_kendaraan`) VALUES
(1, 'motor', NULL, 0, NULL, NULL, NULL),
(2, 'mobil', NULL, 0, NULL, NULL, NULL),
(3, 'PICKUP BAK', 75, 127, '200x130x120', '1000 Kg', 'pickup_bak.png'),
(4, 'PICKUP BOX', 75, 197, '200x130x130', '1000 Kg', 'pickup_box.png'),
(5, 'TRUCK BAK', 95, 277, '300x160x130', '2000 Kg', 'engkel_bak.png'),
(6, 'TRUCK BOX', 95, 297, '300x160x160', '2000 Kg', 'engkel_box.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `id_toko` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id`, `kategori`, `id_toko`) VALUES
(1, 'barang pecah belah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_resto`
--

CREATE TABLE `kategori_resto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_resto`
--

INSERT INTO `kategori_resto` (`id`, `kategori`, `foto`) VALUES
(1, 'Seafood', 'sea-food.jpg'),
(2, 'Fastfood', 'fast-food.jpg'),
(3, 'Chinese', '1485531056_568bcffcbc5ca4ea331f026e34f968a4_-chinese-food-on-pinterest-chinese-food_1000-666.jpeg'),
(4, 'Sate', '1485687267_sa.jpg'),
(5, 'Martabak', '1485687125_re.jpg'),
(9, 'Soto,Bakso,Sop', '1485570319_bakso.jpg'),
(10, 'Bakmie', '1485686982_Bakmi-Jawa.jpg'),
(11, 'Oleh-Oleh', '1485570640_oleh.jpg'),
(12, '24 Hours', '1485577955_24.jpg'),
(13, 'Snack & Jajanan', '1485587194_snack.jpg'),
(14, 'Roti', '1485587277_roti.jpg'),
(15, 'Minuman', '1485587372_WL41c.jpg'),
(16, 'Coffee Shop', '1485587467_copy.jpg'),
(17, 'Japanese', '1485587569_japanes.jpg'),
(18, 'Thai', '1485587640_thai.jpg'),
(19, 'Korean', '1485686361_south-korean-food-guide.jpg'),
(20, 'Pizza & Pasta', '1485591671_11210-pizza-close1.jpg'),
(21, 'Malaysian & Singapor', '1486193865_MAKAN11.jpg'),
(22, 'Aneka Nasi', '1486195369_nasi.jpg'),
(23, 'Aneka Ayam & Bebek', '1486195512_Ayam_Bebek.jpg'),
(24, 'Burgers & Sandwiches', '1486196884_philly_burger.jpg'),
(25, 'Middle Eastern', '1486198692_middle.jpg'),
(26, 'Vietnamese', '1486197950_Vietnamese.jpg'),
(27, 'Indian Food', '1486198560_india.jpg'),
(28, 'Sweet & Desserts', '1486200304_dessert.jpg'),
(29, 'Our Partners', '1486200213_'),
(30, 'sdsdfsd', '1534315609_ic_loc_blue.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_toko`
--

CREATE TABLE `kategori_toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_toko`
--

INSERT INTO `kategori_toko` (`id`, `kategori`) VALUES
(1, 'Toko kelontong');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `jenis` char(1) NOT NULL,
  `nomor_kendaraan` varchar(10) NOT NULL,
  `warna` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `merek`, `tipe`, `jenis`, `nomor_kendaraan`, `warna`) VALUES
(3, 'HONDA', 'Accord', '1', 'DD2323DD', 'grey'),
(2, 'HONDA', 'R1', '1', 'DD112233AS', 'red'),
(1, 'HONDA', 'Accord', '1', 'DD12321DD', 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_pijat`
--

CREATE TABLE `layanan_pijat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL COMMENT 'per JAM',
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_pijat`
--

INSERT INTO `layanan_pijat` (`id`, `layanan`, `harga`, `foto`) VALUES
(1, 'full body massage', 14, 'full-body.jpg'),
(2, 'reflection', 12, 'refleksi.jpg'),
(3, 'full face', 12, 'totok-wajah.jpg'),
(4, 'full body + scrub', 17, 'full-body-scrub.jpg'),
(5, 'thai massage', 12, 'thai-massage.jpg'),
(6, 'baby massage', 0, 'baby-massage.jpg'),
(7, 'pra/post natal massage', 0, 'prenatal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_pelanggan`
--

CREATE TABLE `lokasi_pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori_menu_makanan` int(11) NOT NULL,
  `deskripsi_menu` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `nama_menu`, `harga`, `kategori_menu_makanan`, `deskripsi_menu`, `foto`) VALUES
(2, 'Fried Chicken ', 20, 2, 'sdasasds', ''),
(3, 'Best Sea Food', 50, 4, 'Good', ''),
(4, ' fried rice', 50, 3, 'good fried rice', ''),
(5, 'Butter shrimp', 43, 3, 'good Butter shrimp', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE `menu_makanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_makanan` varchar(50) NOT NULL,
  `id_restoran` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id`, `menu_makanan`, `id_restoran`) VALUES
(2, 'Fried Chicken', 372),
(3, 'Fried Chicken', 370),
(4, 'Sea Food', 370);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_mmart_mfood`
--

CREATE TABLE `mitra_mmart_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `jenis_identitas` varchar(10) NOT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `alamat_pemilik` varchar(100) NOT NULL COMMENT 'Lampung / Palembang / Jambi',
  `kota` varchar(20) NOT NULL,
  `nama_penanggung_jawab` varchar(50) NOT NULL,
  `email_penanggung_jawab` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon_penanggung_jawab` varchar(15) NOT NULL,
  `jenis_lapak` int(11) NOT NULL,
  `lapak` int(11) NOT NULL,
  `is_partner` int(2) NOT NULL COMMENT '0 = non partner |  1 = partner',
  `is_valid` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra_mmart_mfood`
--

INSERT INTO `mitra_mmart_mfood` (`id`, `nama_pemilik`, `jenis_identitas`, `nomor_identitas`, `alamat_pemilik`, `kota`, `nama_penanggung_jawab`, `email_penanggung_jawab`, `password`, `telepon_penanggung_jawab`, `jenis_lapak`, `lapak`, `is_partner`, `is_valid`) VALUES
(5, 'Owner', 'ID CARD', '1233242', 'goeks', 'Makassar', 'Owner', 'food2@food.com', 'd41d8cd98f00b204e9800998ecf8427e', '081234567896', 1, 373, 0, 1),
(2, 'asasas', 'KTP', 'qwqwqwqw', 'ffddfg', 'Makassar', 'fdgdfgdf', 'food@food.com', '62506be34d574da4a0d158a67253ea99', '082349477740', 1, 370, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mservice_jenis`
--

CREATE TABLE `mservice_jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_service` varchar(50) NOT NULL,
  `fitur_mservice` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mservice_jenis`
--

INSERT INTO `mservice_jenis` (`id`, `jenis_service`, `fitur_mservice`, `harga`, `deskripsi`) VALUES
(1, ' Washing Air Conditioner', 1, 50, 'Layanan cuci AC.'),
(2, 'Service Air Conditioner', 1, 50, 'Layanan perbaikan AC'),
(3, 'Washing & Service AC', 1, 60, 'Cuci dan servis AC'),
(4, 'Installation AC', 1, 40, 'Pasang AC Baru'),
(5, ' Unloading AC', 1, 40, 'Bongkar AC lama anda'),
(6, 'Relocation AC', 1, 45, 'Pindah AC anda');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_request`
--

CREATE TABLE `password_reset_request` (
  `sno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `encrypted_temp_password` varchar(256) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` varchar(10) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `forgot_pass_identity` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_lahir` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `rating` double NOT NULL DEFAULT '0',
  `reg_id` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `token` varchar(250) NOT NULL,
  `tokenExpire` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_depan`, `nama_belakang`, `email`, `no_telepon`, `forgot_pass_identity`, `password`, `alamat`, `created_on`, `tgl_lahir`, `tempat_lahir`, `rating`, `reg_id`, `status`, `token`, `tokenExpire`) VALUES
('P1', 'demo', 'customer', 'demo@customer.com', '081234567890', '', 'b39f008e318efd2bb988d724a161b61c6909677f', 'street house', '2018-08-29 08:13:28', '-', '-', 5, 'cpEYz9dlgqM:APA91bEUMpJSkjgi-iqDLdv4nMA2MaHfFCd-s1U-kt_GSQK4Pcd_P4cLjL5DcOtZOUUHtreD3NaN14LgZjXHQiYL_4h_9oiKCRcUXfNFMDUZsQm3-fIB2-1_9lnC_4UFmLGEHv5rhhoT', 1, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pemijat_in_keahlian`
--

CREATE TABLE `pemijat_in_keahlian` (
  `id_layanan_pijat` int(11) NOT NULL,
  `id_pemijat` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemijat_in_keahlian`
--

INSERT INTO `pemijat_in_keahlian` (`id_layanan_pijat`, `id_pemijat`) VALUES
(1, 'M36'),
(2, 'M36'),
(3, 'M36'),
(4, 'M36'),
(5, 'M36'),
(6, 'M36'),
(7, 'M36');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_acservice`
--

CREATE TABLE `pendaftaran_acservice` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_ktp` varchar(50) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_tinggal` varchar(100) NOT NULL,
  `kecamatan_tinggal` varchar(50) NOT NULL,
  `kota_tinggal` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `peralatan` varchar(500) NOT NULL,
  `keahlian` varchar(500) NOT NULL,
  `area_kerja` int(11) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `job` int(11) NOT NULL,
  `is_valid` int(11) NOT NULL DEFAULT '0' COMMENT '1/0',
  `foto_diri` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_acservice`
--

INSERT INTO `pendaftaran_acservice` (`nomor`, `nama_lengkap`, `nomor_ktp`, `nomor_telepon`, `email`, `alamat_tinggal`, `kecamatan_tinggal`, `kota_tinggal`, `tempat_lahir`, `tanggal_lahir`, `peralatan`, `keahlian`, `area_kerja`, `foto_ktp`, `job`, `is_valid`, `foto_diri`) VALUES
(15, 'demo Service', '232132456', '081234567893', 'demo@service.com', 'rumah', 'rumah', 'Makassar', 'Makassar', '2018-07-29', '1,2', '1,2,3,4,5,6', 1, 'ktp_15.PNG', 5, 1, 'diri_15.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_mmassage`
--

CREATE TABLE `pendaftaran_mmassage` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL COMMENT '1 = L , 2 = P',
  `nomor_ktp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat_tinggal` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `pengalaman_pijat` int(11) NOT NULL COMMENT 'Tahun',
  `keahlian_pijat` varchar(100) NOT NULL,
  `area_kerja` int(11) NOT NULL,
  `pekerjaan_terakhir` varchar(50) NOT NULL,
  `nama_telepon_keluarga` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `job` int(11) NOT NULL,
  `is_valid` int(11) NOT NULL DEFAULT '0' COMMENT '0=belum divalidasi, 1=sudah valid , 2= ditolak',
  `foto_diri` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_mmassage`
--

INSERT INTO `pendaftaran_mmassage` (`nomor`, `nama_lengkap`, `nomor_telepon`, `email`, `tanggal_lahir`, `jenis_kelamin`, `nomor_ktp`, `tempat_lahir`, `alamat_tinggal`, `kecamatan`, `kota`, `pengalaman_pijat`, `keahlian_pijat`, `area_kerja`, `pekerjaan_terakhir`, `nama_telepon_keluarga`, `foto_ktp`, `job`, `is_valid`, `foto_diri`) VALUES
(50, 'demo Massage', '08123456794', 'demo@massage.com', '2018-07-29', '2', '92832838271', 'Makassar', 'street', 'house', 'Makassar', 4, '1,2,3,4,5,6,7', 1, 'spa', '081233645362', 'ktp_50.PNG', 3, 1, 'diri_50.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan_service`
--

CREATE TABLE `peralatan_service` (
  `id` int(10) NOT NULL,
  `nama_peralatan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan_service`
--

INSERT INTO `peralatan_service` (`id`, `nama_peralatan`) VALUES
(1, 'kemucing'),
(2, 'tangga');

-- --------------------------------------------------------

--
-- Table structure for table `profil_perusahaan`
--

CREATE TABLE `profil_perusahaan` (
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` int(11) NOT NULL,
  `akun_facebook` varchar(50) NOT NULL,
  `akun_instagram` varchar(50) NOT NULL,
  `akun_twitter` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cabang` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_perusahaan`
--

INSERT INTO `profil_perusahaan` (`nama`, `telepon`, `alamat`, `akun_facebook`, `akun_instagram`, `akun_twitter`, `email`, `cabang`) VALUES
('GOEKS', '123456789', 1, 'goeks.site', 'goeks', '@goeks', 'goeks@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promosi`
--

CREATE TABLE `promosi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `fitur_promosi` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `is_show` varchar(3) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promosi_mfood`
--

CREATE TABLE `promosi_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `is_show` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proporsi_biaya`
--

CREATE TABLE `proporsi_biaya` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_fitur` int(11) NOT NULL,
  `persentase_driver` int(11) NOT NULL,
  `waktu_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proporsi_biaya`
--

INSERT INTO `proporsi_biaya` (`nomor`, `id_fitur`, `persentase_driver`, `waktu_update`) VALUES
(1, 1, 75, '2017-11-09 11:00:58'),
(2, 2, 90, '2017-01-06 10:41:32'),
(3, 3, 90, '2017-02-06 17:14:52'),
(4, 4, 90, '2016-12-11 12:00:29'),
(5, 5, 90, '2016-12-11 11:55:18'),
(6, 6, 90, '2017-02-02 17:35:33'),
(7, 7, 80, '2016-11-21 22:24:41'),
(8, 8, 80, '2016-11-21 22:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `rating_driver`
--

CREATE TABLE `rating_driver` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT 'Good job',
  `rating` int(11) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_driver`
--

INSERT INTO `rating_driver` (`nomor`, `id_pelanggan`, `id_driver`, `id_transaksi`, `catatan`, `rating`, `update_at`) VALUES
(1314, 'P1', 'D72', 307, 'Good job', 5, '2018-08-29 10:51:42'),
(1313, 'P1', 'D72', 306, 'Good job', 5, '2018-08-29 09:06:30'),
(1312, 'P1', 'D72', 305, 'Good job', 5, '2018-08-29 09:04:20'),
(1315, 'P1', 'D72', 311, 'Good job', 5, '2018-08-30 13:27:46'),
(1316, 'P1', 'D73', 315, 'Good job', 5, '2018-09-01 19:32:15'),
(1317, 'P1', 'D72', 319, 'Good job', 5, '2018-09-01 23:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `rating_pelanggan`
--

CREATE TABLE `rating_pelanggan` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_pelanggan`
--

INSERT INTO `rating_pelanggan` (`nomor`, `id_driver`, `id_pelanggan`, `id_transaksi`, `catatan`, `rating`) VALUES
(83, 'D72', 'P1', 307, '', 5),
(82, 'D72', 'P1', 306, '', 5),
(81, 'D72', 'P1', 305, '', 5),
(84, 'D72', 'P1', 311, '', 5),
(85, 'D73', 'P1', 314, '', 5),
(86, 'D73', 'P1', 315, '', 5),
(87, 'D72', 'P1', 317, '', 5),
(88, 'D72', 'P1', 319, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `redeemed_voucher`
--

CREATE TABLE `redeemed_voucher` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `tanggal_redeem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count_of_use` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_resto` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `jam_buka` varchar(10) NOT NULL,
  `jam_tutup` varchar(10) NOT NULL,
  `deskripsi_resto` varchar(1000) NOT NULL,
  `kategori_resto` int(11) NOT NULL,
  `foto_resto` varchar(100) NOT NULL,
  `kontak_telepon` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_open` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `nama_resto`, `alamat`, `latitude`, `longitude`, `jam_buka`, `jam_tutup`, `deskripsi_resto`, `kategori_resto`, `foto_resto`, `kontak_telepon`, `status`, `is_open`) VALUES
(31, 'KFC Ramayana', 'Ramayana Palembang, Jl. Letkol Iskandar, Ilir Barat 1, Palembang 30134', '-2.983324707276477', '104.7509449306192', '10:00', '21:00', '-', 2, 'resto_31.jpeg', '0711366292', 1, 1),
(32, 'KFC, Bukit Kecil', 'Jl. Merdeka  No 38.RT .023/Talang Semut, Bukit kecil palembang', '-2.9902346', '104.74828130000003', '00:00', '23:59', '-', 12, 'resto_32.png', '360074', 1, 1),
(33, 'RM Pindang Musi Prabu Indah', 'Jl. Kapt A Rivai No. 63, Komp Kantor Pos, Ilir Timur 1', '-2.9818058844777084', '104.74533421834644', '08:00', '22:00', '-', 2, 'resto_33.jpeg', '082378581111', 1, 1),
(34, 'Bubur Ayam Kang Didin', 'Jl.Tasik.Bukit Kecil, Palembang', '-2.9906097', '104.74631440000007', '00:00', '23:59', '-', 12, 'resto_34.jpg', '098989', 1, 1),
(35, 'KFC, Demang', 'Jl.Demang lebar daun, Ilir Barat 1, Palembang', '-2.97222528725429', '104.7303631625656', '00:00', '23:59', '-', 12, 'resto_35.jpg', '9090909', 1, 1),
(36, 'Waroeng Pempek Ibu Yenni. bumbu rujak', 'Jl. Kapten Anwar Sastro No 1546. Ilir Timur 1 Palembang', '-2.977367859866675', '104.74654087829595', '09:00', '23:00', '-', 11, 'resto_36.jpg', '082177909943', 1, 1),
(37, 'KFC Internasional Plaza', 'Internasional Plaza, Jl. Jendral Sudirman, Ilir Timur 1', '-2.9837181736827754', '104.75767984073946', '09:00', '20:00', '-', 1, 'resto_37.jpeg', '0711361232', 1, 1),
(38, 'Sate Padang Uni Dina. Vetera', 'Jl. Veteran No 32. Ilir Timur Palembang ', '-2.975605627559601', '104.76184561691889', '18:30', '23:30', '-', 0, 'resto_38.jpg', '081283921991', 1, 1),
(39, 'Rumah Makan Mega raya', 'Jl. KH Faqih Usman, Seberang Ulu 1, Palembang', '-3.010065684516402', '104.75952703192138', '00:00', '23:59', '-', 12, 'resto_39.jpg', '520062', 1, 1),
(40, 'Rumah Makan Minang Sari', 'Jl. Soekarno  Hatta, ilir barat 1, palembang', '-2.962052368562871', '104.70570046141052', '00:00', '23:59', '-', 12, 'resto_40.jpg', '082180001206', 1, 1),
(41, 'Pecel Lele Sedap', 'Jl. Mayor salim Batubara No. 2578, Ilir Timur 1', '-2.9673560343946552', '104.75708353950881', '16:00', '22:30', 'Pecel Lele Sedap menyediakan 4 aneka sambel spesial yaitu sambal terasi spesial, sambal cingdiro, sambal bawang putih ( tanpa terasi ) & sambal dabu-dabu khas Manado. Kami juga menyediakan aneka macam jus buah & minuman segar menggunakan 100% gula alami.', 1, 'resto_41.jpeg', '0711369488', 1, 1),
(42, 'RM. Sederhana. Jendral Sudirman', 'Jl. Jendral Sudirman No 19-22 ilir timur 1 Palembang', '-2.981769555119132', '104.75658733084106', '08:00', '22:00', 'ayam pop', 4, 'resto_42.jpg', '0711315020', 1, 1),
(43, 'Rumah Makan palapa Jaya Raya', 'Jl.kolonel H. burlian No.190, sukarami, palembang 6.55 KM', '-2.926249283305604', '104.7146483106842', '00:00', '23:59', '-', 12, 'resto_43.jpg', '412160', 1, 1),
(44, 'Rumah Makan Minang Sari, Sukarami', 'Jl. Tanjung Api-Api Km.5 Sukarami, Palembang', '-2.8851544186623634', '104.73327357008361', '00:00', '23:59', '-', 1, 'resto_44.jpg', '081273061333', 1, 1),
(45, 'RM Minang Sari, Alang-Alang Lebar', 'Jl Bypass Alang-Alang Lebar', '-2.917996142471444', '104.68236524298095', '00:00', '23:59', '-', 12, 'resto_45.jpg', '08238333618', 1, 1),
(46, 'Selebriti Entertaiment Center', 'Jl. Veteran No. 1243, Ilir Timur 2', '-2.9753128247088396', '104.76032498910331', '10:00', '22:00', '-', 1, 'resto_46.jpg', '0711370555', 1, 1),
(47, 'Martabak Kapten', 'Jl.kapten A rivai No 23, Ilir timur 1, Palembang 1.16 KM', '-2.979316962292834', '104.74801494795452', '10:00', '21:45', '-', 5, 'resto_47.jpg', '081278863944', 1, 1),
(48, 'sky kitchen', 'komp palembang square blok r no 155. jl angkatan 45 ilir barat 1 palembang', '-2.976175500000001', '104.74183930000004', '11:00', '21:00', '-', 4, 'resto_48.jpg', '081272366000', 1, 1),
(49, 'Martabak Arkan', 'Jl. Mayor Salim Batubara, Lorong Bendung, gang bagus Arief.1303/18, kemuning, Palembang', '-2.9598988400073893', '104.7598727894715', '09:00', '22:00', '-', 5, 'resto_49.jpg', '081278989340', 1, 1),
(50, 'Martabak Brownies Kang Anan, Sumpah Pemuda', 'Jl angkatan 45 K-18, Ilir Barat 1, Palembang 1.59 KM', '-2.9720421872273093', '104.73908673382948', '09:00', '22:00', '-', 5, 'resto_50.jpg', '08117108188', 1, 1),
(51, 'Martabak Bangka Teddi', 'Jl Ariodillah 3, 20 ilir 4, Ilir Timur 1, Palembang', '-2.9647664504299223', '104.73983160793455', '14:00', '22:30', '-', 1, 'resto_51.jpg', '085279972250', 1, 1),
(52, 'Martabak Bandung Raya, Riemart', 'Jl.Sumpah Pemuda, Riemart, Ilir Barat 1, palembang', '-2.974248', '104.7383936', '17:00', '21:00', '-', 5, 'resto_52.jpg', '081377340781', 1, 1),
(53, 'Puyuh Lucky 168', 'Jl.Veteran Sebrang Selebriti Cafe, Ilir Timur 1, Palembang', '-2.9760636668100804', '104.75713834009775', '18:00', '04:00', 'Puyuh Lucky 168 Menyajikan aneka masakan dengan cita rasa yang khas. Dan mempadu-padankan sensai pedasnya masakan Indonesia. Rasakan Sensasi \"SAMBAL GELEGAR\" kami.', 1, 'resto_53.jpg', '082280044499', 1, 1),
(54, 'Teh Aba', 'Jl.kapten A rivai No 690 Palembang 1.16 KM', '-2.985447', '104.74420199999997', '10:00', '22:30', '-', 5, 'resto_54.jpg', '081373364884', 1, 1),
(55, 'Barong Kafe', 'komp palembang square blok r no 150. jl angkatan 45 ilir barat 1 palemba', '-2.976175500000001', '104.74183930000004', '11:00', '22:00', '-', 4, 'resto_55.jpg', '0711380109', 1, 1),
(56, 'Sony Bakso Lampung Dan Mie Ayam', 'jl.TP Rustam Effendy no 40 ilir timur 1 palaembang', '-2.986470500073654', '104.76058800727083', '09:00', '17:00', '-', 4, 'resto_56.jpg', '0711357557', 1, 1),
(57, 'Soto Betawi Haji Amir', 'Jl. demang Lebar DAun no 455 ilir timur 2 palembang', '-2.962193011914003', '104.73609198576662', '10:00', '21:00', '-', 4, 'resto_57.jpg', '0711414198', 1, 1),
(58, 'The Kitchen Suki Dimsum, Hotel Anugerah', ' Komp Hotel Anugerah, Jl. Jendral Sudirman No 149/1, Ilir Timur 1, Palembang', '-2.9742991028299484', '104.75263581656759', '07:00', '22:00', '-', 3, 'resto_58.jpg', '313182', 1, 1),
(59, 'Martabak HAR PTC', 'Jl. R Soekamto, Ilir Timur 2, Palembang', '-2.9520767', '104.76136999999994', '06:30', '23:00', '-', 5, 'resto_59.jpg', '5630947', 1, 1),
(60, 'Seoul Korean Restaurant', 'Jl.Mayor  Santoso No 1540 C/D, Ilir Timur 1, Palembang', '-6.2087634', '106.84559899999999', '10:00', '21:00', '-', 19, 'resto_60.jpg', '373993', 1, 1),
(88, 'Saka Bento, Atmo', 'Jl. Kolonel Atmo No. 870, Ilir Timur 1 Palembang', '-2.982266', '104.75925400000006', '09:00', '20:00', '', 1, 'resto_88.jpg', '350231', 1, 1),
(61, 'Roemah Bari, Hotel Anugerah', 'JL. Jend Sudirman, Ilir Timur 1, Palembang', '-2.974287', '104.75263500000005', '07:00', '21:00', '', 9, 'resto_61.jpg', '363030', 1, 1),
(62, 'Taichan Sate Cabang Bali', 'Jl. R sukamto No 8A seberang SPBU PTC Ilir Timur 2 Palembang', '-2.9522008115721046', '104.75884987783206', '17:00', '23:00', '', 4, 'resto_62.jpeg', '082279532179', 1, 1),
(63, 'Molek\'s Box', 'Jl.Aptu KS Tubun Gang Seblat NO 24 Ilir Timur 1 palembang', '-2.977735219253986', '104.76026852214227', '10:00', '17:00', '', 19, 'resto_63.jpg', '082114926761', 1, 1),
(64, 'Coffe Shop Hotel Anugerah', 'JL jendral Sudirman no149,IlirTimur 1', '-2.974287', '104.75263500000005', '00:00', '23:59', '', 17, 'resto_64.jpg', '312828', 1, 1),
(65, 'Pecel Lele Jimbaran', 'Jl. Veteran , Ilir Timur 1', '-2.9757100926685793', '104.76051255903849', '18:00', '12:00', '', 1, 'resto_65.jpg', '08136719099', 1, 1),
(66, 'Martabugs Sudirman', 'JL. Jenderal Sudirman Lorong Pelita NO.578 2.29. KM', '-2.9565561', '104.73837849999995', '17:00', '20:00', '', 0, 'resto_66.jpg', '085273334014', 1, 1),
(67, 'Sop Kaki Baba', 'Jl. R Sukamto No 91 Ilir Timur 2 Palembang', '-2.951673753543714', '104.76124941389162', '11:00', '23:00', '', 4, 'resto_67.jpg', '08117888186', 1, 1),
(68, 'soto kwali mbak dewi', 'JL.Gajah Mada Samping Geraja Siloam Kambang  Iwak Bukit Kecil  Palembang', '-2.991315999999999', '104.76162999999997', '21:00', '08:00', '', 5, 'resto_68.jpg', '08127857299', 1, 1),
(69, 'Pindang Pegagan H.Abdul Halim Kamboja', 'JL. Mayor Santoso no. 3133A, Ilir Timur 1', '-2.968377', '104.74653839999996', '07:30', '21:00', '', 9, 'resto_69.jpg', '0711363894', 1, 1),
(70, 'Munch Eat, Drink, be Merry', ' No 87D, Jl. Aiptu K. S. Tubun, Kepandean Baru, Ilir Timur I, Palembang City, South Sumatra, Indones', '-2.977636040181254', '104.7609258816949', '08:00', '20:30', '', 19, 'resto_70.jpg', '300478', 1, 1),
(71, 'Brasserie Bakery and Resto, PI Mall', 'Palembang Ican Mall UG-29, Jl.Angkatan 45', '-2.9791989457924264', '104.74527736004939', '10:00', '21:00', 'Brasserie Bakery and Resto merupakan restoran keluarga, menyediakan Western, Chinese and Indonesian Food, dan juga memeliki banyak pilihan menu lainnya disertai dengan minuman segar non alkohol', 1, 'resto_71.jpg', '07115649041', 1, 1),
(72, 'Martabak Bari Talang kerangga', 'Jl. Talang Kerangga No 73, Ilir Barat 2, palembang 2.87 KM. ', '-2.9956873565046194', '104.74843140377902', '16:00', '22:00', '', 5, 'resto_72.jpg', '081272568882', 1, 1),
(73, 'Bukit Golf Resto Dan Resort cafe', 'Jl AKBP Cek Agus No 34 Ilir Timur 2 Plembang', '-2.95819781972534', '104.77055627539062', '10:00', '21:00', '', 4, 'resto_73.jpeg', '0711721188', 1, 1),
(74, 'The Kitchen Suki Dimsum, Hotel Anugerah', 'Komp Hotel Anugerah, Jl Jendral Sudirman no 149/1, ilir timur 1 Palembang', '-6.208720736376839', '106.8459423227539', '07:00', '22:00', '', 17, 'resto_74.jpg', '313128', 1, 1),
(75, 'El\'s Coffee', 'Rajawali Village Ground Floor CA-CB, Ilir Timur 2, Palembang', '-2.9713967142399818', '104.76418468787574', '10:00', '22:00', '', 19, 'resto_75.jpg', '5630121', 1, 1),
(76, 'Sayudonmen Ramen', 'Jl Mayor Ruslan No.148 , Depan Home Inn, Ilir Timur 2 Palembang', '-2.9738782', '104.75686670000005', '12:00', '21:00', '', 17, 'resto_76.jpg', '085266696492', 1, 1),
(77, 'Shi-Da Original Taiwan Taste', 'Jln. Bangau No. 1261, Ilir Timur 2, Palembang', '-2.96853052311637', '104.76313162261499', '10:15', '19:15', '', 17, 'resto_77.jpg', '081995190450', 1, 1),
(78, 'Shusi So Japanese Restaurant, Rajawali', 'Jl Rajawali No. 1174 A-B, Ilir Timur 2, Palembang', '-2.969823457708058', '104.76438326508173', '10:00', '21:00', '', 17, 'resto_78.jpg', '357422', 1, 1),
(79, 'K-Drink Korean Drink', 'PS Mall, Lt 4 Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.9761927422816927', '104.74183518125915', '10:00', '22:00', '', 19, 'resto_79.png', '-', 1, 1),
(80, 'Dimsum Simenur', 'Jl. Veteran No. 218, VW Combi Orange, Ilir Timur 1, Palembang', '-2.976257517183039', '104.756797105249', '', '', '', 3, 'resto_80.jpg', '081367459217', 2, 1),
(81, 'Pempek TPI', 'Taman Permata Indah Jl. Angkatan 45 Blok H No. 35, Ilir Barat 1, Palembang', '-2.972834201809404', '104.73947397567144', '09:00', '21:00', '', 11, 'resto_81.jpg', '311932', 1, 1),
(82, 'Uncle Loe, Rambang', 'Jl Merbau No 1545 A-B, Ilir Timur 2, Palembang', '-2.972950484560448', '104.76055548526733', '07:00', '20:30', '', 3, 'resto_82.jpg', '320112', 1, 1),
(83, 'Sky Kitchen', 'Komp.Palembang Square Blok R No. 155, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.977113676196309', '104.74209947427448', '11:30', '21:00', '', 19, 'resto_83.jpg', '111111', 1, 1),
(84, 'D\'Cost Seafood', 'Palembang Square Mall, Lt 3, Jl Angkatan 45 Ilir Barat 1', '-2.976175500000001', '104.74183930000004', '11:00', '21:00', '', 1, 'resto_84.jpg', '380025', 1, 1),
(85, 'Saka Bento, Bangau', 'Jl. Bangau No. 171, Ilir Timur 2, Palembang', '-2.9685237', '104.7640318', '08:00', '21:30', '', 17, 'resto_85.jpg', '314932', 1, 1),
(86, 'Pempek Mang Din', 'Jl.Radial No 884 Bukit Kecil Palembang', '-3.009204', '104.7517249', '09:00', '19:00', '', 1, 'resto_86.jpg', '082281169291', 1, 1),
(87, 'Ike Shusi, PI', 'Palembang Icon Mall, Area Swalayan Foodmart, Jl. POM 9, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '09:30', '20:30', '', 17, 'resto_87.jpg', '08117801011', 1, 1),
(89, 'Mr dan Mrs Kimchi', 'Jl. Inspektur Marzuki No.03 RT 01 RW 04, Simpang 4 Wayhitam, Ilir Barat 1, Palembang', '-2.9625496690488844', '104.72756690310632', '11:00', '18:30', '', 1, 'resto_89.jpg', '081224680240', 1, 1),
(90, 'Fugu Sushi and Bar', 'Palembang Indah Mall, Lantai 3, Jl. Letkol Iskandar No. 18, Bukit kecil, Palembang', '-2.9848454', '104.75387060000003', '10:00', '22:00', '', 17, 'resto_90.jpg', '362266', 1, 1),
(91, 'Insadong Eat Street', 'Palembang Icon, Eat Street Lantai 3, Jl. POM 9, Ilir Barat 1, Palembang', '-2.9785078709223245', '104.74541683491816', '10:00', '21:00', '', 19, 'resto_91.jpg', '999999', 1, 1),
(92, 'El\'S Coffee', 'Rajawali Village Ground Floor CA-CB, Ilir Timur 2, Palembang', '-2.971397112996541', '104.76418326745909', '10:00', '23:59', '', 18, 'resto_92.jpg', '5630121000', 1, 1),
(93, 'PAWON AGUN', 'JL MP MANGKU NEAGARA KOMPLEK MUSI PALEM INDAH NO E11 ILIR TIMUR 2 PALEMBANG', '-2.9395141579411113', '104.76652543914793', '10:00', '21:30', '', 4, 'resto_93.jpeg', '0711823222', 1, 1),
(94, 'Rumah Makan dan Pempek Ani', 'Jln. Kap. A rivai ( Depan Hotel Batiqa)', '-2.9846118571191127', '104.74472408598331', '10:00', '22:00', '', 1, 'resto_94.jpg', '08127853578', 1, 1),
(95, 'Taifun Hawker', 'Palembang Trade Center (PTC), Lobby Area, Jl. R Soekamto, Ilir Timur 2, Palembang', '-2.9508438', '104.76132280000002', '10:00', '20:00', '', 19, 'resto_95.jpg', '888888', 1, 1),
(96, 'Nobu Bistro', 'Jl. Sumpah pemudah, blok M, samping sonic futsal, Ilir Barat 1, Palembang', '-2.9739859989485633', '104.73837158776632', '11:00', '22:00', '', 0, 'resto_96.jpg', '351395', 1, 1),
(97, 'Pecel Lele Molly', 'Jln. Kapten  A rivai ( Depan Hotel Batiqa)', '-2.9845850714113458', '104.74457388227847', '10:00', '22:00', '', 1, 'resto_97.jpg', '081259185918', 1, 1),
(98, 'Sushi Tei, Palembang', 'Jl. Kiranggo Wirosentika 1C, Bukit Kecil, Palembang', '-2.9875807138220685', '104.74439348675537', '10:00', '22:00', '', 17, 'resto_98.jpg', '319500', 1, 1),
(99, 'Buntut Sunda Kang Ali', 'Jl. Mayor Santoso, Seberang SMA 3, Ilir Timur 1 Palembang', '-2.968377', '104.74653839999996', '08:00', '21:30', '', 0, 'resto_99.jpg', '081373152233', 1, 1),
(100, 'Sumotori', 'PTC Mall, Food Court Lt.2, Jl. R. Sukamto, Ilir Timur 2, Palembang', '-2.9508438', '104.76132280000002', '10:00', '21:00', '', 17, 'resto_100.jpg', '08117195588', 1, 1),
(101, 'French Bakery Bistro, Atmo', 'Jl. Kolonel Atmo No. 481, Ilir Timur 1 Palembang', '-2.9818806992279843', '104.7588870656067', '10:00', '22:00', '', 1, 'resto_101.jpeg', '0711353707', 1, 1),
(102, 'Bento', 'Palembang Trade Center, Food Court, Jl. R Soekamto, Ilir Timur 2, Palembang', '-2.950758279680208', '104.76131600744452', '10:00', '21:00', '', 19, 'resto_102.jpg', '222222', 1, 1),
(103, 'Shusi So Japanese Restaurant, PTC', 'PTC Mall, Lantai 2 No. 06, Ilir Timur 2, Palembang', '-2.9508438', '104.76132280000002', '10:00', '21:30', '', 17, 'resto_103.jpg', '382227', 1, 1),
(104, 'Kampoeng Kayoe', 'JL. Merbau No. 474, Ilir Timur 2, Palembang', '-2.9739909', '104.76063269999997', '10:00', '22:00', '', 9, 'resto_104.jpg', '0711313324', 1, 1),
(105, 'My Kattha Suki Dan BBQ', 'Jl. Aiptu KS Tubun No. 87, Ilir Timur 1, Palembang', '-2.978925763010556', '104.75868622684493', '11:00', '22:00', '', 18, 'resto_105.jpg', '565656', 1, 1),
(106, 'The Kitchen Suki Dimsum, Golf', 'Jl. AKBP Cek Agus No.34, Ilir Timur 2, Palembang', '-2.9541045', '104.76920919999998', '07:00', '23:00', '', 17, 'resto_106.jpg', '0711721637', 1, 1),
(107, 'Pecel Lele SEDAP', 'Jl. Mayor Salim Batubara No. 2578, Ilir Timur 1, Palembang.', '-2.969822455174933', '104.75470143900907', '16:00', '20:30', '', 15, 'resto_107.jpg', '369488', 1, 1),
(108, 'Kedai Akiun', 'Jl. Aiptu KS Tubun No. 12, Ilir Timur 1, Palembang', '-2.9788795574253752', '104.75933196866526', '11:00', '20:00', '', 3, 'resto_108.jpg', '08127883500', 1, 1),
(109, 'Ketty Resto', 'Palembang Indah Mall Lantai 2, Jl. Letkol iskandar, Bukit Kecil, Palembang', '-2.9848454', '104.75387060000003', '10:00', '22:00', '', 1, 'resto_109.jpg', '07115210300', 1, 1),
(110, 'Udin Ramen, Pakjo', 'Jl. Inspektur Marzuki Komplek Griya Mutiara Blok B No.1, Ilir Barat 1, Palembang', '-2.962416841263576', '104.72819446577614', '09:00', '21:00', '', 0, 'resto_110.jpg', '415103', 1, 1),
(111, 'Mie Ayam Dempo', 'Jl. Aiptu KS tubun No. 539A, Ilir Timur 1, Palembang', '-2.9786830162551547', '104.76057953113332', '06:00', '13:00', '', 3, 'resto_111.jpg', '087897194838', 1, 1),
(112, 'Jade Dragon Star', 'Ruko PIM, Blok D1-2, Jl. Letkol Iskandar, Bukit Kecil', '-2.9843579001198313', '104.75485765291751', '10:00', '22:00', '', 1, 'resto_112.jpg', '0711366768', 1, 1),
(113, 'Waroeng Pindang Galau Cinde', 'JL. Sudirman, Bukit Kecil, Palembang', '-2.9873112', '104.7604791', '09:00', '16:00', '', 9, 'resto_113.jpg', '085788111589', 1, 1),
(114, 'Newtown Cafe Hotel Anugrah', 'jl. jend sudirman no. 149/1, ilir timur 1, palembang', '-2.974287', '104.75263500000005', '09:00', '23:00', '', 15, 'resto_114.jpg', '332285', 1, 1),
(115, 'Grand Zuri Cerenti Resto', 'Hotel Grand Zuri, Jl. Rajawali, Ilir Timur 2, Palembang', '-2.9709573', '104.76459030000001', '01:00', '23:59', '', 3, 'resto_115.jpg', '082288213271', 1, 1),
(116, 'Rumah Makan Lapangan Hatta', 'JL. Aiptu KS Tubun No, A7, Ilir Timur 1, Palembang', '-2.9784771', '104.75962500000003', '06:00', '16:00', '', 9, 'resto_116.JPG', '081298112293', 1, 1),
(117, 'Pak Karyo sate', 'jl residen h abdul rojak lr madium no 37 ilir timur 2 palembang', '-2.9526454467994956', '104.78682240422972', '22:00', '12:00', '', 4, 'resto_117.jpeg', '081367274539', 1, 1),
(118, 'Rumah Makan H Abuk Kenten', 'komlek ruko tirta lestari jl mp mangku negara no 99A ilir timur ', '-2.9347889567040006', '104.7687355793762', '16:00', '09:00', '', 4, 'resto_118.jpeg', '0711821205', 1, 1),
(119, 'Rumah Makan SQ', 'Jl. Brigjen Abdul Kadir No. 410C, Ilir Timur 1', '-2.981421343145936', '104.76176096896438', '10:00', '22:30', '', 1, 'resto_119.jpg', '0711368977', 1, 1),
(120, 'Fat Bubble', 'Jl. Kom. Pol. H. M. Damsyik, Sekip Jaya, Kemuning.', '-2.966766651050783', '104.75429407528952', '11:00', '18:00', '', 15, 'resto_120.png', '191919', 1, 1),
(121, 'Roemah Bari Hotel Anugrah', 'jl. jend sudirman, ilir timur 1, palembang', '-2.9742877922487403', '104.75263439714149', '07:00', '21:00', '', 15, 'resto_121.jpg', '550000', 1, 1),
(122, 'Pempek Dan Kerupuk', 'jl. syakyakriti no. 1775, kemuning, palembang', '-3.018756087794436', '104.72916837427852', '09:00', '17:30', '', 15, 'resto_122.jpg', '320478', 1, 1),
(123, 'RM MM Dempo', 'Jl. Dempo Luar No. 103/701, Ilir Timur1, Palembang', '-2.9808964611229354', '104.76150881446802', '17:30', '22:00', '', 3, 'resto_123.jpg', '082182036364', 1, 1),
(124, 'Lavar Laver', 'Jl. Ogan No.2793 RT 37 RW 12, Bukit Lama, Ilir Barat 1, Palembang', '-2.9875296992670757', '104.72867808975752', '10:30', '19:00', '', 0, 'resto_124.jpg', '089602600066', 1, 1),
(125, 'Hanbai Tako', 'Jl. Sultan Moh. Mansyur No.40, Bukit Lama, Ilir Barat 1, Palembang', '-3.002517755193023', '104.7370638637542', '14:00', '22:30', '', 17, 'resto_125.jpg', '085273548673', 1, 1),
(126, 'Tokio Street, Foodmart PI', 'Palembang Icon Mall, GF, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 17, 'resto_126.jpg', '081345768213', 1, 1),
(127, 'Roti Bakar Narsis', 'Jl. Kapten A Rivaai No.23, Ilir Timur 1, Palembang', '-2.978687399999999', '104.74801079999997', '09:00', '22:00', '', 15, 'resto_127.jpeg', '8856763', 1, 1),
(128, 'Ta Wan, Palembang Icon', 'Palembang Icon, Lantai 2 unit 51, Jl. POM 9, Ilir Barat 1, Palembang', '-2.9785989428292496', '104.74580843743433', '10:00', '22:00', '', 0, 'resto_128.jpg', '5649320', 1, 1),
(129, 'Ichiban Sushi, Palembang Icon', 'Palembang Icon, Lantai 3, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '21:30', '', 17, 'resto_129.jpg', '5649419', 1, 1),
(130, 'King Crispy Taiwan', 'Jl. Angkatan 45 Depan Alfamart Deretan Belle Salon, Ilir Barat 1, Palembang', '-2.9730477112598033', '104.73979793995068', '13:00', '20:00', 'King Crispy Taiwan merupakan outlet yang menjual cumi dan chicken crispy ala Taiwan yang jarang sekali di temukan di kota-kota lain yang memiliki berbagai macam topping antara lain : bbq, chili, seaweed & pepper salt.', 1, 'resto_130.jpg', '081280095056', 1, 1),
(131, 'Xiabu Xiabu, Dempo', 'Jl. Lingkar, Ilir Timur, Palembang', '-2.981181286818229', '104.76204609734486', '10:30', '21:00', '', 17, 'resto_131.jpeg', '081254675412', 1, 1),
(132, 'Restoran Boga Rasa', 'Jl. Letkol Iskandar 452 F/G, Ilir Timur 1, Palembang', '-2.98188132616984', '104.76166120524067', '10:00', '22:00', '', 3, 'resto_132.jpg', '310650', 1, 1),
(133, 'Ipoh Ale Chicken Rice', 'Le Garden Food Court Palembang Indah Mall Lantai 2, Jalan Letkol Iskandar, 24 Ilir, Bukit Kecil, Pal', '-2.9848454', '104.75387060000003', '10:00', '21:00', '', 17, 'resto_133.jpg', '082166889887', 1, 1),
(134, 'Sukai Bento Japanese Fast Food, PIM', 'Le  Garden Food Court PIM, Lt.2, Jl. Letkol Iskandar No.18, Bukit Kecil, Palembang', '-2.9848454', '104.75387060000003', '10:00', '21:30', '', 17, 'resto_134.jpg', '08995038288', 1, 1),
(135, 'Dimsum Express', 'Le Garden Food Court Palembang Indah Mall Lantai 2, jalan Letkol Iskandar, 24 Ilir, Bukit Kecil', '-2.9848454', '104.75387060000003', '10:00', '21:30', '', 17, 'resto_135.jpg', '085767024305', 1, 1),
(136, 'Zushioda', 'Palembang Indah Mall, Lantai Basemen, Jl. Let Kol Iskandar No. 18, Bukit Kecil, Palembang', '-2.9848454', '104.75387060000003', '10:00', '22:00', '', 17, 'resto_136.jpg', '082282275568', 1, 1),
(137, 'O-Karage', 'Jalan Hang Tuah, Talang Semut, Bukit Kecil Palembang', '-2.9908588405888357', '104.74545866109929', '15:30', '21:00', '', 17, 'resto_137.jpg', '0819707100', 1, 1),
(138, 'Otako Takoyaki', 'Jl.Hang Tuah, Bukit Kecil, Palembang', '-2.9910195539072246', '104.74543720342717', '15:00', '18:30', '', 0, 'resto_138.jpg', '081379411396', 1, 1),
(139, 'Flowertage', 'Jl. Hang Tuah No. 12, Bukit Kecil, Palembang', '-2.9910027', '104.74567890000003', '10:00', '21:00', '', 17, 'resto_139.jpg', '380010', 1, 1),
(140, 'Martabak Panglima', 'Jl. Pipa reja, Simpang Lima Lebong Siarang, Kemuning, Palembang', '-2.9430334', '104.74615310000002', '04:00', '11:00', '', 5, 'resto_140.jpg', '081373000720', 1, 1),
(141, 'Soto Abah Opan, PIM', 'Jl. Kolonel Achmad Badaruddin, Belakang Palembang Indah Mall, Bukit Kecil, Palembang', '-2.9844918286798863', '104.75552820517123', '08:00', '20:00', '', 1, 'resto_141.jpg', '0711310955', 1, 1),
(142, 'Xiabu Xiabu,Bukit', 'Jl. Jaksa Agung R. Suprapto, Ilir Barat 1, Palembang', '-2.989372732541413', '104.73790762778617', '10:30', '21:30', '', 0, 'resto_142.jpeg', '0812347832', 1, 1),
(143, 'De\'Gareji', 'Jl. Srijaya Negara Lrg. Hasan, Bukit Lama, Ilir Barat 1, Palembang', '-2.9876989707159876', '104.73077875634453', '09:00', '21:00', '', 17, 'resto_143.jpg', '085269696960', 1, 1),
(144, 'Mubarok Resto', 'Jl. Jendral Sudirman No.353, 18 Ilir, Bukit Kecil, Palembang', '-2.986632999999999', '104.759816', '08:00', '22:00', '', 0, 'resto_144.jpg', '08127102372', 1, 1),
(145, 'My Pasta By ELLE', 'Jl. Mayor Salim Batubara Lr. Belimbing 2 No. 2329B Ruko Sebelah kanan nomor tiga dari Belakang, Kemu', '-2.969409846886903', '104.75391762670597', '10:00', '17:00', '', 28, 'resto_145.jpg', '081366691283', 1, 1),
(146, 'Pondok Awata', 'Asrama Polisi Madang Blok E No. 8 Kemuning, palembang', '-2.964904599999999', '104.75391939999997', '09:00', '21:00', '', 28, 'resto_146.jpg', '081278640086', 1, 1),
(147, 'BASO, PALEMBANG ICON', 'Palembang Icon Mall, Lantai 1, JL. Angkatan 45 , Ilir Barat1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 9, 'resto_147.jpg', '07115649324', 1, 1),
(148, 'Ketan Susu Uji Mak Aku', 'Jl. Veteran, Lampu Merah taman Siswa Ilir Timur 1, Palembang', '-2.97598644085863', '104.75783364047538', '19:00', '23:30', '', 28, 'resto_148.jpg', '087897405649', 1, 1),
(149, 'Hanging Barrel', 'Rajawali Village Jl. Rajawali, Ilir Timur 2, Palembang', '-2.972007336844916', '104.76341742195132', '11:00', '23:00', '', 28, 'resto_149.JPG', '081243657821', 1, 1),
(150, 'LaRizz', 'Jl. Bangau No. 1261, Ilir Timur 1, Palembang', '-2.9683871', '104.76306210000007', '10:30', '19:30', '', 0, 'resto_150.jpg', '082186884699', 1, 1),
(151, 'PINDANG PEGAGAN HAM. H.ABDUL MUTAAL', 'JL. AKSES BANDARA SMB 2. SUKARAME PALEMBANG', '-2.904062969179644', '104.72592361296688', '21:00', '06:00', '', 4, 'resto_151.jpeg', '085279798964', 1, 1),
(152, 'RM Acuan Bak Kut Teh', 'Jl. Dr M Isa No. 5, Ilir Timur 2, Palembang', '-2.966649741028822', '104.76946831225109', '10:00', '22:00', '', 3, 'resto_152.jpg', '081273267788', 1, 1),
(153, 'Sour Sally, PI', 'Palembang Icon Mall G Floor, Jl. POM 9, Ilir Barat 1, palembang', '-2.9786043', '104.74573869999995', '10:00', '21:30', '', 28, 'resto_153.jpg', '081234567821', 1, 1),
(154, 'King Boa, Palembang Icon', 'Palembang Icon, Lt. 3 Eat Street Jl. ANgkatan 45, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 28, 'resto_154.jpg', '087878387830', 1, 1),
(155, 'Waroeng Ombloh Pindang Rajo', 'Jl. Basuki Rahmat, Kemuning, Palembang', '-2.957779720772178', '104.74217186699707', '10:00', '22:00', '', 3, 'resto_155.jpg', '085268138775', 1, 1),
(156, 'Soto Abah Opan, IP', 'Jl. AKBP Haji Muhammad Amin, Belakang International Plaza, Ilir Timur 1, Palembang', '-2.984486516236004', '104.75779297792724', '09:00', '16:00', '', 1, 'resto_156.jpg', '08117808083', 1, 1),
(157, 'Rumah Makan Pagi Sore', 'komleks Rumah Sakit Dr. Muhammad Husin. jl Jendral sudirman kemuning Palembang', '-2.9665951729364424', '104.74934265612796', '22:00', '09:00', '', 4, 'resto_157.jpeg', '07117005544', 1, 1),
(158, 'The Bakery', 'Jl. Bangau No. 171, Ilir Timur 2, Palembang', '-2.9685237', '104.7640318', '07:30', '22:00', '', 28, 'resto_158.jpg', '318940', 1, 1),
(159, 'Mrs. Waffles', 'Palembang Icon Mall, Lantai 2, Jl. POM 9 No.1, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '09:00', '21:00', '', 28, 'resto_159.jpg', '081236745243', 1, 1),
(160, 'Cuppa Coffe Inc, PI', 'Palembang Icon,Lt. 1 Unit No. L1.3 Jl.POM 9, Ilir Barat 1 Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 28, 'resto_160.jpg', '5649326', 1, 1),
(161, 'Bakie Aling', 'Jl. M Isa Lr. Cinta Damai, Taksam, Ilir Timur 2, Palembang', '-2.96597238620601', '104.76995613901568', '11:00', '21:00', '', 3, 'resto_161.jpg', '085283889999', 1, 1),
(162, 'Baso Solo Swalayan, bangau', 'JL. Bangau No. 168 (Depan SMU Xav.I), Ilir Timur 2, Palembang', '-2.966993', '104.76366269999994', '07:30', '18:00', '', 9, 'resto_162.jpg', '0711360324', 1, 1),
(163, 'Warung Teras Soto Betawi', 'Jl. Dwikora No. 1234, Ilir Barat 1, Palembang', '-2.9735403474374156', '104.74264335645296', '09:00', '21:00', '', 0, 'resto_163.jpg', '082159419616', 1, 1),
(164, 'Raja Sate', 'jl veteran 20 ilir ilir timur 1 palembang', '-2.97585162990561', '104.75497184019775', '23:30', '18:00', '', 4, 'resto_164.jpeg', '081373166680', 1, 1),
(165, 'Paman Sam Ice Cream', 'Jl. Mayor Salim Batubara No.224 Depan Best Skip Hotel, Kemuning, Palembang', '-2.959908559142632', '104.75715480059421', '10:00', '17:00', '', 28, 'resto_165.jpg', '081281602729', 1, 1),
(166, 'Natalie Bakery, Radial', 'Jl. MH Dhani Effendy No. 1260-1261, Bukit Kecil, Palembang', '-2.9816007854151514', '104.74859532327878', '08:00', '21:00', '', 28, 'resto_166.jpg', '312193', 1, 1),
(167, 'Pondok Cokelat, ', 'Palembang Square, Lantai 2, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.976175500000001', '104.74183930000004', '10:00', '22:00', '', 28, 'resto_167.jpg', '081167543213', 1, 1),
(168, 'Pempek dan Es Kacang Vico', 'Jl. Letkol Iskandar No.541-542, Bukit Kecil, Palembang', '-2.9831115', '104.75871789999997', '09:00', '21:00', '', 28, 'resto_168.jpg', '316066', 1, 1),
(169, 'Pempek Beringin, Aryaduta', 'Komplek Ruko PS Mall, Jl. POM IX, Ilir Barat 1, Palembang', '-2.976972871285467', '104.7412775718276', '07:00', '23:00', '', 28, 'resto_169.jpg', '085678534211', 1, 1),
(170, 'Ngohiang Ikan Palembang', 'Jl. Pangeran Antasari Lr. Keroncongan No. 19, Ilir Timur 1, Palembang', '-2.984698516238929', '104.76552489215214', '06:00', '19:30', '', 3, 'resto_170.jpg', '082282995240', 1, 1),
(171, 'Soerabi Bandung ELLEN', 'Jl. Letkol Iskandar depan Palembang Indah Mall, Bukit Kecil, Palembang', '-2.9839132571833993', '104.7539188797623', '17:00', '23:30', '', 0, 'resto_171.jpg', '082183370713', 1, 1),
(172, 'Fang\'s Cake Bakery and Pastry', 'Jl. Mayor H Rasyad Nawawi No.247, Ilir Timur 2, Palembang', '-2.978876569534053', '104.76475977909854', '08:00', '19:00', '', 28, 'resto_172.jpg', '310030', 1, 1),
(173, 'Rempah Rempah Restaurant', 'Jl. Sumpah Pemuda M7, Ilir Barat 1, Palembang', '-2.973632424140748', '104.73859421111456', '10:00', '22:00', '', 28, 'resto_173.jpg', '361922', 1, 1),
(174, 'SEKIP. MARTABAK PULAU MAS', 'JL MAY SALIM BATU BARA NO 2298 ILIR TIMUR 1 PALEMBANG', '-2.9706260368939894', '104.75209969626462', '16:00', '22:00', '', 5, 'resto_174.jpeg', '085273328959', 1, 1),
(175, 'Amanda Brownies Basuki Rahmat', 'Jl. Basuki Rahmat, Kemuning, Palembang', '-2.9569483295562646', '104.744462307518', '08:00', '20:30', '', 0, 'resto_175.jpg', '318444', 1, 1),
(176, 'Pempek Tin Tin', 'Jl. Segaran No.66, Ilir Timur 2, Palembang', '-2.9812242033082157', '104.76597892865834', '08:00', '17:00', '', 28, 'resto_176.jpg', '373666', 1, 1),
(177, 'Shinta Rori dan Kue', 'Jl. Dr M Isa No 236C, Ilir Timur2, Palembang', '-2.9654568140055453', '104.76983773558209', '07:00', '16:30', '', 28, 'resto_177.jpg', '721508', 1, 1),
(178, 'Just Juice Ft. Kedai Samyang', 'Jl. Bangau, Ilir Timur 1, Palembang', '-2.966993', '104.76366269999994', '10:00', '16:30', '', 15, 'resto_178.jpg', '081977736885', 1, 1),
(179, 'Raja Cendol', 'Jl. Sesan sani No. 8 Sebelah Masjid Cahaya Imam, Kemuning, Palembang', '-2.95260749493975', '104.75007020635985', '09:30', '16:00', '', 28, 'resto_179.jpg', '08117888524', 1, 1),
(180, 'Dempi Kithcen', 'Jl. Mesuji 2 Blok e2 No.3316 Pakjo, Ilir Barat 1, Palembang', '-2.9316923964419495', '104.7923990693115', '08:00', '16:00', '', 1, 'resto_180.jpg', '085213937200', 1, 1),
(181, 'Rejuice', 'Palembang Icon, Lt 1, Depan Salon Christopher', '-2.978520259380703', '104.74541247632851', '10:00', '21:30', '', 15, 'resto_181.jpg', '125930', 1, 1),
(182, 'Newtown Cafe, Bangau', 'Jl. Bangau, No. 171Palembang', '-2.96605012762338', '104.76342666560663', '07:00', '23:00', '', 15, 'resto_182.jpg', '335874', 1, 1),
(183, 'The Lapan Jam Gold', 'Jl. ANgkatan 66 Lr. Guguk Pauh No. 487 Kemuning, Palembang', '-2.9504479', '104.75560159999998', '08:00', '18:00', '', 0, 'resto_183.jpg', '814475', 1, 1),
(184, 'Max Bistro', 'Jl. R Sukamto Blok B No. 1-4, Ilir Timur 2 Palembang', '-2.951801', '104.75934099999995', '06:00', '23:00', '', 0, 'resto_184.jpg', '817788', 1, 1),
(185, 'Warunk Upnormal', 'Jl. R. Soekamto No. 88, Ilir Timur 2, Palembang', '-2.952105641219261', '104.76085600859847', '07:00', '22:00', '', 28, 'resto_185.jpg', '378681', 1, 1),
(186, 'My Kopi O Palembang', 'Rajawali Komp. Village, Blok BA, BB, BC. Jl. Rajawali, Ilir Timur 2, Palembang', '-2.971780708273736', '104.76434218954932', '09:00', '22:00', '', 0, 'resto_186.jpg', '5630191', 1, 1),
(187, 'Pondok Mak Duren Pakjo', 'Jalan Inspektur Marzuki Lorong Sei Rawas No. 20, Ilir Bart 1, Palembang', '-2.962125', '104.7349044', '06:00', '21:00', '', 28, 'resto_187.jpg', '082187197416', 1, 1),
(188, 'Raymond Lim Ice Cream Sandwich', 'PTC Mall, lt.2 No. 27-29, Jl. R. Sukamto, Ilir Timur 2, Palembang', '-2.950852032524077', '104.76148364550795', '10:00', '21:00', '', 1, 'resto_188.jpg', '081298828055', 1, 1),
(189, 'Lia Pie', 'Palembang Trade Center, Jl. R. Soekamto Blog LG No. 126, depan arena permainan anak, Ilir Timur 2, P', '-2.9508438', '104.76132280000002', '10:00', '21:00', '', 28, 'resto_189.jpg', '081369200252', 1, 1),
(190, 'Sour Sally, PTC', 'PTC Mall Lg Floor No. 12, Jl. R Sukamto Kemuning, Palembang', '-2.9508438', '104.76132280000002', '10:00', '22:00', '', 28, 'resto_190.jpg', '087786543212', 1, 1),
(191, 'New Cubiters', 'Jl. Hangtuah, bukit kecil, palembang', '-2.990730269917179', '104.74568396665654', '15:00', '19:30', '', 28, 'resto_191.JPG', '081272619048', 1, 1),
(192, 'Calais, PI', 'Palembang Icon, Lantai 3, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.978519254911104', '104.74541214105238', '10:00', '22:00', '', 15, 'resto_192.jpg', '000001', 1, 1),
(193, 'Warung Teras Soto Betawi', 'JL. Dwikora No.1234, Ilir Barat 1, Palembang ', '-2.9754234', '104.74643600000002', '09:00', '21:00', '', 1, 'resto_193.jpg', '087875797053', 1, 1),
(194, 'DImsum Choice Palembang', 'Jl. Gajah Mada, Bukit Kecil, Palembang', '-2.9900359', '104.74720219999995', '10:00', '20:00', '', 28, 'resto_194.jpg', '082380032811', 1, 1),
(195, 'Churros Chocoll', 'Jl. Hangtuah, Depan Gereja Silom, Bukit Kecil, Palembang', '-2.9926374', '104.74703580000005', '15:00', '20:00', '', 28, 'resto_195.jpg', '081273368890', 1, 1),
(196, '1001TASTE', 'Jl. Hangtuah, Bukit Kecil, Palembang', '-2.9926374', '104.74703580000005', '16:00', '19:00', '', 1, 'resto_196.jpg', '085767024234', 1, 1),
(197, 'Aice', 'Jl. Inspektur Marzuki Lr. Sei Leko No. 327 ( Depan Masjid Nurul Falah), Ilir Timur Barat 1, Palemban', '-2.961954860380979', '104.73196091321415', '06:00', '22:00', '', 28, 'resto_197.jpg', '081277766691', 1, 1),
(198, 'Bakpao Karakter ( Karapao )', 'Jl. Demang Lebar Daun No.89, Area PT PDPDE Hilir, lantai 2, Ilir Barat 1, Palembang', '-2.972901121916183', '104.72979234929039', '08:00', '17:00', '', 1, 'resto_198.jpg', '081278351515', 1, 1),
(199, 'Ngemiltula', 'Jl. Letnan Murod, Lr. damai rt 11/04 No. 850, km 5, Alang-alang Lebar, Palembang', '-2.954871000000001', '104.73003300000005', '10:00', '22:00', '', 28, 'resto_199.jpg', '082182897131', 1, 1),
(200, 'Caffe Ine', 'Jl. Kapten Anwar Arsyad Blok F No. 10, Ilir Barat 1, Palembang', '-2.967422899999999', '104.72486989999993', '15:00', '22:00', '', 28, 'resto_200.jpg', '08982020106', 1, 1),
(201, 'Salad Buah Bu Alin', 'Jl. Kijang Mas Blok  E15 Demang Lebar Daun, Ilir Barat 1, Palembang', '-2.9768058', '104.72357209999996', '10:00', '20:00', '', 1, 'resto_201.jpg', '08127847265', 1, 1),
(202, 'GLAM dehouse', 'Jl. Mandi Api 1 No. 1807, Alang-alang Lebar, palembang', '-2.9552384552675424', '104.72524150688469', '10:00', '22:00', '', 28, 'resto_202.jpg', '5614236', 1, 1),
(203, 'Paman Sam Ice Cream', 'Jl. Mayor Salim Batu Bara No. 224 Depan Best Skip Hotel, Kemuning, Palembang', '-2.959600509912598', '104.75668795006072', '17:00', '10:00', '', 1, 'resto_203.jpg', '081281602729', 1, 1),
(204, 'Tebu Murni Si Tabu', 'Jl. Radial, Bukit Kecil, Palembang', '-2.9823979200336126', '104.74915632970146', '23:00', '16:00', '', 15, 'resto_204.jpg', '081373837343', 1, 1),
(205, 'Arimaya Ice Clan', 'Jl. Demang Lebar Daun No. 2981, Ilir Barat 1, Palembang', '-2.986326857488744', '104.72470206931155', '11:00', '21:30', '', 28, 'resto_205.jpg', '081274305671', 1, 1),
(206, 'Martabak Brownies Kang Anan, Kenten', 'Jl. MP Mangkunegara, Kalidoni, Palembang', '-2.941391854576799', '104.7674813306885', '16:00', '23:00', '', 1, 'resto_206.jpg', '08538198257', 1, 1),
(207, 'Oline Kitchen ( Vegetarian )', 'Jl. MP Mangkunegara no.01, Ilir Timur 2, Palembang', '-2.9411821358410704', '104.76747698200074', '09:00', '19:00', '', 1, 'resto_207.jpg', '08992357380', 1, 1),
(208, 'Roti Bakar Mat Rencong', 'Jl. R.E Martadinata No.21, simpang Gembira, Ilir Timur 2, Palembang', '-2.9717487', '104.78360480000003', '18:00', '23:00', '', 28, 'resto_208.jpg', '082373497276', 1, 1),
(209, 'Es Cappucino Cincau 99', 'Jl. Ariodillah No. 2932 Rt 003 Rw 001, Ilir Timur 1, Palembang', '-2.967310257560993', '104.74055561524005', '08:00', '17:00', '', 1, 'resto_209.jpg', '081277777457', 1, 1),
(210, 'Warung  R', 'Jalan Srijaya Negara, Ilir Barat 1, Palembang', '-2.990056957508223', '104.72731120646813', '10:00', '22:00', '', 28, 'resto_210.jpg', '083177110432', 1, 1),
(211, 'Pondok Rare Rere', 'Jl. Yaktapena 1, Seberang Ulu 2, Palembang', '-2.994590999429882', '104.78154770685433', '09:00', '22:00', '', 0, 'resto_211.jpg', '081379077641', 1, 1),
(212, 'Lil Bite Cakery', 'Jl. Sukamaju, Sukarami, Palembang', '-2.9424492330215544', '104.72900313278808', '08:00', '20:00', '', 28, 'resto_212.jpg', '081273551981', 1, 1),
(213, 'Bakulan Mamih', 'Perumahan Citra Garden H18, Jl. Sapta Marga, Kalidoni, Palembang', '-2.9416967896393857', '104.77727372023764', '09:00', '17:00', '', 28, 'resto_213.jpg', '081294224223', 1, 1),
(214, 'French Bakery & Bistro, Celentang', 'Jl. Brigjen Hasan Kasim blok A 17-18, Kalidoni, Palembang', '-2.948050904944757', '104.7856917762656', '10:00', '22:00', '', 28, 'resto_214.jpg', '825489', 1, 1),
(215, 'Ivege', 'Jalan Putri Rambut Selako No. 300, Ilir Barat II, Palembang', '-2.9908849784284914', '104.7349192418269', '10:00', '21:00', '', 0, 'resto_215.jpg', '085102091633', 1, 1),
(216, 'Kedai Ice TeaTea', 'Jl. Trikora, Ilir Barat 1, Palembang', '-2.9678710878034584', '104.74025507622673', '11:00', '22:00', '', 15, 'resto_216.jpg', '08117814432', 1, 1),
(217, 'Martabak Manis  dua Putra  dua  Putri', 'Jln Ra Abu Samah ( Dekat MM Tiara)  Sukarami palembang', '-2.941868671612061', '104.74395533379902', '16:30', '23:00', '', 5, 'resto_217.jpg', '085269850860', 1, 1),
(218, 'Kampoeng Juice', 'Jl. Sukatani 1, Ilir Timur 2, Palembang', '-2.9324103286552354', '104.76633072855839', '08:00', '21:00', '', 28, 'resto_218.jpg', '081176543212', 1, 1),
(219, 'Eiffel Patisserie and Cafe', 'Jl. Brigjen Hasan Kasim No.6 C, Kalidoni, Palembang', '-2.935905', '104.784718', '10:00', '22:00', '', 28, 'resto_219.jpg', '08998080388', 1, 1),
(220, 'Kusnan Sate Veteran', 'Jl. Veteran ilir timur 1 palembang', '-2.9760770597677646', '104.75485041580805', '10:00', '23:59', '', 4, 'resto_220.jpeg', '082177741167', 1, 1),
(221, 'Sate dan Gulai Kambing Muda Pak Yudi', 'Jl Radial Bukit Kecil Palembang', '-2.9818940127818867', '104.74824605501703', '10:00', '23:30', '', 4, 'resto_221.jpeg', '0711377161', 1, 1),
(222, 'Pawon Anggon', 'Jl. MP Mangkunegara Komplek Musi Palem Indah No. E11 , Ilir Timur 2, Palembang', '-2.9396037249888174', '104.76706123960344', '10:00', '21:30', '', 3, 'resto_222.jpg', '823222', 1, 1),
(223, 'Ma Maison', 'Jl. Letkol Iskandar No. 18, Bukit Kecil, Palembang', '-2.98497842692431', '104.75448864305872', '09:00', '22:00', '', 15, 'resto_223.jpg', '0711362266', 1, 1),
(224, 'Siomay Pondok Cabe', 'Jl. Sukabangun 2, lr masjid , dekat  gedung bdk, Sukarami, Palembang', '-2.928240673822362', '104.74426089901124', '07:30', '21:00', '', 28, 'resto_224.jpg', '085669742250', 1, 1),
(225, 'Rempah Rempah Restaurant', 'Jl. Sumpah Pemudah M7, Ilir Barat 1, Palembang', '-2.973630415192657', '104.73858281172625', '10:00', '22:00', '', 15, 'resto_225.jpg', '0711361922', 1, 1),
(226, 'Pondok Mak Duren, km 7', 'Jl. Kol H Burlian, Sukarmi, Palembang', '-2.938210522118041', '104.72160006458739', '07:30', '17:00', '', 1, 'resto_226.png', '082187987612', 1, 1),
(227, 'French Bakery & Bistro, Plaju', 'Jl.D.I Panjaitan No.1346, Seberang Ulu 2, Palembang', '-2.991179443047855', '104.79482412459265', '10:00', '22:00', '', 28, 'resto_227.jpg', '516212', 1, 1),
(228, 'Warung Rainbow', 'Jl. MP Mangkunegara No. 05A, Ilir Timur 2, Palembang', '-2.9408404876841523', '104.76734231015575', '11:00', '21:00', '', 3, 'resto_228.jpg', '082372780238', 1, 1),
(229, 'Pancake Duren Palembang', 'Jl. Kolonel Sulaiman Amin, Komp. Pos Blok A1 No. 14 Rt 39 Rw 07, Alang-alang Lebar, Palembang', '-2.9442963009681646', '104.70705421559137', '07:00', '20:00', '', 28, 'resto_229.jpg', '082281458138', 1, 1),
(230, 'Eve Donuts', 'Jl. Bougenville 3, sako, Palembang', '-2.9125676344844207', '104.76703804270016', '13:00', '21:00', '', 28, 'resto_230.jpg', '081977797933', 1, 1),
(231, 'Roti Bakar Ihwan', 'Perum Altet TOP Blok 9/15, Seberang Ulu 1, Palembang', '-3.0219472874845916', '104.7819963656982', '07:00', '21:00', '', 28, 'resto_231.jpg', '081277831331', 1, 1),
(232, 'Bang Kumis Rumah Makan', 'jl. veteran no 777 ilir timur 2 palembang', '-2.9756591994115964', '104.76793959580073', '10:00', '23:00', '', 4, 'resto_232.jpeg', '0711364620', 1, 1),
(233, 'Seblak Klenger', 'Jl. Gubernur Haji Achmad Bastari, 15 Ulu, Seberang Ulu 1, Palembang', '-3.026332348280104', '104.78528616995845', '10:00', '18:00', '', 28, 'resto_233.jpg', '082186000262', 1, 1),
(234, 'Pawon Aggon', 'Jln Mp Mangku negara Komplek Musi Palem Indah  No E 11, Ilir Timur 2, palembang', '-2.9396031', '104.76706039999999', '10:30', '21:30', '', 5, 'resto_234.jpg', '0711823222', 1, 1),
(235, 'Brownies Manten Palembang, Matah Merah', 'Jl. Taqwa Mata Merah Lorong RM Iskandar No. 09 A, Kalidoni, Palembang', '-2.9631425656923875', '104.82178077934577', '08:30', '21:30', '', 28, 'resto_235.jpg', '082281136656', 1, 1),
(236, 'Pondok Cokelat, OPI Mall', 'OPI Mall, Lt. Dasar, Jl. Gub H.A Bastari, Seberang Ulu 1, Palembang', '-3.0357176606725025', '104.79210970969234', '10:00', '21:30', '', 28, 'resto_236.jpg', '', 1, 1),
(237, 'Ceto Lemak', 'Jl. Veteran Depan Karunia Motor, Ilir Timur 1, Palembang', '-2.975745271261608', '104.75720900314946', '19:00', '23:30', '', 28, 'resto_237.jpg', '897654', 1, 1),
(238, 'De\' Coco', 'Jl. Onglen No. 1206 Veteran, Ilir Timur 2, Palembang', '-2.9737088', '104.76057679999997', '09:00', '22:00', '', 1, 'resto_238.jpg', '087873700100', 1, 1),
(239, 'Restoran Sumatera', 'Jl. Jend Sudirman No. 906 B-C, Kemuning, Palembang', '-2.978746640873851', '104.7545816808863', '09:00', '22:00', '', 3, 'resto_239.jpg', '354483', 1, 1),
(240, 'Cocca Casual dining', 'Jl. Merbau No.7347, Ilir Timur 2, Palembang', '-2.9739074136788926', '104.76078682579487', '09:00', '22:00', '', 28, 'resto_240.jpg', '081368686767', 1, 1),
(241, 'Es Jagung Wow', 'Jl. Prof KH Zainal Abidin Fikri Sebrang UIN, Kemuning, Palembang', '-2.9625650710059177', '104.74977383491819', '10:00', '16:00', '', 1, 'resto_241.jpg', '', 1, 1),
(242, 'Es Mamat', 'Jl. Kebun Manggis Lapangan Hatta, Ilir Timur 1, palembang', '-2.9770449', '104.75988559999996', '08:00', '17:00', '', 28, 'resto_242.jpg', '547634', 1, 1),
(243, 'ES Jagung Kraton, UIN', 'Jl. Prof KH Zainal Abidin Fikri, seberang UIN, Kemuning, Palembang', '-2.963767299999999', '104.74887460000002', '10:00', '16:00', '', 28, 'resto_243.jpg', '987354', 1, 1),
(244, 'Es Jagung Ubay', 'Jl. Rawa Jaya, Kemuning, Palembang', '-2.960595807747934', '104.75054829842531', '10:00', '16:00', '', 28, 'resto_244.jpg', '089690801922', 1, 1),
(245, 'Warung Opung Lie', 'Jl. Lingkaran  Dempo Luar No. 276 C, Sebelah Bank BNI, Ilir Timur 1, Palembang.', '', '', '10:00', '22:00', '', 15, 'resto_245.jpg', '082213364063', 1, 1),
(246, 'Crepe Signature, PI', 'Palembang Icon Mall, Lantai 3, Jl. Angkatan 45, Ilir barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 1, 'resto_246.jpg', '', 1, 1),
(247, 'Ya Kun Kaya Toast', 'Palembang Icon, Lantai 2 U-37, Jl. POM 9, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 28, 'resto_247.jpg', '5649284', 1, 1),
(248, 'Kedai Sunny', 'Jl. Veteran No. 8D, Ilir Timur 2, Palembang', '-2.975512868611145', '104.76048581319674', '09:00', '18:00', '', 3, 'resto_248.jpg', '351443', 1, 1),
(249, 'GoldFish Snack And Beverrage', 'Jl. Pengadilan No. 749, Ilir Timur 1, Palembang', '-2.9314518', '104.71045579999998', '07:00', '16:00', '', 15, 'resto_249.jpg', '08127332236', 1, 1),
(250, 'MARANGGI WAROENG SATE', 'JL DEMANG LEMBAR DAUN ILIR BARAT 1', '-2.967893111627274', '104.73386038786623', '18:30', '11:30', '', 4, 'resto_250.jpeg', '081271799998', 1, 1),
(251, 'Kantin Echa', 'Jl. Kebun Manggis No. 219, Ilir Timur 1, Palembang', '-2.977573251586317', '104.76134706863695', '07:00', '17:00', '', 3, 'resto_251.jpg', '08127102602', 1, 1),
(252, 'ANGKRINGAN BANGJO', 'JL DEMANG LEBAR DAUN. ILIR TIMUR 1 PALEMBANG', '-2.9682359738310735', '104.73313082701418', '01:00', '05:30', '', 1, 'resto_252.jpeg', '08877700982', 1, 1),
(253, 'Waroeng Kita', 'Pelembang Icon, 2 nd Floor, Jl. POM IX, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '21:00', '', 28, 'resto_253.jpg', '985423', 1, 1),
(254, 'Soewito Sate', 'Angkatan 66 no 17. Kemuning. Palembang', '-2.948440368453326', '104.75302265026244', '09:00', '21:00', '', 4, 'resto_254.jpeg', '082180007534', 1, 1),
(255, 'Chudoku Dessert', 'Palembang Icon, Lantai 1, Jl Angkatan 45 No. 1, Ilir barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '21:30', '', 1, 'resto_255.jpg', '', 1, 1),
(256, 'President Cheese Cake', 'Jl. Geresik Lorong Sawit No. 713 Rt.21, Ilir Timur 2, Palembang', '-2.9634764057136267', '104.7616231332047', '09:00', '17:00', '', 28, 'resto_256.jpg', '08989000565', 1, 1),
(257, 'BASENGLA Resto & Coffee House', 'Jl. Wijaya Kusuma No. 11, Ilir Barat 1, Palembang', '-2.974544727435879', '104.74282337301634', '10:00', '23:00', '', 1, 'resto_257.jpg', '367126', 1, 1),
(258, 'Serra Pizza', 'Jl. Basuki Rahmat No. 1607A, Kemuning, Palembang', '-2.959453866916977', '104.74012467096645', '17:00', '23:00', '', 15, 'resto_258.jpg', '082279580003', 1, 1),
(259, 'Kedai Abah', 'Jl. KH Ahmad Dahlan (Komplek Pasar Gubah), Bukit Kecil, Palembang', '-2.9873787927825854', '104.74681541864993', '08:00', '20:00', '', 15, 'resto_259.jpg', '085769298776', 1, 1),
(260, 'Warung Sate Madura Simpang Bukit', 'jl. Jaksa Agung R Soeprapto 5. ilir Barat 2 Palembang ', '-2.9899826199473423', '104.73572057906802', '09:00', '21:30', '', 4, 'resto_260.jpeg', '0711320607', 1, 1),
(261, 'Randol Raja Cendol', 'Jl.Sersansani No 8 Sebelah Masjid Cahaya Iman, Kemuning, Palembang', '-2.952761363322136', '104.75029930200867', '09:30', '16:00', '', 1, 'resto_261.jpg', '089117888524', 1, 1),
(262, 'Firtst Love Patisserie, PI', 'Palembang Icon, Lantai 2, Jl. POM 9, Ilir Barat 1, palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 1, 'resto_262.jpg', '', 1, 1),
(263, 'Saoeng Kito', 'jl. Demang Lebar Daun No 08 .09 Ilir Barat 1 Palembang', '-2.975543199234884', '104.7257493878052', '10:00', '22:00', '', 4, 'resto_263.jpeg', '0711443998', 1, 1),
(264, 'Pancrepes', 'Palembang Icon, Foodmart Area, Jl. POM 9, Ilir Barat 1, Palembang', '-2.9786043', '104.74573869999995', '10:00', '22:00', '', 1, 'resto_264.jpg', '', 1, 1),
(265, 'Rumah Jus', 'Jl. Letda A. Rozak Depan Lomie Taksam, Ilir Timur 2, Palembang', '-2.9698214885786918', '104.77193149665322', '09:00', '18:30', '', 1, 'resto_265.jpg', '07115625126', 1, 1),
(266, 'Warung HMM', 'Jl. Sultan Mahmud Badaruddin 2, Sukodadi, Alang Alang Lebar, Palembang', '-2.9149750128105993', '104.69837339737137', '07:30', '20:30', '', 3, 'resto_266.jpg', '081263955002', 1, 1),
(267, 'Martabak Bandung Raya, Taman Bukit,  ilir Barat 1 ', 'Jl Srijaya Negara , Taman Bukit, Ilir Barat 1 Palembang', '-2.9925858', '104.72704509999994', '17:00', '22:00', '', 1, 'resto_267.jpg', '082279711171', 1, 1),
(268, 'Dr Ice Cream Roll, PS', 'Palembang Square Mall, Lt.2, Jl. Angkatan 45, Ilir barat 1, palembang', '-2.976175500000001', '104.74183930000004', '10:00', '22:00', '', 1, 'resto_268.jpg', '', 1, 1),
(269, 'Bukit Golf Resort Dan Resort Cafe', 'Jl. AKBP Cek Agus No. 34, Ilir Timur 2, Palembang', '-2.958436851823043', '104.77038398384252', '10:00', '21:00', '', 1, 'resto_269.jpg', '0711721188', 1, 1),
(270, 'Smokey Gellato Nitrogen, PS', 'Palembang Square, lantai 3, Jl. Angkatan 45, Ilir Barat 1. Palembang', '-2.976175500000001', '104.74183930000004', '10:00', '22:00', '', 28, 'resto_270.jpg', '082183645678', 1, 1),
(271, 'Tomiko, PS', 'Palembang Square, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.976175500000001', '104.74183930000004', '10:00', '22:00', '', 1, 'resto_271.jpg', '', 1, 1),
(272, 'Lavida Cake and Pastry', 'Jl. Mayor Ruslan No. 16, Ilir Timur 2, palembang', '-2.965131519995948', '104.7659537084121', '09:00', '18:00', '', 28, 'resto_272.jpg', '081271886998', 1, 1),
(273, 'Warung Fun-Bizz', 'Food Court Palembang Indah mall Lantai 2, jalan Letkol Iskandar, 24 Ilir, Bukit Kecil, Palembang', '-2.9848454', '104.75387060000003', '10:00', '21:00', '', 28, 'resto_273.jpg', '085764699526', 1, 1),
(274, 'Ice Cream Yess', 'Le Garden Food Court Palembang Indah Mall Lantai 2, Jalan Letkol Iskandar, 24 Ilir, Bukit Kecil', '-2.9848454', '104.75387060000003', '10:00', '21:00', '', 1, 'resto_274.jpg', '', 1, 1),
(275, 'Bunny Cafe', 'Le Garden Food Court Palembang Indah Mall Lantai 2, Jalan letkol Iskandar, 24 Ilir, Bukit Kecil', '-2.9848454', '104.75387060000003', '10:00', '21:30', '', 1, 'resto_275.jpg', '', 1, 1),
(276, 'Sour Sally PTC', 'PTC Mall LG Floor No. 12 Jl. R Sukamto, Kemuning,Palembang', '-2.9508438', '104.76132280000002', '10:00', '22:00', '', 15, 'resto_276.jpg', '000009', 1, 1),
(277, 'Kedai Rumah Lamo', 'Jl. radial, Bukit Kecil, Palembang', '-2.9857686450098244', '104.75230213613736', '16:00', '23:30', '', 28, 'resto_277.jpg', '085267603959', 1, 1),
(278, 'Rindu Siomay Dan Batagor Gepeng', 'Jl. R Soekamto, Sebrang PTC, Area Indomaret, Ilir Timur 1, Palembang', '-2.9515395797921284', '104.76277521618158', '08:00', '17:00', '', 15, 'resto_278.jpg', '082181000516', 1, 1),
(279, 'Ice TeaTea Kambang Iwak', 'Jl. Hangtuah, Bukit kecil, Palembang', '-2.9908916528932514', '104.74567055561147', '15:30', '19:30', '', 15, 'resto_279.jpg', '085369902995', 1, 1),
(280, 'Es Koko', 'Dempo Food Court Jalan Lingkaran, 15 Ilir, Ilir Timur 1', '-2.9805688', '104.76508390000004', '09:30', '20:30', '', 1, 'resto_280.jpg', '', 1, 1),
(281, 'Juragan Crepes', 'Halaman Dian Cafe/ Dian Medika Jl. Basuki Rahmat, Kemuning, Palembang', '-2.959123824203024', '104.74050774980697', '11:00', '20:00', '', 28, 'resto_281.jpg', '081273451788', 1, 1),
(282, 'York Coffee Cookery', 'Jl. Basuki Rahmat , Kemuning, palembang', '-2.959964244864688', '104.73881527591857', '10:00', '23:30', '', 28, 'resto_282.jpg', '081379326065', 1, 1),
(283, 'Buble Tea', 'Jl. Tasik Samping Guns Cafe Dan Resto, Bukit Kecil, Palembang', '-2.9906317317055033', '104.74621497762791', '15:30', '18:30', '', 15, 'resto_283.jpg', '082186891584', 1, 1),
(284, 'Tip Top Corner KI', 'Jl. Gajah Mada, Bukit Kecil, Palembang.', '-2.9911892457963183', '104.74522116938101', '15:00', '19:00', '', 15, 'resto_284.jpg', '081379292691', 1, 1);
INSERT INTO `restoran` (`id`, `nama_resto`, `alamat`, `latitude`, `longitude`, `jam_buka`, `jam_tutup`, `deskripsi_resto`, `kategori_resto`, `foto_resto`, `kontak_telepon`, `status`, `is_open`) VALUES
(285, 'Bebek Garang', 'Dermaga Point Palembang, Jl. SMB, Bukit Kecil, Palembang', '-2.991117', '104.76169000000004', '09:00', '22:00', '', 23, 'resto_285.jpg', '0711369495', 1, 1),
(286, 'Chang Tea Palembang', 'PTC Mall LG, Samping Lift, Jl. R. Soekamto, Ilir Timur 2, Palembang', '-7.290191200000002', '112.67498999999998', '10:00', '21:00', '', 15, 'resto_286.jpg', '082112756700', 1, 1),
(287, 'Bakso Bang Udi', 'Jl. R Sukamto, kemuning, Palembang', '-2.959139895998549', '104.73934098888549', '09:00', '22:00', '', 28, 'resto_287.jpg', '081373576664', 1, 1),
(288, 'Aice', 'Jl. Inspektur Marzuki Lr. Sei Leko No 327 Depan Masjid Nurul Falah, Ilir Barat 1, Palembang', '-2.961618511877191', '104.73202171700393', '06:00', '22:00', '', 1, 'resto_288.jpg', '081277766691', 1, 1),
(289, 'Mak Duren Cup Aqiilah', 'Jl. Trikora 3, Lr. Harisan No.3118, Ilir Barat 1, Palembang', '-2.968063947810034', '104.73510523491814', '08:00', '21:00', '', 1, 'resto_289.jpg', '', 1, 1),
(290, 'De Ice, Merdeka', 'Jl.Merdeka No. 1069, Ilir Barat 2, Palembang', '-2.9908919', '104.75192289999995', '09:00', '19:00', '', 28, 'resto_290.jpg', '082182888188', 1, 1),
(291, 'Misyu', 'Jl. Merdeka No. 856, Bukit Kecil, palembang', '-2.9911438', '104.7539878', '13:00', '18:00', '', 28, 'resto_291.jpg', '089615437989', 1, 1),
(292, 'Kedai Bakso Mie Ayam Ice Cream Mas Dedy', 'Jl. Merdeka, Bukit Kecil, Palembang', '-2.9914518805199783', '104.75531067846532', '09:00', '20:00', '', 28, 'resto_292.jpg', '08117810788', 1, 1),
(293, 'Think Thai, Palembang Trade Center', 'Palembang Trade Center, Exhibition Lantai 2 Depan Fun Word, Jl. R Soekamto, Ilir Timur 2, Palembang', '-2.9508948909643484', '104.76144073016371', '10:00', '21:00', '', 1, 'resto_293.JPG', '', 1, 1),
(294, 'Kedai 318', 'Jl. Menumbing No. 175, Ilir Timur 1, Palembang', '-2.9766477339861495', '104.7592711125917', '06:00', '14:30', '', 3, 'resto_294.jpg', '0811782318', 1, 1),
(295, 'Waroeng Mari Kongkow', 'Jl. Pangeran Ario Kesuma Abdurrochim, Bukit Kecil, Palembang', '-2.9916934873205117', '104.75133265526438', '17:00', '22:00', '', 28, 'resto_295.jpg', '082186011386', 1, 1),
(296, 'D\'Creepes', 'Palembang Trade Center, Food Court, Jl. R Soekamto, Ilir Timur 2, Palembang', '-2.9511949', '104.76079700000003', '10:00', '21:00', '', 1, 'resto_296.jpg', '', 1, 1),
(297, 'X.O Suki & Dimsum', 'Palembang Icon Mall, Level 1, Jl. Angkatan 45, Ilir Barat 1, Palembang', '-2.978126842053608', '104.74610046294083', '10:00', '21:30', '', 3, 'resto_297.jpg', '07115649352', 1, 1),
(298, 'DF. Court', 'Jl. Kartini, Depan Gereja Siloam Kambang Iwak, Bukit Kecil, Palembang', '-2.991060869171498', '104.74568405861373', '10:00', '19:30', '', 28, 'resto_298.jpg', '085269977411', 1, 1),
(299, 'Mr Milk', 'Jl.Hangtuah No.12 A, Bukit Kecil, Palembang', '-2.9943034575531176', '104.7486290321549', '11:00', '23:00', '', 28, 'resto_299.jpg', '085268573000', 1, 1),
(300, 'Mie Pangsit Ayam 828', 'Jl. Pipa Reja, Kemuning, Palembang', '-2.945054616703616', '104.75649496835513', '07:00', '19:00', '', 3, 'resto_300.jpg', '081377705029', 1, 1),
(301, 'Pecel Lele Mutiara', 'Jl. Way Hitam, Ilir Barat 1, Palembang', '-2.9635072662458923', '104.72723120819501', '11:00', '22:00', '', 3, 'resto_301.jpg', '081338007559', 1, 1),
(302, 'Rumah Makan Ken Ken', 'Jl. Menumbing No. 29, Ilir Timur 1, Palembang', '-2.976786016193025', '104.75907799354263', '08:00', '21:00', '', 3, 'resto_302.jpg', '358588', 1, 1),
(303, 'Solaria, Palembang Icon', 'PI Mall, Lt 3, Jl. POM IX, Ilir Barat 1, Palembang', '-2.9786859968508823', '104.74587817486872', '10:00', '21:30', '', 3, 'resto_303.jpg', '', 1, 1),
(304, 'Eat Cafe Resto', 'Jl. Hangtuah No.4, Bukit Kecil, Palembang', '-2.9933766798699954', '104.74775463201604', '16:00', '23:59', '', 28, 'resto_304.jpg', '322198', 1, 1),
(305, 'Pancake Durian Maknyuzz', 'Jl. Letnan Kasnariansyah, Lorong Makmur No. 1402, Ilir Barat 1, Palembang', '-2.9590551', '104.73260519999997', '09:00', '17:00', '', 28, 'resto_305.jpg', '085268002002', 1, 1),
(306, 'Sop Buah Alvaro Bandung', 'Jl. Swadaya, Kemuning, Palembang', '-2.947758251071648', '104.74635009709777', '08:00', '18:00', '', 1, 'resto_306.jpg', '', 1, 1),
(307, 'Bubur Montok', 'Jl. Jend. Bambang Utoyo, area Pd. Bonie, Ilir Timur 2, Palembang', '-2.9691536251091084', '104.77892771957409', '08:00', '18:00', '', 1, 'resto_307.png', '', 1, 1),
(308, 'Classie Dimsum', 'Classie Hotel, Jl. Rajawali, Ilir Timur 2, Palembang', '-2.9752899', '104.76469099999997', '09:00', '22:00', '', 3, 'resto_308.jpg', '359333', 1, 1),
(309, 'Ice & Bean', 'Jalan Much. Prabu mangkuNegara, Ilir Timur II, Palembang', '-2.943459427020771', '104.76693554603276', '11:30', '20:30', '', 1, 'resto_309.jpg', '08117424943', 1, 1),
(310, 'Indie & Cakes', 'Jl. Demang Lebar Daun, Ilir Barat 1, Palembang', '-2.9865498380575306', '104.72427094791578', '09:00', '22:00', '', 1, 'resto_310.jpg', '081271116895', 1, 1),
(311, 'Machishopa Mochi Ice Cream', 'Jl. Srijaya Negara, Ilir Barat1, Palembang', '-2.991037309100816', '104.72810514033654', '10:00', '19:30', '', 28, 'resto_311.jpg', '312374', 1, 1),
(312, 'Pancake Cekni', 'Jalan Ratu Sianum No.8,3 Ilir, Ilir Timur II', '-2.975591433681355', '104.78647126144642', '09:00', '19:00', '', 28, 'resto_312.jpg', '082279448934', 1, 1),
(313, 'Jade Garden', 'Jl. Lingkaran Luar No. 453B, Ilir Timur 1, Palembang', '-2.980675035251388', '104.76455429804992', '07:00', '13:00', '', 3, 'resto_313.jpg', '319626', 1, 1),
(314, 'Des\'s Cafe & Sandwich', 'Jl. A. Yani No.89-90 Seberang Ulu 1, Palembang', '-2.996619224602458', '104.77491691114915', '10:00', '22:00', '', 1, 'resto_314.jpg', '518889', 1, 1),
(315, 'Orange Bakerry and Cake', 'Jl. Ahmad Yani No. 435-436, Seberang Ulu 1, Palembang', '-2.996794909456443', '104.77444742386479', '10:00', '22:00', '', 28, 'resto_315.jpg', '5883300', 1, 1),
(316, 'Pancake Durian Alleta', 'Jalan Inspektur Marzuki, siring Agung, Ilir Barat 1, Palembang', '-2.9621297129937365', '104.71890825662229', '10:30', '17:00', '', 28, 'resto_316.jpeg', '784356', 1, 1),
(317, 'Es Bang Teyo', 'Jalan Srijaya Negara, Ilir Barat 1, palembang', '-2.9942301420903394', '104.72641534865716', '10:00', '17:30', '', 28, 'resto_317.png', '345897', 1, 1),
(318, 'Es Bubur Sumsum Mang Ujuk', 'Jl. Sultan M. Mansyur, Ilir Barat 1, Palembang', '-3.0004699', '104.74065380000002', '11:00', '16:00', '', 28, 'resto_318.jpg', '085369966881', 1, 1),
(319, 'Resto Zamzam', 'Jl. MP Mangkunegara, Ilir Timur 2, Palembang', '-2.936467656412475', '104.76790613544313', '09:30', '21:00', '', 28, 'resto_319.jpg', '087776744593', 1, 1),
(320, 'Donat Madu Cihanjuang, Kenten', 'Jl. Mp Mangkunegara, Ilir Timur 2, palembang', '-2.934539', '104.76878590000001', '13:00', '18:00', '', 28, 'resto_320.jpg', '085263800800', 1, 1),
(321, 'Pondok Pempek & Kue Salsa', 'Jl. Sultan Moh. Mansyur, Bukit Lama, Ilir Barat1, palembang', '-3.0025893', '104.73193319999996', '08:00', '22:00', '', 1, 'resto_321.jpg', '082175650774', 1, 1),
(322, 'Warung Pempek Cek Ti', 'Jl. Sultan M. Mansyur, Ilir Barat 1, palembang', '-3.002880576131443', '104.73230676554567', '06:00', '22:00', '', 28, 'resto_322.jpg', '081273271973', 1, 1),
(323, 'Bakoel Durian, SMB 2', 'Jl. Sultan Mahmud Badarudin 2 km 11, Sukarami, Palembang', '-2.912932887789094', '104.6874764850586', '09:00', '18:00', '', 1, 'resto_323.jpg', '085267008052', 1, 1),
(324, 'Lacasa Pizza', 'Jalan Mayor Ruslan, 9 Ilir, Ilir Timur II, Palembang', '-2.96636943814376', '104.76304392792508', '11:00', '21:30', '', 20, 'resto_324.jpg', '082375700052', 1, 1),
(325, 'Vasto Restaurant and Bar', 'Komplek Mall Rajawali Village, Blok A1, Jl. Rajawali, Ilir Timur 2, Palembang', '-2.9718867266957627', '104.76428252030723', '16:00', '23:59', '', 20, 'resto_325.jpg', '5630341', 1, 1),
(326, 'Abang Pizza & Coffee', 'Jl. Basuki Rahmat No.15, Kemuning, Palembang', '-2.9590159', '104.74038410000003', '12:00', '23:30', '', 1, 'resto_326.png', '085383822121', 1, 1),
(327, 'Rumah Pizza', 'Jl. DI Panjaitan, Seberang Ulu 2, Palembang', '-2.9912340929113928', '104.79462292006838', '11:00', '21:00', '', 20, 'resto_327.jpg', '081373330744', 1, 1),
(328, 'uncle Loe, OPI Mall', 'Opi Mall, Lt.Dasar Blok A9, Jl. Gub H Achmad Bastari, Seberang Ulu 1, Palembang', '-3.0357946549441825', '104.79200415560308', '10:00', '22:00', '', 20, 'resto_328.jpg', '5624050', 1, 1),
(329, 'Da Vinci Lounge and Bar', 'Hotel Sahid Imara, Lantai 7, Jl. Jend Sudirman No. 1111A, Ilir Timur 1, Palembang', '-2.971850292495875', '104.75088075222311', '17:00', '23:59', '', 20, 'resto_329.jpg', '371000', 1, 1),
(330, 'Reload Kitchen', 'Jl. Bay Salim, Kemuning, Palembang', '-2.9717727634135938', '104.75950308559732', '09:00', '22:00', '', 20, 'resto_330.jpg', '356588', 1, 1),
(331, 'Milano Pizza', 'Hotel Wisata, Jl. Letkol Iskandar, Ilir Timur 1, Palembang', '-2.9821757', '104.76024719999998', '09:00', '22:00', '', 20, 'resto_331.jpg', '360035', 1, 1),
(332, 'Kantin Hasanah', 'Jl. Jaksa Agung R Soeprapto Lr. Hasana, Ilir Barat 1, Palembang', '-2.987418275540382', '104.73175458990477', '09:00', '21:00', '', 20, 'resto_332.jpg', '7776111', 1, 1),
(333, 'Pizza La Hap, Giant Plaju', 'Giant Plaju, DI Panjaitan, Seberang Ulu 2, Palembang', '-2.993361', '104.79691000000003', '10:00', '21:30', '', 1, 'resto_333.jpg', '', 1, 1),
(334, 'Mie Pangsit Amuk', 'Jl. Kapten Marzuki, Depan Hotel Imara, Ilir Timur 1, Palembang', '-2.971754512703896', '104.75064489444276', '06:00', '12:00', '', 10, 'resto_334.jpg', '082130918559', 1, 1),
(335, 'Warung Gang Buntu', 'Jl. Sersan Wahab No.2046, Gang Buntu, Ilir Timur 1, Palembang', '-2.9726411', '104.75355990000003', '07:00', '16:30', '', 10, 'resto_335.jpg', '355104', 1, 1),
(336, 'Lanank Ramen', 'Jl. Veteran No.128, Ilir Timur 1, Palembang', '-2.975936323515785', '104.75825545438374', '10:00', '23:00', '', 10, 'resto_336.jpg', '085267272440', 1, 1),
(337, 'Pondok Mie Ayam Fendy', 'Jl. Aiptu KS Tubun, Ilir Timur 1, Palembang', '-2.9784128139417394', '104.76003269577029', '07:30', '18:00', '', 0, 'resto_337.JPG', '081367071709', 1, 1),
(338, 'Sari Rasa SEJAK 1970', 'Jl. T.P. Rustam Effendi No.538, Sebelah PD. Sumber Mas/ Optik Bintang, Ilir Timur 1, Palembang', '-2.9858953585345347', '104.76254433341296', '08:00', '17:30', '', 1, 'resto_338.jpg', '081277767772', 1, 1),
(339, 'Mie Ayam dan Bakso Atuka', 'Jalan Rama Raya Kec Alang-alang Lebar, Palembang', '-2.9236785149299305', '104.7032495944427', '10:00', '21:00', '', 10, 'resto_339.jpg', '082177780846', 2, 1),
(340, 'Mie Pangsit Aang, Sudirman', 'Jl. Jendral Sudirman Samping Sekolah Methodist, Ilir Barat 1, Palembang', '-2.9647094267008756', '104.74623129367069', '06:30', '21:00', '', 10, 'resto_340.jpg', '085268803688', 1, 1),
(341, 'Pondok Sri Tanjung, Kamboja', 'Jl. Mayor Santoso No. 966-967, Samping Alfamart, Ilir Timur 1, Palembang', '-2.968377', '104.74653839999996', '09:00', '16:00', '', 23, 'resto_341.jpg', '081367251459', 1, 1),
(342, 'Srikandi Ayam Penyet', 'Jl. Lebak Rejo No. 6-7 Rt 14 Rw.05, Sekip Jaya, Kemuning, Palembang', '-2.962079875037775', '104.7583517524231', '10:00', '21:00', '', 23, 'resto_342.jpeg', '082182562400', 1, 1),
(343, 'Mie Ayam dan Bakso Atuka,', 'Jln Rama Raya Kec  Alang-Alang Lebar', '-2.925285744430594', '104.70240201639399', '10:00', '21:00', '', 1, 'resto_343.jpg', '082177780846', 2, 1),
(344, 'Mie Ayam Dan Bakso Atuka', 'Jl. Rama Raya Kec Alang-Alang Lebar', '-2.925821487085574', '104.70156516718134', '10:00', '21:00', '', 9, 'resto_344.jpg', '082177780846', 2, 1),
(345, 'Sajian Sunda Sambara Resto, PI', 'Palembang Icon Mall, Lantai 1 No.27B, Jl. Angkatan 45, Ilir Barat 1, Palembang (0711)5649404', '-2.9785828713168194', '104.74567432698359', '10:00', '22:00', '', 23, 'resto_345.jpg', '5649404', 1, 1),
(346, 'Mie Bakso', 'Jln Rama Raya Kec Alang-alang Lebar, Palembang', '-2.9257786276825875', '104.70205869364008', '10:00', '21:00', '', 1, 'resto_346.jpg', '986762', 2, 1),
(347, 'Mr. Mus Pedas Joedes', 'Jl. Bendungan Lr. Mandala No.05/147, SMP/SMK TRisula, Kemuning Palembang', '-2.9702381796585735', '104.75988280807337', '08:00', '16:00', '', 10, 'resto_347.jpg', '085266245678', 1, 1),
(348, 'Mie Ayam Dan Bakso ATUKA', 'Jl. Rama Raya Kec Alang-alang Lebar, Palembang', '-2.923635655445051', '104.70252003359064', '10:00', '21:00', '', 10, 'resto_348.jpg', '082177780846', 1, 1),
(349, 'Kedai Vita Nona', 'Jl.Kamboja, Simpang 5 Universutas Tridinanti, Ilir Timur 1, Palembang', '-2.970574192256959', '104.74611006613156', '17:00', '23:59', '', 10, 'resto_349.jpg', '082175060025', 1, 1),
(350, 'Ayam Gepuk Pak Gembus, Sekip', 'Jl. Mayor Salim Batubara No.225, Sekip Tengah, Samping Hotel Best Skip, Kemuning, Palembang', '-2.9601019661144754', '104.75728003507447', '11:00', '21:00', '', 0, 'resto_350.jpg', '081274624417', 1, 1),
(351, 'Pempek Ayuk Umi', 'Jl. Ampibi no 2213 Rt.35 Rw.10 Kel 20 Ilir Sekip Ujung Palembang', '-2.9538941453304437', '104.75476369895023', '09:00', '21:00', '', 11, 'resto_351.jpeg', '081271131413', 1, 1),
(352, 'JUN NJAN SEAFOOD Restaurant', 'Jln. HM. Rasyad Nawawi No. 510-511 ( Komplek Graha Maju Motor), IlirTimur 2, Palembang (0711)355001', '-2.9769600588800014', '104.76452762082363', '11:00', '22:00', '', 23, 'resto_352.jpg', '355001', 1, 1),
(353, 'Lies Resto', 'Jl. Torpedo No.78, Sekip Ujung, Kemuning, Palembang 081372004747', '-2.9583893', '104.75422920000005', '11:00', '20:00', '', 23, 'resto_353.jpg', '081372004747', 1, 1),
(354, 'Pondok Makan Cetarrr', 'Jl. Pimpong, Lorok Pakjo, Ilir Barat 1, Palembang', '-2.975944240848354', '104.74093155767218', '10:00', '23:00', '', 23, 'resto_354.jpg', '081369227500', 1, 1),
(355, 'Rumah Makan Seleroh Kito', 'Jl. Pimpong Blok E No.23 samping PS Mall, Ilir Barat 1, Palembang (0711)316025', '-2.9762121', '104.74091010000006', '08:00', '22:00', '', 23, 'resto_355.jpg', '316025', 1, 1),
(356, 'Ayam Goreng 288', 'Jl. Lingkaran 1 Dempo Luar No.386B-C, Ilir Timur 1, Palembang', '-2.9812491592604053', '104.7628442554726', '11:00', '21:30', '', 23, 'resto_356.jpg', '359516', 1, 1),
(357, 'Pondok Cabe-Cabean', 'Jl. Brigjen Pol Abdullah Kadir, Ilir Timur 1, Palembang 085100019989', '-2.946849541996456', '104.76775227874305', '10:00', '22:00', '', 23, 'resto_357.jpg', '085100019989', 1, 1),
(358, 'B Exprezz Bu Vivi', 'Jl. Rimba Kemuning No.23, Kemuning, Palembang (0711) 5611082', '-2.9556500044753786', '104.74501116986698', '07:00', '18:00', '', 23, 'resto_358.jpg', '5611082', 1, 1),
(359, 'Bebek Jumbo dan Seafood', 'Jl. Basuki Rahmat No.907 Rt.10 Rw.10, Kemuning, Palembang 081272406292', '-2.9576499701350896', '104.7418180618497', '10:00', '22:00', '', 23, 'resto_359.jpg', '081272406292', 1, 1),
(360, 'Ayam Bakar Soponyono', 'Jalan Demang Lebar Daun No.65, Ilir Timur 1, Palembang (0711) 315774', '-2.9615341096965713', '104.73783827815714', '10:00', '20:30', '', 23, 'resto_360.jpg', '315774', 1, 1),
(361, 'Waroeng Ayam Geprek Palembang', 'Jl. Demang Lebar Daun, Depan RS Bunda, Ilir Barat 1, Palembang 081367282727', '-2.9677114845445685', '104.73390891831582', '10:00', '22:00', '', 23, 'resto_361.JPG', '081367282727', 1, 1),
(362, 'Nasi Pedas Tunjuk Tunjuk', 'Palembang Trade Center, Lntai 2, Food Court, Jl. R. Soekamto, Ilir Timur 2, Palembang (0711) 373978', '-2.9507221961649965', '104.76121022176517', '10:30', '21:00', '', 23, 'resto_362.jpg', '373978', 1, 1),
(363, 'Pindang Yess', 'Jl. Kapten Anwar Arsyad, Ilir Barat 1, Palembang', '-2.971280095298913', '104.72819852138741', '09:00', '22:00', '', 23, 'resto_363.jpg', '08787335551', 1, 1),
(364, 'Pecel Lele Amos', 'Jl. Sei Hitam No.1233, Ilir Barat 1, Palembang', '-2.965137427640132', '104.72563704847948', '10:00', '21:00', '', 23, 'resto_364.PNG', '414925', 1, 1),
(365, 'EFC', 'Jl. MP. Mangkunegara No.8 ( Samping Bensin Kenten Permai ), Ilir Timur 2, Palembang 085273020117', '-2.934539', '104.76878590000001', '09:00', '18:00', '', 23, 'resto_365.jpg', '085273020117', 1, 1),
(366, 'AYAM BAKAR BUMBU', 'JL. DI. PANJAITAN NO.10A RT. 006 RW. 003  KEL. BAGUS KUNING. KEC. PLAJU', '-6.2087634', '106.84559899999999', '10:00', '08:00', 'CATERING DAN DELIVERI', 23, 'resto_366.jpg', '08877906645', 1, 1),
(367, 'NasiBox MUEN', 'Jalan Anggrek 3, Komplek Kencana Damai Blok N.17', '-6.2087634', '106.84559899999999', '07:00', '20:00', 'NasiBox MU& sangat cocok buat anda yang ingin makan enak, murah serta kekinian. Makanan yang kami sajikan sangat enak dan cocok untuk semua lidah.', 22, 'resto_367.jpg', '081373101169', 1, 1),
(368, 'Agkringan Mang Ndra', 'jln rawajaya 2 no 277 rt.05 rw.02', '-2.9609869', '104.750269', '08:30', '21:30', 'Agkringan mang_ndra menyediakan menu pecell  ayam,pcel lele &model ikan dgn hrga ank kuliahan.....1Porsi pcel ayam+nasi 10rb...Lele 9rb dan model ikan 6rb....djamin utk rasa dan kuantitas masakan bintang 5...Payo dulur2 sepalembang hangett utk di orderr....', 1, 'resto_368.jpg', '08992162660', 1, 1),
(369, 'MARTABAK KAPTEN KENTEN', 'Jl. M.P. Mangkunegara Depan Giant Kenten', '-2.941399946954413', '104.7677270687866', '16:00', '22:00', 'Martabak Kapten Kenten menyediakan martabak kekinian dengan aneka toping lezat aneka coklat, keju dan lain-lain berbagai toping lezat seperti toblerone, silverqueen, kitkat greentea, marshmallow, dairy milk, timtam red velvet, ovomaltine dan masih banyak lagi.', 5, 'resto_369.jpg', '082177799744', 1, 1),
(370, 'Resto Mama', 'perintis', '-5.142187', '119.48266510000008', '00:00', '23:59', '', 1, 'resto_370.png', '082349477740', 1, 1),
(372, 'Owner Fried Chicken', 'Rappocini, Makassar City, South Sulawesi 90222, Indonesia', '-6.2087634', '106.84559899999999', '01:00', '23:59', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, ' resto_370.png', '081234567895', 1, 1),
(373, 'Best Seafood', 'Tamalanrea, Makassar City, South Sulawesi 90241, Indonesia', '-5.107046899999999', '119.48176519999993', '01:00', '23:59', 'mantap', 1, 'resto_373.png', '081234567896', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `saldo` int(11) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`nomor`, `id_user`, `saldo`, `update_at`) VALUES
(21, 'D74', 0, '2018-08-29 08:22:16'),
(20, 'D73', 96, '2018-08-30 13:30:36'),
(19, 'P1', 100, '2018-08-29 09:00:41'),
(18, 'D72', 259, '2018-08-29 09:03:16'),
(22, 'T1', 0, '2018-08-30 08:17:34'),
(23, 'M36', 0, '2018-08-30 08:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `status_driver`
--

CREATE TABLE `status_driver` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_driver` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_driver`
--

INSERT INTO `status_driver` (`id`, `status_driver`) VALUES
(1, 'Bebas'),
(2, 'Diterima'),
(3, 'Bekerja'),
(4, 'Berhenti Bekerja'),
(5, 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `status_topup`
--

CREATE TABLE `status_topup` (
  `id` int(11) NOT NULL,
  `status_topup` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_topup`
--

INSERT INTO `status_topup` (`id`, `status_topup`) VALUES
(1, 'belum terverifikasi'),
(2, 'sukses'),
(3, 'gagal');

-- --------------------------------------------------------

--
-- Table structure for table `status_transaksi`
--

CREATE TABLE `status_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_transaksi` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_transaksi`
--

INSERT INTO `status_transaksi` (`id`, `status_transaksi`) VALUES
(6, 'start'),
(7, 'finish'),
(5, 'cancel'),
(4, 'reject'),
(3, 'accept'),
(2, 'Menawar'),
(1, 'mencari');

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE `status_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_user` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`id`, `status_user`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif'),
(3, 'Banned');

-- --------------------------------------------------------

--
-- Table structure for table `status_withdraw`
--

CREATE TABLE `status_withdraw` (
  `id` int(11) NOT NULL,
  `status_withdraw` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_withdraw`
--

INSERT INTO `status_withdraw` (`id`, `status_withdraw`) VALUES
(1, 'belum terverifikasi'),
(2, 'sukses'),
(3, 'gagal');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_ktp` varchar(500) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `rating` double NOT NULL,
  `reg_id` varchar(250) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1/0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teknisi_in_jenis_service`
--

CREATE TABLE `teknisi_in_jenis_service` (
  `id_teknisi` varchar(10) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknisi_in_jenis_service`
--

INSERT INTO `teknisi_in_jenis_service` (`id_teknisi`, `id_service`) VALUES
('T1', 1),
('T1', 2),
('T1', 3),
('T1', 4),
('T1', 5),
('T1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_transaksi`
--

CREATE TABLE `tipe_transaksi` (
  `id` int(11) NOT NULL,
  `tipe_transaksi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_transaksi`
--

INSERT INTO `tipe_transaksi` (`id`, `tipe_transaksi`) VALUES
(1, 'pelanggan bayar order'),
(2, 'pelanggan bayar order (m-pay)'),
(3, 'pelanggan beri tips (m-pay)'),
(4, 'topup saldo'),
(5, 'ojek potong order'),
(6, 'ojek terima pembayaran order(m-pay)'),
(9, 'denda'),
(7, 'ojek terima bonus'),
(8, 'ojek terima tips'),
(10, 'withdraw'),
(11, 'penambahan manual admin'),
(12, 'pengurangan manual admin');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_voucher`
--

CREATE TABLE `tipe_voucher` (
  `id` int(11) NOT NULL,
  `tipe_voucher` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_voucher`
--

INSERT INTO `tipe_voucher` (`id`, `tipe_voucher`) VALUES
(1, 'diskon persen'),
(2, 'diskon nominal'),
(3, 'dapat saldo');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `pelanggan_id` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `jam_buka` varchar(10) NOT NULL,
  `jam_tutup` varchar(10) NOT NULL,
  `kategori_toko` int(11) NOT NULL,
  `kontak_telepon` varchar(15) NOT NULL,
  `foto_toko` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_rekening` varchar(30) NOT NULL,
  `bank` varchar(20) NOT NULL DEFAULT 'mandiri',
  `atas_nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`nomor`, `id_user`, `waktu`, `no_rekening`, `bank`, `atas_nama`, `jumlah`, `bukti`, `status`) VALUES
(250, 'P1', '2018-08-29 09:00:41', '128828', 'Bank BCA', 'tester', 100, 'P1_18181818AugAug2929_151508085757.jpg', '2'),
(249, 'P1', '2018-08-29 09:00:33', 'tester', 'Bank BCA', 'tester', 100, 'P1_18181818AugAug2929_151508084848.jpg', '3'),
(251, 'D72', '2018-08-29 11:40:33', '123456789', 'Bank BCA', 'jjsjs', 300, 'D72_18181818AugAug2929_181808083333.jpg', '1'),
(252, 'D73', '2018-08-30 13:30:36', '123456789876', 'Bank BCA', 'driver car', 100, 'D73_18181818AugAug3030_202008080505.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `id_driver` varchar(10) DEFAULT NULL,
  `order_fitur` tinyint(4) NOT NULL,
  `start_latitude` varchar(20) NOT NULL,
  `start_longitude` varchar(20) NOT NULL,
  `end_latitude` varchar(20) NOT NULL,
  `end_longitude` varchar(20) NOT NULL,
  `jarak` double NOT NULL,
  `harga` int(11) NOT NULL,
  `waktu_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `waktu_selesai` timestamp NULL DEFAULT NULL,
  `alamat_asal` varchar(500) NOT NULL,
  `alamat_tujuan` varchar(500) NOT NULL,
  `kode_promo` varchar(50) DEFAULT NULL,
  `kredit_promo` int(11) NOT NULL DEFAULT '0',
  `biaya_akhir` int(11) DEFAULT '0',
  `pakai_mpay` tinyint(1) NOT NULL DEFAULT '0',
  `rate` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mbox`
--

CREATE TABLE `transaksi_detail_mbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `tanggal_pelayanan` date NOT NULL,
  `jam_pelayanan` varchar(10) NOT NULL,
  `waktu_pelayanan` varchar(20) NOT NULL,
  `nama_pengirim` varchar(100) DEFAULT NULL,
  `telepon_pengirim` varchar(15) DEFAULT NULL,
  `kendaraan_angkut` int(11) NOT NULL,
  `asuransi` int(11) DEFAULT NULL,
  `shipper` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mbox_destinasi`
--

CREATE TABLE `transaksi_detail_mbox_destinasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `detail_lokasi` varchar(200) DEFAULT '-',
  `nama_penerima` varchar(50) DEFAULT NULL,
  `telepon_penerima` varchar(15) DEFAULT NULL,
  `instruksi` varchar(500) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mfood`
--

CREATE TABLE `transaksi_detail_mfood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  `foto_struk` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mmart`
--

CREATE TABLE `transaksi_detail_mmart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `estimasi_biaya` int(11) NOT NULL,
  `harga_akhir` int(11) NOT NULL,
  `foto_struk` varchar(50) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mmassage`
--

CREATE TABLE `transaksi_detail_mmassage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal_pelayanan` date NOT NULL,
  `massage_menu` varchar(50) NOT NULL,
  `jam_pelayanan` varchar(10) NOT NULL,
  `lama_pelayanan` int(11) NOT NULL,
  `pelanggan_gender` int(11) NOT NULL,
  `prefer_gender` int(1) NOT NULL,
  `catatan_tambahan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_msend`
--

CREATE TABLE `transaksi_detail_msend` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` varchar(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nama_pengirim` varchar(100) DEFAULT NULL,
  `telepon_pengirim` varchar(15) DEFAULT NULL,
  `nama_penerima` varchar(100) DEFAULT NULL,
  `telepon_penerima` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mservice_ac`
--

CREATE TABLE `transaksi_detail_mservice_ac` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `mservice_jenis` int(11) NOT NULL,
  `ac_type` int(11) NOT NULL,
  `tanggal_pelayanan` varchar(20) NOT NULL,
  `jam_pelayanan` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `residential_type` varchar(20) NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail_mstore`
--

CREATE TABLE `transaksi_detail_mstore` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_driver`
--

CREATE TABLE `transaksi_driver` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `debit` int(11) NOT NULL DEFAULT '0',
  `kredit` int(11) NOT NULL DEFAULT '0',
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_transaksi` int(11) NOT NULL,
  `tipe_transaksi` char(2) NOT NULL,
  `saldo` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pelanggan`
--

CREATE TABLE `transaksi_pelanggan` (
  `nomor` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `debit` int(11) NOT NULL DEFAULT '0',
  `kredit` int(11) DEFAULT '0',
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_transaksi` int(11) DEFAULT NULL,
  `tipe_transaksi` char(3) NOT NULL,
  `pakai_mpay` tinyint(1) NOT NULL DEFAULT '0',
  `saldo` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uang_belanja`
--

CREATE TABLE `uang_belanja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uang_belanja`
--

INSERT INTO `uang_belanja` (`id`, `nominal`) VALUES
(1, 100),
(2, 200),
(3, 300),
(4, 500),
(5, 100),
(6, 500);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher` varchar(20) NOT NULL,
  `tipe_voucher` char(1) NOT NULL,
  `untuk_fitur` int(11) NOT NULL,
  `tanggal_expired` date NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `count_to_use` int(11) NOT NULL,
  `is_valid` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `voucher`, `tipe_voucher`, `untuk_fitur`, `tanggal_expired`, `nilai`, `keterangan`, `count_to_use`, `is_valid`) VALUES
(19, 'MPAYDISKON9', '1', 3, '2017-01-31', 0, 'DISKON MITRA MFOOD MENGGUNAKAN MPAY', 0, 'yes'),
(7, 'MPAYDISKON1', '1', 1, '2017-01-31', 50, 'DISKON MRIDE MENGGUNAKAN MPAY', 0, 'yes'),
(9, 'MPAYDISKON2', '1', 2, '2017-01-31', 30, 'DISKON MCAR MENGGUNAKAN MPAY', 0, 'yes'),
(10, 'MPAYDISKON3', '1', 3, '2017-01-31', 0, 'DISKON MFOOD MENGGUNAKAN MPAY', 0, 'yes'),
(11, 'MPAYDISKON4', '1', 4, '2017-01-31', 50, 'DISKON MMART MENGGUNAKAN MPAY', 0, 'yes'),
(12, 'MPAYDISKON5', '1', 5, '2017-01-31', 20, 'DISKON MSEND MENGGUNAKAN MPAY', 0, 'yes'),
(13, 'MPAYDISKON6', '1', 6, '2017-01-31', 0, 'DISKON MMASSAGE MENGGUNAKAN MPAY', 0, 'yes'),
(14, 'MPAYDISKON7', '1', 7, '2017-01-31', 0, 'DISKON MBOX MENGGUNAKAN MPAY', 0, 'yes'),
(15, 'MPAYDISKON8', '1', 8, '2017-01-31', 0, 'DISKON MSERVICE MENGGUNAKAN MPAY', 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_pelayanan_pemijat`
--

CREATE TABLE `waktu_pelayanan_pemijat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemijat` varchar(10) NOT NULL,
  `waktu_pelayanan` varchar(20) NOT NULL,
  `lama_pelayanan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_driver` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_type`
--
ALTER TABLE `ac_type`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `additional_config`
--
ALTER TABLE `additional_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `alamat_perusahaan`
--
ALTER TABLE `alamat_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_versions`
--
ALTER TABLE `app_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asuransi`
--
ALTER TABLE `asuransi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_toko`
--
ALTER TABLE `barang_toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `belanja_mfood`
--
ALTER TABLE `belanja_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `belanja_mmart`
--
ALTER TABLE `belanja_mmart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `belanja_mstore`
--
ALTER TABLE `belanja_mstore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`);

--
-- Indexes for table `biaya_promo`
--
ALTER TABLE `biaya_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_content`
--
ALTER TABLE `blog_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang_perusahaan`
--
ALTER TABLE `cabang_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `config_driver`
--
ALTER TABLE `config_driver`
  ADD PRIMARY KEY (`id_driver`),
  ADD KEY `latitude` (`latitude`),
  ADD KEY `longitude` (`longitude`);

--
-- Indexes for table `data_temp`
--
ALTER TABLE `data_temp`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `driver_job`
--
ALTER TABLE `driver_job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fitur_goeks`
--
ALTER TABLE `fitur_goeks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fitur_mservice`
--
ALTER TABLE `fitur_mservice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fitur_promosi`
--
ALTER TABLE `fitur_promosi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gender_pemijat`
--
ALTER TABLE `gender_pemijat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_general`
--
ALTER TABLE `help_general`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `help_pelanggan`
--
ALTER TABLE `help_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kategori_resto`
--
ALTER TABLE `kategori_resto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori_toko`
--
ALTER TABLE `kategori_toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `layanan_pijat`
--
ALTER TABLE `layanan_pijat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lokasi_pelanggan`
--
ALTER TABLE `lokasi_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mitra_mmart_mfood`
--
ALTER TABLE `mitra_mmart_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mservice_jenis`
--
ALTER TABLE `mservice_jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `password_reset_request`
--
ALTER TABLE `password_reset_request`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pemijat_in_keahlian`
--
ALTER TABLE `pemijat_in_keahlian`
  ADD PRIMARY KEY (`id_layanan_pijat`,`id_pemijat`);

--
-- Indexes for table `pendaftaran_acservice`
--
ALTER TABLE `pendaftaran_acservice`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `pendaftaran_mmassage`
--
ALTER TABLE `pendaftaran_mmassage`
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `profil_perusahaan`
--
ALTER TABLE `profil_perusahaan`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `promosi_mfood`
--
ALTER TABLE `promosi_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `proporsi_biaya`
--
ALTER TABLE `proporsi_biaya`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `rating_driver`
--
ALTER TABLE `rating_driver`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `rating_pelanggan`
--
ALTER TABLE `rating_pelanggan`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `redeemed_voucher`
--
ALTER TABLE `redeemed_voucher`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `latitude` (`latitude`,`longitude`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `status_driver`
--
ALTER TABLE `status_driver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_topup`
--
ALTER TABLE `status_topup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_withdraw`
--
ALTER TABLE `status_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `teknisi_in_jenis_service`
--
ALTER TABLE `teknisi_in_jenis_service`
  ADD PRIMARY KEY (`id_teknisi`,`id_service`);

--
-- Indexes for table `tipe_transaksi`
--
ALTER TABLE `tipe_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_voucher`
--
ALTER TABLE `tipe_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `latitude` (`latitude`,`longitude`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pelanggan`,`waktu_order`),
  ADD UNIQUE KEY `nomor` (`id`);

--
-- Indexes for table `transaksi_detail_mbox`
--
ALTER TABLE `transaksi_detail_mbox`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mbox_destinasi`
--
ALTER TABLE `transaksi_detail_mbox_destinasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mfood`
--
ALTER TABLE `transaksi_detail_mfood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mmart`
--
ALTER TABLE `transaksi_detail_mmart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mmassage`
--
ALTER TABLE `transaksi_detail_mmassage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi_detail_msend`
--
ALTER TABLE `transaksi_detail_msend`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `transaksi_detail_mservice_ac`
--
ALTER TABLE `transaksi_detail_mservice_ac`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_detail_mstore`
--
ALTER TABLE `transaksi_detail_mstore`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaksi_driver`
--
ALTER TABLE `transaksi_driver`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `transaksi_pelanggan`
--
ALTER TABLE `transaksi_pelanggan`
  ADD PRIMARY KEY (`nomor`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `uang_belanja`
--
ALTER TABLE `uang_belanja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `waktu_pelayanan_pemijat`
--
ALTER TABLE `waktu_pelayanan_pemijat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_type`
--
ALTER TABLE `ac_type`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang_toko`
--
ALTER TABLE `barang_toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `belanja_mfood`
--
ALTER TABLE `belanja_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=609;

--
-- AUTO_INCREMENT for table `belanja_mmart`
--
ALTER TABLE `belanja_mmart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=896;

--
-- AUTO_INCREMENT for table `belanja_mstore`
--
ALTER TABLE `belanja_mstore`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `berkas_lamaran_kerja`
--
ALTER TABLE `berkas_lamaran_kerja`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=656;

--
-- AUTO_INCREMENT for table `blog_content`
--
ALTER TABLE `blog_content`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cabang_perusahaan`
--
ALTER TABLE `cabang_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver_job`
--
ALTER TABLE `driver_job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fitur_goeks`
--
ALTER TABLE `fitur_goeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fitur_mservice`
--
ALTER TABLE `fitur_mservice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fitur_promosi`
--
ALTER TABLE `fitur_promosi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `help_general`
--
ALTER TABLE `help_general`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `help_pelanggan`
--
ALTER TABLE `help_pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12431;

--
-- AUTO_INCREMENT for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_resto`
--
ALTER TABLE `kategori_resto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori_toko`
--
ALTER TABLE `kategori_toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765;

--
-- AUTO_INCREMENT for table `layanan_pijat`
--
ALTER TABLE `layanan_pijat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mitra_mmart_mfood`
--
ALTER TABLE `mitra_mmart_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mservice_jenis`
--
ALTER TABLE `mservice_jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `password_reset_request`
--
ALTER TABLE `password_reset_request`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_acservice`
--
ALTER TABLE `pendaftaran_acservice`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendaftaran_mmassage`
--
ALTER TABLE `pendaftaran_mmassage`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `promosi_mfood`
--
ALTER TABLE `promosi_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `proporsi_biaya`
--
ALTER TABLE `proporsi_biaya`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating_driver`
--
ALTER TABLE `rating_driver`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1318;

--
-- AUTO_INCREMENT for table `rating_pelanggan`
--
ALTER TABLE `rating_pelanggan`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `redeemed_voucher`
--
ALTER TABLE `redeemed_voucher`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `status_driver`
--
ALTER TABLE `status_driver`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status_user`
--
ALTER TABLE `status_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `transaksi_detail_mbox`
--
ALTER TABLE `transaksi_detail_mbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transaksi_detail_mbox_destinasi`
--
ALTER TABLE `transaksi_detail_mbox_destinasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `transaksi_detail_mfood`
--
ALTER TABLE `transaksi_detail_mfood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `transaksi_detail_mmart`
--
ALTER TABLE `transaksi_detail_mmart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `transaksi_detail_mmassage`
--
ALTER TABLE `transaksi_detail_mmassage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `transaksi_detail_msend`
--
ALTER TABLE `transaksi_detail_msend`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi_detail_mservice_ac`
--
ALTER TABLE `transaksi_detail_mservice_ac`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi_detail_mstore`
--
ALTER TABLE `transaksi_detail_mstore`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_driver`
--
ALTER TABLE `transaksi_driver`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `transaksi_pelanggan`
--
ALTER TABLE `transaksi_pelanggan`
  MODIFY `nomor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `uang_belanja`
--
ALTER TABLE `uang_belanja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `waktu_pelayanan_pemijat`
--
ALTER TABLE `waktu_pelayanan_pemijat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
