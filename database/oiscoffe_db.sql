-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oiscoffe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `foto`) VALUES
(8, 'ini adalah artikel pertama', 'artikel pertama ini hanya sebagai perkenalan oiscoffee kepada pengunjung website ini', 'logo_1.png'),
(9, 'ini adalah artikel keduda', 'artikel kedua ini hanya sebagai pengenalan menu menu dari ois coffee yang dapat kamu nikmati. disini tersedia berbagai varian kopi olahan langsung', 'img1.jpeg'),
(10, 'artikel ke tiga', 'artikel ketiga ini hanya sebagai pengenalan menu menu dari ois coffee yang dapat kamu nikmati. disini tersedia berbagai varian kopi olahan langsung', 'img2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `deskripsi`, `foto`, `tag`) VALUES
(5, 'kapucino ku', 'ini adalah kopi hitam pahit', 'cappucino.jpg', 'produk'),
(7, 'kopi mocacino', 'kopi mocacino dengan bahan pilihan terbaik', 'img4.jpeg', 'produk'),
(8, 'owner', 'ini adalah foto owner dari ois coffee', 'img51.jpeg', 'produk');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `tag`) VALUES
(14, 'sanger', '15k', 'coffee'),
(15, 'kopi OIS', '14k', 'coffee'),
(16, 'Aren OIS', '15K', 'coffee'),
(17, 'Americano', '12k', 'coffee'),
(18, 'Latte', '15k', 'coffee'),
(19, 'Kopi RedVelvet', '17k', 'coffee'),
(20, 'Kopi Greentea', '17k', 'coffee'),
(21, 'Caramel Macchiato', '18k', 'coffee'),
(22, 'Pandan', '18k', 'coffee'),
(23, 'Vanilla', '20k', 'coffee'),
(24, 'Hazelnut', '20k', 'coffee'),
(25, 'Caramel', '20k', 'coffee'),
(26, 'Nasi Ayam', '18k', 'main & snack'),
(27, 'Nasi Nugget', '15k', 'main & snack'),
(28, 'Nasi Sosis', '15k', 'main & snack'),
(29, 'Nasi Goreng', '13k', 'main & snack'),
(30, 'Nasi Telur', '12k', 'main & snack'),
(31, 'Mie Goreng', '12k', 'main & snack'),
(32, 'French Fries', '10k', 'main & snack'),
(33, 'Sosis + Nugget', '10k', 'main & snack'),
(34, 'Snack Komplit', '15k', 'main & snack'),
(35, 'Chocolate', '12k', 'non coffee'),
(36, 'Red Velvet', '12k', 'non coffee'),
(37, 'Green Tea', '12k', 'non coffee'),
(38, 'Taro', '12k', 'non coffee'),
(39, 'Lemon Tea', '10k', 'non coffee'),
(40, 'V60', '20k', 'manual brew'),
(41, 'Tubruk', '15k', 'manual brew'),
(42, 'Vietnam Drip', '15k', 'manual brew');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `tgl_lhr`, `jk`, `posisi`, `alamat`, `no_hp`, `foto`) VALUES
(15, 'ahmad syaukani', '2020-12-28', 'laki-laki', 'pelayan', 'yogyakarta', '082234347777', 'img3.jpeg'),
(16, 'risky', '2020-12-30', 'laki-laki', 'pelayan', 'yogyakarta', '082212123434', 'img52.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'oiscoffee', '999aee561da67e8f7bf1907315a4f6a9', 'oiscoffee', 'admin'),
(2, 'oiscoffeoperator', '46486ff568315443a727742a706aa8df', 'oisoperator', 'operator'),
(3, 'oiscoffee', '25d55ad283aa400af464c76d713c07ad', 'ois coffee owner', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
