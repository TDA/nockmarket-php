-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2014 at 01:06 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nockbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_table`
--

CREATE TABLE IF NOT EXISTS `chat_table` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `chat_msg` varchar(2000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `chat_table`
--

INSERT INTO `chat_table` (`chat_id`, `username`, `chat_msg`, `timestamp`) VALUES
(9, 'sai', 'hhh', '2014-03-08 08:33:28'),
(10, 'sai', 'burp', '2014-03-08 09:01:12'),
(11, 'spc', 'ughasdh', '2014-03-08 09:08:06'),
(12, 'sai', 'ppp', '2014-03-08 09:10:11'),
(13, 'sai', 'sss', '2014-03-08 09:10:41'),
(14, 'sai', 'dumbo', '2014-03-08 09:11:25'),
(15, 'sai', 'iii', '2014-03-08 09:12:34'),
(16, 'sai', 'iii', '2014-03-08 09:12:34'),
(17, 'sai', 'iii', '2014-03-08 09:12:38'),
(18, 'sai', 'iii', '2014-03-08 09:12:38'),
(19, 'sai', 'burpydurp', '2014-03-08 09:14:22'),
(20, 'sai', 'hello', '2014-03-08 09:15:26'),
(21, 'sai', 'why me tlkn', '2014-03-08 09:15:54'),
(22, 'sai', 'is this workin', '2014-03-08 09:16:19'),
(23, 'sai', 'bro?', '2014-03-08 09:17:46'),
(24, 'sai', 'hulllppp!!', '2014-03-08 09:18:31'),
(25, 'sai', 'puhleez', '2014-03-08 09:19:26'),
(26, 'sai', '??', '2014-03-08 09:19:54'),
(27, 'sai', 'last try', '2014-03-08 09:20:49'),
(28, 'sai', 'maybe not', '2014-03-08 09:22:31'),
(29, 'sai', 'break', '2014-03-08 09:22:37'),
(30, 'sai', 'dbl break', '2014-03-08 09:22:54'),
(31, 'sai', 'dis work?', '2014-03-08 09:29:08'),
(32, 'sai', 'wil this?', '2014-03-08 09:30:19'),
(33, 'sai', 'atleast', '2014-03-08 09:31:19'),
(34, 'sai', 'this!!!', '2014-03-08 09:34:49'),
(35, 'sai', 'hhh', '2014-03-08 09:40:58'),
(36, 'sai', 'sss', '2014-03-08 09:42:26'),
(37, 'sai', 'ppp', '2014-03-08 09:42:50'),
(38, 'sai', 'qqq', '2014-03-08 09:45:23'),
(39, 'sai', 'ooo', '2014-03-08 09:46:11'),
(40, 'sai', 'poss', '2014-03-08 09:47:03'),
(41, 'spc', 'sure', '2014-03-08 09:48:05'),
(42, 'sai', 'this one?', '2014-03-08 09:50:26'),
(43, 'sai', 'not again!!', '2014-03-08 09:51:02'),
(44, 'sai', 'ohgod', '2014-03-08 09:52:06'),
(45, 'sai', 'super ma', '2014-03-08 09:53:34'),
(46, 'spc', 'what hapn?', '2014-03-08 09:54:18'),
(47, 'sai', 'i dunno', '2014-03-08 09:55:23'),
(48, 'sai', 'but this seems to work', '2014-03-08 09:55:33'),
(49, 'spc', 'really?', '2014-03-08 09:55:42'),
(50, 'spc', 'im not so sure...', '2014-03-08 09:55:55'),
(51, 'sai', 'how do u chk?', '2014-03-08 09:56:15'),
(52, 'spc', 'i dunno how to', '2014-03-08 09:56:34'),
(53, 'sai', 'annnnd?', '2014-03-08 09:58:43'),
(54, 'sai', 'gimme ideas!!', '2014-03-08 10:00:25'),
(55, 'sai', 'like now!!!', '2014-03-08 10:02:16'),
(56, 'sai', 'NOW!', '2014-03-08 10:02:43'),
(57, 'sai', '!!', '2014-03-08 10:03:26'),
(58, 'sai', '!!', '2014-03-08 10:03:54'),
(59, 'sai', '!!!!!', '2014-03-08 10:04:51'),
(60, 'sai', 'last try brah!', '2014-03-08 10:06:24'),
(61, 'sai', 'wil dis workkkk?', '2014-03-08 10:07:37'),
(62, 'spc', 'so yeah it is!', '2014-03-08 10:08:20'),
(63, 'sai', 'ok go!', '2014-03-08 10:09:29'),
(64, 'sai', 'gogogo', '2014-03-08 10:09:52'),
(65, 'spc', '??', '2014-03-08 10:10:02'),
(66, 'sai', 'burp durp?', '2014-03-08 10:10:49'),
(67, 'spc', 'ty', '2014-03-08 10:10:56'),
(68, 'sai', 'now! this is it~!!', '2014-03-08 10:12:32'),
(69, 'spc', 'u mean? it works?', '2014-03-08 10:13:18'),
(70, 'spc', 'rly?', '2014-03-08 10:13:58'),
(71, 'sai', 'maybe bro1', '2014-03-08 10:18:00'),
(72, 'saipc', 'ok then...', '2014-03-08 10:18:22'),
(73, 'sai', 'joining tamu', '2014-03-08 16:48:37'),
(74, 'saipc', 'hiiii', '2014-03-08 16:48:54'),
(75, 'sai', 'congrats', '2014-03-08 16:49:32'),
(76, 'saipc', 'hello how r u', '2014-03-08 16:50:18'),
(77, 'sai', 'im very fine', '2014-03-08 16:50:40'),
(78, 'sai', 'testing going on...', '2014-03-08 19:07:04'),
(79, 'sai', 'ok cool', '2014-03-09 07:33:40'),
(80, 'sai', 'nice na?', '2014-03-09 07:35:01'),
(81, 'saipc', 'yes i guess', '2014-03-09 07:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE IF NOT EXISTS `online_users` (
  `username` varchar(40) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_users`
--

INSERT INTO `online_users` (`username`) VALUES
('sai'),
('saipc'),
('spc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'sai', 'saiprash_thegreatest@yahoo.co.in', 'af8978b1797b72acfff9595a5a2a373ec3d9106d'),
(5, 'saipc', '1234', 'af8978b1797b72acfff9595a5a2a373ec3d9106d'),
(6, 'sss', 'saiprash_thegreatest@yahoo.co.in', 'af8978b1797b72acfff9595a5a2a373ec3d9106d'),
(7, 'spc', 'spc', 'af8978b1797b72acfff9595a5a2a373ec3d9106d');

-- --------------------------------------------------------

--
-- Table structure for table `userstocks`
--

CREATE TABLE IF NOT EXISTS `userstocks` (
  `username` varchar(40) NOT NULL,
  `stocks` varchar(2000) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstocks`
--

INSERT INTO `userstocks` (`username`, `stocks`) VALUES
('sai', 'goog,"Google Inc.",1212.24,-7.37\r\n,msft,"Microsoft Corpora",37.71,-0.44\r\n,yhoo,"Yahoo Inc.",38.54,-1.12\r\n,aapl,"Apple Inc.",530.44,-0.31\r\n,sss,"Sovran Self Stora",75.00,-1.06\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
