-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 11:39 AM
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
(1, '5 November 2015', 'Bodhivijja on Vacation'),
(5, '3 Desember 2015', 'Hari Ibu (Kunjungan Panti Jompo)'),
(6, '15 February 2016', 'Magha Puja (Seminar)'),
(7, '1 Mei 2016', 'Waisak (Kunjungan Panti Asuhan)'),
(8, '28 Juni 2016', '	Asadha (Seminar Dhamma)'),
(9, '15 Oktober 2016', 'Kathina');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
