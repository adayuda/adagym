-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 09:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kd_admin` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `nama`, `username`, `password`) VALUES
(1, 'yuda', 'yudapradnyana', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nama_barang`) VALUES
('10', 'qwdasd'),
('11', 'asdasd'),
('2', 'Oreo Mantap Jiwa'),
('3', 'dsa'),
('5', 'Oreo Mantap Jiwa'),
('7', 'hjghjgh'),
('8', 'asdasdasd'),
('9', 'wtwer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_gym`
--

CREATE TABLE `tbl_barang_gym` (
  `kd_gym` int(5) NOT NULL,
  `kd_barang` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_gym`
--

INSERT INTO `tbl_barang_gym` (`kd_gym`, `kd_barang`, `stok`, `harga`) VALUES
(2, '11', 20, 20000),
(2, '10', 200000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar`
--

CREATE TABLE `tbl_daftar` (
  `kd_daftar` int(5) NOT NULL,
  `kd_gym` int(5) NOT NULL,
  `kd_member` int(5) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `harga_daftar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`kd_daftar`, `kd_gym`, `kd_member`, `tgl_daftar`, `harga_daftar`) VALUES
(1, 1, 14, '2018-10-30', 0),
(2, 1, 119, '0000-00-00', 5000),
(3, 2, 120, '0000-00-00', 5000),
(4, 2, 120, '0000-00-00', 5000),
(5, 1, 121, '2019-01-10', 5000),
(6, 1, 135, '2019-01-10', 5000),
(7, 1, 136, '2019-01-10', 5000),
(8, 1, 137, '2019-01-10', 5000),
(9, 1, 141, '2019-01-30', 5000),
(10, 1, 141, '2019-01-30', 5000),
(11, 1, 142, '2019-01-30', 5000),
(12, 1, 143, '2019-01-31', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `no_trx` int(10) NOT NULL,
  `kd_barang` varchar(15) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_transaksi`
--

INSERT INTO `tbl_detail_transaksi` (`no_trx`, `kd_barang`, `jumlah`, `harga`) VALUES
(1, '3', 10, 123),
(5, '11', 2, 3000),
(5, '3', 2, 123),
(6, '11', 2, 3000),
(7, '3', 4, 123),
(7, '11', 3, 3000),
(8, '11', 3, 3000),
(9, '11', 3, 3000),
(11, '8', 3, 12),
(12, '11', 2, 3000),
(12, '3', 10, 123),
(12, '8', 3, 12),
(12, '9', 3, 12),
(13, '11', 6, 100000),
(13, '3', 12, 100000),
(14, '11', 7, 100000),
(15, '11', 2, 2000),
(15, '3', 4, 2000),
(16, '11', 2, 2000),
(17, '11', 2, 2000),
(17, '3', 6, 2000),
(18, '11', 51, 20000),
(18, '10', 2, 2000),
(19, '11', 2, 20000),
(20, '11', 2, 20000),
(20, '10', 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gym`
--

CREATE TABLE `tbl_gym` (
  `kd_gym` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kd_admin` int(5) NOT NULL,
  `harga_daftar` int(7) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gym`
--

INSERT INTO `tbl_gym` (`kd_gym`, `nama`, `alamat`, `no_telp`, `email`, `kd_admin`, `harga_daftar`, `username`, `password`) VALUES
(1, 'buana GYM', 'permata hijau', '036123', 'dasdasd', 1, 10000, 'buana', 'qwerty'),
(2, 'bima', 'jalan', '036121312', 'bimagym', 1, 5000, 'bima', 'qwerty'),
(3, 'generation', 'keboiwa', '0123213', 'generation@gmnai', 1, 10000, 'generation', 'pullsport123'),
(4, 'a&a gym', 'jimbaran', '0981', 'hjasdjhadsh', 1, 0, 'gym', 'pullsport123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iuran`
--

CREATE TABLE `tbl_iuran` (
  `kd_iuran` int(5) NOT NULL,
  `kd_member` int(5) NOT NULL,
  `kd_gym` int(5) NOT NULL,
  `kd_paket` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_iuran`
--

INSERT INTO `tbl_iuran` (`kd_iuran`, `kd_member`, `kd_gym`, `kd_paket`, `harga`, `tgl_bayar`, `tgl_akhir`) VALUES
(17, 121, 1, 4, 20000000, '2019-01-14', '2019-04-14'),
(20, 127, 1, 2, 20000000, '2019-01-03', '2019-12-03'),
(22, 14, 1, 1, 150000, '2019-01-16', '2019-03-07'),
(23, 142, 1, 2, 150000, '2019-01-30', '2019-03-07'),
(24, 143, 1, 2, 750000, '2019-01-31', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `kd_member` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(3) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`kd_member`, `nama`, `umur`, `jk`, `no_telp`, `alamat`, `email`, `username`, `password`) VALUES
(14, 'Yuda Pradnyana, Putu', 20, 'Laki-Laki', '0361', 'denpasar', 'putuyudapradnyana@gmail.com', 'yuda', 'pullsport123'),
(119, 'qsedasd', 1, 'Laki-Laki', '123123', 'qweqwe', 'asdasdqwe', 'qsedasd', 'pullsport123'),
(120, 'kontol', 123, 'Laki-Laki', '123123', 'asdasd123', 'asdqweqwe12', 'kontol', 'pullsport123'),
(121, 'salsa', 123, 'Perempuan', '123123', 'epek', 'asdasdfd', 'salsa', 'pullsport123'),
(122, 'kontol', 123, 'Laki-Laki', '123123', 'asd', 'tetek', 'kontol', 'pullsport123'),
(123, 'kontol', 123, 'Laki-Laki', '123123', 'asd', 'tetek', 'kontol', 'pullsport123'),
(124, 'ads', 13, 'Laki-Laki', '13', 'sfd', 'das', 'ads', 'pullsport123'),
(125, 'ads', 13, 'Laki-Laki', '13', 'sfd', 'das', 'ads', 'pullsport123'),
(126, 'as', 12, 'Laki-Laki', '21', 'wqe', '13efaf', 'as', 'pullsport123'),
(127, 'as', 12, 'Laki-Laki', '21', 'wqe', '13efaf', 'as', 'pullsport123'),
(128, 'as', 12, 'Laki-Laki', '21', 'wqe', '13efaf', 'as', 'pullsport123'),
(129, 'kontol', 123, 'Laki-Laki', '123', 'asdsad', 'asdqweqwe12', 'kontol', 'pullsport123'),
(130, '', 0, 'Laki-Laki', '', '', '', '', 'pullsport123'),
(131, 'kontol', 123, 'Laki-Laki', '123', 'qwe', '13efaf', 'kontol', 'pullsport123'),
(132, 'sintya', 12, 'Laki-Laki', '234', 'adnjnnsda', 'adjaf', 'sintya', 'pullsport123'),
(133, 'sintya', 12, 'Laki-Laki', '234', 'adnjnnsda', 'adjaf', 'sintya', 'pullsport123'),
(134, 'sad', 13, 'Laki-Laki', '1212', 'asdsd', 'assddd', 'sad', 'pullsport123'),
(135, 'sad', 13, 'Laki-Laki', '1212', 'asdsd', 'assddd', 'sad', 'pullsport123'),
(136, 'fikri', 20, 'Laki-Laki', '081', 'denpasar', 'kontol', 'fikri', 'pullsport123'),
(137, 'dwik', 123, 'Laki-Laki', '124', 'kerobokan', 'asdasdfd', 'dwik', 'pullsport123'),
(138, '', 0, 'Laki-Laki', '', '', '', '', 'pullsport123'),
(139, '', 0, 'Laki-Laki', '', '', '', '', 'pullsport123'),
(140, '', 0, 'Laki-Laki', '', '', '', '', 'pullsport123'),
(141, 'mastra', 20, 'Laki-Laki', '', '', '', 'mastra', 'pullsport123'),
(142, 'mastra', 20, 'Laki-Laki', '', '', '', 'mastra', 'pullsport123'),
(143, 'wira', 20, 'Laki-Laki', '0361', 'gatsu', '', 'wira', 'pullsport123'),
(144, 'sadsa', 0, 'Perempuan', '', '', '', 'sadsa', 'pullsport123'),
(145, 'sadsa', 0, 'Perempuan', '', '', '', 'sadsa', 'pullsport123'),
(146, 'sadsa', 0, 'Perempuan', '', '', '', 'sadsa', 'pullsport123'),
(147, 'wira', 12, 'Laki-Laki', '0831', 'hjasdjhasdhjdjsa', '12414524', 'wira', 'pullsport123'),
(148, 'wira', 12, 'Laki-Laki', '0831', 'hjasdjhasdhjdjsa', '12414524', 'wira', 'pullsport123'),
(149, 'wira', 12, 'Laki-Laki', '0831', 'hjasdjhasdhjdjsa', '12414524', 'wira', 'pullsport123'),
(150, 'wira', 12, 'Laki-Laki', '0831', 'hjasdjhasdhjdjsa', '12414524', 'wira', 'pullsport123'),
(151, 'wira', 12, 'Laki-Laki', '0831', 'hjasdjhasdhjdjsa', '12414524', 'wira', 'pullsport123'),
(152, 'wira', 12, 'Laki-Laki', '0831', 'hjasdjhasdhjdjsa', '12414524', 'wira', 'pullsport123'),
(153, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(154, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(155, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(156, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(157, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(158, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(159, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(160, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(161, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(162, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(163, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(164, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(165, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(166, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(167, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(168, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(169, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(170, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(171, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(172, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(173, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(174, 'mastre', 12, 'Laki-Laki', '124', 'asd', '12asd', 'mastre', 'pullsport123'),
(175, 'kontol', 324, 'Laki-Laki', '21312', 'asdkasdlh', 'adlsndas', 'kontol', 'pullsport123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `kd_paket` int(5) NOT NULL,
  `kd_gym` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `lama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`kd_paket`, `kd_gym`, `nama`, `harga`, `lama`) VALUES
(1, 1, '1 bulan', 150000, 1),
(2, 1, '6 bulan', 750000, 6),
(3, 2, 'harian', 10000, 0),
(4, 2, 'bulan', 100000, 0),
(5, 1, '3 bulan', 500000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `no_trx` int(10) NOT NULL,
  `kd_gym` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`no_trx`, `kd_gym`, `tanggal`) VALUES
(1, 2, '2019-01-17'),
(2, 2, '2011-01-02'),
(3, 2, '2011-01-02'),
(4, 2, '2011-01-02'),
(5, 2, '2011-01-02'),
(6, 2, '2011-01-02'),
(7, 2, '2011-01-02'),
(8, 2, '2011-01-02'),
(9, 2, '2011-01-02'),
(10, 2, '2011-01-02'),
(11, 2, '2011-01-02'),
(12, 2, '2011-01-02'),
(13, 2, '2011-01-02'),
(14, 2, '2011-01-02'),
(15, 2, '2011-01-02'),
(16, 2, '2011-01-02'),
(17, 2, '2011-01-02'),
(18, 2, '2011-01-02'),
(19, 2, '2011-01-02'),
(20, 2, '2019-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tbl_barang_gym`
--
ALTER TABLE `tbl_barang_gym`
  ADD KEY `kd_gym` (`kd_gym`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  ADD PRIMARY KEY (`kd_daftar`),
  ADD KEY `kd_gym` (`kd_gym`),
  ADD KEY `kd_member` (`kd_member`);

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD KEY `no_trx` (`no_trx`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `kd_barang_2` (`kd_barang`);

--
-- Indexes for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  ADD PRIMARY KEY (`kd_gym`),
  ADD KEY `kd_admin` (`kd_admin`);

--
-- Indexes for table `tbl_iuran`
--
ALTER TABLE `tbl_iuran`
  ADD PRIMARY KEY (`kd_iuran`),
  ADD KEY `kd_member` (`kd_member`),
  ADD KEY `kd_gym` (`kd_gym`),
  ADD KEY `kd_paket` (`kd_paket`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`kd_member`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`kd_paket`),
  ADD KEY `kd_gym` (`kd_gym`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`no_trx`),
  ADD KEY `kd_gym` (`kd_gym`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `kd_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  MODIFY `kd_daftar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  MODIFY `kd_gym` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_iuran`
--
ALTER TABLE `tbl_iuran`
  MODIFY `kd_iuran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `kd_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  MODIFY `kd_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `no_trx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang_gym`
--
ALTER TABLE `tbl_barang_gym`
  ADD CONSTRAINT `tbl_barang_gym_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `tbl_barang` (`kd_barang`),
  ADD CONSTRAINT `tbl_barang_gym_ibfk_2` FOREIGN KEY (`kd_gym`) REFERENCES `tbl_gym` (`kd_gym`);

--
-- Constraints for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  ADD CONSTRAINT `tbl_daftar_ibfk_1` FOREIGN KEY (`kd_gym`) REFERENCES `tbl_gym` (`kd_gym`),
  ADD CONSTRAINT `tbl_daftar_ibfk_2` FOREIGN KEY (`kd_member`) REFERENCES `tbl_member` (`kd_member`);

--
-- Constraints for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_3` FOREIGN KEY (`no_trx`) REFERENCES `tbl_transaksi` (`no_trx`),
  ADD CONSTRAINT `tbl_detail_transaksi_ibfk_4` FOREIGN KEY (`kd_barang`) REFERENCES `tbl_barang` (`kd_barang`);

--
-- Constraints for table `tbl_gym`
--
ALTER TABLE `tbl_gym`
  ADD CONSTRAINT `tbl_gym_ibfk_1` FOREIGN KEY (`kd_admin`) REFERENCES `tbl_admin` (`kd_admin`);

--
-- Constraints for table `tbl_iuran`
--
ALTER TABLE `tbl_iuran`
  ADD CONSTRAINT `tbl_iuran_ibfk_1` FOREIGN KEY (`kd_member`) REFERENCES `tbl_member` (`kd_member`),
  ADD CONSTRAINT `tbl_iuran_ibfk_2` FOREIGN KEY (`kd_gym`) REFERENCES `tbl_gym` (`kd_gym`),
  ADD CONSTRAINT `tbl_iuran_ibfk_3` FOREIGN KEY (`kd_paket`) REFERENCES `tbl_paket` (`kd_paket`);

--
-- Constraints for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD CONSTRAINT `tbl_paket_ibfk_1` FOREIGN KEY (`kd_gym`) REFERENCES `tbl_gym` (`kd_gym`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`kd_gym`) REFERENCES `tbl_gym` (`kd_gym`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
