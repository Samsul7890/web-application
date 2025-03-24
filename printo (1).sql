-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` varchar(10) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `mesin_cetak` enum('Outdoor','Indoor','Xerox','Jasa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `mesin_cetak`) VALUES
('IAL', 'Indoor Albatros', 'Indoor'),
('IAL1', 'Indoor Albatros A1', 'Indoor'),
('IAL2', 'Indoor Albatros A2', 'Indoor'),
('IC', 'Indoor Canvas', 'Indoor'),
('IC30X30', 'Indoor Canvas 30X30', 'Indoor'),
('IC30X40', 'Indoor Canvas  30X40', 'Indoor'),
('IC40X40', 'Indoor Canvas 40X40', 'Indoor'),
('IC40X60', 'Indoor Canvas 40X60', 'Indoor'),
('IC60X90', 'Indoor Canvas 60X90', 'Indoor'),
('ICB', 'Indoor Cloth Banner', 'Indoor'),
('IDS', 'Indoor Duratrans', 'Indoor'),
('IFC280', 'Indoor Flexi China 280', 'Indoor'),
('IFC340', 'Indoor Flexi China 340', 'Indoor'),
('IFK440', 'Indoor Flexi Korea', 'Indoor'),
('IIB50', 'Indoor Infraboard 50X70', 'Indoor'),
('IIB60', 'Indoor Infraboard 60X90', 'Indoor'),
('ILSTR', 'Indoor Luster', 'Indoor'),
('IRUA60', 'Indoor Roll Up Albatros 60x160', 'Indoor'),
('IRUA80', 'Indoor Roll Up Albatros 80x200', 'Indoor'),
('IRUA85', 'Indoor Roll Up Albatros 85x200', 'Indoor'),
('IRUFC60', 'Indoor Roll Up Flexi China 60x160', 'Indoor'),
('IRUL60', 'Indoor Roll Up Luster 60x160', 'Indoor'),
('IRUL80', 'Indoor Roll Up Luster 80x200', 'Indoor'),
('IRUL85', 'Indoor Roll Up Luster 85x200', 'Indoor'),
('ISAL', 'Indoor Stiker Albatros', 'Indoor'),
('ISBL', 'Indoor Stiker Backlite', 'Indoor'),
('ISC', 'Indoor Stiker China', 'Indoor'),
('ISCT', 'Indoor Stiker China Transparant', 'Indoor'),
('ISOW', 'Indoor Stiker One Way', 'Indoor'),
('ISR', 'Indoor Stiker Ritrama', 'Indoor'),
('ISRBO', 'Indoor Stiker Ritrama BO', 'Indoor'),
('ISRT', 'Indoor Stiker Ritrama Transparant', 'Indoor'),
('IXBA60', 'Indoor X-Banner Albatros 60x160', 'Indoor'),
('IXBFC60', 'Indoor X-Banner Flexi China 60x160', 'Indoor'),
('IXBL60', 'Indoor X-Banner Luster 60x160', 'Indoor'),
('JB', 'Jasa Bor', 'Jasa'),
('JCLA3', 'Jasa Cold Laminating A3', 'Jasa'),
('JCLL', 'Jasa Cold Laminating Lantai', 'Jasa'),
('JCLM', 'Jasa Cold Laminating Meteran', 'Jasa'),
('JCLXB', 'Jasa Cold Laminating X-Banner', 'Jasa'),
('JCSK', 'Jasa Cutting Stiker Kertas', 'Jasa'),
('JCSO', 'Jasa Cutting Stiker Oracal', 'Jasa'),
('JCSV', 'Jasa Cutting Stiker Vinyl', 'Jasa'),
('JF', 'Jasa Finishing', 'Jasa'),
('JH', 'Jasa Hook', 'Jasa'),
('JHL', 'Jasa Hot Laminasi', 'Jasa'),
('JJSP', 'Jasa Jilid Spiral', 'Jasa'),
('JJST', 'Jasa Jilid Streples', 'Jasa'),
('JL100', 'Jasa Lipet / 100', 'Jasa'),
('JLK3', 'Jasa Laminating Keras A3', 'Jasa'),
('JLK4', 'Jasa Laminating Keras A4', 'Jasa'),
('JLKK', 'Jasa Laminating Keras Kartu', 'Jasa'),
('JLS', 'Jasa Lipet Satuan', 'Jasa'),
('JMA', 'Jasa Mata Ayam', 'Jasa'),
('JMA3', 'Jasa Masking A3', 'Jasa'),
('JMM', 'Jasa Masking Meteran', 'Jasa'),
('JPA3', 'Jasa Potong A3', 'Jasa'),
('JPK100', 'Jasa Potong Ketras/100', 'Jasa'),
('JPM', 'Jasa Potong Meteran', 'Jasa'),
('JPS100', 'Jasa Potong Stiker/100', 'Jasa'),
('JS', 'Jasa Setting', 'Jasa'),
('OCB', 'Outdoor Cloth Banner', 'Outdoor'),
('OFB', 'Outdoor Flexi Backlite', 'Outdoor'),
('OFC280', 'Outdoor Flexi China 280', 'Outdoor'),
('OFC280HR', 'Outdoor Flexi China 280 HR', 'Outdoor'),
('OFC340', 'Outdoor Flexi China 340', 'Outdoor'),
('OFC340HR', 'Outdoor Flexi China 340 HR', 'Outdoor'),
('OFK440', 'Outdoor Flexi Kore 440', 'Outdoor'),
('OFK440HR', 'Outdoor Flexi Kore 440 HR', 'Outdoor'),
('OXB60', 'Outdoor X-Banner 60x160', 'Outdoor'),
('XAC210', 'Xerox Art Carton 210', 'Xerox'),
('XAC2102', 'Xerox Art Carton 210 2Sisi', 'Xerox'),
('XAC230', 'Xerox Art Carton 230', 'Xerox'),
('XAC2302', 'Xerox Art Carton 230 2Sisi', 'Xerox'),
('XAC260', 'Xerox Art Carton 260', 'Xerox'),
('XAC2602', 'Xerox Art Carton 260 2Sisi', 'Xerox'),
('XAP120', 'Xerox Art Paper 120', 'Xerox'),
('XAP1202', 'Xerox Art Paper 120 2Sisi', 'Xerox'),
('XAP150', 'Xerox Art Paper 150', 'Xerox'),
('XAP1502', 'Xerox Art Paper 150 2Sisi', 'Xerox'),
('XBAP1204', 'Xerox Brosur Art Paper 120 A4', 'Xerox'),
('XBAP12042', 'Xerox Brosur Art Paper 120 A4 2Sisi', 'Xerox'),
('XBAP1205', 'Xerox Brosur Art Paper 120 A5', 'Xerox'),
('XBAP12052', 'Xerox Brosur Art Paper 120 A5 2Sisi', 'Xerox'),
('XBAP120DL', 'Xerox Brosur Art Paper 120 DL', 'Xerox'),
('XBAP120DL2', 'Xerox Brosur Art Paper 120 DL 2Sisi', 'Xerox'),
('XBAP1504', 'Xerox Brosur Art Paper 150 A4', 'Xerox'),
('XBAP15042', 'Xerox Brosur Art Paper 150 A4 2Sisi', 'Xerox'),
('XBAP1505', 'Xerox Brosur Art Paper 150 A5', 'Xerox'),
('XBAP15052', 'Xerox Brosur Art Paper 150 A5 2Sisi', 'Xerox'),
('XBAP150DL', 'Xerox Brosur Art Paper 150 DL', 'Xerox'),
('XBAP150DL2', 'Xerox Brosur Art Paper 150 DL 2Sisi', 'Xerox'),
('XBW', 'Xerox BW', 'Xerox'),
('XBW2', 'Xerox BW 2Sisi', 'Xerox'),
('XDHVS3', 'Docu HVS A3', 'Xerox'),
('XDHVS3W', 'Docu HVS A3 Warna', 'Xerox'),
('XDHVS4', 'Docu HVS A4', 'Xerox'),
('XDHVS4W', 'Docu HVS A4 Warna', 'Xerox'),
('XH100', 'Xerox HVS 100', 'Xerox'),
('XH1002', 'Xerox HVS 100 2Sisi', 'Xerox'),
('XIDC', 'Xerox ID Card', 'Xerox'),
('XKN260', 'Xerox Kartu Nama 260', 'Xerox'),
('XKN2602', 'Xerox Kartu Nama 260 2Sisi', 'Xerox'),
('XKNBW', 'Xerox Kartu Nama BW', 'Xerox'),
('XKNBW2', 'Xerox Kartu Nama BW 2Sisi', 'Xerox'),
('XKNL', 'Xerox Kartu Nama Linen', 'Xerox'),
('XKNL2', 'Xerox Kartu Nama Linen 2Sisi', 'Xerox'),
('XL', 'Xerox Linen', 'Xerox'),
('XL2', 'Xerox Linen 2Sisi', 'Xerox'),
('XMB4', 'Xerox Menu Board A4', 'Xerox'),
('XMB5', 'Xerox Menu Board A5', 'Xerox'),
('XMXB', 'Xerox Mini Xbanner AC260', 'Xerox'),
('XNT150', 'Xerox New Top 150 ', 'Xerox'),
('XNT1502', 'Xerox New Top 150 2Sisi', 'Xerox'),
('XNT260', 'Xerox New Top 260', 'Xerox'),
('XNT2602', 'Xerox New Top 260 2Sisi', 'Xerox'),
('XP44', 'Xerox Pin 44mm', 'Xerox'),
('XP58', 'Xerox Pin 58mm', 'Xerox'),
('XSCF', 'Xerox Stiker Craft', 'Xerox'),
('XSCH', 'Xerox Stiker Chromo', 'Xerox'),
('XSH', 'Xerox Stiker HVS', 'Xerox'),
('XSVG', 'Xerox Stiker Vinyl Gloss', 'Xerox'),
('XSVM', 'Xerox Stiker Vinyl Matte', 'Xerox'),
('XSVT', 'Xerox Stiker Vinyl Transparant', 'Xerox');

-- --------------------------------------------------------

--
-- Table structure for table `form_order`
--

CREATE TABLE `form_order` (
  `id_form` varchar(10) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deskprint` varchar(100) NOT NULL,
  `status` enum('Belum Pembayaran','Sudah Pembayaran','Hold','Selesai') NOT NULL DEFAULT 'Belum Pembayaran'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_order`
--

INSERT INTO `form_order` (`id_form`, `id_pelanggan`, `tanggal`, `deskprint`, `status`) VALUES
('FO-30504', 6, '2021-05-28 04:59:15', 'Samsul', 'Sudah Pembayaran'),
('FO-75622', 6, '2021-05-29 03:13:39', 'admin', 'Sudah Pembayaran'),
('FO-77343', 1, '2021-05-21 01:09:03', 'Samsul', 'Belum Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `telp`) VALUES
(1, 'Samsul', 7890),
(2, 'didi', 65),
(6, 'jajang', 985343534);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_form_pesan` varchar(10) NOT NULL,
  `id_bahan` varchar(10) NOT NULL,
  `nama_file` text NOT NULL,
  `panjang` float NOT NULL,
  `tinggi` float NOT NULL,
  `qty` float NOT NULL,
  `finishing` text NOT NULL,
  `status_cetak` enum('Design','Sudah Cetak','Belum Cetak','Hold') NOT NULL DEFAULT 'Belum Cetak',
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_form_pesan`, `id_bahan`, `nama_file`, `panjang`, `tinggi`, `qty`, `finishing`, `status_cetak`, `total`) VALUES
(21, 'FO-30504', 'OFC280', 'Dijual', 1.2, 3, 2, 'ma/m', 'Belum Cetak', 7.2),
(22, 'FO-30504', 'OFC280', 'Disewa', 1.2, 3, 1, 'ma/m', 'Belum Cetak', 2.6),
(23, 'FO-30504', 'XSCH', 'map', 1, 1, 1, 'lam glos+cut', 'Belum Cetak', 1),
(24, 'FO-77343', 'XKNBW', 'Label', 1, 1, 1, '-', 'Belum Cetak', 1),
(25, 'FO-75622', 'IFC280', 'Label', 1, 1.3, 3, '-', 'Belum Cetak', 3.9),
(26, 'FO-75622', 'OFC280HR', 'dijual', 5, 1, 2, '-', 'Belum Cetak', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` set('Administrator','Kasir','Deskprint','Outdoor','Indoor','Xerox') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_pengguna`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(2, 'Samsul', '6ddcd35687be9a4415e4416a6dd6829e', 'Deskprint'),
(5, 'Via', '14f1f9729a8142e82600dac241e82fe2', 'Deskprint'),
(6, 'Via a3', '14f1f9729a8142e82600dac241e82fe2', 'Xerox'),
(7, 'Mei', '57e80e4a04d61577efc6bcdee853c2c1', 'Kasir'),
(8, 'Indah', 'f3385c508ce54d577fd205a1b2ecdfb7', 'Deskprint'),
(9, 'Adnan', 'd1a0a9e9391af09e978c4c3d11711e75', 'Outdoor'),
(10, 'Bahar', '4ae47e149782b7133b0c41b92717846f', 'Indoor'),
(11, 'Vivi', 'c3bb6f719742fd1e5768d6d1361cfb49', 'Xerox');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `form_order`
--
ALTER TABLE `form_order`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_form` (`id_form_pesan`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_order`
--
ALTER TABLE `form_order`
  ADD CONSTRAINT `form_order_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_form_pesan`) REFERENCES `form_order` (`id_form`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
