-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2016 at 03:19 PM
-- Server version: 5.6.33-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marzuki_lelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `nm_admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `nm_admin`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_lelang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang_lelang` (
  `id_barang_lelang` int(1) NOT NULL AUTO_INCREMENT,
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
  `id_komentar` int(4) NOT NULL,
  PRIMARY KEY (`id_barang_lelang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_barang_lelang`
--

INSERT INTO `tbl_barang_lelang` (`id_barang_lelang`, `kode_barang`, `id_pelelang`, `lokasi`, `foto`, `nama_barang`, `harga_buka`, `keterangan`, `tanggal_buka`, `tanggal_selesai`, `status`, `id_komentar`) VALUES
(6, '1003', 3, 'jambi', 'u.jpg', 'samsung', 90000, 'ok', '21-10-2016', '23-10-2016', 0, 0),
(10, '4234', 7, 'lampung', 'morowali.jpg', 'pemandangan', 423423, 'fsdfsdf', '22-11-2012', '22-10-2017', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE IF NOT EXISTS `tbl_jenis` (
  `id_jenis` int(4) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidat`
--

CREATE TABLE IF NOT EXISTS `tbl_kandidat` (
  `id_komentar` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kandidat` varchar(30) NOT NULL,
  `harga` text NOT NULL,
  `id_barang_lelang` int(4) NOT NULL,
  `id_pelelang` int(4) NOT NULL,
  `status` int(3) NOT NULL,
  `tanggal_tawar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_kandidat`
--

INSERT INTO `tbl_kandidat` (`id_komentar`, `nama_kandidat`, `harga`, `id_barang_lelang`, `id_pelelang`, `status`, `tanggal_tawar`) VALUES
(8, 'bobu', '76676876868', 6, 3, 0, '0000-00-00 00:00:00'),
(6, 'kiki', '990000', 6, 3, 1, '0000-00-00 00:00:00'),
(13, 'andre', '457', 6, 3, 0, '2016-10-22 05:50:00'),
(14, 'asASa', '345', 6, 3, 0, '2016-10-22 05:50:13'),
(15, 'hsgvv', '76578', 10, 7, 0, '2016-10-22 06:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelelang`
--

CREATE TABLE IF NOT EXISTS `tbl_pelelang` (
  `id_pelelang` int(2) NOT NULL AUTO_INCREMENT,
  `no_hp` varchar(23) NOT NULL,
  `alamat` text NOT NULL,
  `nama_pelelang` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id_pelelang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_pelelang`
--

INSERT INTO `tbl_pelelang` (`id_pelelang`, `no_hp`, `alamat`, `nama_pelelang`, `username`, `password`, `tgl_daftar`, `status`) VALUES
(3, '987654678', 'jmabi', 'zuki', 'zuki', 'zuki', '2016-10-20 18:17:36', 1),
(2, '09876543245678', 'jambi', 'budi', 'budi', 'budi', '2016-10-20 18:15:07', 1),
(5, '082377168756', 'jl jendran sudirman ', 'suki', 'suki', 'suki', '2016-10-21 12:43:15', 1),
(6, '87654345678', 'jambii', 'buby', 'buby', '123', '2016-10-21 13:53:31', 1),
(7, '08875523', 'adasdads', 'andre', 'yoa', 'yoa', '2016-10-22 05:41:34', 1),
(8, '082377168756', 'kota jambi', 'pondoksoft', 'pondok', '123', '2016-10-22 15:13:21', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
