-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 11:04 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisabisas`
--

-- --------------------------------------------------------

--
-- Table structure for table `Kunjungan`
--

CREATE TABLE `Kunjungan` (
  `ID_Kunjungan` int(255) NOT NULL,
  `Jumlah_Pengunjung` int(255) NOT NULL,
  `Hari` varchar(11) NOT NULL,
  `Tanngal` int(32) NOT NULL,
  `Bulan` int(12) NOT NULL,
  `Tahun` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Kunjungan`
--
ALTER TABLE `Kunjungan`
  ADD PRIMARY KEY (`ID_Kunjungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Kunjungan`
--
ALTER TABLE `Kunjungan`
  MODIFY `ID_Kunjungan` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
