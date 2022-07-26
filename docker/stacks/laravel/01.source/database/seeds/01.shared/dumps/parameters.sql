-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1
-- Gegenereerd op: 19 jul 2022 om 07:34
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
-- Gegevens worden geëxporteerd voor tabel `parameters`
--

INSERT INTO `parameters` (`id`, `uuid`, `name_en`, `name_nl`, `name_fr`, `description_en`, `description_nl`, `description_fr`, `level`, `datatype`, `mainboard`, `value`, `min`, `max`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'X', 'X', NULL, NULL, 'x coordinate for view', NULL, NULL, 1, 2, 1, NULL, -7, 7, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Y', 'Y', NULL, NULL, 'y coordinate for view', NULL, NULL, 1, 2, 1, NULL, -7, 7, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'R', 'R', NULL, NULL, 'rotation for view', NULL, NULL, 1, 2, 1, NULL, -180, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Comm.Method', 'Comm.Method', NULL, NULL, 'Communication Interface: Number of the interface', NULL, NULL, 0, 0, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Comm.Method.Version', 'Comm.Method.Version', NULL, NULL, 'Version of the specific communication method', NULL, NULL, 1, 1, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Comm.Addr', 'Comm.Addr', NULL, NULL, 'Communication Address within the Interface', NULL, NULL, 1, 1, 1, 0, 0, 1e18, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Comm.Fail.Consequence', 'Comm.Fail.Consequence', NULL, NULL, 'What needs to happen if this instrument fails', NULL, NULL, 2, 0, 1, 0, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Samplerate', 'Samplerate', NULL, NULL, 'Samplerate (1/s)', NULL, NULL, 1, 2, 1, 100, 1, 1000, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Data.Input.Bytes', 'Data.Input.Bytes', NULL, NULL, 'Number of Input Bytes sent to the instrument', NULL, NULL, 0, 2, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Data.Input.Datatype', 'Data.Input.Datatype', NULL, NULL, 'Datatype of the input bytes', NULL, NULL, 1, 0, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Data.Output.Bytes', 'Data.Output.Bytes', NULL, NULL, 'Number of Outbut Bytes received from the instrument (No datatype)', NULL, NULL, 0, 2, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Data.Output.Datatype', 'Data.Output.Datatype', NULL, NULL, 'Datatype of the output bytes', NULL, NULL, 1, 0, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 'Software.Function', 'Software.Function', NULL, NULL, 'Software function to be executed in case of software instrument (No datatype)', NULL, NULL, 0, 2, 1, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 'Instrument.1.ID', 'Instrument.1.ID', NULL, NULL, 'Sensor ID for input 1 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 'Instrument.2.ID', 'Instrument.2.ID', NULL, NULL, 'Sensor ID for input 2 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 'Instrument.3.ID', 'Instrument.3.ID', NULL, NULL, 'Sensor ID for input 3 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 'Instrument.4.ID', 'Instrument.4.ID', NULL, NULL, 'Sensor ID for input 4 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 'Instrument.5.ID', 'Instrument.5.ID', NULL, NULL, 'Sensor ID for input 5 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 'Instrument.6.ID', 'Instrument.6.ID', NULL, NULL, 'Sensor ID for input 6 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 'Instrument.7.ID', 'Instrument.7.ID', NULL, NULL, 'Sensor ID for input 7 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 'Instrument.8.ID', 'Instrument.8.ID', NULL, NULL, 'Sensor ID for input 8 of software instrument', NULL, NULL, 1, 4, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 'App.Instrument.Icon', 'App.Instrument.Icon', NULL, NULL, 'Icon reference for visualisation in the app', NULL, NULL, 0, 0, 0, 0, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'App.Instrument.App_only', 'App.Instrument.App_only', NULL, NULL, 'If this is set to False, the instrument has no functional link with the Mainboard. Only the Android Device uses this instrument.', NULL, NULL, 0, 3, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 'View Angle', 'View Angle', NULL, NULL, 'View Angle\r\n(Name probably needs changing)', NULL, NULL, 0, 2, 1, 30, 0, 360, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 'Inter-sensor distance', 'Inter-sensor distance', NULL, NULL, 'The distance between multiple individual IR or US components within one single instrument.\r\n(Name probably needs changing) in m', NULL, NULL, 0, 2, 1, 0.03, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 'Instrument.Min.Allowed.Data.Output.Datatype', 'Instrument.Min.Allowed.Data.Output.Datatype', NULL, NULL, 'Minimum allowed Data.Output.Datatype for Instrument', NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 'Instrument.Max.Allowed.Data.Output.Datatype', 'Instrument.Max.Allowed.Data.Output.Datatype', NULL, NULL, 'Maximum allowed Data.Output.Datatype for Instrument', NULL, NULL, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 'Poll Rank', 'Poll Rank', NULL, NULL, 'Poll Rank', NULL, NULL, 1, 1, 1, 1, 0, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(512, 'Joystick ID', 'Joystick ID', NULL, NULL, 'The Joystick ID to which this profile belongs', NULL, NULL, 2, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(513, 'Profile number', 'Profile number', NULL, NULL, 'Profile number for the specific joystick', NULL, NULL, 2, 1, 1, NULL, 0, 6, NULL, NULL, NULL, NULL, NULL, NULL),
(514, 'Short Throw Travel (as percentage)', 'Short Throw Travel (as percentage)', NULL, NULL, 'Short Throw Travel (as percentage)', NULL, NULL, 2, 2, 1, NULL, 0, 100, NULL, NULL, NULL, NULL, NULL, NULL),
(515, 'Forward Speed (as percentage)', 'Forward Speed (as percentage)', NULL, NULL, 'Forward Speed (as percentage)', NULL, NULL, 2, 2, 1, NULL, 0, 100, NULL, NULL, NULL, NULL, NULL, NULL),
(768, 'P&G Parameter (Placeholder)', 'P&G Parameter (Placeholder)', NULL, NULL, 'Placeholder parameter for a P&G Parameter', NULL, NULL, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(769, 'DX Parameter (Placeholder)', 'DX Parameter (Placeholder)', NULL, NULL, 'Placeholder parameter for a DX Parameter', NULL, NULL, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(770, 'Height (cm)', 'Height (cm)', NULL, NULL, '', NULL, NULL, 2, 1, 1, NULL, 0, 300, NULL, NULL, NULL, NULL, NULL, NULL),
(771, 'Weight (kg)', 'Weight (kg)', NULL, NULL, '', NULL, NULL, 2, 2, 1, NULL, 0, 1000, NULL, NULL, NULL, NULL, NULL, NULL),
(1024, 'Template', 'Template', NULL, NULL, 'Template Boolean', NULL, NULL, 0, 3, 0, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(1025, 'Template_Type', 'Template Type', NULL, NULL, 'Template Type allowing the app to visualize this template', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1026, 'Maximum Speed', 'Maximum Speed', NULL, NULL, 'Maximum Wheelchair Speed (km/h)', NULL, NULL, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1027, 'OAS_Slope_Start', 'OAS Slope Start', NULL, NULL, 'Distance at the start of the slope', NULL, NULL, 1, 2, 1, 5, 0, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(1028, 'OAS_Slope_Percentage', 'OAS Slope Percentage', NULL, NULL, 'Percentage of max speed at the start of the slope', NULL, NULL, 1, 2, 1, 10, 0, 50, NULL, NULL, NULL, NULL, NULL, NULL),
(1029, 'OAS_Slope_End', 'OAS Slope End', NULL, NULL, 'Distance at the end of the slope at 100 % of max speed', NULL, NULL, 1, 2, 1, 80, 31, 250, NULL, NULL, NULL, NULL, NULL, NULL),
(1030, 'Distance_Calibration', 'Distance_Calibration', NULL, NULL, 'PWC boundary calibration (cm)', NULL, NULL, 1, 2, 1, 0, 0, 100, NULL, NULL, NULL, NULL, NULL, NULL),
(1031, 'BT.MAC.HIGH', 'Bluetooth MAC High', 'Bluetooth MAC High', 'Bluetooth MAC High', NULL, NULL, NULL, 1, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1032, 'BT.MAC.LOW', 'Bluetooth MAC Low', 'Bluetooth MAC Low', 'Bluetooth MAC Low', NULL, NULL, NULL, 1, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
