-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2026-03-03 09:22:15
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `game_store_12_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `boxes`
--

CREATE TABLE `boxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `boxes`
--

INSERT INTO `boxes` (`id`, `text`, `img`, `sh`) VALUES
(1, 'LET IT DIE', 'game1.png', 1),
(2, 'DQ1+2', 'game2.png', 1),
(3, '無盡傳奇', 'game3.png', 1),
(5, '死亡擱淺2', 'game8.png', 1),
(6, '羊蹄山戰鬼', 'game7.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `id` int(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `thumb` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `carousel`
--

INSERT INTO `carousel` (`id`, `text`, `img`, `thumb`, `sh`) VALUES
(1, '神機迷網', 'psstore3.png', 'psstore3-l.png', 1),
(2, '年度回顧', 'psstore5.png', 'psstore5-l.png', 1),
(3, '馬拉松', 'psstore1.png', 'psstore1-l.png', 1),
(6, '羊蹄山戰鬼', 'psstore2.png', 'psstore2-l.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `pw` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `pw`, `name`, `email`) VALUES
(1, 'endmin', 'endmin', 'endmin@tuta.io'),
(2, 'admin', 'admin', 'admin@tuta.io');

-- --------------------------------------------------------

--
-- 資料表結構 `nav`
--

CREATE TABLE `nav` (
  `id` int(10) NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) NOT NULL,
  `main_id` int(10) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `nav`
--

INSERT INTO `nav` (`id`, `text`, `sh`, `main_id`, `url`) VALUES
(1, 'Games', 1, 0, ''),
(2, 'PS5', 1, 1, 'https://www.playstation.com/en-tw/ps5/?smcid=store%3Aen-tw%3Acategory-3a8d38c3-3c22-4287-a7ac-836474d77f32%3Aprimary%20nav%3Amsg-ps5%3Aps5&emcid=pa-co-531059'),
(3, 'PS4', 1, 1, 'https://www.playstation.com/en-tw/ps4/?smcid=pdc%3Aen-tw%3Aps5%3Aprimary%20nav%3Amsg-ps4%3Aconsole&emcid=pa-co-531059%3E'),
(4, 'PS4', 1, 0, ''),
(5, 'PS4', 1, 4, 'https://www.playstation.com/zh-hant-tw/ps4/?smcid=pdc%3Azh-hant-tw%3Aps4%3Aprimary%20nav%3Amsg-ps4%3A'),
(19, 'Meme', 1, 0, ''),
(20, 'Rick', 1, 19, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `boxes`
--
ALTER TABLE `boxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
