-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 10:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('admin');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `iddaftar` int(11) NOT NULL,
  `idpelajar` int(11) NOT NULL,
  `idkursus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`iddaftar`, `idpelajar`, `idkursus`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 5, 1),
(4, 10, 1),
(5, 11, 1),
(6, 12, 1),
(7, 14, 1),
(8, 4, 6),
(9, 6, 6),
(10, 7, 6),
(11, 8, 6),
(12, 9, 6),
(13, 13, 6),
(14, 1, 6),
(15, 2, 6),
(16, 5, 6),
(17, 10, 6),
(18, 11, 6),
(19, 12, 6),
(20, 14, 6),
(21, 4, 7),
(22, 6, 7),
(23, 7, 7),
(24, 8, 7),
(25, 9, 7),
(26, 13, 7);

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `idkursus` int(11) NOT NULL,
  `kodkursus` varchar(50) NOT NULL,
  `namakursus` varchar(250) NOT NULL,
  `jamkredit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`idkursus`, `kodkursus`, `namakursus`, `jamkredit`) VALUES
(1, 'DFP5013', 'MOBILE APPLICATION DEVELOPMENT', 4),
(3, 'DFP6033', 'SECURE MOBILE COMPUTING', 3),
(4, 'DFN5023', 'NETWORK DESIGN', 3),
(5, 'DFN4043', 'SWITCHING & ROUTING ESSENTIALS', 3),
(6, 'DFT6014', 'INTEGRATED PROJECT', 4),
(7, 'DFN6023', 'CONNECTION WAN', 3),
(8, 'DFN6014', 'ADVANCED ROUTING', 4),
(9, 'DFN6033', 'OPEN SOURCE SERVER ADMINISTRATION', 3),
(10, 'DFW5013', 'ADVANCED WEB DEVELOPMENT', 3),
(13, 'DFP5023', 'PYTHON', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `idpelajar` int(11) NOT NULL,
  `idpensyarah` int(11) NOT NULL,
  `nomatrik` varchar(50) NOT NULL,
  `namapelajar` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`idpelajar`, `idpensyarah`, `nomatrik`, `namapelajar`, `username`, `password`) VALUES
(2, 2, '18DDT18F2013', 'Nursyuhana Binti Abdul Rashid', 'syuhana', 'hana'),
(3, 1, '18DDT18F2010', 'Nurul Emeyra Binti Bakari', 'nurulemeyra', 'mira'),
(4, 2, '18DDT18F2028', 'Umi Nadhirah Binti Abdul Munaim', 'nadhirah', 'umi'),
(5, 1, '18DDT18F2014', 'Leo Melvin S/O Raju', 'melvin', 'leo'),
(6, 2, '18DDT18F2017', 'Suzanna Ann A/P Daniees', 'suzanna', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(7, 1, '18DDT18F2023', 'Zaimie Nurazia Binti Zainol', 'mimie', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(8, 2, '18DDT18F2022', 'Chaviroad A/L Pram', 'chaviroad', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(9, 1, '18DDT18F2016', 'Adli Sidqi Bin Azhar', 'sidqi', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(10, 2, '18DDT18F2029', 'Mohd Raihazarul Irman Bin Mohd Ramli', 'zarul', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(11, 1, '18DDT18F2024', 'Nur Syafiqah Binti Saruji Affandi', 'syafiqah', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(12, 2, '18DDT18F2001', 'Ain\' Nur Najwa Binti Zainol', 'najwa', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(13, 1, '18DDT18F2008', 'Kamaleshwahrran A/L Naidu', 'kamal', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6'),
(14, 2, '18DDT18F2038', 'Thurkeswary A/P Marimuthu', 'thurkes', '$2y$10$Hf/NF2cb5TAGAaAEhwCTdebHvLgwsGV51TiOAMsPklkqrdCpd7ux6');

-- --------------------------------------------------------

--
-- Table structure for table `pensyarah`
--

CREATE TABLE `pensyarah` (
  `idpensyarah` int(11) NOT NULL,
  `namapensyarah` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pensyarah`
--

INSERT INTO `pensyarah` (`idpensyarah`, `namapensyarah`, `jabatan`, `kelas`, `username`, `password`) VALUES
(1, 'Mime Azrina Binti Jaafar', 'Jabatan Teknologi Maklumat Dan Komunikasi', 'DDT5A', 'mime azrina', 'pa1'),
(2, 'Norul Huda Binti Abdul Razak', 'Jabatan Teknologi Maklumat Dan Komunikasi', 'DDT5B', 'norul huda', 'pa2'),
(5, 'Azmiah Binti Aziz', 'Jabatan Teknologi Maklumat Dan Komunikasi', 'DDT6D', 'azmiah', 'pa3'),
(8, 'Ali Binti Ahmad', 'Jabatan Teknologi Maklumat Dan Komunikasi', 'DDT6A', 'ali', 'pa4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`iddaftar`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`idkursus`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`idpelajar`);

--
-- Indexes for table `pensyarah`
--
ALTER TABLE `pensyarah`
  ADD PRIMARY KEY (`idpensyarah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `iddaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pensyarah`
--
ALTER TABLE `pensyarah`
  MODIFY `idpensyarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
