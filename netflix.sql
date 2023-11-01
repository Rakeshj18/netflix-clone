-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `id`) VALUES
('', 'nmb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5),
('', '4mh20is066@gmail.com', '67a05e3822ce48a6386746388e6c81f5', 6),
('', 'chaa@gmail.com', '710f5824891dd6f42b98135c4aac8cdb', 7),
('', 'rr@gmail.com', '586d59612ed95fa04f645fca3e79d7de', 8),
('', 'ill@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 9),
('', 'rakeshjrakeshj4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 10),
('', 'yogi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 11),
('', 'nehamb2601@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 12),
('', 'yy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 13),
('', 'we@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 14),
('', 'da@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 15),
('', 'yogesh@gmail.com', '12ed51686a83dff335014f5960cf94a4', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
