-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2024 at 12:37 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `img` varchar(2555) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `user_id` int DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `img`, `konten`, `tanggal`, `penulis`, `user_id`, `create_at`, `update_at`, `delete_at`) VALUES
(5, 'Sambutan Kepala Sekolah', 'WhatsApp-Image-2024-07-09-at-08_04_53_a34604ae-scaled.jpg', 'eee', '2024-10-31', 'ee', 2, '2024-10-20 00:35:41', '2024-10-20 00:35:41', NULL),
(6, 'PENILAIAN TENGAH SEMESTER GANJIL', 'lunch-min.jpg', 'm', '2024-10-31', 'mm', 2, '2024-10-20 00:37:11', '2024-10-20 00:37:11', NULL),
(7, 'Sambutan Kepala Sekolah', 'Picture.png', 'j', '2024-10-16', 'ee', 2, '2024-10-24 01:28:07', '2024-10-24 01:28:07', NULL),
(8, 'Sambutan Kepala Sekolah', 'MPLB.png', 'uuu', '2024-10-31', 'mm', 3, '2024-10-26 05:30:06', '2024-10-26 05:30:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int NOT NULL,
  `nama_ekstra` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `pembimbing` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `nama_ekstra`, `deskripsi`, `logo`, `gambar`, `pembimbing`, `user_id`, `create_at`, `update_at`, `delete_at`, `slug`) VALUES
