-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 10:29 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geomedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id_place` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Kontak` varchar(20) DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Operasional` varchar(100) DEFAULT NULL,
  `Pelayanan` varchar(100) DEFAULT NULL,
  `Harga` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `Deskripsi` varchar(100) DEFAULT NULL,
  `lat` double NOT NULL,
  `lang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id_place`, `Nama`, `Kontak`, `Foto`, `Operasional`, `Pelayanan`, `Harga`, `Alamat`, `Website`, `Deskripsi`, `lat`, `lang`) VALUES
(1, 'DNI Skin Centre', '081999202777', NULL, 'Setiap hari pukul 11.00 - 19.00 WIB', 'treatment', 'IDR 100k-190k', 'Ruko Soekarno Hatta Blok A-3 Kav 4, Jalan Soekarno Hatta, Lowokwaru, Jatimulyo, Kota Malang, Jawa Ti', 'www.skincentrebali.com', 'Sebuah klinik kecantikan yang berada di sebelah dekatnya Pizza Hut Suhat', -7.944028, 112.619722),
(2, 'Gloskin Aestethic Clinic', '0341-485800', NULL, 'Setiap hari pukul 11.00 - 19.00 WIB', 'treatment', 'IDR 225k', 'Ruko Soekarno Hatta Kav 43A, Jalan Soekarno Hatta, Kecamatan Lowokwaru, Jatimulyo, Kota Malang, Jawa', 'www.beautifulgloskin.com', 'Sebuah klinik kecantikan yang berada di depan seberangnya DNI Skincare', -7.944222, 112.62),
(3, 'Apotek Jingga Farma', '0341-9081110', NULL, 'Senin sd Sabtu 08.00 - 20.30 WIB', 'penjualan obat', '-', 'Ruko Puncak Borobudur, Jalan Terusan Soekarno Hatta Kav. 1, Mojolangu, Lowokwaru, Kota Malang, Jawa ', '-', 'Sebuah apotik yang berada di ujung utara jalan suhat sebelah baratnya patung pesawat', -7.936611, 112.626111),
(4, 'Praktek umum Dr. Herryanto', '0341-9081111', NULL, 'Senin sd Jumat 08.00 - 09.00 & 16.00 - 17.30 WIB', 'poli umum', '-', 'Ruko Puncak Borobudur, Jalan Terusan Soekarno Hatta Kav. 1, Mojolangu, Lowokwaru, Kota Malang, Jawa ', '-', 'Sebuah praktek dokter umum yang letaknya sama dengan apotek jingga farma', -7.936389, 112.625833),
(5, 'Natasha Skin Clinic Center (Skin Care)', '0341-488290', NULL, 'Senin sd Sabtu 09.00 - 18.00 WIB', 'treatment', 'IDR 85k-190k', 'Jalan Soekarno Hatta PTP II No.1 Kav. 5-6, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65142', 'www.natasha-skin.com', 'Sebuah klinik kecantikan yang berada di kawasan suhat dekat dengan bundaran patung pesawat', -7.937333, 112.625889),
(6, 'Apotek Natasha', '0341-488291', NULL, 'Senin sd Sabtu 09.00 - 18.00 WIB', 'penjualan obat (khususnya untuk kecantikan)', '-', 'Jalan Soekarno Hatta PTP II No.1 Kav. 5-6, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65143', 'www.natasha-skin.com', 'Sebuah apotek yang letaknya sama dengan natasha skin clinen center suhat', -7.9375, 112.625833),
(7, 'Apotek Suhat 24', '08123666748', NULL, 'Setiap hari 24 jam, diatas pukul 11 malam dilayani lewat loket', 'penjualan obat', '-', 'Jalan Soekarno Hatta No.66G, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65142', '-', 'Sebuah apotek yang berada di kawasan suhat dekat dengan ATM BNI Drive Thru', -7.938083, 112.625583),
(8, 'RS Permata Bunda', '0341-487487', NULL, 'Setiap hari 24 jam, jam kunjung pukul 10-12 pagi dan 4-7 sore ', 'poli umum, poli lainnya, bpjs, dsb', '-', 'Jalan Soekarno Hatta No.75 Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65142', '-', 'Salah satu Rumah Sakit yang berada di kawasan suhat yang dekat dengan bakso damas sebelum apotek suh', -7.939028, 112.624861),
(9, 'Apotek RS Permata Bunda', '0341-487488', NULL, 'Setiap hari 24 jam, jam kunjung pukul 10-12 pagi dan 4-7 sore ', 'penjualan obat', '-', 'Jalan Soekarno Hatta No.75 Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65143', '-', 'Sebuah apotek yang letaknya sama dengan Rumah Sakit Permata Bunda', -7.938889, 112.625),
(10, 'Rumah Sakit Universitas Brawijaya', '0341-416952', NULL, 'baru diresmikan', 'poli umum, poli lainnya, bpjs, dsb', '-', 'Jalan Soekarno Hatta, Jatimulyo, Lowokwaru, Kota Malang, Jawa Timur 65142', 'www.rumahsakit.ub.ac.id', 'Salah satu Rumah Sakit yang dimiliki Universtiras Brawijaya yang berada di tengah kawasan suhat', -7.941639, 112.621778),
(11, 'DNI Skin Centre', '081999202777', NULL, 'Setiap hari pukul 11.00 - 19.00 WIB', 'treatment', 'IDR 100k-190k', 'Ruko Soekarno Hatta Blok A-3 Kav 4, Jalan Soekarno Hatta, Lowokwaru, Jatimulyo, Kota Malang, Jawa Ti', 'www.skincentrebali.com', 'Sebuah klinik kecantikan yang berada di sebelah dekatnya Pizza Hut Suhat', -7.944028, 112.619722),
(12, 'Gloskin Aestethic Clinic', '0341-485800', NULL, 'Setiap hari pukul 11.00 - 19.00 WIB', 'treatment', 'IDR 225k', 'Ruko Soekarno Hatta Kav 43A, Jalan Soekarno Hatta, Kecamatan Lowokwaru, Jatimulyo, Kota Malang, Jawa', 'www.beautifulgloskin.com', 'Sebuah klinik kecantikan yang berada di depan seberangnya DNI Skincare', -7.944222, 112.62),
(13, 'Apotek Jingga Farma', '0341-9081110', NULL, 'Senin sd Sabtu 08.00 - 20.30 WIB', 'penjualan obat', '-', 'Ruko Puncak Borobudur, Jalan Terusan Soekarno Hatta Kav. 1, Mojolangu, Lowokwaru, Kota Malang, Jawa ', '-', 'Sebuah apotik yang berada di ujung utara jalan suhat sebelah baratnya patung pesawat', -7.936611, 112.626111),
(14, 'Praktek umum Dr. Herryanto', '0341-9081111', NULL, 'Senin sd Jumat 08.00 - 09.00 & 16.00 - 17.30 WIB', 'poli umum', '-', 'Ruko Puncak Borobudur, Jalan Terusan Soekarno Hatta Kav. 1, Mojolangu, Lowokwaru, Kota Malang, Jawa ', '-', 'Sebuah praktek dokter umum yang letaknya sama dengan apotek jingga farma', -7.936389, 112.625833),
(15, 'Natasha Skin Clinic Center (Skin Care)', '0341-488290', NULL, 'Senin sd Sabtu 09.00 - 18.00 WIB', 'treatment', 'IDR 85k-190k', 'Jalan Soekarno Hatta PTP II No.1 Kav. 5-6, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65142', 'www.natasha-skin.com', 'Sebuah klinik kecantikan yang berada di kawasan suhat dekat dengan bundaran patung pesawat', -7.937333, 112.625889),
(16, 'Apotek Natasha', '0341-488291', NULL, 'Senin sd Sabtu 09.00 - 18.00 WIB', 'penjualan obat (khususnya untuk kecantikan)', '-', 'Jalan Soekarno Hatta PTP II No.1 Kav. 5-6, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65143', 'www.natasha-skin.com', 'Sebuah apotek yang letaknya sama dengan natasha skin clinen center suhat', -7.9375, 112.625833),
(17, 'Apotek Suhat 24', '08123666748', NULL, 'Setiap hari 24 jam, diatas pukul 11 malam dilayani lewat loket', 'penjualan obat', '-', 'Jalan Soekarno Hatta No.66G, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65142', '-', 'Sebuah apotek yang berada di kawasan suhat dekat dengan ATM BNI Drive Thru', -7.938083, 112.625583),
(18, 'RS Permata Bunda', '0341-487487', NULL, 'Setiap hari 24 jam, jam kunjung pukul 10-12 pagi dan 4-7 sore ', 'poli umum, poli lainnya, bpjs, dsb', '-', 'Jalan Soekarno Hatta No.75 Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65142', '-', 'Salah satu Rumah Sakit yang berada di kawasan suhat yang dekat dengan bakso damas sebelum apotek suh', -7.939028, 112.624861),
(19, 'Apotek RS Permata Bunda', '0341-487488', NULL, 'Setiap hari 24 jam, jam kunjung pukul 10-12 pagi dan 4-7 sore ', 'penjualan obat', '-', 'Jalan Soekarno Hatta No.75 Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65143', '-', 'Sebuah apotek yang letaknya sama dengan Rumah Sakit Permata Bunda', -7.938889, 112.625),
(20, 'Rumah Sakit Universitas Brawijaya', '0341-416952', NULL, 'baru diresmikan', 'poli umum, poli lainnya, bpjs, dsb', '-', 'Jalan Soekarno Hatta, Jatimulyo, Lowokwaru, Kota Malang, Jawa Timur 65142', 'www.rumahsakit.ub.ac.id', 'Salah satu Rumah Sakit yang dimiliki Universtiras Brawijaya yang berada di tengah kawasan suhat', -7.941639, 112.621778),
(21, 'Apotek Rumah Sakit Universitas Brawijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.941667, 112.622222),
(22, 'Apotek Kimia Farma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.942167, 112.6215),
(23, 'Praktek Dokter Gigi Yudhi Yudhoyono', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.942222, 112.621667),
(24, 'Drg. Kuni Ridha Andini Sp.Ort', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.942528, 112.621083),
(25, 'Klinik Hypnoteraphy Diamond in You', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.942861, 112.620389),
(26, 'House of Pet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.942833, 112.620306),
(27, 'Poliklinik Universitas Brawijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.950583, 112.615667),
(28, 'Apotek Poliklinik Universitas Brawijaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.933611, 112.6325),
(29, 'Praktek Umum Dokter Onggong Napitupulu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.938528, 112.625306),
(30, 'Posyandu Sakura', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.940333, 112.627167),
(31, 'Aruel 7 Dental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.94625, 112.618194),
(32, 'Rumah Sakit Galeri Chandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.947611, 112.62),
(33, 'Apotek Rumah Sakit Galeri Chandra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, -7.947778, 112.620278);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_place`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
