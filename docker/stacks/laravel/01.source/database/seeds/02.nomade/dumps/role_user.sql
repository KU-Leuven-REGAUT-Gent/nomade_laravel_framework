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
-- Gegevens worden geëxporteerd voor tabel `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 117, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 118, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, 118, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 119, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 119, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 119, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 120, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, 120, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 3, 120, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 4, 120, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 121, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2, 121, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 3, 121, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 4, 121, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 5, 121, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 6, 121, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, 112, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 1, 113, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 2, 113, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, 114, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2, 114, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 3, 114, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 1, 115, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 2, 115, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 3, 115, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 4, 115, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 1, 116, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 2, 116, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 3, 116, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 4, 116, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 5, 116, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 6, 116, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 1, 131, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 2, 131, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 3, 131, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 4, 131, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 5, 131, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 6, 131, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 1, 157, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 2, 157, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 3, 157, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 4, 157, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 5, 157, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 1, 158, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 2, 158, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 3, 158, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 4, 158, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 5, 158, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 4, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 1, 159, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 2, 159, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 3, 159, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 4, 159, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 5, 159, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 1, 160, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 2, 160, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 3, 160, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 4, 160, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 5, 160, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 1, 161, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 2, 161, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 3, 161, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 4, 161, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 5, 161, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 1, 162, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 2, 162, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 3, 162, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 4, 162, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 5, 162, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 1, 163, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 2, 163, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 3, 163, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 4, 163, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 5, 163, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 1, 164, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 2, 164, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 3, 164, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 4, 164, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 5, 164, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 4, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 1, 136, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 2, 136, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 3, 136, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 4, 136, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 5, 136, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 1, 165, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 2, 165, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 3, 165, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 4, 165, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 1, 166, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 1, 167, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 1, 168, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 1, 169, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 2, 169, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 3, 169, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 4, 169, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 1, 170, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 2, 170, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 3, 170, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 4, 170, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 1, 171, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 2, 171, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 3, 171, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 4, 171, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 1, 172, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 2, 172, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 3, 172, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 4, 172, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 1, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 2, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 3, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 4, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 1, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 2, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 3, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 4, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 1, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 2, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 3, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 4, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 1, 176, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 2, 176, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 3, 176, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 4, 176, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 1, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 2, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 3, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 4, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 1, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 2, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 3, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 4, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 1, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 2, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 3, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 4, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 1, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 2, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 3, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 4, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 1, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 2, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 3, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 4, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 1, 182, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 2, 182, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 3, 182, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 4, 182, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 1, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 2, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 3, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 4, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 1, 184, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 2, 184, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 3, 184, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 4, 184, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 1, 185, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 2, 185, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 3, 185, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 4, 185, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 5, 115, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 1, 186, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 1, 187, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 1, 188, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 1, 189, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 1, 190, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 1, 191, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 1, 192, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 1, 193, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 1, 194, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 1, 195, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 1, 196, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 1, 197, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 1, 198, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 1, 199, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 1, 200, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 1, 201, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 1, 202, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 1, 203, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 1, 204, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 1, 205, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 1, 206, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 1, 207, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 1, 208, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 1, 209, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 1, 210, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 1, 211, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 1, 212, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 1, 213, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 1, 214, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 1, 215, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 1, 216, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 1, 217, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 1, 218, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 1, 219, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 1, 220, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 1, 221, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 1, 222, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 1, 223, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 1, 224, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 1, 225, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 1, 226, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 1, 227, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 1, 228, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 1, 229, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 1, 230, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 1, 231, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 1, 232, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 1, 233, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 1, 234, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 1, 235, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 1, 236, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 1, 237, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 1, 238, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 1, 239, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 1, 240, NULL, NULL, NULL, NULL, NULL, NULL),
(235, 1, 241, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 1, 242, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 1, 243, NULL, NULL, NULL, NULL, NULL, NULL),
(238, 1, 244, NULL, NULL, NULL, NULL, NULL, NULL),
(239, 1, 245, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 1, 246, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 1, 247, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 1, 248, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 1, 249, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 1, 250, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 1, 251, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 1, 252, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 1, 253, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 1, 254, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 1, 255, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 1, 256, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 1, 257, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 1, 258, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 1, 259, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 1, 260, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 1, 261, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 1, 262, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 1, 263, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 1, 264, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 1, 265, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 1, 266, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 1, 267, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 1, 268, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 1, 269, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 1, 270, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 1, 271, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 1, 272, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 1, 273, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 1, 274, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 1, 275, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 1, 276, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 1, 277, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 1, 278, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 1, 279, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 1, 280, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 1, 281, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 1, 282, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 1, 283, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 1, 284, NULL, NULL, NULL, NULL, NULL, NULL),
(279, 1, 285, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 1, 286, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 1, 287, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 1, 288, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 1, 289, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 1, 290, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 1, 291, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 1, 292, NULL, NULL, NULL, NULL, NULL, NULL),
(287, 1, 293, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 1, 294, NULL, NULL, NULL, NULL, NULL, NULL),
(289, 1, 295, NULL, NULL, NULL, NULL, NULL, NULL),
(290, 1, 296, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 1, 297, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 1, 298, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 1, 299, NULL, NULL, NULL, NULL, NULL, NULL),
(294, 1, 300, NULL, NULL, NULL, NULL, NULL, NULL),
(295, 1, 301, NULL, NULL, NULL, NULL, NULL, NULL),
(296, 1, 302, NULL, NULL, NULL, NULL, NULL, NULL),
(297, 1, 303, NULL, NULL, NULL, NULL, NULL, NULL),
(298, 1, 304, NULL, NULL, NULL, NULL, NULL, NULL),
(299, 1, 305, NULL, NULL, NULL, NULL, NULL, NULL),
(300, 1, 306, NULL, NULL, NULL, NULL, NULL, NULL),
(301, 1, 307, NULL, NULL, NULL, NULL, NULL, NULL),
(302, 1, 308, NULL, NULL, NULL, NULL, NULL, NULL),
(303, 1, 309, NULL, NULL, NULL, NULL, NULL, NULL),
(304, 1, 310, NULL, NULL, NULL, NULL, NULL, NULL),
(305, 1, 311, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 1, 312, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 1, 313, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 1, 314, NULL, NULL, NULL, NULL, NULL, NULL),
(309, 1, 315, NULL, NULL, NULL, NULL, NULL, NULL),
(310, 1, 316, NULL, NULL, NULL, NULL, NULL, NULL),
(311, 1, 317, NULL, NULL, NULL, NULL, NULL, NULL),
(312, 1, 318, NULL, NULL, NULL, NULL, NULL, NULL),
(313, 1, 319, NULL, NULL, NULL, NULL, NULL, NULL),
(314, 1, 320, NULL, NULL, NULL, NULL, NULL, NULL),
(315, 1, 321, NULL, NULL, NULL, NULL, NULL, NULL),
(316, 1, 322, NULL, NULL, NULL, NULL, NULL, NULL),
(317, 1, 323, NULL, NULL, NULL, NULL, NULL, NULL),
(318, 1, 324, NULL, NULL, NULL, NULL, NULL, NULL),
(319, 1, 325, NULL, NULL, NULL, NULL, NULL, NULL),
(320, 1, 326, NULL, NULL, NULL, NULL, NULL, NULL),
(321, 1, 327, NULL, NULL, NULL, NULL, NULL, NULL),
(322, 1, 328, NULL, NULL, NULL, NULL, NULL, NULL),
(323, 1, 329, NULL, NULL, NULL, NULL, NULL, NULL),
(324, 1, 330, NULL, NULL, NULL, NULL, NULL, NULL),
(325, 1, 331, NULL, NULL, NULL, NULL, NULL, NULL),
(326, 1, 332, NULL, NULL, NULL, NULL, NULL, NULL),
(327, 1, 333, NULL, NULL, NULL, NULL, NULL, NULL),
(328, 1, 334, NULL, NULL, NULL, NULL, NULL, NULL),
(329, 1, 335, NULL, NULL, NULL, NULL, NULL, NULL),
(330, 1, 336, NULL, NULL, NULL, NULL, NULL, NULL),
(331, 1, 337, NULL, NULL, NULL, NULL, NULL, NULL),
(332, 1, 338, NULL, NULL, NULL, NULL, NULL, NULL),
(333, 1, 339, NULL, NULL, NULL, NULL, NULL, NULL),
(334, 1, 340, NULL, NULL, NULL, NULL, NULL, NULL),
(335, 1, 341, NULL, NULL, NULL, NULL, NULL, NULL),
(336, 1, 342, NULL, NULL, NULL, NULL, NULL, NULL),
(337, 1, 343, NULL, NULL, NULL, NULL, NULL, NULL),
(338, 1, 344, NULL, NULL, NULL, NULL, NULL, NULL),
(339, 1, 345, NULL, NULL, NULL, NULL, NULL, NULL),
(340, 1, 346, NULL, NULL, NULL, NULL, NULL, NULL),
(341, 1, 347, NULL, NULL, NULL, NULL, NULL, NULL),
(342, 1, 348, NULL, NULL, NULL, NULL, NULL, NULL),
(343, 1, 349, NULL, NULL, NULL, NULL, NULL, NULL),
(344, 1, 350, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 1, 351, NULL, NULL, NULL, NULL, NULL, NULL),
(346, 1, 352, NULL, NULL, NULL, NULL, NULL, NULL),
(347, 1, 353, NULL, NULL, NULL, NULL, NULL, NULL),
(348, 1, 354, NULL, NULL, NULL, NULL, NULL, NULL),
(349, 1, 355, NULL, NULL, NULL, NULL, NULL, NULL),
(350, 1, 356, NULL, NULL, NULL, NULL, NULL, NULL),
(351, 1, 357, NULL, NULL, NULL, NULL, NULL, NULL),
(352, 1, 358, NULL, NULL, NULL, NULL, NULL, NULL),
(353, 1, 359, NULL, NULL, NULL, NULL, NULL, NULL),
(354, 1, 360, NULL, NULL, NULL, NULL, NULL, NULL),
(355, 1, 361, NULL, NULL, NULL, NULL, NULL, NULL),
(356, 1, 362, NULL, NULL, NULL, NULL, NULL, NULL),
(357, 1, 363, NULL, NULL, NULL, NULL, NULL, NULL),
(358, 1, 364, NULL, NULL, NULL, NULL, NULL, NULL),
(359, 1, 365, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 1, 366, NULL, NULL, NULL, NULL, NULL, NULL),
(361, 1, 367, NULL, NULL, NULL, NULL, NULL, NULL),
(362, 1, 368, NULL, NULL, NULL, NULL, NULL, NULL),
(363, 1, 369, NULL, NULL, NULL, NULL, NULL, NULL),
(364, 1, 370, NULL, NULL, NULL, NULL, NULL, NULL),
(365, 1, 371, NULL, NULL, NULL, NULL, NULL, NULL),
(366, 1, 372, NULL, NULL, NULL, NULL, NULL, NULL),
(367, 1, 373, NULL, NULL, NULL, NULL, NULL, NULL),
(368, 1, 374, NULL, NULL, NULL, NULL, NULL, NULL),
(369, 1, 375, NULL, NULL, NULL, NULL, NULL, NULL),
(370, 1, 376, NULL, NULL, NULL, NULL, NULL, NULL),
(371, 1, 377, NULL, NULL, NULL, NULL, NULL, NULL),
(372, 1, 378, NULL, NULL, NULL, NULL, NULL, NULL),
(373, 1, 379, NULL, NULL, NULL, NULL, NULL, NULL),
(374, 1, 380, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 1, 381, NULL, NULL, NULL, NULL, NULL, NULL),
(376, 1, 382, NULL, NULL, NULL, NULL, NULL, NULL),
(377, 1, 383, NULL, NULL, NULL, NULL, NULL, NULL),
(378, 1, 384, NULL, NULL, NULL, NULL, NULL, NULL),
(379, 1, 385, NULL, NULL, NULL, NULL, NULL, NULL),
(380, 1, 386, NULL, NULL, NULL, NULL, NULL, NULL),
(381, 1, 387, NULL, NULL, NULL, NULL, NULL, NULL),
(382, 1, 388, NULL, NULL, NULL, NULL, NULL, NULL),
(383, 1, 389, NULL, NULL, NULL, NULL, NULL, NULL),
(384, 1, 390, NULL, NULL, NULL, NULL, NULL, NULL),
(385, 1, 391, NULL, NULL, NULL, NULL, NULL, NULL),
(386, 1, 392, NULL, NULL, NULL, NULL, NULL, NULL),
(387, 1, 393, NULL, NULL, NULL, NULL, NULL, NULL),
(388, 1, 394, NULL, NULL, NULL, NULL, NULL, NULL),
(389, 1, 395, NULL, NULL, NULL, NULL, NULL, NULL),
(390, 1, 396, NULL, NULL, NULL, NULL, NULL, NULL),
(391, 1, 397, NULL, NULL, NULL, NULL, NULL, NULL),
(392, 1, 398, NULL, NULL, NULL, NULL, NULL, NULL),
(393, 1, 399, NULL, NULL, NULL, NULL, NULL, NULL),
(394, 1, 400, NULL, NULL, NULL, NULL, NULL, NULL),
(395, 1, 401, NULL, NULL, NULL, NULL, NULL, NULL),
(396, 1, 402, NULL, NULL, NULL, NULL, NULL, NULL),
(397, 1, 403, NULL, NULL, NULL, NULL, NULL, NULL),
(398, 1, 404, NULL, NULL, NULL, NULL, NULL, NULL),
(399, 1, 405, NULL, NULL, NULL, NULL, NULL, NULL),
(400, 1, 406, NULL, NULL, NULL, NULL, NULL, NULL),
(401, 1, 407, NULL, NULL, NULL, NULL, NULL, NULL),
(402, 1, 408, NULL, NULL, NULL, NULL, NULL, NULL),
(403, 1, 409, NULL, NULL, NULL, NULL, NULL, NULL),
(404, 1, 410, NULL, NULL, NULL, NULL, NULL, NULL),
(405, 1, 411, NULL, NULL, NULL, NULL, NULL, NULL),
(406, 1, 412, NULL, NULL, NULL, NULL, NULL, NULL),
(407, 1, 413, NULL, NULL, NULL, NULL, NULL, NULL),
(408, 1, 414, NULL, NULL, NULL, NULL, NULL, NULL),
(409, 1, 415, NULL, NULL, NULL, NULL, NULL, NULL),
(410, 1, 416, NULL, NULL, NULL, NULL, NULL, NULL),
(411, 1, 417, NULL, NULL, NULL, NULL, NULL, NULL),
(412, 1, 418, NULL, NULL, NULL, NULL, NULL, NULL),
(413, 1, 419, NULL, NULL, NULL, NULL, NULL, NULL),
(414, 1, 420, NULL, NULL, NULL, NULL, NULL, NULL),
(415, 1, 421, NULL, NULL, NULL, NULL, NULL, NULL),
(416, 1, 422, NULL, NULL, NULL, NULL, NULL, NULL),
(417, 1, 423, NULL, NULL, NULL, NULL, NULL, NULL),
(418, 1, 424, NULL, NULL, NULL, NULL, NULL, NULL),
(419, 1, 425, NULL, NULL, NULL, NULL, NULL, NULL),
(420, 1, 426, NULL, NULL, NULL, NULL, NULL, NULL),
(421, 1, 427, NULL, NULL, NULL, NULL, NULL, NULL),
(422, 1, 428, NULL, NULL, NULL, NULL, NULL, NULL),
(423, 1, 429, NULL, NULL, NULL, NULL, NULL, NULL),
(424, 1, 430, NULL, NULL, NULL, NULL, NULL, NULL),
(425, 1, 431, NULL, NULL, NULL, NULL, NULL, NULL),
(426, 1, 432, NULL, NULL, NULL, NULL, NULL, NULL),
(427, 1, 433, NULL, NULL, NULL, NULL, NULL, NULL),
(428, 1, 434, NULL, NULL, NULL, NULL, NULL, NULL),
(429, 1, 435, NULL, NULL, NULL, NULL, NULL, NULL),
(430, 1, 436, NULL, NULL, NULL, NULL, NULL, NULL),
(431, 1, 437, NULL, NULL, NULL, NULL, NULL, NULL),
(432, 1, 438, NULL, NULL, NULL, NULL, NULL, NULL),
(433, 1, 439, NULL, NULL, NULL, NULL, NULL, NULL),
(434, 1, 440, NULL, NULL, NULL, NULL, NULL, NULL),
(435, 1, 441, NULL, NULL, NULL, NULL, NULL, NULL),
(436, 1, 442, NULL, NULL, NULL, NULL, NULL, NULL),
(437, 1, 443, NULL, NULL, NULL, NULL, NULL, NULL),
(438, 1, 444, NULL, NULL, NULL, NULL, NULL, NULL),
(439, 1, 445, NULL, NULL, NULL, NULL, NULL, NULL),
(440, 1, 446, NULL, NULL, NULL, NULL, NULL, NULL),
(441, 1, 447, NULL, NULL, NULL, NULL, NULL, NULL),
(442, 1, 448, NULL, NULL, NULL, NULL, NULL, NULL),
(443, 1, 449, NULL, NULL, NULL, NULL, NULL, NULL),
(444, 1, 450, NULL, NULL, NULL, NULL, NULL, NULL),
(445, 1, 451, NULL, NULL, NULL, NULL, NULL, NULL),
(446, 1, 452, NULL, NULL, NULL, NULL, NULL, NULL),
(447, 1, 453, NULL, NULL, NULL, NULL, NULL, NULL),
(448, 1, 454, NULL, NULL, NULL, NULL, NULL, NULL),
(449, 1, 455, NULL, NULL, NULL, NULL, NULL, NULL),
(450, 1, 456, NULL, NULL, NULL, NULL, NULL, NULL),
(451, 1, 457, NULL, NULL, NULL, NULL, NULL, NULL),
(452, 1, 458, NULL, NULL, NULL, NULL, NULL, NULL),
(453, 1, 459, NULL, NULL, NULL, NULL, NULL, NULL),
(454, 1, 460, NULL, NULL, NULL, NULL, NULL, NULL),
(455, 1, 461, NULL, NULL, NULL, NULL, NULL, NULL),
(456, 1, 462, NULL, NULL, NULL, NULL, NULL, NULL),
(457, 1, 463, NULL, NULL, NULL, NULL, NULL, NULL),
(458, 1, 464, NULL, NULL, NULL, NULL, NULL, NULL),
(459, 1, 465, NULL, NULL, NULL, NULL, NULL, NULL),
(460, 1, 466, NULL, NULL, NULL, NULL, NULL, NULL),
(461, 1, 467, NULL, NULL, NULL, NULL, NULL, NULL),
(462, 1, 468, NULL, NULL, NULL, NULL, NULL, NULL),
(463, 1, 469, NULL, NULL, NULL, NULL, NULL, NULL),
(464, 1, 470, NULL, NULL, NULL, NULL, NULL, NULL),
(465, 1, 471, NULL, NULL, NULL, NULL, NULL, NULL),
(466, 1, 472, NULL, NULL, NULL, NULL, NULL, NULL),
(467, 1, 473, NULL, NULL, NULL, NULL, NULL, NULL),
(468, 1, 474, NULL, NULL, NULL, NULL, NULL, NULL),
(469, 1, 475, NULL, NULL, NULL, NULL, NULL, NULL),
(470, 1, 476, NULL, NULL, NULL, NULL, NULL, NULL),
(471, 1, 477, NULL, NULL, NULL, NULL, NULL, NULL),
(472, 1, 478, NULL, NULL, NULL, NULL, NULL, NULL),
(473, 1, 479, NULL, NULL, NULL, NULL, NULL, NULL),
(474, 1, 480, NULL, NULL, NULL, NULL, NULL, NULL),
(475, 1, 481, NULL, NULL, NULL, NULL, NULL, NULL),
(476, 1, 482, NULL, NULL, NULL, NULL, NULL, NULL),
(477, 1, 483, NULL, NULL, NULL, NULL, NULL, NULL),
(478, 1, 484, NULL, NULL, NULL, NULL, NULL, NULL),
(479, 1, 485, NULL, NULL, NULL, NULL, NULL, NULL),
(480, 1, 486, NULL, NULL, NULL, NULL, NULL, NULL),
(481, 1, 487, NULL, NULL, NULL, NULL, NULL, NULL),
(482, 1, 488, NULL, NULL, NULL, NULL, NULL, NULL),
(483, 1, 489, NULL, NULL, NULL, NULL, NULL, NULL),
(484, 1, 490, NULL, NULL, NULL, NULL, NULL, NULL),
(485, 1, 491, NULL, NULL, NULL, NULL, NULL, NULL),
(486, 1, 492, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 1, 493, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 1, 494, NULL, NULL, NULL, NULL, NULL, NULL),
(489, 1, 495, NULL, NULL, NULL, NULL, NULL, NULL),
(490, 1, 496, NULL, NULL, NULL, NULL, NULL, NULL),
(491, 1, 497, NULL, NULL, NULL, NULL, NULL, NULL),
(492, 1, 498, NULL, NULL, NULL, NULL, NULL, NULL),
(493, 1, 499, NULL, NULL, NULL, NULL, NULL, NULL),
(494, 1, 500, NULL, NULL, NULL, NULL, NULL, NULL),
(495, 1, 501, NULL, NULL, NULL, NULL, NULL, NULL),
(496, 1, 502, NULL, NULL, NULL, NULL, NULL, NULL),
(497, 1, 503, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 1, 504, NULL, NULL, NULL, NULL, NULL, NULL),
(499, 1, 505, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 1, 506, NULL, NULL, NULL, NULL, NULL, NULL),
(501, 1, 507, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 1, 508, NULL, NULL, NULL, NULL, NULL, NULL),
(503, 1, 509, NULL, NULL, NULL, NULL, NULL, NULL),
(504, 1, 510, NULL, NULL, NULL, NULL, NULL, NULL),
(505, 1, 511, NULL, NULL, NULL, NULL, NULL, NULL),
(506, 1, 512, NULL, NULL, NULL, NULL, NULL, NULL),
(507, 1, 513, NULL, NULL, NULL, NULL, NULL, NULL),
(508, 1, 514, NULL, NULL, NULL, NULL, NULL, NULL),
(509, 1, 515, NULL, NULL, NULL, NULL, NULL, NULL),
(510, 1, 516, NULL, NULL, NULL, NULL, NULL, NULL),
(511, 1, 517, NULL, NULL, NULL, NULL, NULL, NULL),
(512, 1, 518, NULL, NULL, NULL, NULL, NULL, NULL),
(513, 1, 519, NULL, NULL, NULL, NULL, NULL, NULL),
(514, 1, 520, NULL, NULL, NULL, NULL, NULL, NULL),
(515, 1, 521, NULL, NULL, NULL, NULL, NULL, NULL),
(516, 1, 522, NULL, NULL, NULL, NULL, NULL, NULL),
(517, 1, 523, NULL, NULL, NULL, NULL, NULL, NULL),
(518, 1, 524, NULL, NULL, NULL, NULL, NULL, NULL),
(519, 1, 525, NULL, NULL, NULL, NULL, NULL, NULL),
(520, 1, 526, NULL, NULL, NULL, NULL, NULL, NULL),
(521, 1, 527, NULL, NULL, NULL, NULL, NULL, NULL),
(522, 1, 528, NULL, NULL, NULL, NULL, NULL, NULL),
(523, 1, 529, NULL, NULL, NULL, NULL, NULL, NULL),
(524, 1, 530, NULL, NULL, NULL, NULL, NULL, NULL),
(525, 1, 531, NULL, NULL, NULL, NULL, NULL, NULL),
(526, 1, 532, NULL, NULL, NULL, NULL, NULL, NULL),
(527, 1, 533, NULL, NULL, NULL, NULL, NULL, NULL),
(528, 1, 534, NULL, NULL, NULL, NULL, NULL, NULL),
(529, 1, 535, NULL, NULL, NULL, NULL, NULL, NULL),
(530, 1, 536, NULL, NULL, NULL, NULL, NULL, NULL),
(531, 1, 537, NULL, NULL, NULL, NULL, NULL, NULL),
(532, 1, 538, NULL, NULL, NULL, NULL, NULL, NULL),
(533, 1, 539, NULL, NULL, NULL, NULL, NULL, NULL),
(534, 1, 540, NULL, NULL, NULL, NULL, NULL, NULL),
(535, 1, 541, NULL, NULL, NULL, NULL, NULL, NULL),
(536, 1, 542, NULL, NULL, NULL, NULL, NULL, NULL),
(537, 1, 543, NULL, NULL, NULL, NULL, NULL, NULL),
(538, 1, 544, NULL, NULL, NULL, NULL, NULL, NULL),
(539, 1, 545, NULL, NULL, NULL, NULL, NULL, NULL),
(540, 1, 546, NULL, NULL, NULL, NULL, NULL, NULL),
(541, 1, 547, NULL, NULL, NULL, NULL, NULL, NULL),
(542, 1, 548, NULL, NULL, NULL, NULL, NULL, NULL),
(543, 1, 549, NULL, NULL, NULL, NULL, NULL, NULL),
(544, 1, 550, NULL, NULL, NULL, NULL, NULL, NULL),
(545, 1, 551, NULL, NULL, NULL, NULL, NULL, NULL),
(546, 1, 552, NULL, NULL, NULL, NULL, NULL, NULL),
(547, 1, 553, NULL, NULL, NULL, NULL, NULL, NULL),
(548, 1, 554, NULL, NULL, NULL, NULL, NULL, NULL),
(549, 1, 555, NULL, NULL, NULL, NULL, NULL, NULL),
(550, 1, 556, NULL, NULL, NULL, NULL, NULL, NULL),
(551, 1, 100, NULL, NULL, NULL, NULL, NULL, NULL),
(552, 1, 103, NULL, NULL, NULL, NULL, NULL, NULL),
(553, 2, 103, NULL, NULL, NULL, NULL, NULL, NULL),
(554, 1, 104, NULL, NULL, NULL, NULL, NULL, NULL),
(555, 2, 104, NULL, NULL, NULL, NULL, NULL, NULL),
(556, 3, 104, NULL, NULL, NULL, NULL, NULL, NULL),
(557, 1, 105, NULL, NULL, NULL, NULL, NULL, NULL),
(558, 2, 105, NULL, NULL, NULL, NULL, NULL, NULL),
(559, 3, 105, NULL, NULL, NULL, NULL, NULL, NULL),
(560, 4, 105, NULL, NULL, NULL, NULL, NULL, NULL),
(561, 1, 106, NULL, NULL, NULL, NULL, NULL, NULL),
(562, 2, 106, NULL, NULL, NULL, NULL, NULL, NULL),
(563, 3, 106, NULL, NULL, NULL, NULL, NULL, NULL),
(564, 4, 106, NULL, NULL, NULL, NULL, NULL, NULL),
(565, 5, 106, NULL, NULL, NULL, NULL, NULL, NULL),
(566, 1, 107, NULL, NULL, NULL, NULL, NULL, NULL),
(567, 2, 107, NULL, NULL, NULL, NULL, NULL, NULL),
(568, 3, 107, NULL, NULL, NULL, NULL, NULL, NULL),
(569, 4, 107, NULL, NULL, NULL, NULL, NULL, NULL),
(570, 5, 107, NULL, NULL, NULL, NULL, NULL, NULL),
(571, 1, 108, NULL, NULL, NULL, NULL, NULL, NULL),
(572, 1, 109, NULL, NULL, NULL, NULL, NULL, NULL),
(573, 2, 109, NULL, NULL, NULL, NULL, NULL, NULL),
(574, 1, 110, NULL, NULL, NULL, NULL, NULL, NULL),
(575, 2, 110, NULL, NULL, NULL, NULL, NULL, NULL),
(576, 3, 110, NULL, NULL, NULL, NULL, NULL, NULL),
(577, 1, 111, NULL, NULL, NULL, NULL, NULL, NULL),
(578, 2, 111, NULL, NULL, NULL, NULL, NULL, NULL),
(579, 3, 111, NULL, NULL, NULL, NULL, NULL, NULL),
(580, 4, 111, NULL, NULL, NULL, NULL, NULL, NULL),
(581, 1, 83, NULL, NULL, NULL, NULL, NULL, NULL),
(582, 2, 83, NULL, NULL, NULL, NULL, NULL, NULL),
(583, 1, 82, NULL, NULL, NULL, NULL, NULL, NULL),
(584, 1, 127, NULL, NULL, NULL, NULL, NULL, NULL),
(585, 1, 128, NULL, NULL, NULL, NULL, NULL, NULL),
(586, 2, 128, NULL, NULL, NULL, NULL, NULL, NULL),
(587, 1, 129, NULL, NULL, NULL, NULL, NULL, NULL),
(588, 2, 129, NULL, NULL, NULL, NULL, NULL, NULL),
(589, 3, 129, NULL, NULL, NULL, NULL, NULL, NULL),
(590, 1, 130, NULL, NULL, NULL, NULL, NULL, NULL),
(591, 2, 130, NULL, NULL, NULL, NULL, NULL, NULL),
(592, 3, 130, NULL, NULL, NULL, NULL, NULL, NULL),
(593, 4, 130, NULL, NULL, NULL, NULL, NULL, NULL),
(594, 1, 132, NULL, NULL, NULL, NULL, NULL, NULL),
(595, 1, 133, NULL, NULL, NULL, NULL, NULL, NULL),
(596, 2, 133, NULL, NULL, NULL, NULL, NULL, NULL),
(597, 1, 134, NULL, NULL, NULL, NULL, NULL, NULL),
(598, 2, 134, NULL, NULL, NULL, NULL, NULL, NULL),
(599, 3, 134, NULL, NULL, NULL, NULL, NULL, NULL),
(600, 1, 135, NULL, NULL, NULL, NULL, NULL, NULL),
(601, 2, 135, NULL, NULL, NULL, NULL, NULL, NULL),
(602, 3, 135, NULL, NULL, NULL, NULL, NULL, NULL),
(603, 4, 135, NULL, NULL, NULL, NULL, NULL, NULL),
(604, 1, 557, NULL, NULL, NULL, NULL, NULL, NULL),
(605, 1, 558, NULL, NULL, NULL, NULL, NULL, NULL),
(606, 2, 558, NULL, NULL, NULL, NULL, NULL, NULL),
(607, 1, 559, NULL, NULL, NULL, NULL, NULL, NULL),
(608, 2, 559, NULL, NULL, NULL, NULL, NULL, NULL),
(609, 3, 559, NULL, NULL, NULL, NULL, NULL, NULL),
(610, 1, 560, NULL, NULL, NULL, NULL, NULL, NULL),
(611, 2, 560, NULL, NULL, NULL, NULL, NULL, NULL),
(612, 3, 560, NULL, NULL, NULL, NULL, NULL, NULL),
(613, 4, 560, NULL, NULL, NULL, NULL, NULL, NULL),
(614, 1, 561, NULL, NULL, NULL, NULL, NULL, NULL),
(615, 2, 561, NULL, NULL, NULL, NULL, NULL, NULL),
(616, 3, 561, NULL, NULL, NULL, NULL, NULL, NULL),
(617, 4, 561, NULL, NULL, NULL, NULL, NULL, NULL),
(618, 5, 561, NULL, NULL, NULL, NULL, NULL, NULL),
(622, 5, 165, NULL, NULL, NULL, NULL, NULL, NULL),
(623, 2, 166, NULL, NULL, NULL, NULL, NULL, NULL),
(624, 3, 166, NULL, NULL, NULL, NULL, NULL, NULL),
(625, 4, 166, NULL, NULL, NULL, NULL, NULL, NULL),
(626, 5, 166, NULL, NULL, NULL, NULL, NULL, NULL),
(627, 2, 168, NULL, NULL, NULL, NULL, NULL, NULL),
(628, 3, 168, NULL, NULL, NULL, NULL, NULL, NULL),
(629, 4, 168, NULL, NULL, NULL, NULL, NULL, NULL),
(630, 5, 168, NULL, NULL, NULL, NULL, NULL, NULL),
(631, 2, 167, NULL, NULL, NULL, NULL, NULL, NULL),
(632, 3, 167, NULL, NULL, NULL, NULL, NULL, NULL),
(633, 4, 167, NULL, NULL, NULL, NULL, NULL, NULL),
(634, 5, 167, NULL, NULL, NULL, NULL, NULL, NULL),
(635, 5, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(636, 5, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(637, 5, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(638, 5, 176, NULL, NULL, NULL, NULL, NULL, NULL),
(639, 5, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(640, 5, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(641, 5, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(642, 5, 169, NULL, NULL, NULL, NULL, NULL, NULL),
(643, 5, 170, NULL, NULL, NULL, NULL, NULL, NULL),
(644, 5, 171, NULL, NULL, NULL, NULL, NULL, NULL),
(645, 5, 172, NULL, NULL, NULL, NULL, NULL, NULL),
(646, 5, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(647, 5, 182, NULL, NULL, NULL, NULL, NULL, NULL),
(648, 5, 185, NULL, NULL, NULL, NULL, NULL, NULL),
(649, 5, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(650, 5, 184, NULL, NULL, NULL, NULL, NULL, NULL),
(651, 5, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(652, 1, 562, NULL, NULL, NULL, NULL, NULL, NULL),
(653, 2, 562, NULL, NULL, NULL, NULL, NULL, NULL),
(654, 3, 562, NULL, NULL, NULL, NULL, NULL, NULL),
(655, 4, 562, NULL, NULL, NULL, NULL, NULL, NULL),
(656, 5, 562, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
