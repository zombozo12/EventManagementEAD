-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 06:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `evt_id` int(20) NOT NULL,
  `evt_nama` varchar(100) NOT NULL,
  `evt_deskripsi` text NOT NULL,
  `evt_tanggal` int(10) NOT NULL,
  `evt_lokasi` text NOT NULL,
  `evt_poster` text NOT NULL,
  `evt_kuota` int(4) NOT NULL,
  `evt_createdDate` int(10) NOT NULL,
  `evt_updateDate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`evt_id`, `evt_nama`, `evt_deskripsi`, `evt_tanggal`, `evt_lokasi`, `evt_poster`, `evt_kuota`, `evt_createdDate`, `evt_updateDate`) VALUES
(3, 'PRODASE TALK', 'Hello Guys!\r\n\r\nTidak terasa sudah ada di penghujung semester nih, semoga sudah siap untuk menjalani UAS yaa, Prodase punya acara keren nih, bakalan ada kolaborasi antara laboratorium EAD dengan Daspro yang pastinya bakalan seruu banget, acara sharing ilmu antar asisten, namanya \"PRODASE Talk\" yang bakalan ngasih ilmu baru buat temen-temen !! ??\r\n\r\nDimana Acaranya ? Class Lab C1 for invitation only (Internal), Jangan lupa stay tune Instagram @ead.fse & @dasprolab,\r\nkamis pukul 19.00 WIB ya! , Tonton live streamnya biar tau keseruanyaa... \r\n\r\n\"Satu-satunya kesempatan menikmati\r\nSajian Tuhan yang paling murni\r\nSembari mengintipNya meracik\r\nTakdir kita hari ini\".\r\n\r\n-Sam Haidy\r\n\r\n#FSE', 1543950000, '', 'http://localhost/EventManagementEAD/application/img/protalk-vol3.jpg', 20, 1538420400, 0),
(4, 'KOTA PALU TERJADI 534 AKTIVITAS GEMPA SUSULAN', 'Telah terjadi gempa susulan di Kota Palu sebanyak 534 aktivitas gempa susulan hingga hari Sabtu 13 Oktober 2018. (Sumber: new.detik.com)\r\n\r\nMari kita membantu saudara kita yang mengalami musibah Tsunami di Kota Palu dan Kota Donggala, Sulawesi Tengah.\r\n\r\nUntuk donasi, dapat transfer ke rekening:\r\nBank Mandiri 131-00-138-085-32\r\n(a.n Nurdinintya Athari)\r\n\r\nJangan lupa jumlah donasi diakhiri angka 1 (contoh donasi 1 jt menjadi Rp 1.000.001 agar mempermudah pengecekan)\r\n\r\nDonasi akan dibuka sampai acara puncak pada hari Jumat, 26 Oktober 2018.\r\n\r\n#OneHundredMillionForPalu\r\n\r\nSupported by:\r\n1. Paguyuban Lab FRI \r\n2.  Kemahasiswaan FRI', 1540580400, '', 'http://localhost/EventManagementEAD/application/img/baksourat-palu.jpg', 1000, 1514833200, 0),
(5, 'asdasd', 'adsasda', 1554148740, '', ' ', 213123, 1554476500, 0),
(6, 'asdasd', 'adsasda', 1554148740, '', ' ', 213123, 1554476547, 0),
(7, 'adasd', 'adadasd', 1555359000, '', ' ', 213123, 1554477062, 0),
(8, 'adasd', 'adadasd', 1555359000, '', ' ', 213123, 1554477107, 0),
(9, 'adasd', 'adadasd', 1555359000, '', ' ', 213123, 1554477282, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventcat`
--

