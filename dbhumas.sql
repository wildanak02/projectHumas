-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 04:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhumas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pers`
--

CREATE TABLE `tb_pers` (
  `idPers` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pers`
--

INSERT INTO `tb_pers` (`idPers`, `nama`, `nohp`, `media`, `alamat`) VALUES
(2, 'Wildan', '082228619292', 'Kompas TV', 'Jl. Manggis No. 84'),
(3, 'Thariq', '082XXX', 'coba', 'lagigan'),
(4, 'a', 'a', 'a', 'a'),
(5, 'b', 'b', 'b', 'b'),
(6, 'c', 'c', 'c', 'c'),
(7, 'd', 'd', 'd', 'd'),
(8, '', 'e', 'e', 'e'),
(9, 'f', 'f', 'f', 'f'),
(10, 'g', 'g', 'g', 'g'),
(11, 'h', 'h', 'h', 'h'),
(12, 'j', 'j', 'j', 'j'),
(13, 'k', 'k', 'Kompas TV', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `level`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin'),
(4, 2, 'superuser', 'superuser'),
(5, 3, 'user', 'user'),
(7, 3, 'user3', 'user3'),
(8, 3, 'user4', 'user4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pers`
--
ALTER TABLE `tb_pers`
  ADD PRIMARY KEY (`idPers`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pers`
--
ALTER TABLE `tb_pers`
  MODIFY `idPers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
