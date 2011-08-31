-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2011 at 08:34 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mihinlanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Sri Lanka'),
(2, 'Dubai'),
(3, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` enum('APPROVED','NOT APPROVED') COLLATE utf8_unicode_ci DEFAULT 'APPROVED',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `code`, `place`, `country_id`, `status`, `order`) VALUES
(1, 'CMB', 'Colombo', 1, 'APPROVED', NULL),
(3, 'DXB', 'Dubai', 1, 'APPROVED', 3),
(4, 'GAY', 'Gaya', 1, 'APPROVED', 4),
(7, 'TRZ', 'Tiruchirapalli', 2, 'APPROVED', 4),
(8, 'VNS', 'Varanasi', 2, 'APPROVED', NULL),
(15, 'KWI', 'Kuwait ', 1, 'APPROVED', NULL),
(16, 'MLE', 'Maldives ', 1, 'APPROVED', NULL),
(17, 'DAC', 'Dhaka', 1, 'APPROVED', NULL),
(18, 'CGK', 'Jakarta', 1, 'APPROVED', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `travel_agents`
--

CREATE TABLE IF NOT EXISTS `travel_agents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` text CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `phone2` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `status` enum('APPROVED','NOT_APPROVED','UNDER_REVIEW') CHARACTER SET latin1 NOT NULL DEFAULT 'APPROVED',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `destination_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `travel_agents`
--

INSERT INTO `travel_agents` (`id`, `country_id`, `name`, `address`, `email`, `email2`, `phone`, `phone2`, `status`, `order`) VALUES
(1, 2, 'Abdalllah AL Khayyal Tours', '1071 , Sharajah ,', 'operations@alkhayaltours.com', 'accounts@alkhayaltours.com', '0508481307', NULL, 'APPROVED', NULL),
(5, 2, 'Airlink International Burdubai', 'PO BOX 10466, UAE', 'raju@airlinkdubai.ae', '\r\n', '00971043511633', '00971043516262 ', 'APPROVED', NULL),
(6, 2, 'AL Arabi Travel Agency', 'AL Kawaakeb Bulding Block C Sheikh Road, ', 'TinaP@alarabitravel.ae', 'accounts@alarabitravel.aee', '971506502291', '97143435405', 'APPROVED', NULL),
(7, 2, 'AL Rostamani Travels Co LLC', 'Al rostamani Blog Al Maktoum Rd DXB ', 'joyf@alrostamanigroup.ae', 'mohand@alrostamanigroup.ae', '0097142956777', NULL, 'APPROVED', NULL),
(8, 2, 'AL Kharji Travels', 'Ummul Qawin, DXB ', 'haris@houseoftours.com', 'sales@houseoftours.com ', '067654440 ', '0559844304 ', 'APPROVED', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `travel_agents`
--
ALTER TABLE `travel_agents`
  ADD CONSTRAINT `travel_agents_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
