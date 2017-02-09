-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 03:09 AM
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
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'admin', '$2y$10$mN5/n5tPH3PStlmkZTdNZuV0zbc3cUgH3L863w64lQH6jRcNuGrYi', 'yFEH8kCyTqBWp4kCq6WHNKuSwjeCLROoWjxe56hy6IHtYWubdhBu94FkS1Hp');

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
-- Table structure for table `produk_hukum`
--

CREATE TABLE `produk_hukum` (
  `id` int(20) NOT NULL,
  `tahun` int(10) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `tentang` varchar(800) NOT NULL,
  `katagori` varchar(100) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hukum`
--

INSERT INTO `produk_hukum` (`id`, `tahun`, `nomor`, `tentang`, `katagori`, `masalah`, `bidang`, `dokumen`) VALUES
(2, 2013, '134/SK/2013', 'keamanan daerah untan', 'SK Rektor', 'masalah', 'bidang', '2ea75265564c2ab188882a63d8ed9039.pdf'),
(3, 2016, '24/PR/2016', 'tentang', 'Peraturan Rektor', 'masalah', 'bidang', '37abfb0bc4eebab0a5675a3cd8ff4bf3.pdf'),
(5, 2012, 'SE/Rektor/Untan/2012', 'jangan', 'SE Rektor', 'belum kelar', 'hapehape', '6345d07b64a3d5753d4d84d471a289c0.pdf'),
(6, 2016, '26/SK/2016', 'aku', 'SK Rektor', 'kamu', 'dia', 'c04f7057d1e6c51029c8efd2cb4b8fe5.PDF');

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
-- Indexes for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk_hukum`
--
ALTER TABLE `produk_hukum`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
