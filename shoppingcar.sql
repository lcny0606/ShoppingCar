-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 16 日 03:08
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shoppingcar`
--

-- --------------------------------------------------------

--
-- 表的结构 `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(60) NOT NULL,
  `num` varchar(60) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `car`
--

INSERT INTO `car` (`id`, `username`, `name`, `price`, `num`) VALUES
(1, 'ly', '', 0, '1'),
(2, 'admin', 'æžœå¹²', 122, '1'),
(3, 'admin', 'æžœå¹²', 122, '1'),
(10, 'admin', 'æžœå¹²', 122, '1'),
(11, 'admin', 'eeee', 20, '1'),
(12, 'admin', 'fff', 50, '1'),
(13, 'admin', 'hhhhhh', 360, '1'),
(14, 'admin', 'fff', 50, '1'),
(15, 'admin', 'eeee', 20, '1'),
(16, 'admin', 'dddd', 456, '1'),
(17, 'admin', 'fff', 50, '1'),
(18, 'admin', 'dddd', 456, '1'),
(19, 'admin', 'bbbb', 12, '1');

-- --------------------------------------------------------

--
-- 表的结构 `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `Age` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `address` varchar(150) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `jur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `persons`
--

INSERT INTO `persons` (`id`, `FirstName`, `LastName`, `nickname`, `Age`, `phone`, `address`, `avatar`, `jur`) VALUES
(1, 'ly', 'yyy', '', '', '', '', '', 0),
(2, 'admin', '123', 'ly', ' 20', '13152145621', 'æ­¦æ±‰å¸‚', '192786.jpg', 1),
(3, 'qq', 'qq', '', 'age', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(60) NOT NULL,
  `ver` varchar(60) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `shopping`
--

INSERT INTO `shopping` (`id`, `name`, `price`, `ver`, `remark`) VALUES
(1, 'æžœå¹²', '122', 'å¤§åŒ…', 'æ— '),
(2, 'aa', '20', 'aa', 'aaa'),
(3, 'bbbb', '12', 'bb', 'bb'),
(4, 'ccc', '232', 'ccc', 'ccc'),
(5, 'dddd', '456', 'ddd', 'dd'),
(6, 'eeee', '20', 'eee', 'eee'),
(7, 'fff', '50', 'fff', 'fff'),
(8, 'hhhhhh', '360', 'hhhhh', 'hhhhhh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
