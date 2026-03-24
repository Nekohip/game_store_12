-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2026-03-14 09:33:39
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
  `text` text NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `boxes`
--

INSERT INTO `boxes` (`id`, `text`, `img`, `sh`) VALUES
(7, 'Aether Reborn', 'Aether_Reborn.png', 1),
(8, 'Aether Chronicles:Awakening', 'Aether_Chronicles_Awakening.png', 1),
(9, 'Aether Boubond:Legacy Of The Sky-Realms', 'Aether_Boubon_Legacy_Of_The_Sky-Realms.png', 1),
(10, '太空戰士:星際之敵', 'Gemini_Generated_Image_xdd691xdd691xdd6.png', 1),
(11, 'Eternal Saga', 'Eternal_Saga.png', 1),
(12, 'Eclips of Fate', 'Eclips_of_Fate.png', 1);

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
(1, '彩虹之城', 'city_of_rainbow.png', 'city_of_rainbow_t.png', 1),
(2, '日落之都', 'city_of_sunset.png', 'city_of_sunset_t.png', 1),
(3, '霓虹獵手', 'hunter.png', 'hunter_t.png', 1),
(6, '血肉軍團', 'legion_of_blood.png', 'legion_of_blood_t.png', 1),
(7, '新會員優惠', 'new_mem.png', 'new_mem_t.png', 1),
(8, '春季U惠', 'spring.png', 'spring_t.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `pw` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `admin` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `pw`, `name`, `email`, `admin`) VALUES
(2, 'admin', 'admin', 'admin@tuta.io', 1),
(3, 'endmin', 'endmin', 'endmin@tuta.io', 0),
(19, 'asdf', 'asdf', 'asdf@gmail.com', 0);

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
(2, 'PS5', 1, 1, 'https://www.playstation.com/en-tw/ps5/?smcid=store%3Aen-tw%3Acategory-3a8d38c3-3c22-4287-a7ac-836474d77f32%3Aprimary%20nav%3Amsg-ps5%3Aps5&emcid=pa-co-531059'),
(3, 'PS4', 1, 1, 'https://www.playstation.com/en-tw/ps4/?smcid=pdc%3Aen-tw%3Aps5%3Aprimary%20nav%3Amsg-ps4%3Aconsole&emcid=pa-co-531059%3E'),
(4, '遊戲', 1, 0, ''),
(5, 'PS4', 1, 4, 'https://store.playstation.com/zh-hant-tw/category/5f3aa730-1c8e-4a18-84da-030bb91558c0/1'),
(20, 'Rick', 1, 19, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(29, '主機', 1, 0, ''),
(30, 'PS5', 1, 4, 'https://www.playstation.com/zh-hant-tw/ps5/games/?smcid=store%3Azh-hant-tw%3Acategory-5f3aa730-1c8e-4a18-84da-030bb91558c0-1%3Aprimary%20nav%3Amsg-ps5%3A'),
(31, 'PS4', 1, 29, 'https://www.playstation.com/zh-hant-tw/ps4/?smcid=pdc%3Azh-hant-tw%3Aps5-games%3Aprimary%20nav%3Amsg-ps4%3A'),
(32, 'PS5', 1, 29, 'https://www.playstation.com/zh-hant-tw/ps5/ps5-pro/?smcid=pdc%3Azh-hant-tw%3Aps4%3Aprimary%20nav%3Amsg-ps5%3Aps5-pro'),
(33, 'Xbox', 1, 4, 'https://www.xbox.com/zh-tw/games?xr=shellnav'),
(34, 'Xbox Series X', 1, 29, 'https://www.xbox.com/zh-tw/consoles/xbox-series-x?xr=shellnav'),
(35, 'Meme', 1, 0, ''),
(36, 'Rick Roll', 1, 35, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(37, 'Epic Sax Guy ', 1, 35, 'https://www.youtube.com/watch?v=RIBdm2YIhNM&list=PLVm8KHTIe_nlN1SSla5xLKon8lIvWKDH-&index=2');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
