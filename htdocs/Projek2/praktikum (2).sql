-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 04:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `listbatch` (`mfgnum` VARCHAR(24)) RETURNS VARCHAR(10) CHARSET latin1 BEGIN
DECLARE bach VARCHAR(10);
SELECT batch into bach FROM test WHERE mfg_code = mfgnum group by batch;
RETURN bach;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_foto` int(5) NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_foto`, `username`, `url`, `email`, `text`, `waktu`) VALUES
(5, 3, 'hanif', '8140b221778469b8fce25465aeb22c00.jpg', '', 'wooooo', '2016-11-24 09:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `caption` varchar(400) DEFAULT NULL,
  `waktu` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `username`, `url`, `caption`, `waktu`) VALUES
(1, 'admin', 'logo fix.png', 'selamat datang di website PhotoKopi, dimana anda akan menikmati berjuta foto kopi dengan desain yang menarik', '2016-06-05 15:41:38'),
(3, 'hanif', 'coffee-icons-set-flat-design-color-style-vector-illustration-43207021.jpg', '						bismilla', '2016-06-05 22:37:37');

--
-- Triggers `foto`
--
DELIMITER $$
CREATE TRIGGER `TRIG_DELETE_FOTO` BEFORE DELETE ON `foto` FOR EACH ROW begin
DELETE FROM comments WHERE id_foto = old.id_foto;
DELETE FROM PESAN WHERE id_foto = old.id_foto;
DELETE FROM likes WHERE id_foto = old.id_foto;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `id_teman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id_teman`, `id_user`, `username`) VALUES
(2, 2, 'admin'),
(3, 3, 'admin'),
(4, 2, 'budi'),
(5, 3, 'hanif'),
(6, 4, 'admin'),
(7, 5, 'admin'),
(8, 6, 'admin'),
(9, 3, 'jabbar'),
(10, 5, 'budi'),
(11, 2, 'fadel'),
(12, 6, 'hanif'),
(13, 7, 'admin'),
(14, 7, 'admin'),
(15, 7, 'budi'),
(16, 3, 'pemweb'),
(17, 7, 'hanif'),
(18, 2, 'pemweb'),
(19, 8, 'admin'),
(20, 8, 'hanif'),
(21, 2, 'alif'),
(22, 8, 'jabbar'),
(23, 5, 'alif');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id_like`, `id_user`, `username`, `id_foto`) VALUES
(3, 3, 'budi', 1),
(5, 2, 'hanif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `statuspesan` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_foto`, `username`, `email`, `pengirim`, `penerima`, `subject`, `pesan`, `statuspesan`, `waktu`) VALUES
(3, 1, 'admin', 'hanif', 'hanif2', 'admin', 'PORNOGRAFI', 'apa', 'lama', '2016-06-05 22:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `bio` varchar(20) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `back` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_user`, `username`, `email`, `tanggal_lahir`, `bio`, `photo`, `back`) VALUES
(1, 'admin', 'admin@admin.com', NULL, NULL, 'logo fix.png', 'photokopi.png'),
(8, 'alif', 'alif@alif.com', NULL, NULL, 'profil.png', 'photokopi.jpg'),
(3, 'budi', 'budi@gmail.com', '1995-11-02', NULL, 'mabu.PNG', 'city.jpg'),
(6, 'fadel', 'fadel@fadel.com', NULL, NULL, 'profil.png', 'photokopi.jpg'),
(2, 'hanif', 'hanif', '1990-01-01', NULL, '8140b221778469b8fce25465aeb22c00.jpg', '9550-one-piece-1366x768-anime-wallpaper.jpg'),
(5, 'jabbar', 'jabbar@jabbar.com', NULL, NULL, 'profil.png', 'photokopi.jpg'),
(7, 'pemweb', 'pemweb@pemweb', '2016-02-13', NULL, '8140b221778469b8fce25465aeb22c00.jpg', '9429080dd8395cffa9a6eb1a2aa061bc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `tanggal_daftar`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '2016-06-05'),
(2, 'hanif', 'hanif', 'hanif@hanif.com', '2016-06-05'),
(3, 'budi', 'budi', 'budi@gmail.com', '2016-06-05'),
(5, 'jabbar', 'jabbar', 'jabbar@jabbar.com', '2016-06-05'),
(6, 'fadel', 'fadel', 'fadel@fadel.com', '2016-06-05'),
(7, 'pemweb', 'pemweb', 'pemweb@pemweb', '2016-06-10'),
(8, 'alif', 'alif', 'alif@alif.com', '2016-11-25');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `TRIG_FRIEND_ADMIN` AFTER INSERT ON `user` FOR EACH ROW begin
INSERT INTO FRIEND VALUES (NULL,NEW.ID_USER,'admin');
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIG_HAPUS_USER` BEFORE DELETE ON `user` FOR EACH ROW begin
DELETE FROM comments WHERE username = old.username;
DELETE FROM foto WHERE username = old.username;
DELETE FROM friend WHERE username = old.username;
DELETE FROM likes WHERE username = old.username;
DELETE FROM pesan WHERE username = old.username;
DELETE FROM profil WHERE username = old.username;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIG_UPDATE_USER` AFTER UPDATE ON `user` FOR EACH ROW begin
update comments set username = new.username WHERE username = old.username;
update foto set username = new.username WHERE username = old.username;
update friend set username = new.username WHERE username = old.username;
updatE likes set username = new.username WHERE username = old.username;
update pesan set username = new.username WHERE username = old.username;
update profil set username = new.username WHERE username = old.username;
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id_teman`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_user3` (`id_user`),
  ADD KEY `foto1` (`id_foto`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_user5` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id_teman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
