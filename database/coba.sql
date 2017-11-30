-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2017 at 02:23 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `Karyawan`
--

CREATE TABLE `Karyawan` (
  `ID` int(99) NOT NULL,
  `Nama` varchar(99) NOT NULL,
  `Status` int(2) NOT NULL,
  `Otoritas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Karyawan`
--

INSERT INTO `Karyawan` (`ID`, `Nama`, `Status`, `Otoritas`) VALUES
(1, 'Nabil', 1, 1),
(2, 'Kuroky', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Komoditas`
--

CREATE TABLE `Komoditas` (
  `ID` int(99) NOT NULL,
  `Nama` varchar(99) NOT NULL,
  `Stok` int(99) NOT NULL,
  `Grade` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Komoditas`
--

INSERT INTO `Komoditas` (`ID`, `Nama`, `Stok`, `Grade`) VALUES
(1, 'Buah naga', 12, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
