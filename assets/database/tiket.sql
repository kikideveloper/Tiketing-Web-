-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 12:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `cod`) VALUES
(1, 'Surabaya', 'SBY'),
(2, 'Bandung', 'BNDG'),
(3, 'Surakarta', 'SKRT'),
(4, 'Malang', 'MLG'),
(5, 'Jakarta', 'JKT'),
(6, 'Jogjakarta', 'DIY'),
(7, 'Semarang', 'SMRG'),
(8, 'Cilacap', 'CLCP'),
(9, 'Pekalongan', 'PKLG'),
(10, 'Madiun', 'MDN');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `pull`
--

CREATE TABLE `pull` (
  `id` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `pull` varchar(100) NOT NULL,
  `dismissal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pull`
--

INSERT INTO `pull` (`id`, `kota`, `pull`, `dismissal`) VALUES
(1, 6, 'Stasiun Tugu', ''),
(2, 10, 'Stasiun Wates', ''),
(3, 1, 'Stasiun Gubeng', ''),
(4, 1, 'Stasiun Kalimas', ''),
(5, 1, 'Stasiun Gambir', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `res_code` varchar(255) NOT NULL,
  `res_at` varchar(100) NOT NULL,
  `res_date` date NOT NULL,
  `seat_cod` varchar(255) NOT NULL,
  `rute_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `res_code`, `res_at`, `res_date`, `seat_cod`, `rute_id`, `user_id`, `transport_id`) VALUES
(1, 'guaevwibonjmpq234iou', 'Stasiun Gubeng', '2018-02-28', 'cx04rm0cinve9e759wt4', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(11) NOT NULL,
  `berangkat_pada` date NOT NULL,
  `rute_from` varchar(255) NOT NULL,
  `rute_to` varchar(255) NOT NULL,
  `price` bigint(50) NOT NULL,
  `transport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `berangkat_pada`, `rute_from`, `rute_to`, `price`, `transport_id`) VALUES
(1, '2018-02-28', 'Stasiun Gubeng', 'Stasiun Wates', 600000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `name_transport` varchar(255) NOT NULL,
  `seat_qty` bigint(30) NOT NULL,
  `transport_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `name_transport`, `seat_qty`, `transport_type`) VALUES
(2, 'citilink', 400, 2),
(3, 'Argo Bromo Anggrek', 300, 1),
(4, 'Lodaya', 400, 1),
(5, 'Mutiara Timur', 450, 1),
(6, 'Mutiara Selatan', 390, 1),
(7, 'Sidomukti', 400, 1),
(8, 'Gumarang', 300, 1),
(9, 'Garuda Indonesia', 500, 2),
(10, 'Sriwijaya', 540, 2),
(11, 'Wings Air', 400, 2),
(12, 'Batik Air', 500, 2),
(13, 'NamAir', 400, 2),
(14, 'Air Asia', 500, 2),
(15, 'Malindo Air', 500, 2),
(16, 'Transnusa', 450, 2),
(17, 'Baru', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport_type`
--

CREATE TABLE `transport_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_type`
--

INSERT INTO `transport_type` (`id`, `name`, `description`) VALUES
(1, 'Kereta', ''),
(2, 'Pesawat', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `fullname`, `address`, `phone`, `level`) VALUES
(2, 'rani', 'ranisaraya@gmail.com', '$2y$10$bqznSm81OjUvQ2Zk36GQeu5eQ/T4p1NjvCNFEklnCGty1OBlPgAYe', 'Rani Sharaya', 'Ds. karang patihan Soko Ponorogo', 8934745383, 1),
(4, 'nadya', 'NadyaKp@gmail.com', '$2y$10$.rbObyFpaTY5ELRrB9gS9e.OfDnxSOIWwLkIl3jPPfCXRbsEsOKrq', 'Nadya Kumala Putri', 'Kesugihan Pulung Ponorogo', 89235898231, 1),
(6, 'Retno', 'retnocantik@yahoo.com', '$2y$10$wf49FKHe3uB7PKyM5720we6XpHxz6FHKL12WksGHD5fo2E6k7typ6', 'Retno Dewi Lusiani', 'Cikampek', 82335467812, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pull`
--
ALTER TABLE `pull`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `transport_id` (`transport_id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_id` (`transport_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_type` (`transport_type`);

--
-- Indexes for table `transport_type`
--
ALTER TABLE `transport_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pull`
--
ALTER TABLE `pull`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transport_type`
--
ALTER TABLE `transport_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pull`
--
ALTER TABLE `pull`
  ADD CONSTRAINT `pull_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `kota` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`id`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`transport_type`) REFERENCES `transport_type` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
