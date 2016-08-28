-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2016 at 07:38 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank_gamification`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `source_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `username`, `password`, `fname`, `lname`, `type`, `source_id`) VALUES
(1, 'admin', 'admin', 'Enrik', 'Sabalvaro', 'client', '57c2316730490');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `available_balance` varchar(50) NOT NULL,
  `current_balance` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `account_no`, `currency`, `account_name`, `status`, `available_balance`, `current_balance`) VALUES
(1, '57c2316730490', 'php', 'UBP 57c2316730490', 'ACTIVE', '1000000', '1500000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gamification`
--

CREATE TABLE IF NOT EXISTS `tbl_gamification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `exptoearn` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `level_type` varchar(50) NOT NULL,
  `percent` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gamification`
--

INSERT INTO `tbl_gamification` (`id`, `userid`, `level`, `exptoearn`, `experience`, `level_type`, `percent`) VALUES
(1, '57c2316730490', '1', '500', '110', 'Trainee', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_titles`
--

CREATE TABLE IF NOT EXISTS `tbl_level_titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  `titles` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_level_titles`
--

INSERT INTO `tbl_level_titles` (`id`, `level`, `titles`) VALUES
(1, '1', 'Trainee'),
(2, '2', 'Clerk'),
(3, '3', 'Officer'),
(4, '4', 'Manager'),
(5, '5', 'Senior Manager'),
(6, '6', 'Senior Manager'),
(7, '7', 'Assistant General Manager'),
(8, '8', 'Deputy General Manager'),
(9, '9', 'General Manager'),
(10, '10', 'Chief Financial Officer'),
(11, '11', 'Chief Executive Officer'),
(12, '12', 'President');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `channel_id` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `source_id` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `target_currency` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`channel_id`, `transaction_id`, `source_id`, `currency`, `target`, `target_currency`, `amount`) VALUES
('BLUEMIX', '57c22aa4cabe7', '', 'php', '', 'php', ''),
('BLUEMIX', '57c22b544de56', '000000020001', 'php', '', 'php', ''),
('BLUEMIX', '57c22bd764e97', '000000020001', 'php', '', 'php', ''),
('BLUEMIX', '57c22bdc233bd', '000000020001', 'php', '', 'php', ''),
('BLUEMIX', '57c22be96a529', '000000020001', 'php', '00000020', 'php', '150'),
('BLUEMIX', '57c22bead66bc', '000000020001', 'php', '00000020', 'php', '150'),
('BLUEMIX', '57c22c0e31a40', '000000020001', 'php', '00000020', 'php', '150'),
('BLUEMIX', '57c22c11892f7', '000000020001', 'php', '', 'php', ''),
('BLUEMIX', '57c22c34929f7', '000000020001', 'php', '00000000020', 'php', '150'),
('BLUEMIX', '57c235e775051', '000000020001', 'php', '3', 'php', '150'),
('BLUEMIX', '57c2365ad5780', '000000020001', 'php', '21031049r2-014', 'php', '150'),
('BLUEMIX', '57c236df7c67a', '', 'php', '21031049r2-014', 'php', '1500'),
('BLUEMIX', '57c2375c03d0a', '', 'php', '21031049r2-014', 'php', '1500'),
('BLUEMIX', '57c23773c8068', '', 'php', '21031049r2-014', 'php', '1500'),
('BLUEMIX', '57c237db3a2ce', '57c2316730490', 'php', '09203917-F', 'php', '15000'),
('BLUEMIX', '57c2411212d38', '57c2316730490', 'php', '', 'php', ''),
('BLUEMIX', '57c24146bca57', '57c2316730490', 'php', '', 'php', ''),
('BLUEMIX', '57c244dee7356', '57c2316730490', 'php', '20123', 'php', '120'),
('BLUEMIX', '57c24511e77d4', '57c2316730490', 'php', '201234567890', 'php', '120'),
('BLUEMIX', '57c249b752f05', '57c2316730490', 'php', '20393213', 'php', '3000'),
('BLUEMIX', '57c249cf42d28', '57c2316730490', 'php', '20393213', 'php', '3000'),
('BLUEMIX', '57c249f909277', '57c2316730490', 'php', '20393213', 'php', '3000'),
('BLUEMIX', '57c24a9c1235b', '57c2316730490', 'php', '3201838921', 'php', '100'),
('BLUEMIX', '57c24aee25dd1', '57c2316730490', 'php', '13213123', 'php', '100'),
('BLUEMIX', '57c24b41e41bf', '57c2316730490', 'php', '321312', 'php', '50'),
('BLUEMIX', '57c24b6e86902', '57c2316730490', 'php', '321312', 'php', '50'),
('BLUEMIX', '57c24b9927278', '57c2316730490', 'php', '23-1090920', 'php', '100'),
('BLUEMIX', '57c24baf44313', '57c2316730490', 'php', '321939218', 'php', '100'),
('BLUEMIX', '57c24d5463f1e', '57c2316730490', 'php', '21-321321', 'php', '1000'),
('BLUEMIX', '57c24f4b8d606', '57c2316730490', 'php', '21321321', 'php', '100000'),
('BLUEMIX', '57c24f8b6d429', '57c2316730490', 'php', '21312321', 'php', '3123'),
('BLUEMIX', '57c24ffc6e40a', '57c2316730490', 'php', '2', 'php', '100'),
('BLUEMIX', '57c25014cef6f', '57c2316730490', 'php', '321938', 'php', '10000'),
('BLUEMIX', '57c2502939eb7', '57c2316730490', 'php', '2-1309', 'php', '50000'),
('BLUEMIX', '57c250a75384f', '57c2316730490', 'php', '100', 'php', '321'),
('BLUEMIX', '57c250bf3be08', '57c2316730490', 'php', '30921839', 'php', '50000'),
('BLUEMIX', '57c2512e51199', '57c2316730490', 'php', '321', 'php', '100'),
('BLUEMIX', '57c25486b22a6', '57c2316730490', 'php', '332103921', 'php', '300'),
('BLUEMIX', '57c26a3e8f02c', '57c2316730490', 'php', '321-0893092187', 'php', '500'),
('BLUEMIX', '57c26aa2d3976', '57c2316730490', 'php', '', 'php', ''),
('BLUEMIX', '57c26ab0ce92c', '57c2316730490', 'php', '321321', 'php', '500'),
('BLUEMIX', '57c26cbf93ce2', '57c2316730490', 'php', '213092107831', 'php', '500'),
('BLUEMIX', '57c26fbf9c88c', '57c2316730490', 'php', '12032981793821', 'php', '10000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
