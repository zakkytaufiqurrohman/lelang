-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 12:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nm_admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `nm_admin`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_lelang`
--

CREATE TABLE `tbl_barang_lelang` (
  `id_barang_lelang` int(1) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `id_pelelang` int(3) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_buka` int(9) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_buka` text NOT NULL,
  `tanggal_selesai` text NOT NULL,
  `status` int(3) NOT NULL,
  `id_komentar` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_lelang`
--

INSERT INTO `tbl_barang_lelang` (`id_barang_lelang`, `kode_barang`, `id_pelelang`, `lokasi`, `foto`, `nama_barang`, `harga_buka`, `keterangan`, `tanggal_buka`, `tanggal_selesai`, `status`, `id_komentar`) VALUES
(12, 'Jati001', 9, 'Jepara', '2.png', 'kayu Jati ', 2000000, 'Ukuran 2m,\r\nDiameter 20 cm', '12/17/2018', '12/25/2018', 1, 0),
(13, 'jt002', 10, 'Jepara', '2.png', 'kayu Jati tpk', 5000000, 'Kayu Jati TPK ukuran 2 m\r\n', '12/18/2018', '12/24/2018', 1, 0),
(15, 'k-02', 9, 'JEPARA', '4.png', 'Kayu Jati OD', 1500000, 'ukuran 1m\r\ndiameter 10cm', '12/18/2018', '12/19/2018', 1, 0),
(16, 'K-03', 9, 'Bangsri', 'index3.jpg', 'Jati Biasa', 900000, 'panjang 1m\r\ndiameter 20cm', '12/18/2018', '12/19/2018', 0, 0),
(17, 'K-04', 9, 'Tahunan', 'index.jpg', 'Jati A2', 3000000, 'ukuran 1m\r\ndiameter 30cm', '12/18/2018', '12/21/2018', 1, 0),
(22, '1321321312', 15, 'alfanjuni', 'fix logo.png', '0', 0, 'oke', '04/01/2019', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(4) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidat`
--

CREATE TABLE `tbl_kandidat` (
  `id_komentar` int(3) NOT NULL,
  `nama_kandidat` varchar(30) NOT NULL,
  `harga` text NOT NULL,
  `id_barang_lelang` int(4) NOT NULL,
  `id_pelelang` int(4) NOT NULL,
  `status` int(3) NOT NULL,
  `tanggal_tawar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kandidat`
--

INSERT INTO `tbl_kandidat` (`id_komentar`, `nama_kandidat`, `harga`, `id_barang_lelang`, `id_pelelang`, `status`, `tanggal_tawar`, `email`) VALUES
(19, 'alfan', '2800000', 12, 9, 1, '2018-12-17 16:53:52', 'crismunianto'),
(20, 'gepeng', '3000000', 12, 9, 1, '2018-12-17 16:56:17', 'dddddd'),
(21, 'jumaun', '4000000', 12, 9, 1, '2018-12-17 16:59:46', '@gmail.com'),
(22, 'dd', '435334545435', 13, 10, 0, '2018-12-17 17:21:43', '@yahoo.cpm'),
(23, 'afaf', '5646546565', 13, 10, 0, '2018-12-17 17:21:51', '@dinus'),
(26, 'jumaun', '700000000', 13, 10, 0, '2018-12-17 19:14:28', 'jumaun@gmail.com'),
(29, 'manpro', '10000000', 13, 10, 1, '2018-12-19 01:03:00', 'alfaaja@gmail.com'),
(30, 'alfan', '1000000000', 17, 9, 0, '2019-04-11 19:04:48', 'alfanjuni@gmail.com'),
(31, 'alfan', '1000000000', 16, 9, 0, '2019-06-25 09:33:25', 'alfafa@gmail.com'),
(32, 'zakky', '2000000', 15, 9, 1, '2019-06-25 09:42:17', 'alfafa@gmail.com'),
(33, 'gepeng', '1000000000', 17, 9, 0, '2019-06-25 09:43:23', 'crismunianto2@gmail.com'),
(34, 'gepeng2', '1000000000', 17, 9, 1, '2019-06-25 09:46:15', 'crismunianto@gmail.com'),
(35, 'zakky2', '1000000000', 17, 9, 1, '2019-06-25 09:48:01', 'a.cris58@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelelang`
--

CREATE TABLE `tbl_pelelang` (
  `id_pelelang` int(2) NOT NULL,
  `no_hp` varchar(23) NOT NULL,
  `alamat` text NOT NULL,
  `nama_pelelang` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelelang`
--

INSERT INTO `tbl_pelelang` (`id_pelelang`, `no_hp`, `alamat`, `nama_pelelang`, `username`, `password`, `tgl_daftar`, `status`) VALUES
(16, '434344444444', 'jepara', 'lelang', 'lelang', 'lelang', '2019-06-25 09:29:39', 1),
(9, '094442141232', 'Cilegon', 'Gendut', 'gendut', 'gendut', '2018-12-17 16:46:51', 1),
(15, '092321331', 'jepara', 'alfanjuni', 'alfanjuni', 'alfanjuni', '2019-04-11 18:36:35', 1),
(11, '08988434289', 'semarang', 'nigma', 'nigma', 'nigma', '2018-12-18 03:09:17', 1),
(12, '0984337342', 'pusponjolo', 'pelelang', 'pelelang', 'pelelang', '2018-12-19 00:55:20', 1),
(13, '085973755035', 'tubanan rt 07 rw 04', 'bayimacan', 'bayimacan', '1234', '2018-12-26 12:58:17', 1),
(14, '0888888', 'tubanan', 'gepeng', 'lutfi', '1234', '2018-12-26 13:01:02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_barang_lelang`
--
ALTER TABLE `tbl_barang_lelang`
  ADD PRIMARY KEY (`id_barang_lelang`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kandidat`
--
ALTER TABLE `tbl_kandidat`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_pelelang`
--
ALTER TABLE `tbl_pelelang`
  ADD PRIMARY KEY (`id_pelelang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_barang_lelang`
--
ALTER TABLE `tbl_barang_lelang`
  MODIFY `id_barang_lelang` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kandidat`
--
ALTER TABLE `tbl_kandidat`
  MODIFY `id_komentar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_pelelang`
--
ALTER TABLE `tbl_pelelang`
  MODIFY `id_pelelang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
