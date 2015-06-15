-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 03:01 PM
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
  `md` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gid`, `gejala`, `pid`, `mb`, `md`) VALUES
(1, 'g01', 'Demam', 'p03', 0.2, 0.6),
(2, 'g01', 'Demam', 'p02', 0.2, 0.4),
(3, 'g02', 'Nyeri Sendi, Bengkak, Kaku', 'p02', 0.5, 0.6),
(4, 'g02', 'Nyeri Sendi, Bengkak, Kaku', 'p01', 0.7, 0.4),
(5, 'g03', 'Muntah', 'p03', 0.4, 0.7),
(6, 'g04', 'Dehidrasi', 'p04', 0.3, 0.8),
(7, 'g05', 'Tenggorokan Gatal', 'p05', 1, 0),
(8, 'g06', 'Flu', 'p06', 0.5, 0.4),
(9, 'g07', 'Gampang Lelah, Kehilangan nafsu makan', 'p07', 0.3, 0.6),
(10, 'g07', 'Gampang Lelah, Kehilangan nafsu makan', 'p10', 0.75, 0.4),
(11, 'g08', 'Mual, Muntah, Sakit Kepala', 'p09', 0.45, 0.7),
(12, 'g08', 'Mual, Muntah, Sakit Kepala', 'p08', 0.6, 0.3),
(13, 'g09', 'Nafas Berat', 'p09', 0.85, 0.35),
(14, 'g10', 'Sesak nafas, Mudah lelah, Mual', 'p08', 0.65, 0.55),
(15, 'g10', 'Sesak nafas, Mudah lelah, Mual', 'p10', 0.45, 0.6);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
