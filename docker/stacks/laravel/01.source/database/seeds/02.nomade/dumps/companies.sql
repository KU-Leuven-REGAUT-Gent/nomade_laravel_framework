-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1
-- Gegenereerd op: 19 jul 2022 om 07:32
-- Serverversie: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomade`
--

--
-- Gegevens worden geëxporteerd voor tabel `companies`
--

INSERT INTO `companies` (`id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'KU Leuven', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Centre of Expertise and New Technologies Resources & Communication APF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'DSP Valley', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'HELHa', 'HELHa', 'HELHa', 'Haute École Louvain en Hainaut', 'Haute École Louvain en Hainaut', 'Haute École Louvain en Hainaut', '2021-05-06 09:35:38.877', '2021-05-06 09:47:51.371', NULL, NULL, NULL, NULL),
(15, 'Henallux', 'Henallux', 'Henallux', 'Haute École de Namur-Liège-Luxembourg', 'Haute École de Namur-Liège-Luxembourg', 'Haute École de Namur-Liège-Luxembourg', '2021-05-06 09:46:16.176', '2021-05-06 09:46:16.176', NULL, NULL, NULL, NULL),
(16, 'Université de Mons', 'Université de Mons', 'Université de Mons', NULL, NULL, NULL, '2021-05-06 09:54:11.669', '2021-05-06 09:54:11.669', NULL, NULL, NULL, NULL),
(17, 'Centre hospitalier universitaire de Rouen', 'Centre hospitalier universitaire de Rouen', 'Centre hospitalier universitaire de Rouen', NULL, NULL, NULL, '2021-05-06 12:57:09.224', '2021-05-06 12:57:09.224', NULL, NULL, NULL, NULL),
(18, 'Unknown', 'Unknown', 'Unknown', NULL, NULL, NULL, '2021-05-06 12:58:25.314', '2021-05-06 12:58:25.314', NULL, NULL, NULL, NULL),
(19, 'Universiteit Antwerpen', 'Universiteit Antwerpen', 'Universiteit Antwerpen', NULL, NULL, NULL, '2021-05-06 13:52:04.869', '2021-05-06 13:52:04.869', NULL, NULL, NULL, NULL),
(20, 'Université de Lille', 'Université de Lille', 'Université de Lille', NULL, NULL, NULL, '2021-05-06 13:53:19.876', '2021-05-06 13:55:05.290', NULL, NULL, NULL, NULL),
(21, 'Université Polytechnique des Hauts-de-France', 'Université Polytechnique des Hauts-de-France', 'Université Polytechnique des Hauts-de-France', NULL, NULL, NULL, '2021-05-06 13:56:38.259', '2021-05-06 13:57:41.795', NULL, NULL, NULL, NULL),
(22, 'Université de Reims Champagne-Ardenne', 'Université de Reims Champagne-Ardenne', 'Université de Reims Champagne-Ardenne', NULL, NULL, NULL, '2021-05-06 13:58:57.906', '2021-05-06 13:58:57.906', NULL, NULL, NULL, NULL),
(23, 'Université de Picardie', 'Université de Picardie', 'Université de Picardie', NULL, NULL, NULL, '2021-05-06 13:59:42.887', '2021-05-06 13:59:42.887', NULL, NULL, NULL, NULL),
(24, 'Université catholique de Louvain', 'Université catholique de Louvain', 'Université catholique de Louvain', NULL, NULL, NULL, '2021-08-31 12:38:40.949', '2021-08-31 12:38:40.949', NULL, NULL, NULL, NULL),
(25, 'Centre hospitalier régional universitaire de Lille (CHRU)', 'Centre hospitalier régional universitaire de Lille (CHRU)', 'Centre hospitalier régional universitaire de Lille (CHRU)', NULL, NULL, NULL, '2021-08-31 13:14:25.567', '2021-08-31 13:14:25.567', NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
