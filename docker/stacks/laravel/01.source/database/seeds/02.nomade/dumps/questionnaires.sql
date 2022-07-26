-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1
-- Gegenereerd op: 19 jul 2022 om 07:35
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
-- Gegevens worden geëxporteerd voor tabel `questionnaires`
--

INSERT INTO `questionnaires` (`id`, `questionnaire_category_id`, `questionnaire_group_id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `version`, `draft`, `editable`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 3, 1, 'History', 'Anamnese', 'Anamnèse', 'History (to be completed by the clinician, he/she is the one who asks the questions to the patient)', 'Anamnese (in te vullen door de therapeut, hij/zij is degene die de vragen aan de patiënt stelt)', 'Anamnèse (à compléter par le clinicien, c’est lui qui pose les questions au patient)', 1, 0, 2, '2020-09-25 08:51:48.085', '2021-02-08 14:11:23.119', NULL, 1, 3, NULL),
(2, 3, 1, 'Symptoms per site', 'Symptomen per site', 'Symptômes par site', 'Symptoms per site', 'Symptomen per site', 'Symptômes par site', 1, 0, 2, '2020-09-25 09:10:02.159', '2021-02-09 08:09:33.405', NULL, 1, 3, NULL),
(3, 3, 1, 'Physical Examination', 'Fysiek onderzoek', 'Examen Physique', 'Physical Examination', 'Fysiek onderzoek', 'Examen Physique', 1, 0, 2, '2020-09-28 12:11:07.741', '2021-02-09 14:36:04.265', NULL, 116, 3, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
