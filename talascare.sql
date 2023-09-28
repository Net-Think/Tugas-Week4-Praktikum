-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talascare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_toko`
--

CREATE TABLE `tabel_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `lattitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `website` varchar(225) DEFAULT NULL,
  `gambar` text NOT NULL,
  `jam_buka` varchar(50) NOT NULL,
  `jam_tutup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_toko`
--

INSERT INTO `tabel_toko` (`id`, `nama_toko`, `deskripsi`, `jenis`, `rating`, `alamat`, `lattitude`, `longitude`, `no_telp`, `website`, `gambar`, `jam_buka`, `jam_tutup`) VALUES
(65, 'Toko Tani Jaya', 'Toko Obat', 'Obat Hama Untuk Tanaman', '4.5', 'Jl. Dewi Sartika No.56, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121', '-65953327', '1067765743', '081511771456', 'website--485108942209200157955-farmshop.business.site/', '2021-09-2.jpg', '08:00', '16:00'),
(66, 'Sarana Tani', 'Toko Pertanian', 'Obat Untuk Hama Pertanian', '4.6', 'Jl. Veteran No.37, RT.01/RW.02, Kb. Klp., Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16125', '-65953595', '1067842991', '08118880202', 'sarana-tani-farm-equipment-supplier.business.site/', 'unnamed.jpg', '07:30', '17:00'),
(67, 'Toko Pertanian Pilar Tani', 'Toko Pertanian &amp; Obat tanaman', 'Obat Untuk Hama Tanaman', '4.8', 'Jl. Raya Semplak No.70-68, RT.08/RW.01, Semplak, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16114', '-6558757', '1067624348', '089611441312', '', '021-02-09.jpg', '08:00', '15:30'),
(68, 'Bogor Nursery', 'Toko yang menjual berbagai macam tanaman hias, tanaman pelindung, tanaman hutan, tanaman obat, dan tanaman yang sulit didapat, aneka pot, pupuk npk tablet, npk granul, urea, obat obatan tanaman.', 'Obat Untuk Hama Tanaman', '4.7', 'Jl. Kol. Ahmad Syam No.10, Tanah Baru, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16143', '-66018282515954300', '10681888505227900', '081318280049', '', '2020-05-14.jpg', '07:00', '17:00'),
(69, 'Toko Pertanian Duta Tani', 'Toko yang menjual: Pupuk, Benih Sayuran, Pestisida &amp; Sarana Pertanian', 'Obat Untuk Hama Tanaman', '4.8', 'Ps. Induk Kemang Bogor, RT.02/RW.01, Cibadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16166', '-6538403889578720', '10676947325303700', '081281610372', '', '2023-07-22.jpg', '09:00', '23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_toko`
--
ALTER TABLE `tabel_toko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_toko`
--
ALTER TABLE `tabel_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
