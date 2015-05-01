-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 05 月 01 日 02:08
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
-- 資料表結構 `defence_scores`
--

CREATE TABLE IF NOT EXISTS `defence_scores` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `tc` int(11) NOT NULL COMMENT '守備機會',
  `e` int(11) NOT NULL DEFAULT '0' COMMENT '失誤',
  `fpct` double NOT NULL COMMENT '守備率'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `defence_scores`
--

INSERT INTO `defence_scores` (`id`, `year`, `team_id`, `player_id`, `tc`, `e`, `fpct`) VALUES
(1, 2014, 1, 1, 877, 11, 0.987);

-- --------------------------------------------------------

--
-- 資料表結構 `hit_scores`
--

CREATE TABLE IF NOT EXISTS `hit_scores` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `plear_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `hr` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `avg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `pitch_scores`
--

CREATE TABLE IF NOT EXISTS `pitch_scores` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `ip` float NOT NULL,
  `whip` double NOT NULL,
  `era` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `team_id` int(20) NOT NULL,
  `kind` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `active` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0:退役 1:現役',
  `number` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `players`
--

INSERT INTO `players` (`id`, `name`, `team_id`, `kind`, `position`, `active`, `number`) VALUES
(1, '彭政閔', 1, 2, '1B', 1, 23),
(2, '陳江和', 1, 2, '2B', 1, 31),
(3, '王勝偉', 1, 2, 'SS', 1, 14),
(4, '黃仕豪', 1, 2, '3B', 1, 8),
(5, '許基宏', 1, 2, '1B', 1, 74),
(6, '鄭凱文', 1, 1, 'SP', 1, 19),
(7, '林煜清', 1, 1, 'SP', 1, 15),
(8, '官大元', 1, 1, 'RP', 1, 18),
(14, '鄧志偉', 2, 2, '1B', 1, 25),
(15, '張泰山', 2, 2, '1B', 1, 49),
(16, '陳鏞基', 2, 2, 'SS', 1, 13),
(17, '潘武雄', 2, 3, 'LF', 1, 55),
(18, '郭泓志', 2, 1, 'CP', 1, 0),
(19, '劉芙豪', 2, 3, 'RF', 1, 56);

-- --------------------------------------------------------

--
-- 資料表結構 `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `ch_name` varchar(40) NOT NULL,
  `home` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `teams`
--

INSERT INTO `teams` (`id`, `name`, `ch_name`, `home`) VALUES
(1, 'brothers', '中信兄弟', '洲際'),
(2, 'lion', '統一獅', '台南'),
(3, 'lamigo', '桃猿', '桃園'),
(4, 'eda', '義大犀牛', '澄清湖');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `defence_scores`
--
ALTER TABLE `defence_scores`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `year` (`year`,`player_id`);

--
-- 資料表索引 `hit_scores`
--
ALTER TABLE `hit_scores`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pitch_scores`
--
ALTER TABLE `pitch_scores`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `defence_scores`
--
ALTER TABLE `defence_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `hit_scores`
--
ALTER TABLE `hit_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `pitch_scores`
--
ALTER TABLE `pitch_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- 使用資料表 AUTO_INCREMENT `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
