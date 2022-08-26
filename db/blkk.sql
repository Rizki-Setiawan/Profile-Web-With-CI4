-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2021 pada 02.33
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'John Doe',
  `content` text DEFAULT NULL,
  `status` enum('published','draft') NOT NULL DEFAULT 'draft',
  `created_at` datetime DEFAULT current_timestamp(),
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `title`, `author`, `content`, `status`, `created_at`, `slug`) VALUES
(33, 'Pelatihan angkatan I Tahun 2021 Diadakan', 'Admin', '<p><img src=\"https://ibb.co/GRkYbdF\" alt=\"\" />Tahun ini, perayaan HUT RI ke-75 digelar dalam suasana berbeda yaitu disaat pandemi covid-19 belum selesai. Namun hal tersebut tidak merubah semangat berjuang dan kebahagiaan Rakyat Indonesia dalam merayakan kemerdekaannya. Kebahagiaan Kemerdekaan ditandai dengan mengikuti pengibaran sang merah putih secara virtual di rumah masing-masing. Suasana dan nuansa kebangsaan tetap terlihat di seluruh wilayah di Negara Kesatuan Republik Indonesia.</p>\r\n<p><img class=\"img-fluid\" src=\"https://i.ibb.co/3TCdnL1/1.jpg\" alt=\"1\" border=\"0\" /></p>\r\n<p>BLK Komunitas Ponpes Shirotul falah ikut berpartisipasi dalam menyemarakkan bulan kemerdekaan dengan menyelenggarakan Pelatihan Berbasis Kompetensi Kejuruan TIK program pelatihan desain grafis.&nbsp;</p>\r\n<p>Pelatihan Berbasis Kompetensi ini diikuti oleh 16 peserta yang terpilih dari 21 calon peserta pelatihan yang terseleksi secara ketat oleh tim rekrutmen dan pengelola BLK Komunitas. Dalam pelaksanaan pelatihan kurang lebih 1 bulan kedepan, BLK Komunitas menggunakan kurikulum dan silabus program pelatihan desain grafis sesuai SKKNI (Standar Kompetensi Kerja Nasional Indonesia).</p>\r\n<p>Man Jadda Wa Jadda, semangat berjuang untuk bangkit. BLK Komunitas terus berusaha melebarkan sayap kerja sama kemitraan dengan dunia usaha dan industri (DUDI). Dimana nantinya para alumni pelatihan setelah selesai mengikuti pelatihan dapat tersalurkan ke DUDI. Apabila ada kendala dan masalah harus disikapi sebagai tantangan sehingga semakin matang dalam bekerja / berwirausaha.</p>\r\n<p>Kita harus senantiasa bersyukur atas segala nikmat yang telah Allah SWT berikan dengan cara tetap berpikiran positif, semangat belajar, terus berkarya, lebih bekerja keras lagi cari alternatif solusi pemecah kendala dan masalah tersebut. Insya Allah dengan pertolongan Allah SWT, apabila kita kreatif dan inovatif dalam bekerja maupun berusaha maka kesuksesan baik di dunia maupun akhirat pun akan diraih.</p>', 'published', '2021-11-12 16:18:37', 'pelatihan-angkatan-i-tahun-2021-diadakan'),
(34, 'BLKK Ponpes Shirotul Falah', 'Rizki Setiawan', '<p>BLK Komunitas Ponpes Shirotul falah ikut berpartisipasi dalam menyemarakkan bulan kemerdekaan dengan menyelenggarakan Pelatihan Berbasis Kompetensi Kejuruan TIK program pelatihan desain grafis.&nbsp;</p>\r\n<p>Pelatihan Berbasis Kompetensi ini diikuti oleh 16 peserta yang terpilih dari 21 calon peserta pelatihan yang terseleksi secara ketat oleh tim rekrutmen dan pengelola BLK Komunitas. Dalam pelaksanaan pelatihan kurang lebih 1 bulan kedepan, BLK Komunitas menggunakan kurikulum dan silabus program pelatihan desain grafis sesuai SKKNI (Standar Kompetensi Kerja Nasional Indonesia).</p>\r\n<p>Man Jadda Wa Jadda, semangat berjuang untuk bangkit. BLK Komunitas terus berusaha melebarkan sayap kerja sama kemitraan dengan dunia usaha dan industri (DUDI). Dimana nantinya para alumni pelatihan setelah selesai mengikuti pelatihan dapat tersalurkan ke DUDI. Apabila ada kendala dan masalah harus disikapi sebagai tantangan sehingga semakin matang dalam bekerja / berwirausaha.</p>\r\n<p><img class=\"img-fluid\" src=\"https://i.ibb.co/gJwqBr6/20210602-104115.jpg\" alt=\"20210602-104115\" border=\"0\" /></p>', 'published', '2021-11-12 16:47:45', 'blkk-ponpes-shirotul-falah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) UNSIGNED NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `keterangan`, `created_at`) VALUES
(16, '0hfNEQTDx5zAc70-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:30:27'),
(17, 'rXpLhH7fzSkL9Sm-Ruang Pengelola.jpg', 'Ruang Pengelola', '2021-11-03 09:30:55'),
(18, 'DwvC9aBLLUuR4qe-Ruang Teori.jpg', 'Ruang Teori', '2021-11-03 09:31:38'),
(19, 'bXXESr3TQYi9Akf-Ruang Praktek.jpg', 'Ruang Praktek', '2021-11-03 09:32:04'),
(20, 'OJTw40EzRNDGQ56-Pengelola BLKK.jpg', 'Pengelola BLKK', '2021-11-03 09:33:55'),
(21, 'G9rz7a9a5i8e69A-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:34:41'),
(23, '6dTtSVbgAqYg4Ma-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:35:46'),
(24, 'v8xyFwhOsdEuVSm-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:36:18'),
(25, 'j9CHWPNOBEz66ec-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:36:43'),
(26, 'SQkLFhWXur9tHIp-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:37:15'),
(27, 'Toc06hZYQLjZPNn-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:37:41'),
(28, 'lEVomPTLr9P6ADd-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:38:06'),
(29, 'HH0u7SVvqkEMrAX-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:38:28'),
(30, 'X72CUmJ1Fwtaz1V-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:39:30'),
(31, 'J50qGPJqdbArYmX-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:39:44'),
(32, 'ihQmOorAE26XlzS-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:40:03'),
(33, 'O4H1SHWOvqGiyS5-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:40:26'),
(34, 'sjCyC6VM0xOcwDR-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:40:57'),
(35, 'av5NfXTCdlZ2uR2-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:41:36'),
(36, 'DSeQJPaLl4o2WOk-BLKK Ponpes Shirotul Falah.jpg', 'BLKK Ponpes Shirotul Falah', '2021-11-03 09:41:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(9, '2021-09-18-082255', 'App\\Database\\Migrations\\Users', 'default', 'App', 1632152717, 1),
(10, '2021-09-20-122435', 'App\\Database\\Migrations\\Berita', 'default', 'App', 1632152717, 1),
(11, '2021-09-23-100226', 'App\\Database\\Migrations\\Pendaftaran', 'default', 'App', 1632445868, 2),
(12, '2021-09-24-015932', 'App\\Database\\Migrations\\Users', 'default', 'App', 1632448861, 3),
(13, '2021-09-24-015955', 'App\\Database\\Migrations\\Pendaftaran', 'default', 'App', 1632448861, 3),
(14, '2021-09-24-021651', 'App\\Database\\Migrations\\Users', 'default', 'App', 1632449826, 4),
(15, '2021-09-24-022356', 'App\\Database\\Migrations\\Users', 'default', 'App', 1632450249, 5),
(16, '2021-09-24-062831', 'App\\Database\\Migrations\\Pendaftaran', 'default', 'App', 1632464932, 6),
(17, '2021-09-24-170755', 'App\\Database\\Migrations\\Galeri', 'default', 'App', 1632503349, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `program_pelatihan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `nama_ayah`, `nama_ibu`, `alamat`, `program_pelatihan`, `status`, `created_at`) VALUES
(1, 'Rizki Setiawan', 'Banyumas', '2000-02-17', '085394028071', 'Kise', 'Siapa', 'Tasikmalaya', 'Web Programming', 'Telah Verifikasi', '2021-09-24 15:50:28'),
(22, 'fwefa', 'dfa', '2021-11-17', '343334', 'adfsdf', 'sfs', 'weqw', 'Desain Grafis', 'Belum Verifikasi', '2021-11-13 11:26:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `created_at`) VALUES
(1, 'admin', '$2y$10$nEOeGuhwTs2TF59g6zqMXO22RXzYJeSyNvtoUwSkpDb2WmzBjC5Na', 'Rizki Setiawan', '2021-09-24 09:24:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
