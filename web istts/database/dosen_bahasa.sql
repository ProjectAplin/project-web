-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 08:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sttsedunew`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_bahasa`
--

DROP TABLE IF EXISTS `dosen_bahasa`;
CREATE TABLE `dosen_bahasa` (
  `dosen_bahasa_id` int(11) NOT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `bahasa_id` tinyint(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kata_mutiara` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_bahasa`
--
ALTER TABLE `dosen_bahasa`
  ADD PRIMARY KEY (`dosen_bahasa_id`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `bahasa_id` (`bahasa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen_bahasa`
--
ALTER TABLE `dosen_bahasa`
  MODIFY `dosen_bahasa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen_bahasa`
--
ALTER TABLE `dosen_bahasa`
  ADD CONSTRAINT `dosen_bahasa_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`dosen_id`),
  ADD CONSTRAINT `dosen_bahasa_ibfk_2` FOREIGN KEY (`bahasa_id`) REFERENCES `bahasa` (`bahasa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
