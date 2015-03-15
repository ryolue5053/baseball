-- phpMyAdmin SQL Dump
-- version 4.3.0
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 03 月 15 日 10:02
-- 伺服器版本: 5.5.23
-- PHP 版本： 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `baseball`
--

-- --------------------------------------------------------

--
-- 資料表結構 `players`
--

CREATE TABLE IF NOT EXISTS `players` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `team` varchar(50) NOT NULL,
  `kind` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `active` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0:退役 1:現役',
  `number` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `players`
--

INSERT INTO `players` (`id`, `name`, `team`, `kind`, `position`, `active`, `number`) VALUES
(1, '彭政閔', '中信兄弟', '內野手', '1B', 1, 23),
(2, '陳江和', '中信兄弟', '內野手', '2B', 1, 31),
(3, '王勝偉', '中信兄弟', '內野手', 'SS', 1, 14),
(4, '黃仕豪', '中信兄弟', '內野手', '3B', 1, 8),
(5, '許基宏', '中信兄弟', '內野手', '1B', 1, 74),
(6, '鄭凱文', '中信兄弟', '投手', 'SP', 1, 19),
(7, '林煜清', '中信兄弟', '投手', 'SP', 1, 15),
(8, '官大元', '中信兄弟', '投手', 'RP', 1, 18);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `players`
--
ALTER TABLE `players`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `players`
--
ALTER TABLE `players`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
