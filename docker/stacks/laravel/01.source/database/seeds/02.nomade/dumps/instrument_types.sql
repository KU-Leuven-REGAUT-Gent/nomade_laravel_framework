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
-- Gegevens worden geëxporteerd voor tabel `instrument_types`
--

INSERT INTO `instrument_types` (`id`, `instrument_type_category_id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(10, 1, 'Joystick (Penny & Giles)', NULL, NULL, 'Joystick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 'IMU', NULL, NULL, 'IMU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 'GPS', NULL, NULL, 'GPS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 4, 'CAN Node (1US & 1IR)', NULL, NULL, 'CAN Node with 1 Ultra Sonic and 1 Infra Red sensor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 4, 'CAN Node (1US & 3IR)', NULL, NULL, 'CAN Node with 1 Ultra Sonic and 3 Infra Red sensor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 5, 'OAS (4 instruments)', NULL, NULL, 'OAS - Software Instrument with 4 input instruments', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 4, 'CAN Node (1US & 2IR)', NULL, NULL, 'CAN Node with 1 Ultra Sonic and 2 Infra Red sensor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 4, 'CAN Node (1IR)', NULL, NULL, 'CAN Node with 1 Infra Red sensor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 4, 'CAN Node (1US)', NULL, NULL, 'CAN Node with 1 Ultra Sonic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 'Joystick (Dynamic Control DX2)', NULL, NULL, 'Joystick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 6, 'Real Time Clock', NULL, NULL, 'Real Time Clock', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 4, 'CAN Node (4IR)', NULL, NULL, 'CAN Node with 4 Infra Red sensors', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 1, 'Joystick (Dynamic Control LYNX)', NULL, NULL, 'Joystick', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 7, 'Android Device', NULL, NULL, 'Android Device as an Instrument (buzzer, haptic feedback)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 5, 'OAS (8 instruments)', NULL, NULL, 'OAS - Software Instrument with 8 input instruments', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, 'Wheelchair', NULL, NULL, 'Wheelchair as base/template for the setup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 9, 'Joystick profile', NULL, NULL, 'A profile with its parameters', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 10, 'AAMS', NULL, NULL, 'AAMS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 11, 'Wheelchair P&G', NULL, NULL, 'A Template for a P&G Wheelchair as base for a setup.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 11, 'Wheelchair DX', NULL, NULL, 'A Template for a Dynamic Control Wheelchair as base for a setup.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 12, 'Body (Front)', NULL, NULL, 'A Template for a Human Body (Front) as base for a setup.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 12, 'Body (Back)', NULL, NULL, 'A Template for a Human Body (Back) as base for a setup.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 12, 'Body (Complete)', NULL, NULL, 'A Template for a Human Body (Complete) as base for a setup.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 2, 'Wireless IMU', 'Wireless IMU', 'Wireless IMU', 'Wireless IMU', 'Wireless IMU', 'Wireless IMU', '2020-09-16 07:49:33.951', '2020-09-16 07:49:33.951', NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
