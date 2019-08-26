-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 11:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `hackhaton`
--

CREATE TABLE `hackhaton` (
  `id_hack` int(11) NOT NULL,
  `univ` varchar(40) NOT NULL,
  `tim` varchar(20) NOT NULL,
  `ketua` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `handphone` int(15) NOT NULL,
  `ktm_ketua` varchar(200) NOT NULL,
  `anggota_1` varchar(30) NOT NULL,
  `email_1` varchar(25) NOT NULL,
  `handphone_1` int(15) NOT NULL,
  `ktm_1` varchar(200) NOT NULL,
  `anggota_2` varchar(30) NOT NULL,
  `email_2` varchar(25) NOT NULL,
  `handphone_2` varchar(15) NOT NULL,
  `ktm_2` varchar(200) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `kehadiran` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(3, 'hi-technology@gmail.com', 'hmtihitech19');

-- --------------------------------------------------------

--
-- Table structure for table `sf`
--

CREATE TABLE `sf` (
  `id_sf` int(11) NOT NULL,
  `univ` varchar(30) NOT NULL,
  `aplikasi` varchar(20) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `anggota_1` varchar(30) NOT NULL,
  `email_1` varchar(30) NOT NULL,
  `handphone_1` int(15) NOT NULL,
  `ktm_1` varchar(200) NOT NULL,
  `anggota_2` varchar(30) NOT NULL,
  `email_2` varchar(25) NOT NULL,
  `handphone_2` int(15) NOT NULL,
  `ktm_2` varchar(200) NOT NULL,
  `ket` varchar(25) NOT NULL,
  `kehadiran` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `talkshow`
--

CREATE TABLE `talkshow` (
  `id_talk` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `handphone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id_workshop` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ket` varchar(20) NOT NULL,
  `kehadiran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hackhaton`
--
ALTER TABLE `hackhaton`
  ADD PRIMARY KEY (`id_hack`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `sf`
--
ALTER TABLE `sf`
  ADD PRIMARY KEY (`id_sf`);

--
-- Indexes for table `talkshow`
--
ALTER TABLE `talkshow`
  ADD PRIMARY KEY (`id_talk`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hackhaton`
--
ALTER TABLE `hackhaton`
  MODIFY `id_hack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sf`
--
ALTER TABLE `sf`
  MODIFY `id_sf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `talkshow`
--
ALTER TABLE `talkshow`
  MODIFY `id_talk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
