-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2022 at 10:23 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpat`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `penulis`) VALUES
(1, 'Blog Pertama', 'isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi ', 'Amalia'),
(2, 'Blog Kedua', 'isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi isi ', 'Rahmawati');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','operator','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `level`) VALUES
(1, 'Pahrul Irfan', 'administrator', 'b3aca92c793ee0e9b1a9b0a5f5fc044e05140df3', 'admin'),
(2, 'Editor', 'editor', 'ab41949825606da179db7c89ddcedcc167b64847', 'editor'),
(3, 'Operator', 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
