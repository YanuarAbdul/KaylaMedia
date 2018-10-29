-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Okt 2018 pada 00.52
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'yanuarabdul', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'mrlng', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'sitqiadi', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'agusu', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'iwans', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `handphone`
--

CREATE TABLE `handphone` (
  `id` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `spek` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `handphone`
--

INSERT INTO `handphone` (`id`, `merek`, `tipe`, `harga`, `stock`, `kondisi`, `spek`, `foto`) VALUES
('HP01', 'Samsung', 'Ace 3', '456000', 2, 'Bekas', 'Ram 1 gb', 'product_1.jpg'),
('samn1001', 'Samsung', 'Note 1', '4000000', 4, 'Baru', 'Spek dewa', 'product_2.jpg'),
('SAMn2002', 'Samsung', 'Note 2', '456000', 4, 'Baru', 'Spek dewa', 'product_3.jpg'),
('SAMn3003', 'Samsung', 'Note 3', '456000', 2, 'Baru', 'Spek dewa', 'product_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
