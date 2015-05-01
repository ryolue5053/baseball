-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 05 月 01 日 01:50
-- 伺服器版本: 5.6.23
-- PHP 版本： 5.5.22

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
-- 資料表結構 `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `hr` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `avg` float NOT NULL,
  `player_id` int(11) NOT NULL,
  `TC` int(11) NOT NULL COMMENT '守備機會',
  `E` int(11) NOT NULL DEFAULT '0' COMMENT '失誤',
  `FPCT` double NOT NULL COMMENT '守備率',
  `IP` float NOT NULL COMMENT '投球局數',
  `WHIP` double NOT NULL COMMENT '被上壘率',
  `ERA` double NOT NULL COMMENT '防禦率'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `scores`
--

INSERT INTO `scores` (`id`, `year`, `team_id`, `hr`, `h`, `avg`, `player_id`, `TC`, `E`, `FPCT`, `IP`, `WHIP`, `ERA`) VALUES
(1, 2014, 1, 10, 150, 0.35, 1, 877, 11, 0.987, 0, 0, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `year` (`year`,`player_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
