-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2018. Jan 09. 21:30
-- Kiszolgáló verziója: 10.1.28-MariaDB
-- PHP verzió: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `intranet`
--
CREATE DATABASE IF NOT EXISTS `intranet` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `intranet`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(2) NOT NULL,
  `title` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `role_id` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`menu_id`, `title`, `link`, `role_id`) VALUES
(1, 'Hírek', 'hirek.php', 3),
(2, 'Beküldés', 'bekuldes.php', 2),
(3, 'Adminisztráció', 'adminisztracio.php', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` char(32) COLLATE utf8_hungarian_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `disabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `email`, `password`, `role_id`, `disabled`) VALUES
(1, 'Mészáros Gergő', 'gergo', 'meszaros.gergo@kamu.hu', '325a2cc052914ceeb8c19016c091d2ac', 1, 0),
(2, 'Teszt Elek', 'teszt', 'teszt.elek@kamu.hu', '325a2cc052914ceeb8c19016c091d2ac', 2, 1),
(3, 'Kovács Géza', 'kovacs', 'kovacs@xy.hu', '325a2cc052914ceeb8c19016c091d2ac', 3, 0),
(4, 'Teszt User', 'Teszt2', 'teszt@xy.hu', '325a2cc052914ceeb8c19016c091d2ac', 2, 0),
(5, 'site admin', 'admin', 'admin@xy.hu', '325a2cc052914ceeb8c19016c091d2ac', 1, 0),
(6, 'Kiss István', 'kiss', 'kiss@xy.hu', '325a2cc052914ceeb8c19016c091d2ac', 3, 0),
(7, 'Kiss Istvánné', 'kiss2', 'kiss2@xy.hu', '325a2cc052914ceeb8c19016c091d2ac', 3, 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
