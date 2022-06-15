-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 12:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE IF NOT EXISTS `detail_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) NOT NULL,
  `produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `transaksi_id`, `produk`, `qty`, `harga`) VALUES
(46, 59, 5, 1, '52000'),
(45, 59, 1, 1, '55000'),
(44, 59, 4, 1, '14000'),
(43, 59, 2, 1, '18000'),
(42, 58, 9, 1, '7000'),
(41, 57, 2, 1, '18000'),
(40, 56, 4, 1, '14000'),
(39, 55, 4, 3, '14000'),
(38, 55, 2, 2, '18000'),
(37, 55, 1, 1, '55000'),
(36, 54, 4, 3, '14000'),
(35, 54, 2, 2, '18000'),
(34, 54, 1, 1, '55000'),
(33, 53, 4, 2, '14000'),
(32, 53, 2, 2, '18000'),
(31, 53, 1, 2, '55000'),
(30, 52, 4, 1, '14000'),
(29, 52, 2, 1, '18000'),
(28, 52, 1, 2, '55000'),
(27, 51, 4, 1, '14000'),
(26, 50, 1, 1, '55000'),
(25, 49, 7, 1, '50000'),
(24, 49, 2, 1, '18000'),
(47, 59, 7, 1, '50000'),
(48, 59, 8, 1, '15000'),
(49, 60, 4, 2, '14000'),
(50, 61, 4, 3, '14000'),
(51, 62, 14, 1, '2500000'),
(52, 62, 12, 1, '2700000'),
(53, 63, 2, 1, '18000'),
(54, 63, 4, 1, '14000'),
(55, 64, 14, 1, '2500000'),
(56, 65, 13, 1, '1700000'),
(57, 65, 7, 1, '50000'),
(58, 65, 8, 1, '15000'),
(59, 66, 13, 2, '1700000'),
(60, 67, 12, 1, '2700000'),
(61, 67, 11, 1, '16000'),
(62, 68, 1, 1, '55000'),
(63, 69, 1, 2, '55000'),
(64, 69, 2, 1, '18000'),
(65, 70, 13, 1, '1700000'),
(66, 71, 1, 1, '55000'),
(67, 71, 2, 1, '18000'),
(68, 71, 13, 1, '1700000'),
(69, 72, 1, 1, '55000'),
(70, 72, 2, 1, '18000'),
(71, 72, 4, 1, '14000'),
(72, 72, 13, 1, '1700000'),
(73, 73, 1, 1, '55000'),
(74, 74, 4, 2, '14000'),
(75, 74, 5, 1, '52000'),
(76, 74, 1, 1, '55000'),
(77, 75, 1, 3, '55000'),
(78, 75, 4, 2, '14000'),
(79, 75, 5, 1, '52000'),
(80, 76, 1, 1, '55000'),
(81, 78, 2, 2, '18000'),
(82, 78, 4, 1, '14000'),
(83, 79, 10, 1, '15000'),
(84, 79, 11, 1, '16000'),
(85, 80, 14, 1, '2500000'),
(86, 81, 12, 1, '2700000'),
(87, 82, 4, 2, '14000'),
(88, 83, 9, 1, '7000'),
(89, 84, 8, 1, '15000'),
(90, 85, 11, 1, '16000'),
(91, 86, 2, 1, '80000'),
(92, 87, 2, 1, '80000'),
(93, 87, 14, 1, '2500000'),
(94, 88, 18, 1, '125000'),
(95, 89, 2, 1, '80000'),
(96, 89, 4, 1, '350000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

DROP TABLE IF EXISTS `kategori_produk`;
CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `kategori`) VALUES
(2, 'Kebutuhan'),
(3, 'Makanan'),
(4, 'Konter');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

DROP TABLE IF EXISTS `log_user`;
CREATE TABLE IF NOT EXISTS `log_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `log_user` varchar(255) NOT NULL,
  `log_tipe` int(11) NOT NULL,
  `log_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(1, '0000-00-00 00:00:00', 'admin', 0, 'Login'),
