-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 01:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
-- Table structure for table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul_1` varchar(255) NOT NULL,
  `deskripsi_1` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tag` varchar(13) NOT NULL,
  `foto` longtext NOT NULL,
  `judul_2` varchar(255) NOT NULL,
  `deskripsi_2` varchar(255) NOT NULL,
  `lokasi_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul_1`, `deskripsi_1`, `tanggal`, `lokasi`, `kategori`, `tag`, `foto`, `judul_2`, `deskripsi_2`, `lokasi_2`) VALUES
(7, 'DESAIN DAN PERAGAKAN BUSANA KREASI SENDIRI', 'Ingrid Gotama berlenggaklenggok di halaman Institut Sains dan Teknologi Terpadu Surabaya (ISTTS). Dengan balutan busana khas Jepang dan berpayung putih, dia memamerkan kreasi busana buatannya sendiri. Perempuan 19 tahun itu membuat kostum unik berbahan li', '2019-12-12', 'Auditorium ISTTS', 'Media', '5', 'images//refash.jpg', 'REFASH & CATWALK 2019', '\r\nIngrid Gotama wandered in the courtyard of the Surabaya Integrated Science and Technology Institute (ISTTS). With a typical Japanese dressing and white umbrella, he showed off his own fashion creations. The 19-year-old woman made a unique costume made f', 'ISTTS Auditorium'),
(8, 'LULUSAN ISTTS 100 PERSEN TERSERAP DUNIA KERJA', 'Mengedepankan kualitas dalam bidang sains, teknologi, dan desain telah menjadi prinsip Sekolah Tinggi Teknik Surabaya(STTS) sejak berdiri pada 1979. Perguruan tinggi swasta di Jalan Ngagel Jaya Tengah 73-77, Surabaya, Jawa Timur itu telah meraih sederet p', '2019-11-28', 'ISTTS', 'Media', '3', 'images//lulusan_media.jpg', '100% ISTTS GRADUATES ACCEPTS JOB OFFER', 'Prioritizing quality in the fields of science, technology, and design has been the principle of the Surabaya Technical College (STTS) since its foundation in 1979. The private university on Jalan Ngagel Jaya Tengah 73-77, Surabaya, East Java has won a ser', 'ISTTS'),
(9, 'FOKUS KEMBANGKAN SMART PRODUCT', 'Institut Sains dan Teknologi yang berdiri sejak 1979 ini juga mempunyai beberapa prodi S1 unggulan lain seperti Teknik Elektro, Teknik Informatika, Teknik dan Manajemen Industri, DKV, Desain Produk dll serta program Pasca Sarjana S2 Sistem Informasi. Inst', '2019-12-11', 'ISTTS', 'Media', '1', 'images//smartProduct_media.jpg', 'DEVELOPMENT OF SMART PRODUCTS', 'The Institute of Science and Technology, which was founded in 1979, also has several other excellent S1 study programs such as Electrical Engineering, Informatics Engineering, Industrial Engineering and Management, DKV, Product Design, etc. as well as Pos', 'ISTTS'),
(10, 'LAMPION DARI BUNGKUS MAINAN', 'Ahmad Efendi terlihat girang kemarin. Siswa kelas VB SDN Simokerto V sedang membuat lampion. Bentuknya mengikuti ikon kota Surabaya. yakni ikan suro dan boyo (buaya)', '2019-10-21', 'ISTTS', 'Media', '3', 'images//lampion_media.jpg', 'MAKING LAMPION FROM PLASTIC WASTE', 'Ahmad Efendi was excited yesterday. VB grade student at SDN Simokerto V is making lanterns. The shape follows the Surabaya city icon. namely suro fish and boyo (crocodiles)', 'ISTTS'),
(11, 'KOMPETISI EKSKAVATOR DARI SLANG DAN ALAT SUNTIK', 'Para mahasiswa baru Prodi Teknik Industri Institut Sains dan Teknologi Terpadu (iSTTS) berlomba membuat ekskavator di gedung Laboratorium kemarin. Ekskavator yang dibuat harus menggunakan bahan bahan bekas dengan biaya maksimal Rp.50 ribu. Ekskavator ters', '2019-08-16', 'ISTTS', 'Media', '1', 'images//kompetisi_media.jpg', 'EXCAVATOR COMPETITION FROM HOSE AND INJECTIONS', 'The new students of Industrial Engineering Study Program Institute of Integrated Science and Technology (iSTTS) competed to make excavators in the Laboratory building yesterday. Excavators made must use used materials at a maximum cost of Rp.50 thousand. ', 'ISTTS'),
(12, 'KEGIATAN KEROHANIAN ISTTS 2019', 'Pada tahun ini kegiatan kerohanian diadakan pada tanggal 29 november hingga 1 desember di mana UKK yang mengikuti kegiatan ini adalah UKKI (Unit Kegiatan Kerohanian Islam) yang bertempatan di Villa kambing,Ketapanrame,Trawas,Mojokerto,PD (Persekutuan Doa)', '2019-12-08', 'Bukit Doa Immanuel, Prigen', 'Berita', '5', 'images//CAMP.jpg', 'ISTTS SPIRITUALITY CAMP 2019', 'This year the spiritual activities were held on November 29th to December 1st where the UKK participating in this activity was the UKKI (Islamic Spiritual Activity Unit) located at Goat Villa, Ketapanrame, Trawas, Mojokerto, PD (Prayer Fellowship) held at', 'Bukit Doa Immanuel, Prigen'),
(13, 'VISUALISASI DATA DENGAN TABLEAU', ' Jumat, 8 November 2019, bertempat di Gedung E-4 iSTTS, seminar Knowledge Sharing Program (KSP) yang ke-4 mengangkat tema â€œHow to Visualize Your Data Easilyâ€ dibawakan oleh salah satu dosen Informatika di iSTTS, Bapak Hendrawan A.,S.Kom.,M.Kom. KSP ka', '2019-11-08', 'Gedung E-4 ISTTS', 'Berita', '1', 'images//tableau_berita.jpg', 'DATA VISUALIZATION WITH TABLEAU', 'Friday, November 8, 2019, at iSTTS E-4 Building, the 4th Knowledge Sharing Program (KSP) seminar raised the theme \"How to Visualize Your Data Easily\" by one of the Informatics lecturers at iSTTS, Mr. Hendrawan A., S . Kom., M. Kom. This time the KSP gave ', 'ISTTS(E-4 Building)'),
(14, 'NTUST RECENT RESEARCH ON MULTIMEDIA SYSTEMS', 'Kamis, 7 november 2019 pada kuliah tamu sesi 2 ini membahas mengenai Augmented Reality,pada sesi 2 ini materi di bawakan oleh PROF. Chuan-Kai Yang,yang merupakan professor dari National Taiwan University of Science and Technology (NTUST).pada sesi ini di ', '2019-11-07', 'Gedung E-4 ISTTS', 'Berita', '3', 'images//ntust_berita.jpg', 'NTUST RECENT RESEARCH ON MULTIMEDIA SYSTEMS', 'Thursday, November 7, 2019 in the guest lecture session 2 discussed about Augmented Reality, in session 2 this material was presented by PROF. Chuan-Kai Yang, who is a professor from the National Taiwan University of Science and Technology (NTUST). This s', 'ISTTS(E-4 Building)'),
(15, 'ISTTS GAMER LEAGUE 2019', ' Sabtu,9 november 2019, ISTTS jurusan SIB(Sistem Informasi Bisnis) mengadakan 8 besar dari lomba E-SPORTnya yang dimulai pada hari rabu tanggal 6 November 2019.Acara dimulai dari jam 1 sampai jam 2 untuk open gate acara tersebut. Yang kemudian dilanjutkan', '2019-11-09', 'Auditorium ISTTS', 'Berita', '1', 'images//gamer_berita.jpg', 'ISTTS GAMER LEAGUE 2019', 'Saturday, November 9, 2019, ISTTS majoring in SIB (Business Information Systems) held 8 of its E-SPORT competitions which began on Wednesday, November 6, 2019. The event started from 1 to 2 for the open gate event. Then followed by the opening ceremony of', 'ISTTS Auditorium'),
(16, 'MERIAHNYA DIES NATALIS 40 ISTTS', ' 20 November 2019,  ISTTS menyelangarakan acara Dies Natalis, dimana Dies natalis merupakan sebuah hari yang bersifat monumental bagi setiap kampus dimana kegiatan ini dilakukan setiap tahunnya dengan tema yang berbeda beda setiap tahun. Di lustrum ke-8 i', '2019-11-20', 'Auditorium ISTTS', 'Berita', '1', 'images//dies_berita.jpg', 'CELEBRATION OF DIES NATALIS 40', 'November 20, 2019, ISTTS held a Anniversary event, where the Anniversary is a monumental day for each campus where this activity is carried out annually with a different theme each year. At the 8th lustrum this was one of the happiest moments at ISTTS whe', 'ISTTS Auditorium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
