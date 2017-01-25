-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2017 pada 10.14
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

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
-- Struktur dari tabel `poin`
--

CREATE TABLE `poin` (
  `nim` char(8) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poin`
--

INSERT INTO `poin` (`nim`, `poin`) VALUES
('51014020', 200),
('51014026', 250),
('51014001', 175);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `no_telp`, `nama`, `jenis_kelamin`, `tgl_lahir`, `nim`, `email`, `jurusan`, `alamat`, `user_name`, `password`, `tgl_register`, `role`) VALUES
('1485241649', '0120812812', 'yovin', 'Perempuan', '1996-12-12', '51014026', 'yovin@gmail.com', 'Sistem Informasi', 'Jl. baji ateka', 'yovin', '$2y$10$.ml1I2hYiiytWOjmo983Bew99BLe6bzO9T5UH0bqontARYOTiT32W', '2017-01-24 15:07:29', 0),
('1485261984', '08100100100', 'Riswandy', 'Laki-laki', '1996-12-12', '51014020', 'riswandy@gmail.com', 'Sistem Informasi', 'Jl. Cendrawasih', 'riswandy', '$2y$10$FXXExzD5pUsLqO8N2q7RmeY7g3ANDnM/Kp0zmm.NJDK1FzAivZWpO', '2017-01-24 20:46:24', 0),
('1485333575', '232377', 'Ady Wijaya', 'Laki-laki', '1996-12-12', '51014001', 'ady@gmail.com', 'Sistem Informasi', 'Jl. Cendrawasih', 'adyw', '$2y$10$Exq2ugD4GnGzl/6mhg9oKuywVyh/Nl7SyNlfm5TXPrdIcyldgysk.', '2017-01-25 16:39:35', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
