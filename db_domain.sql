-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 11:53 AM
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
  `IDprotect` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `orderID` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jobtitle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ns1` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ns2` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ns3` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ns4` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_domainprofile`
--

CREATE TABLE IF NOT EXISTS `db_domainprofile` (
  `id` int(11) NOT NULL,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL
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
  `IDprotect` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `price` decimal(10,2) NOT NULL,
  `years` int(11) NOT NULL DEFAULT '1',
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
  `issuedate` datetime NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `refund` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `refundaccount` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `invoicedate` datetime NOT NULL,
  `duedate` datetime NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paymethod` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderID` (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_paymethod`
--

CREATE TABLE IF NOT EXISTS `db_paymethod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `useable` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `db_paymethod`
--

INSERT INTO `db_paymethod` (`id`, `method`, `useable`) VALUES
(1, 'Credit Card', 'Y'),
(2, 'PayPal', 'Y'),
(3, 'Bank Transfer', 'Y'),
(4, 'Cheque', 'Y'),
(5, 'E-Banking', 'Y'),
(6, 'User Credit ', 'Y'),
(7, 'Google Checkout ', 'Y'),
(8, 'Alipay', 'Y'),
(9, 'AsiaPay', 'Y');

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
-- Table structure for table `db_registrar`
--

CREATE TABLE IF NOT EXISTS `db_registrar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registrar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `db_registrar`
--

INSERT INTO `db_registrar` (`id`, `registrar`, `status`) VALUES
(1, 'eNom', 'Y'),
(2, 'GoDaddy', 'Y'),
(3, 'ResellerClub', 'Y'),
(4, 'Namecheap', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `db_transaction`
--

CREATE TABLE IF NOT EXISTS `db_transaction` (
  `id` int(11) NOT NULL,
  `transactionID` bigint(20) NOT NULL,
  `username` int(11) NOT NULL,
  `orderID` bigint(20) NOT NULL,
  `InvoiceID` bigint(20) unsigned NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `paydate` datetime NOT NULL,
  `paymethod` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `accountnumber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `settleamount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
