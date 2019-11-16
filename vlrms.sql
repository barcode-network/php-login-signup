-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 02:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `natl_id` varchar(11) COLLATE utf8_bin NOT NULL,
  `license_num` varchar(15) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `tel_prefix` smallint(3) NOT NULL,
  `tel_number` smallint(4) NOT NULL,
  `address_1` varchar(50) COLLATE utf8_bin NOT NULL,
  `address_2` varchar(50) COLLATE utf8_bin NOT NULL,
  `parish` varchar(30) COLLATE utf8_bin NOT NULL,
  `cover_note_file` varchar(100) COLLATE utf8_bin NOT NULL,
  `license_image_file` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`natl_id`, `license_num`, `first_name`, `last_name`, `email`, `tel_prefix`, `tel_number`, `address_1`, `address_2`, `parish`, `cover_note_file`, `license_image_file`) VALUES
('123456-9090', '123456720031111', '', '', 'c@g.com', 0, 0, '', '', '', '', ''),
('230291-0392', '123456719931111', '', '', 'c@g.com', 234, 3456, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`natl_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
