-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2015 at 06:50 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itebu`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tebu`
--

CREATE TABLE `jenis_tebu` (
  `id_jenistebu` int(11) NOT NULL,
  `jenis_tebu` varchar(25) NOT NULL,
  `std_tinggi` float NOT NULL,
  `std_berat` float NOT NULL,
  `std_diameter` float NOT NULL,
  `lama_penanaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tebu`
--

INSERT INTO `jenis_tebu` (`id_jenistebu`, `jenis_tebu`, `std_tinggi`, `std_berat`, `std_diameter`, `lama_penanaman`) VALUES
(1, '62', 3, 2.5, 20, 9),
(2, 'bl69', 3, 2, 17, 12),
(3, 'pmc144', 2, 2, 18, 9),
(4, '882', 2, 2, 14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'tes1'),
(2, 'tes2');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `kegiatan` varchar(30) NOT NULL,
  `tanggal_start` date NOT NULL,
  `tanggal_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`) VALUES
(214, 20, 'penanaman', '2015-12-23', '2015-12-30'),
(215, 20, 'pemupukan;pengairan;penggembur', '2016-02-23', '2016-03-01'),
(216, 20, 'pemupukan;pengairan', '2016-03-23', '2016-04-23'),
(217, 20, 'klentek', '2016-05-23', '2016-08-23'),
(218, 20, 'panen', '2016-12-23', '2017-01-23'),
(219, 20, 'kupas daun', '2016-01-23', '2016-01-30'),
(220, 20, 'kupas daun', '2016-02-23', '2016-03-01'),
(221, 20, 'kupas daun', '2016-03-23', '2016-03-30'),
(222, 20, 'kupas daun', '2016-04-23', '2016-04-30'),
(223, 20, 'kupas daun', '2016-05-23', '2016-05-30'),
(224, 20, 'kupas daun', '2016-06-23', '2016-06-30'),
(225, 20, 'kupas daun', '2016-07-23', '2016-07-30'),
(226, 20, 'kupas daun', '2016-08-23', '2016-08-30'),
(227, 20, 'kupas daun', '2016-09-23', '2016-09-30'),
(228, 20, 'kupas daun', '2016-10-23', '2016-10-30'),
(229, 20, 'kupas daun', '2016-11-23', '2016-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `id_jenistebu` int(11) NOT NULL,
  `tanggal_penanaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `username`, `id_jenistebu`, `tanggal_penanaman`) VALUES
(20, 'steven', 2, '2015-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `tebu`
--

CREATE TABLE `tebu` (
  `id_tebu` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `diameter` float NOT NULL,
  `tinggi` float NOT NULL,
  `berat` float NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tebu`
--

INSERT INTO `tebu` (`id_tebu`, `username`, `id_schedule`, `diameter`, `tinggi`, `berat`, `tanggal`) VALUES
(1, 'steven', 20, 1, 1, 1, '2015-12-25'),
(2, 'steven', 20, 1, 1, 1, '2015-12-25'),
(3, 'steven', 20, 2, 2, 2, '2016-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_telp` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_kecamatan`, `username`, `email`, `password`, `no_telp`) VALUES
(1, 1, 'steven', 'steven@gmail.com', '6ed61d4b80bb0f81937b32418e98adca', '081987454773'),
(3, 1, 'mirza', 'm_mirzaz@gmail.com', '89da365c3e674f19d46583d7663e686f', '085731652250'),
(4, 2, 'bubo', 'bubo@gmail.com', '939048d2f36b50f9c003feb1eee8595e', '007007007007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_tebu`
--
ALTER TABLE `jenis_tebu`
  ADD PRIMARY KEY (`id_jenistebu`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_schedule` (`id_schedule`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_jenistebu` (`id_jenistebu`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tebu`
--
ALTER TABLE `tebu`
  ADD PRIMARY KEY (`id_tebu`),
  ADD KEY `username` (`username`),
  ADD KEY `id_schedule` (`id_schedule`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_tebu`
--
ALTER TABLE `jenis_tebu`
  MODIFY `id_jenistebu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tebu`
--
ALTER TABLE `tebu`
  MODIFY `id_tebu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_kegiatan_schedule` FOREIGN KEY (`id_schedule`) REFERENCES `schedule` (`id_schedule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_jenistebu` FOREIGN KEY (`id_jenistebu`) REFERENCES `jenis_tebu` (`id_jenistebu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_schedule_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tebu`
--
ALTER TABLE `tebu`
  ADD CONSTRAINT `fk_tebu_schedule` FOREIGN KEY (`id_schedule`) REFERENCES `schedule` (`id_schedule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tebu_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
