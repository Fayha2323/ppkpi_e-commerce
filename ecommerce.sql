-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 12, 2024 at 06:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `foto`, `created_at`, `updated_at`) VALUES
(8, 'guava', 100000, 'guava.png', '2024-07-05 07:50:35', '2024-07-05 07:53:37'),
(9, 'sdada', 231123, 'merkurius.png', '2024-07-09 07:33:18', '2024-07-09 07:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Professional', '', '2024-06-28 03:57:15', '2024-06-28 03:57:15'),
(4, 'Beginner', '', '2024-06-28 06:21:36', '2024-06-28 06:21:36'),
(5, 'admin', '', '2024-06-28 06:24:11', '2024-06-28 06:24:11'),
(6, 'dsdsdds', '', '2024-06-28 06:24:42', '2024-06-28 06:24:42'),
(9, 'dsdsddssadasd', '\"\"asdadsads', '2024-06-28 06:48:06', '2024-06-28 06:48:06'),
(10, 'asddsad', 'asdasdasdsad', '2024-06-28 06:48:16', '2024-06-28 06:48:16'),
(11, 'asddsadasdasd', '\"asdasdasdsad\"asdasdsad', '2024-06-28 06:49:46', '2024-06-28 06:49:46'),
(14, 'Aji Yusti Permana', 'jago banget sihhhh', '2024-06-28 06:50:55', '2024-06-28 07:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `jabatan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Aji yusti', 'STi', 'keren bangetsadads', '2024-06-28 08:06:25', '2024-06-28 08:10:05'),
(3, 'asdsad', 'asdsad', 'asdasdsada', '2024-06-28 08:10:09', '2024-06-28 08:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_level` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_level`, `nama_lengkap`, `email`, `password`, `created_at`, `updated_at`) VALUES
(4, NULL, 'ssddaaasdds', 'admin01@gmail.comsdds', '29e931b91ae906bdab177bb4be76419a871dfd3c', '2024-06-27 07:44:30', '2024-06-27 08:22:21'),
(5, NULL, '', 'admin@gmail.com', 'd3f55e35f15c920c323d5156d5d83d531c9c8ded', '2024-06-28 02:56:13', '2024-06-28 02:56:13'),
(6, 4, 'aji ajsa', 'aji@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2024-06-28 02:59:29', '2024-07-12 04:06:03'),
(7, 1, 'om tulus', 'admin@gmail.com', 'd3f55e35f15c920c323d5156d5d83d531c9c8ded', '2024-06-28 03:00:17', '2024-07-12 04:02:10'),
(8, NULL, 'asdsadasd', 'admin@gmail.com', 'd3f55e35f15c920c323d5156d5d83d531c9c8ded', '2024-07-05 04:30:29', '2024-07-05 04:30:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
