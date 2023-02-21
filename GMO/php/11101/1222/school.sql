-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `classes`
--

CREATE TABLE `classes` (
  `eid` char(4) NOT NULL COMMENT 'TRIAL',
  `sid` char(4) NOT NULL COMMENT 'TRIAL',
  `c_no` char(5) NOT NULL COMMENT 'TRIAL',
  `time` datetime(3) DEFAULT NULL COMMENT 'TRIAL',
  `room` varchar(8) DEFAULT NULL COMMENT 'TRIAL',
  `score` double DEFAULT NULL COMMENT 'TRIAL',
  `trial479` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- 傾印資料表的資料 `classes`
--

INSERT INTO `classes` (`eid`, `sid`, `c_no`, `time`, `room`, `score`, `trial479`) VALUES
('E001', 'S001', 'CS101', '1900-01-01 12:00:00.000', '180-M', 85, 'T'),
('E001', 'S003', 'CS213', '1900-01-01 09:00:00.000', '622-G', 66, 'T'),
('E002', 'S001', 'CS222', '1900-01-01 13:00:00.000', '100-M', 78, 'T'),
('E002', 'S002', 'CS222', '1900-01-01 13:00:00.000', '100-M', 58, 'T'),
('E002', 'S003', 'CS121', '1900-01-01 08:00:00.000', '221-S', 75, 'T'),
('E002', 'S004', 'CS222', '1900-01-01 13:00:00.000', '100-M', 92, 'T'),
('E003', 'S001', 'CS203', '1900-01-01 10:00:00.000', '221-S', 68, 'T'),
('E003', 'S001', 'CS213', '1900-01-01 12:00:00.000', '500-K', 78, 'T'),
('E003', 'S002', 'CS203', '1900-01-01 14:00:00.000', '327-S', 85, 'T');

-- --------------------------------------------------------

--
-- 資料表結構 `courses`
--

CREATE TABLE `courses` (
  `c_no` char(5) NOT NULL COMMENT 'TRIAL',
  `title` varchar(30) NOT NULL COMMENT 'TRIAL',
  `credits` int(11) DEFAULT '3' COMMENT 'TRIAL',
  `trial482` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- 傾印資料表的資料 `courses`
--

INSERT INTO `courses` (`c_no`, `title`, `credits`, `trial482`) VALUES
('CS101', '計算檮概論', 4, 'T'),
('CS121', '離散數學', 4, 'T'),
('CS203', '程式語言', 3, 'T'),
('CS213', '物件導向程式設計', 2, 'T'),
('CS222', '資料庫管理系統', 3, 'T');

-- --------------------------------------------------------

--
-- 資料表結構 `instructors`
--

CREATE TABLE `instructors` (
  `eid` char(4) NOT NULL COMMENT 'TRIAL',
  `name` varchar(12) NOT NULL COMMENT 'TRIAL',
  `rank` varchar(10) DEFAULT NULL COMMENT 'TRIAL',
  `department` varchar(5) DEFAULT NULL COMMENT 'TRIAL',
  `trial485` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- 傾印資料表的資料 `instructors`
--

INSERT INTO `instructors` (`eid`, `name`, `rank`, `department`, `trial485`) VALUES
('E001', '陳慶新', '教授', 'CS', 'T'),
('E002', '楊金欉', '副教授', 'CIS', 'T'),
('E003', '李鴻章', '講師', 'MATH', 'T');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `sid` char(4) NOT NULL COMMENT 'TRIAL',
  `name` varchar(12) NOT NULL COMMENT 'TRIAL',
  `tel` varchar(15) DEFAULT NULL COMMENT 'TRIAL',
  `birthday` datetime(3) DEFAULT NULL COMMENT 'TRIAL',
  `gpa` double DEFAULT NULL COMMENT 'TRIAL',
  `trial489` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`sid`, `name`, `tel`, `birthday`, `gpa`, `trial489`) VALUES
('S001', '陳會安', '02-22222222', '1967-09-03 00:00:00.000', 3.7, 'T'),
('S002', '江小魚', '03-33333333', '1978-02-02 00:00:00.000', 3, 'T'),
('S003', '張三丰', '04-44444444', '1982-03-03 00:00:00.000', 3.2, 'T'),
('S004', '李四方', '05-55555555', '1981-04-04 00:00:00.000', 2.9, 'T');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`eid`,`sid`,`c_no`),
  ADD KEY `fk__classes__c_no__108b795b` (`c_no`),
  ADD KEY `fk__classes__sid__0f975522` (`sid`);

--
-- 資料表索引 `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_no`);

--
-- 資料表索引 `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`eid`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- 已傾印資料表的限制(constraint)
--

--
-- 資料表的限制(constraint) `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `fk__classes__c_no__108b795b` FOREIGN KEY (`c_no`) REFERENCES `courses` (`c_no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk__classes__eid__0ea330e9` FOREIGN KEY (`eid`) REFERENCES `instructors` (`eid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk__classes__sid__0f975522` FOREIGN KEY (`sid`) REFERENCES `students` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
