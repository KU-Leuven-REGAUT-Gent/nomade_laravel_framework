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
-- Gegevens worden geëxporteerd voor tabel `permissions`
--

INSERT INTO `permissions` (`id`, `uuid`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `old_id`, `old_name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'api.index', 'api.index', NULL, NULL, 'View the api info', NULL, NULL, 11, 'API_info', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'api.log.index', 'api.log.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'api.log.show', 'api.log.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'company.index', 'company.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'company.index.company', 'company.index.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'company.index.user', 'company.index.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'company.show', 'company.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'company.show.company', 'company.show.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'company.show.user', 'company.show.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'company.create', 'company.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'company.edit', 'company.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'debug.console', 'debug.console', NULL, NULL, 'Development Console', NULL, NULL, 27, 'DEBUG_development_console', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'debug.log.show', 'debug.log.show', NULL, NULL, '', NULL, NULL, 25, 'DEBUG_log_view', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'debug.server.edit', 'debug.server.edit', NULL, NULL, '', NULL, NULL, 26, 'DEBUG_server_select', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'debug.server.show', 'debug.server.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'permission.create', 'permission.create', NULL, NULL, 'Give a user a permission', NULL, NULL, 12, 'PERMS_add', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'permission.destroy', 'permission.destroy', NULL, NULL, 'Remove a permission from a user', NULL, NULL, 14, 'PERMS_del', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'permission.index', 'permission.index', NULL, NULL, 'View users own permissions', NULL, NULL, 8, 'PERMS_view_all_own', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'permission.index.user', 'permission.index.user', NULL, NULL, 'View users own allowed permissions', NULL, NULL, 7, 'PERMS_view_own', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'questionnaire.create', 'questionnaire.create', NULL, NULL, 'Add Questionnaire', NULL, NULL, 1, 'QNR_add', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'questionnaire.destroy ', 'questionnaire.destroy ', NULL, NULL, 'Delete Questionnaire', NULL, NULL, 3, 'QNR_del', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'questionnaire.draft.arrange', 'questionnaire.draft.arrange', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'questionnaire.draft.create', 'questionnaire.draft.create', NULL, NULL, '', NULL, NULL, 16, 'QNR_DRAFT_new', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'questionnaire.draft.delete', 'questionnaire.draft.delete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'questionnaire.draft.duplicate', 'questionnaire.draft.duplicate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'questionnaire.draft.edit', 'questionnaire.draft.edit', NULL, NULL, '', NULL, NULL, 17, 'QNR_DRAFT_edit', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'questionnaire.draft.show', 'questionnaire.draft.show', NULL, NULL, '', NULL, NULL, 15, 'QNR_DRAFT', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'questionnaire.edit', 'questionnaire.edit', NULL, NULL, 'Edit Questionnaire', NULL, NULL, 2, 'QNR_edit', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'questionnaire.index', 'questionnaire.index', NULL, NULL, 'View list of all questionnaires', NULL, NULL, 9, 'QNR_list', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'questionnaire.pdf.show', 'questionnaire.pdf.show', NULL, NULL, 'Get pdf of questionnaires', NULL, NULL, 10, 'QNR_pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'questionnaire.show', 'questionnaire.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'parameter.create', 'parameter.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'parameter.index', 'parameter.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'parameter.show', 'parameter.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'parameter.edit', 'parameter.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'questionnaireCategory.create', 'questionnaireCategory.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'questionnaireCategory.index', 'questionnaireCategory.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'questionnaireCategory.show', 'questionnaireCategory.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'questionnaireCategory.edit', 'questionnaireCategory.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'questionnaireGroup.create', 'questionnaireGroup.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'questionnaireGroup.index', 'questionnaireGroup.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'questionnaireGroup.show', 'questionnaireGroup.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'questionnaireGroup.edit', 'questionnaireGroup.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'measurement.create', 'measurement.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'measurement.index', 'measurement.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'measurement.show', 'measurement.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'measurement.edit', 'measurement.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'setup.create', 'setup.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'setup.index', 'setup.index', NULL, NULL, '', NULL, NULL, 38, 'STP_list_all', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'setup.index.company', 'setup.index.company', NULL, NULL, '', NULL, NULL, 39, 'STP_list_own_company', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'setup.index.user', 'setup.index.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'setup.show', 'setup.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'setup.show.company', 'setup.show.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'setup.show.user', 'setup.show.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'setup.stream.index', 'setup.stream.index', NULL, NULL, 'List all current streams', NULL, NULL, 46, 'STP_stream_list_all', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'setup.stream.index.company', 'setup.stream.index.company', NULL, NULL, 'List all streams by own company', NULL, NULL, 47, 'STP_stream_list_own_company', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'setup.edit', 'setup.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'instrument.create', 'instrument.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'instrument.index', 'instrument.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'instrument.show', 'instrument.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'instrument.edit', 'instrument.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'instrumentType.create', 'instrumentType.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'instrumentType.index', 'instrumentType.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'instrumentType.show', 'instrumentType.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'instrumentType.edit', 'instrumentType.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'submission.create', 'submission.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'submission.edit', 'submission.edit', NULL, NULL, '', NULL, NULL, 30, 'QNR_SBM_edit_all', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'submission.edit.company', 'submission.edit.company', NULL, NULL, '', NULL, NULL, 29, 'QNR_SBM_edit_company', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'submission.edit.user', 'submission.edit.user', NULL, NULL, '', NULL, NULL, 28, 'QNR_SBM_edit_own', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'submission.index', 'submission.index', NULL, NULL, 'View the list of all submitted questionnaires', NULL, NULL, 19, 'QNR_SBM_list_all', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'submission.index.company', 'submission.index.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'submission.index.user', 'submission.index.user', NULL, NULL, 'View the list of all own submitted questionnaires ', NULL, NULL, 20, 'QNR_SBM_list_own', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'submission.pdf.show', 'submission.pdf.show', NULL, NULL, '', NULL, NULL, 21, 'QNR_SBM_pdf_all', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'submission.pdf.show.company', 'submission.pdf.show.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'submission.pdf.show.user', 'submission.pdf.show.user', NULL, NULL, '', NULL, NULL, 22, 'QNR_SBM_pdf_own', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'submission.show', 'submission.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'submission.show.company', 'submission.show.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'submission.show.user', 'submission.show.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'user.create', 'user.create', NULL, NULL, 'Add User', NULL, NULL, 4, 'USR_add_all', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'user.create.company', 'user.create.company', NULL, NULL, 'Add users to own company', NULL, NULL, 40, 'USR_add_own_company', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'user.destroy', 'user.destroy', NULL, NULL, 'Delete User', NULL, NULL, 6, 'USR_del_all', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'user.destroy.company', 'user.destroy.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'user.edit', 'user.edit', NULL, NULL, 'Edit User', NULL, NULL, 5, 'USR_edit_all', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'user.edit.company', 'user.edit.company', NULL, NULL, 'Edit User from own company', NULL, NULL, 43, 'USR_edit_own_company', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'user.index', 'user.index', NULL, NULL, 'List all users', NULL, NULL, 42, 'USR_list_all', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'user.index.company', 'user.index.company', NULL, NULL, 'List all users from own company', NULL, NULL, 41, 'USR_list_own_company', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'user.permission.create', 'user.permission.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'user.permission.edit', 'user.permission.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'user.permission.index', 'user.permission.index', NULL, NULL, '', NULL, NULL, 44, 'PERMS_USR_list_all', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'user.permission.index.company', 'user.permission.index.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'user.permission.index.user', 'user.permission.index.user', NULL, NULL, '', NULL, NULL, 45, 'PERMS_USR_list_own_company', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'user.permission.show', 'user.permission.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'user.permission.show.company', 'user.permission.show.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'user.permission.show.user', 'user.permission.show.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'user.show', 'user.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'user.show.company', 'user.show.company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'user.show.user', 'user.show.user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'parameterValue.show', 'parameterValue.show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'parameterValue.index', 'parameterValue.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'parameterValue.create', 'parameterValue.create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'parameterValue.edit', 'parameterValue.edit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