(2, '0000-00-00 00:00:00', 'admin', 0, 'Login'),
(3, '2022-03-16 12:46:13', 'admin', 0, 'Login'),
(4, '2022-03-16 14:14:26', 'admin', 0, 'Login'),
(5, '2022-03-16 14:16:31', 'tes', 0, 'Login'),
(6, '2022-03-16 14:16:39', 'admin', 0, 'Login'),
(7, '2022-03-24 04:46:11', 'admin', 0, 'Login'),
(8, '2022-03-25 03:11:47', 'admin', 0, 'Login'),
(9, '2022-03-25 03:18:46', 'admin', 0, 'Login'),
(10, '2022-03-26 03:46:48', 'admin', 0, 'Login'),
(11, '2022-04-26 13:39:50', 'admin', 0, 'Login'),
(12, '2022-05-11 08:18:14', 'admin', 0, 'Login'),
(13, '2022-05-11 08:19:14', 'admin', 0, 'Login'),
(14, '2022-05-13 03:04:44', 'admin', 0, 'Login'),
(15, '2022-05-17 15:34:27', 'admin', 0, 'Login'),
(16, '2022-05-20 19:10:11', 'admin', 0, 'Login'),
(17, '2022-06-08 06:25:54', 'admin', 0, 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` set('Pria','Wanita','Lainya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `no_identitas`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `email`, `password`, `is_active`) VALUES
(1, 'Isnan', NULL, NULL, 'Pria', 'Mojogedang', '081237483291', '', '', 1),
(3, 'Bayu', NULL, NULL, 'Pria', 'Gedangan', '08991908721', '', '', 1),
(6, 'Nurdin Ardhi Nugroho', '3313021904010004', '2001-04-19', 'Pria', 'Jumantono', '08212312412323', 'nurdin@gmail.com', '$2y$10$K8MyNv8j7XZf3eW4.rWOFOaucjMBbu7KHB06.viWStKTmzoj67n5a', 1),
(7, 'namedbayu', '33130629030112313', '2001-03-29', 'Pria', 'Tawangmangu', '08991907216', 'bhayou.essega@gmail.com', '$2y$10$tbBUtl4ZKseUsgvRDA3vweSsojRmLvsE0UYsjcvDLhz0L8GtjVn..', 1),
(8, 'Ilyas NF', '3313021904010003', '2022-06-15', 'Pria', 'Mancasan', '0899919072123', 'ilyas@gmail.com', '$2y$10$M7zMCmCe8jNFdXihGeHRVe29dyi2O4dyRaDCIUT1ycB2ljH3b0hnK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(1) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`, `role`, `is_active`) VALUES
(1, 'admin', '$2y$10$/I7laWi1mlNFxYSv54EUPOH8MuZhmRWxhE.LaddTK9TSmVe.IHP2C', 'Admin', 1, 1),
(3, 'bayu', '$2y$10$pBjQiIFX6MRQRGmxtZuctuPttTGu34x/4Xbud4.AbOlv6FeChV1La', 'Bayu Prastyo', 1, 1),
(6, 'esti', '$2y$10$OyC8imde4RZ7NTSdfAD1Su47NtdMw/j72Wsl2bQWOsjcwnuLLru/O', 'Esti Setyaningrum', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_level`
--

DROP TABLE IF EXISTS `pengguna_level`;
CREATE TABLE IF NOT EXISTS `pengguna_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_level`
--

INSERT INTO `pengguna_level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `harga` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_modal` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `barcode`, `nama_produk`, `kategori`, `satuan`, `harga`, `stok`, `terjual`, `harga_modal`, `gambar`, `keterangan`) VALUES
(1, 'PULS ALPRB', 'Voucher Pulsa 50000', 1, 2, '55000', 19968, '1', '50000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(2, 'LOGITECHB70', 'Mouse LOGITECH B70', 4, 3, '80000', 9, '3', '75000', 'logitechb701.jpg', 'Mouse Wireless dengan bluetooth 5.0'),
(4, 'HAYLOULS05', 'Haylou Solar ls05 smartwatch', 4, 3, '350000', 142, '3', '320000', 'haylou.jpg', 'Haylou Solar LS05 merupakan sebuah jam tangan digital multifungsi yang dapat memonitor secara akurat berbagai macam aktivitas olahraga Anda seperti jogging, bersepeda, senam dan lain-lain. Didesain khusus dengan material tahan air sehingga tahan terhadap keringat atau bahkan tetesan air hujan sekalipun.'),
(5, 'ADAPTORCHARGEJOYSEUS', 'Adaptor Charge Joyseus RM34', 4, 3, '70000', 80, '2', '50000', 'adaptorchargejoyseus.jpg', 'Adaptor Charger ZAGBOX 4 port usb Qualcomm QC Power 3.0+2.4A (QC-988) ... JOYSEUS QC3.0 Car Charger 3.1A Dual USB Charging Black - CM0001'),
(7, 'MREDVELVET', 'Bubuk Red Velvet', 3, 1, '50000', 3, '1', '25000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(8, 'SOFTCASE', 'Softcase Smarthphone', 4, 3, '15000', 17, '0', '4000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(9, 'VCRM325GB3HR', 'Voucher Indosat 25 GB HR', 4, 2, '7000', 8, '0', '5000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(10, 'KBLDATATYPEC', 'Kabel Data Type .C', 4, 3, '15000', 9, '0', '6000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(11, 'ADAPTORROBOT1WATT', 'Adaptor Robot 10 WATT', 4, 3, '16000', 12, '0', '8000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(12, 'OPPOA51', 'OPPO A51', 4, 3, '2700000', 2, '0', '2500000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(13, 'REDMINOTE7', 'REDMI NOTE 7', 4, 3, '1700000', 10, '0', '1700000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(14, 'SAMSUNGM22', 'Samsung M22', 4, 3, '2500000', 0, '0', '2300000', 'laptop1.jpg', 'TEXT CONTOH KETERANGAN'),
(15, 'AKRILIK202103120', 'Gantungan Kunci Akrilik', 2, 3, '10000', 0, '0', '8000', 'output-onlinejpgtools.jpg', 'GANTUNGAN AKRILIK DENGAN BAHAN ANUANUANU'),
(16, 'PRINTEREPSON220123', 'PRINTER EPSON SERI ABC', 4, 3, '1800000', 0, '0', '1500000', 'SeekPng_com_user-png_729756.png', 'Printer Epson Dengan Spesifikasi BLABLABLA'),
(17, 'MONITOR1123123', 'MONITOR SAMSUNG 001', 4, 3, '2000000', 0, '0', '1600000', '_21_minimalist-iron-man-wallpaper_Iron-Man-4k-Ultra-HD-Wallpaper-Background-Image-.jpg', 'Monitor Samsung Dengan Spesifikasi Sebagai berikut ini '),
(18, 'ROBOT123812', 'Speaker Robot Type 123', 4, 3, '125000', 11, '0', '95000', 'speakerrobot.jpg', 'Speaker dengan Suara Lantang yang siap mendentumkan ruangan anda');

-- --------------------------------------------------------

--
-- Table structure for table `satuan_produk`
--

DROP TABLE IF EXISTS `satuan_produk`;
CREATE TABLE IF NOT EXISTS `satuan_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `satuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satuan_produk`
--

INSERT INTO `satuan_produk` (`id`, `satuan`) VALUES
(1, 'Bungkus'),
(2, 'Voucher'),
(3, 'Pcs'),
(4, 'Liter');

-- --------------------------------------------------------

--
-- Table structure for table `stok_keluar`
--

DROP TABLE IF EXISTS `stok_keluar`;
CREATE TABLE IF NOT EXISTS `stok_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `barcode` int(11) NOT NULL,
  `jumlah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_keluar`
--

INSERT INTO `stok_keluar` (`id`, `tanggal`, `barcode`, `jumlah`, `Keterangan`) VALUES
(1, '2020-02-21 13:42:01', 1, '10', 'rusak'),
(2, '2022-02-23 13:07:02', 5, '1', 'Kadaluarsa'),
(3, '2022-02-23 13:09:48', 5, '2', 'Kadaluarsa'),
(4, '2022-02-23 13:13:43', 5, '7', 'Kadaluarsa'),
(5, '2022-02-23 16:20:07', 7, '1', 'Rusak'),
(6, '2022-02-27 17:06:39', 9, '9999999999', 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `stok_masuk`
--

DROP TABLE IF EXISTS `stok_masuk`;
CREATE TABLE IF NOT EXISTS `stok_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `barcode` int(11) NOT NULL,
  `jumlah` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_masuk`
--

INSERT INTO `stok_masuk` (`id`, `tanggal`, `barcode`, `jumlah`, `keterangan`, `supplier`) VALUES
(1, '2020-02-21 13:41:25', 1, '10', 'penambahan', NULL),
(2, '2020-02-21 13:41:40', 2, '20', 'penambahan', 1),
(3, '2020-02-21 13:42:23', 1, '10', 'penambahan', 2),
(4, '2022-01-20 09:37:43', 3, '100', 'penambahan', 3),
(5, '2022-01-20 09:38:25', 4, '100', 'penambahan', 3),
(6, '2022-02-22 12:39:30', 1, '20000', 'penambahan', NULL),
(7, '2022-02-23 09:20:15', 4, '100', 'penambahan', NULL),
(8, '2022-02-23 12:33:15', 5, '90', 'penambahan', 4),
(9, '2022-02-23 13:15:35', 5, '20', 'penambahan', 5),
(10, '2022-02-23 16:19:44', 7, '20', 'penambahan', 4),
(11, '2022-02-24 21:24:52', 8, '25', 'penambahan', 4),
(12, '2022-02-25 15:34:26', 2, '20', 'penambahan', 4),
(13, '2022-02-27 17:04:54', 9, '99999999999', 'penambahan', NULL),
(14, '2022-02-27 17:07:19', 9, '10', 'penambahan', NULL),
(15, '2022-02-27 17:10:39', 10, '10', 'penambahan', NULL),
(16, '2022-03-01 18:05:44', 11, '15', 'penambahan', NULL),
(17, '2022-03-02 10:16:43', 14, '4', 'penambahan', NULL),
(18, '2022-03-02 10:16:54', 13, '4', 'penambahan', NULL),
(19, '2022-03-02 10:17:04', 12, '5', 'penambahan', NULL),
(20, '2022-03-11 21:05:09', 13, '12', 'penambahan', 5),
(21, '2022-06-14 11:07:07', 2, '12', 'penambahan', 4),
(22, '2022-06-15 00:37:14', 18, '12', 'penambahan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `alamat`, `telepon`, `keterangan`) VALUES
(4, 'Bayu Prastyo', 'Gedangan RT 2 RW 4 Salam Karangpandan Karanganyar', '08991907216', 'Supplier Komponen Elektronik'),
(5, 'Esti Setyaningrum', 'Mojogedang', '089123912939129', 'Supplier Bunga'),
(7, 'Benny ', 'Kaling Tasikmadu', '08123123', 'Supplier Aksesoris'),
(8, 'PT.EPSON INDONESIA', 'Jl.MH Thamrin ,Jakarta ', '027121312312', 'Supplier Printer');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

DROP TABLE IF EXISTS `toko`;
CREATE TABLE IF NOT EXISTS `toko` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `alamat`) VALUES
(1, 'E PERCETAKAN ', 'SOLO RAYA');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `barcode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_uang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggan` int(11) DEFAULT NULL,
  `nota` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kasir` int(11) NOT NULL,
  `bukti` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `barcode`, `qty`, `total_bayar`, `jumlah_uang`, `diskon`, `pelanggan`, `nota`, `kasir`, `bukti`, `status`) VALUES