(4, 'VOLY', 'vb', 'basket.jpg', 'BP_(2).jpg', 'DZAKY', NULL, '2024-10-23 15:37:06', '2024-10-25 00:01:29', NULL, 'ekstra-4'),
(5, 'lll', 'b', 'pp_smk3.jpg', 'paskib_42.jpg', 'FFFFF', NULL, '2024-10-23 15:41:05', '2024-10-25 00:01:29', NULL, 'ekstra-5'),
(6, 'VOLY', 'lorem', 'voli.jpg', 'smkn_1_slawi.png', 'ytta', NULL, '2024-10-23 09:14:17', '2024-10-25 00:01:29', NULL, 'ekstra-6'),
(7, 'ss', 'm', 'keputrian_4.jpg', 'paskib_41.jpg', 'm', NULL, '2024-10-24 01:25:47', '2024-10-25 20:36:22', NULL, 'ekstra-7'),
(8, 'pp', 'o', 'TJKT.jpg', 'silat.jpg', 'oo', NULL, '2024-10-24 01:26:16', '2024-10-25 20:36:40', NULL, 'ekstra-8');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `tanggal_upload` datetime DEFAULT CURRENT_TIMESTAMP,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `img`, `tanggal_upload`, `create_at`, `update_at`, `delete_at`) VALUES
(6, 'm', 'ssssssssssssssssssssssssssssssss', 'Picture.png', '2024-10-28 21:49:56', '2024-10-28 21:49:56', '2024-10-31 04:27:19', NULL),
(7, 'Sambutan Kepala Sekolah', 'ssssssssss', 'jurnalistik1.jpg', '2024-10-28 22:00:27', '2024-10-28 22:00:27', '2024-10-28 22:08:13', NULL),
(8, 'dd', 'ddddddddd', 'MPLB1.png', '2024-10-28 22:00:38', '2024-10-28 22:00:38', '2024-10-28 22:00:38', NULL),
(9, 'Sambutan Kepala Sekolah', 'ddddddd', 'paskib_4.jpg', '2024-10-28 22:00:49', '2024-10-28 22:00:49', '2024-10-28 22:07:58', NULL),
(14, 'Sambutan Kepala Sekolah', 'dddddd', 'akl_(2).jpg', '2024-10-31 04:26:31', '2024-10-31 04:26:31', '2024-10-31 04:26:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gurustaff`
--

CREATE TABLE `gurustaff` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gurustaff`
--

INSERT INTO `gurustaff` (`id`, `nama`, `gambar`, `jabatan`, `user_id`) VALUES
(18, 'lutfah', 'MPLB4.png', 'kepsekolahsmea', NULL),
(21, 'bu.lutfah', 'PM.jpg', 'ww', 2),
(22, 'www', 'BP_(2)1.jpg', 'wwlk', NULL),
(24, 'wwwg', 'Lutfah5.png', 'wwlk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `info_ppdb`
--

CREATE TABLE `info_ppdb` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info_ppdb`
--

INSERT INTO `info_ppdb` (`id`, `title`, `description`, `youtube`, `instagram`, `facebook`, `twitter`, `telegram`, `image`, `created_at`) VALUES
(2, 'rrrrr', 'rrrr', 'https://youtu.be/oq7u2dSoNlk?si=ueRg4scefWlRGGAJ', 'rr', 'rrrrrrrrl', 'rrrr', 'rrr', 'banner.png', '2024-10-27 17:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `deskripsi`, `logo`, `gambar`, `user_id`, `create_at`, `update_at`, `delete_at`) VALUES
(13, 'PPLG', 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM', 'MPLB.png', 'MPLB1.png', 2, '2024-10-24 10:01:13', '2024-10-25 01:44:45', NULL),
(14, 'AKL', 'AKLLLLLLLLLLLLLLLLLLLLLL', 'akl_(2).jpg', 'Group-18275.jpg', NULL, '2024-10-25 04:37:29', '2024-10-24 21:37:29', NULL),
(15, 'tjkt', 'wwwwww', 'Lutfah.png', 'paskib_4.jpg', 3, '2024-10-26 14:17:01', '2024-10-26 07:17:01', NULL),
(16, 'bu.lutfah', 'mmm', 'PM.jpg', 'MPLB2.png', 3, '2024-10-27 13:19:08', '2024-10-27 06:19:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kepalasekolah`
--

CREATE TABLE `kepalasekolah` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isisambutan` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kepalasekolah`
--

INSERT INTO `kepalasekolah` (`id`, `judul`, `isisambutan`, `tanggal`, `foto`, `user_id`) VALUES
(3, 'Sambutan Kepala Sekola', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. At, tenetur quam! Et unde assumenda recusandae non labore accusantium optio esse aspernatur accusamus. Doloribus exercitationem ducimus facere, quos repellat adipisci praesentium.', '2024-10-19', '6713cf1b9c584.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `maps_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `telepon`, `email`, `maps_url`, `create_at`, `update_at`, `user_id`) VALUES
(0, 'Jl. H. Agus Salim Slawi Kab Tegal Jawa Tengah', '( 0283 ) - 491336', 'smknegeri1slawi@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.325756040844!2d109.13560527426053!3d-6.970841768254768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbee0f34bc473%3A0xe057c51467a0666e!2sSMK%20Negeri%201%20Slawi!5e0!3m2!1sen!2sid!4v1729', '2024-10-25 03:37:19', '2024-10-25 03:49:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id` int NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `isi_kritik_saran` text NOT NULL,
  `tanggal_kirim` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`id`, `nama_pengirim`, `email_pengirim`, `isi_kritik_saran`, `tanggal_kirim`, `status`, `user_id`) VALUES
(1, 'khafidz rizziq', 'khfdz@gmail.com', 'bb', '2024-10-24 23:48:46', NULL, NULL),
(2, 'khafidz rizziq', 'ddd@gmail.com', 'dddddddddddddddddddddddddddddddddddddddddddddd', '2024-10-24 23:51:22', NULL, NULL),
(3, 'khafidz rizziq', 'ddd@gmail.com', 'dddddddddddddddddddddddddddddddddddddddddddddd', '2024-10-24 23:53:51', NULL, NULL),
(4, 'khafidz rizziq', 'zaky@gmail.com', 'bbbbbb', '2024-10-24 23:55:24', NULL, NULL),
(5, 'khafidz rizziq', 'zaky@gmail.come', 'xxxxxx', '2024-10-25 00:13:47', NULL, NULL),
(6, 'hasbu', 'zaky@gmail.com', 'wwwwwwwwwwwwwwww', '2024-10-25 00:24:18', NULL, NULL),
(7, 'khafidz rizziq', 'mmm@gmail.com', 'kkkkkkk', '2024-10-25 20:35:35', NULL, NULL),
(8, 'hasbu', 'khafidzzzzz1922@gmail.com', 'sssssss', '2024-10-26 22:16:48', NULL, NULL),
(9, 'hasbu', 'khfdz@gmail.com', 'mmmmmmmmm', '2024-10-31 04:29:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `tanggal_mulai`, `tanggal_selesai`, `user_id`, `create_at`, `update_at`, `delete_at`) VALUES
(3, 'PENILAIAN TENGAH SEMESTER GENAP', 'sss', '2024-10-23 09:26:00', '2024-10-31 09:26:00', 2, '2024-10-19 16:26:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `judul`, `deskripsi`, `tanggal`, `penulis`, `gambar`, `user_id`, `create_at`, `update_at`, `delete_at`, `slug`) VALUES
(1, 'Sambutan Kepala Sekolah', 'l', '2024-10-25', '0', 'jurnalistik.jpg', NULL, '2024-10-24 00:25:25', '2024-10-25 00:01:29', NULL, 'prestasi-1'),
(3, 'dd', 'dd', '2024-10-23', '0', 'jurnalistik1.jpg', NULL, '2024-10-24 00:37:25', '2024-10-25 00:01:29', NULL, 'prestasi-3'),
(4, 'Sambutan Kepala Sekolah', 'p', '2024-10-30', '0', 'keputrian_4.jpg', NULL, '2024-10-24 00:38:05', '2024-10-25 00:01:29', NULL, 'prestasi-4'),
(5, 'Sambutan Kepala Sekolah', 'p', '2024-10-23', '0', 'pmr.jpg', NULL, '2024-10-24 00:38:22', '2024-10-25 00:01:29', NULL, 'prestasi-5'),
(6, 'PENILAIAN TENGAH SEMESTER GANJIL', 'k', '2024-10-29', '0', 'bg_home1.JPG', NULL, '2024-10-24 00:38:55', '2024-10-25 00:01:29', NULL, 'prestasi-6'),
(7, 'Sambutan Kepala Sekolah', 'pp', '2024-10-23', 'SAYA SENDIRI', 'keputrian_41.jpg', NULL, '2024-10-24 02:28:06', '2024-10-25 00:01:29', NULL, 'prestasi-7');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'admin'),
(4, 'admin'),
(5, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id`, `nama`, `jumlah`, `keterangan`) VALUES
(1, 'khafidz rizziq', 777, 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul`, `konten`, `gambar`, `user_id`) VALUES
(1, 'sssssssssss', 'ssssssssssss', 'Lutfah1.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int NOT NULL,
  `jumlah_siswa` int NOT NULL,
  `rombongan_belajar` int NOT NULL,
  `kompetensi_keahlian` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `jumlah_siswa`, `rombongan_belajar`, `kompetensi_keahlian`) VALUES
(1, 2300, 72, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(2, 'Admin User', 'admin', '867a118edde368c015c20aee691c8933', 1),
(3, 'Admin', 'khafidz', '4e02188c56fbcea0362cf5c0be6e5b40', 3),
(4, 'Admin', 'adjiemas', '92b141cd34d81c296ac537ffdbef4f33', 4),
(5, 'Selena', 'selena', 'd6526219190b296ac7fffd4058b60c82', 5),
(6, 'Adel', 'adel', 'd6526219190b296ac7fffd4058b60c82', 5),
(7, 'Zaky', 'zaky', 'd6526219190b296ac7fffd4058b60c82', 5);

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `gambar`, `user_id`) VALUES
(1, 'sk', 'ssss', 'MPLB1.png', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurustaff`
--
ALTER TABLE `gurustaff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `info_ppdb`
--
ALTER TABLE `info_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gurustaff`
--
ALTER TABLE `gurustaff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `info_ppdb`
--
ALTER TABLE `info_ppdb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `gurustaff`
--
ALTER TABLE `gurustaff`
  ADD CONSTRAINT `gurustaff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  ADD CONSTRAINT `kepalasekolah_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `kontak`
--
ALTER TABLE `kontak`
  ADD CONSTRAINT `kontak_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD CONSTRAINT `kritiksaran_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD CONSTRAINT `sejarah_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD CONSTRAINT `visi_misi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
