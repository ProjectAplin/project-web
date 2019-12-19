-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 04:47 PM
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
-- Table structure for table `tag_bahasa`
--

DROP TABLE IF EXISTS `tag_bahasa`;
CREATE TABLE `tag_bahasa` (
  `tag_bahasa_id` int(11) NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `bahasa_id` tinyint(4) DEFAULT NULL,
  `tag_nama` varchar(100) DEFAULT NULL,
  `tag_nama_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_bahasa`
--

INSERT INTO `tag_bahasa` (`tag_bahasa_id`, `tag_id`, `bahasa_id`, `tag_nama`, `tag_nama_2`) VALUES
(8, 12, 1, 'Kesehatan', 'Health'),
(9, 13, 1, 'Pendidikan', 'Education'),
(11, 15, 1, 'Fotografi', 'Photography');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tag_bahasa`
--
ALTER TABLE `tag_bahasa`
  ADD PRIMARY KEY (`tag_bahasa_id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `bahasa_id` (`bahasa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tag_bahasa`
--
ALTER TABLE `tag_bahasa`
  MODIFY `tag_bahasa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tag_bahasa`
--
ALTER TABLE `tag_bahasa`
  ADD CONSTRAINT `tag_bahasa_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`),
  ADD CONSTRAINT `tag_bahasa_ibfk_3` FOREIGN KEY (`bahasa_id`) REFERENCES `bahasa` (`bahasa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
