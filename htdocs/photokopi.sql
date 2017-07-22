-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 05:58 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photokopi`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `p_ceklike` (IN `in_id_foto` INT, IN `in_id_user` INT)  BEGIN
	select * from likes where id_user=in_id_user and id_foto=in_id_foto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_create_user` (IN `in_username` VARCHAR(20), IN `in_email` VARCHAR(50), IN `in_password` VARCHAR(40), IN `in_pp` VARCHAR(100))  BEGIN
	INSERT INTO user (username, email, password, pp) VALUES (in_username, in_email, in_password, in_pp);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_delete_foto` (IN `in_id_foto` INT)  BEGIN
	DELETE FROM foto WHERE id_foto = in_id_foto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_likes` (IN `in_id_foto` INT, IN `in_id_user` INT)  BEGIN
	INSERT INTO likes (id_foto, id_user) VALUES (in_id_foto, in_id_user);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_posting_foto` (IN `in_id_user` INT, IN `in_title` VARCHAR(100), IN `in_path` VARCHAR(500), IN `in_tags` TEXT)  BEGIN
	INSERT INTO foto (id_user, title, path, tags,likes) VALUES (in_id_user, in_title, in_path, in_tags,'0');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_profil` (IN `in_username` VARCHAR(100))  BEGIN
	select * from user where username = in_username  ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_profil2` (IN `in_id_user` INT(11))  BEGIN
		SELECT * from user where id_user = in_id_user;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_tampil_foto` ()  BEGIN
	SELECT * FROM foto order by id_foto desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `p_unlike` (IN `in_id_foto` INT, IN `in_id_user` INT)  BEGIN
	delete from likes where id_foto=in_id_foto and id_user=in_id_user;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LOGIN` (IN `IN_USERNAME` VARCHAR(10), IN `IN_PASS` VARCHAR(10))  BEGIN
	SELECT * FROM user WHERE username = IN_USERNAME AND password = IN_PASS;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `f_username` (`in_id_user` INT) RETURNS VARCHAR(100) CHARSET latin1 BEGIN DECLARE a varchar(100);
SELECT username into a FROM user WHERE id_user = in_id_user;
RETURN a;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL,
  `date_published` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(11) DEFAULT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_user`, `title`, `path`, `date_published`, `likes`, `tags`) VALUES
(4, 2, 'cek brom', '3592_Coffee-in-a-paper-cup-close-up-HD-wallpaper.jpg', '2016-06-06 05:32:26', 1, '#pemandangan'),
(8, 2, 'alif', 'picu.png', '2016-06-06 11:19:57', 1, 'berisik'),
(10, 6, 'baru', '9e34b9ca108a3e1c71ed04144fabf813.jpg', '2016-06-06 12:39:27', 2, '#baru'),
(12, 3, 'iniygbaru', 'picu.png', '2016-06-06 13:41:24', 1, '#barudiupload'),
(14, 10, 'halo', '0f3ebbaab7424d863d08993d30b1ef0a.jpg', '2016-06-06 14:03:14', 0, '#halo');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id_likes` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id_likes`, `id_foto`, `id_user`) VALUES
(54, 5, 3),
(56, 4, 2),
(57, 5, 2),
(58, 7, 4),
(59, 7, 2),
(61, 9, 3),
(63, 8, 3),
(64, 10, 6),
(66, 10, 8),
(67, 12, 2);

--
-- Triggers `likes`
--
DELIMITER $$
CREATE TRIGGER `TRIG_LIKES` AFTER INSERT ON `likes` FOR EACH ROW BEGIN 
	UPDATE foto SET likes = likes + 1 
	WHERE id_foto = New.id_foto; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TRIG_UNLIKES` BEFORE DELETE ON `likes` FOR EACH ROW BEGIN
	UPDATE foto SET likes = likes - 1
	WHERE id_foto = old.id_foto;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tanggalBergabung` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `tanggalBergabung`, `pp`) VALUES
(11, 'budi', 'budi@gmail.com', 'budi', '2016-06-11 06:01:49', ''),
(12, 'cuk', 'cuk@cuk.com', 'fakyu', '2016-06-11 06:02:39', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_likes`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_likes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