(51, '2022-02-25 22:35:53', '', '', '', '15000', '', NULL, 'TRANTKUN3', 1, '', 1),
(52, '2022-02-25 23:08:14', '', '', '', '150000', '', NULL, 'TRANTKUN4', 1, '', 1),
(53, '2022-02-25 23:30:31', '', '', '', '200000', '', NULL, 'TRANTKUN5', 1, '', 1),
(54, '2022-02-25 23:32:01', '', '', '', '150000', '', NULL, 'TRANTKUN6', 1, '', 1),
(55, '2022-02-25 23:38:23', '', '', '', '135000', '', NULL, 'TRANTKUN7', 1, '', 1),
(56, '2022-02-27 13:59:02', '', '', '', '15000', '', NULL, 'TRANTKUN8', 1, '', 1),
(57, '2022-02-27 14:06:19', '', '', '', '20000', '', NULL, 'TRANTKUN9', 1, '', 1),
(58, '2022-02-27 17:13:20', '', '', '', '10000', '', NULL, 'TRANTKUN10', 1, '', 1),
(59, '2022-02-27 18:04:25', '', '', '', '205000', '', NULL, 'TRANTKUN11', 1, '', 1),
(60, '2022-03-01 18:36:26', '', '', '', '30000', '', NULL, 'TRANTKUN12', 1, '', 1),
(61, '2022-03-01 18:37:09', '', '', '', '50000', '', NULL, 'TRANTKUN13', 1, '', 1),
(62, '2022-03-02 10:47:42', '', '', '', '5300000', '', NULL, 'TRANTKUN14', 1, '', 1),
(63, '2022-03-02 11:23:07', '', '', '', '35000', '', NULL, 'TRANTKUN15', 1, '', 1),
(64, '2022-03-02 20:07:54', '', '', '', '2500000', '', NULL, 'TRANTKUN16', 1, '', 1),
(65, '2022-03-03 12:15:05', '', '', '', '1770000', '', NULL, 'TRANTKUN17', 1, '', 1),
(66, '2022-03-03 13:28:38', '', '', '', '3400000', '', NULL, 'TRANTKUN18', 1, '', 1),
(67, '2022-03-03 15:35:20', '', '', '', '2720000', '', 3, 'TRANTKUN19', 1, '', 1),
(68, '2022-03-03 15:35:58', '', '', '', '55000', '', NULL, 'TRANTKUN20', 1, '', 1),
(69, '2022-03-06 21:12:10', '', '', '', '130000', '', 3, 'TRANTKUN21', 1, '', 1),
(70, '2022-03-07 09:17:07', '', '', '', '1750000', '', 3, 'TRANTKUN22', 1, '', 1),
(71, '2022-03-11 21:06:32', '', '', '', '1800000', '', 3, 'TRANTKUN23', 1, '', 1),
(72, '2022-03-13 17:08:16', '', '', '', '1800000', '', 3, 'TRANTKUN24', 1, '', 1),
(73, '2022-03-15 23:03:26', '', '', '', '60000', '', 3, 'TRANTKUN25', 1, '', 1),
(74, '2022-05-13 10:06:40', '', '', '', '136000', '', 3, 'TRANTKUN26', 1, '', 1),
(75, '2022-05-21 02:11:21', '', '', '', '250000', '', 3, 'TRANTKUN27', 1, '', 1),
(76, '2022-06-08 14:08:38', '', '', '', '60000', '', NULL, 'TRANTKUN28', 1, '', 1),
(77, '2022-06-12 16:50:28', '', '', '', '50000', '', 999999, 'TRANTKUN29', 0, '01__pt_gin_Surat_kesanggupan_tutor_Bayu_Prastyo_10-01-20221.pdf', 0),
(78, '2022-06-12 16:51:15', '', '', '', '50000', '', 999999, 'TRANTKUN30', 0, '01__pt_gin_Surat_kesanggupan_tutor_Bayu_Prastyo_10-01-20222.pdf', 0),
(79, '2022-06-12 16:55:04', '', '', '', '31000', '', 999999, 'TRANTKUN31', 0, 'Kategori_Makanan.pdf', 0),
(80, '2022-06-12 17:03:22', '', '', '', '2500000', '', 999999, 'TRANTKUN32', 0, 'Data_Kasus.pdf', 0),
(81, '2022-06-12 17:06:48', '', '', '', '2700000', '', 999999, 'TRANTKUN33', 0, '01__pt_gin_Surat_kesanggupan_tutor_Bayu_Prastyo_10-01-20223.pdf', 0),
(82, '2022-06-12 18:16:58', '', '', '', '28000', '', 999999, 'TRANTKUN34', 0, '01__pt_gin_Surat_kesanggupan_tutor_Bayu_Prastyo_10-01-20224.pdf', 1),
(83, '2022-06-12 18:24:38', '', '', '', '10000', '', 3, 'TRANTKUN35', 1, NULL, 1),
(84, '2022-06-12 19:35:44', '', '', '', '15000', '', 3, 'TRANTKUN36', 1, '01__pt_gin_Surat_kesanggupan_tutor_Bayu_Prastyo_10-01-20225.pdf', 1),
(85, '2022-06-13 14:51:32', '', '', '', '20000', '', 1, 'TRANTKUN37', 1, NULL, 1),
(86, '2022-06-14 11:16:21', '', '', '', '80000', '', 999999, 'TRANTKUN38', 1, 'Photo_from_BayuKun.jpg', 1),
(87, '2022-06-14 20:10:25', '', '', '', '2580000', '', 6, 'TRANTKUN39', 1, 'Photo_from_BayuKun1.jpg', 1),
(88, '2022-06-15 00:38:10', '', '', '', '125000', '', 6, 'TRANTKUN40', 1, 'logitechb70.jpg', 1),
(89, '2022-06-15 12:16:43', '', '', '', '430000', '', 7, 'TRANTKUN41', 1, 'adaptorchargejoyseus.jpg', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`role`) REFERENCES `pengguna_level` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
