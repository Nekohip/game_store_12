-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2026-02-12 08:00:23
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
(5, '死亡擱淺2', 'game8.png', 1);

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
-- 資料表結構 `nav`
--

CREATE TABLE `nav` (
  `id` int(10) NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) NOT NULL,
  `main_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `nav`
--

INSERT INTO `nav` (`id`, `text`, `sh`, `main_id`) VALUES
(1, 'Games', 1, 0),
(2, 'PS5', 1, 1),
(3, 'PS4', 1, 1),
(4, 'PS5', 1, 0),
(5, 'PS5', 1, 4);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
