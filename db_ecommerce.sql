-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 19, 2024 at 10:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `produk`, `harga`, `qty`, `foto`, `created_at`, `update_at`) VALUES
(26, 'Samsung', 5000000, 0, 'Screenshot 2024-06-26 143917.png', '2024-07-05 07:47:53', '2024-07-05 07:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`, `ket`, `created_at`, `update_at`) VALUES
(3, 'admin', '', '2024-06-28 07:07:18', '2024-07-12 07:07:24'),
(4, 'Petugas', '', '2024-06-28 07:11:20', '2024-07-12 07:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deleted_at` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama_lengkap`, `email`, `password`, `alamat`, `deleted_at`, `created_at`, `update_at`) VALUES
(1, 'fay', 'fayha@gmail.com', '12345', '123324', 0, '2024-07-19 04:22:08', '2024-07-19 04:22:08'),
(2, 'fay', 'fayha@gmail.com', '12345', '123324', 0, '2024-07-19 04:28:15', '2024-07-19 04:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) DEFAULT NULL,
  `id_member` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `email_web` varchar(50) NOT NULL,
  `hp_web` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `ig_web` varchar(100) NOT NULL,
  `x_web` varchar(100) NOT NULL,
  `fb_web` varchar(255) NOT NULL,
  `linkedIn` varchar(100) NOT NULL,
  `logo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `email_web`, `hp_web`, `alamat`, `ig_web`, `x_web`, `fb_web`, `linkedIn`, `logo`, `created_at`, `updated`) VALUES
(1, 'dgahdg@gmail.com', '081819182365', 'indo', 'https://www.instagram.com/', 'https://x.com/?lang=id', 'https://www.facebook.com/?locale=id_ID', 'https://id.linkedin.com/', 0, '2024-07-17 07:43:55', '2024-07-17 07:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama_testi` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `id_level`, `nama_lengkap`, `email`, `password`, `created_at`, `update_at`) VALUES
(14, 3, 'doni', 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2024-06-27 06:09:31', '2024-07-12 04:38:54'),
(15, 4, 'amar', 'mananta@yahoo.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2024-06-27 06:11:21', '2024-07-12 04:38:31'),
(16, 0, 'sabrina', 'admin@gmail.com', '420df50a0a436cabe48e1597a9508a2b5449d35e', '2024-06-27 06:11:31', '2024-06-27 06:11:31'),
(17, 0, 'sabrina', 'admin@gmail.com', '420df50a0a436cabe48e1597a9508a2b5449d35e', '2024-06-27 06:13:12', '2024-06-27 06:13:12'),
(18, 0, 'tata', 'bata@gmail.com', '71948bb4331c6d54d89f548d4b2ef75bcd7b3a4f', '2024-06-27 06:14:05', '2024-06-27 08:00:34'),
(20, 0, 'fay', 'admin01@gmail.comsdds', '7c222fb2927d828af22f592134e8932480637c0d', '2024-07-12 07:09:46', '2024-07-12 07:09:46'),
(21, 0, 'tes', 'tes2@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2024-07-12 07:31:37', '2024-07-12 07:31:37'),
(22, 0, 'YAYA', 'yaya@yahoo.com', '9d61ba84065fc83956cdfc63e49bc7a9d21d8665', '2024-07-12 07:48:09', '2024-07-12 07:48:09'),
(23, 4, 'tes', 'tes22@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2024-07-12 07:56:04', '2024-07-12 07:56:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
