-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 01:19 PM
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
-- Database: `project-aplin-2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `nip` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan_1` varchar(255) NOT NULL,
  `jabatan_2` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `quotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `email`, `jabatan_1`, `jabatan_2`, `gambar`, `quotes`) VALUES
(1, 'Agatha Dinarah Sri Rumestri, S.T.', '\r\n\r\nagatha@stts.edu ', 'Dosen S1 Desain Produk', 'S1 Product Design Lecturer', '..//assets//images//agatha.jpg', '\"God simply ask us to be the best version of ourselves. Be The First, Be The Best, or Be Different!\"'),
(2, 'Agus Gunawan, Ir., MSEE.', 'agus@stts.edu ', 'Dosen S1 Teknik Elektro', 'S1 Electrical Engineering lecturer', '..//assets//images//agus.jpg', '\"\"'),
(3, 'Alan David Prayogi, S.T.', 'alandavid@stts.edu ', 'Dosen S1 Desain Produk', 'S1 Product Design Lecturer', '..//assets//images//alan.jpg', '\"\"'),
(4, 'Amelia Alexandra, S.Kom.', 'amel.agustina@gmaDosen ', 'Dosen S1 Teknik Informatika', 'S1 Informatics Engineering lecturer', '..//assets//images//amelia.jpg', '\"\"'),
(5, 'Arya Tandy Hermawan, Ir., M.T.', 'arya@stts.edu ', 'Dosen S2 Teknologi Informasi', 'S2 Information Technology Lecturer ', '..//assets//images//arya.jpg', '\"No Improvement without changes\"'),
(6, 'Oswald Baskoro Satyoadi, Ir., M.Kom.', 'oswald@stts.edu ', 'Dosen S1 Teknik Informatika', 'S1 Informatics Engineering lecturer', '..//assets//images//baskoro.jpg', '\"\"'),
(7, 'Eka Rahayu Setyaningsih, S.Kom., M.Kom. ', 'eka@stts.edu ', 'Dosen D3 Manajemen Informatika', 'D3 Information Management Lecturer ', '..//assets//images//eka.jpg', '\"Live as if you were to die tomorrow. Learn as if you were to live forever.\"'),
(8, 'Erick Pranata, S.Kom., M.Kom. ', 'erick@stts.edu ', 'Dosen D3 Manajemen Informatika', 'D3 Information Management Lecturer ', '..//assets//images//eric.jpg', '\"Perbaikilah diri sebelum kita memperbaiki dunia\"'),
(9, 'Grace Levina Dewi, S.Kom., M.Kom.', 'gracelevina@stts.edu ', 'Dosen S1 Teknik Informatika', 'S1 Informatics Engineering lecturer', '..//assets//images//grace.jpg', '\"\"'),
(10, 'Hendrawan Armanto, S.Kom., M.Kom. ', 'hendrawan@stts.edu ', 'Dosen S1 Teknik Informatika', 'S1 Informatics Engineering lecturer', '..//assets//images//hendrawan.jpg', '\"If you say, \"If I had a little more. I should be very satisfied\". You make a mistake, if you are not content with what you have, you would not be satisfied, if it were doubled (Charles H. Spurgeon) \"'),
(11, 'Indra Maryati, S.Kom., M.Kom. ', 'maryati@stts.edu ', 'Dosen D3 Manajemen Informatika', 'D3 Information Management Lecturer ', '..//assets//images//maryati.jpg', '\"Datang, Lihat, dan Buktikan\"'),
(12, 'Yuliana Melita Pranoto, S.Kom., M.Kom.', 'ymp@stts.edu ', 'Dosen S1 Sistem Informasi Bisnis', 'S1 Business Information Systems Lecturer ', '..//assets//images//yumel.jpg', '\" Things of today, accomplished today (ancient chinese proverb)\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
