-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 07:35 AM
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
-- Database: `instakilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`) VALUES
('aptiyan', '$2y$10$WIvhlsn1HT1vQQIxYQyp8.2reoCzSjk3RO6VD4ROuLRe3UAKr6n86', 'aptiyan@gmail.com', 'Aptiyan'),
('bagaskara', '$2y$10$Y2OqcSPdKaeKBdwEA9FNRO5lNYs2WIrthz.8E5Puzccla8.ltj/J6', 'bagaskara@gmail.com', 'Bagaskara'),
('taufiqul', '$2y$10$/tGTkZbP1d1Ehfy6tLnGK.96NWboD1qoJfDYUSUXmd2y4wAhdNNrG', 'taufiqul@gmail.com', 'Taufiqul'),
('taufiqulaptiyan', '$2y$10$TItHNlPjxxuoPI5FmnmHOeU3KKE/GvcN..rR1mcRiSXy4NtlTZP/6', 'aaa@gmail.com', 'Taufiqulaptiyan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
