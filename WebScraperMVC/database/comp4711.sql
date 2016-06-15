-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 04 月 17 日 14:51
-- 伺服器版本: 5.7.9-log
-- PHP 版本： 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `comp4711`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movements`
--

CREATE TABLE `movements` (
  `Datetime` varchar(19) DEFAULT NULL,
  `Code` varchar(4) DEFAULT NULL,
  `Action` varchar(4) DEFAULT NULL,
  `Amount` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `movements`
--

INSERT INTO `movements` (`Datetime`, `Code`, `Action`, `Amount`) VALUES
('2016.02.01-09:01:00', 'BOND', 'down', 5),
('2016.02.01-09:01:02', 'IND', 'div', 5),
('2016.02.01-09:01:04', 'OIL', 'down', 10),
('2016.02.01-09:01:06', 'GOLD', 'div', 5),
('2016.02.01-09:01:08', 'BOND', 'up', 20),
('2016.02.01-09:01:10', 'GOLD', 'div', 5),
('2016.02.01-09:01:12', 'GOLD', 'down', 20),
('2016.02.01-09:01:14', 'IND', 'div', 10),
('2016.02.01-09:01:16', 'OIL', 'up', 20),
('2016.02.01-09:01:18', 'BOND', 'down', 5),
('2016.02.01-09:01:20', 'BOND', 'up', 5),
('2016.02.01-09:01:22', 'BOND', 'div', 20),
('2016.02.01-09:01:24', 'BOND', 'div', 20),
('2016.02.01-09:01:26', 'GOLD', 'div', 20),
('2016.02.01-09:01:28', 'IND', 'up', 20),
('2016.02.01-09:01:30', 'OIL', 'down', 20),
('2016.02.01-09:01:32', 'GRAN', 'down', 20),
('2016.02.01-09:01:34', 'BOND', 'up', 5),
('2016.02.01-09:01:36', 'GOLD', 'down', 20),
('2016.02.01-09:01:38', 'GOLD', 'down', 20),
('2016.02.01-09:01:40', 'TECH', 'down', 20),
('2016.02.01-09:01:42', 'TECH', 'up', 5),
('2016.02.01-09:01:44', 'OIL', 'up', 20),
('2016.02.01-09:01:46', 'BOND', 'up', 5),
('2016.02.01-09:01:48', 'GOLD', 'div', 10),
('2016.02.01-09:01:50', 'GOLD', 'down', 5),
('2016.02.01-09:01:52', 'GOLD', 'up', 20),
('2016.02.01-09:01:54', 'IND', 'down', 10),
('2016.02.01-09:01:56', 'GOLD', 'div', 20);

-- --------------------------------------------------------

--
-- 資料表結構 `players`
--

CREATE TABLE `players` (
  `Player` varchar(6) DEFAULT NULL,
  `Cash` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `players`
--

INSERT INTO `players` (`Player`, `Cash`) VALUES
('Mickey', 1000),
('Donald', 3000),
('George', 2000),
('Henry', 2500);

-- --------------------------------------------------------

--
-- 資料表結構 `stocks`
--

CREATE TABLE `stocks` (
  `Code` varchar(4) DEFAULT NULL,
  `Name` varchar(10) DEFAULT NULL,
  `Category` varchar(1) DEFAULT NULL,
  `Value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `stocks`
--

INSERT INTO `stocks` (`Code`, `Name`, `Category`, `Value`) VALUES
('BOND', 'Bonds', 'B', 66),
('GOLD', 'Gold', 'B', 110),
('GRAN', 'Grain', 'B', 113),
('IND', 'Industrial', 'B', 39),
('OIL', 'Oil', 'B', 52),
('TECH', 'Tech', 'B', 37);

-- --------------------------------------------------------

--
-- 資料表結構 `transactions`
--

CREATE TABLE `transactions` (
  `DateTime` varchar(19) DEFAULT NULL,
  `Player` varchar(6) DEFAULT NULL,
  `Stock` varchar(4) DEFAULT NULL,
  `Trans` varchar(4) DEFAULT NULL,
  `Quantity` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `transactions`
--

INSERT INTO `transactions` (`DateTime`, `Player`, `Stock`, `Trans`, `Quantity`) VALUES
('2016.02.01-09:01:00', 'Donald', 'BOND', 'buy', 100),
('2016.02.01-09:01:05', 'Donald', 'TECH', 'sell', 1000),
('2016.02.01-09:01:10', 'Henry', 'TECH', 'sell', 1000),
('2016.02.01-09:01:15', 'Donald', 'IND', 'sell', 1000),
('2016.02.01-09:01:20', 'George', 'GOLD', 'sell', 100),
('2016.02.01-09:01:25', 'George', 'OIL', 'buy', 500),
('2016.02.01-09:01:30', 'Henry', 'GOLD', 'sell', 100),
('2016.02.01-09:01:35', 'Henry', 'GOLD', 'buy', 1000),
('2016.02.01-09:01:40', 'Donald', 'TECH', 'buy', 100),
('2016.02.01-09:01:45', 'Donald', 'OIL', 'sell', 100),
('2016.02.01-09:01:50', 'Donald', 'TECH', 'sell', 100),
('2016.02.01-09:01:55', 'George', 'OIL', 'buy', 100),
('2016.02.01-09:01:60', 'George', 'IND', 'buy', 100);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` char(32) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `avatar` varchar(20) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `avatar`, `isAdmin`) VALUES
(4, '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'something', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
