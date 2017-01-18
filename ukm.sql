-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 12:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `jam` text NOT NULL,
  `tempat` text NOT NULL,
  `acara` text NOT NULL,
  `tanggal` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`jam`, `tempat`, `acara`, `tanggal`, `id`) VALUES
('02:10 PM', 'Aula STIMIK KHARISMA', 'Rapat untuk membahas acara Bodhivijja on Vacation', '28 september 2015', 1),
('11:30 AM', 'Aula STIMIK KHARISMA', 'Rapat untuk membahas Hari Ibu (Kunjungan Panti Jompo)', '29 November 2015', 2),
('11:30 AM', 'Aula STIMIK KHARISMA', 'Rapat untuk membahas Hari Ibu (Kunjungan Panti Jompo)', '10 February 2016', 3),
('11:30 AM	', 'Ruang 203 STIMIK KHARISMA', 'Rapat dalam rangka acara Waisak (Kunjungan Panti Asuhan)', '28 April 2016', 4),
('02:10 PM', 'Ruang 103 STIMIK KHARISMA', 'Rapat dalam rangka Asadha (Seminar Dhamma)', '20 Juni 2016', 5),
('03:30 PM', 'Ruang 301 STIMIK KHARISMA', 'Rapat dalam rangka acara Kathina', '12 Oktober 2016', 6);

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `id` int(20) NOT NULL,
  `tanggal` text NOT NULL,
  `acara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planning`
--

INSERT INTO `planning` (`id`, `tanggal`, `acara`) VALUES
(5, '3 Desember 2015', 'Hari Ibu (Kunjungan Panti Jompo)'),
(6, '15 February 2016', 'Magha Puja (Seminar)'),
(7, '1 Mei 2016', 'Waisak (Kunjungan Panti Asuhan)'),
(8, '28 Juni 2016', '	Asadha (Seminar Dhamma)'),
(14, '21 agustus 2016', 'Kunjungan klenteng Xiang ma');

-- --------------------------------------------------------

--
-- Table structure for table `ukm_bendahara1`
--

CREATE TABLE `ukm_bendahara1` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `jurusan` text NOT NULL,
  `angkatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm_bendahara1`
--

INSERT INTO `ukm_bendahara1` (`id`, `nama`, `jabatan`, `jurusan`, `angkatan`) VALUES
(1, 'Calista R', 'Jabatan: Bendahara I (2016-2017)', 'Jurusan: Sistem Informasi', 'Angkatan: 2014');

-- --------------------------------------------------------

--
-- Table structure for table `ukm_bendahara2`
--

CREATE TABLE `ukm_bendahara2` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `jurusan` text NOT NULL,
  `angkatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm_bendahara2`
--

INSERT INTO `ukm_bendahara2` (`id`, `nama`, `jabatan`, `jurusan`, `angkatan`) VALUES
(1, 'Jesslyn', 'Jabatan: Bendahara II (2016-2017)', 'Jurusan: Teknik Informatika', 'Angkatan: 2015');

-- --------------------------------------------------------

--
-- Table structure for table `ukm_humas`
--

CREATE TABLE `ukm_humas` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `jurusan` text NOT NULL,
  `angkatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm_humas`
--

INSERT INTO `ukm_humas` (`id`, `nama`, `jabatan`, `jurusan`, `angkatan`) VALUES
(1, 'Hendra Tan', 'Jabatan: Koordinator Humas (2016-2017)', 'Jurusan: Teknik Informatika', 'Angkatan: 2014');

-- --------------------------------------------------------

--
-- Table structure for table `ukm_ketua`
--

CREATE TABLE `ukm_ketua` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `jurusan` text NOT NULL,
  `angkatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm_ketua`
--

INSERT INTO `ukm_ketua` (`id`, `nama`, `jabatan`, `jurusan`, `angkatan`) VALUES
(1, 'Swandy Wisang', 'Jabatan: Ketua UKM BODHIVIJJA (2016-2017)', 'Jurusan: Teknik Informatika', 'Angkatan: 2014');

-- --------------------------------------------------------

--
-- Table structure for table `ukm_sekretaris`
--

CREATE TABLE `ukm_sekretaris` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `jurusan` text NOT NULL,
  `angkatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm_sekretaris`
--

INSERT INTO `ukm_sekretaris` (`id`, `nama`, `jabatan`, `jurusan`, `angkatan`) VALUES
(1, 'Willianto', 'Jabatan: Sekretaris (2016-2017)', 'Jurusan: Teknik Informatika', 'Angkatan: 2015');

-- --------------------------------------------------------

--
-- Table structure for table `ukm_wakil`
--

CREATE TABLE `ukm_wakil` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `jurusan` text NOT NULL,
  `angkatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm_wakil`
--

INSERT INTO `ukm_wakil` (`id`, `nama`, `jabatan`, `jurusan`, `angkatan`) VALUES
(1, 'Jason Pratama Sunarji', 'Jabatan: Wakil Ketua (2016-2017)', 'Jurusan: Teknik Informatika', 'Angkatan: 2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm_bendahara1`
--
ALTER TABLE `ukm_bendahara1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm_bendahara2`
--
ALTER TABLE `ukm_bendahara2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm_humas`
--
ALTER TABLE `ukm_humas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm_ketua`
--
ALTER TABLE `ukm_ketua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm_sekretaris`
--
ALTER TABLE `ukm_sekretaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm_wakil`
--
ALTER TABLE `ukm_wakil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ukm_bendahara1`
--
ALTER TABLE `ukm_bendahara1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ukm_bendahara2`
--
ALTER TABLE `ukm_bendahara2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ukm_humas`
--
ALTER TABLE `ukm_humas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ukm_ketua`
--
ALTER TABLE `ukm_ketua`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ukm_sekretaris`
--
ALTER TABLE `ukm_sekretaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ukm_wakil`
--
ALTER TABLE `ukm_wakil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
