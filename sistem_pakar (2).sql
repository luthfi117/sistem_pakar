-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 03:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
`id` int(11) NOT NULL,
  `gid` varchar(5) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `pid` varchar(5) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL,
  `cf` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gid`, `gejala`, `pid`, `mb`, `md`, `cf`) VALUES
(1, 'g01', 'Demam', 'p03', 0.2, 0.6, -0.5),
(2, 'g01', 'Demam', 'p02', 0.2, 0.4, -0.25),
(3, 'g02', 'Nyeri Sendi, Bengkak, Kaku', 'p02', 0.5, 0.6, -0.2),
(4, 'g02', 'Nyeri Sendi, Bengkak, Kaku', 'p01', 0.7, 0.4, 0.5),
(5, 'g03', 'Muntah', 'p03', 0.4, 0.7, -0.5),
(6, 'g04', 'Dehidrasi', 'p04', 0.3, 0.8, -0.714286),
(7, 'g05', 'Tenggorokan Gatal', 'p05', 1, 0, 1),
(8, 'g06', 'Flu', 'p06', 0.5, 0.4, 0.166667),
(9, 'g07', 'Gampang Lelah, Kehilangan nafsu makan', 'p07', 0.3, 0.6, -0.428571),
(10, 'g07', 'Gampang Lelah, Kehilangan nafsu makan', 'p10', 0.75, 0.4, 0.583333),
(11, 'g08', 'Mual, Muntah, Sakit Kepala', 'p09', 0.45, 0.7, -0.454545),
(12, 'g08', 'Mual, Muntah, Sakit Kepala', 'p08', 0.6, 0.3, 0.428571),
(13, 'g09', 'Nafas Berat', 'p09', 0.85, 0.35, 0.769231),
(14, 'g10', 'Sesak nafas, Mudah lelah, Mual', 'p08', 0.65, 0.55, 0.222222),
(15, 'g10', 'Sesak nafas, Mudah lelah, Mual', 'p10', 0.45, 0.6, -0.272727);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` varchar(5) NOT NULL DEFAULT '',
  `nama_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this is Penyakit';

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama_penyakit`) VALUES
('p01', 'Rematik'),
('p02', 'Radang Sendi'),
('p03', 'Demam Berdarah'),
('p04', 'Malaria'),
('p05', 'Jantung Koroner'),
('p06', 'Flu'),
('p07', 'Tumor'),
('p08', 'Tifus'),
('p09', 'Asma'),
('p10', 'Anemia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `g01` float NOT NULL,
  `g02` float NOT NULL,
  `g03` float NOT NULL,
  `g04` float NOT NULL,
  `g05` float NOT NULL,
  `g06` float NOT NULL,
  `g07` float NOT NULL,
  `g08` float NOT NULL,
  `g09` float NOT NULL,
  `g10` float NOT NULL,
  `hasil` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `lokasi`, `g01`, `g02`, `g03`, `g04`, `g05`, `g06`, `g07`, `g08`, `g09`, `g10`, `hasil`) VALUES
(1, 'Zuhri', 'khilaf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 'brolin', 'ohyeah', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 'brolin', 'cathur', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 'Brolin', 'CATHUR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 'CATHUR', 'INVALID', 0.2, 0.4, 0.5, 0, 0, 0, 0, 0, 0, 0, ''),
(6, 'Cathur part 2', 'easaaa', 0.3, 0.5, 0.6, 0, 0, 0, 0, 0, 0, 0, ''),
(7, 'satu', 'satu_tempat', 0.5, 0.3, 0.6, 0.5, 0.6, 0.7, 0.5, 0.3, 0.6, 0.4, ''),
(8, 'satu', 'satu_tempat', 0.5, 0.3, 0.6, 0.5, 0.6, 0.7, 0.5, 0.3, 0.6, 0.4, ''),
(9, 'Asdasd', 'ksksksks', -0.4, 0, 0.4, 0.4, 0, -0.7, -0.4, -0.4, 0, 0, ''),
(10, 'Stev Young', 'Semarang', -0.4, -0.7, 0.7, 1, -1, -0.7, -0.4, -0.7, -0.4, -0.7, 'Rematik'),
(11, 'Sanusi', 'Semarang', -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, 'Malaria'),
(12, 'Zuhri1', 'Jepara', 1, -0.7, -0.7, -0.7, -1, 0, 0.4, -1, -0.7, -0.4, 'Malaria'),
(13, 'Zuhri2', 'Jepara', 1, -1, -0.4, -1, -1, -1, -1, -1, -1, -1, 'Malaria'),
(14, 'Youngky', 'Semarang', 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'Malaria'),
(15, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Rematik'),
(16, 'Sony Tulung', 'Jakarta', -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, 'Malaria'),
(17, 'Luthfi', 'Pudak Payung', 0, 0, 1, -0.4, 1, 1, 1, -1, -1, 1, 'Jantung Koroner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
