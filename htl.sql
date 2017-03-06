-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 10:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `sebagai` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `sebagai`, `username`, `password`, `remember_token`) VALUES
(1, 'admin', 'admin', '$2y$10$mN5/n5tPH3PStlmkZTdNZuV0zbc3cUgH3L863w64lQH6jRcNuGrYi', 'f5tw7MYOLresVwUSFd5iKXudxxM3XkFA41Mmp77JvAAFbzlqg3zEKpN7W2oZ'),
(2, 'kontributor', 'kontributor', '$2y$10$6tbNSl16XREzOWEKOR2qp.zZzsu4YJ7SDuKdwB5ZXikNWBWxtfsHW', 'TxdOVSGL91QAuFQ9rnyXZB4VE8vjO3eGC2XGHWyEuzqQnOcKkCocSqaDyClu'),
(3, 'kontributor', 'fmipa', '$2y$10$Lb6CuNOpjSvauPzbNMw56uTQeJexEWByBeggIJeWNF85fipywVt4K', 'tQK9jbJfO7xPYR49D2u2ZfIeCWLkfRahE3Nq0rDgdZ5JPHmBiATi7GUhkFtW');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `email`, `telpon`, `hp`) VALUES
(1, 'htl@unta.ac.id', '778863', '089615919150');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `nama_menu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`) VALUES
(1, 'Peraturan dan UU'),
(2, 'Peraturan Universitas'),
(5, 'Peraturan Fakultas');

-- --------------------------------------------------------

--
-- Table structure for table `produk_hukum`
--

CREATE TABLE `produk_hukum` (
  `id` int(20) NOT NULL,
  `tahun` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `tentang` varchar(800) NOT NULL,
  `katagori` varchar(100) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hukum`
--

INSERT INTO `produk_hukum` (`id`, `tahun`, `tgl`, `nomor`, `tentang`, `katagori`, `masalah`, `bidang`, `dokumen`, `admin_id`) VALUES
(2, 2013, '2017-02-13', '134/SK/2013', 'keamanan daerah untan', 'SK Rektor', 'masalah', 'bidang', '2ea75265564c2ab188882a63d8ed9039.pdf', 0),
(5, 2012, '0000-00-00', 'SE/Rektor/Untan/2012', 'jangan', 'SE Rektor', 'belum kelar', 'hapehape', '6345d07b64a3d5753d4d84d471a289c0.pdf', 0),
(6, 2016, '0000-00-00', '26/SK/2016', 'aku', 'SK Rektor', 'kamu', 'dia', 'c04f7057d1e6c51029c8efd2cb4b8fe5.PDF', 2),
(7, 2017, '0000-00-00', 'SK/006/2017', 'fsffff', 'Peraturan Rektor', 'ds', 'ds', 'a28a9ecc8a307ed33d49b704e9b1b372.pdf', 0),
(8, 2017, '0000-00-00', '271/SK/2017', 'percobaan kontributor', 'SK Dekan', 'kontributor', 'Coba', '221d48025d183549bb848018f55361df.pdf', 2),
(9, 2015, '2017-02-07', 'dfsfs', 'fsdf', 'Peraturan Rektor', 'fdsa', 'fdsf', 'e6859214884b17673b64c6695effa2a7.pdf', 1),
(10, 2017, '2017-02-19', 'fsdfs', 'fsad', 'SK Dekan', 'fdsf', 'fdsf', '1178cc9f19aa6befe5b4f053f092a399.pdf', 3),
(11, 2013, '2017-02-07', 'dad', 'fdsadf', 'Peraturan Rektor', 'fds', 'fsfs', '6d17fdedc707743c411d98b9f4bdaa38.pdf', 1),
(12, 2012, '2017-02-12', 'ds5', 'dsds', 'SK Dekan', 'dsd', 'dsd', 'f1cf5f8f477e3a258b40439b0cccba15.pdf', 3),
(13, 2012, '2017-07-27', 'joko', 'dsad', 'SK Dekan', 'ds', 'dsd', '028c8ebc32ebf4f92c772ff2e79b0930.pdf', 1),
(14, 2014, '2017-02-15', 'feb', 'dsa', 'Peraturan Pemerintah', 'da', 'da', '0c4c045b68d042ad6d4a0a6549f48ebb.pdf', 1),
(15, 2013, '2017-02-22', 'fmipa', 'da', 'SK Dekan', 'dsa', 'daa', '4f75caef041eac78762fc972210bd814.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `nama_submenu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `menu_id`, `nama_submenu`) VALUES
(1, 2, 'Peraturan Rektor'),
(2, 2, 'SK Rektor'),
(3, 2, 'SE Rektor'),
(5, 5, 'SK Dekan'),
(6, 1, 'Peraturan Pemerintah'),
(7, 1, 'Keputusan Presiden'),
(8, 1, 'Keputusan Mentri'),
(9, 5, 'SE Dekan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
