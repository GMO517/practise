-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 12 月 27 日 03:51
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `mytestdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `mybooks`
--

CREATE TABLE `mybooks` (
  `bookid` int(10) NOT NULL COMMENT '書籍編號',
  `bookname` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '書籍名稱',
  `author` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '作者',
  `price` int(10) NOT NULL COMMENT '價格'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `mybooks`
--

INSERT INTO `mybooks` (`bookid`, `bookname`, `author`, `price`) VALUES
(1, '某本書', '某個人', 1000),
(3, 'aaaaa', 'abc', 3000);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `mybooks`
--
ALTER TABLE `mybooks`
  ADD PRIMARY KEY (`bookid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mybooks`
--
ALTER TABLE `mybooks`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT COMMENT '書籍編號', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
