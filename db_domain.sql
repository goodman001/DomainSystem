-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2017 at 09:11 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

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
-- Table structure for table `db_admins`
--

CREATE TABLE IF NOT EXISTS `db_admins` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'EN',
  `roleid` int(11) NOT NULL,
  `regtime` datetime NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_admins`
--

INSERT INTO `db_admins` (`uid`, `username`, `password`, `email`, `firstname`, `lastname`, `language`, `roleid`, `regtime`) VALUES
(1, 'root', 'root', 'admin@admin.com', 'firstname', 'lastname', 'EN', 1, '2017-03-02 00:00:00'),
(2, 'sale1', '123456', 'sale1@gamil.com', 'Fn', 'LN', 'EN', 3, '2017-03-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `db_auth_group`
--

CREATE TABLE IF NOT EXISTS `db_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `db_auth_group`
--

INSERT INTO `db_auth_group` (`id`, `title`, `status`, `rules`, `description`) VALUES
(1, 'super-administrator', 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29', 'Have all site management permissions'),
(2, 'Sales-Client_information', 1, '1,2,3,4,5,6', 'Have the permissions on client information'),
(3, 'Sales-Order_Management', 1, '1,7,8,9,10,11,12,13,14,15', 'Have the permissions on order managerment'),
(4, 'Sales-Domain_Management', 1, '1,20,21,22,23,24,25,26,27,28,29', 'Have the permissions on domain managerment'),
(5, 'Sales-Transaction_Management', 1, '1,16,17,18,19', 'Have the permissions on transaction managerment'),
(6, 'SupportOperator', 1, '1', 'Have the permissions on support opertation'),
(7, 'TemplateEdit', 1, '1', 'Have the permissions on template edit');

-- --------------------------------------------------------

--
-- Table structure for table `db_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `db_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_auth_group_access`
--

INSERT INTO `db_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_auth_rule`
--

CREATE TABLE IF NOT EXISTS `db_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `type` int(11) NOT NULL DEFAULT '1',
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `db_auth_rule`
--

INSERT INTO `db_auth_rule` (`id`, `name`, `title`, `status`, `condition`, `type`, `description`) VALUES
(1, 'Admin-Profile-index', 'Profile', 1, '', 1, 'admin-homepage'),
(2, 'Admin-Customer-customerlist', 'customerlist', 1, '', 1, 'Customer'),
(3, 'Admin-Customer-customeradd', 'customeradd', 1, '', 1, 'Customer'),
(4, 'Admin-Customer-customerdetail', 'customerdetail', 1, '', 1, 'Customer'),
(5, 'Admin-Customer-updateprofile', 'updateprofile', 1, '', 1, 'Customer'),
(6, 'Admin-Customer-customernew', 'customernew', 1, '', 1, 'Customer'),
(7, 'Admin-Order-orderlist', 'orderlist', 1, '', 1, 'Order'),
(8, 'Admin-Order-orderdetail', 'orderdetail', 1, '', 1, 'Order'),
(9, 'Admin-Order-orderdel', 'orderdel', 1, '', 1, 'Order'),
(10, 'Admin-Order-delitem', 'delitem', 1, '', 1, 'Order'),
(11, 'Admin-Order-orderaccept', 'orderaccept', 1, '', 1, 'Order'),
(12, 'Admin-Order-orderrefund', 'orderrefund', 1, '', 1, 'Order'),
(13, 'Admin-Order-ordercancle', 'ordercancle', 1, '', 1, 'Order'),
(14, 'Admin-Order-itemedit', 'itemedit', 1, '', 1, 'Order'),
(15, 'Admin-Order-itemadd', 'itemadd', 1, '', 1, 'Order'),
(16, 'Admin-Transaction-translist', 'translist', 1, '', 1, 'Transaction'),
(17, 'Admin-Transaction-transdetail', 'transdetail', 1, '', 1, 'Transaction'),
(18, 'Admin-Transaction-transupdate', 'transupdate', 1, '', 1, 'Transaction'),
(19, 'Admin-Transaction-transdel', 'transdel', 1, '', 1, 'Transaction'),
(20, 'Admin-Domain-domainlist', 'domainlist', 1, '', 1, 'Domain'),
(21, 'Admin-Domain-premiumlist', 'premiumlist', 1, '', 1, 'Domain'),
(22, 'Admin-Domain-premiumadd', 'premiumadd', 1, '', 1, 'Domain'),
(23, 'Admin-Domain-premiumdel', 'premiumdel', 1, '', 1, 'Domain'),
(24, 'Admin-Domain-domaindetail', 'domaindetail', 1, '', 1, 'Domain'),
(25, 'Admin-Domain-domainupdate', 'domainupdate', 1, '', 1, 'Domain'),
(26, 'Admin-Domain-domainprofileupdate', 'domainprofileupdate', 1, '', 1, 'Domain'),
(27, 'Admin-Domain-domaintools', 'domaintools', 1, '', 1, 'Domain'),
(28, 'Admin-Domain-domainsendemail', 'domainsendemail', 1, '', 1, 'Domain'),
(29, 'Admin-Domain-domainremove', 'domainremove', 1, '', 1, 'Domain');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_configure`
--

CREATE TABLE IF NOT EXISTS `db_configure` (
  `id` int(11) NOT NULL DEFAULT '0',
  `domainprice` decimal(10,2) NOT NULL,
  `securitytimes` int(11) NOT NULL DEFAULT '15',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_configure`
--

INSERT INTO `db_configure` (`id`, `domainprice`, `securitytimes`) VALUES
(1, 10.00, 12);

-- --------------------------------------------------------

--
-- Table structure for table `db_domainmgr`
--

CREATE TABLE IF NOT EXISTS `db_domainmgr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `registrar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `registrationdate` datetime NOT NULL,
  `expirydate` datetime NOT NULL,
  `nextduedate` datetime NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `autorenew` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
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
  `ns4` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domainname` (`domainname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `db_domainmgr`
--

INSERT INTO `db_domainmgr` (`id`, `domainname`, `username`, `registrar`, `registrationdate`, `expirydate`, `nextduedate`, `status`, `autorenew`, `mainforward`, `DNSmgr`, `IDprotect`, `orderID`, `email`, `firstname`, `lastname`, `company`, `jobtitle`, `address1`, `address2`, `city`, `state`, `country`, `postcode`, `phone`, `fax`, `ns1`, `ns2`, `ns3`, `ns4`) VALUES
(7, 'hikcidef.com', 'test', 'eNom', '2017-03-29 21:55:07', '2037-03-31 00:07:01', '2037-03-31 00:07:01', 'active', 'N', '', '', 'N', 1490890222, 'sa@xx.com', 'fn', 'ln', 'c', 'job', 'ad', 'ad2', 'city', 'state', 'uk', 123456, '267-321-2291', '267-321-2291', '1.0.0.1', '2.0.0.1', '3.0.0.1', '4.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `db_fakedomains`
--

CREATE TABLE IF NOT EXISTS `db_fakedomains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_fakedomains`
--

INSERT INTO `db_fakedomains` (`id`, `domainname`) VALUES
(1, 'badhahahah.club'),
(2, 'hikcidef.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `db_item`
--

INSERT INTO `db_item` (`id`, `domainname`, `orderID`, `registrar`, `IDprotect`, `price`, `years`) VALUES
(22, 'hikcidef.com', 1490795707, 'eNom', 'N', 22.40, 2),
(23, 'hikcidef.com', 1490795848, 'eNom', 'N', 22.40, 10),
(24, 'hikcidef.com', 1490889783, 'eNom', 'N', 10.00, 1),
(25, 'hikcidef.com', 1490889945, 'eNom', 'N', 10.00, 10),
(26, 'hikcidef.com', 1490890021, 'eNom', 'N', 22.40, 10),
(27, 'hikcidef.com', 1490890222, 'eNom', 'N', 22.40, 10);

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
  `refundamount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `invoicedate` datetime NOT NULL,
  `duedate` datetime NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderID` (`orderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `db_order`
--

INSERT INTO `db_order` (`id`, `orderID`, `username`, `transactionID`, `issuedate`, `status`, `refund`, `refundamount`, `invoicedate`, `duedate`, `description`) VALUES
(20, 1490795707, 'test', 1490795808, '2017-03-29 21:55:07', 'active', 'N', 0.00, '2017-03-29 21:55:07', '2019-03-29 21:55:07', ''),
(21, 1490795848, 'test', 1490795949, '2017-03-29 21:57:28', 'active', 'N', 0.00, '2017-03-29 21:57:28', '2027-03-29 21:57:28', 'Renew domain hikcidef.com'),
(22, 1490889783, 'test', 1490889884, '2017-03-31 00:03:03', 'active', 'N', 0.00, '2017-03-31 00:03:03', '2018-03-31 00:03:03', 'Renew domain hikcidef.com'),
(23, 1490889945, 'test', 1490890046, '2017-03-31 00:05:45', 'active', 'N', 0.00, '2017-03-31 00:05:45', '2017-03-31 00:05:45', 'Renew domain hikcidef.com'),
(24, 1490890021, 'test', 1490890122, '2017-03-31 00:07:01', 'active', 'N', 0.00, '2017-03-31 00:07:01', '2017-03-31 00:07:01', 'Renew domain hikcidef.com'),
(25, 1490890222, 'test', 1490890323, '2017-03-31 00:10:22', 'active', 'N', 0.00, '2017-03-31 00:10:22', '2017-03-31 00:10:22', 'Renew domain hikcidef.com');

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
(6, 'User Credit ', 'N'),
(7, 'Google Checkout ', 'N'),
(8, 'Alipay', 'N'),
(9, 'AsiaPay', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `db_premium`
--

CREATE TABLE IF NOT EXISTS `db_premium` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `domainname` (`domainname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `db_premium`
--

INSERT INTO `db_premium` (`id`, `domainname`, `price`, `rate`) VALUES
(1, '.club', 30.00, 0.12),
(2, '.com', 20.00, 0.12),
(3, '.net', 12.00, 0.38),
(4, '.cn', 10.00, 0.38);

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactionID` bigint(20) NOT NULL,
  `clientname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `orderID` bigint(20) NOT NULL,
  `invoiceID` bigint(20) unsigned NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `paydate` datetime NOT NULL,
  `paymethod` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `accountnumber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `settleamount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transactionID` (`transactionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `db_transaction`
--

INSERT INTO `db_transaction` (`id`, `transactionID`, `clientname`, `orderID`, `invoiceID`, `description`, `paydate`, `paymethod`, `accountnumber`, `settleamount`) VALUES
(10, 1490795808, 'ss', 1490795707, 1490795707, 'I use the PayPal to pay for the order', '2017-03-29 21:55:07', 'PayPal', '9638527414', 44.80),
(11, 1490795949, 'ss', 1490795848, 1490795848, 'Renew the domain hikcidef.com', '2017-03-29 21:57:28', 'PayPal', '9638527414', 224.00),
(12, 1490889884, 'ss', 1490889783, 1490889783, 'Renew the domain hikcidef.com', '2017-03-31 00:03:03', 'PayPal', '9638527414', 10.00),
(13, 1490890046, 'ss', 1490889945, 1490889945, 'Renew the domain hikcidef.com', '2017-03-31 00:05:45', 'PayPal', '9638527414', 100.00),
(14, 1490890122, 'ss', 1490890021, 1490890021, 'Renew the domain hikcidef.com', '2017-03-31 00:07:01', 'PayPal', '9638527414', 224.00),
(15, 1490890323, 'ss', 1490890222, 1490890222, 'Renew the domain hikcidef.com', '2017-03-31 00:10:22', 'PayPal', '9638527414', 224.00);

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
  `status` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `regtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `username`, `firstname`, `lastname`, `company`, `jobtitle`, `email`, `password`, `question`, `answer`, `address1`, `address2`, `city`, `state`, `postcode`, `country`, `phone`, `fax`, `overdue`, `taxexemption`, `currency`, `balance`, `status`, `regtime`) VALUES
(4, 'test', 'adfa', 'd', 'c', 'jon', 'net33ph@yeah.net', '1234', 'Where is your birthplace?', 'dfa', 'add', 'add2', 'City', 'STATE', 12345, 'UK', '223-523-463', '223-523-463', 'Enable', 'NO', 'HKD', 10.40, 'active', '2017-02-24 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
