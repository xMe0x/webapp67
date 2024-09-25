-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 05:51 AM
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
-- Database: `moviemangesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `actbio`
--

CREATE TABLE `actbio` (
  `actid` varchar(4) NOT NULL,
  `actname` varchar(20) NOT NULL,
  `actlastname` varchar(30) NOT NULL,
  `actage` int(3) NOT NULL,
  `actsex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='movie information';

--
-- Dumping data for table `actbio`
--

INSERT INTO `actbio` (`actid`, `actname`, `actlastname`, `actage`, `actsex`) VALUES
('1111', 'Keanu', 'Reeves', 59, 'Male'),
('1112', 'Scarlett', 'Johansson', 39, 'Female'),
('1113', 'Johnny', 'Depp', 61, 'Male'),
('1114', 'Laurence', 'Fishburne', 63, 'Male'),
('1115', 'Benedict', 'Cumberbatch', 48, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `actor_movie`
--

CREATE TABLE `actor_movie` (
  `actor_id` varchar(4) NOT NULL,
  `movie_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor_movie`
--

INSERT INTO `actor_movie` (`actor_id`, `movie_id`) VALUES
('1111', '202'),
('1111', '204');

-- --------------------------------------------------------

--
-- Table structure for table `memberbio`
--

CREATE TABLE `memberbio` (
  `mid` varchar(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `mtelephon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='member information';

--
-- Dumping data for table `memberbio`
--

INSERT INTO `memberbio` (`mid`, `mname`, `mlastname`, `memail`, `mtelephon`) VALUES
('110', 'kanakron', 'pheasakun', 'kanae@gmail.com', 912345717),
('111', 'voradech', 'chunhapluck', 'voradech@mail.com', 914513540),
('112', 'patiphan', 'jinda', 'jinda@mail.com', 974513214),
('113', 'pantakran', 'namjunda', 'namjunda@mail.com', 874561250),
('114', 'มากมัก', 'มักมากมัก', 'mukmuk@rukjung.com', 874513214),
('117', 'มากd', 'dมาก', 'ddsdsds@ggg.com', 912345717),
('118', 'อุไรวรรณ', '', 'uriwan@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `moviebio`
--

CREATE TABLE `moviebio` (
  `movid` varchar(3) NOT NULL,
  `movname` varchar(20) NOT NULL,
  `movdetel` varchar(50) NOT NULL,
  `movduration` time(2) NOT NULL,
  `movdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='movie information';

--
-- Dumping data for table `moviebio`
--

INSERT INTO `moviebio` (`movid`, `movname`, `movdetel`, `movduration`, `movdate`) VALUES
('201', 'ถอดรหัสลับอัจฉริยะ', 'เป็นภาพยนตร์อิงประวัติศาสตร์/ชีวิต กำกับโดยมอร์เทน', '01:20:00.00', '2015-01-29'),
('202', 'The Matrix (1999)', ' เรื่องราวของชายหนุ่มที่พบว่าโลกที่เขาอยู่เป็นเพีย', '00:00:00.00', '1999-03-31'),
('203', 'Transcendence', 'นักวิทยาศาสตร์อัปโหลดสมองของเขาเข้าสู่คอมพิวเตอร์', '00:00:00.00', '2014-04-18'),
('204', 'Johnny Mnemonic', 'นักขนส่งข้อมูลผู้ซึ่งมีชิปบันทึกข้อมูลขนาดใหญ่ในสม', '00:00:00.00', '1995-05-26'),
('205', 'Her', 'ชายหนุ่มที่ตกหลุมรักกับระบบปฏิบัติการคอมพิวเตอร์', '00:00:00.00', '2013-12-18'),
('206', 'ธี่หยด', '', '00:00:00.00', '2024-09-25'),
('412', 'นาดีมีงู', 'สนุกมาก', '00:00:00.00', '2024-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `member_id` varchar(3) NOT NULL,
  `movie_id` varchar(3) NOT NULL,
  `purchase_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actbio`
--
ALTER TABLE `actbio`
  ADD PRIMARY KEY (`actid`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`actor_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `memberbio`
--
ALTER TABLE `memberbio`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `moviebio`
--
ALTER TABLE `moviebio`
  ADD PRIMARY KEY (`movid`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`member_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actbio` (`actid`),
  ADD CONSTRAINT `actor_movie_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `moviebio` (`movid`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `memberbio` (`mid`),
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `moviebio` (`movid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
