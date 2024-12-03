-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2024 pada 02.57
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
-- Database: `db_kesehatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diet`
--

CREATE TABLE `diet` (
  `id` int(11) NOT NULL,
  `nama_diet` varchar(100) DEFAULT NULL,
  `usia_min` int(11) DEFAULT NULL,
  `usia_max` int(11) DEFAULT NULL,
  `bb_min` int(11) DEFAULT NULL,
  `bb_max` int(11) DEFAULT NULL,
  `gda_min` int(11) DEFAULT NULL,
  `gda_max` int(11) DEFAULT NULL,
  `diet_rekomendasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diet`
--

INSERT INTO `diet` (`id`, `nama_diet`, `usia_min`, `usia_max`, `bb_min`, `bb_max`, `gda_min`, `gda_max`, `diet_rekomendasi`) VALUES
(1, 'Diet Keto', 18, 40, 50, 80, 1500, 1800, 'Diet dengan rendah karbohidrat dan tinggi lemak, cocok untuk menurunkan berat badan secara cepat.'),
(2, 'Diet Mediterania', 25, 60, 45, 90, 1800, 2200, 'Diet dengan banyak konsumsi sayur, buah, ikan, dan minyak zaitun.'),
(3, 'Diet Intermittent Fasting', 18, 50, 50, 90, 1600, 1900, 'Diet dengan pola puasa yang membantu menurunkan berat badan dalam waktu singkat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kontrol`
--

CREATE TABLE `jadwal_kontrol` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tanggal_kontrol` date NOT NULL,
  `status` varchar(50) DEFAULT 'Belum Kontrol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal_kontrol`
--

INSERT INTO `jadwal_kontrol` (`id`, `nama_pasien`, `tanggal_kontrol`, `status`) VALUES
(1, 'Sela', '2024-11-10', 'Belum Kontrol'),
(2, 'Lala', '2024-11-30', 'Belum Kontrol'),
(3, 'Lala', '2024-11-30', 'Belum Kontrol'),
(4, 'Lala', '2024-11-30', 'Belum Kontrol'),
(5, 'Lala', '2024-11-30', 'Belum Kontrol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanya_jawab`
--

CREATE TABLE `tanya_jawab` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tanya_jawab`
--

INSERT INTO `tanya_jawab` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Apa itu diet sehat?', 'Diet sehat adalah pola makan yang seimbang dan mencakup berbagai jenis makanan yang memberi tubuh Anda semua nutrisi yang dibutuhkan untuk berfungsi dengan baik.'),
(2, 'Berapa banyak air yang harus diminum setiap hari?', 'Disarankan untuk meminum sekitar 8 gelas air (2 liter) setiap hari, tetapi kebutuhan cairan dapat bervariasi tergantung pada aktivitas dan kondisi tubuh.'),
(3, 'Apa itu tekanan darah tinggi?', 'Tekanan darah tinggi adalah kondisi di mana kekuatan darah terhadap dinding pembuluh darah terlalu tinggi, yang dapat menyebabkan masalah kesehatan yang serius seperti penyakit jantung.'),
(4, 'Bagaimana cara menurunkan berat badan?', 'Menurunkan berat badan dapat dilakukan dengan mengatur pola makan yang sehat dan rutin berolahraga. Makan dalam porsi kecil, kurangi makanan tinggi kalori, dan perbanyak aktivitas fisik.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_kontrol`
--
ALTER TABLE `jadwal_kontrol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanya_jawab`
--
ALTER TABLE `tanya_jawab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diet`
--
ALTER TABLE `diet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jadwal_kontrol`
--
ALTER TABLE `jadwal_kontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tanya_jawab`
--
ALTER TABLE `tanya_jawab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
