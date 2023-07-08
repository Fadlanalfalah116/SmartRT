-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 07 Jul 2023 pada 17.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) DEFAULT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(18, '11', 38, 'Talun', 'Ibun', 'Bandung', 'Jawa Barat', 'Indonesia', '001', '002', 1, '2023-07-06 10:56:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('Laki-Laki','Perempuan') NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_mutasi` varchar(10) NOT NULL,
  `riwayat_mutasi` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `nik_mutasi`, `nama_mutasi`, `tempat_lahir_mutasi`, `tanggal_lahir_mutasi`, `jenis_kelamin_mutasi`, `desa_kelurahan_mutasi`, `kecamatan_mutasi`, `kabupaten_kota_mutasi`, `provinsi_mutasi`, `negara_mutasi`, `rt_mutasi`, `rw_mutasi`, `agama_mutasi`, `pendidikan_terakhir_mutasi`, `pekerjaan_mutasi`, `status_perkawinan_mutasi`, `status_mutasi`, `riwayat_mutasi`, `id_user`, `created_at`, `updated_at`) VALUES
(22, '14', 'Habib', 'Bandung', '2000-07-13', 'Laki-Laki', 'Tcaciuac', 'cacacIbun', 'Bandung', 'Jawa Barat', 'Indonesia', '001', '002', 'Islam', 'SMA', 'Tanpa Pekerjaan', 'Tidak Kawin', 'Pindah', 'Hidup', 1, '2023-07-07 15:14:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `tautan_pekerjaan` varchar(10000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `tautan_pekerjaan`, `id_user`, `created_at`, `updated_at`) VALUES
(3, 'Graphic Designer', 'https://glints.com/id/opportunities/jobs/graphic-designer/388d7b73-b80a-47d0-aab0-8f648ac3a1df?utm_referrer=explore', 1, '2023-07-06 15:13:20', '0000-00-00 00:00:00'),
(4, 'Admin Online Shop Zeb Store', 'https://www.google.com/search?q=lowongan+pekerjaan&amp;rlz=1C5CHFA_enID1035ID1035&amp;oq=lowong&amp;gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7Mg0IARAAGIMBGLEDGIAEMgYIAhBFGDkyDQgDEAAYgwEYsQMYgAQyCggEEAAYsQMYgAQyBggFEEUYPTIGCAYQRRg9MgYIBxBFGD3SAQgxNTU5ajBqN6gCALACAA&amp;sourceid=chrome&amp;ie=UTF-8&amp;ibp=htl;jobs&amp;sa=X&amp;ved=2ahUKEwiAqIyOiPv_AhXkamwGHap9C30Qkd0GegQIERAB#fpstate=tldetail&amp;htivrt=jobs&amp;htiq=lowongan+pekerjaan&amp;htidocid=XKgr7uzjOukAAAAAAAAAAA%3D%3D', 1, '2023-07-06 21:52:17', '0000-00-00 00:00:00'),
(5, 'Head Cook - Marketing Wedding Event', 'https://www.lokerbandung.id/lowongan/head-cook-marketing-wedding-event-di-miranty-catering-company/', 1, '2023-07-07 15:17:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `status_user` enum('Admin','Warga') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'AdminRT', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Talun', 'Ibun', 'Bandung', 'Jawa Barat', 'Indonesia', '001', '002', '2023-07-05 02:26:16', '2023-07-04 16:33:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `email_warga` varchar(50) NOT NULL,
  `no_warga` varchar(16) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('Laki-Laki','Perempuan') NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_warga` varchar(10) NOT NULL,
  `riwayat_warga` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `email_warga`, `no_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `riwayat_warga`, `id_user`, `created_at`, `updated_at`) VALUES
(38, '12', 'Fadlan', 'holafadlan@gmail.com', '085724252039', 'Bandung', '2002-07-24', 'Laki-Laki', 'Talun', 'Ibun', 'Bandung', 'Jawa Barat', 'Indonesia', '001', '002', 'Islam', 'S1', 'Mahasiswa', 'Tidak Kawin', 'Tetap', 'Hidup', 1, '2023-07-06 10:09:49', '0000-00-00 00:00:00'),
(39, '13', 'Rifqi', 'widi.10120064@mahasiswa.unikom.ac.id', '085724252039', 'Bandung', '2002-07-09', 'Laki-Laki', 'Talun', 'Ibun', 'Bandung', 'Jawa Barat', 'Indonesia', '001', '002', 'Islam', 'S1', 'Mahasiswa', 'Tidak Kawin', 'Tetap', 'Hidup', 1, '2023-07-07 10:28:49', '2023-07-07 10:28:49'),
(41, '15', 'Alvin', 'alvinjelek28@gmail.com', '3293792739', 'Bandung', '2000-07-05', 'Laki-Laki', 'Talun', 'Ibun', 'Bandung', 'Jawa Barat', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Tanpa Pekerjaan', 'Tidak Kawin', 'Tetap', 'Hidup', 1, '2023-07-07 15:16:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `warga_has_kartu_keluarga`
--

INSERT INTO `warga_has_kartu_keluarga` (`id_warga`, `id_keluarga`) VALUES
(39, 18);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `fk_kartu_keluarga_kepala_keluarga` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE,
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD CONSTRAINT `pekerjaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
