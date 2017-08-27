-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2017 at 09:01 PM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot`
--
CREATE DATABASE IF NOT EXISTS `iot` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `iot`;

-- --------------------------------------------------------

--
-- Table structure for table `api_key`
--

CREATE TABLE `api_key` (
  `id_api` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_key`
--

INSERT INTO `api_key` (`id_api`, `username`, `api_key`) VALUES
(1, 'ahmad', 'smart_system'),
(2, 'ahmad', 'openhousetkj');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `data1` varchar(255) NOT NULL,
  `data2` varchar(255) NOT NULL,
  `data3` varchar(255) NOT NULL,
  `data4` varchar(255) NOT NULL,
  `data5` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `data1`, `data2`, `data3`, `data4`, `data5`, `api_key`, `username`) VALUES
(1, '10', '20', '30', '40', '', 'openhousetkj', 'ahmad'),
(2, '', '', '', '', '', 'smart_system', 'ahmad'),
(3, '', '', '', '', '', 'smart_system', 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id_nama` int(11) NOT NULL,
  `device1` varchar(255) NOT NULL,
  `device2` varchar(255) NOT NULL,
  `device3` varchar(255) NOT NULL,
  `device4` varchar(255) NOT NULL,
  `device5` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id_nama`, `device1`, `device2`, `device3`, `device4`, `device5`, `api_key`, `username`) VALUES
(1, 'suhu', 'kelembaban', 'lampu', 'gerbang', 'asap', 'openhousetkj', 'ahmad'),
(2, 'testing', '123', '432', '123', '', 'smart_system', 'ahmad'),
(3, 'pemadam', 'listrik', 'utama', 'selatan', 'barat', 'smart_system', 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `geeknesia`
--

CREATE TABLE `geeknesia` (
  `id_api` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `api_key_geek` varchar(255) NOT NULL,
  `api_key_local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geeknesia_link`
--

CREATE TABLE `geeknesia_link` (
  `id_link` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `taget_name` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `email`, `password`) VALUES
(1, 'ahmad herdiansyah', 'ahmad', 'ipgateway404@gmail.com', '23146633661ff809cf2dcefbf4875448');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_key`
--
ALTER TABLE `api_key`
  ADD PRIMARY KEY (`id_api`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `geeknesia`
--
ALTER TABLE `geeknesia`
  ADD PRIMARY KEY (`id_api`);

--
-- Indexes for table `geeknesia_link`
--
ALTER TABLE `geeknesia_link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_key`
--
ALTER TABLE `api_key`
  MODIFY `id_api` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `geeknesia`
--
ALTER TABLE `geeknesia`
  MODIFY `id_api` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `geeknesia_link`
--
ALTER TABLE `geeknesia_link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
