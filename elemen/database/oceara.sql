-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2024 pada 10.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oceara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pantai`
--

CREATE TABLE `pantai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pantai`
--

INSERT INTO `pantai` (`id`, `nama`, `lokasi`, `deskripsi`, `gambar`) VALUES
(1, 'Pantai Mirota', 'Batam', 'Pantai dengan pemandangan indah di Batam', 'mrt1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_tiket`
--

CREATE TABLE `pembelian_tiket` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kode_pemesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_tiket`
--

INSERT INTO `pembelian_tiket` (`id`, `nama`, `tanggal`, `tujuan`, `jumlah`, `kode_pemesanan`) VALUES
(1, 'Rama ramadani', '2024-12-13', 'Mirota', 1, ''),
(2, 'Agiel Nawawi', '2024-12-28', 'Pantai Nongsa', 2, '5813'),
(3, 'Dita Aflaha', '2024-12-13', 'Mirota', 1, '7664'),
(4, 'Rama ramadani', '2024-12-28', 'Mirota', 5, '9543'),
(5, 'Dita Aflaha', '2024-12-25', 'Mirota', 5, '2496'),
(6, 'John Revorm Sumbayak ', '2025-01-11', 'Mirota', 4, '7441'),
(7, 'Agiel Nawawi', '2024-12-22', 'Mirota', 5, '5442');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'rama', 'ramaramadani9988@gmail.com', '$2y$10$gNThFB8nexb4d7utKcINbeRkxvJaQtS6dOC6uWigusXI.nl0/o8xa', 'user'),
(7, 'agnes', 'agnes123@gmail.com', '$2y$10$l0kNYndaI9yTe8pnGKUKMeYty4pcKKncHY5lalZVs98ctIZavyscO', 'user'),
(8, 'dita', 'dita@gmail.com', '$2y$10$yT1DmpPyC9/uGygRlvTpdu22KZ1l105k17BirSCiEVKkEwYel4T9y', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pantai`
--
ALTER TABLE `pantai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pantai`
--
ALTER TABLE `pantai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
