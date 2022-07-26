-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1
-- Gegenereerd op: 19 jul 2022 om 07:33
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
-- Gegevens worden geëxporteerd voor tabel `measurements`
--

INSERT INTO `measurements` (`id`, `measurement_category_id`, `setup_id`, `user_id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `max`, `count`, `started_at`, `stopped_at`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 2, 3, 116, 'Test 1 [DELETE]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-21 13:04:46.811', '2020-10-21 13:05:02.965', '2020-10-21 13:04:46.577', '2020-10-21 13:05:03.536', NULL, 116, 116, NULL),
(2, 2, 3, 116, 'Test 2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 32114, 32111, '2020-10-21 13:12:51.436', '2000-01-01 01:00:00.000', '2020-10-21 13:12:51.323', '2020-10-21 13:12:51.323', NULL, 116, 116, NULL),
(3, 2, 2, 159, 'Flex-retour Lx [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-16 17:00:00.000', '2021-03-16 17:05:00.000', '2021-03-16 17:01:03.851', '2021-03-16 17:01:03.851', NULL, 159, 159, NULL),
(4, 2, 3, 116, 'KUL test [DELETE]', NULL, NULL, NULL, NULL, NULL, 1941, 1939, '2000-01-01 00:01:57.287', '2000-01-01 00:02:36.087', '2021-05-21 13:49:54.900', '2021-05-21 13:50:35.339', NULL, 116, 116, NULL),
(5, 2, 3, 116, 'KUL test 2 [DELETE]', NULL, NULL, NULL, NULL, NULL, 1734, 1732, '2000-01-01 00:00:34.159', '2000-01-01 00:01:08.823', '2021-05-25 09:35:57.234', '2021-05-25 09:36:32.943', NULL, 116, 116, NULL),
(6, 2, 7, 157, 'test', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2000-01-01 01:01:34.397', '2000-01-01 01:02:16.200', '2021-05-31 16:05:40.519', '2021-05-31 16:06:25.907', NULL, 157, 157, NULL),
(7, 2, 13, 157, 'test [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-19 15:01:10.094', '2000-01-01 01:00:00.000', '2021-06-19 13:01:10.554', '2021-06-19 13:01:10.554', NULL, 157, 157, NULL),
(8, 2, 13, 157, 'test [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 17:54:22.434', '2000-01-01 01:00:00.000', '2021-06-20 15:54:22.737', '2021-06-20 15:54:22.737', NULL, 157, 157, NULL),
(9, 2, 13, 157, 'test2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:00:14.575', '2000-01-01 01:00:00.000', '2021-06-20 16:00:15.255', '2021-06-20 16:00:15.255', NULL, 157, 157, NULL),
(10, 2, 13, 157, 'test3 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-20 18:01:35.946', '2000-01-01 01:00:00.000', '2021-06-20 16:01:36.372', '2021-06-20 16:01:36.372', NULL, 157, 157, NULL),
(11, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:02:51.659', '2000-01-01 01:00:00.000', '2021-06-20 16:02:52.121', '2021-06-20 16:02:52.121', NULL, 157, 157, NULL),
(12, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-20 18:03:42.693', '2000-01-01 01:00:00.000', '2021-06-20 16:03:43.100', '2021-06-20 16:03:43.100', NULL, 157, 157, NULL),
(13, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:05:15.549', '2000-01-01 01:00:00.000', '2021-06-20 16:05:15.898', '2021-06-20 16:05:15.898', NULL, 157, 157, NULL),
(14, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:05:53.864', '2000-01-01 01:00:00.000', '2021-06-20 16:05:54.772', '2021-06-20 16:05:54.772', NULL, 157, 157, NULL),
(15, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:06:51.795', '2000-01-01 01:00:00.000', '2021-06-20 16:06:52.301', '2021-06-20 16:06:52.301', NULL, 157, 157, NULL),
(16, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:07:31.968', '2000-01-01 01:00:00.000', '2021-06-20 16:07:32.259', '2021-06-20 16:07:32.259', NULL, 157, 157, NULL),
(17, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:08:19.335', '2000-01-01 01:00:00.000', '2021-06-20 16:08:19.619', '2021-06-20 16:08:19.619', NULL, 157, 157, NULL),
(18, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:11:15.462', '2000-01-01 01:00:00.000', '2021-06-20 16:11:15.737', '2021-06-20 16:11:15.737', NULL, 157, 157, NULL),
(19, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:13:50.271', '2000-01-01 01:00:00.000', '2021-06-20 16:13:51.063', '2021-06-20 16:13:51.063', NULL, 157, 157, NULL),
(20, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:14:29.768', '2000-01-01 01:00:00.000', '2021-06-20 16:14:30.233', '2021-06-20 16:14:30.233', NULL, 157, 157, NULL),
(21, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:18:08.481', '2000-01-01 01:00:00.000', '2021-06-20 16:18:08.843', '2021-06-20 16:18:08.843', NULL, 157, 157, NULL),
(22, 2, 7, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-20 18:28:54.116', '2000-01-01 01:00:00.000', '2021-06-20 16:28:54.629', '2021-06-20 16:28:54.629', NULL, 157, 157, NULL),
(23, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:32:08.746', '2000-01-01 01:00:00.000', '2021-06-20 16:32:09.092', '2021-06-20 16:32:09.092', NULL, 157, 157, NULL),
(24, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-20 18:35:18.236', '2000-01-01 01:00:00.000', '2021-06-20 16:35:18.494', '2021-06-20 16:35:18.494', NULL, 157, 157, NULL),
(25, 2, 13, 157, 'test2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-21 18:18:33.236', '2000-01-01 01:00:00.000', '2021-06-21 16:18:33.764', '2021-06-21 16:18:33.764', NULL, 157, 157, NULL),
(26, 2, 13, 157, 'test2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-21 18:28:06.674', '2000-01-01 01:00:00.000', '2021-06-21 16:28:07.070', '2021-06-21 16:28:07.070', NULL, 157, 157, NULL),
(27, 2, 13, 157, 'test2', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-21 18:29:32.088', '2021-06-21 18:29:36.385', '2021-06-21 16:29:32.481', '2021-06-21 16:29:38.745', NULL, 157, 157, NULL),
(28, 2, 13, 157, 'test3', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-21 18:30:44.634', '2021-06-21 18:31:13.873', '2021-06-21 16:30:45.113', '2021-06-21 16:31:16.199', NULL, 157, 157, NULL),
(29, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-21 18:44:07.118', '2000-01-01 01:00:00.000', '2021-06-21 16:44:07.538', '2021-06-21 16:44:07.538', NULL, 157, 157, NULL),
(30, 2, 13, 157, 'test4 [DELETE]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-21 18:48:16.788', '2021-06-21 18:48:24.051', '2021-06-21 16:48:17.080', '2021-06-21 16:48:26.695', NULL, 157, 157, NULL),
(31, 2, 13, 157, 'test4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:11:37.569', '2000-01-01 01:00:00.000', '2021-06-22 17:11:38.067', '2021-06-22 17:11:38.067', NULL, 157, 157, NULL),
(32, 2, 13, 157, 'test5 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:14:25.757', '2000-01-01 01:00:00.000', '2021-06-22 17:14:26.039', '2021-06-22 17:14:26.039', NULL, 157, 157, NULL),
(33, 2, 13, 157, 'test6 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:35:12.274', '2000-01-01 01:00:00.000', '2021-06-22 17:35:12.669', '2021-06-22 17:35:12.669', NULL, 157, 157, NULL),
(34, 2, 13, 157, 'test6 [DELETE]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:48:58.545', '2021-06-22 17:49:07.502', '2021-06-22 17:48:58.808', '2021-06-22 17:49:11.056', NULL, 157, 157, NULL),
(35, 2, 13, 157, 'test7 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:50:53.845', '2021-06-22 17:49:07.502', '2021-06-22 17:50:54.327', '2021-06-22 17:50:54.327', NULL, 157, 157, NULL),
(36, 2, 13, 157, 'test8 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-22 17:52:17.154', '2000-01-01 01:00:00.000', '2021-06-22 17:52:17.693', '2021-06-22 17:52:17.693', NULL, 157, 157, NULL),
(37, 2, 13, 157, 'test7 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:53:30.049', '2000-01-01 01:00:00.000', '2021-06-22 17:53:30.370', '2021-06-22 17:53:30.370', NULL, 157, 157, NULL),
(38, 2, 13, 157, 'test8 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-22 17:55:00.982', '2000-01-01 01:00:00.000', '2021-06-22 17:55:01.417', '2021-06-22 17:55:01.417', NULL, 157, 157, NULL),
(39, 2, 3, 116, 'TabS4Test [DELETE]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2000-01-01 00:00:51.692', '2000-01-01 00:01:34.101', '2021-06-23 07:57:18.137', '2021-06-23 07:58:01.890', NULL, 116, 116, NULL),
(40, 2, 3, 116, 'TabS4Test2 [DELETE]', NULL, NULL, NULL, NULL, NULL, 125228, 125225, '2000-01-01 00:00:28.293', '2000-01-01 00:42:12.821', '2021-06-23 07:58:59.341', '2021-06-23 08:40:45.135', NULL, 116, 116, NULL),
(41, 2, 3, 116, 'Note10.1Test [DELETE]', NULL, NULL, NULL, NULL, NULL, 231433, 231431, '2000-01-01 00:43:49.949', '2000-01-01 02:00:58.596', '2021-06-23 08:47:09.935', '2021-06-23 10:04:19.755', NULL, 116, 116, NULL),
(42, 2, 13, 157, 'test9 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-23 11:04:52.887', '2000-01-01 01:00:00.000', '2021-06-23 11:04:53.470', '2021-06-23 11:04:53.470', NULL, 157, 157, NULL),
(43, 2, 13, 157, 'test10 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-23 11:19:32.821', '2021-06-23 11:19:59.072', '2021-06-23 11:19:33.308', '2021-06-23 11:19:59.425', NULL, 157, 157, NULL),
(44, 2, 3, 116, 'TabS4HeapDump [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 6371, 6368, '2000-01-01 00:00:52.273', '2000-01-01 01:00:00.000', '2021-06-23 12:53:59.135', '2021-06-23 12:53:59.135', NULL, 116, 116, NULL),
(45, 2, 3, 116, 'TabS4HeapDump2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 2328, 405, '2000-01-01 00:05:38.057', '2000-01-01 01:00:00.000', '2021-06-23 12:59:15.243', '2021-06-23 12:59:15.243', NULL, 116, 116, NULL),
(46, 2, 13, 157, 'test11 [DELETE]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-23 17:32:13.449', '2021-06-23 17:32:28.825', '2021-06-23 17:32:13.708', '2021-06-23 17:32:31.603', NULL, 157, 157, NULL),
(47, 2, 3, 116, 'TabS4Test [DELETE]', NULL, NULL, NULL, NULL, NULL, 8557, 8555, '2000-01-01 00:00:45.925', '2000-01-01 00:03:37.045', '2021-06-24 13:27:17.960', '2021-06-24 13:30:09.643', NULL, 116, 116, NULL),
(48, 2, 3, 116, 'TabS4Test2 [DELETE]', NULL, NULL, NULL, NULL, NULL, 3939, 3937, '2000-01-01 00:00:21.937', '2000-01-01 00:01:40.700', '2021-06-24 13:31:38.604', '2021-06-24 13:32:58.379', NULL, 116, 116, NULL),
(49, 2, 3, 116, 'TabS4test3 [DELETE]', NULL, NULL, NULL, NULL, NULL, 2364, 2361, '2000-01-01 00:00:54.323', '2000-01-01 00:01:41.578', '2021-06-24 13:35:33.595', '2021-06-24 13:36:21.656', NULL, 116, 116, NULL),
(50, 2, 3, 116, 'TabS4Test4 [DELETE]', NULL, NULL, NULL, NULL, NULL, 8302, 8300, '2000-01-01 00:02:06.123', '2000-01-01 00:04:52.148', '2021-06-24 13:39:54.017', '2021-06-24 13:42:40.844', NULL, 116, 116, NULL),
(51, 2, 3, 116, 'TabS4Test5 [DELETE]', NULL, NULL, NULL, NULL, NULL, 19622, 19619, '2000-01-01 00:05:30.909', '2000-01-01 00:12:06.340', '2021-06-24 13:43:46.746', '2021-06-24 13:50:23.180', NULL, 116, 116, NULL),
(52, 2, 13, 157, 'test12 [DELETE]', NULL, NULL, NULL, NULL, NULL, 892, 851, '2021-06-24 17:34:00.607', '2021-06-24 17:34:18.572', '2021-06-24 17:34:00.987', '2021-06-24 17:34:21.075', NULL, 157, 157, NULL),
(53, 2, 3, 116, 'TabS4Test6 [DELETE]', NULL, NULL, NULL, NULL, NULL, 4635, 4633, '2000-01-01 00:00:47.518', '2000-01-01 00:02:20.214', '2021-06-25 06:18:40.074', '2021-06-25 06:20:13.214', NULL, 116, 116, NULL),
(54, 2, 13, 157, 'test13 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 3088, 2859, '2021-06-25 07:24:13.329', '2000-01-01 01:00:00.000', '2021-06-25 07:24:13.607', '2021-06-25 07:24:13.607', NULL, 157, 157, NULL),
(55, 2, 13, 157, 'test14 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 1899, 1733, '2021-06-25 07:26:23.443', '2000-01-01 01:00:00.000', '2021-06-25 07:26:23.653', '2021-06-25 07:26:23.653', NULL, 157, 157, NULL),
(56, 2, 13, 157, 'test15 [DELETE]', NULL, NULL, NULL, NULL, NULL, 550, 534, '2021-06-25 07:27:49.692', '2021-06-25 07:28:00.825', '2021-06-25 07:27:49.978', '2021-06-25 07:28:03.512', NULL, 157, 157, NULL),
(57, 2, 13, 157, 'test16 [DELETE]', NULL, NULL, NULL, NULL, NULL, 627, 550, '2021-06-25 07:28:15.431', '2021-06-25 07:28:29.027', '2021-06-25 07:28:15.670', '2021-06-25 07:28:31.491', NULL, 157, 157, NULL),
(58, 2, 13, 157, 'test16 [DELETE]', NULL, NULL, NULL, NULL, NULL, 2064, 2063, '2021-06-25 07:32:54.997', '2021-06-25 07:33:36.426', '2021-06-25 07:32:55.640', '2021-06-25 07:33:38.554', NULL, 157, 157, NULL),
(59, 2, 3, 116, 'TabS4Test7 [DELETE]', NULL, NULL, NULL, NULL, NULL, 1651, 1649, '2000-01-01 00:00:50.060', '2000-01-01 00:01:23.059', '2021-06-25 07:40:02.632', '2021-06-25 07:40:36.355', NULL, 116, 116, NULL),
(60, 2, 13, 157, 'test17 [DELETE]', NULL, NULL, NULL, NULL, NULL, 1457, 1352, '2021-06-25 07:47:20.068', '2021-06-25 07:47:49.345', '2021-06-25 07:47:20.415', '2021-06-25 07:47:51.631', NULL, 157, 157, NULL),
(61, 2, 13, 157, 'test18 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 1526, 1438, '2021-06-25 08:00:57.453', '2000-01-01 01:00:00.000', '2021-06-25 08:00:57.676', '2021-06-25 08:00:57.676', NULL, 157, 157, NULL),
(62, 2, 13, 157, 'test19 [DELETE]', NULL, NULL, NULL, NULL, NULL, 328, 324, '2021-06-25 08:03:06.958', '2021-06-25 08:03:13.620', '2021-06-25 08:03:07.204', '2021-06-25 08:03:16.381', NULL, 157, 157, NULL),
(63, 2, 13, 157, 'test19 [DELETE]', NULL, NULL, NULL, NULL, NULL, 737, 709, '2021-06-25 08:24:29.422', '2021-06-25 08:24:44.297', '2021-06-25 08:24:29.758', '2021-06-25 08:24:48.274', NULL, 157, 157, NULL),
(64, 2, 13, 157, 'IMU_QUAT [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 8448, 7836, '2021-06-28 09:05:56.919', '2000-01-01 01:00:00.000', '2021-06-28 09:05:57.355', '2021-06-28 09:05:57.355', NULL, 157, 157, NULL),
(65, 2, 13, 157, 'IMU_QUAT2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 3976, 3975, '2021-06-28 09:10:09.155', '2000-01-01 01:00:00.000', '2021-06-28 09:10:09.439', '2021-06-28 09:10:09.439', NULL, 157, 157, NULL),
(66, 2, 13, 157, 'IMU_QUAT3 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 2803, 2802, '2021-06-28 09:12:18.905', '2000-01-01 01:00:00.000', '2021-06-28 09:12:19.131', '2021-06-28 09:12:19.131', NULL, 157, 157, NULL),
(67, 2, 13, 157, 'IMU_QUAT4 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 17127, 17126, '2021-06-28 09:15:14.402', '2000-01-01 01:00:00.000', '2021-06-28 09:15:14.704', '2021-06-28 09:15:14.704', NULL, 157, 157, NULL),
(68, 2, 13, 157, 'IMU_QUAT5 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 1501, 1498, '2021-06-28 09:24:53.864', '2000-01-01 01:00:00.000', '2021-06-28 09:24:54.357', '2021-06-28 09:24:54.357', NULL, 157, 157, NULL),
(69, 2, 13, 157, 'IMU_QUAT6 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 2157, 2156, '2021-06-28 09:26:52.109', '2000-01-01 01:00:00.000', '2021-06-28 09:26:52.422', '2021-06-28 09:26:52.422', NULL, 157, 157, NULL),
(70, 2, 16, 157, 'IMU_QGA_50Hz [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 3720, 3719, '2021-06-28 09:38:25.592', '2000-01-01 01:00:00.000', '2021-06-28 09:38:26.270', '2021-06-28 09:38:26.270', NULL, 157, 157, NULL),
(71, 2, 16, 157, 'IMU_QGA_50Hz2 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 4407, 4406, '2021-06-28 09:43:42.184', '2000-01-01 01:00:00.000', '2021-06-28 09:43:42.597', '2021-06-28 09:43:42.597', NULL, 157, 157, NULL),
(72, 2, 17, 157, 'IMU_100Hz [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 5518, 5517, '2021-06-28 09:58:11.293', '2000-01-01 01:00:00.000', '2021-06-28 09:58:12.284', '2021-06-28 09:58:12.284', NULL, 157, 157, NULL),
(73, 2, 17, 157, 'test20 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 45, 42, '2021-06-28 19:00:04.980', '2000-01-01 01:00:00.000', '2021-06-28 19:00:05.268', '2021-06-28 19:00:05.268', NULL, 157, 157, NULL),
(74, 2, 17, 157, 'test21 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 187, 186, '2021-06-28 19:02:00.633', '2000-01-01 01:00:00.000', '2021-06-28 19:02:00.836', '2021-06-28 19:02:00.836', NULL, 157, 157, NULL),
(75, 2, 17, 157, 'test22 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 2008, 2007, '2021-06-28 19:03:18.156', '2000-01-01 01:00:00.000', '2021-06-28 19:03:18.384', '2021-06-28 19:03:18.384', NULL, 157, 157, NULL),
(76, 2, 17, 157, 'test22 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 36, 35, '2021-06-28 19:14:24.915', '2000-01-01 01:00:00.000', '2021-06-28 19:14:25.173', '2021-06-28 19:14:25.173', NULL, 157, 157, NULL),
(77, 2, 17, 157, 'test23 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 2898, 2782, '2021-06-29 08:11:28.616', '2000-01-01 01:00:00.000', '2021-06-29 08:11:28.889', '2021-06-29 08:11:28.889', NULL, 157, 157, NULL),
(78, 2, 17, 157, 'test24 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 1911, 1910, '2021-06-29 08:14:17.527', '2000-01-01 01:00:00.000', '2021-06-29 08:14:17.764', '2021-06-29 08:14:17.764', NULL, 157, 157, NULL),
(79, 2, 17, 157, 'test25 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 1050, 1049, '2021-06-29 08:17:54.847', '2000-01-01 01:00:00.000', '2021-06-29 08:17:55.205', '2021-06-29 08:17:55.205', NULL, 157, 157, NULL),
(80, 2, 17, 157, 'test25 [DELETE]', NULL, NULL, NULL, NULL, NULL, 400, 398, '2021-06-29 09:56:25.321', '2021-06-29 09:56:33.374', '2021-06-29 09:56:25.556', '2021-06-29 09:56:42.648', NULL, 157, 157, NULL),
(81, 2, 17, 157, 'test26', NULL, NULL, NULL, NULL, NULL, 305, 304, '2021-06-29 09:57:11.760', '2021-06-29 09:57:17.941', '2021-06-29 09:57:12.066', '2021-06-29 09:57:19.779', NULL, 157, 157, NULL),
(82, 2, 17, 157, 'test27 [DELETE]', NULL, NULL, NULL, NULL, NULL, 987, 987, '2021-06-29 09:57:43.179', '2021-06-29 09:58:03.078', '2021-06-29 09:57:43.492', '2021-06-29 09:58:08.320', NULL, 157, 157, NULL),
(83, 2, 17, 157, 'test26 [DELETE]', NULL, NULL, NULL, NULL, NULL, 463, 462, '2021-06-29 10:09:14.803', '2021-06-29 10:09:24.134', '2021-06-29 10:09:15.043', '2021-06-29 10:09:26.924', NULL, 157, 157, NULL),
(84, 2, 17, 157, 'test30 [DELETE]', NULL, NULL, NULL, NULL, NULL, 327, 326, '2021-06-30 07:55:37.282', '2021-06-30 07:55:43.908', '2021-06-30 07:55:37.561', '2021-06-30 07:55:45.761', NULL, 157, 157, NULL),
(85, 2, 16, 157, 'test31 [DELETE]', NULL, NULL, NULL, NULL, NULL, 3753, 3751, '2021-06-30 07:56:56.263', '2021-06-30 07:58:11.386', '2021-06-30 07:56:56.459', '2021-06-30 07:58:12.974', NULL, 157, 157, NULL),
(86, 2, 16, 157, 'test31 [DELETE]', NULL, NULL, NULL, NULL, NULL, 2007, 2005, '2021-06-30 08:19:34.498', '2021-06-30 08:20:14.704', '2021-06-30 08:19:34.714', '2021-06-30 08:20:17.080', NULL, 157, 157, NULL),
(87, 2, 16, 157, 'test32 [DELETE]', NULL, NULL, NULL, NULL, NULL, 988, 987, '2021-06-30 10:50:21.012', '2021-06-30 10:50:40.860', '2021-06-30 10:50:21.208', '2021-06-30 10:50:42.416', NULL, 157, 157, NULL),
(88, 2, 16, 157, 'test33 [DELETE]', NULL, NULL, NULL, NULL, NULL, 1857, 1856, '2021-07-01 07:51:15.700', '2021-07-01 07:51:52.890', '2021-07-01 07:51:18.139', '2021-07-01 07:51:55.470', NULL, 157, 157, NULL),
(89, 2, 2, 159, 'test1 [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-28 08:44:00.000', '2021-07-28 08:46:00.000', '2021-07-28 08:23:07.942', '2021-07-28 08:23:07.942', NULL, 159, 159, NULL),
(90, 2, 3, 106, 'Prep_training_day_test_1', NULL, NULL, NULL, NULL, NULL, 4748, 4746, '2000-01-01 00:01:05.140', '2000-01-01 00:02:40.088', '2021-09-20 06:29:08.895', '2021-09-20 06:30:43.815', NULL, 106, 106, NULL),
(91, 2, 7, 106, 'Prep_training_day_test_2', NULL, NULL, NULL, NULL, NULL, 5143, 5141, '2021-09-20 08:12:42.284', '2021-09-20 08:12:42.284', '2021-09-20 08:12:58.410', '2021-09-20 08:14:41.523', NULL, 106, 106, NULL),
(92, 2, 16, 106, 'Prep_training_day_test_3', NULL, NULL, NULL, NULL, NULL, 7819, 7815, '2021-09-20 08:16:13.030', '2021-09-20 08:18:49.439', '2021-09-20 08:16:13.251', '2021-09-20 08:18:50.084', NULL, 106, 106, NULL),
(93, 2, 19, 106, 'Training day test 1', NULL, NULL, NULL, NULL, NULL, 3407, 3406, '2021-09-21 09:10:54.933', '2021-09-21 09:12:03.128', '2021-09-21 09:10:56.258', '2021-09-21 09:12:04.594', NULL, 106, 106, NULL),
(94, 2, 20, 166, '1', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-09-21 10:03:24.660', '2021-09-21 10:04:04.311', '2021-09-21 10:03:25.490', '2021-09-21 10:04:05.183', NULL, 166, 166, NULL),
(95, 2, 20, 166, 'test [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-09-21 12:54:39.992', '2000-01-01 01:00:00.000', '2021-09-21 12:54:40.218', '2021-09-21 12:54:40.218', NULL, 166, 166, NULL),
(96, 2, 20, 166, 'db test', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-09-21 13:00:51.798', '2021-09-21 13:01:31.846', '2021-09-21 13:00:52.092', '2021-09-21 13:01:32.165', NULL, 166, 166, NULL),
(97, 2, 20, 116, 'db test 2 [DELETE]', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-09-21 13:03:25.581', '2021-09-21 13:16:38.111', '2021-09-21 13:03:25.850', '2021-09-21 13:16:42.509', NULL, 116, 116, NULL),
(98, 2, 21, 116, 'db test 3', NULL, NULL, NULL, NULL, NULL, 2495, 2492, '2021-09-21 13:20:27.187', '2021-09-21 13:21:17.115', '2021-09-21 13:20:27.380', '2021-09-21 13:21:18.459', NULL, 116, 116, NULL),
(99, 2, 21, 116, 'test 2', NULL, NULL, NULL, NULL, NULL, 4130, 4129, '2021-09-21 13:21:27.793', '2021-09-21 13:22:50.442', '2021-09-21 13:21:28.185', '2021-09-21 13:22:52.325', NULL, 116, 116, NULL),
(100, 2, 3, 116, 'UI test [DELETE]', NULL, NULL, NULL, NULL, NULL, 4618, 4616, '2000-01-01 00:00:34.246', '2000-01-01 00:02:06.597', '2021-10-01 13:58:56.628', '2021-10-01 14:00:30.568', NULL, 116, 116, NULL),
(101, 2, 3, 116, 'UI test 2 [DELETE]', NULL, NULL, NULL, NULL, NULL, 2781, 2778, '2000-01-01 00:00:54.037', '2000-01-01 00:01:49.620', '2021-10-04 06:34:59.935', '2021-10-04 06:35:56.405', NULL, 116, 116, NULL),
(102, 2, 3, 116, 'UI test 3 [DELETE]', NULL, NULL, NULL, NULL, NULL, 4158, 4155, '2000-01-01 00:00:52.853', '2000-01-01 00:02:15.995', '2021-10-04 06:47:43.746', '2021-10-04 06:49:09.907', NULL, 116, 116, NULL),
(103, 2, 3, 116, 'UI test 4 [DELETE]', NULL, NULL, NULL, NULL, NULL, 3261, 3259, '2000-01-01 00:00:23.744', '2000-01-01 00:01:28.953', '2021-10-04 09:39:48.955', '2021-10-04 09:40:55.006', NULL, 116, 116, NULL),
(104, 2, 3, 116, 'UI test 5 [DELETE]', NULL, NULL, NULL, NULL, NULL, 6235, 6232, '2000-01-01 00:00:38.755', '2000-01-01 00:02:43.427', '2021-10-04 09:45:54.585', '2021-10-04 09:48:00.645', NULL, 116, 116, NULL),
(105, 2, 3, 116, 'UI test 6 [DELETE]', NULL, NULL, NULL, NULL, NULL, 6808, 6806, '2000-01-01 00:00:24.448', '2000-01-01 00:02:40.589', '2021-10-04 09:57:05.757', '2021-10-04 09:59:23.196', NULL, 116, 116, NULL),
(106, 2, 3, 116, 'UI test 7 [DELETE]', NULL, NULL, NULL, NULL, NULL, 13361, 13358, '2000-01-01 00:00:36.532', '2000-01-01 00:05:03.722', '2021-10-04 12:13:06.895', '2021-10-04 12:17:34.998', NULL, 116, 116, NULL),
(107, 2, 3, 116, 'UI test 8 [DELETE]', NULL, NULL, NULL, NULL, NULL, 3569, 3566, '2000-01-01 00:00:33.375', '2000-01-01 00:01:44.725', '2021-10-04 12:20:34.760', '2021-10-04 12:21:46.807', NULL, 116, 116, NULL),
(108, 2, 3, 116, 'UI test 9 [DELETE]', NULL, NULL, NULL, NULL, NULL, 2131, 2128, '2000-01-01 00:00:39.011', '2000-01-01 00:01:21.614', '2021-10-04 13:19:09.679', '2021-10-04 13:19:54.438', NULL, 116, 116, NULL),
(109, 2, 3, 116, 'ui test 10 [DELETE]', NULL, NULL, NULL, NULL, NULL, 3121, 3118, '2000-01-01 00:00:48.852', '2000-01-01 00:01:51.246', '2021-10-04 13:24:44.595', '2021-10-04 13:25:47.867', NULL, 116, 116, NULL),
(110, 2, 3, 116, 'version 0.15 test [DELETE]', NULL, NULL, NULL, NULL, NULL, 15847, 15845, '2000-01-01 00:00:38.029', '2000-01-01 00:05:54.943', '2021-10-06 12:58:40.041', '2021-10-06 13:03:57.827', NULL, 116, 116, NULL),
(111, 2, 19, 157, 'tt [UNKNOWN]', NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-10-07 14:20:10.064', '2000-01-01 01:00:00.000', '2021-10-07 14:20:10.310', '2021-10-07 14:20:10.310', NULL, 157, 157, NULL),
(112, 2, 19, 116, 'test movie [DELETE]', NULL, NULL, NULL, NULL, NULL, 3518, 3515, '2021-10-12 08:13:26.594', '2021-10-12 08:14:37.013', '2021-10-12 08:13:26.928', '2021-10-12 08:14:38.403', NULL, 116, 116, NULL),
(113, 2, 19, 116, 'movie [DELETE]', NULL, NULL, NULL, NULL, NULL, 1603, 1602, '2021-10-12 08:23:22.439', '2021-10-12 08:23:54.553', '2021-10-12 08:23:22.706', '2021-10-12 08:23:56.628', NULL, 116, 116, NULL),
(114, 2, 19, 116, 'movie [DELETE]', NULL, NULL, NULL, NULL, NULL, 1851, 1850, '2021-10-12 08:38:30.531', '2021-10-12 08:39:07.642', '2021-10-12 08:38:30.754', '2021-10-12 08:39:08.966', NULL, 116, 116, NULL),
(115, 2, 19, 116, 'test [DELETE]', NULL, NULL, NULL, NULL, NULL, 4068, 4067, '2021-10-26 07:32:49.261', '2021-10-26 07:34:10.708', '2021-10-26 07:32:49.716', '2021-10-26 07:34:12.945', NULL, 116, 116, NULL),
(116, 2, 45, 116, 'test 6 imu', NULL, NULL, NULL, NULL, NULL, 3351, 3350, '2022-04-05 11:30:50.424', '2022-04-05 11:31:57.503', '2022-04-05 11:30:50.681', '2022-04-05 11:32:00.799', NULL, 116, 116, NULL),
(117, 2, 46, 116, 'test 6 imu 50 h', NULL, NULL, NULL, NULL, NULL, 6906, 6905, '2022-04-05 11:40:19.839', '2022-04-05 11:42:38.035', '2022-04-05 11:40:20.052', '2022-04-05 11:42:40.800', NULL, 116, 116, NULL),
(118, 2, 45, 116, 'punch test 100Hz', NULL, NULL, NULL, NULL, NULL, 1796, 1795, '2022-04-05 11:56:47.508', '2022-04-05 11:57:23.489', '2022-04-05 11:56:47.930', '2022-04-05 11:57:25.808', NULL, 116, 116, NULL),
(119, 2, 46, 116, 'test 6 imu 50Hz sync', NULL, NULL, NULL, NULL, NULL, 15358, 15357, '2022-04-05 12:01:52.047', '2022-04-05 12:06:59.248', '2022-04-05 12:01:52.239', '2022-04-05 12:07:01.027', NULL, 116, 116, NULL),
(120, 2, 47, 116, 'hein test [DELETE]', NULL, NULL, NULL, NULL, NULL, 17709, 17708, '2022-05-03 07:15:47.093', '2022-05-03 07:21:41.322', '2022-05-03 07:15:47.213', '2022-05-03 07:21:42.756', NULL, 116, 116, NULL),
(121, 2, 47, 131, 'other user test [DELETE]', NULL, NULL, NULL, NULL, NULL, 1729, 1728, '2022-06-07 13:45:42.858', '2022-06-07 13:46:17.501', '2022-06-07 13:45:42.980', '2022-06-07 13:46:18.668', NULL, 116, 116, NULL),
(122, 2, 52, 116, 'test 6imu', NULL, NULL, NULL, NULL, NULL, 4890, 4889, '2022-06-29 07:19:40.552', '2022-06-29 07:21:18.423', '2022-06-29 07:19:40.537', '2022-06-29 07:21:21.116', NULL, 116, 116, NULL),
(123, 2, 52, 116, 'val test', NULL, NULL, NULL, NULL, NULL, 2225, 2215, '2022-06-29 07:31:08.506', '2022-06-29 07:31:53.008', '2022-06-29 07:31:07.680', '2022-06-29 07:31:53.373', NULL, 116, 116, NULL),
(124, 2, 52, 116, 'lat test', NULL, NULL, NULL, NULL, NULL, 28006, 27999, '2022-06-29 08:01:40.033', '2022-06-29 08:11:00.544', '2022-06-29 08:01:40.169', '2022-06-29 08:11:01.522', NULL, 116, 116, NULL),
(125, 2, 52, 116, 'callibration test', NULL, NULL, NULL, NULL, NULL, 3373, 3363, '2022-06-29 08:35:53.484', '2022-06-29 08:37:00.944', '2022-06-29 08:35:53.264', '2022-06-29 08:37:02.264', NULL, 116, 116, NULL),
(126, 2, 52, 116, 'callibration test movie', NULL, NULL, NULL, NULL, NULL, 2904, 2894, '2022-06-29 08:37:50.884', '2022-06-29 08:38:48.963', '2022-06-29 08:37:50.558', '2022-06-29 08:38:50.218', NULL, 116, 116, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
