-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 04:41 PM
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
  `rules` varchar(1000) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `db_auth_group`
--

INSERT INTO `db_auth_group` (`id`, `title`, `status`, `rules`, `description`) VALUES
(1, 'super-administrator', 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57', 'Have all site management permissions'),
(2, 'Sales-Client_information', 1, '1,2,3,4,5,6', 'Have the permissions on client information'),
(3, 'Sales-Order_Management', 1, '1,7,8,9,10,11,12,13,14,15', 'Have the permissions on order managerment'),
(4, 'Sales-Domain_Management', 1, '1,20,21,22,23,24,25,26,27,28,29,30', 'Have the permissions on domain managerment'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

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
(29, 'Admin-Domain-domainremove', 'domainremove', 1, '', 1, 'Domain'),
(30, 'Admin-Domain-domainadd', 'domainadd', 1, '', 1, 'domain'),
(31, 'Admin-Configure-general_web', 'general_web', 1, '', 1, 'Configure'),
(32, 'Admin-Configure-general_language', 'general_language', 1, '', 1, 'Configure'),
(33, 'Admin-Configure-languagesetting', 'languagesetting', 1, '', 1, 'Configure'),
(34, 'Admin-Configure-general_domain', 'general_domain', 1, '', 1, 'Configure'),
(35, 'Admin-Configure-general_mail', 'general_mail', 1, '', 1, 'Configure'),
(36, 'Admin-Configure-general_credit', 'general_credit', 1, '', 1, 'Configure'),
(37, 'Admin-Configure-security', 'security', 1, '', 1, 'Configure'),
(38, 'Admin-Configure-adminlist', 'adminlist', 1, '', 1, 'Configure'),
(39, 'Admin-Configure-admindetail', 'admindetail', 1, '', 1, 'Configure'),
(40, 'Admin-Configure-admindelete', 'admindelete', 1, '', 1, 'Configure'),
(41, 'Admin-Configure-adminupdate', 'adminupdate', 1, '', 1, 'Configure'),
(42, 'Admin-Configure-adminadd', 'adminadd', 1, '', 1, 'Configure'),
(43, 'Admin-Configure-adminrolelist', 'adminrolelist', 1, '', 1, 'Configure'),
(44, 'Admin-Configure-adminroleadd', 'adminroleadd', 1, '', 1, 'Configure'),
(45, 'Admin-Configure-pricesetting', 'pricesetting', 1, '', 1, 'Configure'),
(46, 'Admin-Configure-priceupdate', 'priceupdate', 1, '', 1, 'Configure'),
(47, 'Admin-Configure-pricetools', 'pricetools', 1, '', 1, 'Configure'),
(48, 'Admin-Configure-premiumlist', 'premiumlist', 1, '', 1, 'Configure'),
(49, 'Admin-Configure-premiumadd', 'premiumadd', 1, '', 1, 'Configure'),
(50, 'Admin-Configure-premiumdel', 'premiumdel', 1, '', 1, 'Configure'),
(51, 'Admin-Configure-premiumdetail', 'premiumdetail', 1, '', 1, 'Configure'),
(52, 'Admin-Configure-premiumedit', 'premiumedit', 1, '', 1, 'Configure'),
(53, 'Admin-Configure-paymentlist', 'paymentlist', 1, '', 1, 'Configure'),
(54, 'Admin-Configure-currencies', 'currencies', 1, '', 1, 'Configure'),
(55, 'Admin-Configure-taxrules', 'taxrules', 1, '', 1, 'Configure'),
(56, 'Admin-Configure-promotion', 'promotion', 1, '', 1, 'Configure'),
(57, 'Admin-Configure-domainregistrar', 'domainregistrar', 1, '', 1, 'Configure');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `db_balance`
--

INSERT INTO `db_balance` (`id`, `username`, `amount`, `accountnumber`, `accounttype`, `optime`, `currency`, `target`) VALUES
(1, 'walkerman', 30.00, '5242245986762530', 'PayPal', '2017-03-31 15:28:52', 'HKD', 1);

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
  `expirydate` date NOT NULL,
  `nextduedate` date NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `autorenew` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `renew` int(11) NOT NULL DEFAULT '0',
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_fakedomains`
--

CREATE TABLE IF NOT EXISTS `db_fakedomains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domainname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `username`, `firstname`, `lastname`, `company`, `jobtitle`, `email`, `password`, `address1`, `address2`, `city`, `state`, `postcode`, `country`, `phone`, `fax`, `overdue`, `taxexemption`, `currency`, `balance`, `status`, `regtime`) VALUES
(5, 'walkerman', 'Jerrie', 'Donner', 'Applied Industrial Technologies, Inc.', 'Property Assessor', 'mic_welker@arvinmeritor.info', '12345678', '4707 Archwood Avenue', '4707 Archwood Avenue', 'Cheyenne', 'Wyoming', 82001, 'USA', '307-777-3463', '307-777-3463', 'Enable', 'NO', 'HKD', 30.00, 'active', '2017-03-31 15:09:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
