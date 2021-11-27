-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 01:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nootedtasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `nama_pemegang` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `jenis` enum('roda_2','roda_4') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama_pemegang`, `type`, `no_polisi`, `jenis`, `create_at`) VALUES
(3, 'M. Kunzaini', 'Honda / Win', 'K 9604 SA', 'roda_2', '2021-11-24 08:49:07'),
(4, 'Kend. Pool Sekretariat', 'Mits. L 300', 'K 9599 SA', 'roda_4', '2021-11-24 09:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `nootedtasi`
--

CREATE TABLE `nootedtasi` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `bahan_bakar` varchar(50) NOT NULL,
  `volume` int(11) NOT NULL,
  `pelumas` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nootedtasi`
--

INSERT INTO `nootedtasi` (`id`, `nama_karyawan`, `nip`, `id_kendaraan`, `bahan_bakar`, `volume`, `pelumas`, `create_at`) VALUES
(4, 'Udin', '23123124123', 3, 'Pertalite', 10, 'Enduro Matic', '2021-11-24 09:10:51'),
(5, 'Udin', '32124123', 4, 'Pertamax', 10, 'Mobil Enduro', '2021-11-24 09:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `create_at`) VALUES
(1, 'User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2021-11-24 09:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nootedtasi`
--
ALTER TABLE `nootedtasi`
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
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nootedtasi`
--
ALTER TABLE `nootedtasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
