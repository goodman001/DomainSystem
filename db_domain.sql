-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2017 at 10:10 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_domain`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_balance`
--

CREATE TABLE IF NOT EXISTS `db_balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `accountnumber` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `accounttype` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optime` date NOT NULL,
  `currency` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `target` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_paymethod`
--

CREATE TABLE IF NOT EXISTS `db_paymethod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typenumber` int(11) NOT NULL,
  `method` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `db_paymethod`
--

INSERT INTO `db_paymethod` (`id`, `typenumber`, `method`) VALUES
(1, 0, 'Credit Card'),
(2, 1, 'PayPal'),
(3, 2, 'Bank Transfer'),
(4, 3, 'Cheque'),
(5, 4, 'E-Banking'),
(6, 6, 'User Credit '),
(7, 7, 'Google Checkout '),
(8, 8, 'Alipay'),
(9, 9, 'AsiaPay');

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

CREATE TABLE IF NOT EXISTS `db_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobtitle` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `overdue` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taxexemption` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `regtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `username`, `firstname`, `lastname`, `company`, `jobtitle`, `email`, `password`, `question`, `answer`, `address1`, `address2`, `city`, `state`, `postcode`, `country`, `phone`, `fax`, `overdue`, `taxexemption`, `currency`, `balance`, `status`, `regtime`) VALUES
(4, 'test', 'adfa', 'd', 'c', 'jon', 'net33ph@yeah.net', '1234', 'Where is your birthplace?', 'dfa', 'add', 'add2', 'City', 'STATE', 12345, 'UK', '223-523-463', '223-523-463', 'Enable', 'NO', 'EUR', 10.3, 1, '2017-02-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
