-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 04:53 PM
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
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info` text NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info`, `id`) VALUES
('Bagi seluruh anggota ukm bodhivijja akan mendapatkan point khusus bagi mahasiswa STIMIK KHARISMA MAKASSAR ketika mengikuti setiap kegiatan yang dilakukan ukm bodhivijja. Terutama saat mengikuti hari perayaan agama buddha seperti waisak,kathina,magha puja dan asadha.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `kas` text NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`kas`, `id`) VALUES
('Nah guys ini kata yang agak sedikit horror untuk beberapa orang, disini karena kita akan aktif melakukan berbagai kegiatan. Dan tentu saja itu tidak menggunakan dana kecil, nah disinilah uang kas berfungsi sebagai tambahan dana dalam kegiatan kita. Sehingga kita tidak merasa terbebani dengan adanya biaya kegiatan. So guys kami tekan disni kami tidak mengambil keuntungan dari dana yang kalian berikan namun akan digunakan dalam berbagai kegiatan terutama dalam baksos. Biaya kas yang diberikan sebesar Rp 25.000/bulan', 1);

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
(6, '15 February 2016', 'Magha Puja (Seminar)'),
(7, '1 Mei 2016', 'Waisak (Kunjungan Panti Asuhan)'),
(8, '28 Juni 2016', '	Asadha (Seminar Dhamma)'),
(14, '21 agustus 2016', 'Kunjungan klenteng Xiang ma');

-- --------------------------------------------------------

--
-- Table structure for table `poin`
--

CREATE TABLE `poin` (
  `nim` char(8) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poin`
--

INSERT INTO `poin` (`nim`, `poin`) VALUES
('51014020', 200),
('51014026', 250),
('51014001', 175);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nama` text NOT NULL,
  `saran` text NOT NULL,
  `id` int(10) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`nama`, `saran`, `id`, `email`) VALUES
('yovin', 'semoga ukm bodhivijja semakin sukses dan lebih baik lagi kedepannya.', 1, 'yovin_15@kharismas.ac.id'),
('ady', 'Untuk acara sebaiknya selalu on time', 2, 'adywijaya79@yahoo.com');

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
(1, 'Jessly', 'Jabatan: Bendahara II (2016-2017)', 'Jurusan: Teknik Informatika', 'Angkatan: 2015');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(15) NOT NULL,
  `no_telp` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nim` char(8) NOT NULL,
  `email` varchar(60) NOT NULL,
  `jurusan` varchar(21) NOT NULL,
  `alamat` char(30) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `no_telp`, `nama`, `jenis_kelamin`, `tgl_lahir`, `nim`, `email`, `jurusan`, `alamat`, `user_name`, `password`, `tgl_register`, `role`, `point`) VALUES
('1485241649', '0120812812', 'yovin', 'Perempuan', '1996-12-12', '51014026', 'yovin@gmail.com', 'Sistem Informasi', 'Jl. baji ateka', 'yovin', '202cb962ac59075b964b07152d234b70', '2017-01-24 15:07:29', 0, 0),
('1485261984', '08100100100', 'Riswandy', 'Laki-laki', '1996-12-12', '51014020', 'riswandy@gmail.com', 'Sistem Informasi', 'Jl. Cendrawasih', 'riswandy', '$2y$10$FXXExzD5pUsLqO8N2q7RmeY7g3ANDnM/Kp0zmm.NJDK1FzAivZWpO', '2017-01-24 20:46:24', 0, 0),
('1486121059', '081354763230', 'ady wijaya', 'Laki-laki', '1996-01-01', '51014001', 'as@as', 'Sistem Informasi', 'jl. muhammadiyah no.21', 'ady', '$2y$10$bUuwvnc8/YzB5SPD2bvbEOUgKgxV6C9NmknB1ACewBLaj9pJspnwq', '2017-02-03 19:24:19', 0, 0),
('1486205672', '081354763230', 'ady wijaya', 'Laki-laki', '1996-01-01', '51014001', 'adi.wijaya38@yahoo.com', 'Sistem Informasi', 'jl.apa aja', 'aaaa', 'aaaa', '2017-02-04 18:54:32', 0, 0),
('1486219875', '23424', 'as', 'Laki-laki', '0000-00-00', '234234', 'asd@aasasa', 'Sistem Informasi', '234234', '123', '$2y$10$z86ORbGlQBw83pxofEC7d.MnQ4W5hSwPavqnIhwsdfv/iFgFehcwG', '2017-02-04 22:51:15', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
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
-- Indexes for table `saran`
--
ALTER TABLE `saran`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
