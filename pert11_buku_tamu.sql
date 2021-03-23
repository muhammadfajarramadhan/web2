-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 06:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Kota` varchar(100) NOT NULL,
  `Pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`ID`, `Nama`, `Email`, `Alamat`, `Kota`, `Pesan`) VALUES
(12, 'Taofik Hidayat', 'hidayattaofik141@gmail.com', 'Desa Seda, Mandirancan', 'Kuningan', 'selamat siang'),
(14, 'Samsudin', 'sams36@gmail.com', 'Kebon Jeruk', 'Jakarta Barat', 'Selamat Bekerja'),
(25, 'Herliyani', 'herliiyani96@gmail.com', 'Mustika Jaya', 'Bekasi Timur', 'Salam Hangat'),
(27, 'Sari', 'sarii22@gmail.com', 'Batu Raja', 'Palembang', 'Tetap Semangat'),
(36, 'Samsul', 'samsul12@gmail.com', 'Jl. Melati, Curug', 'Tangerang', 'apa kabar ?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
