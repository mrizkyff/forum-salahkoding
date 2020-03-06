-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 06:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_konten`
--

CREATE TABLE `tb_konten` (
  `id` int(11) DEFAULT NULL,
  `nim` varchar(14) DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `id_konten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konten`
--

INSERT INTO `tb_konten` (`id`, `nim`, `author`, `level`, `gambar`, `deskripsi`, `file`, `tanggal`, `rating`, `kategori`, `id_konten`) VALUES
(15, 'A11.2017.10494', 'adinda', 'User', 'A11_2017_10494.jpg', 'Project pertama adinda', 'internal-unity-air-conditioning4.zip', '2019-03-31 17:14:52', NULL, 'PDP-11', 4),
(15, 'A11.2017.10494', 'adinda', 'User', 'A11_2017_10494.jpg', 'Project Kedua adinda', 'pap1.zip', '2019-03-31 17:29:38', NULL, 'PDP-9', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritik`
--

CREATE TABLE `tb_kritik` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telp` varchar(40) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `pesan` varchar(250) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kritik`
--

INSERT INTO `tb_kritik` (`id`, `nama`, `email`, `telp`, `jenis`, `pesan`, `tanggal`) VALUES
(0, 'muhamad rizky fajar febri', 'muhamadrizkyff@gmail.com', '081228479747', 'Kritik', 'Website yang bagus, semangat ya!', '2019-03-30 06:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nim` varchar(14) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `level` varchar(6) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `foto`, `email`, `password`, `nim`, `jenis_kelamin`, `level`, `tanggal`) VALUES
(5, 'mrizkyff', NULL, 'muhamadrizkyff@gmail', 'user', 'A11.2017.10492', 'Laki-Laki', 'Admin', '2019-03-30 13:22:48'),
(15, 'adinda', 'A11_2017_10494.jpg', 'adinda@gmail.com', 'admin', 'A11.2017.10494', 'Perempuan', 'User', '2019-03-31 17:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_konten`
--
ALTER TABLE `tb_konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `tb_kritik`
--
ALTER TABLE `tb_kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_konten`
--
ALTER TABLE `tb_konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
