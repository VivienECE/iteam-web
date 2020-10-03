-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2020 at 05:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_calendar`
--

DROP TABLE IF EXISTS `event_calendar`;
CREATE TABLE IF NOT EXISTS `event_calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_calendar`
--

INSERT INTO `event_calendar` (`id`, `start`, `end`, `title`, `description`) VALUES
(1, '2020-10-01 14:00:00', '2020-10-01 15:30:00', 'Formation Linux', 'Formation Linux Debutant avec ECEBORG'),
(2, '2020-10-08 14:00:00', '2020-10-08 15:30:00', 'Formation Linux', 'Second Formation de Linux avec ECEBORG'),
(3, '2020-10-15 14:00:00', '2020-10-15 16:00:00', 'Tutoat', 'Aide en C/C++'),
(4, '2020-10-22 14:00:00', '2020-10-22 15:30:00', 'Formation GIT', 'Formation de GIT Debutant avec ECEBORG'),
(5, '2020-10-29 14:00:00', '2020-10-29 16:00:00', 'Tutoat', 'Aide en C/C++'),
(6, '2020-11-12 14:00:00', '2020-11-12 16:00:00', 'Tutoat', 'Aide en C/C++'),
(7, '2020-11-26 14:00:00', '2020-11-26 16:00:00', 'Tutoat', 'Aide en C/C++'),
(8, '2020-12-03 14:00:00', '2020-12-03 16:00:00', 'Tutoat', 'Suivi de Projets C/C++'),
(9, '2020-12-10 14:00:00', '2020-12-10 16:00:00', 'Tutoat', 'Suivi de Projets C/C++');

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `num_adresse` varchar(11) NOT NULL,
  `voie` varchar(255) NOT NULL,
  `complement` varchar(255) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `classe` varchar(4) NOT NULL,
  `td` varchar(10) NOT NULL,
  `statut` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
