-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 06:41 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `Qty` double NOT NULL,
  `Subtotal` int(11) NOT NULL,
  `Diskon` int(11) NOT NULL,
  `IdTransaksi` char(9) NOT NULL,
  `IdJenisLaundry` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenislaundry`
--

CREATE TABLE `tb_jenislaundry` (
  `IdJenisLaundry` char(5) NOT NULL,
  `NamaJenisLaundry` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Satuan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `IdKaryawan` int(11) NOT NULL,
  `NamaKaryawan` varchar(50) NOT NULL,
  `NoHp` char(12) NOT NULL,
  `Alamat` text NOT NULL,
  `TglMasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `HakAkses` varchar(25) NOT NULL,
  `IdKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `IdPengeluaran` char(9) NOT NULL,
  `TglPengeluaran` datetime NOT NULL,
  `JenisPengeluaran` varchar(50) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Satuan` varchar(10) NOT NULL,
  `TotalHarga` int(11) NOT NULL,
  `Catatan` text NOT NULL,
  `IdKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `IdTransaksi` char(9) NOT NULL,
  `TglTransaksi` datetime NOT NULL,
  `NamaCustomer` varchar(50) NOT NULL,
  `Total` int(11) NOT NULL,
  `BiayaTambahan` int(11) NOT NULL,
  `Potongan` int(11) NOT NULL,
  `Grandtotal` int(11) NOT NULL,
  `StatusAmbil` tinyint(1) NOT NULL,
  `StatusBayar` tinyint(1) NOT NULL,
  `TglAmbil` datetime NOT NULL,
  `TglBayar` datetime NOT NULL,
  `Catatan` text NOT NULL,
  `IdKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_akun`
--
CREATE TABLE `vw_akun` (
`Username` varchar(50)
,`HakAkses` varchar(25)
,`NamaKaryawan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_pengeluaran`
--
CREATE TABLE `vw_pengeluaran` (
`IdPengeluaran` char(9)
,`TglPengeluaran` datetime
,`JenisPengeluaran` varchar(50)
,`Qty` int(11)
,`Satuan` varchar(10)
,`TotalHarga` int(11)
,`Catatan` text
,`NamaKaryawan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_transaksi`
--
CREATE TABLE `vw_transaksi` (
`IdTransaksi` char(9)
,`TglTransaksi` datetime
,`NamaCustomer` varchar(50)
,`Total` int(11)
,`BiayaTambahan` int(11)
,`Potongan` int(11)
,`Grandtotal` int(11)
,`StatusAmbil` tinyint(1)
,`StatusBayar` tinyint(1)
,`TglAmbil` datetime
,`TglBayar` datetime
,`Catatan` text
,`IdKaryawan` int(11)
,`NamaKaryawan` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_akun`
--
DROP TABLE IF EXISTS `vw_akun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_akun`  AS  select `l`.`Username` AS `Username`,`l`.`HakAkses` AS `HakAkses`,`k`.`NamaKaryawan` AS `NamaKaryawan` from (`tb_login` `l` join `tb_karyawan` `k` on((`k`.`IdKaryawan` = `l`.`IdKaryawan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_pengeluaran`
--
DROP TABLE IF EXISTS `vw_pengeluaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pengeluaran`  AS  select `p`.`IdPengeluaran` AS `IdPengeluaran`,`p`.`TglPengeluaran` AS `TglPengeluaran`,`p`.`JenisPengeluaran` AS `JenisPengeluaran`,`p`.`Qty` AS `Qty`,`p`.`Satuan` AS `Satuan`,`p`.`TotalHarga` AS `TotalHarga`,`p`.`Catatan` AS `Catatan`,`k`.`NamaKaryawan` AS `NamaKaryawan` from (`tb_pengeluaran` `p` join `tb_karyawan` `k` on((`k`.`IdKaryawan` = `p`.`IdKaryawan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_transaksi`
--
DROP TABLE IF EXISTS `vw_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_transaksi`  AS  select `t`.`IdTransaksi` AS `IdTransaksi`,`t`.`TglTransaksi` AS `TglTransaksi`,`t`.`NamaCustomer` AS `NamaCustomer`,`t`.`Total` AS `Total`,`t`.`BiayaTambahan` AS `BiayaTambahan`,`t`.`Potongan` AS `Potongan`,`t`.`Grandtotal` AS `Grandtotal`,`t`.`StatusAmbil` AS `StatusAmbil`,`t`.`StatusBayar` AS `StatusBayar`,`t`.`TglAmbil` AS `TglAmbil`,`t`.`TglBayar` AS `TglBayar`,`t`.`Catatan` AS `Catatan`,`t`.`IdKaryawan` AS `IdKaryawan`,`k`.`NamaKaryawan` AS `NamaKaryawan` from (`tb_transaksi` `t` join `tb_karyawan` `k` on((`k`.`IdKaryawan` = `t`.`IdKaryawan`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD KEY `IdTransaksi` (`IdTransaksi`),
  ADD KEY `IdJenisLaundry` (`IdJenisLaundry`);

--
-- Indexes for table `tb_jenislaundry`
--
ALTER TABLE `tb_jenislaundry`
  ADD PRIMARY KEY (`IdJenisLaundry`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`IdKaryawan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `IdKaryawan` (`IdKaryawan`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`IdPengeluaran`),
  ADD KEY `IdKaryawan` (`IdKaryawan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`IdTransaksi`),
  ADD KEY `IdKaryawan` (`IdKaryawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `IdKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`IdTransaksi`) REFERENCES `tb_transaksi` (`IdTransaksi`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`IdJenisLaundry`) REFERENCES `tb_jenislaundry` (`IdJenisLaundry`) ON DELETE NO ACTION;

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`IdKaryawan`) REFERENCES `tb_karyawan` (`IdKaryawan`) ON DELETE CASCADE;

--
-- Constraints for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD CONSTRAINT `tb_pengeluaran_ibfk_1` FOREIGN KEY (`IdKaryawan`) REFERENCES `tb_karyawan` (`IdKaryawan`) ON DELETE NO ACTION;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`IdKaryawan`) REFERENCES `tb_karyawan` (`IdKaryawan`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
