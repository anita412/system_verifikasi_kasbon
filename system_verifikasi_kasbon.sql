-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 08:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_verifikasi_kasbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'PT. BANK CIMB NIAGA - (CIMB)', '022', NULL, NULL),
(2, 'PT. BANK CIMB NIAGA UNIT USAHA SYARIAH - (CIMB SYARIAH)', '730', NULL, NULL),
(3, 'PT. BNI SYARIAH', '427', NULL, NULL),
(4, 'PT. BANK BCA SYARIAH', '536', NULL, NULL),
(5, 'PT. BANK BUKOPIN', '441', NULL, NULL),
(6, 'PT. BANK CENTRAL ASIA, TBK - (BCA)', '014', NULL, NULL),
(7, 'PT. BANK DANAMON INDONESIA', '011', NULL, NULL),
(8, 'PT. BANK DKI', '111', NULL, NULL),
(9, 'PT. BANK DBS INDONESIA', '046', NULL, NULL),
(10, 'PT. BANK HSBC INDONESIA', '087', NULL, NULL),
(11, 'PT. BANK MANDIRI (PERSERO), TBK', '008', NULL, NULL),
(12, 'PT. BANK MANDIRI TASPEN POS', '564', NULL, NULL),
(13, 'PT. BANK MAYBANK INDONESIA, TBK', '016', NULL, NULL),
(14, 'PT. BANK MAYORA', '553', NULL, NULL),
(15, 'PT. BANK MEGA, TBK', '426', NULL, NULL),
(16, 'PT. BANK MUAMALAT INDONESIA, TBK', '147', NULL, NULL),
(17, 'PT. BANK NEGARA INDONESIA (PERSERO), TBK (BNI)', '009', NULL, NULL),
(18, 'PT. BANK OCBC NISP, TBK', '028', NULL, NULL),
(19, 'PT. BANK OCBC NISP, TBK UNIT USAHA SYARIAH', '731', NULL, NULL),
(20, 'PT. BANK PERMATA, TBK', '013', NULL, NULL),
(21, 'PT. BANK PERMATA, TBK UNIT USAHA SYARIAH', '721', NULL, NULL),
(22, 'PT. BANK RAKYAT INDONESIA (PERSERO), TBK (BRI)', '002', NULL, NULL),
(23, 'PT. BANK RAKYAT INDONESIA AGRONIAGA, TBK', '494', NULL, NULL),
(24, 'PT. BANK SYARIAH BRI - (BRI SYARIAH)', '422', NULL, NULL),
(25, 'PT. BANK SYARIAH BUKOPIN', '521', NULL, NULL),
(26, 'PT. BANK SYARIAH MANDIRI', '451', NULL, NULL),
(27, 'PT. BANK TABUNGAN NEGARA (PERSERO), TBK (BTN)', '200', NULL, NULL),
(28, 'PT. BANK TABUNGAN NEGARA (PERSERO), TBK UNIT USAHA SYARIAH', '723', NULL, NULL),
(29, 'PT. BANK TABUNGAN PENSIUNAN NASIONAL - (BTPN)', '213', NULL, NULL),
(30, 'PT. BANK TABUNGAN PENSIUNAN NASIONAL SYARIAH - (BTPN Syariah)', '547', NULL, NULL),
(31, 'PT. BANK WOORI SAUDARA INDONESIA 1906, TBK (BWS)', '212', NULL, NULL),
(32, 'PT. BANK JABAR BANTEN SYARIAH', '425', NULL, NULL),
(33, 'PT. BANK PEMBANGUNAN DAERAH BANTEN', '137', NULL, NULL),
(34, 'PT. BANK CAPITAL INDONESIA', '054', NULL, NULL),
(35, 'PT. BANK DKI UNIT USAHA SYARIAH', '724', NULL, NULL),
(36, 'PT. BANK ICBC INDONESIA', '164', NULL, NULL),
(37, 'PT. BANK JTRUST INDONESIA, TBK', '095', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_nk`
--

CREATE TABLE `dokumen_nk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_nonkasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_nkd`
--

CREATE TABLE `dokumen_nkd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dnk` bigint(20) UNSIGNED DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `d_customers`
--

CREATE TABLE `d_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dc_memointernal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_spph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_ko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_loi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_invoicecustom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dc_sjncustom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `d_dinas`
--

CREATE TABLE `d_dinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dd_tickettransport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dd_notamakan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dd_boardingpass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dd_notapenginapan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dd_sppd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dd_lapdinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `d_impors`
--

CREATE TABLE `d_impors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `di_pib` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `di_bl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `di_com` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `di_coo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `di_invoicecustom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `di_sjncustom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `d_pajaks`
--

CREATE TABLE `d_pajaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dp_kesesuaianfaktur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dp_pajakpenghasilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dp_suratnonpkp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `d_vendors`
--

CREATE TABLE `d_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dv_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_kwitansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_povendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_sjnvendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_packcinglist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_testreport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_bapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_lppb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_ko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dv_spp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN AKUNTANSI', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(2, 'ADMIN EKSPEDISI', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(3, 'ADMIN KEUANGAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(4, 'ADMIN PEMASARAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(5, 'ADMIN PEMBELIAN KOMPONEN PENDUKUNG', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(6, 'ADMIN PEMBELIAN KOMPONEN UTAMA', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(7, 'ADMIN PENGENDALIAN KUALITAS & PURNA JUAL', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(8, 'ADMIN PERENCANAAN & PENGENDALIAN PENGADAAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(9, 'ADMIN PERGUDANGAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(10, 'ADMIN SDM', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(11, 'ADMIN UMUM', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(12, 'ADMIN TATA KELOLA & MANAJEMEN RESIKO', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(13, 'DIREKTUR KEUANGAN, SDM & MANAJEMEN RISIKO', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(14, 'DIREKTUR OPERASIONAL', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(15, 'DIREKTUR UTAMA', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(16, 'KEPALA DEPARTEMEN AKUNTANSI', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(17, 'KEPALA DEPARTEMEN EKSPEDISI & PERGUDANGAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(18, 'KEPALA DEPARTEMEN KEUANGAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(19, 'KEPALA DEPARTEMEN PEMASARAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(20, 'KEPALA DEPARTEMEN PEMBELIAN KOMPONEN PENDUKUNG', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(21, 'KEPALA DEPARTEMEN PEMBELIAN KOMPONEN UTAMA', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(22, 'KEPALA DEPARTEMEN PENGENDALIAN KUALITAS & PURNA JUAL', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(23, 'KEPALA DEPARTEMEN PERENCANAAN & PENGENDALIAN PENGADAAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(24, 'KEPALA DEPARTEMEN SDM & UMUM', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(25, 'KEPALA DEPARTEMEN TATA KELOLA & MANAJEMEN RESIKO', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(26, 'KEPALA DIVISI KEUANGAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(27, 'KEPALA DIVISI PEMASARAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(28, 'KEPALA DIVISI PENGADAAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(29, 'KEPALA DIVISI REALISASI PRODUK', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(30, 'KEPALA DIVISI SDM & UMUM', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(31, 'VERIFIKATOR', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(32, 'STAF', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(33, 'SPESIALIS MUDA', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(34, 'PLT KEPALA DEPARTEMEN', '2022-12-15 00:22:09', '2022-12-15 00:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'OPR 1', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(2, 'OPR 2', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(3, 'OPR 3', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(4, 'OPR 4', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(5, 'PL', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(6, 'EKSPOR IMPOR', '2022-12-15 00:22:09', '2022-12-15 00:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `kasbons`
--

CREATE TABLE `kasbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nokasbon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglmasuk` date DEFAULT NULL,
  `jammasuk` time DEFAULT NULL,
  `jeniskasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_unit` bigint(20) UNSIGNED DEFAULT NULL,
  `doksebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kodekasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jenis` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kurs` bigint(20) UNSIGNED DEFAULT NULL,
  `proyek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uraianpengguna` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iddpp` bigint(20) DEFAULT NULL,
  `idppn` bigint(20) DEFAULT NULL,
  `id_pph` bigint(20) UNSIGNED DEFAULT NULL,
  `idpph` bigint(20) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `k_iddpp` bigint(20) DEFAULT NULL,
  `k_total` bigint(20) DEFAULT NULL,
  `namavendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `haritempo` bigint(20) DEFAULT NULL,
  `tgltempo` date DEFAULT NULL,
  `noinvoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sjn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` bigint(20) DEFAULT NULL,
  `barang_datang` date DEFAULT NULL,
  `nopi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `novkb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formatkasbon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transferke` bigint(20) DEFAULT NULL,
  `id_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namarek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `norek` bigint(20) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kasbons`
--

INSERT INTO `kasbons` (`id`, `nokasbon`, `tglmasuk`, `jammasuk`, `jeniskasbon`, `id_user`, `nip`, `id_unit`, `doksebelumnya`, `id_kodekasbon`, `id_jenis`, `id_kurs`, `proyek`, `uraianpengguna`, `iddpp`, `idppn`, `id_pph`, `idpph`, `total`, `k_iddpp`, `k_total`, `namavendor`, `haritempo`, `tgltempo`, `noinvoice`, `spph`, `po_vendor`, `po_customer`, `sjn`, `harga_jual`, `barang_datang`, `nopi`, `novkb`, `formatkasbon`, `transferke`, `id_bank`, `namarek`, `norek`, `file`, `created_at`, `updated_at`) VALUES
(1, '5', '2022-12-14', NULL, NULL, 1, NULL, 1, NULL, 1, 2, 2, NULL, NULL, NULL, NULL, 3, NULL, 9, NULL, NULL, NULL, NULL, '2022-11-28', '5', NULL, NULL, NULL, NULL, NULL, '2022-12-10', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(2, '2', '2022-11-30', NULL, NULL, 1, NULL, 3, NULL, 1, 3, 2, NULL, NULL, NULL, NULL, 1, NULL, 5, NULL, NULL, NULL, NULL, '2022-11-27', '8', NULL, NULL, NULL, NULL, NULL, '2022-11-27', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(3, '6', '2022-12-14', NULL, NULL, 1, NULL, 2, NULL, 3, 2, 3, NULL, NULL, NULL, NULL, 3, NULL, 6, NULL, NULL, NULL, NULL, '2022-12-10', '0', NULL, NULL, NULL, NULL, NULL, '2022-11-29', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL),
(4, '3', '2022-12-09', NULL, NULL, 1, NULL, 1, NULL, 2, 3, 2, NULL, NULL, NULL, NULL, 2, NULL, 3, NULL, NULL, NULL, NULL, '2022-12-01', '4', NULL, NULL, NULL, NULL, NULL, '2022-12-14', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(5, '8', '2022-12-04', NULL, NULL, 1, NULL, 1, NULL, 1, 1, 2, NULL, NULL, NULL, NULL, 1, NULL, 3, NULL, NULL, NULL, NULL, '2022-11-23', '8', NULL, NULL, NULL, NULL, NULL, '2022-11-30', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(6, '4', '2022-12-01', NULL, NULL, 1, NULL, 1, NULL, 1, 2, 1, NULL, NULL, NULL, NULL, 1, NULL, 5, NULL, NULL, NULL, NULL, '2022-12-07', '3', NULL, NULL, NULL, NULL, NULL, '2022-11-19', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(7, '7', '2022-12-06', NULL, NULL, 1, NULL, 1, NULL, 1, 2, 3, NULL, NULL, NULL, NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, '2022-11-26', '4', NULL, NULL, NULL, NULL, NULL, '2022-12-11', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(8, '9', '2022-11-19', NULL, NULL, 1, NULL, 2, NULL, 2, 3, 3, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, '2022-12-11', '0', NULL, NULL, NULL, NULL, NULL, '2022-11-24', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL),
(9, '0', '2022-11-30', NULL, NULL, 1, NULL, 2, NULL, 2, 2, 2, NULL, NULL, NULL, NULL, 3, NULL, 2, NULL, NULL, NULL, NULL, '2022-12-12', '0', NULL, NULL, NULL, NULL, NULL, '2022-12-09', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL),
(10, '1', '2022-11-24', NULL, NULL, 1, NULL, 1, NULL, 2, 1, 1, NULL, NULL, NULL, NULL, 2, NULL, 5, NULL, NULL, NULL, NULL, '2022-11-20', '6', NULL, NULL, NULL, NULL, NULL, '2022-11-27', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapans`
--

CREATE TABLE `kelengkapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `nokasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dv` bigint(20) UNSIGNED DEFAULT NULL,
  `id_dc` bigint(20) UNSIGNED DEFAULT NULL,
  `id_di` bigint(20) UNSIGNED DEFAULT NULL,
  `id_dp` bigint(20) UNSIGNED DEFAULT NULL,
  `id_dd` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kt` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keterangans`
--

CREATE TABLE `keterangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_details`
--

CREATE TABLE `keterangan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_keterangan` bigint(20) UNSIGNED DEFAULT NULL,
  `kekurangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_kelengkapan` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_kasbon`
--

CREATE TABLE `keterangan_kasbon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_non_kasbons`
--

CREATE TABLE `keterangan_non_kasbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_nonkasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_pertanggungan`
--

CREATE TABLE `keterangan_pertanggungan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pertanggungan` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kode_kasbons`
--

CREATE TABLE `kode_kasbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_kasbons`
--

INSERT INTO `kode_kasbons` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'D1', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(2, 'D2', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(3, 'D3', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(4, 'D4', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(5, 'D5', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(6, 'D6', '2022-12-15 00:22:12', '2022-12-15 00:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `kurs`
--

CREATE TABLE `kurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurs`
--

INSERT INTO `kurs` (`id`, `code`, `name`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'AFN', 'Afghani', '؋', NULL, NULL),
(2, 'ALL', 'Lek', 'Lek', NULL, NULL),
(3, 'ANG', 'Netherlands Antillian Guilder', 'ƒ', NULL, NULL),
(4, 'ARS', 'Argentine Peso', '$', NULL, NULL),
(5, 'AUD', 'Australian Dollar', '$', NULL, NULL),
(6, 'AWG', 'Aruban Guilder', 'ƒ', NULL, NULL),
(7, 'AZN', 'Azerbaijanian Manat', 'ман', NULL, NULL),
(8, 'BAM', 'Convertible Marks', 'KM', NULL, NULL),
(9, 'BDT', 'Bangladeshi Taka', '৳', NULL, NULL),
(10, 'BBD', 'Barbados Dollar', '$', NULL, NULL),
(11, 'BGN', 'Bulgarian Lev', 'лв', NULL, NULL),
(12, 'BMD', 'Bermudian Dollar', '$', NULL, NULL),
(13, 'BND', 'Brunei Dollar', '$', NULL, NULL),
(14, 'BOB', 'BOV Boliviano Mvdol', '$b', NULL, NULL),
(15, 'BRL', 'Brazilian Real', 'R$', NULL, NULL),
(16, 'BSD', 'Bahamian Dollar', '$', NULL, NULL),
(17, 'BWP', 'Pula', 'P', NULL, NULL),
(18, 'BYR', 'Belarussian Ruble', '₽', NULL, NULL),
(19, 'BZD', 'Belize Dollar', 'BZ$', NULL, NULL),
(20, 'CAD', 'Canadian Dollar', '$', NULL, NULL),
(21, 'CHF', 'Swiss Franc', 'CHF', NULL, NULL),
(22, 'CLP', 'CLF Chilean Peso Unidades de fomento', '$', NULL, NULL),
(23, 'CNY', 'Yuan Renminbi', '¥', NULL, NULL),
(24, 'COP', 'COU Colombian Peso Unidad de Valor Real', '$', NULL, NULL),
(25, 'CRC', 'Costa Rican Colon', '₡', NULL, NULL),
(26, 'CUP', 'CUC Cuban Peso Peso Convertible', '₱', NULL, NULL),
(27, 'CZK', 'Czech Koruna', 'Kč', NULL, NULL),
(28, 'DKK', 'Danish Krone', 'kr', NULL, NULL),
(29, 'DOP', 'Dominican Peso', 'RD$', NULL, NULL),
(30, 'EGP', 'Egyptian Pound', '£', NULL, NULL),
(31, 'EUR', 'Euro', '€', NULL, NULL),
(32, 'FJD', 'Fiji Dollar', '$', NULL, NULL),
(33, 'FKP', 'Falkland Islands Pound', '£', NULL, NULL),
(34, 'GBP', 'Pound Sterling', '£', NULL, NULL),
(35, 'GIP', 'Gibraltar Pound', '£', NULL, NULL),
(36, 'GTQ', 'Quetzal', 'Q', NULL, NULL),
(37, 'GYD', 'Guyana Dollar', '$', NULL, NULL),
(38, 'HKD', 'Hong Kong Dollar', '$', NULL, NULL),
(39, 'HNL', 'Lempira', 'L', NULL, NULL),
(40, 'HRK', 'Croatian Kuna', 'kn', NULL, NULL),
(41, 'HUF', 'Forint', 'Ft', NULL, NULL),
(42, 'IDR', 'Rupiah', 'Rp', NULL, NULL),
(43, 'ILS', 'New Israeli Sheqel', '₪', NULL, NULL),
(44, 'IRR', 'Iranian Rial', '﷼', NULL, NULL),
(45, 'ISK', 'Iceland Krona', 'kr', NULL, NULL),
(46, 'JMD', 'Jamaican Dollar', 'J$', NULL, NULL),
(47, 'JPY', 'Yen', '¥', NULL, NULL),
(48, 'KGS', 'Som', 'лв', NULL, NULL),
(49, 'KHR', 'Riel', '៛', NULL, NULL),
(50, 'KPW', 'North Korean Won', '₩', NULL, NULL),
(51, 'KRW', 'Won', '₩', NULL, NULL),
(52, 'KYD', 'Cayman Islands Dollar', '$', NULL, NULL),
(53, 'KZT', 'Tenge', 'лв', NULL, NULL),
(54, 'LAK', 'Kip', '₭', NULL, NULL),
(55, 'LBP', 'Lebanese Pound', '£', NULL, NULL),
(56, 'LKR', 'Sri Lanka Rupee', '₨', NULL, NULL),
(57, 'LRD', 'Liberian Dollar', '$', NULL, NULL),
(58, 'LTL', 'Lithuanian Litas', 'Lt', NULL, NULL),
(59, 'LVL', 'Latvian Lats', 'Ls', NULL, NULL),
(60, 'MKD', 'Denar', 'ден', NULL, NULL),
(61, 'MNT', 'Tugrik', '₮', NULL, NULL),
(62, 'MUR', 'Mauritius Rupee', '₨', NULL, NULL),
(63, 'MXN', 'MXV Mexican Peso Mexican Unidad de Inversion (UDI]', '$', NULL, NULL),
(64, 'MYR', 'Malaysian Ringgit', 'RM', NULL, NULL),
(65, 'MZN', 'Metical', 'MT', NULL, NULL),
(66, 'NGN', 'Naira', '₦', NULL, NULL),
(67, 'NIO', 'Cordoba Oro', 'C$', NULL, NULL),
(68, 'NOK', 'Norwegian Krone', 'kr', NULL, NULL),
(69, 'NPR', 'Nepalese Rupee', '₨', NULL, NULL),
(70, 'NZD', 'New Zealand Dollar', '$', NULL, NULL),
(71, 'OMR', 'Rial Omani', '﷼', NULL, NULL),
(72, 'PAB', 'USD Balboa US Dollar', 'B/.', NULL, NULL),
(73, 'PEN', 'Nuevo Sol', 'S/.', NULL, NULL),
(74, 'PHP', 'Philippine Peso', 'Php', NULL, NULL),
(75, 'PKR', 'Pakistan Rupee', '₨', NULL, NULL),
(76, 'PLN', 'Zloty', 'zł', NULL, NULL),
(77, 'PYG', 'Guarani', 'Gs', NULL, NULL),
(78, 'QAR', 'Qatari Rial', '﷼', NULL, NULL),
(79, 'RON', 'New Leu', 'lei', NULL, NULL),
(80, 'RSD', 'Serbian Dinar', 'Дин.', NULL, NULL),
(81, 'RUB', 'Russian Ruble', 'руб', NULL, NULL),
(82, 'SAR', 'Saudi Riyal', '﷼', NULL, NULL),
(83, 'SBD', 'Solomon Islands Dollar', '$', NULL, NULL),
(84, 'SCR', 'Seychelles Rupee', '₨', NULL, NULL),
(85, 'SEK', 'Swedish Krona', 'kr', NULL, NULL),
(86, 'SGD', 'Singapore Dollar', '$', NULL, NULL),
(87, 'SHP', 'Saint Helena Pound', '£', NULL, NULL),
(88, 'SOS', 'Somali Shilling', 'S', NULL, NULL),
(89, 'SRD', 'Surinam Dollar', '$', NULL, NULL),
(90, 'SVC', 'USD El Salvador Colon US Dollar', '$', NULL, NULL),
(91, 'SYP', 'Syrian Pound', '£', NULL, NULL),
(92, 'THB', 'Baht', '฿', NULL, NULL),
(93, 'TRY', 'Turkish Lira', 'TL', NULL, NULL),
(94, 'TTD', 'Trinidad and Tobago Dollar', 'TT$', NULL, NULL),
(95, 'TWD', 'New Taiwan Dollar', 'NT$', NULL, NULL),
(96, 'UAH', 'Hryvnia', '₴', NULL, NULL),
(97, 'USD', 'US Dollar', '$', NULL, NULL),
(98, 'UYU', 'UYI Uruguay Peso en Unidades Indexadas', '$U', NULL, NULL),
(99, 'UZS', 'Uzbekistan Sum', 'лв', NULL, NULL),
(100, 'VEF', 'Bolivar Fuerte', 'Bs', NULL, NULL),
(101, 'VND', 'Dong', '₫', NULL, NULL),
(102, 'XCD', 'East Caribbean Dollar', '$', NULL, NULL),
(103, 'YER', 'Yemeni Rial', '﷼', NULL, NULL),
(104, 'ZAR', 'Rand', 'R', NULL, NULL);

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
(1, '2012_10_03_020413_create_nama_vendors_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_28_072933_create_banks_table', 1),
(6, '2022_08_18_152057_create_kode_kasbons_table', 1),
(7, '2022_09_06_042324_create_rates_table', 1),
(8, '2022_09_09_012936_create_permission_tables', 1),
(9, '2022_09_09_033556_create_units_table', 1),
(10, '2022_09_12_011058_create_pphs_table', 1),
(11, '2022_09_12_011104_create_jabatans_table', 1),
(12, '2022_09_12_063548_create_jenis_table', 1),
(13, '2022_09_12_063606_create_kurs_table', 1),
(14, '2022_09_13_000000_create_users_table', 1),
(15, '2022_09_14_013621_create_kasbons_table', 1),
(16, '2022_09_15_140123_create_d_vendors_table', 1),
(17, '2022_09_15_140159_create_d_impors_table', 1),
(18, '2022_09_15_140207_create_d_pajaks_table', 1),
(19, '2022_09_15_140217_create_d_dinas_table', 1),
(20, '2022_09_15_140_create_d_customers_table', 1),
(21, '2022_09_15_143821_create_keterangans_table', 1),
(22, '2022_09_18_151607_create_nonkasbons_table', 1),
(23, '2022_09_21_030715_create_keterangan_details_table', 1),
(24, '2022_10_05_031505_create_dokumen_n_k_s_table', 1),
(25, '2022_10_05_031642_create_dokumen_nkds_table', 1),
(26, '2022_10_05_082954_create_s_p_p_d_s_table', 1),
(27, '2022_10_05_083017_create_s_p_p_d_details_table', 1),
(28, '2022_10_13_175702_create_monitoring_s_p_s_table', 1),
(29, '2022_10_13_185820_create_s_p1_s_table', 1),
(30, '2023_19_15_140235_create_kelengkapans_table', 1),
(31, '2023_29_18_133714_create_pertanggungans_table', 1),
(32, '2024_09_18_152844_create_verifikasi_non_kasbons_table', 1),
(33, '2024_10_01_015132_create_verifikasi_kasbons_table', 1),
(34, '2024_10_01_015203_create_verifikasi_pertanggungans_table', 1),
(35, '2025_15_02_030737_create_keterangan_kasbon_table', 1),
(36, '2026_10_02_113729_create_keterangan_pertanggungans_table', 1),
(37, '2026_10_03_132705_create_keterangan_non_kasbons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 28),
(2, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 31),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 19),
(4, 'App\\Models\\User', 32),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 13),
(6, 'App\\Models\\User', 21),
(7, 'App\\Models\\User', 24),
(8, 'App\\Models\\User', 25),
(9, 'App\\Models\\User', 27);

-- --------------------------------------------------------

--
-- Table structure for table `monitoringsp`
--

CREATE TABLE `monitoringsp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `ptj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sp1` date DEFAULT NULL,
  `jt_sp1` date DEFAULT NULL,
  `sp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sp2` date DEFAULT NULL,
  `jt_sp2` date DEFAULT NULL,
  `sp3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sp3` date DEFAULT NULL,
  `jt_sp3` date DEFAULT NULL,
  `mts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_mts` date DEFAULT NULL,
  `pbsdm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pbsdm` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nama_vendor`
--

CREATE TABLE `nama_vendor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nama_vendor`
--

INSERT INTO `nama_vendor` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PT MAJU', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(2, 'PT MUNDUR', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(3, 'PT MAJU MUNDUR', '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(4, 'PT MUNDUR MAJU', '2022-12-15 00:22:12', '2022-12-15 00:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `nonkasbons`
--

CREATE TABLE `nonkasbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_nonkasbon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `tglmasuk` date DEFAULT NULL,
  `jammasuk` time DEFAULT NULL,
  `doksebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_unit` bigint(20) UNSIGNED DEFAULT NULL,
  `kodekasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kurs` bigint(20) UNSIGNED DEFAULT NULL,
  `namavendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noinvoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iddpp` bigint(20) DEFAULT NULL,
  `idppn` bigint(20) DEFAULT NULL,
  `id_pph` bigint(20) UNSIGNED DEFAULT NULL,
  `idpph` bigint(20) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `k_total` bigint(20) DEFAULT NULL,
  `tujuanpembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proyek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(2, 'user', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(3, 'unit', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(4, 'jabatan', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(5, 'kasbon', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(6, 'pertanggungan', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(7, 'sppd', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(8, 'nonkasbon', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(9, 'atasan-user-1', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(10, 'atasan-user-2', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(11, 'atasan-user-3', 'web', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(12, 'verifikator', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(13, 'atasan-verifikator-1', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(14, 'atasan-verifikator-2', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(15, 'atasan-verifikator-3', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10');

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
-- Table structure for table `pertanggungans`
--

CREATE TABLE `pertanggungans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nokasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kodekasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_unit` bigint(20) UNSIGNED DEFAULT NULL,
  `jeniskasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namavendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noinvoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proyek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uraianpengguna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formatkasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominalkasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgltempo` date DEFAULT NULL,
  `haritempo` int(11) DEFAULT NULL,
  `novkbkasbon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglbayarkeuser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilaiptj` int(11) DEFAULT NULL,
  `tglptj` date DEFAULT NULL,
  `selisihptj` int(11) DEFAULT NULL,
  `novkbselisihptj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilaiselisihptj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selisihptjakhir` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pphs`
--

CREATE TABLE `pphs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pphs`
--

INSERT INTO `pphs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PPH21', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(2, 'PPH22', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(3, 'PPH23', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(4, 'PPH FINAL', '2022-12-15 00:22:09', '2022-12-15 00:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `name`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'DRIVER', 100000, NULL, NULL),
(2, 'STAFF', 200000, NULL, NULL),
(3, 'KABAG', 250000, NULL, NULL),
(4, 'KADEP', 300000, NULL, NULL),
(5, 'KADIV', 350000, NULL, NULL),
(6, 'DIREKSI', 400000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(2, 'USER', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(3, 'ATASAN USER 1', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(4, 'ATASAN USER 2', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(5, 'ATASAN USER 3', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(6, 'VERIFIKATOR', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(7, 'ATASAN VERIFIKATOR 1', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(8, 'ATASAN VERIFIKATOR 2', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(9, 'ATASAN VERIFIKATOR 3', 'web', '2022-12-15 00:22:10', '2022-12-15 00:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 6),
(8, 1),
(8, 2),
(9, 1),
(9, 3),
(10, 1),
(10, 4),
(11, 1),
(11, 5),
(12, 1),
(12, 6),
(13, 1),
(13, 7),
(14, 1),
(14, 8),
(15, 1),
(15, 9);

-- --------------------------------------------------------

--
-- Table structure for table `sppd`
--

CREATE TABLE `sppd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_sppd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doksebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglmasuk` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sppd_details`
--

CREATE TABLE `sppd_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sppd` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departemen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nokontrak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kasbondinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglberangkat` date DEFAULT NULL,
  `tglpulang` date DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `id_kurs` bigint(20) UNSIGNED DEFAULT NULL,
  `id_rate` int(11) DEFAULT NULL,
  `uanglumpsum` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_p1_s`
--

CREATE TABLE `s_p1_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DIVISI KEUANGAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(2, 'DIVISI PEMASARAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(3, 'DIVISI PENGADAAN', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(4, 'DIVISI REALISASI PRODUK', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(5, 'DIVISI SDM & UMUM', '2022-12-15 00:22:09', '2022-12-15 00:22:09'),
(6, 'TSG INFRASTRUCTURE PTE LTD', '2022-12-15 00:22:09', '2022-12-15 00:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_jabatan` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nip`, `id_unit`, `id_jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ARYANI DEVIANA', 'ADMSAR', NULL, '$2y$10$Bw1XC6z4K4Nw5hWJp/lX8OJFDTjCu1PspLwrOnE6KWJrwTTR/inxS', '632100015', 2, 4, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(2, 'EMANUEL PASTIADI', 'KADEPSAR', NULL, '$2y$10$PV0Esq7n0LUSKUZHZOcrI.u4Iv0VgBtjyl7wA.gVeDAWsrkCtR3YK', '999500020', 2, 19, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(3, 'ABDULLAH MAJID AL FATAH', NULL, NULL, '$2y$10$ndUoCaYkNpSCpuRzU8L3fOatr0SPAZz6IC7N2sX9szXJ5xWUoN2oG', '632100010', 2, 32, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(4, 'EMANUEL PASTIADI', 'KADIVSAR', NULL, '$2y$10$9knR1G.Wl6t5IenHJb0vTe.HS4Cy7wYhfoXUk6zvOykxDntfIFtGO', '999500020', 2, 27, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(5, 'WAI WAHDAN', 'DIRUT01', NULL, '$2y$10$Jeh1P4kqY9WUBut7Q5v1NOfiIuNQC8ZrltatYlHsilcn9YDJMpJ3.', '999600019', 2, 15, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(6, 'RACHMA WAHYUNING CITRA', 'ADMKOMUT', NULL, '$2y$10$fnW3lc0CAWgfwDnn2U6aQ.6deBjFOjQUPyHVkm.yT5sRPX7UTF1ty', '632100020', 3, 6, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(7, 'GUNAWAN', 'KADEPKOMUT', NULL, '$2y$10$TCDlcnIiKel.gK5gsL9b0u9k3.6iEJy4WSWnz2A95Qq3uGoIZKyVe', '991700063', 3, 21, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(8, 'ADITRIE VIDYASWARI', 'ADMKOMPEN', NULL, '$2y$10$LcVwfEnuxEClxbcU0UXcsenIKHddmmx9eLrp4uT1zdM6aeF9.fQeG', '991900021', 3, 5, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(9, 'DEDDI WAHYUDI', 'KADEPKOMPEN', NULL, '$2y$10$aI1PTZGFiVTPChchP/ilgeW3EaVuxuP/1efS/SYvLDwpPyJblRpf.', '961800003', 3, 20, NULL, '2022-12-15 00:22:10', '2022-12-15 00:22:10'),
(10, 'NUR TYAS ANGGRAENI', 'ADMRENDAL', NULL, '$2y$10$FoBtFA7s3vMcG/pjymCPVeSLV62i2Ex7vuOdlPxSnINoe02XQq4pG', '961600001', 3, 8, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(11, 'DODI', 'KADEPRENDAL', NULL, '$2y$10$PTVPkEEi3unvB9UBRFPY3uNcjc5gFy54tH6O/syLt/agNptEO0irK', '991600021', 3, 23, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(12, 'NURUL FADHILAH', 'KADIVPGD', NULL, '$2y$10$ImAz9ci8P/wwA5eTDyqUW.j8TC0m/v4JSZIvBex8fOKjoMrCoIYzS', '999700003', 3, 27, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(13, 'SANKI ARIS SUSANTO', 'DIROP01', NULL, '$2y$10$FwbwIZ0Ok095PtmT.gI61OcU8b2RAvf4nR8eOxi0MY3riHtCIg5Oy', '999600033', 3, 14, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(14, 'NAIMATU SANIATI RODHIYA', 'ADMINEXPED', NULL, '$2y$10$nDOG8aQT5BQlTYiFI101qeXmQyHGF4Oo1CXLwm0A9y5UAbGSfiKYa', '631800027', 4, 2, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(15, 'YULI LESTARI', 'ADMINWH', NULL, '$2y$10$My4jZPhLTOsy2CQUBu2wGORjFUXltHpYKFeMsjt0pY8joPe0cNHfG', '632100012', 4, 9, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(16, 'PAJAR BASUKI', 'KADEPEXWH', NULL, '$2y$10$4szAcbWOa3RISpR/G7yiguDtYd8srdKCddAMZB2hq9RiHlEucNW4e', '999800001', 4, 17, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(17, 'RIZQY DEVTIANA PUTERI', 'ADMINQC', NULL, '$2y$10$1YD9BvJIyOSzflkGR6Pgdu82iCEP6ue6zAVCe/itk0LwOSUa3H5A2', '632000006', 4, 7, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(18, 'MINARKO', 'KADEPQC', NULL, '$2y$10$5GhhmJ/SdNO69NUqPJi1leqfx6Jmze7LPBXVC3nSU/6bztWojFirm', '999200025', 4, 22, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(19, 'HARIESYA RANDI ARTANTO', 'KADIVREPRO', NULL, '$2y$10$y6ZT1eDwrGTURpciz52F9OPqaIMuBxIKXAzlkj90oxK9tHKiy1sUq', '991100045', 2, 29, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(20, 'UUS MUSYAROFAH', 'ADMKEU', NULL, '$2y$10$PRaOiG/UxmPiROXDGdmYIuV0zTFVHCjM/vJ9vusYN2hktr5DpOrny', '962100003', 1, 3, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(21, 'TENDHY ANDAR AGUSMA', 'VERIF01', NULL, '$2y$10$vuG5g3gRmviNzokfoGKjbu3zABXpPOjqIJDE0bMhRmhqaRYGPaHlO', '631800001', 1, 31, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(22, 'ZAHRIA ULFA', 'KADEPKEU', NULL, '$2y$10$VPbZXt.0PDSIq.dEVh2jceb9sFQdCCuWEptRGK/zsrjfwFXbyMh9y', '961800004', 1, 18, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(23, 'MAMIK APRILIANA', 'ADMAKT', NULL, '$2y$10$79YkfnmwOPmSl65KFhe58.DGtq/dBHgdlEQbnitwrn9C.u6puRZLG', '962100001', 1, 1, NULL, '2022-12-15 00:22:11', '2022-12-15 00:22:11'),
(24, 'NUROCHIM', 'KADEPAKT', NULL, '$2y$10$vUsgqKGNVXWOUqsMRPXvJeyOCdiMEpvdP017ZKSZRuVkMpQqpgVFq', '999800180', 1, 16, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(25, 'NUROCHIM', 'KADIVKEU', NULL, '$2y$10$7fyoeu821TmZg8.kLpIh2uT58labNo4xXpgZ9aZ7QbYrQOuGANzwC', '999800180', 1, 26, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(26, 'BADRIYATUL HIDAYAH', NULL, NULL, NULL, '962100007', 1, 16, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(27, 'MUHAMMAD GUFRON FADLY', 'DIRKEU01', NULL, '$2y$10$OevMT9IpRKtO1greN7wx4.5Y2w05DVk3VCqVAgYHnfG6UvJlOVj/i', '991000013', 1, 13, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(28, 'VRISCO DIKO SYAHPUTRA ANANTA', 'ADMGA', NULL, '$2y$10$dS85M1BR5M6o8e2iNhqli.HWdIM2qPm2nJ/vdS4pI05X3ykuxDm56', '631800015', 5, 11, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(29, 'SRI ENDAH NUGRAHANI', 'KADEPHRGA', NULL, '$2y$10$6cEcKOfuuQOBRviGF8oe0u.IWAxSfzGwPnkxXa1lmsfO2pggsQquW', '999400008', 5, 24, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(30, 'RATNA PERMANASARI', 'ADMTKMR', NULL, '$2y$10$ZCBGEKPosHf19eWcJKIaKu3bGH9yvYfmByVvhPgBhlrifv5c7Muyy', '961600002', 5, 12, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(31, 'GODROEPT OKTABRYA SIAPUL HAMI HUTABARAT', 'KADEPTKMR', NULL, '$2y$10$VZCDLdwJ4pGdFtfGdS6ON..YHX.w8w91fECtNqOKwhARHHeE1Cor6', '999300005', 5, 25, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(32, 'SRI ENDAH NUGRAHANI', 'KADIVHRGA', NULL, '$2y$10$8o1P5hX0L0xc8NQXnIUjpOsMGFKkp52dfnbG1G8WdJevJljVS/jie', '999400008', 5, 30, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(33, 'HARMONI FILANTROPI', NULL, NULL, NULL, '991500002', 3, 8, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(34, 'YUSSI TRISTANTI', NULL, NULL, NULL, '961900003\n                ', 1, 1, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(35, 'ARDI ALVIANTO PRIHANDOYO', NULL, NULL, NULL, '961900002', 2, 19, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(36, 'FITROTUL ULA', NULL, NULL, NULL, '631900014', 1, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(37, 'KHOIRUL HUDA', NULL, NULL, NULL, '632000001', 1, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(38, 'MUHAMMAD TRY REYNALDHIE', NULL, NULL, NULL, '632100011', 1, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(39, 'TENDHY ANDAR AGUSMA', NULL, NULL, NULL, '631800001', 1, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(40, 'ARYANI DEVIANA', NULL, NULL, NULL, '632100015', 2, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(41, 'ALDYLLA DWI NUR WIJAYANTI', NULL, NULL, NULL, '632200001', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(42, 'BINGAR CAHYANING MARHAENAYU', NULL, NULL, NULL, '632100005', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(43, 'CITRA DEVI WAHYU ANGGRAINI', NULL, NULL, NULL, '632100001', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(44, 'MAULIDA NUR KURNIAWATI', NULL, NULL, NULL, '632100017', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(45, 'RAGIL IMAM UTOMO', NULL, NULL, NULL, '631800037', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(46, 'SULUH GUMELAR WINAHYU', NULL, NULL, NULL, '632100016', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(47, 'VRISCO DIKO SYAHPUTRA ANANTA', NULL, NULL, NULL, '631800015', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(48, 'YODA HENRY PRADANA', NULL, NULL, NULL, '632100006', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(49, 'ABDULLOH AFIF', NULL, NULL, NULL, '632000008', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(50, 'AMBARWARIH WIRATMOJO', NULL, NULL, NULL, '632100002', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(51, 'DES WAHYUDIN', NULL, NULL, NULL, '632100009', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(52, 'HASANUDIN', NULL, NULL, NULL, '632100013', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(53, 'I GUSTI BAGUS BAYU SAPUTRO', NULL, NULL, NULL, '631800025', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(54, 'IDA BAGUS MADE SURYA DHARMA', NULL, NULL, NULL, '632100014', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(55, 'MUFID RIZALIANI', NULL, NULL, NULL, '631800033', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(56, 'NAIMATU SANIATI RODHIYA', NULL, NULL, NULL, '631800027', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(57, 'NOVIAWAN ROBY PRATAMA', NULL, NULL, NULL, '632000005', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(58, 'PUNGKI DWI YUDATAMA', NULL, NULL, NULL, '631800032', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(59, 'RAYNALDI PRANATA', NULL, NULL, NULL, '632100003', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(60, 'RIZQY DEVTIANA PUTERI', NULL, NULL, NULL, '632000006', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(61, 'WIJIANTO', NULL, NULL, NULL, '631900001', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(62, 'YULI LESTARI', NULL, NULL, NULL, '632100012', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(63, 'ZENDY AGUS PRASETYA', NULL, NULL, NULL, '632100008', 3, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(64, 'PANJI HASTAWIRATA PUTRATAMA', NULL, NULL, NULL, '632100021', 3, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(65, 'RIZKI ANANDA FIANTANA', NULL, NULL, NULL, '631900014', 3, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(66, 'SEPTIAN WAHYUTAMA', NULL, NULL, NULL, '631900014', 6, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(67, 'CHRISTYAN NOFENDHI', NULL, NULL, NULL, '632200002', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(68, 'SUJARWO', NULL, NULL, NULL, '632200003', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(69, 'FEBRI DWINANDA HERNANTO', NULL, NULL, NULL, '632200004', 2, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(70, 'FITROTUL ULA', NULL, NULL, NULL, '631900014', 1, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(71, 'FITROTUS SHOLIHAH', NULL, NULL, NULL, '662100008', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(72, 'PRISCILLA WAHYU ARMAYANTI', NULL, NULL, NULL, '632200005', 3, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(73, 'GASELLA YAMANDA PUTRI WIBOWO', NULL, NULL, NULL, '632200006', 5, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12'),
(74, 'AGUS SARWOKO', NULL, NULL, NULL, '981400003', 4, 32, NULL, '2022-12-15 00:22:12', '2022-12-15 00:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_kasbons`
--

CREATE TABLE `verifikasi_kasbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vkb_a_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb_a_1` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb_a_1` datetime DEFAULT NULL,
  `vkb_a_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb_a_12` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb_a_12` datetime DEFAULT NULL,
  `vkb_a_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb_a_13` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb_a_13` datetime DEFAULT NULL,
  `vkb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb` datetime DEFAULT NULL,
  `vkb_a_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb_a_2` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb_a_2` datetime DEFAULT NULL,
  `vkb_a_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb_a_3` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb_a_3` datetime DEFAULT NULL,
  `vkb_a_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkb_a_4` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkb_a_4` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifikasi_kasbons`
--

INSERT INTO `verifikasi_kasbons` (`id`, `id_kasbon`, `status`, `vkb_a_1`, `id_vkb_a_1`, `tgl_vkb_a_1`, `vkb_a_12`, `id_vkb_a_12`, `tgl_vkb_a_12`, `vkb_a_13`, `id_vkb_a_13`, `tgl_vkb_a_13`, `vkb`, `id_vkb`, `tgl_vkb`, `vkb_a_2`, `id_vkb_a_2`, `tgl_vkb_a_2`, `vkb_a_3`, `id_vkb_a_3`, `tgl_vkb_a_3`, `vkb_a_4`, `id_vkb_a_4`, `tgl_vkb_a_4`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dalam Proses', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_non_kasbons`
--

CREATE TABLE `verifikasi_non_kasbons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_nonkasbon` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vnk_a_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk_a_1` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk_a_1` datetime DEFAULT NULL,
  `vnk_a_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk_a_12` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk_a_12` datetime DEFAULT NULL,
  `vnk_a_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk_a_13` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk_a_13` datetime DEFAULT NULL,
  `vnk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk` datetime DEFAULT NULL,
  `vnk_a_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk_a_2` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk_a_2` datetime DEFAULT NULL,
  `vnk_a_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk_a_3` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk_a_3` datetime DEFAULT NULL,
  `vnk_a_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vnk_a_4` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vnk_a_4` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_pertanggungans`
--

CREATE TABLE `verifikasi_pertanggungans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pertanggungan` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vkp_a_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp_a_1` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp_a_1` datetime DEFAULT NULL,
  `vkp_a_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp_a_12` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp_a_12` datetime DEFAULT NULL,
  `vkp_a_13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp_a_13` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp_a_13` datetime DEFAULT NULL,
  `vkp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp` datetime DEFAULT NULL,
  `vkp_a_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp_a_2` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp_a_2` datetime DEFAULT NULL,
  `vkp_a_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp_a_3` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp_a_3` datetime DEFAULT NULL,
  `vkp_a_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_vkp_a_4` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_vkp_a_4` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_nk`
--
ALTER TABLE `dokumen_nk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_nk_id_nonkasbon_foreign` (`id_nonkasbon`);

--
-- Indexes for table `dokumen_nkd`
--
ALTER TABLE `dokumen_nkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_nkd_id_dnk_foreign` (`id_dnk`);

--
-- Indexes for table `d_customers`
--
ALTER TABLE `d_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_dinas`
--
ALTER TABLE `d_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_impors`
--
ALTER TABLE `d_impors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_pajaks`
--
ALTER TABLE `d_pajaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_vendors`
--
ALTER TABLE `d_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatan_name_unique` (`name`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasbons`
--
ALTER TABLE `kasbons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kasbons_nokasbon_unique` (`nokasbon`),
  ADD KEY `kasbons_id_user_foreign` (`id_user`),
  ADD KEY `kasbons_id_kodekasbon_foreign` (`id_kodekasbon`),
  ADD KEY `kasbons_id_unit_foreign` (`id_unit`),
  ADD KEY `kasbons_id_jenis_foreign` (`id_jenis`),
  ADD KEY `kasbons_id_kurs_foreign` (`id_kurs`),
  ADD KEY `kasbons_id_pph_foreign` (`id_pph`);

--
-- Indexes for table `kelengkapans`
--
ALTER TABLE `kelengkapans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelengkapans_nokasbon_unique` (`nokasbon`),
  ADD KEY `kelengkapans_id_kasbon_foreign` (`id_kasbon`),
  ADD KEY `kelengkapans_id_dv_foreign` (`id_dv`),
  ADD KEY `kelengkapans_id_dc_foreign` (`id_dc`),
  ADD KEY `kelengkapans_id_di_foreign` (`id_di`),
  ADD KEY `kelengkapans_id_dp_foreign` (`id_dp`),
  ADD KEY `kelengkapans_id_dd_foreign` (`id_dd`),
  ADD KEY `kelengkapans_id_kt_foreign` (`id_kt`);

--
-- Indexes for table `keterangans`
--
ALTER TABLE `keterangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan_details`
--
ALTER TABLE `keterangan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keterangan_details_id_keterangan_foreign` (`id_keterangan`);

--
-- Indexes for table `keterangan_kasbon`
--
ALTER TABLE `keterangan_kasbon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keterangan_kasbon_id_kasbon_foreign` (`id_kasbon`);

--
-- Indexes for table `keterangan_non_kasbons`
--
ALTER TABLE `keterangan_non_kasbons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keterangan_non_kasbons_id_nonkasbon_foreign` (`id_nonkasbon`);

--
-- Indexes for table `keterangan_pertanggungan`
--
ALTER TABLE `keterangan_pertanggungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keterangan_pertanggungan_id_pertanggungan_foreign` (`id_pertanggungan`);

--
-- Indexes for table `kode_kasbons`
--
ALTER TABLE `kode_kasbons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `monitoringsp`
--
ALTER TABLE `monitoringsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monitoringsp_id_kasbon_foreign` (`id_kasbon`);

--
-- Indexes for table `nama_vendor`
--
ALTER TABLE `nama_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonkasbons`
--
ALTER TABLE `nonkasbons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nonkasbons_no_nonkasbon_unique` (`no_nonkasbon`),
  ADD KEY `nonkasbons_id_user_foreign` (`id_user`),
  ADD KEY `nonkasbons_id_unit_foreign` (`id_unit`),
  ADD KEY `nonkasbons_id_pph_foreign` (`id_pph`),
  ADD KEY `nonkasbons_id_kurs_foreign` (`id_kurs`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanggungans`
--
ALTER TABLE `pertanggungans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pertanggungans_nokasbon_unique` (`nokasbon`),
  ADD KEY `pertanggungans_id_kodekasbon_foreign` (`id_kodekasbon`),
  ADD KEY `pertanggungans_id_user_foreign` (`id_user`),
  ADD KEY `pertanggungans_id_unit_foreign` (`id_unit`),
  ADD KEY `pertanggungans_id_kasbon_foreign` (`id_kasbon`);

--
-- Indexes for table `pphs`
--
ALTER TABLE `pphs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rates_harga_unique` (`harga`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sppd`
--
ALTER TABLE `sppd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sppd_no_sppd_unique` (`no_sppd`);

--
-- Indexes for table `sppd_details`
--
ALTER TABLE `sppd_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sppd_details_id_sppd_foreign` (`id_sppd`),
  ADD KEY `sppd_details_id_rate_foreign` (`id_rate`),
  ADD KEY `sppd_details_id_kurs_foreign` (`id_kurs`);

--
-- Indexes for table `s_p1_s`
--
ALTER TABLE `s_p1_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_unit_foreign` (`id_unit`),
  ADD KEY `users_id_jabatan_foreign` (`id_jabatan`);

--
-- Indexes for table `verifikasi_kasbons`
--
ALTER TABLE `verifikasi_kasbons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifikasi_kasbons_id_kasbon_foreign` (`id_kasbon`),
  ADD KEY `verifikasi_kasbons_id_vkb_foreign` (`id_vkb`),
  ADD KEY `verifikasi_kasbons_id_vkb_a_1_foreign` (`id_vkb_a_1`),
  ADD KEY `verifikasi_kasbons_id_vkb_a_12_foreign` (`id_vkb_a_12`),
  ADD KEY `verifikasi_kasbons_id_vkb_a_13_foreign` (`id_vkb_a_13`),
  ADD KEY `verifikasi_kasbons_id_vkb_a_2_foreign` (`id_vkb_a_2`),
  ADD KEY `verifikasi_kasbons_id_vkb_a_3_foreign` (`id_vkb_a_3`),
  ADD KEY `verifikasi_kasbons_id_vkb_a_4_foreign` (`id_vkb_a_4`);

--
-- Indexes for table `verifikasi_non_kasbons`
--
ALTER TABLE `verifikasi_non_kasbons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifikasi_non_kasbons_id_nonkasbon_foreign` (`id_nonkasbon`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_foreign` (`id_vnk`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_a_1_foreign` (`id_vnk_a_1`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_a_12_foreign` (`id_vnk_a_12`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_a_13_foreign` (`id_vnk_a_13`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_a_2_foreign` (`id_vnk_a_2`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_a_3_foreign` (`id_vnk_a_3`),
  ADD KEY `verifikasi_non_kasbons_id_vnk_a_4_foreign` (`id_vnk_a_4`);

--
-- Indexes for table `verifikasi_pertanggungans`
--
ALTER TABLE `verifikasi_pertanggungans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifikasi_pertanggungans_id_pertanggungan_foreign` (`id_pertanggungan`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_foreign` (`id_vkp`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_a_1_foreign` (`id_vkp_a_1`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_a_12_foreign` (`id_vkp_a_12`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_a_13_foreign` (`id_vkp_a_13`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_a_2_foreign` (`id_vkp_a_2`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_a_3_foreign` (`id_vkp_a_3`),
  ADD KEY `verifikasi_pertanggungans_id_vkp_a_4_foreign` (`id_vkp_a_4`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `dokumen_nk`
--
ALTER TABLE `dokumen_nk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_nkd`
--
ALTER TABLE `dokumen_nkd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_customers`
--
ALTER TABLE `d_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_dinas`
--
ALTER TABLE `d_dinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_impors`
--
ALTER TABLE `d_impors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_pajaks`
--
ALTER TABLE `d_pajaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `d_vendors`
--
ALTER TABLE `d_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kasbons`
--
ALTER TABLE `kasbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelengkapans`
--
ALTER TABLE `kelengkapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangans`
--
ALTER TABLE `keterangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_details`
--
ALTER TABLE `keterangan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_kasbon`
--
ALTER TABLE `keterangan_kasbon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_non_kasbons`
--
ALTER TABLE `keterangan_non_kasbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keterangan_pertanggungan`
--
ALTER TABLE `keterangan_pertanggungan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_kasbons`
--
ALTER TABLE `kode_kasbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `monitoringsp`
--
ALTER TABLE `monitoringsp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nama_vendor`
--
ALTER TABLE `nama_vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nonkasbons`
--
ALTER TABLE `nonkasbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanggungans`
--
ALTER TABLE `pertanggungans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pphs`
--
ALTER TABLE `pphs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sppd`
--
ALTER TABLE `sppd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sppd_details`
--
ALTER TABLE `sppd_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_p1_s`
--
ALTER TABLE `s_p1_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `verifikasi_kasbons`
--
ALTER TABLE `verifikasi_kasbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verifikasi_non_kasbons`
--
ALTER TABLE `verifikasi_non_kasbons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verifikasi_pertanggungans`
--
ALTER TABLE `verifikasi_pertanggungans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen_nk`
--
ALTER TABLE `dokumen_nk`
  ADD CONSTRAINT `dokumen_nk_id_nonkasbon_foreign` FOREIGN KEY (`id_nonkasbon`) REFERENCES `nonkasbons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dokumen_nkd`
--
ALTER TABLE `dokumen_nkd`
  ADD CONSTRAINT `dokumen_nkd_id_dnk_foreign` FOREIGN KEY (`id_dnk`) REFERENCES `dokumen_nk` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kasbons`
--
ALTER TABLE `kasbons`
  ADD CONSTRAINT `kasbons_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kasbons_id_kodekasbon_foreign` FOREIGN KEY (`id_kodekasbon`) REFERENCES `kode_kasbons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kasbons_id_kurs_foreign` FOREIGN KEY (`id_kurs`) REFERENCES `kurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kasbons_id_pph_foreign` FOREIGN KEY (`id_pph`) REFERENCES `pphs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kasbons_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kasbons_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kelengkapans`
--
ALTER TABLE `kelengkapans`
  ADD CONSTRAINT `kelengkapans_id_dc_foreign` FOREIGN KEY (`id_dc`) REFERENCES `d_customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_id_dd_foreign` FOREIGN KEY (`id_dd`) REFERENCES `d_dinas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_id_di_foreign` FOREIGN KEY (`id_di`) REFERENCES `d_impors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_id_dp_foreign` FOREIGN KEY (`id_dp`) REFERENCES `d_pajaks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_id_dv_foreign` FOREIGN KEY (`id_dv`) REFERENCES `d_vendors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_id_kasbon_foreign` FOREIGN KEY (`id_kasbon`) REFERENCES `kasbons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_id_kt_foreign` FOREIGN KEY (`id_kt`) REFERENCES `keterangans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelengkapans_nokasbon_foreign` FOREIGN KEY (`nokasbon`) REFERENCES `kasbons` (`nokasbon`) ON DELETE CASCADE;

--
-- Constraints for table `keterangan_details`
--
ALTER TABLE `keterangan_details`
  ADD CONSTRAINT `keterangan_details_id_keterangan_foreign` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keterangan_kasbon`
--
ALTER TABLE `keterangan_kasbon`
  ADD CONSTRAINT `keterangan_kasbon_id_kasbon_foreign` FOREIGN KEY (`id_kasbon`) REFERENCES `kasbons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keterangan_non_kasbons`
--
ALTER TABLE `keterangan_non_kasbons`
  ADD CONSTRAINT `keterangan_non_kasbons_id_nonkasbon_foreign` FOREIGN KEY (`id_nonkasbon`) REFERENCES `nonkasbons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keterangan_pertanggungan`
--
ALTER TABLE `keterangan_pertanggungan`
  ADD CONSTRAINT `keterangan_pertanggungan_id_pertanggungan_foreign` FOREIGN KEY (`id_pertanggungan`) REFERENCES `pertanggungans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `monitoringsp`
--
ALTER TABLE `monitoringsp`
  ADD CONSTRAINT `monitoringsp_id_kasbon_foreign` FOREIGN KEY (`id_kasbon`) REFERENCES `kasbons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nonkasbons`
--
ALTER TABLE `nonkasbons`
  ADD CONSTRAINT `nonkasbons_id_kurs_foreign` FOREIGN KEY (`id_kurs`) REFERENCES `kurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nonkasbons_id_pph_foreign` FOREIGN KEY (`id_pph`) REFERENCES `pphs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nonkasbons_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nonkasbons_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pertanggungans`
--
ALTER TABLE `pertanggungans`
  ADD CONSTRAINT `pertanggungans_id_kasbon_foreign` FOREIGN KEY (`id_kasbon`) REFERENCES `kasbons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pertanggungans_id_kodekasbon_foreign` FOREIGN KEY (`id_kodekasbon`) REFERENCES `kode_kasbons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pertanggungans_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pertanggungans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pertanggungans_nokasbon_foreign` FOREIGN KEY (`nokasbon`) REFERENCES `kasbons` (`nokasbon`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sppd_details`
--
ALTER TABLE `sppd_details`
  ADD CONSTRAINT `sppd_details_id_kurs_foreign` FOREIGN KEY (`id_kurs`) REFERENCES `kurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sppd_details_id_rate_foreign` FOREIGN KEY (`id_rate`) REFERENCES `rates` (`harga`) ON DELETE CASCADE,
  ADD CONSTRAINT `sppd_details_id_sppd_foreign` FOREIGN KEY (`id_sppd`) REFERENCES `sppd` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_jabatan_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_id_unit_foreign` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verifikasi_kasbons`
--
ALTER TABLE `verifikasi_kasbons`
  ADD CONSTRAINT `verifikasi_kasbons_id_kasbon_foreign` FOREIGN KEY (`id_kasbon`) REFERENCES `kasbons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_a_12_foreign` FOREIGN KEY (`id_vkb_a_12`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_a_13_foreign` FOREIGN KEY (`id_vkb_a_13`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_a_1_foreign` FOREIGN KEY (`id_vkb_a_1`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_a_2_foreign` FOREIGN KEY (`id_vkb_a_2`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_a_3_foreign` FOREIGN KEY (`id_vkb_a_3`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_a_4_foreign` FOREIGN KEY (`id_vkb_a_4`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_kasbons_id_vkb_foreign` FOREIGN KEY (`id_vkb`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verifikasi_non_kasbons`
--
ALTER TABLE `verifikasi_non_kasbons`
  ADD CONSTRAINT `verifikasi_non_kasbons_id_nonkasbon_foreign` FOREIGN KEY (`id_nonkasbon`) REFERENCES `nonkasbons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_a_12_foreign` FOREIGN KEY (`id_vnk_a_12`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_a_13_foreign` FOREIGN KEY (`id_vnk_a_13`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_a_1_foreign` FOREIGN KEY (`id_vnk_a_1`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_a_2_foreign` FOREIGN KEY (`id_vnk_a_2`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_a_3_foreign` FOREIGN KEY (`id_vnk_a_3`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_a_4_foreign` FOREIGN KEY (`id_vnk_a_4`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_non_kasbons_id_vnk_foreign` FOREIGN KEY (`id_vnk`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verifikasi_pertanggungans`
--
ALTER TABLE `verifikasi_pertanggungans`
  ADD CONSTRAINT `verifikasi_pertanggungans_id_pertanggungan_foreign` FOREIGN KEY (`id_pertanggungan`) REFERENCES `pertanggungans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_a_12_foreign` FOREIGN KEY (`id_vkp_a_12`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_a_13_foreign` FOREIGN KEY (`id_vkp_a_13`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_a_1_foreign` FOREIGN KEY (`id_vkp_a_1`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_a_2_foreign` FOREIGN KEY (`id_vkp_a_2`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_a_3_foreign` FOREIGN KEY (`id_vkp_a_3`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_a_4_foreign` FOREIGN KEY (`id_vkp_a_4`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `verifikasi_pertanggungans_id_vkp_foreign` FOREIGN KEY (`id_vkp`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
