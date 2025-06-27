-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 03:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_support`
--

-- --------------------------------------------------------

--
-- Table structure for table `cause_it`
--

CREATE TABLE `cause_it` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cause_it`
--

INSERT INTO `cause_it` (`id`, `title`, `text`, `photo`, `title_id`) VALUES
(1, 'สายหลุด', '', '', 1),
(2, 'asdsad', 'asdsad', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `rs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`id`, `title`, `text`, `photo`, `rs_id`) VALUES
(1, 'ตรวจสอบว่าสาย LAN เสียบแน่นทั้งสองฝั่งหรือไม่ (คอมพิวเตอร์ & Switch/Router)', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `title_it`
--

CREATE TABLE `title_it` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `title_it`
--

INSERT INTO `title_it` (`id`, `title`, `icon`) VALUES
(1, 'Network', ''),
(2, 'asdsadsda', ''),
(3, 'asdsasdasdas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cause_it`
--
ALTER TABLE `cause_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_it`
--
ALTER TABLE `title_it`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cause_it`
--
ALTER TABLE `cause_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `title_it`
--
ALTER TABLE `title_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
