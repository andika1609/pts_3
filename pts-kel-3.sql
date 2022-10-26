-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 26, 2022 at 01:43 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pts-kel-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_booking` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `film` varchar(255) NOT NULL,
  `kursi` varchar(5) NOT NULL,
  `jadwal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_booking`, `username`, `film`, `kursi`, `jadwal`, `waktu`) VALUES
(1, 'user', 'Avengers End Game', 'C-3', '2022-10-13', '12:30:00'),
(6, 'user', 'Avengers End Game', 'B-2', '2022-10-06', '12:30:00'),
(8, 'user', 'Kimi No nawa', 'C-3', '2022-10-07', '13:00:00'),
(11, 'andika', 'Kimi No nawa', 'C-2', '2022-10-15', '13:00:00'),
(12, 'rakha', 'Avengers End Game', 'A-3', '2022-10-13', '12:30:00'),
(13, 'rakha', 'Avengers End Game', 'B-1', '2022-10-13', '12:30:00'),
(14, 'rakha', 'Kimi No nawa', 'A-3', '2022-10-15', '13:00:00'),
(15, 'rakha', 'Kimi No nawa', 'A-2', '2022-10-15', '13:00:00'),
(16, 'user', 'Top gun maverick', 'B-3', '2022-10-13', '12:30:00'),
(17, 'user', 'Kimi no nawa', 'B-3', '2022-10-19', '13:00:00'),
(18, 'user', 'Kimi no nawa', 'C-3', '2022-10-19', '13:00:00'),
(19, 'user', 'Avengers End Game', 'C-3', '2022-10-26', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `teaser` varchar(255) NOT NULL,
  `deskripsi_film` text NOT NULL,
  `durasi_film` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `slug`, `teaser`, `deskripsi_film`, `durasi_film`) VALUES
(1, 'Avengers End Game', 'avangers-end-game', 'avangers-teaser.jpeg', 'Lorem ipsum dolor, sit amet consectetur', '01:30:00'),
(4, 'Kimi no nawa', 'kimi-no-nawa', 'kimi-no-nawa.png', 'Lorem ipsum dolor sit amet', '02:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_film`
--

CREATE TABLE `jadwal_film` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `tanggal_main` date NOT NULL,
  `waktu_main` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal_film`
--

INSERT INTO `jadwal_film` (`id`, `slug`, `tanggal_main`, `waktu_main`) VALUES
(4, 'kimi-no-nawa', '2022-10-15', '13:00:00'),
(5, 'avangers-end-game', '2022-10-26', '17:00:00'),
(6, 'kimi-no-nawa', '2022-10-19', '13:00:00'),
(15, 'avangers-end-game', '2022-10-27', '13:30:00'),
(17, 'kimi-no-nawa', '2022-10-14', '13:30:00'),
(18, 'avangers-end-game', '2022-10-28', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'andika', '$2y$10$/G2e.otM/HFdelIU4tfYI.cabvnMKWFbzxi3lSERNv1kjEOL5pmpe', 1, '2022-09-25 12:47:54', NULL),
(8, 'user', '$2y$10$ooPVFhd9CJfUEZn6ievVSOq2xadCGKUupnoI/qxfJ0QSU8B488nK2', 1, '2022-10-04 17:23:52', NULL),
(9, 'rakha', '$2y$10$1YEjs5sADOhDxGDtDsNP4.qWdUf/yZyMktPBGRKCl16FaPklkXb/6', 1, '2022-10-07 09:44:59', NULL),
(10, 'admin', '$2y$10$tAOHaCvfGcIHsJ3KyFP5F.odNtLBmwAws6q3dpXzIwF8fMQTYCona', 0, '2022-10-07 14:06:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD UNIQUE KEY `nama_film` (`nama_film`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `nama_film_2` (`nama_film`);

--
-- Indexes for table `jadwal_film`
--
ALTER TABLE `jadwal_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_film`
--
ALTER TABLE `jadwal_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
