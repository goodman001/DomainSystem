-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2017 at 11:55 AM
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
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `accountnumber` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `accounttype` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optime` datetime NOT NULL,
  `currency` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `target` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `db_balance`
--

INSERT INTO `db_balance` (`id`, `username`, `amount`, `accountnumber`, `accounttype`, `optime`, `currency`, `target`) VALUES
(2, 'test1', 3.00, '6325648563546', 'Credit Card', '2017-02-24 00:00:00', 'EUR', 1),
(4, 'test', 2.00, '6325648563546', 'Credit Card', '2017-02-24 00:00:00', 'EUR', 0),
(12, 'test', 3.50, '6325648563546', 'Credit Card', '2017-02-24 00:00:00', 'EUR', 1),
(13, 'test', 1.10, '6325648563546', 'Credit Card', '2017-02-24 00:00:00', 'EUR', 1),
(14, 'test', 1.20, '9638527412635', 'Credit Card', '2017-02-25 00:00:00', 'EUR', 1),
(15, 'test', 1.20, '9638527412635', 'Credit Card', '2017-02-25 00:00:00', 'EUR', 1),
(16, 'test', 1.20, '9638527412635', 'Credit Card', '2017-02-25 00:00:00', 'EUR', 1),
(17, 'test', 1.20, '9638527412635', 'Credit Card', '2017-02-25 00:00:00', 'EUR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_configure`
--

CREATE TABLE IF NOT EXISTS `db_configure` (
  `id` int(11) NOT NULL DEFAULT '0',
  `domainprice` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_configure`
--

INSERT INTO `db_configure` (`id`, `domainprice`) VALUES
(1, 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `db_domainmgr`
--

CREATE TABLE IF NOT EXISTS `db_domainmgr` (
  `id` int(11) NOT NULL,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usename` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `registrar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `registrationdate` datetime NOT NULL,
  `expirydate` datetime NOT NULL,
  `nextduedate` datetime NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `mainforward` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DNSmgr` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IDprotect` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `orderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_item`
--

CREATE TABLE IF NOT EXISTS `db_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `orderID` int(11) NOT NULL,
  `registrar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `IDprotect` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_order`
--

CREATE TABLE IF NOT EXISTS `db_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` bigint(20) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `transactionID` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `refund` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `refundaccount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `invoicedate` datetime NOT NULL,
  `duedate` datetime NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderID` (`orderID`)
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
-- Table structure for table `db_premiumdomain`
--

CREATE TABLE IF NOT EXISTS `db_premiumdomain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domainname` (`domainname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` int(11) NOT NULL DEFAULT '0',
  `regtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `username`, `firstname`, `lastname`, `company`, `jobtitle`, `email`, `password`, `question`, `answer`, `address1`, `address2`, `city`, `state`, `postcode`, `country`, `phone`, `fax`, `overdue`, `taxexemption`, `currency`, `balance`, `status`, `regtime`) VALUES
(4, 'test', 'adfa', 'd', 'c', 'jon', 'net33ph@yeah.net', '1234', 'Where is your birthplace?', 'dfa', 'add', 'add2', 'City', 'STATE', 12345, 'UK', '223-523-463', '223-523-463', 'Enable', 'NO', 'EUR', 10.40, 1, '2017-02-24 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
