-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:6844
-- Generation Time: Jul 21, 2022 at 01:59 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talenhub_talenthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Artikel', 'artikel', '2022-06-15 03:50:43', '2022-06-15 04:06:50'),
(3, 'Tutorial', 'tutorial', '2022-06-15 07:12:23', '2022-06-15 07:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `commentblogs`
--

CREATE TABLE `commentblogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penelitian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama_lengkap`, `nidn`, `tgl_lahir`, `jekel`, `email`, `no_telp`, `perguruan_tinggi`, `fakultas`, `gelar`, `penelitian`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Arif Sholehudin', '1294190237490', '2022-06-20', 'Laki-Laki', 'arifmohamad053@gmail.com', '85335222375', 'Polinema PSDKU Kediri', 'Teknik Informatika', 'Sarjana', 'Sarjana', '2022-06-20 04:29:22', '2022-06-20 04:29:22'),
(2, 'aiaia', '1111111111111111111111', '2023-05-06', 'Laki-Laki', 'achmadcori2@gmail.com', '00', 'aaa', 'aaa', 'aaa', 'Sarjana', '2022-07-06 04:25:24', '2022-07-06 04:25:24'),
(3, 'zenia', '123334', '2022-07-22', 'Laki-Laki', 'zeniaindonesia@gmail.com', '8284930033', 'UNY', 'wss', 'ass', 'Sarjana', '2022-07-06 04:34:11', '2022-07-06 04:34:11'),
(4, 'Mohammad Arif Sholehudin', '1294190237490', '2022-07-06', 'Laki-Laki', 'arifmohamad053@gmail.com', '85335222375', 'Polinema PSDKU Kediri', 'Teknik Informatika', 'ngetym', 'mytmetum', '2022-07-06 07:45:38', '2022-07-06 07:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `doseninformasi`
--

CREATE TABLE `doseninformasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doseninformasi`
--

INSERT INTO `doseninformasi` (`id`, `dosen_id`, `informasi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Facebook', '2022-06-20 04:29:22', '2022-06-20 04:29:22'),
(2, '1', 'Word of Mouth', '2022-06-20 04:29:22', '2022-06-20 04:29:22'),
(3, '2', 'Youtube', '2022-07-06 04:25:24', '2022-07-06 04:25:24'),
(4, '3', 'Linkendin', '2022-07-06 04:34:11', '2022-07-06 04:34:11'),
(5, '4', 'Linkendin', '2022-07-06 07:45:38', '2022-07-06 07:45:38'),
(6, '4', 'Word of Mouth', '2022-07-06 07:45:38', '2022-07-06 07:45:38');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `langganan`
--

CREATE TABLE `langganan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langganan`
--

INSERT INTO `langganan` (`id`, `nama`, `email`, `no_telp`, `perusahaan`, `created_at`, `updated_at`) VALUES
(3, 'anom', 'anom@gmail.com', '8284930033', 'anom enterprise', '2022-07-02 13:30:51', '2022-07-02 13:30:51'),
(4, 'Laksmitha Aurelia Dewi', 'Syncore.Laksmitha@gmail.com', '81233775004', 'Syncore', '2022-07-04 03:32:40', '2022-07-04 03:32:40'),
(5, 'Laksmitha Aurelia Dewi', 'Syncore.Laksmitha@gmail.com', '81233775004', 'Syncore', '2022-07-04 03:32:58', '2022-07-04 03:32:58'),
(6, 'Mohammad Arif Sholehudin', 'arifmohamad053@gmail.com', '85335222375', NULL, '2022-07-04 07:53:51', '2022-07-04 07:53:51'),
(7, 'assaa', 'aaaaa@gmail.com', 'ass', 'sss', '2022-07-06 04:33:00', '2022-07-06 04:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`) VALUES
(1, 'Magang bersertfikat'),
(2, 'Talenta Academy');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_layanan` bigint(20) UNSIGNED NOT NULL,
  `id_program` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_thn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akhir_bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akhir_thn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama_lengkap`, `nim`, `pendidikan_terakhir`, `tgl_lahir`, `jekel`, `id_layanan`, `id_program`, `email`, `no_telp`, `perguruan_tinggi`, `fakultas`, `prodi`, `gelar`, `mulai_bulan`, `mulai_thn`, `akhir_bulan`, `akhir_thn`, `created_at`, `updated_at`) VALUES
(5, 'Mohammad Arif Sholehudin', '0701368342', 'D3 Sederajat', '1998-11-15', 'Laki-Laki', 1, 2, 'arifmohamad053@gmail.com', '85335222375', 'Polinema PSDKU Kediri', 'Teknik Informatika', 'Menejemen Informasi', 'Sarjana', 'Agustus', '2017', 'Desember', '2020', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(7, 'Mohammad Arif Sholehudin', '0701368342', 'D3 Sederajat', '2022-06-20', 'Laki-Laki', 1, 2, 'arifmohamad053@gmail.com', '85335222375', 'Polinema PSDKU Kediri', 'Teknik Informatika', 'Menejemen Informasi', 'Sarjana', 'Oktober', '2016', 'September', '2020', '2022-06-20 06:46:30', '2022-06-20 06:46:30'),
(8, 'Mohammad Arif Sholehudin', '0701368342', 'D3 Sederajat', '1998-11-15', 'Laki-Laki', 2, 3, 'syncore.arifsholehudin@gmail.com', '85335222315', 'Polinema PSDKU Kediri', 'Teknik Informatika', 'Menejemen Informasi', 'Amd.Kom', 'Juli', '2017', 'November', '2020', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(9, 'laksmitha', '16/399137/PT/07255', 'D4/S1 Sederajat', '1998-11-23', 'Perempuan', 2, 4, 'Syncore.Laksmitha@gmail.com', '81233775004', 'Universitas Gadjah Mada', 'Peternakan', 'Ilmu dan Industri Peternakan', 'Master of Science', 'Februari', '2020', 'November', '2011', '2022-07-04 03:25:55', '2022-07-04 03:25:55'),
(10, 'Arindia', '12345', 'D4/S1 Sederajat', '1996-10-27', 'Perempuan', 2, 4, 'arindiaoktamelati@gmail.com', '83862560821', 'Universitas Pembangunan Nasional Veteran Yogyakarta', 'Ilmu Sosial dan Ilmu Politik', 'Hubungan Internasional', 'Sarjana Sosial', 'Agustus', '2015', 'Agustus', '2019', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(11, 'Sofani', '1234567', 'D4/S1 Sederajat', '1999-12-12', 'Perempuan', 1, 1, 'syncore.sofani@gmail.com', '81996900800', 'Universitas Muhammadiyah Yogyakarta', 'Ekonomi', 'Akuntansi', 'Bachelor of Social Work', 'Juli', '2022', 'Juli', '2022', '2022-07-04 03:37:41', '2022-07-04 03:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `mhsbidang`
--

CREATE TABLE `mhsbidang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mhs_id` bigint(20) UNSIGNED NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mhsbidang`
--

INSERT INTO `mhsbidang` (`id`, `mhs_id`, `bidang`, `created_at`, `updated_at`) VALUES
(7, 5, 'Accounting, Audit& tax', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(8, 5, 'IT Consulting', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(9, 5, 'IT software', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(12, 7, 'Banking & Finance', '2022-06-20 06:46:30', '2022-06-20 06:46:30'),
(13, 7, 'Agriculture', '2022-06-20 06:46:30', '2022-06-20 06:46:30'),
(14, 8, 'Banking & Finance', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(15, 8, 'Human Resources', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(16, 8, 'Sales & Marketing', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(17, 9, 'Accounting, Audit& tax', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(18, 9, 'Agriculture', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(19, 9, 'E-Commerce', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(20, 9, 'Human Resources', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(21, 9, 'Logistic & Supply Chain', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(22, 9, 'Oil & Energy', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(23, 9, 'Public Service, NGOs & NPOs', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(24, 9, 'fsfs', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(25, 10, 'Accounting, Audit& tax', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(26, 10, 'Advertising & PR', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(27, 10, 'Administration & Coordination', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(28, 11, 'Accounting, Audit& tax', '2022-07-04 03:37:41', '2022-07-04 03:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `mhsinformasi`
--

CREATE TABLE `mhsinformasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mhs_id` bigint(20) UNSIGNED NOT NULL,
  `informasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mhsinformasi`
--

INSERT INTO `mhsinformasi` (`id`, `mhs_id`, `informasi`, `created_at`, `updated_at`) VALUES
(1, 5, 'Facebook', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(2, 5, 'Linkendin', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(3, 5, 'instagram', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(5, 7, 'Facebook', '2022-06-20 06:46:30', '2022-06-20 06:46:30'),
(6, 7, 'Youtube', '2022-06-20 06:46:30', '2022-06-20 06:46:30'),
(7, 8, 'Facebook', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(8, 8, 'Youtube', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(9, 8, 'Talanta Hub Community', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(10, 9, 'Facebook', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(11, 10, 'Linkendin', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(12, 10, 'Lain-Lain', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(13, 11, 'instagram', '2022-07-04 03:37:41', '2022-07-04 03:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `mhskeahlian`
--

CREATE TABLE `mhskeahlian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mhs_id` bigint(20) UNSIGNED NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mhskeahlian`
--

INSERT INTO `mhskeahlian` (`id`, `mhs_id`, `keahlian`, `created_at`, `updated_at`) VALUES
(3, 5, 'Copywriting', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(4, 5, 'Search engine Optimization (SEO)', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(5, 5, 'management', '2022-06-20 04:00:21', '2022-06-20 04:00:21'),
(8, 7, 'Search engine Optimization (SEO)', '2022-06-20 06:46:30', '2022-06-20 06:46:30'),
(9, 8, 'Copywriting', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(10, 8, 'Search engine Optimization (SEO)', '2022-06-27 09:02:46', '2022-06-27 09:02:46'),
(11, 9, 'Penulisan', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(12, 9, 'Pemasaran Media Sosial', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(13, 9, 'Customer Service', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(14, 9, 'management', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(15, 9, 'khdishdsddosado', '2022-07-04 03:25:57', '2022-07-04 03:25:57'),
(16, 10, 'Customer Service', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(17, 10, 'management', '2022-07-04 03:37:07', '2022-07-04 03:37:07'),
(18, 11, 'Pemasaran Media Sosial', '2022-07-04 03:37:41', '2022-07-04 03:37:41');

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
(4, '2022_06_15_025656_create_posts_table', 2),
(5, '2022_06_15_030942_create_category_table', 3),
(6, '2022_06_15_153617_create_commentblogs_table', 4),
(7, '2022_06_16_092501_create_tags_table', 5),
(8, '2022_06_16_093930_create_tagspost_table', 6),
(9, '2022_06_20_110257_create_dosen_table', 7),
(10, '2022_06_20_112016_create_doseninformasi_table', 8),
(11, '2022_06_20_113029_create_mitra_table', 9),
(12, '2022_06_20_113504_create_mitrainformasi_table', 10),
(13, '2022_06_22_092914_create_langganan_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama_lengkap`, `jekel`, `email`, `no_telp`, `nama_perusahaan`, `industri`, `devisi`, `posisi`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Arif Sholehudin', 'Laki-Laki', 'arifmohamad053@gmail.com', '85335222375', 'Pt Semoga Maju', 'Teknologi', 'IT', 'Manager', 'Jln Majumundur No 66 Kab.Blitar', '2022-06-20 04:45:36', '2022-06-20 04:45:36'),
(2, 'laksmitha', 'Laki-Laki', 'Syncore.laksmitha@gmail.com', '81233775004', 'Syncore', 'Jasa', 'Media', 'Leader', 'Jl.syncore', '2022-07-06 04:26:53', '2022-07-06 04:26:53'),
(3, 'Mohammad Arif Sholehudin', 'Perempuan', 'Syncore.Laksmitha@gmail.com', '85335222375', 'Pt Semoga Maju', 'Teknologi', 'hthrwt', 'yrwjy', 'hrwthj6j57', '2022-07-06 07:46:25', '2022-07-06 07:46:25'),
(4, 'Mohammad Arif Sholehudin', 'Laki-Laki', 'arifmohamad053@gmail.com', '85335222375', 'Pt Semoga Maju', 'Teknologi', 'hthrwt', 'Staff', 'mtsmywtmu', '2022-07-06 07:47:23', '2022-07-06 07:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `mitrainformasi`
--

CREATE TABLE `mitrainformasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mitra_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitrainformasi`
--

INSERT INTO `mitrainformasi` (`id`, `mitra_id`, `informasi`, `created_at`, `updated_at`) VALUES
(1, '1', 'Facebook', '2022-06-20 04:45:36', '2022-06-20 04:45:36'),
(2, '1', 'instagram', '2022-06-20 04:45:36', '2022-06-20 04:45:36'),
(3, '2', 'Linkendin', '2022-07-06 04:26:53', '2022-07-06 04:26:53'),
(4, '3', 'Talanta Hub Community', '2022-07-06 07:46:25', '2022-07-06 07:46:25'),
(5, '3', 'rhth', '2022-07-06 07:46:25', '2022-07-06 07:46:25'),
(6, '4', 'Facebook', '2022-07-06 07:47:23', '2022-07-06 07:47:23'),
(7, '4', 'Word of Mouth', '2022-07-06 07:47:23', '2022-07-06 07:47:23'),
(8, '4', 'Youtube', '2022-07-06 07:47:23', '2022-07-06 07:47:23');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `image`, `body`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(10, 1, 'Fasilitas Sarana dan Prasarana BPO Meravi Jogja', 'fasilitas-sarana-dan-prasarana-bpo-meravi-jogja', 'public/img/post/uplMUXszP7hXBVVPXBxdk8PbLInlc8sDX2NFFJ69.jpg', '<p><strong>BPO.Meravi &ndash;</strong>&nbsp;Meravi BPO Jogja memiliki fasilitas sarana dan prasarana yang lengkap dan bersaing dengan BPO yang lain.&nbsp;Memenuhi kebutuhan Customer Service 2022 memang membutuhkan fasilitas prasarana yang lengkap agar bisa memberikan banyak customer untuk perusahaan.&nbsp;Perlu diketahui bahwa Meravi BPO Jogja menyediakan SDM untuk memberikan support kepada perusahaanmu.Meravi BPO Jogja sebagai pendukung perusahaan memiliki dua program utama untuk memenuhi kebutuhan Customer Service 2022.Meravi BPO Jogja juga memiliki komitmen profesional untuk menyediakan SDM yang berkualitas.Perlu diketahui bahwa kebutuhan CS dari tahun ketahun terus meningkat maka Meravi BPO Jogja berkomitmen memenuhi kebutuhan tersebut.Di dalam Meravi BPO Jogja peran CS sebagai garda terdepan untuk meningkatkan penjualan.Tidak perlu diragukan lagi sehingga Meravi BPO Jogja juga berkomitmen menghasilkan yang terbaik.Oleh karena itu Meravi BPO Jogja dilengkapi dengan sarana dan prasarana lengkap sebagai berikut:&nbsp;</p>\r\n\r\n<p><strong>1.Internet Up To 25 Mbps</strong></p>\r\n\r\n<p>Jaringan internet yang disediakan oleh BPO Meravi Jogja cukup untuk memberikan pelayanan terbaik bagi perusahaan dan melayani calon konsumen dengan baik.&nbsp;</p>\r\n\r\n<p><strong>2.Ruang kerja Nyaman dilengkapi AC dan penerangan yang memadai</strong></p>\r\n\r\n<p>Bila melakukan kerjasama dengan tim Meravi BPO akan diberikan sebuah ruang kerja yang nyaman dan dilengkapi dengan AC serta penerangan untuk memberikan support terbaiknya.&nbsp;</p>\r\n\r\n<p><strong>3.Pantry, menyediakan kebutuhan karyawan</strong></p>\r\n\r\n<p>Selain itu para CS nantinya juga akan diberikan support penuh apabila ingin membuat konsumsi sendiri dengan adanya pantry yang lengkap untuk menyediakan kebutuhan karyawan.&nbsp;</p>\r\n\r\n<p><strong>4.Laptop dengan spesifikasi yang mumpuni</strong></p>\r\n\r\n<p>Agar menunjang performa CS juga diberikan laptop dengan spesifikasi yang mumpuni untuk melakukan aktivitas sehari-hari dalam melakukan tugas sebagai CS.&nbsp;</p>\r\n\r\n<p><strong>5.Meja qubicle serta kursi</strong></p>\r\n\r\n<p>Demi kenyamanan dalam bekerja CS juga diberikan meja qubicle serta kursi yang nyaman agar bisa menambah konsentrasi saat mengerjakan pekerjaan sebagai CS.&nbsp;&nbsp;Melakukan kerjasama dapat dilakukan dengan datang langsung ke alamat kantor Meravi.BPO yakni Jl. Raya Solo &ndash; Yogyakarta No.9,7, Karangploso, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282</p>', 'publish', '2022-06-16 10:00:16', '2022-06-16 03:00:16', '2022-06-16 03:00:16'),
(11, 1, '6 Tugas Utama Customer Service Online', '6-tugas-utama-customer-service-online', 'public/img/post/SeWLNpMmmCFg4saPivyNJlNrVMpAXBQ316P26nf2.jpg', '<p><strong>Meravi.BPO</strong>&nbsp;&ndash; Berikut merupakan enam tugas utama customer service online meski sering dianggap sepele, sebenarnya Customer Service merupakan pekerjaan yang memiliki banyak fungsi dan peran di dalam perusahaan.Setidaknya terdapat dua fungsi utama seorang Customer Service. Fungsi utama yang pertama adalah menjadi humas terdepan, dan yang kedua adalah menciptakan kultur perusahaan yang positif.Semakin lengkap, berikut ini adalah deskripsi pekerjaan dan beberapa fungsi dari Customer Service.Peranan customer service juga harus bisa melakukan enam tugas utama berikut ini untuk meningkatkan pendapatan dan menaikan penjualan produk perusahaan.&nbsp;</p>\r\n\r\n<p><strong>1. Menangani dan menjawab pertanyaan pelanggan secara informatif</strong></p>\r\n\r\n<p>Customer Service Online harus memecahkan permasalahan pelanggan secara cepat dan tepat.&nbsp;Selain itu, CS Online harus memberikan jawaban kepada pelanggan secara informatif, padat, dan jelas.</p>\r\n\r\n<p><strong>2. Merespon kritik dan saran dari pelanggan&nbsp;</strong></p>\r\n\r\n<p>Customer Service Online harus tetap ramah dalam menangani testimoni yang buruk dari&nbsp;pelanggan. Terima kritik dan saran dengan baik supaya pelanggan merasa puas. Selain itu, pelanggan akan merasa didengarkan dan tidak kecewa atas pelayanan perusahaan.</p>\r\n\r\n<p><strong>3. Membangun hubungan baik antara perusahaan dan pelanggan</strong></p>\r\n\r\n<p>Customer Service Online merupakan wajah terdepan perusahaan dalam konteks pelayanan.&nbsp;Semua feedback dari pelanggan akan diterima. Pelayanan baik dari CS Online akan membangun hubungan baik dengan pelanggan.</p>\r\n\r\n<p><strong>4. Membantu strategi pemasaran</strong></p>\r\n\r\n<p>Customer Service Online wajib memberikan pelayanan pelanggan yang berkualitas. Pelayanan&nbsp;dari CS Online juga dapat meningkatkan brand awareness.</p>\r\n\r\n<p><strong>5. Menganalisa pelanggan lewat interaksi&nbsp;</strong></p>\r\n\r\n<p>Customer Service Online dapat menganalisa interaksi yang dilakukan kepada pelanggan. Analisis ini berguna untuk memetakan jenis pelanggan sekaligus treatment yang digunakan untuk menangani berbagai macam sifat pelanggan yang berbeda-beda.&nbsp;</p>\r\n\r\n<p><strong>6. Menangani sistem percakapan online</strong></p>\r\n\r\n<p>Customer Service Online harus memaksimalkan saluran informasi perusahaan. CS Online dapat menangani pertanyaan atau keluhan pelanggan lewat kolom komentar, percakapan langsung atau via media sosial.</p>\r\n\r\n<p>Begitulah Informasi seputar Business Process Outsourcing dan Customer Service yang harus dimiliki.</p>', 'publish', '2022-06-16 10:32:54', '2022-06-16 03:32:54', '2022-06-16 03:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `id_layanan`, `nama_program`) VALUES
(1, 1, 'Magang Blud'),
(2, 1, 'Magang Bumdes'),
(3, 2, 'CS Academy'),
(4, 2, 'Coding Academy');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'artikel', 'artikel', '2022-06-16 02:34:53', '2022-06-16 02:34:53'),
(2, 'talenta', 'talenta', '2022-06-16 02:35:04', '2022-06-16 02:35:04'),
(4, 'tutorial', 'tutorial', '2022-06-16 02:35:20', '2022-06-16 02:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `tagspost`
--

CREATE TABLE `tagspost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagspost`
--

INSERT INTO `tagspost` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(8, 10, 1, '2022-06-16 03:00:16', '2022-06-16 03:00:16'),
(9, 10, 2, '2022-06-16 03:00:16', '2022-06-16 03:00:16'),
(10, 11, 2, '2022-06-16 03:32:54', '2022-06-16 03:32:54'),
(11, 11, 4, '2022-06-16 03:32:54', '2022-06-16 03:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Talenta', 'talenta', 'talenta@example.com', NULL, '$2y$10$57h3bd/YhCUKyQEzQWt33eb264eeVX1YuQBpGY1e9q2sgf4LAEGyu', 'admin', NULL, '2022-06-14 01:14:04', '2022-06-14 01:14:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `commentblogs`
--
ALTER TABLE `commentblogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentblogs_post_id_foreign` (`post_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doseninformasi`
--
ALTER TABLE `doseninformasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhsbidang`
--
ALTER TABLE `mhsbidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhsinformasi`
--
ALTER TABLE `mhsinformasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhskeahlian`
--
ALTER TABLE `mhskeahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitrainformasi`
--
ALTER TABLE `mitrainformasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tagspost`
--
ALTER TABLE `tagspost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagspost_post_id_foreign` (`post_id`),
  ADD KEY `tagspost_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commentblogs`
--
ALTER TABLE `commentblogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doseninformasi`
--
ALTER TABLE `doseninformasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `langganan`
--
ALTER TABLE `langganan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mhsbidang`
--
ALTER TABLE `mhsbidang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mhsinformasi`
--
ALTER TABLE `mhsinformasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mhskeahlian`
--
ALTER TABLE `mhskeahlian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mitrainformasi`
--
ALTER TABLE `mitrainformasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagspost`
--
ALTER TABLE `tagspost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentblogs`
--
ALTER TABLE `commentblogs`
  ADD CONSTRAINT `commentblogs_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tagspost`
--
ALTER TABLE `tagspost`
  ADD CONSTRAINT `tagspost_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tagspost_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
