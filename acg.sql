-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc38
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Sob 08. čen 2024, 12:18
-- Verze serveru: 10.5.23-MariaDB
-- Verze PHP: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `acg`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_ChemicalComponent`
--

CREATE TABLE `agc_ChemicalComponent` (
  `ChemicalComponentID` int(11) NOT NULL,
  `CASNumber` int(11) DEFAULT NULL,
  `ChemicalComponentName` varchar(64) DEFAULT NULL,
  `ChemicalComponentNote` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_ChemicalComponent`
--

INSERT INTO `agc_ChemicalComponent` (`ChemicalComponentID`, `CASNumber`, `ChemicalComponentName`, `ChemicalComponentNote`) VALUES
(373, 123456, 'Methanol', 'Přid&aacute;no 27.12.2023'),
(374, NULL, 'Ethanol', 'Složka 3 byla přid&aacute;na'),
(375, 99985, 'Aceton', 'Složka Aceton byla přid&aacute;na'),
(376, 63254, 'Sod&iacute;k', 'Složka 3 byla přid&aacute;na'),
(377, 98563, 'Železo', NULL),
(378, 74586, 'Hlin&iacute;k', NULL),
(379, 987654, 'C&iacute;n', NULL),
(380, 12345, 'Ocel', NULL),
(381, 45863, 'Ocel', NULL),
(382, 95631, 'Kalen&aacute; ocel', NULL),
(383, NULL, 'Zlato', NULL),
(384, 9999, 'Testovaci3012', NULL),
(385, NULL, 'Složka 444', NULL),
(386, 98563, 'Složka 444', NULL),
(387, NULL, 'Složka 444', NULL),
(391, 2024, 'složka2024', NULL),
(392, 202422, '2024slozka2', NULL),
(393, 20243, '2024slozka3', 'slozka 20243'),
(394, 20245, 'Sod&iacute;k2024', NULL),
(395, 7854, 'Sod&iacute;k20243', NULL),
(396, 25632, 'Složka 444', NULL),
(397, 25632, 'Složka 444', NULL),
(398, 25632, 'Složka 444', NULL),
(399, 5, 'Slozka 5', NULL);

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_Material`
--

CREATE TABLE `agc_Material` (
  `SAPNumber` int(11) NOT NULL,
  `MaterialName` varchar(64) DEFAULT NULL,
  `MaterialType` varchar(32) DEFAULT NULL,
  `MaterialCategory` varchar(32) DEFAULT NULL,
  `MaterialNote` mediumtext DEFAULT NULL,
  `SupplierIDFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_Material`
--

INSERT INTO `agc_Material` (`SAPNumber`, `MaterialName`, `MaterialType`, `MaterialCategory`, `MaterialNote`, `SupplierIDFK`) VALUES
(0, 'Testovací', 'hgfd', 'gfd', '', 2),
(1, 'Testovací materiál', 'mat', 'mat', '', 2),
(5, 'Mat 87', 'Mat', 'Materiály', '', 2),
(12, 'Testovací materiál12', '1', 'mat', 'Component used in auto glass frame assembly', 2),
(56, 'Testovací materiál', 'mat', 'mat', '', 2),
(98, '1', 'mat', 'mat', '', 2),
(122, 'Testovací materiál', '1', 'mat', '', 2),
(124, 'fdfsd', 'fds', 'sd', '', 2),
(195, 'Testovací materiál', 'mat', 'mat', '', 2),
(230, '1', 'mat', 'mat', '', 2),
(321, 'Testovací materiál', 'mat', 'mat', '', 2),
(325, 'dfgd', 'gdf', 'dg', '', 2),
(654, 'Testovací materiál', 'mat', 'mat', '', 2),
(745, 'Testovací materiál', 'mat', 'mat', '', 2),
(856, '1', 'mat', 'mat', '', 2),
(984, '1', 'mat', 'mat', '', 2),
(985, '323', 'gf', 'mat', '', 2),
(999, 'TesstMaterial', 'Typ', 'Kategorie', '', 2),
(1223, 'Testovací materiál', '1', 'mat', '', 2),
(1244, 'fdfsd', 'fds', 'sd', '', 2),
(1254, 'gfg', 'dfg', 'dfgd', '', 2),
(2303, '1', 'mat', 'mat', '', 2),
(3254, 'dfgd', 'gdf', 'dg', '', 2),
(3359, '1', 'mat', 'mat', '', 2),
(3563, '1', 'mat', 'mat', '', 2),
(4143, 'Testovací materiál', '1', 'mat', '', 2),
(5465, 'Testovací materiál', 'mat', 'mat', '', 2),
(8989, 'Testovací materiál', 'mat', 'mat', '', 2),
(9999, 'TesstMaterial', 'Typ', 'Kategorie', '', 2),
(10101, 'Testovaci mat', 'mat', 'mat', '', 2),
(12233, 'Testovací materiál', '1', 'mat', '', 2),
(12543, 'gfg', 'dfg', 'dfgd', '', 2),
(17845, 'materi&aacute;l 452', 'fhgf', 'fsdfsd', '', 2),
(19874, 'Testovací materiál', 'mat', 'mat', '', 2),
(23033, '1', 'mat', 'mat', '', 2),
(41434, 'Testovací materiál', '1', 'mat', '', 2),
(54656, 'Testovací materiál', 'mat', 'mat', '', 2),
(89889, 'Testovací materiál', 'mat', 'mat', '', 2),
(98545, 'Testovací materiál', 'mat', 'mat', '', 2),
(98563, 'Testovací materiál', 'mat', '1', '', 2),
(98745, 'Testovací materiál', 'mat', 'mat', '', 2),
(99999, 'TesstMaterial', 'Typ', 'Kategorie', '', 2),
(125434, 'gfg', 'dfg', 'dfgd', '', 2),
(222111, 'Testmat 03010', 'mat', 'mat', '', 3),
(331411, '1', '1', '1', '', 2),
(332211, 'Testmat 0301', 'mat', 'mat', '', 3),
(333333, 'Testovací materiál', 'mat', 'mat', '', 2),
(335998, '1', 'mat', 'mat', '', 2),
(414434, 'Testovací materiál', '1', 'mat', '', 2),
(546598, 'Testovací', 'mat', 'mat', '', 3),
(777888, 'fdgdf', 'dgfgd', 'gdfgdf', '', 2),
(778899, 'Mat 03012024', 'mat', 'mat', '', 2),
(898896, 'Testovací materiál', 'mat', 'mat', '', 2),
(999999, 'Tesovaci3012', 'mat', 'mat', '', 2),
(1111111, '1', '1', '1', '', 2),
(1254344, 'gfg', 'dfg', 'dfgd', '', 2),
(1474333, 'Testovac&iacute; materi&aacute;l', 'mat', 'mat', '', 2),
(2223611, 'hhvchgv', 'dhjk', 'cbdh', '', 2),
(2525445, 'gdfg', 'adffgfg', 'fgfgfg', '', 2),
(3259797, 'fg', 'gf', 'fg', '', 2),
(3333333, 'Testovací materiál', 'mat', 'mat', '', 2),
(4144343, 'Testovací materiál', '1', 'mat', '', 2),
(8988969, 'Testovací materiál', 'mat', 'mat', '', 2),
(11111111, 'Testovac&iacute;', 'mat', 'mat', 'Component used in auto glass frame assembly', 2),
(12345678, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(12543444, 'gfg', 'dfg', 'dfgd', '', 2),
(22222222, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 1),
(22236112, 'hhvchgv', 'dhjk', 'cbdh', '', 2),
(23456789, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(32597973, 'fg', 'gf', 'fg', '', 2),
(33599898, '1', 'mat', 'mat', '', 2),
(34567890, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(41443433, 'Testovací materiál', '1', 'mat', '', 2),
(45678901, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(54231452, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(56789012, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(67890123, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(78901234, 'Materiál Test986', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(89012345, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(90123456, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(96532147, 'Nov&yacute; materi&aacute;l', 'asd', 'asd', '', 2),
(98765432, 'Materi&aacute;l Test', 'test', 'test', 'Component used in auto glass frame assembly', 2),
(125434444, 'gfg', 'dfg', 'dfgd', '', 2),
(325979733, 'fg', 'gf', 'fg', '', 2),
(1254344444, 'gfg', 'dfg', 'dfgd', '', 2),
(1254354444, 'gfg', 'dfg', 'dfgd', '', 2),
(1254364444, 'gfg', 'dfg', 'dfgd', '', 2);

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_MaterialChemicalComponent`
--

