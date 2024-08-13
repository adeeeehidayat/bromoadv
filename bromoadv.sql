-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 08:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bromoadv`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `paket_perjalanan` varchar(50) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `keterangan` text NOT NULL,
  `destinasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`paket_perjalanan`, `durasi`, `harga`, `keterangan`, `destinasi`) VALUES
('Paket Bromo Backpacker Experience', '2 Hari 1 Malam', '950000.00', 'Cocok untuk wisatawan yang menginginkan pengalaman lengkap dengan fasilitas yang cukup memadai dan tetap dalam kisaran harga yang terjangkau.', 'Bukit Penanjakan untuk menikmati sunrise, Kawah Bromo, Laut Pasir, Pura Luhur Poten'),
('Paket Bromo Budget Adventure', '2 Hari 1 Malam', '950000.00', 'Cocok untuk wisatawan yang menginginkan pengalaman lengkap dengan fasilitas yang cukup memadai dan tetap dalam kisaran harga yang terjangkau.', 'Bukit Penanjakan untuk menikmati sunrise, Kawah Bromo, Laut Pasir, Pura Luhur Poten'),
('Paket Bromo One Day Trip', '1 Hari', '950000.00', 'Cocok untuk wisatawan yang menginginkan pengalaman lengkap dengan fasilitas yang cukup memadai dan tetap dalam kisaran harga yang terjangkau.', 'Bukit Penanjakan untuk menikmati sunrise, Kawah Bromo, Laut Pasir, Pura Luhur Poten'),
('Paket Bromo Self-Guided Tour', '2 Hari 1 Malam', '950000.00', 'Cocok untuk wisatawan yang menginginkan pengalaman lengkap dengan fasilitas yang cukup memadai dan tetap dalam kisaran harga yang terjangkau.', 'Bukit Penanjakan untuk menikmati sunrise, Kawah Bromo, Laut Pasir, Pura Luhur Poten'),
('Paket Bromo Sunrise Trek', '2 Hari 1 Malam', '950000.00', 'Cocok untuk wisatawan yang menginginkan pengalaman lengkap dengan fasilitas yang cukup memadai dan tetap dalam kisaran harga yang terjangkau.', 'Bukit Penanjakan untuk menikmati sunrise, Kawah Bromo, Laut Pasir, Pura Luhur Poten'),
('Paket Sunrise Bromo Basic', '2 Hari 1 Malam', '950000.00', 'Cocok untuk wisatawan yang menginginkan pengalaman lengkap dengan fasilitas yang cukup memadai dan tetap dalam kisaran harga yang terjangkau.', 'Bukit Penanjakan untuk menikmati sunrise, Kawah Bromo, Laut Pasir, Pura Luhur Poten');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `no_tlp_pribadi` varchar(20) DEFAULT NULL,
  `tanggal_berangkat` date DEFAULT NULL,
  `tanggal_pulang` date DEFAULT NULL,
  `alamat_penjemputan` varchar(255) DEFAULT NULL,
  `jumlah_peserta` int(11) DEFAULT NULL,
  `paket_perjalanan` varchar(50) DEFAULT NULL,
  `kebutuhan_khusus` text DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `created_at`) VALUES
(10, 'aaa', 'a@a', '$2y$10$4jVONzpnm0gblNjGmCgynOk4klTwdnHKxwhcCZYYZQzbZLwh2mup6', '1717222127_343c4382b29e8c3c72ad.png', '2024-06-01 06:07:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_perjalanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_paket_perjalanan` (`paket_perjalanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_paket_perjalanan` FOREIGN KEY (`paket_perjalanan`) REFERENCES `paket` (`paket_perjalanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
