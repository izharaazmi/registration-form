-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 12:04 PM
-- Server version: 5.5.18
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'v', 'v', '1'),
(7, 'f', 'k', '12'),
(8, 'hgh', 'jh', '12'),
(9, 'j', 'j@gmial.com', '1234'),
(11, 'tt', 't@gmail.com', '234'),
(12, 'k', 'k@gmail.com', '1'),
(15, 'arif', 'arif', 'arif@1234'),
(16, 'a', 'a', 'a@12345'),
(17, 'hgh', 'hgh', 'hgh@123456'),
(18, 'hgh', 'hgh', 'hgh@123456'),
(19, 'hgh', 'hgh', 'hgh@1234'),
(20, 'hgh', 'hgh', '12'),
(21, 'b', 'b', 'bb'),
(23, 'farha', 'farha', '12'),
(24, 'o', 'o', 'farha786'),
(25, 'o', 'o', 'jjjjjjjj'),
(26, 'oo', 'oo', 'oo'),
(34, 'tahir', 'tahir', 'tahir'),
(35, 'l', 'l', 'm'),
(36, 'hn', 'hn', 'hh'),
(37, 'mk', 'mk', 'm'),
(38, 'kj', 'kj', 'kj'),
(39, 'mnb', 'mnb', 'jhy'),
(40, 'jhg', 'hgf', 'f'),
(41, 'xxx', 'xxx', 'abc'),
(42, 'qqqqq', 'q', 'q'),
(43, 'cx', 'x', 'x'),
(44, 'cv', 'c', 'c'),
(45, 'kl', 'kl', 'kl'),
(46, 'par', 'par', 'farhashe'),
(47, '1', '1', 'farha@786'),
(48, 'ij', 'ij', 'llll1234'),
(49, 'gun1', 'gun1', 'gun12345'),
(50, 'dash', 'dash', 'dash1234'),
(51, 'hen', 'hen', 'hen1234'),
(52, 'kkkk', '@', 'kkkk1234'),
(53, 'oooo', '@', 'oooo1234'),
(54, 'pppp', '@', 'pppp1234'),
(55, 'mmmm', '@', 'mmmm1234'),
(56, 'yyyy', '@', 'yyyy1234'),
(57, 'g', '@', 'g123456'),
(58, 'xz', 'xz', 'xz'),
(59, 'bn', 'bn', 'bn'),
(60, 'kk', 'kk', 'kk'),
(61, 'w', 'w', 'w'),
(62, 'c', 'c', 'c'),
(63, 'gh', 'gh', 'gh'),
(64, '1111', '11', '11111111'),
(65, 'bun', '@', 'bun123456'),
(66, 'bunn', '@', 'bunn123456'),
(67, 'bob', 'bob', 'bobnewxx'),
(68, 'm', 'm', 'mmmmmmmm'),
(69, 'op', 'op', 'op'),
(70, 'iiiii', 'i', 'i'),
(71, 'hjhkhl', 'gfjh@jhk', '12345678'),
(72, 'bdfjfkjghf', 'abc@gmail.com', '12345678'),
(73, 'mdfnk', 'abc@gmail.com', '12345678'),
(74, 'dnfkjgn', 'abc@gmail.com', '12345678'),
(75, 'hghbjkth', 'abc@gmail.com', '12345678'),
(76, 'jkjkngkjrg', 'abc@gmail.co', '12345678'),
(77, 'cgjkhgk', 'abc@gmail.com', '12345678'),
(78, 'dkdfklrjgl', 'abc@gmail.com', 'farha@farha'),
(79, 'hdjf', 'abc@gmail.com', 'farha@786'),
(80, 'jkdnkdn', 'jdfkjd@jkfnk.com', 'farha@123'),
(81, 'yes', 'yes@gmail.com', 'yes@1234'),
(82, 'ujala', 'ujala@gmail.com', 'ujala@1234'),
(83, 'far', 'far@gmail.com', 'farha@786');