CREATE TABLE `agc_MaterialChemicalComponent` (
  `CompositionID` int(11) NOT NULL,
  `SAPNumberFK` int(11) DEFAULT NULL,
  `ChemicalComponentIDFK` int(11) DEFAULT NULL,
  `ShareWeight` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Vypisuji data pro tabulku `agc_MaterialChemicalComponent`
--

INSERT INTO `agc_MaterialChemicalComponent` (`CompositionID`, `SAPNumberFK`, `ChemicalComponentIDFK`, `ShareWeight`) VALUES
(51, 12345678, 6, '80g'),
(52, 23456789, 1, '27%'),
(53, 34567890, 2, '11%'),
(54, 45678901, 3, '4.2%'),
(55, 56789012, 4, '3.3%'),
(56, 67890123, 5, '2.7%'),
(57, 78901234, 6, '85g'),
(58, 89012345, 7, '28%'),
(59, 90123456, 8, '12%'),
(60, 98765432, 9, '4.5%'),
(61, 12345678, 10, '2.9%'),
(62, 23456789, 11, '90g'),
(63, 34567890, 12, '30%'),
(64, 45678901, 13, '13%'),
(65, 56789012, 14, '4.8%'),
(66, 67890123, 15, '3.9%'),
(67, 78901234, 16, '3.2%'),
(68, 89012345, 17, '95g'),
(69, 90123456, 18, '32%'),
(70, 98765432, 19, '14%'),
(71, 12345678, 20, '5.1%'),
(72, 23456789, 21, '4.1%'),
(73, 34567890, 22, '3.4%'),
(74, 45678901, 23, '100g'),
(75, 56789012, 24, '35%'),
(76, 67890123, 25, '15%'),
(77, 78901234, 1, '5.4%'),
(78, 89012345, 2, '4.3%'),
(79, 90123456, 3, '3.6%'),
(80, 98765432, 4, '105g'),
(81, 12345678, 5, '37%'),
(82, 23456789, 6, '16%'),
(83, 34567890, 7, '5.7%'),
(84, 45678901, 8, '4.6%'),
(85, 56789012, 9, '3.8%'),
(86, 67890123, 10, '110g'),
(87, 78901234, 11, '40%'),
(88, 89012345, 12, '17%'),
(89, 90123456, 13, '6%'),
(90, 98765432, 14, '45g'),
(91, 12345678, 15, '18%'),
(92, 23456789, 16, '6.7%'),
(93, 34567890, 17, '2.8%'),
(94, 45678901, 18, '1.1%'),
(95, 56789012, 19, '55g'),
(96, 67890123, 20, '20%'),
(97, 78901234, 21, '8.9%'),
(98, 89012345, 22, '3.2%'),
(99, 90123456, 23, '1.9%'),
(100, 98765432, 24, '1.6%'),
(101, 12345678, 25, '115g'),
(150, 54231452, 130, '80%'),
(151, 12345678, 130, '12%'),
(152, 12345678, 172, '100%'),
(153, 12345678, 172, '100%'),
(154, 12345678, 172, '100%'),
(155, 12345678, 172, '100%'),
(156, 12345678, 173, '36%'),
(157, 12345678, 173, '36%'),
(158, 12345678, 173, '36%'),
(159, 12345678, 173, '36%'),
(160, 12345678, 174, '26%'),
(161, 12345678, 174, '26%'),
(162, 12345678, 174, '26%'),
(163, 12345678, 174, '26%'),
(164, 12345678, 174, '26%'),
(165, 12345678, 175, '39%'),
(167, 12345678, 176, '1%'),
(168, 11111111, 176, '20%'),
(169, 12345678, 176, '1%'),
(170, 11111111, 176, '20%'),
(171, 12345678, 176, '1%'),
(172, 11111111, 176, '20%'),
(173, 12345678, 176, '1%'),
(174, 11111111, 176, '20%'),
(175, 12345678, 176, '1%'),
(176, 11111111, 176, '20%'),
(177, 12345678, 176, '1%'),
(178, 11111111, 176, '20%'),
(181, 12345678, 283, '100%'),
(182, 12345678, 283, '100%'),
(183, 12345678, 284, '64%'),
(184, 12345678, 284, '64%'),
(185, 12345678, 285, '26%'),
(186, 12345678, 289, '36%'),
(187, 12345678, 292, '100%'),
(188, 12345678, 293, '100%'),
(189, 12345678, 294, '39%'),
(190, 34567890, 294, '1%'),
(191, 22222222, 294, '2%'),
(192, 12345678, 295, '100%'),
(193, 12345678, 296, '100%'),
(194, 12345678, 296, '100%'),
(195, 12345678, 296, '100%'),
(196, 12345678, 296, '100%'),
(197, 12345678, 296, '100%'),
(198, 12345678, 296, '100%'),
(199, 12345678, 296, '100%'),
(200, 12345678, 297, '30%'),
(201, 12345678, 298, '36%'),
(202, 11111111, 299, '36%'),
(203, 12345678, 300, '100%'),
(204, 12345678, 301, '10%'),
(205, 12345678, 304, '10%'),
(206, 12345678, 307, '100%'),
(207, 12345678, 308, '100%'),
(208, 12345678, 308, '100%'),
(209, 12345678, 316, '20%'),
(210, 12345678, 316, '20%'),
(211, 12345678, 316, '20%'),
(212, 12345678, 316, '10%'),
(213, 12345678, 316, '10%'),
(214, 12345678, 317, '10%'),
(215, 12345678, 317, '10%'),
(216, 12345678, 317, '10%'),
(217, 12345678, 317, '10%'),
(218, 12345678, 317, '10%'),
(219, 12345678, 317, '10%'),
(220, 12345678, 317, '10%'),
(221, 12345678, 318, '10%'),
(222, 12345678, 318, '10%'),
(223, 12345678, 319, '10%'),
(224, 12345678, 319, '10%'),
(225, 12345678, 319, '10%'),
(226, 12345678, 319, '10%'),
(227, 12345678, 319, '10%'),
(228, 12345678, 320, '10%'),
(229, 12345678, 321, '10%'),
(230, 12345678, 321, '10%'),
(231, 12345678, 321, '10%'),
(232, 12345678, 332, '20%'),
(233, 12345678, 333, '20%'),
(234, 12345678, 333, '20%'),
(235, 12345678, 333, '20%'),
(236, 12345678, 333, '10%'),
(237, 12345678, 334, '10%'),
(238, 12345678, 334, '10%'),
(239, 12345678, 334, '10%'),
(240, 12345678, 334, '10%'),
(241, 12345678, 335, '10%'),
(242, 12345678, 335, '10%'),
(243, 12345678, 336, '20%'),
(244, 12345678, 337, '10%'),
(246, 12345678, 339, '10%'),
(247, 12345678, 339, '10%'),
(248, 12345678, 340, '20%'),
(249, 12345678, 340, '20%'),
(250, 12345678, 340, '20%'),
(251, 12345678, 340, '20%'),
(252, 12345678, 340, '20%'),
(253, 12345678, 340, '20%'),
(254, 12345678, 342, '10%'),
(255, 12345678, 342, '10%'),
(256, 12345678, 343, '10%'),
(257, 12345678, 343, '10%'),
(258, 12345678, 344, '10%'),
(259, 12345678, 344, '20%'),
(260, 12345678, 345, '20%'),
(261, 12345678, 345, '20%'),
(262, 12345678, 345, '30%'),
(263, 12345678, 346, '10%'),
(264, 12345678, 348, '10%'),
(265, 12345678, 348, '20%'),
(266, 12345678, 348, '10%'),
(267, 12345678, 348, '20%'),
(268, 12345678, 348, '10%'),
(269, 12345678, 348, '20%'),
(270, 12345678, 348, '10%'),
(271, 12345678, 348, '20%'),
(272, 12345678, 348, '10%'),
(273, 12345678, 348, '20%'),
(274, 12345678, 348, '10%'),
(275, 12345678, 348, '20%'),
(276, 12345678, 350, '30%'),
(277, 12345678, 350, '20%'),
(278, 12345678, 351, '30%'),
(279, 12345678, 351, '30%'),
(280, 12345678, 351, '30%'),
(281, 12345678, 351, '30%'),
(282, 12345678, 352, '30%'),
(283, 12345678, 352, '10%'),
(284, 12345678, 352, '10%'),
(285, 12345678, 352, '10%'),
(286, 12345678, 352, '10%'),
(287, 12345678, 352, '10%'),
(288, 12345678, 352, '10%'),
(289, 12345678, 352, '10%'),
(290, 12345678, 352, '10%'),
(291, 12345678, 352, '10%'),
(292, 12345678, 352, '10%'),
(293, 12345678, 352, '10%'),
(294, 12345678, 352, '10%'),
(295, 12345678, 352, '10%'),
(296, 12345678, 352, '10%'),
(297, 12345678, 352, '10%'),
(298, 12345678, 352, '10%'),
(299, 12345678, 353, '10%'),
(300, 12345678, 353, '10%'),
(301, 12345678, 353, '10%'),
(302, 12345678, 354, '10%'),
(303, 12345678, 354, '10%'),
(304, 12345678, 354, '10%'),
(305, 12345678, 354, '10%'),
(306, 12345678, 354, '20%'),
(307, 12345678, 355, '20%'),
(308, 12345678, 356, '10%'),
(309, 12345678, 356, '20%'),
(310, 12345678, 356, '10%'),
(311, 12345678, 356, '20%'),
(312, 12345678, 356, '10%'),
(313, 12345678, 356, '10%'),
(314, 12345678, 356, '30%'),
(315, 12345678, 356, '20%'),
(316, 12345678, 357, '10%'),
(317, 12345678, 357, '10%'),
(318, 12345678, 358, '10'),
(319, 12345678, 358, '10'),
(320, 12345678, 358, '10'),
(321, 12345678, 358, '10'),
(322, 12345678, 358, '10'),
(323, 12345678, 358, '10'),
(324, 12345678, 371, '10%'),
(325, 12345678, 371, '10%'),
(326, 12345678, 371, '10%'),
(327, 12345678, 372, '10%'),
(328, 12345678, 372, '10%'),
(329, 12345678, 372, '20%'),
(330, 12345678, 373, '10%'),
(331, 12345678, 374, '10%'),
(332, 12345678, 375, '12%'),
(333, 12345678, 375, '20%'),
(334, 12345678, 376, '10%'),
(335, 12345678, 377, '10%'),
(336, 12345678, 378, '10%'),
(337, 12345678, 379, '10%'),
(338, 12345678, 381, '10%'),
(339, 12345678, 382, '10%'),
(340, 12345678, 375, '99%'),
(341, 999999, 384, '100%'),
(342, 12345678, 386, '20%'),
(343, 12345678, 386, '10%'),
(344, 12345678, 386, '10%'),
(345, 12345678, 375, '10%'),
(346, 12345678, 375, '10%'),
(347, 12345678, 393, '10%'),
(348, 12345678, 393, '10%'),
(349, 12345678, 393, '10%'),
(350, 12345678, 395, '10%'),
(351, 12345678, 395, '10%'),
(352, 12345678, 395, '10%'),
(353, 5, 399, '15%');

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_MaterialPosition`
--

CREATE TABLE `agc_MaterialPosition` (
  `MaterialPositionID` int(11) NOT NULL,
  `TechnicalSheetNumberFK` varchar(32) DEFAULT NULL,
  `SAPNumberFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_MaterialPosition`
--

INSERT INTO `agc_MaterialPosition` (`MaterialPositionID`, `TechnicalSheetNumberFK`, `SAPNumberFK`) VALUES
(1, '1', 12345678),
(2, '1', 23456789),
(3, '2', 34567890),
(4, '2', 45678901),
(5, '3', 56789012),
(6, '3', 67890123),
(7, '4', 78901234),
(8, '4', 89012345),
(9, '5', 90123456),
(10, '5', 98765432),
(11, '2A', 12345678),
(12, '2B', 23456789),
(13, '2C', 34567890),
(14, '3', 45678901),
(15, '3', 56789012),
(16, '4', 67890123),
(17, '4A', 78901234),
(18, '4B', 89012345),
(19, '5', 90123456),
(20, '1', 12345678),
(52, '12', 54231452),
(53, '00', 321),
(54, '0013', 321),
(55, '004', 321),
(56, '001', 1),
(57, '002', 1),
(58, '004', 1),
(59, '0013', 230),
(60, '002', 230),
(61, '00', 2303),
(62, '001', 2303),
(63, '0013', 2303),
(64, '002', 2303),
(65, '001', 41434),
(66, '0013', 41434),
(67, '001', 12),
(68, '0013', 12),
(69, '001', 122),
(70, '0013', 122),
(71, '002', 122),
(72, '0013', 12233),
(73, '001', 654),
(74, '0013', 654),
(75, '00', 0),
(76, '001', 0),
(77, '002', 0),
(78, '004', 0),
(79, '0013', 10101),
(80, '002', 10101),
(81, '001', 10101),
(82, '00', 3563),
(83, '001', 3563),
(84, '002', 3563),
(85, '00', 3359),
(86, '001', 3359),
(87, '001', 335998),
(88, '00', 335998),
(89, '00', 98),
(90, '001', 98),
(91, '00', 33599898),
(92, '001', 33599898),
(93, '0013', 33599898),
(94, '00', 984),
(95, '001', 984),
(96, '0013', 984),
(97, '001', 985),
(98, '0013', 985),
(99, '00', 985),
(100, '00', 98545),
(101, '001', 98545),
(102, '0013', 98545),
(103, '002', 98545),
(104, '004', 98545),
(105, '00', 8989),
(106, '001', 8989),
(107, '0013', 8989),
(108, '00', 89889),
(109, '001', 89889),
(110, '002', 89889),
(111, '0013', 89889),
(112, '00', 898896),
(113, '001', 898896),
(114, '004', 898896),
(115, '002', 898896),
(116, '00', 8988969),
(117, '001', 8988969),
(118, '0013', 8988969),
(119, '004', 8988969),
(120, '00', 745),
(121, '0013', 745),
(122, '004', 745),
(123, '002', 745),
(124, '12B', 745),
(125, '00', 98745),
(126, '001', 98745),
(127, '0013', 98745),
(128, '002', 98745),
(129, '1', 98745),
(130, '0013', 5465),
(131, '001', 5465),
(132, '004', 5465),
(133, '002', 54656),
(134, '0013', 54656),
(135, '001', 54656),
(136, '002', 546598),
(137, '0013', 546598),
(138, '001', 546598),
(139, '00', 546598),
(140, '00', 78901234),
(141, '00', 78901234),
(142, '00', 78901234),
(143, '00', 12),
(144, '002', 124),
(145, '0013', 124),
(146, '001', 124),
(147, '00', 124),
(148, '002', 124),
(149, '0013', 124),
(150, '001', 124),
(151, '00', 124),
(152, '165', 999999),
(153, '12B', 19874),
(154, '12B6', 19874),
(155, '14', 19874),
(156, '145', 19874),
(157, '2', 19874),
(158, '222', 19874),
(159, '23', 19874),
(160, '230', 19874),
(161, '2A', 19874),
(162, '2B', 19874),
(163, '2C', 19874),
(164, '3', 19874),
(165, '333', 19874),
(166, '025', 0),
(167, '1', 0),
(168, '025', 0),
(169, '1', 0),
(170, '00', 0),
(171, '001', 0),
(172, '0013', 0),
(173, '001', 222111),
(174, '0013', 222111),
(175, '002', 222111),
(176, '004', 222111),
(177, '1', 222111),
(178, '00', 98563),
(179, '001', 98563),
(180, '0013', 98563),
(181, '147', 5);

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_Project`
--

CREATE TABLE `agc_Project` (
  `ProjectID` int(11) NOT NULL,
  `ProjectName` varchar(64) NOT NULL,
  `ProjectShortcut` varchar(8) NOT NULL,
  `IMDSName` varchar(8) NOT NULL,
  `Customer` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_Project`
--

INSERT INTO `agc_Project` (`ProjectID`, `ProjectName`, `ProjectShortcut`, `IMDSName`, `Customer`) VALUES
(1, 'Projekt', 'PRO', '125AE', 'Mercedes Benz'),
(2, 'Prosinec', 'NEC', '987PO', 'Audi'),
(3, 'Testovaci', 'TES', 'PO745', 'Volvo'),
(4, 'Nazev', 'NAZ', '001SA', 'BMW'),
(5, 'Leden20244010', 'LED', 'K222', 'Kia 24'),
(10, 'Na&scaron;a&scaron;zev', 'ABC1', 'PAS2', 'Volvo'),
(11, 'N&aacute;zev2024', 'PEST', 'MBW', 'Mercedes'),
(12, 'N&aacute;zev2023', 'fgg', 'MER3', 'Mercedes Benz 2'),
(13, 'Testovac&iacute;', 'PEST', 'MBW', 'BMW'),
(14, 'Testovac&iacute;', 'PEST', 'MBW', 'BMW'),
(15, 'Testovac&iacute;', 'PEST', '123AB', 'Audi'),
(16, 'Testovac&iacute; projekt 2', 'PRO', 'MBW3', 'Audi'),
(17, 'Testovac&iacute;', 'PEST', '123AB', 'Mercedes Benz'),
(18, 'Testovac&iacute;', 'PEST', '123AB', 'Mercedes Benz'),
(19, 'Testovac&iacute;', 'PEST', 'MBW', 'BMW'),
(20, 'Testovac&iacute;', 'PEST', 'MBW', 'BMW'),
(21, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(22, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(23, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(24, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(25, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(26, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(27, 'Testovac&iacute;', 'PEST', 'MBW3', 'Audi'),
(28, 'Testovac&iacute; projekt 2', 'PEST', 'MBW', 'BMW'),
(29, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(30, 'Testovac&iacute;', 'PEST', '123AB', 'Mercedes Benz'),
(31, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(32, 'Testovac&iacute;', 'PEST', '321PA', 'Mercedes'),
(33, 'Testovac&iacute; projekt 2', 'PEST', '123AB', 'Audi'),
(34, 'Testovac&iacute; projekt 2', 'PEST', '123AB', 'Audi'),
(35, 'Testovac&iacute;', '6548', '1123', 'Mercedes'),
(36, 'Testovac&iacute;', 'PEST', 'MBW', 'Mercedes'),
(37, 'Testovac&iacute;', 'PEST', 'MBW', 'Mercedes'),
(38, 'Testovac&iacute;', 'PEST', 'MBW', 'Mercedes'),
(39, 'Testovac&iacute;', 'PRO', 'MBW', 'Audi'),
(40, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(41, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(42, 'Testovaci3012', 'TES', '12365', 'Audi'),
(43, 'Testovac&iacute;', 'PEST', 'MBW', 'Mercedes'),
(45, 'Testovac&iacute; projekt ', 'pest', 'MBW', 'Audi'),
(46, 'Testovac&iacute; projekt ', 'pest', 'MBW', 'Audi'),
(47, 'Testovac&iacute; projekt ', 'pest', 'MBW', 'Audi'),
(48, 'Testovac&iacute;', 'PEST', 'MBW', 'Audi'),
(49, 'Projekt 287', '287PO', '1XD58A', 'Audi'),
(50, 'Prezentačn&iacute; projekt', 'PREPRO', '111222', 'AGC');

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_Supplier`
--

CREATE TABLE `agc_Supplier` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_Supplier`
--

INSERT INTO `agc_Supplier` (`SupplierID`, `SupplierName`) VALUES
(1, 'ABC Supplier'),
(2, 'XYZ Supplier'),
(3, 'Skla Praha 10'),
(4, 'Dodavatel 9'),
(5, 'Dodavatel 6'),
(6, 'Dodavatel 12'),
(8, 'Dodavatel 98'),
(24, 'Dodavatel77'),
(25, 'Dodavatel 78'),
(26, 'Dodavatel78'),
(27, 'Rohl&iacute;k'),
(28, 'Rohl&iacute;k'),
(29, 'Dodavatel Lamberk'),
(30, 'Dodavatel Žambach');

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_TechnicalSheet`
--

CREATE TABLE `agc_TechnicalSheet` (
  `TechnicalSheetNumber` varchar(32) NOT NULL,
  `GlassType` varchar(8) DEFAULT NULL,
  `LampTemp` varchar(8) DEFAULT NULL,
  `Market` varchar(64) DEFAULT NULL,
  `Check` varchar(4) DEFAULT NULL,
  `ProjectIDFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_TechnicalSheet`
--

INSERT INTO `agc_TechnicalSheet` (`TechnicalSheetNumber`, `GlassType`, `LampTemp`, `Market`, `Check`, `ProjectIDFK`) VALUES
('00', 'ABC', 'Temp', 'ABC', NULL, 4),
('001', 'PLK', 'Temp', 'ABC', NULL, 4),
('0013', 'AAA', 'Temp', 'ABC', NULL, 4),
('002', 'AAA', 'Temp', 'ABC', NULL, 4),
('004', 'PET', 'Temp', 'ABC', NULL, 4),
('0123', 'FFX', 'Temp', 'ABC', 'Ano', 4),
('0132', 'FFX', 'Temp', 'ABC', NULL, 4),
('025', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('033', 'FFX', 'Temp', 'ABC', NULL, 4),
('1', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('10', 'AAA', 'Temp', 'ABC', NULL, 4),
('111', 'sdad', 'ABC', 'ABC', NULL, 4),
('114', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('1141', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('12', 'AAA', 'Temp', 'ABC', NULL, 4),
('12B', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('12B6', 'FFX', 'Temp', 'ABC', NULL, 4),
('14', 'AAA', 'Temp', 'ABC', NULL, 4),
('145', 'AAA', 'Temp', 'ABC', NULL, 4),
('147', 'FFX', 'Temp', 'ABC', NULL, 49),
('165', 'FFX', 'Temp', 'ABC', NULL, 42),
('18', 'AAA', 'Temp', 'ABC', NULL, 4),
('2', 'AAA', 'Temp', 'ABC', NULL, 4),
('222', 'AAA', 'Temp', 'ABC', NULL, 4),
('23', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('230', 'AAA', 'Temp', 'ABC', NULL, 4),
('2A', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('2B', 'AAA', 'Temp', 'ABC', NULL, 4),
('2C', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('3', 'AAA', 'Temp', 'ABC', NULL, 4),
('333', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('3331', 'FFX', 'Temp', 'ABC', 'Ano', 4),
('3333', 'FFX', 'Temp', 'fgdfffffffff', NULL, 4),
('345', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('4', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('41', 'AAA', 'Temp', 'ABC', NULL, 4),
('444', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('4565', 'AAA', 'Temp', 'ABC', NULL, 4),
('4A', 'AAA', 'Temp', 'ABC', NULL, 4),
('4B', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('5', 'AAA', 'Temp', 'ABC', NULL, 4),
('563', 'AAA', 'Temp', 'ABC', NULL, 4),
('647', 'AAA', 'Temp', 'ABC', 'Ano', 4),
('9854444', 'FFX', 'Temp', 'ABC', NULL, 5),
('98544446', 'FFX', 'Temp', 'ABC', NULL, 5);

-- --------------------------------------------------------

--
-- Struktura tabulky `agc_User`
--

CREATE TABLE `agc_User` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `UserPass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `agc_User`
--

INSERT INTO `agc_User` (`UserID`, `Username`, `UserPass`) VALUES
(1, 'Tomas', '74914c81f38f8b50a8a262b59d757d89'),
(3, 'test', 'ee53d4213c897ad632bb8d824762f918'),
(4, 'vasek', 'd3c7cbe5cb41022dac3966760ee8255b');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `agc_ChemicalComponent`
--
ALTER TABLE `agc_ChemicalComponent`
  ADD PRIMARY KEY (`ChemicalComponentID`);

--
-- Indexy pro tabulku `agc_Material`
--
ALTER TABLE `agc_Material`
  ADD PRIMARY KEY (`SAPNumber`),
  ADD KEY `SupplierIDFK` (`SupplierIDFK`);

--
-- Indexy pro tabulku `agc_MaterialChemicalComponent`
--
ALTER TABLE `agc_MaterialChemicalComponent`
  ADD PRIMARY KEY (`CompositionID`),
  ADD KEY `SAPNumberFK_Material` (`SAPNumberFK`),
  ADD KEY `ChemicalComponentIDFK_ChemicalComponent` (`ChemicalComponentIDFK`);

--
-- Indexy pro tabulku `agc_MaterialPosition`
--
ALTER TABLE `agc_MaterialPosition`
  ADD PRIMARY KEY (`MaterialPositionID`),
  ADD KEY `TechnicalSheetNumberFK` (`TechnicalSheetNumberFK`),
  ADD KEY `SAPNumberFK` (`SAPNumberFK`);

--
-- Indexy pro tabulku `agc_Project`
--
ALTER TABLE `agc_Project`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexy pro tabulku `agc_Supplier`
--
ALTER TABLE `agc_Supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexy pro tabulku `agc_TechnicalSheet`
--
ALTER TABLE `agc_TechnicalSheet`
  ADD PRIMARY KEY (`TechnicalSheetNumber`),
  ADD KEY `ProjectIDFK` (`ProjectIDFK`);

--
-- Indexy pro tabulku `agc_User`
--
ALTER TABLE `agc_User`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `agc_ChemicalComponent`
--
ALTER TABLE `agc_ChemicalComponent`
  MODIFY `ChemicalComponentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT pro tabulku `agc_MaterialChemicalComponent`
--
ALTER TABLE `agc_MaterialChemicalComponent`
  MODIFY `CompositionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT pro tabulku `agc_MaterialPosition`
--
ALTER TABLE `agc_MaterialPosition`
  MODIFY `MaterialPositionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT pro tabulku `agc_Project`
--
ALTER TABLE `agc_Project`
  MODIFY `ProjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pro tabulku `agc_Supplier`
--
ALTER TABLE `agc_Supplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pro tabulku `agc_User`
--
ALTER TABLE `agc_User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `agc_Material`
--
ALTER TABLE `agc_Material`
  ADD CONSTRAINT `SupplierIDFK` FOREIGN KEY (`SupplierIDFK`) REFERENCES `agc_Supplier` (`SupplierID`);

--
-- Omezení pro tabulku `agc_MaterialChemicalComponent`
--
ALTER TABLE `agc_MaterialChemicalComponent`
  ADD CONSTRAINT `ChemicalComponentIDFK_ChemicalComponent` FOREIGN KEY (`ChemicalComponentIDFK`) REFERENCES `agc_ChemicalComponent` (`ChemicalComponentID`),
  ADD CONSTRAINT `SAPNumberFK_Material` FOREIGN KEY (`SAPNumberFK`) REFERENCES `agc_Material` (`SAPNumber`);

--
-- Omezení pro tabulku `agc_MaterialPosition`
--
ALTER TABLE `agc_MaterialPosition`
  ADD CONSTRAINT `SAPNumberFK` FOREIGN KEY (`SAPNumberFK`) REFERENCES `agc_Material` (`SAPNumber`),
  ADD CONSTRAINT `TechnicalSheetNumberFK` FOREIGN KEY (`TechnicalSheetNumberFK`) REFERENCES `agc_TechnicalSheet` (`TechnicalSheetNumber`);

--
-- Omezení pro tabulku `agc_TechnicalSheet`
--
ALTER TABLE `agc_TechnicalSheet`
  ADD CONSTRAINT `ProjectIDFK` FOREIGN KEY (`ProjectIDFK`) REFERENCES `agc_Project` (`ProjectID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
