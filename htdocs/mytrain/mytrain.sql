-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 12:15 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytrain`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login` (IN `IN_USERNAME` VARCHAR(15), IN `IN_PASS` VARCHAR(8))  BEGIN
	SELECT * FROM member WHERE username = IN_USERNAME AND password = IN_PASS;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `googlemaps`
--

CREATE TABLE `googlemaps` (
  `idmaps` int(11) NOT NULL,
  `locationname` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `latcoordinate` float(10,6) NOT NULL,
  `longcoordinate` float(10,6) NOT NULL,
  `locationtype` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlemaps`
--

INSERT INTO `googlemaps` (`idmaps`, `locationname`, `address`, `latcoordinate`, `longcoordinate`, `locationtype`) VALUES
(1, 'Stasiun Malang Baru', 'Jl. Trunojoyo, Kidul Dalem, Klojen, Kota Malang', -7.977542, 112.637100, 'big station'),
(2, 'Stasiun Blimbing', 'Purwodadi, Blimbing, Kota Malang', -7.940014, 112.644920, 'small station'),
(3, 'Museum Affandi', 'Jl. Laksda Adisutjipto 167 Yogyakarta', -7.783037, 110.396164, 'museum'),
(4, 'Stasiun Yogyakarta', 'Jl. Ps. Kembang, Sosromendurun, Gedong Tengen, Kota Yogyakarta', -7.789399, 110.363792, 'big station'),
(5, 'Gembira Loka', 'Jl. Kebun Raya no. 2 Yogyakarta.', -7.803342, -110.397629, 'wisata'),
(6, 'Stasiun Blitar', 'Jl. Mastrip, Kepanjen Kidul, Kepanjenkidul, Kota Blitar', -8.101228, 112.163254, 'small station'),
(7, 'Stasiun Bangil', 'Jl. Gajah Mada, Pogar, Bangil, Pasuruan', -7.598767, 112.778770, 'big station'),
(8, 'Kraton Yogyakarta', 'Alun-alun utara, yogyakarta', -7.805708, 110.364113, 'tour destination'),
(9, 'Malioboro', 'Jl. Malioboro, Yogyakarta', -7.793238, 110.365723, 'tour destination');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `gelar` varchar(10) NOT NULL,
  `noidentitas` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `email` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(10) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `long` float(10,6) NOT NULL,
  `idmaps` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `username`, `password`, `namalengkap`, `nohp`, `gelar`, `noidentitas`, `tanggallahir`, `email`, `alamat`, `kota`, `lat`, `long`, `idmaps`) VALUES
(1, 'm1', 'member1', 'member1', '081111222333', 'tuan', 'B11109', '1997-12-01', 'member@mail.com', 'disini', 'malang', -7.977521, 112.637398, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `idstation` int(11) NOT NULL,
  `idmaps` int(11) NOT NULL,
  `stationname` varchar(20) NOT NULL,
  `description` varchar(560) NOT NULL,
  `distance` decimal(9,2) NOT NULL,
  `city` varchar(30) NOT NULL,
  `stationtype` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`idstation`, `idmaps`, `stationname`, `description`, `distance`, `city`, `stationtype`) VALUES
(1, 1, 'Malang Baru Station', 'Malang baru station is a train station in Malang city, East Java.[1] Station located at an altitude of approximately 444 meters above sea level this is the largest train station in Malang City. Malang station was built in 1941 based on the work of J. van der Eb. The station is sometimes referred to as Malang Kotabaru Station to distinguish Malang Kotalama Station who is older.', '4.80', 'Malang', 'big station'),
(2, 2, 'Blimbing Station', 'Blimbing Station (BMG) is one of three railway stations located in Malang, precisely located in the Village of Purwodadi, Blimbing, Malang. The station is located at an altitude of +460 m is included in the Operation Zone VIII Surabaya and into the train station is the most northern location in Malang.', '5.70', 'Malang', 'small station'),
(3, 4, 'Yogyakarta Station', 'Yogyakarta Station, formerly known as Tugu station, (Code: YK, +133 AMSL) is located in Yogyakarta, Yogyakarta Special Region in Indonesia.', '334.00', 'Yogyakarta', 'big station'),
(4, 6, 'Blitar Station', 'Blitar Station is a railway station in Blitar, East Java, Indonesia. It was opened in 1882 by the Dutch East Indies government, making it one of the oldest railway station in East Java.[1][2] There are locomotive depot (still used) and ex-turntable at this station.', '75.80', 'Blitar', 'small station'),
(5, 7, 'Bangil Station', 'Bangil station (BG) is a Class I railway station located in Pogar, bangil. The station is located at an altitude of +9 meters is included in the Operation Zone VIII Surabaya; is the largest station and the only one that serves heaving passengers as well as being an active station that most western location in Pasuruan.', '54.20', 'Pasuruan', 'big station');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `googlemaps`
--
ALTER TABLE `googlemaps`
  ADD PRIMARY KEY (`idmaps`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`idstation`),
  ADD KEY `fk_idmaps` (`idmaps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `googlemaps`
--
ALTER TABLE `googlemaps`
  MODIFY `idmaps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `idstation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
