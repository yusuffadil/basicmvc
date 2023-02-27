-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 05:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasewa`
--

CREATE TABLE `mahasewa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasewa`
--

INSERT INTO `mahasewa` (`id`, `nama`, `nik`, `email`, `pekerjaan`) VALUES
(1, 'Abu Duda', '0123456789', 'abududa@mail.com', 'Buzzer'),
(2, 'Old Lex', '9876543210', 'oldlex@mail.com', 'Musisi'),
(3, 'Poor Brian', '0965432187', 'poorbrian@mail.com', 'Musisi'),
(4, 'reinhard the dragon', '09012128', 'reinhard@dragon.com', 'Magatron');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasewa`
--
ALTER TABLE `mahasewa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasewa`
--
ALTER TABLE `mahasewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
