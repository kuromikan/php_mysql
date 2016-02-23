-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-02-23: 07:04:41
-- 伺服器版本: 5.6.17
-- PHP 版本： 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `sample_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `usr_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`usr_id`, `name`, `birthday`, `address`) VALUES
('S201600001', 'Andy', '2000-02-23', 'X市Y區1號2樓'),
('S201600002', 'Bill', '2001-01-31', 'X市Z區2號'),
('S201600003', 'Cindy', '2000-02-03', 'X市Y區2-2號');

-- --------------------------------------------------------

--
-- 資料表結構 `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `usr_id` varchar(10) NOT NULL,
  `score` int(3) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 資料表的匯出資料 `score`
--

INSERT INTO `score` (`usr_id`, `score`, `subject`, `id`) VALUES
('S201600001', 60, 'C', 1),
('S201600002', 65, 'C', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
