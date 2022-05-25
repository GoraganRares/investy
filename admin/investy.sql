-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2022 at 02:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investy`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) DEFAULT NULL,
  `locatie` varchar(255) DEFAULT 'Romania',
  `email` varchar(255) DEFAULT NULL,
  `psw` varchar(255) DEFAULT NULL,
  `poza` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
  `vkey` varchar(255) DEFAULT NULL,
  `verify` varchar(255) DEFAULT 'nu',
  `creat` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `nume`, `locatie`, `email`, `psw`, `poza`, `rol`, `vkey`, `verify`, `creat`) VALUES
(1, 'Robert Mtk', 'Romania', 'lemapaul28@yahoo.com', '$2y$10$T3E3cxx692.LkHyalSyz4OEwVoPpI3AZTYL/4lwVYYnSTwDcajkN6', '', 'admin', '10ab46d709e29241be34627feb737525', 'da', '2022-05-07 20:11:55'),
(3, 'George', 'Romania', 'lemapaul28@yahoo.com', '$2y$10$t55ly1ECtb3.spht3XC6cuqpaM9HW8nml.vujsUcVHie0i0wfMnOq', NULL, 'investitor', 'a8d26f8e2f9bcbb894bf99eab6d74853', 'nu', '2022-05-07 22:34:36'),
(4, 'Vasile', 'Romania', 'test@yahoo.com', '$2y$10$xdOgb5GiyritkFb.9sP5H.MlpIARqFPZwYH.fQ/ImTUOgKZpBQj7y', NULL, 'investitor', '0f93b883c89d860fcf49314c8f7e7e06', 'nu', '2022-05-07 23:06:38'),
(5, 'Mihai', 'Romania', 'test3@yahoo.com', '$2y$10$CAiQkoy8XDE2fatJO11kFOilmAulnhfu1VZ/JZjHKRq2QnQC/amRa', NULL, 'blog', '61b1d6c10ecdc2c5196932e60cbd7dff', 'nu', '2022-05-07 23:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `idei`
--

DROP TABLE IF EXISTS `idei`;
CREATE TABLE IF NOT EXISTS `idei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `investitor` varchar(255) DEFAULT NULL,
  `flame` varchar(255) DEFAULT 'nu',
  `stare` varchar(255) DEFAULT NULL,
  `creat` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idei`
--

INSERT INTO `idei` (`id`, `titlu`, `client`, `investitor`, `flame`, `stare`, `creat`) VALUES
(1, 'Hotel pentru animalele de companie', '10ab46d709e29241be34627feb737525', 'a8d26f8e2f9bcbb894bf99eab6d74853', NULL, 'acceptata', '2022-05-07 23:43:07'),
(2, 'Magazin de produse proteice', '10ab46d709e29241be34627feb737525', '0f93b883c89d860fcf49314c8f7e7e06', 'da', 'refuzata', '2022-05-07 23:43:07'),
(3, 'Magazin online de tablouri personalizate', '10ab46d709e29241be34627feb737525', '0f93b883c89d860fcf49314c8f7e7e06', 'da', 'refuzata', '2022-05-07 23:43:07'),
(4, 'Hotel pentru animalele de companie', '10ab46d709e29241be34627feb737525', 'a8d26f8e2f9bcbb894bf99eab6d74853', NULL, 'wait', '2022-05-07 23:43:20'),
(5, 'Magazin de produse proteice', '10ab46d709e29241be34627feb737525', 'a8d26f8e2f9bcbb894bf99eab6d74853', NULL, 'acceptata', '2022-05-07 23:43:20'),
(6, 'Magazin online de tablouri personalizate', '10ab46d709e29241be34627feb737525', '0f93b883c89d860fcf49314c8f7e7e06', NULL, 'wait', '2022-05-07 23:43:20'),
(7, 'Service de reaparatii hardware', '10ab46d709e29241be34627feb737525', 'a8d26f8e2f9bcbb894bf99eab6d74853', NULL, 'acceptata', '2022-05-07 23:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `notificari`
--

DROP TABLE IF EXISTS `notificari`;
CREATE TABLE IF NOT EXISTS `notificari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) DEFAULT NULL,
  `descriere` varchar(255) DEFAULT NULL,
  `destinatar` varchar(255) DEFAULT NULL,
  `creat` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificari`
--

INSERT INTO `notificari` (`id`, `titlu`, `descriere`, `destinatar`, `creat`) VALUES
(1, 'Marius a acceptat o idee de afacere', 'aceasta este descrierea notificarii', '10ab46d709e29241be34627feb737525', '2022-05-08 20:48:27'),
(2, 'George a acceptat o idee de afacere', 'aceasta este descrierea notificarii', '10ab46d709e29241be34627feb737525', '2022-05-08 20:48:27'),
(3, 'Mihai a acceptat o idee de afacere', 'aceasta este descrierea notificarii', '10ab46d709e29241be34627feb737525', '2022-05-08 20:48:27'),
(4, 'Alina a acceptat o idee de afacere', 'aceasta este descrierea notificarii', '10ab46d709e29241be34627feb737525', '2022-05-08 20:48:27'),
(5, 'Claudiu a acceptat o idee de afacere', 'aceasta este descrierea notificarii', '10ab46d709e29241be34627feb737525', '2022-05-08 20:48:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
