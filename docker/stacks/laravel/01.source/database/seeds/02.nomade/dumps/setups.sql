-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1
-- Gegenereerd op: 19 jul 2022 om 07:37
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
-- Gegevens worden geëxporteerd voor tabel `setups`
--

INSERT INTO `setups` (`id`, `setup_category_id`, `setup_group_id`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `hw_identifier`, `version`, `locked`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 2, 1, '4 IMU test', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2020-09-15 13:16:06.951', '2020-09-17 11:29:28.759', NULL, 121, 116, NULL),
(2, 2, 1, '1 IMU test', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2020-09-16 07:50:20.830', '2020-09-22 12:36:55.111', NULL, 116, 157, NULL),
(3, 2, 1, 'Test setup', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2020-10-21 12:46:20.735', '2020-10-21 13:03:12.297', NULL, 116, 116, NULL),
(4, 2, 1, '2 IMU Setup', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-01-27 13:53:29.220', '2021-01-27 13:53:29.220', NULL, 116, 116, NULL),
(5, 2, 1, 'Test_IMU', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-03-19 17:39:03.053', '2021-03-19 17:39:03.053', NULL, 157, 157, NULL),
(6, 2, 1, 'setup_2IMU', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-04-11 20:17:13.305', '2021-04-11 20:28:20.183', NULL, 157, 157, NULL),
(7, 2, 1, 'IMU_50Hz', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-05-10 10:24:43.679', '2021-05-10 18:02:56.099', NULL, 157, 157, NULL),
(8, 2, 1, 'Template_test', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-05-11 13:37:04.097', '2021-05-11 13:37:04.097', NULL, 116, 116, NULL),
(9, 2, 1, 'IMU_25Hz', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-05-15 13:07:14.760', '2021-05-15 13:09:05.362', NULL, 157, 157, NULL),
(10, 2, 1, 'FULL_IMU_50Hz', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-06-07 12:06:05.425', '2021-06-07 12:06:05.425', NULL, 116, 116, NULL),
(11, 2, 1, 'FULL_IMU_100Hz', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-06-07 12:07:59.061', '2021-06-07 12:07:59.061', NULL, 116, 116, NULL),
(12, 2, 1, 'test_IMU_RTC', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-06-19 12:37:12.154', '2021-06-19 12:44:50.785', NULL, 157, 157, NULL),
(13, 2, 1, 'test2_IMU_RTC', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-06-19 12:57:34.657', '2021-06-19 12:59:10.949', NULL, 157, 157, NULL),
(14, 2, 1, 'test_IMU', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-06-20 09:30:44.131', '2021-06-20 09:30:44.131', NULL, 157, 157, NULL),
(15, 2, 1, 'IMU_RTC_QUAT_GYRO_ACC_50Hz_1', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-06-20 16:19:13.968', '2021-06-20 16:20:23.272', NULL, 157, 157, NULL),
(16, 2, 1, 'IMU_RTC_QUAT_GYRO_ACC_50Hz_2', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-06-20 16:24:27.074', '2021-06-28 09:37:45.068', NULL, 157, 157, NULL),
(17, 2, 1, 'IMU_100Hz', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-06-27 11:51:05.976', '2021-06-28 09:57:40.650', NULL, 157, 157, NULL),
(18, 2, 1, 'Meeting9July', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-07-02 08:05:11.139', '2021-07-02 08:05:11.139', NULL, 116, 116, NULL),
(19, 2, 1, 'IMU_RTC_QUAT_GYRO_ACC_50Hz_3', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-09-20 13:14:44.889', '2021-09-21 09:10:17.372', NULL, 106, 106, NULL),
(20, 2, 1, 'test Paul', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-09-21 09:45:40.146', '2021-09-21 10:02:43.084', NULL, 159, 166, NULL),
(21, 2, 1, 'Paul test 2', NULL, NULL, NULL, NULL, NULL, '1', 1, 1, '2021-09-21 13:17:40.797', '2021-09-21 13:18:21.826', NULL, 116, 116, NULL),
(22, 2, 1, 'trrtv', NULL, NULL, NULL, NULL, NULL, '12587', 1, 0, '2021-09-24 20:32:59.552', '2021-09-24 20:32:59.552', NULL, 167, 167, NULL),
(23, 2, 1, 'Movie setup', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-10-12 08:52:10.775', '2021-10-12 08:52:10.775', NULL, 116, 116, NULL),
(24, 2, 1, 'test jarne', NULL, NULL, NULL, NULL, NULL, '24', 1, 0, '2021-10-19 16:04:20.308', '2021-10-19 16:04:20.308', NULL, 157, 157, NULL),
(25, 2, 1, 'testimusens', NULL, NULL, NULL, NULL, NULL, '88', 1, 1, '2021-10-22 09:43:19.592', '2021-11-24 10:45:56.781', NULL, 157, 562, NULL),
(26, 2, 1, 'jona_test', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2021-11-24 10:43:23.536', '2021-11-24 10:43:23.536', NULL, 562, 562, NULL),
(27, 2, 1, '2IMU_NEW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-01-14 15:07:00.226', '2022-01-14 15:07:00.226', NULL, 157, 157, NULL),
(28, 2, 1, '1IMU_NEW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-01-14 15:14:23.714', '2022-01-14 15:14:23.714', NULL, 157, 157, NULL),
(29, 2, 1, '1IMU_NEWB', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-02-03 09:52:08.704', '2022-02-03 09:52:08.704', NULL, 157, 157, NULL),
(30, 2, 1, '1IMU_RAW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-02-14 09:32:51.264', '2022-02-14 09:32:51.264', NULL, 157, 157, NULL),
(31, 2, 1, '3IMU_RAW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-02-24 09:27:10.598', '2022-02-24 09:27:10.598', NULL, 157, 157, NULL),
(32, 2, 1, '4IMU_RAW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-02-24 09:37:22.068', '2022-02-24 09:37:22.068', NULL, 157, 157, NULL),
(33, 2, 1, '5IMU_RAW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-02-24 09:41:43.862', '2022-02-24 09:41:43.862', NULL, 157, 157, NULL),
(34, 2, 1, '6IMU_RAW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-02-24 09:46:28.952', '2022-02-24 09:46:28.952', NULL, 157, 157, NULL),
(35, 2, 1, 'New locations test', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-08 10:53:43.989', '2022-03-08 10:53:43.989', NULL, 116, 116, NULL),
(36, 2, 1, 'Jona_dev_raw_50hz', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-03-09 12:32:52.893', '2022-03-09 16:24:16.565', NULL, 562, 562, NULL),
(37, 2, 1, '2IMU_RAW', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-03-09 13:08:38.563', '2022-03-09 13:08:38.563', NULL, 157, 157, NULL),
(38, 2, 1, 'Jona_dev_quat', NULL, NULL, NULL, NULL, NULL, '1', 1, 0, '2022-03-09 16:24:40.677', '2022-03-09 16:24:40.677', NULL, 562, 562, NULL),
(39, 2, 1, 'Jona_dev_raw_100hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-14 11:27:03.274', '2022-03-14 11:27:03.274', NULL, 562, 562, NULL),
(40, 2, 1, 'Jona_dev_quat_100hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-14 11:46:44.146', '2022-03-14 11:46:44.146', NULL, 562, 562, NULL),
(41, 2, 1, 'Jona_dev_quat9_50hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-14 11:49:16.022', '2022-03-14 11:49:16.022', NULL, 562, 562, NULL),
(42, 2, 1, 'Jona_dev_quat9_100hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-14 11:50:22.626', '2022-03-14 11:50:22.626', NULL, 562, 562, NULL),
(43, 2, 1, 'Jona_raw_2imu_100hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-14 12:05:50.523', '2022-03-14 12:05:50.523', NULL, 562, 562, NULL),
(44, 2, 1, 'jona_dev_6sensors_raw', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-03-21 12:29:45.457', '2022-03-21 12:29:45.457', NULL, 562, 562, NULL),
(45, 2, 1, '6 modules test', NULL, NULL, NULL, NULL, NULL, '1', 2, 1, '2022-04-05 11:26:35.914', '2022-04-05 11:27:37.718', NULL, 116, 116, NULL),
(46, 2, 1, '6 modules test 50Hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 1, '2022-04-05 11:33:59.847', '2022-04-05 11:37:25.497', NULL, 116, 116, NULL),
(47, 2, 1, 'Set 4 - 4 sensors raw 50hz', NULL, NULL, NULL, NULL, NULL, '1', 2, 1, '2022-04-05 12:36:52.352', '2022-05-03 07:14:15.157', NULL, 562, 116, NULL),
(48, 2, 1, 'set 4 - 4 sensors quat', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-04-05 13:09:03.967', '2022-04-05 13:09:03.967', NULL, 116, 116, NULL),
(49, 2, 1, 'jona test 1 sensor', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-04-05 14:48:47.032', '2022-04-05 14:48:47.032', NULL, 562, 562, NULL),
(50, 2, 1, 'test-jona', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-04-22 12:07:51.296', '2022-04-22 12:07:51.296', NULL, 562, 562, NULL),
(51, 2, 1, '1_IMU', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-05-04 15:30:07.515', '2022-05-04 15:30:07.515', NULL, 157, 157, NULL),
(52, 2, 1, 'set1_6imu_raw', NULL, NULL, NULL, NULL, NULL, '1', 2, 1, '2022-05-17 13:43:02.137', '2022-06-29 07:15:47.781', NULL, 562, 116, NULL),
(53, 2, 1, 'set2_6imu_raw', NULL, NULL, NULL, NULL, NULL, '1', 2, 0, '2022-05-17 14:11:29.776', '2022-05-17 14:11:29.776', NULL, 562, 562, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
