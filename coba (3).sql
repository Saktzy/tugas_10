-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 05:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_user`, `nama`, `foto`, `harga`, `stok`, `berat`, `deskripsi`, `created_at`, `updated_at`) VALUES
(25, NULL, 'sepatu nike', NULL, 70, 21, 12, 'sepatu ini bukan sembarang sepatu', '2022-08-26 00:40:02', '2022-08-26 00:40:02'),
(26, NULL, 'sepatu adidas', NULL, 40, 70, 21, 'SEPATU SUPER EA', '2022-08-26 00:44:59', '2022-08-26 00:44:59'),
(27, NULL, 'sepatu puma', NULL, 99, 24, 21, 'sepatu puma adalah sepatu puma', '2022-08-28 21:04:48', '2022-08-28 21:04:48'),
(28, 15, 'Nike Dunk Low Off-White Pine Green CT0856-100', NULL, 200, 12, 21, 'Ready Stock & 100% Original Guaranteed', '2022-08-28 22:16:49', '2022-08-28 22:16:49'),
(35, 15, 'sepatu nike', NULL, 99, 31, 21, '<p><b>sepatu pilihan jokiwi</b></p>', '2022-09-08 06:31:19', '2022-09-08 07:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `jenis_kelamin`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'handokojak', 'handoko', 1, 'handoko@gmail.com', '$2y$10$B5CU44tn9mZB5ns3YIkaiOHmCcV3ikGlVXfjF3XtjsB2CIvm4Snwy', NULL, '2022-08-23 20:42:18', '2022-09-06 05:31:11'),
(15, 'sax', 'sact', 1, 'sak@gmail.com', '$2y$10$kg8uyyc25Oxqk779LAhiK.Zh40eKAxsQRkw0ctf9ROUM3oWtMDUR2', NULL, '2022-08-24 20:30:18', '2022-09-06 05:31:17'),
(16, 'pring', 'piring', 2, 'pring@gmail.com', '$2y$10$bt1a3DdVVoHFrFEeWTanEu/rhsDrpI0AAVrutUrdSlLjTnj70ptx6', NULL, '2022-08-24 20:35:06', '2022-09-06 05:31:31'),
(17, 'sak21', 'sakti', 0, 'sak21@gmail.com', '$2y$10$NLaPseIIgtMCQMCWs01/AOBq9elydB20yK./y7WeZOQCqqFlxJsqm', NULL, '2022-08-28 21:34:44', '2022-08-28 21:34:44'),
(18, 'uajank', 'sac', 0, 'sak32@gmail.com', '$2y$10$K4MCC4kJzIuoI0hxtYx.zeJG.syoUnUZPcTfuro.HOKnXEhkHHnjC', NULL, '2022-08-28 21:39:15', '2022-08-28 21:39:15'),
(19, 'sak21@gmail.com', 'sactyt', 0, 'syarifahktp211@gmail.com', '$2y$10$4ikcp089zm7TWI.olh49ROA.0/PrXOMSk42ttaTYVzmDVSBuHBKV2', NULL, '2022-09-05 21:35:04', '2022-09-05 21:35:04'),
(20, 'sakty', 'nike', 1, 'zakiktp56@gmail.com', '$2y$10$oZAQAsAsq/.HBX6vawabGupnPhU.5qFVaDJBkl69WyjCF6ZS9tPku', NULL, '2022-09-06 00:56:15', '2022-09-06 00:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 18, '0896704864518', '2022-08-28 21:39:15', '2022-08-28 21:39:15'),
(2, 19, '0896704864518', '2022-09-05 21:35:04', '2022-09-05 21:35:04'),
(3, 20, '0896704864510', '2022-09-06 00:56:15', '2022-09-06 00:56:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
