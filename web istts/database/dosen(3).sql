-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 03:35 PM
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
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `dosen_id` int(11) NOT NULL,
  `dosen_nama` varchar(255) NOT NULL,
  `dosen_email` varchar(255) DEFAULT '1',
  `dosen_jabatan` varchar(255) NOT NULL,
  `dosen_gambar` varchar(255) NOT NULL,
  `dosen_makul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `dosen_nama`, `dosen_email`, `dosen_jabatan`, `dosen_gambar`, `dosen_makul`) VALUES
(1, 'Agatha Dinarah Sri Rumestri, S.T.', '\r\n\r\nagatha@stts.edu ', 'Dosen S1 Desain Produk', 'images//agatha.jpg', '1. Desain Packaging 1<br>2. Desain Produk 1<br>3. Desain Produk 2<br>4. Komputer Aplikasi 1<br>5. Pengantar Studi Despro '),
(2, 'Agus Gunawan, Ir., MSEE.', 'agus@stts.edu ', 'Dosen S1 Teknik Elektro', 'images//agus.jpg', '1. Academic English 1 <br>  2. Academic English 2 <br>  3. Academic English 3<br>  4. Academic English 4<br>  5. Bahasa Inggris<br>'),
(3, 'Alan David Prayogi, S.T.', 'alandavid@stts.edu ', 'Dosen S1 Desain Produk', 'images//alan.jpg', '1. Material dan Proses Produksi 2<br>  2. Workshop Modeling 2 <br>  3. Modeling <br>  4. Ergonomi<br>'),
(4, 'Amelia Alexandra, S.Kom.', 'amelialexandra.it@gmail.com', 'Dosen S1 Teknik Informatika', 'images//amelia.jpg', '1. Algoritma dan Pemrograman 1<br>  2. Pemrograman Berorientasi Objek <br>  3. Algoritma dan Pemrograman 1 <br>  4. Mobile Device Programming<br>'),
(5, 'Arya Tandy Hermawan, Ir., M.T.', 'arya@stts.edu ', 'Dosen S2 Teknologi Informasi', 'images//arya.jpg', ' 1. Embedded Systems<br>  2. Pengantar Teknologi Informasi <br>  3. Mikroprosesor 2 <br>'),
(6, 'Oswald Baskoro Satyoadi, Ir., M.Kom.', 'oswald@stts.edu ', 'Dosen S1 Teknik Informatika', 'images//baskoro.jpg', '1. Statistika Terapan<br>  2. Matematika 3 <br>  3. Teori Graf <br>'),
(7, 'Eka Rahayu Setyaningsih, S.Kom., M.Kom. ', 'eka@stts.edu ', 'Dosen D3 Manajemen Informatika', 'images//eka.jpg', '1. Algoritma dan Pemrograman 1<br>  2. Pemrograman Web <br>  3. Software Development Project 1 <br>'),
(8, 'Eric Sugiharto, S.Kom., M.Kom. ', 'erick@stts.edu ', 'Dosen D3 Manajemen Informatika', 'images//eric.jpg', '1. Analisa dan Desain Sistem<br>  2. Manajemen Pemasaran <br>  3. E-Marketing <br>'),
(9, 'Grace Levina Dewi, S.Kom., M.Kom.', 'gracelevina@stts.edu ', 'Dosen S1 Teknik Informatika', 'images//grace.jpg', '1. Statistika Terapan<br>  2. Human Computer Interaction <br>  3. Internet dan World Wide Web <br>'),
(10, 'Hendrawan Armanto, S.Kom., M.Kom. ', 'hendrawan@stts.edu ', 'Dosen S1 Teknik Informatika', 'images//hendrawan.jpg', '1. Kecerdasan Buatan<br>  2. Pemrograman Visual <br>  3. Internet Application Framework <br>'),
(11, 'Indra Maryati, S.Kom., M.Kom. ', 'maryati@stts.edu ', 'Dosen D3 Manajemen Informatika', 'images//maryati.jpg', '1. Distributed Database<br>  2. User Experience <br>  3. Basis Data 3<br>'),
(12, 'Yuliana Melita Pranoto, S.Kom., M.Kom.', 'ymp@stts.edu ', 'Dosen S1 Sistem Informasi Bisnis', 'images//yumel.jpg', ' 1. Analisa dan Desain Sistem<br>  2. Rekayasa Perangkat Lunak <br>  3. Program Komputer Aplikasi<br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
