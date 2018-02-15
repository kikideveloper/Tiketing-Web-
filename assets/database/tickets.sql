-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 07:07 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pull`
--

CREATE TABLE IF NOT EXISTS `pull` (
  `id` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `dismissal` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pull`
--

INSERT INTO `pull` (`id`, `kota`, `kode`, `alamat`, `dismissal`) VALUES
(3, 'surabaya', '', '', ''),
(8, 'bandung (Stasiun Ciroyom)', 'CIR', 'Di sisi timur Pasar Ciroyom, &plusmn;500 m sebelah barat stasiun Bandung (perbatasan Kelurahan Ciroy', 'stasiun ciroyom bandung letak Di sisi timur Pasar Ciroyom, &plusmn;500 m sebelah barat stasiun Bandu'),
(9, 'bandung (Stasiun Andir)', 'AND', 'Jalan Ciroyom No.1, Ciroyom, Andir &ndash; Kota Bandung', 'Stasiun Andir bandung'),
(10, 'Bandung (stasiun padalarang)', 'BD-PDL', 'Jalan Raya Stasiun Padalarang No.1 Kec. Padalarang &ndash; Kabupaten Bandung Barat', 'Stasiun Padalarang BAndung'),
(11, 'Jakarta (Stasiun kereta api Buaran)', 'JKT-BRN', 'jalan I Gusti Ngurah Rai, kelurahan penggilingan, kecamatan Cakung, Jakarta Timur 13940', 'Stasiun kereta api Buaran hanya melayani trayek dalam kota Jakarta dan kota sekitarnya (Bekasi). Unt'),
(12, 'Jakarta (Cawang)', 'JKT-CWG', ' jalan M.T Haryono dan jalan Tebet Timur Dalam 11, kelurahan Tebet Timur, kecamatan Tebet, Jakarta s', 'Stasiun kereta api Cawang hanya melayani trayek dalam kota Jakarta dan kota sekitarnya (Depok, Bogor'),
(13, 'Jakarta (Angke)', 'JKT-ANK', 'jalan Stasiun Angke, kelurahan Jembatan Lima, kecamatan Tambora, Jakarta Barat 11250', 'Stasiun kereta api  Angke  hanya melayani trayek dalam kota Jakarta dan kota sekitarnya (Depok, Bogo'),
(14, 'Jakarta (Duren Kalibata)', 'JKT-DRKBT', 'apit jalan Rawajati Barat, jalan Pengadegan, jalan Makam Pahlawan Kalibata, kelurahan Rawajati, keca', 'Stasiun kereta api    Duren Kalibata   melayani trayek dalam kota Jakarta dan kota sekitarnya (Bogor'),
(15, 'Jakarta (Gambir)', 'JKT-GMBR', ' jalan Medan Merdeka Timur, kelurahan Gambir, kecamatan Gambir, Jakarta  Pusat 10110 telp (021) 3452', 'kereta api Gambir melayani trayek dalam kota Jakarta dan kota sekitarnya (Depok, Bogor, Bekasi) juga'),
(16, 'Jakarta (Ancol)', 'JKT-ANCL', 'jalan  Martadinata, Kelurahan Pademangan Timur, kecamatan Pademangan, Jakarta Uatara', 'Stasiun kereta api   ancol   melayani trayek dalam kota Jakarta. Untuk kota lainnya harus berpindah ');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL,
  `res_code` int(11) NOT NULL,
  `res_at` int(11) NOT NULL,
  `res_date` int(11) NOT NULL,
  `seat_cod` int(11) NOT NULL,
  `rute_id` int(11) NOT NULL,
  `berangkat_pada` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id` int(11) NOT NULL,
  `berangkat_pada` date NOT NULL,
  `rute_from` int(11) NOT NULL,
  `rute_to` int(11) NOT NULL,
  `price` bigint(50) NOT NULL,
  `transport_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `berangkat_pada`, `rute_from`, `rute_to`, `price`, `transport_id`) VALUES
(1, '2018-02-15', 10, 14, 500000, 1),
(4, '2018-02-15', 8, 15, 542500, 2),
(5, '2018-02-16', 9, 10, 217000, 2),
(6, '2018-02-22', 8, 13, 310000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `id` int(11) NOT NULL,
  `name_transport` varchar(255) NOT NULL,
  `seat_qty` bigint(30) NOT NULL,
  `transport_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `name_transport`, `seat_qty`, `transport_type`) VALUES
(1, 'Malabar 91', 140, 2),
(2, 'Mutiara Selatan 111', 150, 2),
(4, 'Citilink', 190, 1),
(6, 'Lion Air', 250, 1),
(8, 'garuda indonesia', 250, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport_type`
--

CREATE TABLE IF NOT EXISTS `transport_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_type`
--

INSERT INTO `transport_type` (`id`, `name`, `description`) VALUES
(1, 'pesawat', 'terbang'),
(13, 'Kereta Api', 'PT. KAI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `fullname`, `address`, `phone`, `level`) VALUES
(17, 'nadya', 'onad17@gmail.com', '$2y$10$hABeODXgaOXjw/fdf/tri.koKV1OV7Mm0CEk1OI8Vr.gupI.9WL9C', 'Nadya Kumala P', 'Sugihan, Pulung, Ponorogo', 89235898231, '2'),
(18, 'rani', 'ranisaraya@gmail.com', '$2y$10$BjhYg21BiQHx8HGTpiaRY.im9FPjd3UH/8KspNntPd.57AWnN6MuW', 'rani saras wiraya', 'Balong, Ponorogo', 89238121983, '1'),
(19, 'tya', 'tyaags@gmail.com', '$2y$10$BSF7yNYzYEL/bEkP9XQe9O8///kLJmnw9BhDBD7cpE.Cf6JBWv13C', 'tya agustin ani saputri', 'keniten, Ponorogo', 89573898456, '2'),
(23, 'Ahmad', 'achmed@gmail.com', '$2y$10$r3CI8MzhRt6OWFru/i6vzOEKo9lqT0Yno1XM5n13KdkFd5fx2sliC', 'Ahmad Muhamad', 'dubai', 8935783254, '2'),
(24, 'dedi', 'depas@gmail.co.id', '$2y$10$bTnDXtzm7PeYO8epfQ.rg.SQqsiRGgZSMUzq8jtgIz4kgjeCb2hpm', 'Dedi Prasetyo', 'Jl Sukarno Hata, Ponorogo', 89578723445, '1'),
(25, 'rendi', 'rensatr@gmail.com', '$2y$10$7xEs.rpoKknhSWdpdxKaX.jsNBEZL6CwGkux9gNHz6wFUDYrtyVSO', 'Rendi Saputro', 'Jl parang menang Cokromenggalan Ponorogo', 89335987212, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pull`
--
ALTER TABLE `pull`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_type`
--
ALTER TABLE `transport_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pull`
--
ALTER TABLE `pull`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transport_type`
--
ALTER TABLE `transport_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