CREATE TABLE `tbl_eventcat` (
  `evc_id` int(20) NOT NULL,
  `evc_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eventcat`
--

INSERT INTO `tbl_eventcat` (`evc_id`, `evc_name`) VALUES
(1, 'Pengabdian Masyarakat'),
(2, 'Seminar'),
(3, 'Pelatihan'),
(4, 'Priority');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventcatrel`
--

CREATE TABLE `tbl_eventcatrel` (
  `ecl_id` int(20) NOT NULL,
  `evt_id` int(20) NOT NULL,
  `evc_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eventcatrel`
--

INSERT INTO `tbl_eventcatrel` (`ecl_id`, `evt_id`, `evc_id`) VALUES
(1, 3, 2),
(2, 4, 1),
(3, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventpendf`
--

CREATE TABLE `tbl_eventpendf` (
  `epf_id` int(20) NOT NULL,
  `usr_id` int(20) NOT NULL,
  `evt_id` int(20) NOT NULL,
  `epf_jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventpendfmanual`
--

CREATE TABLE `tbl_eventpendfmanual` (
  `epm_id` int(20) NOT NULL,
  `evt_id` int(20) NOT NULL,
  `epm_nama` varchar(100) NOT NULL,
  `epm_email` varchar(254) NOT NULL,
  `epm_nohp` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eventpendfmanual`
--

INSERT INTO `tbl_eventpendfmanual` (`epm_id`, `evt_id`, `epm_nama`, `epm_email`, `epm_nohp`) VALUES
(1, 4, 'test1', 'test1@mail.com', 808080808),
(2, 4, 'test1', 'test1@mail.com', 808080808),
(3, 4, 'test1', 'test1@mail.com', 808080808);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventuser`
--

CREATE TABLE `tbl_eventuser` (
  `evr_id` int(20) NOT NULL,
  `evt_id` int(20) NOT NULL,
  `usr_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eventuser`
--

INSERT INTO `tbl_eventuser` (`evr_id`, `evt_id`, `usr_id`) VALUES
(1, 3, 2),
(2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_host`
--

CREATE TABLE `tbl_host` (
  `hst_id` int(20) NOT NULL,
  `evt_id` int(20) NOT NULL,
  `hst_name` varchar(100) NOT NULL,
  `hst_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_host`
--

INSERT INTO `tbl_host` (`hst_id`, `evt_id`, `hst_name`, `hst_pic`) VALUES
(1, 3, 'Indra Fauzan', 'http://localhost/EventManagementEAD/application/img/zln.jpg'),
(2, 3, 'Haidar Alvinanda', 'http://localhost/EventManagementEAD/application/img/hai.jpg'),
(3, 4, 'Anisa Agustina', 'http://localhost/EventManagementEAD/application/img/ans.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `new_id` int(20) NOT NULL,
  `new_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`new_id`, `new_email`) VALUES
(1, 'mail@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `usr_id` int(20) NOT NULL,
  `usr_fullname` varchar(100) NOT NULL,
  `usr_username` varchar(20) NOT NULL,
  `usr_role` enum('Admin','EO','User') NOT NULL,
  `usr_password` varchar(64) NOT NULL,
  `usr_email` varchar(254) NOT NULL,
  `usr_nohp` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`usr_id`, `usr_fullname`, `usr_username`, `usr_role`, `usr_password`, `usr_email`, `usr_nohp`) VALUES
(1, '', 'admin', 'Admin', '8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918', 'admin@gmail.com', 0),
(2, '', 'test1', 'User', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'test1@mail.com', 0),
(3, '', 'a', 'User', 'CA978112CA1BBDCAFAC231B39A23DC4DA786EFF8147C4E72B9807785AFEE48BB', 'b@m.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tvbl_eventstatus`
--

CREATE TABLE `tvbl_eventstatus` (
  `evs_id` int(20) NOT NULL,
  `evt_id` int(20) NOT NULL,
  `evs_status` enum('Pending','Confirmed','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`evt_id`);

--
-- Indexes for table `tbl_eventcat`
--
ALTER TABLE `tbl_eventcat`
  ADD PRIMARY KEY (`evc_id`);

--
-- Indexes for table `tbl_eventcatrel`
--
ALTER TABLE `tbl_eventcatrel`
  ADD PRIMARY KEY (`ecl_id`),
  ADD KEY `evt_id` (`evt_id`),
  ADD KEY `evc_id` (`evc_id`);

--
-- Indexes for table `tbl_eventpendf`
--
ALTER TABLE `tbl_eventpendf`
  ADD PRIMARY KEY (`epf_id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `evt_id` (`evt_id`);

--
-- Indexes for table `tbl_eventpendfmanual`
--
ALTER TABLE `tbl_eventpendfmanual`
  ADD PRIMARY KEY (`epm_id`),
  ADD KEY `evt_id` (`evt_id`);

--
-- Indexes for table `tbl_eventuser`
--
ALTER TABLE `tbl_eventuser`
  ADD PRIMARY KEY (`evr_id`),
  ADD KEY `evt_id` (`evt_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Indexes for table `tbl_host`
--
ALTER TABLE `tbl_host`
  ADD PRIMARY KEY (`hst_id`),
  ADD KEY `evt_id` (`evt_id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `tvbl_eventstatus`
--
ALTER TABLE `tvbl_eventstatus`
  ADD PRIMARY KEY (`evs_id`),
  ADD KEY `evt_id` (`evt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `evt_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_eventcat`
--
ALTER TABLE `tbl_eventcat`
  MODIFY `evc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_eventcatrel`
--
ALTER TABLE `tbl_eventcatrel`
  MODIFY `ecl_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_eventpendf`
--
ALTER TABLE `tbl_eventpendf`
  MODIFY `epf_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_eventpendfmanual`
--
ALTER TABLE `tbl_eventpendfmanual`
  MODIFY `epm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_eventuser`
--
ALTER TABLE `tbl_eventuser`
  MODIFY `evr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_host`
--
ALTER TABLE `tbl_host`
  MODIFY `hst_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `new_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `usr_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tvbl_eventstatus`
--
ALTER TABLE `tvbl_eventstatus`
  MODIFY `evs_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_eventcatrel`
--
ALTER TABLE `tbl_eventcatrel`
  ADD CONSTRAINT `tbl_eventcatrel_ibfk_1` FOREIGN KEY (`evc_id`) REFERENCES `tbl_eventcat` (`evc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_eventcatrel_ibfk_2` FOREIGN KEY (`evt_id`) REFERENCES `tbl_event` (`evt_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_eventpendf`
--
ALTER TABLE `tbl_eventpendf`
  ADD CONSTRAINT `tbl_eventpendf_ibfk_1` FOREIGN KEY (`evt_id`) REFERENCES `tbl_event` (`evt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_eventpendf_ibfk_2` FOREIGN KEY (`usr_id`) REFERENCES `tbl_user` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_eventpendfmanual`
--
ALTER TABLE `tbl_eventpendfmanual`
  ADD CONSTRAINT `tbl_eventpendfmanual_ibfk_1` FOREIGN KEY (`evt_id`) REFERENCES `tbl_event` (`evt_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_eventuser`
--
ALTER TABLE `tbl_eventuser`
  ADD CONSTRAINT `tbl_eventuser_ibfk_1` FOREIGN KEY (`evt_id`) REFERENCES `tbl_event` (`evt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_eventuser_ibfk_2` FOREIGN KEY (`usr_id`) REFERENCES `tbl_user` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_host`
--
ALTER TABLE `tbl_host`
  ADD CONSTRAINT `tbl_host_ibfk_1` FOREIGN KEY (`evt_id`) REFERENCES `tbl_event` (`evt_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tvbl_eventstatus`
--
ALTER TABLE `tvbl_eventstatus`
  ADD CONSTRAINT `tvbl_eventstatus_ibfk_1` FOREIGN KEY (`evt_id`) REFERENCES `tbl_event` (`evt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
