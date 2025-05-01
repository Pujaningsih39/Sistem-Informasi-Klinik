-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 03:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Khonghucu') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nip`, `nama`, `jenis_kelamin`, `agama`, `alamat`, `no_telp`, `email`) VALUES
(2, 120110002, 'Mina Ismu Rahayu, M.T', 'Perempuan', 'Islam', 'Jl. Lengkong Besar 20, Bandung', '085645323594', 'minaismurahayu@gmail.com'),
(3, 120110003, 'Yus Jayusman, M.T', 'Laki-laki', 'Islam', 'Jl. Cibenying Selatan No. 47, Bandung', '08175112114', 'yus.jayusman@gmail.com'),
(4, 120110004, 'Dani Pradana Kartaputra., MT', 'Laki-laki', 'Islam', 'Jl. Selatan No. 47', '08563247778', 'danipradana@gmail.com'),
(5, 120110005, 'Indra Maulana., ST., M.Kom', 'Laki-laki', 'Islam', 'Jalan Pasirkoja No. 55', '08943512312', 'indramaulana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_krs`
--

CREATE TABLE `tb_krs` (
  `id` int(100) NOT NULL,
  `id_mahasiswa` int(100) NOT NULL,
  `id_mk` varchar(1000) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `status` enum('Sedang Proses','Setuju','Tidak Setuju') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_krs`
--

INSERT INTO `tb_krs` (`id`, `id_mahasiswa`, `id_mk`, `tahun`, `semester`, `status`) VALUES
(43, 17, 'KD1105,KD1106,KD1207,KD1208,KU1203', '2021', '2', 'Setuju'),
(46, 17, 'KD1101,KD1102,KD1103,KD1104,KU1101,KU1102,SI1101,SI1102', '2022', '1', 'Sedang Proses'),
(47, 26, 'KD1101,KD1102,KD1103,KD1104,KU1101,KU1102', '2022', '1', 'Setuju'),
(48, 17, 'KD1207,KD1208,KU1203,KU1204,SI1203', '2021', '2', 'Tidak Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(100) NOT NULL,
  `id_dosen` int(100) NOT NULL,
  `nim` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` enum('Sistem Informasi','Teknik Informatika') NOT NULL,
  `tahun_masuk` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tt_lahir` varchar(100) NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Khonghucu') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `id_dosen`, `nim`, `nama`, `jurusan`, `tahun_masuk`, `jenis_kelamin`, `tt_lahir`, `agama`, `alamat`, `no_telp`) VALUES
(17, 5, 3220011, 'Tania Damayanti R', 'Sistem Informasi', '2020', 'Perempuan', 'Tasikmalaya, 01 April 2000', 'Islam', 'Jalan Pasirkoja No. 22', '08943531441'),
(18, 5, 3220012, 'Nessy Pujayanti', 'Sistem Informasi', '2019', 'Perempuan', 'Jakarta, 31 Maret 2002', 'Katolik', 'Jl. Surapati', '085787666333'),
(26, 2, 3220014, 'Nabilah Aida', 'Sistem Informasi', '2018', 'Perempuan', 'Jakarta, 31 Maret 2002', 'Buddha', 'Jl. Cibenying Selatan No. 42', '08563247778'),
(28, 3, 3220009, 'Fatma Aida', 'Teknik Informatika', '2019', 'Perempuan', 'Cianjur, 30 Mei 2001', 'Katolik', 'Jalan Timur', '0984312222');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id` int(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `kode_mk` varchar(100) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `sks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id`, `semester`, `kode_mk`, `nama_mk`, `sks`) VALUES
(1, '1', 'KD1101', 'Algoritma', 3),
(2, '1', 'KD1102', 'Kalkulus', 3),
(3, '1', 'KD1103', 'Paket Aplikasi', 2),
(4, '1', 'KD1104', 'Pemograman 1', 3),
(5, '1', 'KU1101', 'Bahasa Inggris 1', 2),
(6, '1', 'KU1102', 'Manajemen dan Perilaku Organisasi', 2),
(7, '1', 'SI1101', 'Akutansi', 2),
(8, '1', 'SI1102', 'Pengantar Sistem Informasi', 2),
(9, '2', 'KD1105', 'Matriks dan Ruang Vektor', 2),
(10, '2', 'KD1106', 'Pemograman 2', 3),
(11, '2', 'KD1207', 'Sistem Informasi Manajemen', 3),
(12, '2', 'KD1208', 'Struktur Data', 3),
(13, '2', 'KU1203', 'Bahasa Inggris 2', 2),
(14, '2', 'KU1204', 'Pendidikan Pancasila', 2),
(15, '2', 'SI1203', 'Proses Bisnis', 2),
(16, '2', 'SI1204', 'Bisnis Berbasis Elektronik', 2),
(17, '3', 'KD1309', 'Komunikasi Data dan Jaringan', 2),
(18, '3', 'KD1310', 'Matematika Diskrit', 3),
(19, '3', 'KD1311', 'Pemograman 3', 3),
(20, '3', 'KD1312', 'Rekayasa Perangkat Lunak', 3),
(21, '3', 'KD1313', 'Sistem Operasi', 3),
(22, '3', 'KU1305', 'Kewirausahaan 1', 2),
(23, '3', 'KU1306', 'Manajemen Komunikasi', 2),
(24, '3', 'KU1307', 'Statistik', 2),
(25, '3', 'SI1300', 'Mini Project 1', 2),
(26, '4', 'KD1414', 'Analisa dan Perancang Peangkat Lunak', 3),
(27, '4', 'KD1415', 'Model dan Simulasi', 2),
(28, '4', 'KD1416', 'Pemograman 4', 3),
(29, '4', 'KD1417', 'Perancang Basis Data4', 3),
(30, '4', 'KU1408', 'Kewirausahaan 2', 2),
(31, '4', 'SI1400', 'Mini Project 2', 2),
(32, '4', 'SI1405', 'Sistem Informasi Akutansi dan Keuangan', 2),
(33, '4', 'SI1406', 'Statistik Lanjut', 2),
(34, '5', 'KD1518', 'Interaksi Manusia dan Komputer', 2),
(35, '5', 'KD1519', 'Pemograman 5', 3),
(36, '5', 'KD1520', 'Sistem Basis Data', 3),
(37, '5', 'KU1509', 'Bahasa Indonesia', 2),
(38, '5', 'KU1510', 'Pendidikan Agama dan Etika', 2),
(39, '5', 'SI1507', 'Data Mining', 3),
(40, '5', 'SI1508', 'Perencanaan Strategis Teknologi Informasi', 2),
(41, '6', 'KD1621', 'Pemograman 6', 3),
(42, '6', 'KD1622', 'Pengujian Perangkat Lunak', 2),
(43, '6', 'KD1623', 'Riset Operasi', 2),
(44, '6', 'KD1624', 'Sistem Pengamanan Komputer', 2),
(45, '6', 'KU1611', 'Pendidikan Kewarganegaraan', 2),
(46, '6', 'SI1600', 'Kerja Praktek', 3),
(47, '7', 'IF1001', 'Multimedia', 3),
(48, '7', 'IF1002', 'Cloud Computing', 3),
(49, '7', 'IF1003', 'Sistem Robotika', 3),
(50, '7', 'IF1004', 'Big Data Framework', 3),
(51, '7', 'IF1005', 'Google Programming', 3),
(52, '7', 'IF1406', 'Microcontroller dan IOT', 3),
(53, '7', 'IF1507', 'Kecerdasan Buatan', 3),
(54, '7', 'IF1508', 'Teori Bahasa dan Otomata', 3),
(55, '7', 'IF1709', 'Analisa Numerik', 3),
(56, '7', 'IF1710', 'Pengolahan Citra', 3),
(57, '7', 'IF1711', 'Sistem Tedistribusi dan Komputasi Paralel', 3),
(58, '7', 'KD1725', 'Kapita Selekta', 2),
(59, '7', 'KD1726', 'Manajemen Proyek teknologi Informasi', 2),
(60, '7', 'KU1712', 'Metodologi Penelitian', 2),
(61, '7', 'SI1001', 'Machine Learning', 3),
(62, '7', 'SI1002', 'Deep Learning', 3),
(63, '8', 'KU1813', 'HAKI dan Etika Profesi', 2),
(64, '8', 'SI1800', 'Skripsi', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_perwalian`
--

CREATE TABLE `tb_perwalian` (
  `id_perwalian` int(100) NOT NULL,
  `id_mahasiswa` int(100) NOT NULL,
  `id_dosen` int(100) NOT NULL,
  `status` enum('setuju','tidak setuju') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perwalian`
--

INSERT INTO `tb_perwalian` (`id_perwalian`, `id_mahasiswa`, `id_dosen`, `status`) VALUES
(1, 2, 1, 'setuju'),
(2, 3, 1, 'setuju');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('Admin','Dosen','Mahasiswa','') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Admin', 'admin', 'superadmin@gmail.com', NULL, '$2y$10$b6.qQfnJty/S4XLsc0SERuk7EPh4hhVHebR/gVXQk1AepG0DOU2PO', NULL, '2022-04-30 08:15:58', '2022-04-30 08:15:58', 'Admin'),
(6, 'Siti Yuliyanti', '120110001', 'sitiyuliyanti11@gmail.com', NULL, '$2y$10$vegm1tZTiPka2sl7gtdo6eHeGa9k8KsJgRka7LeUOIdw3Zar4PCSO', NULL, '2022-04-30 08:17:57', '2022-04-30 08:17:57', 'Dosen'),
(8, 'Dani Pradana Kartaputra', '120110004', NULL, NULL, '$2y$10$7fXYxPV/HYCC9TfLAmPX3.h4yAJTol9XRhJ.3csanrSg.0IETS/f2', NULL, NULL, NULL, 'Dosen'),
(12, 'Tania Damayanti', '3220011', NULL, NULL, '$2y$10$q5eIBFXlgbZWMQQxx/UmCeyeLTM.ZxS58yZlV.lrfBd56WOV3LCRa', NULL, NULL, NULL, 'Mahasiswa'),
(14, 'Mina Ismu Rahayu, M.T', '120110002', NULL, NULL, '$2y$10$qkepyasg7Pgq9IVKwL1IeutkAclzGRvn5cH0xXz0KaMtHSJk7zB6G', NULL, NULL, NULL, 'Dosen'),
(28, 'Indra Maulana., ST., M.Kom', '120110005', NULL, NULL, '$2y$10$t51wjtGd69pXiInGtvaIV.Q2jJPMM8BlqI0wWqs/o8uVCO5yj5mj2', NULL, NULL, NULL, 'Dosen'),
(29, 'Nabilah Aida', '3220014', NULL, NULL, '$2y$10$YdSGBgZWy4rPABazD1Fpm.XlbMvijj4/vZoY5JRp8mJq0jQs1I1ji', NULL, NULL, NULL, 'Mahasiswa'),
(30, 'Pujaningsih', '3220003', NULL, NULL, '$2y$10$1ZTAj8jD6BTnCkk/GulS5e3gbuSGXtDCV0LyJoIUW.oVDzSUQ/GLC', NULL, NULL, NULL, 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_krs`
--
ALTER TABLE `tb_krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk11` (`id_mahasiswa`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_perwalian`
--
ALTER TABLE `tb_perwalian`
  ADD PRIMARY KEY (`id_perwalian`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_krs`
--
ALTER TABLE `tb_krs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_perwalian`
--
ALTER TABLE `tb_perwalian`
  MODIFY `id_perwalian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_krs`
--
ALTER TABLE `tb_krs`
  ADD CONSTRAINT `fk11` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
