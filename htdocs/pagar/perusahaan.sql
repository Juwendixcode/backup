-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mei 2016 pada 17.59
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perusahaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `id_jenis_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `barang`, `id_jenis_barang`, `harga`) VALUES
(5, 'DAIHATSU GRAN MAX 1.3 Filter Bensin', 1, 600000),
(8, 'DAIHATSU GRAN MAX 1.3 Kopling Disc', 1, 480000),
(11, 'DAIHATSU SIRION Kampas Rem Depan', 1, 630000),
(12, 'DAIHATSU SIRION Kopling Disc', 1, 500000),
(13, 'DAIHATSU TERIOS Filter Bensin', 1, 600000),
(16, 'DAIHATSU TERIOS Kampas Rem Depan', 1, 335000),
(17, 'DAIHATSU TERIOS Kopling Disc', 1, 395000),
(18, 'DAIHATSU XENIA 1.0 Filter Bensin', 1, 600000),
(23, 'DAIHATSU XENIA 1.3 Filter Bensin', 1, 600000),
(28, 'DAIHATSU XENIA 1.3 Kopling Disc', 1, 320000),
(31, 'HONDA CITY IDSI Kampas Rem Depan', 1, 340000),
(33, 'HONDA CITY IDSI Kopling Set Cover', 1, 380000),
(34, 'HONDA CITY IDSI Kopling Set Disc', 1, 420000),
(36, 'HONDA CITY VTEC Kampas Rem Belakang', 1, 663000),
(37, 'HONDA CITY VTEC Kampas Rem Depan', 1, 340000),
(39, 'HONDA CITY VTEC Kopling Set Cover', 1, 380000),
(40, 'HONDA CITY VTEC Kopling Set Disc', 1, 420000),
(43, 'HONDA CIVIC 1.8 Filter Bensin', 1, 322000),
(46, 'HONDA CIVIC 1.8 Kampas Rem Depan', 1, 326000),
(48, 'HONDA CIVIC 1.8 Kopling Set Cover', 1, 460000),
(49, 'HONDA CIVIC 1.8 Kopling Set Disc', 1, 425000),
(52, 'HONDA CIVIC 2.0 Filter Bensin', 1, 322000),
(55, 'HONDA CIVIC 2.0 Kampas Rem Depan', 1, 326000),
(58, 'HONDA CR-V 2.0 Filter Bensin', 1, 692000),
(61, 'HONDA CR-V 2.0 Kampas Rem Depan', 1, 590000),
(63, 'HONDA CR-V 2.0 Kopling Set Cover', 1, 483000),
(64, 'HONDA CR-V 2.0 Kopling Set Disc', 1, 578000),
(67, 'HONDA CR-V 2.4 Filter Bensin', 1, 692000),
(70, 'HONDA CR-V 2.4 Kampas Rem Depan', 1, 590000),
(73, 'HONDA JAZZ IDSI Kampas Rem Depan', 1, 340000),
(75, 'HONDA JAZZ IDSI Kopling Set Cover', 1, 380000),
(76, 'HONDA JAZZ IDSI Kopling Set Disc', 1, 420000),
(79, 'HONDA JAZZ VTEC Kampas Rem Depan', 1, 340000),
(81, 'HONDA JAZZ VTEC Kopling Set Cover', 1, 380000),
(82, 'HONDA JAZZ VTEC Kopling Set Disc', 1, 420000),
(85, 'HONDA NEW ACCORD 2.4 Filter Bensin', 1, 322000),
(87, 'HONDA NEW ACCORD 2.4 Kampas Rem Belakang', 1, 684000),
(88, 'HONDA NEW ACCORD 2.4 Kampas Rem Depan', 1, 610000),
(90, 'HONDA NEW ACCORD 2.4 Kopling Set Cover', 1, 590000),
(91, 'HONDA NEW ACCORD 2.4 Kopling Set Disc', 1, 688000),
(95, 'HONDA STREAM 1.7 Kampas Rem Depan', 1, 362000),
(97, 'HONDA STREAM 1.7 Kopling Set Cover', 1, 460000),
(98, 'HONDA STREAM 1.7 Kopling Set Disc', 1, 447000),
(103, 'HONDA STREAM 2.0 Kampas Rem Depan', 1, 326000),
(108, 'ISUZU PANTHER (2.5) Kopling Set Cover', 1, 365000),
(113, 'NISSAN GRAND LIVINA A/T Transmisi Cover', 1, 619000),
(114, 'NISSAN GRAND LIVINA A/T Transmisi Disc', 1, 452000),
(117, 'NISSAN GRAND LIVINA M/T Transmisi Cover', 1, 498500),
(118, 'NISSAN GRAND LIVINA M/T Transmisi Disc', 1, 364000),
(122, 'NISSAN SERENA Rem Belakang', 1, 741000),
(123, 'NISSAN SERENA Rem Depan', 1, 697000),
(127, 'NISSAN TERANO Transmisi Cover', 1, 540500),
(128, 'NISSAN TERANO Transmisi Disc', 1, 786000),
(132, 'NISSAN X-TRAIL Rem Belakang', 1, 342000),
(133, 'NISSAN X-TRAIL Rem Depan', 1, 590000),
(137, 'SUZUKI APV Kopling Set Cover', 1, 386000),
(138, 'SUZUKI APV Kopling Set Disc', 1, 340000),
(139, 'SUZUKI APV Pompa Bensin', 1, 918000),
(141, 'SUZUKI GRAND VITARA Belt Timing', 1, 328000),
(143, 'SUZUKI GRAND VITARA Kampas Rem Belakang', 1, 513000),
(144, 'SUZUKI GRAND VITARA Kampas Rem Depan', 1, 694000),
(145, 'SUZUKI GRAND VITARA Kopling Set Cover', 1, 335000),
(146, 'SUZUKI GRAND VITARA Kopling Set Disc', 1, 468000),
(147, 'SUZUKI GRAND VITARA Pompa Bensin', 1, 2959000),
(149, 'SUZUKI SWIFT Belt Timing', 1, 377000),
(151, 'SUZUKI SWIFT Kampas Rem Belakang', 1, 401000),
(152, 'SUZUKI SWIFT Kampas Rem Depan', 1, 672000),
(153, 'SUZUKI SWIFT Kopling Set Cover', 1, 565000),
(154, 'SUZUKI SWIFT Kopling Set Disc', 1, 565000),
(155, 'SUZUKI SWIFT Pompa Bensin', 1, 2712000),
(158, 'TOYOTA AVANZA 1.4 Filter Bensin', 1, 595500),
(167, 'TOYOTA INNOVA BENSIN A/T Filter Bensin', 1, 369000),
(169, 'TOYOTA INNOVA BENSIN M/T Filter Bensin', 1, 369000),
(171, 'TOYOTA RUSH Filter Bensin', 1, 595500),
(175, 'Accord 2.4 VTi-L CVT', 2, 635000000),
(176, 'Brio E RS 1.2 MT', 2, 159700000),
(177, 'Brio Satya E CVT', 2, 149600000),
(178, 'Brio Satya  E MT', 2, 134600000),
(179, 'Brio Satya  S MT', 2, 129600000),
(180, 'CR-V 2.0 I-VTEC MT', 2, 402000000),
(181, 'CR-V 2.0 I-VTEC AT', 2, 412000000),
(182, 'CR-V 2.4 I-VTEC AT Prestige', 2, 494500000),
(183, 'CR-V 2.4 I-VTEC AT', 2, 446000000),
(184, 'CR-Z Otomatis', 2, 535000000),
(185, 'New HR-V E 1.5 CVT', 2, 299900000),
(186, 'New HR-V E CVT', 2, 353700000),
(187, 'New HR-V Prestige 1.8 AT', 2, 372300000),
(188, 'New HR-V S 1.5 CVT', 2, 277900000),
(189, 'New HR-V S 1.5 MT', 2, 267900000),
(190, 'New Jazz RS 1.5 MT', 2, 252500000),
(191, 'New Jazz RS 1.5 CVT', 2, 262500000),
(192, 'New Jazz S 1.5 MT', 2, 227500000),
(193, 'New Jazz S 1.5 CVT', 2, 237500000),
(194, 'Odyssey E CVT 2.4L Prestige', 2, 713300000),
(195, ' Brio E RS 1.2 CVT', 2, 174700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `id_barang`, `id_pegawai`, `tanggal`, `keterangan`) VALUES
(1, 'KUNI YUSTIKA DEWI', 122, 15, '2016-04-07 00:00:00', 'belum lunas'),
(2, 'MUHAMMAD KEVIN A R', 155, 40, '2016-04-12 00:00:00', 'belum lunas'),
(3, 'EDO FADILA SIRAT', 70, 39, '2016-04-14 00:00:00', 'belum lunas'),
(4, 'MOCHAMMAD ISKANDAR A.R.', 76, 38, '2016-04-14 00:00:00', 'belum lunas'),
(5, 'DWI WAHYU PUJI LESTARI', 33, 19, '2016-04-14 00:00:00', 'belum lunas'),
(6, 'CECIL N HASIAU', 5, 32, '2016-04-15 00:00:00', 'belum lunas'),
(7, 'SENDI RACHMAT FADILLAH', 189, 8, '2016-04-15 00:00:00', 'belum lunas'),
(8, 'AHMAD SHOFIUDIN FIRDANI WAFA', 194, 19, '2016-04-16 00:00:00', 'belum lunas'),
(9, 'ADHIRAJASA RAITSANY', 145, 5, '2016-04-20 00:00:00', 'belum lunas'),
(10, 'RISKI PRADANA', 113, 15, '2016-04-22 00:00:00', 'belum lunas'),
(11, 'FAUZAN PAHLAWAN', 82, 39, '2016-04-23 00:00:00', 'belum lunas'),
(12, 'EKA MIYAHIL UYUN', 55, 34, '2016-04-23 00:00:00', 'belum lunas'),
(13, 'EGI MULIANDRI', 193, 30, '2016-04-23 00:00:00', 'belum lunas'),
(14, 'JERIKO HOSEA JULANTO', 31, 11, '2016-04-24 00:00:00', 'belum lunas'),
(15, 'MUHAMMAD YUDHA YUSI PUTRA', 76, 9, '2016-04-24 00:00:00', 'belum lunas'),
(16, 'PUTRA FIRMAN ARDIANSYAH', 176, 43, '2016-04-27 00:00:00', 'belum lunas'),
(17, 'SUHADAK AKBAR', 118, 38, '2016-04-29 00:00:00', 'belum lunas'),
(18, 'PUTRI INDAH KHOLIDYA', 12, 17, '2016-05-05 00:00:00', 'belum lunas'),
(19, 'EKO ADITYA RAMADIANTO', 108, 41, '2016-05-05 00:00:00', 'belum lunas'),
(20, 'MUHAMMAD DIKRI ROBINSYAH', 169, 18, '2016-05-07 00:00:00', 'belum lunas'),
(21, 'DITYA ENANDINI PALUPI', 85, 36, '2016-05-07 00:00:00', 'belum lunas'),
(22, 'HAFIZH RAHMAN MANANGKALANGI', 95, 38, '2016-05-08 00:00:00', 'belum lunas'),
(23, 'KEVIN DWIKI SAPUTRA', 17, 21, '2016-05-09 00:00:00', 'belum lunas'),
(24, 'ANGKI CHRISTIAWAN RONGRE', 171, 26, '2016-05-10 00:00:00', 'belum lunas'),
(25, 'ANTARIF EKADHIA CAHY', 33, 20, '2016-05-11 00:00:00', 'belum lunas'),
(26, 'ALDY SATRIA', 181, 11, '2016-05-11 00:00:00', 'belum lunas'),
(27, 'MOCH. WAHYU IMAM SANTOSA', 182, 3, '2016-05-16 00:00:00', 'belum lunas'),
(28, 'RIFQI MUHAMMAD SAYID', 146, 17, '2016-05-21 00:00:00', 'belum lunas'),
(29, 'A M AVICENNA E', 139, 17, '2016-05-22 00:00:00', 'sudah lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tanggal_verifikasi` datetime NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `id_pegawai`, `bulan`, `total_gaji`, `tanggal_verifikasi`, `keterangan`) VALUES
(1, 1, '04', 1052150, '2016-05-21 16:30:09', 'sudah terima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `gaji_pokok`) VALUES
(1, 'Sales', 1000000),
(2, 'Pegawai Kantor', 2700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `jenis_barang`) VALUES
(1, 'Onderdil'),
(2, 'Mobil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `id_jabatan`) VALUES
(1, 'ADHITRA F R', 1),
(2, 'AFIFAHLYA ALIF RIZYO', 1),
(3, 'AHMAD MAULA RIFQI', 1),
(4, 'ALDRIYAN DICKY P', 2),
(5, 'ANDI M RAGA PUNGGAWA', 1),
(6, 'ANDRY LESMANA JAPRIA', 1),
(7, 'ANNISA MURSYIDAH', 1),
(8, 'ANNISA NURFITRI', 1),
(9, 'AULIA FITRI RAHMAWAT', 2),
(10, 'AULIA SEPTI PERTIWI', 1),
(11, 'AXEL REINNO', 1),
(12, 'CANTYA DANNISWARA', 1),
(13, 'DANNIAR REZA FIRDAUS', 1),
(14, 'DHIMAS PRISTIAN ALAM', 2),
(15, 'DIMAS BHAYU PRIMARIZ', 2),
(16, 'DIMAS HARIYANTO SUDA', 2),
(17, 'DINDA AGNES', 1),
(18, 'EDWIN NURWANSYAH', 1),
(19, 'FAISYAL FADILLA ALI', 1),
(20, 'FASYA GHASSANI HANDIY', 1),
(21, 'FEBIKO RAMADINA', 1),
(22, 'FIRNANDA IFTITAH D A', 1),
(23, 'HIGAM SAIFUL SADZALI', 1),
(24, 'I GEDE WIWEKANANDA', 2),
(25, 'IKA KURNIAWAN', 2),
(26, 'IQBAL CARAKA ALTINO', 1),
(27, 'IQBAL TAUFIQ AHMAD N', 1),
(28, 'MUH. INDRA GUNAWAN', 1),
(29, 'MUHAMAD YOGI SAKA F', 2),
(30, 'NADYA MARDIANA RAHMA', 2),
(31, 'NATASYA EKAPUTRI', 1),
(32, 'RAJIV BAQI LAHUTY MA', 2),
(33, 'ROSALIA INDAH', 1),
(34, 'RUSDY HASAN PUSPITOP', 1),
(35, 'SIMSON HASIAN PANGAR', 1),
(36, 'SINTA KURNIASARI', 1),
(37, 'STEFAN ADAM FADILLA', 2),
(38, 'TEDJA ADHI PUTRA', 2),
(39, 'TRI SUSANTO', 2),
(40, 'VICKY NUR ARDIANTO', 1),
(41, 'WAHYU MEGA KRISTANTO', 1),
(42, 'WENDI KURNIA PUTRA', 1),
(43, 'WINDI PRASETYO', 2),
(44, 'YUDISTIRA MAULANA', 2),
(45, 'ZAENAL KURNIAWAN', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_pegawai`, `id_barang`, `tanggal_penjualan`) VALUES
(1, 40, 16, '2016-04-01'),
(2, 38, 154, '2016-04-01'),
(3, 27, 175, '2016-04-01'),
(4, 2, 184, '2016-04-01'),
(5, 6, 40, '2016-04-01'),
(6, 1, 33, '2016-04-02'),
(7, 6, 52, '2016-04-02'),
(8, 32, 193, '2016-04-02'),
(9, 31, 49, '2016-04-02'),
(10, 29, 149, '2016-04-02'),
(11, 29, 49, '2016-04-02'),
(12, 17, 70, '2016-04-03'),
(13, 40, 193, '2016-04-03'),
(14, 4, 153, '2016-04-03'),
(15, 14, 149, '2016-04-03'),
(16, 26, 151, '2016-04-03'),
(17, 21, 185, '2016-04-03'),
(18, 11, 193, '2016-04-03'),
(19, 17, 138, '2016-04-03'),
(20, 15, 63, '2016-04-03'),
(21, 16, 167, '2016-04-03'),
(22, 4, 88, '2016-04-03'),
(23, 36, 192, '2016-04-04'),
(24, 45, 67, '2016-04-04'),
(25, 42, 184, '2016-04-04'),
(26, 15, 64, '2016-04-04'),
(27, 38, 39, '2016-04-04'),
(28, 16, 36, '2016-04-04'),
(29, 45, 147, '2016-04-04'),
(30, 2, 88, '2016-04-05'),
(31, 41, 145, '2016-04-05'),
(32, 44, 118, '2016-04-05'),
(33, 41, 12, '2016-04-05'),
(34, 12, 58, '2016-04-05'),
(35, 21, 153, '2016-04-05'),
(36, 5, 81, '2016-04-05'),
(37, 30, 43, '2016-04-06'),
(38, 27, 75, '2016-04-06'),
(39, 40, 82, '2016-04-07'),
(40, 15, 91, '2016-04-07'),
(41, 34, 151, '2016-04-07'),
(42, 29, 155, '2016-04-07'),
(43, 3, 113, '2016-04-07'),
(44, 41, 91, '2016-04-07'),
(45, 16, 103, '2016-04-07'),
(46, 41, 98, '2016-04-07'),
(47, 31, 123, '2016-04-07'),
(48, 6, 75, '2016-04-07'),
(49, 30, 191, '2016-04-08'),
(50, 22, 190, '2016-04-08'),
(51, 25, 188, '2016-04-08'),
(52, 20, 190, '2016-04-08'),
(53, 21, 52, '2016-04-08'),
(54, 14, 158, '2016-04-09'),
(55, 22, 81, '2016-04-09'),
(56, 41, 13, '2016-04-09'),
(57, 39, 75, '2016-04-10'),
(58, 5, 23, '2016-04-10'),
(59, 20, 48, '2016-04-10'),
(60, 40, 63, '2016-04-11'),
(61, 31, 117, '2016-04-11'),
(62, 11, 11, '2016-04-11'),
(63, 29, 179, '2016-04-11'),
(64, 29, 67, '2016-04-11'),
(65, 27, 149, '2016-04-11'),
(66, 11, 147, '2016-04-11'),
(67, 27, 127, '2016-04-11'),
(68, 7, 75, '2016-04-12'),
(69, 42, 132, '2016-04-12'),
(70, 38, 155, '2016-04-12'),
(71, 3, 146, '2016-04-13'),
(72, 42, 97, '2016-04-13'),
(73, 3, 182, '2016-04-13'),
(74, 28, 28, '2016-04-13'),
(75, 35, 90, '2016-04-14'),
(76, 22, 194, '2016-04-15'),
(77, 19, 154, '2016-04-15'),
(78, 19, 31, '2016-04-15'),
(79, 1, 36, '2016-04-15'),
(80, 14, 143, '2016-04-15'),
(81, 44, 90, '2016-04-15'),
(82, 16, 144, '2016-04-15'),
(83, 41, 122, '2016-04-16'),
(84, 17, 58, '2016-04-16'),
(85, 4, 176, '2016-04-16'),
(86, 29, 191, '2016-04-16'),
(87, 28, 132, '2016-04-16'),
(88, 30, 108, '2016-04-16'),
(89, 29, 143, '2016-04-17'),
(90, 29, 18, '2016-04-17'),
(91, 28, 33, '2016-04-17'),
(92, 42, 117, '2016-04-17'),
(93, 36, 16, '2016-04-17'),
(94, 34, 189, '2016-04-17'),
(95, 4, 132, '2016-04-17'),
(96, 38, 183, '2016-04-18'),
(97, 17, 46, '2016-04-18'),
(98, 22, 114, '2016-04-18'),
(99, 35, 87, '2016-04-18'),
(100, 38, 46, '2016-04-18'),
(101, 6, 154, '2016-04-18'),
(102, 2, 61, '2016-04-19'),
(103, 32, 123, '2016-04-19'),
(104, 23, 127, '2016-04-19'),
(105, 45, 43, '2016-04-19'),
(106, 42, 181, '2016-04-20'),
(107, 11, 55, '2016-04-20'),
(108, 41, 97, '2016-04-20'),
(109, 10, 189, '2016-04-21'),
(110, 8, 91, '2016-04-21'),
(111, 33, 91, '2016-04-21'),
(112, 17, 31, '2016-04-22'),
(113, 9, 88, '2016-04-22'),
(114, 26, 187, '2016-04-22'),
(115, 9, 192, '2016-04-22'),
(116, 37, 118, '2016-04-22'),
(117, 5, 88, '2016-04-22'),
(118, 8, 141, '2016-04-23'),
(119, 6, 76, '2016-04-23'),
(120, 5, 34, '2016-04-23'),
(121, 31, 155, '2016-04-23'),
(122, 9, 85, '2016-04-23'),
(123, 38, 158, '2016-04-23'),
(124, 26, 188, '2016-04-23'),
(125, 20, 184, '2016-04-24'),
(126, 26, 187, '2016-04-24'),
(127, 25, 152, '2016-04-24'),
(128, 20, 183, '2016-04-24'),
(129, 21, 123, '2016-04-24'),
(130, 3, 61, '2016-04-24'),
(131, 37, 12, '2016-04-24'),
(132, 20, 46, '2016-04-24'),
(133, 19, 31, '2016-04-24'),
(134, 24, 98, '2016-04-24'),
(135, 14, 81, '2016-04-25'),
(136, 44, 49, '2016-04-25'),
(137, 16, 128, '2016-04-25'),
(138, 7, 122, '2016-04-25'),
(139, 42, 187, '2016-04-25'),
(140, 28, 169, '2016-04-26'),
(141, 36, 48, '2016-04-26'),
(142, 5, 181, '2016-04-26'),
(143, 37, 167, '2016-04-26'),
(144, 10, 90, '2016-04-26'),
(145, 23, 169, '2016-04-26'),
(146, 18, 133, '2016-04-27'),
(147, 37, 178, '2016-04-27'),
(148, 16, 70, '2016-04-27'),
(149, 38, 139, '2016-04-27'),
(150, 38, 177, '2016-04-28'),
(151, 11, 114, '2016-04-28'),
(152, 30, 16, '2016-04-28'),
(153, 42, 70, '2016-04-28'),
(154, 43, 11, '2016-04-28'),
(155, 16, 118, '2016-04-29'),
(156, 24, 108, '2016-04-29'),
(157, 11, 176, '2016-04-29'),
(158, 17, 85, '2016-04-29'),
(159, 37, 175, '2016-04-29'),
(160, 36, 184, '2016-04-29'),
(161, 9, 5, '2016-04-30'),
(162, 29, 73, '2016-04-30'),
(163, 30, 58, '2016-04-30'),
(164, 24, 189, '2016-04-30'),
(165, 23, 85, '2016-04-30'),
(166, 31, 171, '2016-05-01'),
(167, 43, 128, '2016-05-01'),
(168, 3, 95, '2016-05-02'),
(169, 31, 155, '2016-05-02'),
(170, 20, 76, '2016-05-02'),
(171, 31, 158, '2016-05-02'),
(172, 14, 34, '2016-05-02'),
(173, 29, 152, '2016-05-02'),
(174, 8, 169, '2016-05-02'),
(175, 15, 183, '2016-05-02'),
(176, 43, 11, '2016-05-03'),
(177, 44, 180, '2016-05-03'),
(178, 9, 33, '2016-05-03'),
(179, 30, 193, '2016-05-03'),
(180, 6, 18, '2016-05-04'),
(181, 14, 28, '2016-05-04'),
(182, 7, 175, '2016-05-04'),
(183, 31, 171, '2016-05-04'),
(184, 36, 114, '2016-05-04'),
(185, 4, 17, '2016-05-05'),
(186, 5, 11, '2016-05-05'),
(187, 12, 191, '2016-05-05'),
(188, 31, 87, '2016-05-05'),
(189, 37, 137, '2016-05-06'),
(190, 41, 178, '2016-05-06'),
(191, 29, 85, '2016-05-06'),
(192, 11, 79, '2016-05-06'),
(193, 36, 37, '2016-05-06'),
(194, 23, 177, '2016-05-06'),
(195, 33, 64, '2016-05-06'),
(196, 32, 122, '2016-05-06'),
(197, 23, 36, '2016-05-06'),
(198, 12, 139, '2016-05-07'),
(199, 4, 52, '2016-05-07'),
(200, 14, 37, '2016-05-07'),
(201, 1, 23, '2016-05-07'),
(202, 30, 127, '2016-05-07'),
(203, 31, 133, '2016-05-07'),
(204, 34, 141, '2016-05-07'),
(205, 37, 195, '2016-05-08'),
(206, 4, 127, '2016-05-08'),
(207, 40, 147, '2016-05-08'),
(208, 43, 40, '2016-05-08'),
(209, 1, 52, '2016-05-08'),
(210, 43, 132, '2016-05-08'),
(211, 32, 12, '2016-05-09'),
(212, 14, 182, '2016-05-09'),
(213, 16, 67, '2016-05-09'),
(214, 4, 40, '2016-05-09'),
(215, 24, 39, '2016-05-09'),
(216, 31, 137, '2016-05-09'),
(217, 25, 8, '2016-05-09'),
(218, 30, 98, '2016-05-09'),
(219, 35, 81, '2016-05-09'),
(220, 28, 46, '2016-05-09'),
(221, 24, 144, '2016-05-10'),
(222, 15, 48, '2016-05-10'),
(223, 29, 117, '2016-05-10'),
(224, 13, 79, '2016-05-10'),
(225, 38, 193, '2016-05-10'),
(226, 39, 190, '2016-05-11'),
(227, 19, 188, '2016-05-11'),
(228, 11, 141, '2016-05-11'),
(229, 23, 63, '2016-05-11'),
(230, 10, 139, '2016-05-12'),
(231, 14, 34, '2016-05-12'),
(232, 22, 176, '2016-05-12'),
(233, 22, 186, '2016-05-13'),
(234, 34, 103, '2016-05-13'),
(235, 35, 39, '2016-05-13'),
(236, 13, 195, '2016-05-13'),
(237, 12, 117, '2016-05-14'),
(238, 14, 17, '2016-05-15'),
(239, 13, 108, '2016-05-15'),
(240, 1, 186, '2016-05-15'),
(241, 44, 189, '2016-05-15'),
(242, 32, 145, '2016-05-16'),
(243, 32, 167, '2016-05-16'),
(244, 10, 87, '2016-05-16'),
(245, 36, 132, '2016-05-16'),
(246, 39, 82, '2016-05-16'),
(247, 31, 64, '2016-05-16'),
(248, 35, 147, '2016-05-17'),
(249, 32, 180, '2016-05-17'),
(250, 44, 5, '2016-05-17'),
(251, 4, 43, '2016-05-17'),
(252, 45, 8, '2016-05-18'),
(253, 15, 194, '2016-05-18'),
(254, 4, 5, '2016-05-18'),
(255, 19, 73, '2016-05-18'),
(256, 36, 190, '2016-05-18'),
(257, 31, 195, '2016-05-18'),
(258, 15, 138, '2016-05-19'),
(259, 23, 176, '2016-05-19'),
(260, 3, 141, '2016-05-19'),
(261, 30, 169, '2016-05-19'),
(262, 18, 98, '2016-05-20'),
(263, 45, 79, '2016-05-20'),
(264, 3, 76, '2016-05-20'),
(265, 3, 37, '2016-05-20'),
(266, 19, 55, '2016-05-20'),
(267, 15, 8, '2016-05-20'),
(268, 32, 16, '2016-05-20'),
(269, 24, 75, '2016-05-20'),
(270, 33, 63, '2016-05-20'),
(271, 2, 181, '2016-05-20'),
(272, 19, 179, '2016-05-21'),
(273, 43, 146, '2016-05-21'),
(274, 36, 28, '2016-05-21'),
(275, 45, 87, '2016-05-21'),
(276, 1, 178, '2016-05-21'),
(277, 34, 149, '2016-05-22'),
(278, 15, 185, '2016-05-22'),
(279, 37, 49, '2016-05-22'),
(280, 30, 188, '2016-05-22'),
(281, 22, 128, '2016-05-22'),
(282, 28, 167, '2016-05-22'),
(283, 44, 113, '2016-05-23'),
(284, 11, 64, '2016-05-23'),
(285, 3, 23, '2016-05-23'),
(286, 4, 95, '2016-05-23'),
(287, 29, 133, '2016-05-23'),
(288, 17, 167, '2016-05-23'),
(289, 13, 13, '2016-05-23'),
(290, 41, 153, '2016-05-23'),
(291, 24, 61, '2016-05-23'),
(292, 39, 79, '2016-05-23'),
(293, 40, 13, '2016-05-24'),
(294, 10, 97, '2016-05-24'),
(295, 33, 55, '2016-05-24'),
(296, 16, 33, '2016-05-24'),
(297, 25, 36, '2016-05-25'),
(298, 2, 103, '2016-05-25'),
(299, 24, 153, '2016-05-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
