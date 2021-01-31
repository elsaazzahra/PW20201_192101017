-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 03:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(1, 'Lee Soo Ho', '111920901', 'suholee@gmail.com', 'Teknik Informatika'),
(2, 'Im Joo Kyung', '111920902', 'jukyungim@gmail.com', 'Tata Rias'),
(3, 'Han Seo Joon', '111920903', 'seojoonhan@gmail.com', 'Teknik Industri'),
(9, 'Kim Seon Ho', '123456789', 'seonhokim@gmail.com', 'Acting '),
(10, 'Nam Do San', '516235267', 'dosannam@gmail.com', 'TI'),
(11, 'Seo Dal-mi', '23782392', 'dalmi@gmail.com', 'Teknik Industri'),
(12, 'Han Ji Pyeong', '6372638', 'jipyeong@gmail.com', 'Sistem Informasi'),
(13, 'Seo In Jae', '5432222', 'injaeseo@gmail.com', 'Teknik Informatika'),
(14, 'Yoon Se Ri', '2233333334', 'seriyoon@gmail.com', 'Teknik Industri'),
(15, 'Hwang In Yeop', '5565233', 'inyeop_hwang@gmail.com', 'Teknik Industri'),
(16, 'Cha Eun woo', '2345672', 'woowoocha@gmail.com', 'Teknik Elektro'),
(17, 'Kang Soo Jin', '63726389', 'kangsooooojin@gmail.com', 'Teknik Industri'),
(18, 'Choi Soo Ah', '63726387', 'soooooyachoi@gmail.com', 'Teknik Industri'),
(19, 'Moon Ka Young', '543222256', 'young_moon@gmail.com', 'Sistem Informasi'),
(20, 'Park Yoo Na', '237823927', 'nanayoona@gmail.com', 'Sistem Informasi'),
(22, 'Bae Suzy', '2233333334', 'suzyaaabae@gmail.com', 'Sistem Informasi'),
(23, 'Elsa Aprilia Azzahra', '192101017', 'elsaazzahra141@gmail.com', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
