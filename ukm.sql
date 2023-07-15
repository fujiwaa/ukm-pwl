-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2023 pada 02.52
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 'dsalkdskal', 'lkasdlaslksdaj', '1689330453_87f8dab1bb4e330d1dd7.jpg', '2023-07-14 03:27:33', '2023-07-14 03:27:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nomorhp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nim`, `nomorhp`, `email`, `password`, `role`) VALUES
(1, 'amon', '21.01.4657', '08435132484', 'amon@gmail.com', '$2y$10$c6oHn6UnB2e2m1BnZ/16EuorzHgReeF.Kq/lKRzy66hczQs21cSNW', 'mahasiswa'),
(2, 'AMCC', NULL, '08435132484', 'amcc@amikom.ac.id', '$2y$10$WA/Zc1fpZQpntRvoMW4cjei42LJvSKlA.4VHL2ZxauPV3zY198HTO', 'organisasi'),
(3, 'koma', NULL, '081534654656', 'koma@koma.ac.id', '$2y$10$kl52UNKbglxS1MwZU3NKUedpmVorJ5hJI8S0flAdAD2L9GljbYm5G', 'organisasi'),
(4, 'fuji', '21.01.4657', '08441345446', 'fuji@gmail.com', '$2y$10$FPLYG6bY2nswPNFD3BhzB.6kyPOoTEoZQ1Qb6f6WRlGs4E0.kYQri', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
