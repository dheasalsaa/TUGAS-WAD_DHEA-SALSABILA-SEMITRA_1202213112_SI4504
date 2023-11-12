-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 12 Nov 2023 pada 10.27
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronicstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stored`
--

CREATE TABLE `stored` (
  `No` int(11) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Product Name` varchar(50) NOT NULL,
  `Product Code` varchar(10) NOT NULL,
  `Price` int(11) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stored`
--

INSERT INTO `stored` (`No`, `Picture`, `Product Name`, `Product Code`, `Price`, `Stock`) VALUES
(1, 'samsungs23.jpg', 'Samsung S23 Ultra', 'SA0012', 15000000, 10),
(2, 'iphone11.jpg', 'Iphone 11 - 256 GB', 'IP0011', 11000000, 13),
(3, 'tvsamsung.avif', 'Smart TV Samsung Full HD ', 'T5600', 20000000, 30);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `stored`
--
ALTER TABLE `stored`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stored`
--
ALTER TABLE `stored`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
