-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2023 pada 15.29
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grupmangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `nik` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `no_wa` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_role` int(11) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `last_login` date NOT NULL,
  `id_partner` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `harga` int(11) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampiran`
--

CREATE TABLE `lampiran` (
  `id` int(11) NOT NULL,
  `id_account` varchar(200) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `id_pertemuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor_course`
--

CREATE TABLE `mentor_course` (
  `id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(11) NOT NULL,
  `metode_pembayaran` varchar(200) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `nama_kontak` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(200) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_metode_pembayaran` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id` int(11) NOT NULL,
  `topik` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `id_sponsor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `no_wa` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `id_partner` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_lampiran`
--

CREATE TABLE `tipe_lampiran` (
  `id` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_course`
--

CREATE TABLE `user_course` (
  `id` int(11) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `role` (`id_role`),
  ADD KEY `partner` (`id_partner`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lampiran_1` (`id_account`),
  ADD KEY `lampiran_2` (`id_tipe`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_1` (`id_pertemuan`);

--
-- Indeks untuk tabel `mentor_course`
--
ALTER TABLE `mentor_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentor_course_1` (`course_id`),
  ADD KEY `mentor_course_2` (`mentor_id`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_1` (`id_metode_pembayaran`);

--
-- Indeks untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertemuan_1` (`course_id`),
  ADD KEY `pertemuan_2` (`id_sponsor`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsor_1` (`id_partner`),
  ADD KEY `sponsor_2` (`id_pembayaran`);

--
-- Indeks untuk tabel `tipe_lampiran`
--
ALTER TABLE `tipe_lampiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course_1` (`id_pembayaran`),
  ADD KEY `user_course_2` (`course_id`),
  ADD KEY `user_course_3` (`account_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mentor_course`
--
ALTER TABLE `mentor_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipe_lampiran`
--
ALTER TABLE `tipe_lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `partner` FOREIGN KEY (`id_partner`) REFERENCES `partner` (`id`),
  ADD CONSTRAINT `role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

--
-- Ketidakleluasaan untuk tabel `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `lampiran_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`nik`),
  ADD CONSTRAINT `lampiran_2` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_lampiran` (`id`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `pertemuan` (`id`);

--
-- Ketidakleluasaan untuk tabel `mentor_course`
--
ALTER TABLE `mentor_course`
  ADD CONSTRAINT `mentor_course_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `mentor_course_2` FOREIGN KEY (`mentor_id`) REFERENCES `mentor_course` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_1` FOREIGN KEY (`id_metode_pembayaran`) REFERENCES `metode_pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD CONSTRAINT `pertemuan_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `pertemuan_2` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsor` (`id`);

--
-- Ketidakleluasaan untuk tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `sponsor_1` FOREIGN KEY (`id_partner`) REFERENCES `partner` (`id`),
  ADD CONSTRAINT `sponsor_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`),
  ADD CONSTRAINT `user_course_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `user_course_3` FOREIGN KEY (`account_id`) REFERENCES `account` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
