-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 jun 2017 om 22:00
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_fifa`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_matches`
--

CREATE TABLE `tbl_matches` (
  `id` int(10) NOT NULL,
  `team_id_a` int(10) UNSIGNED NOT NULL,
  `team_id_b` int(10) UNSIGNED NOT NULL,
  `score_team_a` int(10) UNSIGNED DEFAULT NULL,
  `score_team_b` int(10) UNSIGNED DEFAULT NULL,
  `start_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_matches`
--

INSERT INTO `tbl_matches` (`id`, `team_id_a`, `team_id_b`, `score_team_a`, `score_team_b`, `start_time`) VALUES
(63, 24, 37, 1, 2, '2017-06-21 09:00:00'),
(64, 28, 41, NULL, NULL, '2017-06-21 09:00:00'),
(65, 24, 28, NULL, NULL, '2017-06-21 09:00:00'),
(66, 33, 37, 6, 7, '2017-06-21 09:00:00'),
(67, 24, 33, NULL, NULL, '2017-06-21 09:00:00'),
(68, 41, 37, NULL, NULL, '2017-06-21 09:00:00'),
(69, 41, 33, NULL, NULL, '2017-06-21 09:00:00'),
(70, 37, 28, 2, NULL, '2017-06-21 09:00:00'),
(71, 24, 41, NULL, NULL, '2017-06-21 09:00:00'),
(72, 28, 33, NULL, NULL, '2017-06-21 09:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_players`
--

CREATE TABLE `tbl_players` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `team_id` int(11) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `goals_scored` int(10) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_players`
--

INSERT INTO `tbl_players` (`id`, `student_id`, `team_id`, `first_name`, `last_name`, `goals_scored`, `created_at`, `deleted_at`) VALUES
(1, 'd123456', 33, 'Lasse', 'Schöne', 15, '2017-04-13 09:44:13', NULL),
(2, 'd5435435', 33, 'Davy ', 'Klaassen', 0, '2017-04-13 09:44:13', NULL),
(3, 'd545454', 37, 'Hakim ', 'Ziyech', 14, '2017-04-13 09:45:47', NULL),
(4, 'd666555', 37, 'Kasper', 'Dolberg', 0, '2017-04-13 09:45:47', NULL),
(5, 'd74745', 37, 'Luuk', 'de Jong', 0, '2017-04-13 09:48:23', NULL),
(6, 'd987665', 37, 'Siem', 'de Jong', 0, '2017-04-13 09:48:23', NULL),
(7, 'd11555', 2, 'Jeroen', 'Zoet', 0, '2017-04-13 09:48:23', NULL),
(8, 'd544566', 2, 'Hector', 'Moreno', 0, '2017-04-13 09:48:23', NULL),
(11, 'd231057', NULL, 'Sjoerd', 'Hoeven', 0, '2017-05-30 16:17:58', NULL),
(12, 'd222222', NULL, 'Pieter Jan', 'Kolijn', 0, '2017-05-30 16:19:30', NULL),
(13, 'd333333', NULL, 'CornÃ©', 'Sierat', 0, '2017-05-30 16:30:32', NULL),
(14, 'adsfa', NULL, 'adfa', 'adsfa', 0, '2017-06-09 16:27:20', NULL),
(15, 'adsfadfasd', NULL, 'adsfads', 'adfads', 0, '2017-06-09 16:27:26', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_poulenumber`
--

CREATE TABLE `tbl_poulenumber` (
  `id` int(11) NOT NULL,
  `poulenumber` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_poulenumber`
--

INSERT INTO `tbl_poulenumber` (`id`, `poulenumber`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_poules`
--

CREATE TABLE `tbl_poules` (
  `id` int(11) NOT NULL,
  `naam` varchar(10) NOT NULL,
  `created_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(11) UNSIGNED NOT NULL,
  `poule_id` int(11) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `points` int(255) DEFAULT NULL,
  `doesexist` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_teams`
--

INSERT INTO `tbl_teams` (`id`, `poule_id`, `teamname`, `points`, `doesexist`, `created_at`, `deleted_at`) VALUES
(1, 0, 'Free Agent', NULL, 1, '2017-04-13 09:42:45', NULL),
(2, 0, 'PSV', NULL, 1, '2017-04-13 09:42:45', NULL),
(3, 0, 'Feyenoord', NULL, 1, '2017-05-04 11:08:12', NULL),
(4, 0, 'Vitesse', NULL, 1, '2017-05-04 11:08:12', NULL),
(5, 0, 'bla', 0, 1, '2017-05-30 15:15:12', NULL),
(6, 0, 'NAC Breda', 0, 1, '2017-05-30 15:15:36', NULL),
(23, 1, 'poul1', 0, 1, '2017-05-30 16:51:24', NULL),
(24, 2, 'poul2', 0, 1, '2017-05-30 16:51:31', NULL),
(25, 3, 'poul3', 0, 1, '2017-05-30 16:51:36', NULL),
(26, 4, 'poul4', 0, 1, '2017-05-30 16:51:40', NULL),
(27, 1, 'ddd', 0, 1, '2017-06-09 16:27:31', NULL),
(28, 2, 'adsfadfa', 0, 1, '2017-06-09 16:27:34', NULL),
(29, 3, '1233', 0, 1, '2017-06-11 11:48:53', NULL),
(30, 4, '1231', 0, 1, '2017-06-11 11:48:57', NULL),
(31, 1, '12321', 0, 1, '2017-06-11 11:48:59', NULL),
(33, 2, '41251523', 0, 1, '2017-06-11 11:49:10', NULL),
(34, 3, '52463', 0, 1, '2017-06-11 11:49:12', NULL),
(35, 4, '4325', 0, 1, '2017-06-11 11:49:13', NULL),
(36, 1, '53125123', 0, 1, '2017-06-11 11:49:14', NULL),
(37, 2, '35112512', 0, 1, '2017-06-11 11:49:15', NULL),
(38, 3, 'dfadfagd', 0, 1, '2017-06-11 11:49:17', NULL),
(39, 4, 'adgadg', 0, 1, '2017-06-11 11:49:18', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `created_at`, `deleted_at`) VALUES
(1, 'sjoerd', 'sjoerd', 'sjoerdh.sh@gmail.com', '2017-06-10 14:45:41', NULL),
(3, 'test', 'test', 'test@test.nl', '2017-06-10 15:18:44', NULL),
(4, 'test2', 'test2', 'test2@test.nl', '2017-06-10 15:20:05', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_matches`
--
ALTER TABLE `tbl_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexen voor tabel `tbl_poulenumber`
--
ALTER TABLE `tbl_poulenumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tbl_poules`
--
ALTER TABLE `tbl_poules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naam` (`naam`);

--
-- Indexen voor tabel `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`teamname`);

--
-- Indexen voor tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_matches`
--
ALTER TABLE `tbl_matches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT voor een tabel `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `tbl_poulenumber`
--
ALTER TABLE `tbl_poulenumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `tbl_poules`
--
ALTER TABLE `tbl_poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT voor een tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD CONSTRAINT `tbl_players_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tbl_teams` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
