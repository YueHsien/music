-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-01-30 10:20:17
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `music`
--

-- --------------------------------------------------------

--
-- 資料表結構 `click`
--

CREATE TABLE `click` (
  `click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `click`
--

INSERT INTO `click` (`click`) VALUES
(984);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `memberid` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`memberid`, `name`, `account`, `password`) VALUES
(1, 'Wang', 'qwer6407', 'cd717630'),
(3, 'HSIEN', 'zxc6407', 'cd717630'),
(5, 'Test', 'zxc80001', 'cd717630'),
(7, 'Test2', 'qwer80001', 'cd717630'),
(9, '江又如', 'aaaa', '123'),
(10, '123', '123', '123'),
(12, '456', '456', '456'),
(13, 'Lan', 'a123', 'a123'),
(14, 'A', 'jack123', 'cd717630'),
(15, '江如又', 'bbbb', 'bbbb');

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `音樂編號` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `filename` varchar(10000) NOT NULL,
  `region` varchar(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `lyrics` varchar(5000) NOT NULL,
  `click` int(11) NOT NULL,
  `上傳者` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `total`
--

INSERT INTO `total` (`音樂編號`, `title`, `filename`, `region`, `author`, `lyrics`, `click`, `上傳者`) VALUES
(172, 'aaaa', 'upload/ex123.mp3', '韓文', 'aaaa', 'aaa', 2, 'Wang'),
(173, 'qqqqq', 'upload/ex123.mp3', '英文', 'qqqq', 'ccc', 2, 'HSIEN'),
(174, 'asdas', 'upload/ex123.mp3', '韓文', 'wqdqd', 'qdqwdq', 1, 'Test2'),
(175, 'zzzzz', 'upload/ex123.mp3', '中文', 'zzzzz', 'zzzz', 5, 'Wang'),
(176, '稻香', 'upload/ex123.mp3', '中文', '周杰倫', '對這個世界如果你有太多的抱怨\r\n跌倒了就不敢繼續往前走\r\n為什麼人要這麼的脆弱 墮落\r\n請你打開電視看看\r\n多少人為生命在努力勇敢的走下去\r\n我們是不是該知足\r\n珍惜一切 就算沒有擁有\r\n\r\n還記得你說家是唯一的城堡 隨著稻香河流繼續奔跑\r\n微微笑 小時候的夢我知道\r\n不要哭讓螢火蟲帶著你逃跑 鄉間的歌謠永遠的依靠\r\n回家吧 回到最初的美好\r\n\r\n不要這麼容易就想放棄 就像我說的\r\n追不到的夢想 換個夢不就得了\r\n為自己的人生鮮艷上色 先把愛塗上喜歡的顏色\r\n\r\n笑一個吧 功成名就不是目的\r\n讓自己快樂快樂這才叫做意義\r\n更多更詳盡歌詞 在 ※ Mojim.com　魔鏡歌詞網 \r\n童年的紙飛機 現在終於飛回我手裡\r\n所謂的那快樂 赤腳在田裡追蜻蜓追到累了\r\n偷摘水果被蜜蜂給叮到怕了 誰在偷笑呢\r\n我靠著稻草人吹著風唱著歌睡著了\r\n哦 哦 午後吉他在蟲鳴中更清脆\r\n哦 哦 陽光灑在路上就不怕心碎\r\n珍惜一切 就算沒有擁有\r\n\r\n還記得你說家是唯一的城堡 隨著稻香河流繼續奔跑\r\n微微笑 小時候的夢我知道\r\n不要哭讓螢火蟲帶著你逃跑 鄉間的歌謠永遠的依靠\r\n回家吧 回到最初的美好\r\n\r\n還記得你說家是唯一的城堡 隨著稻香河流繼續奔跑\r\n微微笑 小時候的夢我知道\r\n不要哭讓螢火蟲帶著你逃跑 鄉間的歌謠永遠的依靠\r\n回家吧 回到最初的美好', 5, '江又如'),
(177, 'abc', 'upload/ex123.mp3', '中文', 'zzzzz', 'qqqqqqqqqq', 3, 'Wang'),
(178, 'qwer6407', 'upload/ex123.mp3', '韓文', 'aaa', 'aaa', 1, 'Wang'),
(179, '123', 'upload/ex123.mp3', '日文', '123', 'QQQ', 0, 'Wang'),
(180, '1111', 'upload/ex123.mp3', '韓文', '1111', '11111', 2, 'Wang'),
(181, 'zaq', 'upload/ex123.mp3', '英文', 'qasd', 'asdas', 0, 'Wang'),
(182, '將1', 'upload/ex123.mp3', '韓文', 'aa', 'asdas', 0, 'Wang'),
(183, 'asdasd', 'upload/ex123.mp3', '日文', 'adasdas', 'qdwwqd', 0, '江又如'),
(184, 'Lan', 'upload/ex123.mp3', '中文', 'Lan', '蘭意陳', 2, 'Lan'),
(185, 'qqq', 'upload/WWE Randy Orton Theme Song With Titantron 2010 HD (1).mp3', '英文', 'qq', 'qq', 0, 'Wang'),
(186, 'Ra', 'upload/WWE Randy Orton Theme Song With Titantron 2010 HD (1).mp3', '英文', 'aaqwqe', 'sadsad', 2, 'Wang'),
(187, '11111111111111', 'upload/WWE Randy Orton Theme Song With Titantron 2010 HD (1).mp3', '中文', '1111111111', 'aaaaa', 0, 'Wang'),
(188, 'JIUSU', 'upload/WWE Randy Orton Theme Song With Titantron 2010 HD (1).mp3', '韓文', 'asdasd', 'sada', 0, 'Wang'),
(189, 'Randy', 'upload/WWE Randy Orton Theme Song With Titantron 2010 HD (1).mp3', '英文', 'WWE', '11111111111111111111111', 7, 'A');

-- --------------------------------------------------------

--
-- 資料表結構 `uploader`
--

CREATE TABLE `uploader` (
  `memberid` int(10) NOT NULL,
  `音樂編號` int(11) NOT NULL,
  `上傳日期` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `uploader`
--

INSERT INTO `uploader` (`memberid`, `音樂編號`, `上傳日期`) VALUES
(1, 172, '2018-06-02'),
(3, 173, '2018-06-02'),
(7, 174, '2018-06-02'),
(1, 175, '2018-06-02'),
(9, 176, '2018-06-02'),
(1, 177, '2018-06-02'),
(1, 178, '2018-06-03'),
(1, 179, '2018-06-03'),
(1, 180, '2018-06-03'),
(1, 181, '2018-06-03'),
(1, 182, '2018-06-03'),
(9, 183, '2018-06-03'),
(13, 184, '2018-06-03'),
(1, 185, '2018-06-04'),
(1, 186, '2018-06-04'),
(1, 187, '2018-06-04'),
(1, 188, '2018-06-04'),
(14, 189, '2018-06-04');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `account` (`account`),
  ADD UNIQUE KEY `memberid` (`memberid`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`音樂編號`);

--
-- 資料表索引 `uploader`
--
ALTER TABLE `uploader`
  ADD KEY `uploader_ibfk_2` (`音樂編號`),
  ADD KEY `uploader_ibfk_3` (`memberid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用資料表 AUTO_INCREMENT `total`
--
ALTER TABLE `total`
  MODIFY `音樂編號` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `uploader`
--
ALTER TABLE `uploader`
  ADD CONSTRAINT `uploader_ibfk_2` FOREIGN KEY (`音樂編號`) REFERENCES `total` (`音樂編號`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `uploader_ibfk_3` FOREIGN KEY (`memberid`) REFERENCES `member` (`memberid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
