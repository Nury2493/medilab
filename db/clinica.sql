-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2024 a las 14:34:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `cita_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `servicio_id` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `estado` varchar(50) DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`cita_id`, `cliente_id`, `servicio_id`, `fecha_hora`, `estado`) VALUES
(1, 1, 4, '2024-06-17 09:00:00', 'Pendiente'),
(2, 2, 3, '2024-06-17 10:00:00', 'Pendiente'),
(3, 3, 6, '2024-06-17 11:00:00', 'Pendiente'),
(4, 4, 9, '2024-06-17 12:00:00', 'Pendiente'),
(5, 5, 12, '2024-06-17 13:00:00', 'Pendiente'),
(6, 6, 15, '2024-06-17 14:00:00', 'Pendiente'),
(7, 7, 18, '2024-06-17 15:00:00', 'Pendiente'),
(8, 8, 21, '2024-06-17 16:00:00', 'Pendiente'),
(9, 9, 24, '2024-06-17 17:00:00', 'Pendiente'),
(10, 10, 27, '2024-06-17 18:00:00', 'Pendiente'),
(11, 11, 30, '2024-06-17 19:00:00', 'Pendiente'),
(12, 12, 33, '2024-06-17 20:00:00', 'Pendiente'),
(13, 13, 36, '2024-06-17 21:00:00', 'Pendiente'),
(14, 14, 39, '2024-06-17 22:00:00', 'Pendiente'),
(15, 15, 42, '2024-06-17 23:00:00', 'Pendiente'),
(16, 16, 45, '2024-06-18 09:00:00', 'Pendiente'),
(17, 17, 48, '2024-06-18 10:00:00', 'Pendiente'),
(18, 18, 51, '2024-06-18 11:00:00', 'Pendiente'),
(19, 19, 54, '2024-06-18 12:00:00', 'Pendiente'),
(20, 20, 57, '2024-06-18 13:00:00', 'Pendiente'),
(21, 21, 60, '2024-06-18 14:00:00', 'Pendiente'),
(22, 22, 63, '2024-06-18 15:00:00', 'Pendiente'),
(23, 23, 66, '2024-06-18 16:00:00', 'Pendiente'),
(24, 24, 69, '2024-06-18 17:00:00', 'Pendiente'),
(25, 25, 72, '2024-06-18 18:00:00', 'Pendiente'),
(26, 26, 75, '2024-06-18 19:00:00', 'Pendiente'),
(27, 27, 78, '2024-06-18 20:00:00', 'Pendiente'),
(28, 28, 81, '2024-06-18 21:00:00', 'Pendiente'),
(29, 29, 84, '2024-06-18 22:00:00', 'Pendiente'),
(30, 30, 87, '2024-06-18 23:00:00', 'Pendiente'),
(31, 31, 90, '2024-06-19 09:00:00', 'Pendiente'),
(32, 32, 93, '2024-06-19 10:00:00', 'Pendiente'),
(33, 33, 96, '2024-06-19 11:00:00', 'Pendiente'),
(34, 34, 99, '2024-06-19 12:00:00', 'Pendiente'),
(35, 35, 102, '2024-06-19 13:00:00', 'Pendiente'),
(36, 36, 105, '2024-06-19 14:00:00', 'Pendiente'),
(37, 37, 108, '2024-06-19 15:00:00', 'Pendiente'),
(38, 38, 111, '2024-06-19 16:00:00', 'Pendiente'),
(39, 39, 114, '2024-06-19 17:00:00', 'Pendiente'),
(40, 40, 117, '2024-06-19 18:00:00', 'Pendiente'),
(41, 41, 120, '2024-06-19 19:00:00', 'Pendiente'),
(42, 42, 123, '2024-06-19 20:00:00', 'Pendiente'),
(43, 43, 126, '2024-06-19 21:00:00', 'Pendiente'),
(44, 44, 129, '2024-06-19 22:00:00', 'Pendiente'),
(45, 45, 132, '2024-06-19 23:00:00', 'Pendiente'),
(46, 46, 135, '2024-06-20 09:00:00', 'Pendiente'),
(47, 47, 138, '2024-06-20 10:00:00', 'Pendiente'),
(48, 48, 141, '2024-06-20 11:00:00', 'Pendiente'),
(49, 49, 144, '2024-06-20 12:00:00', 'Pendiente'),
(50, 50, 1, '2024-06-20 13:00:00', 'Pendiente'),
(51, 51, 2, '2024-06-20 14:00:00', 'Pendiente'),
(52, 52, 5, '2024-06-20 15:00:00', 'Pendiente'),
(53, 53, 7, '2024-06-20 16:00:00', 'Pendiente'),
(54, 54, 10, '2024-06-20 17:00:00', 'Pendiente'),
(55, 55, 13, '2024-06-20 18:00:00', 'Pendiente'),
(56, 56, 16, '2024-06-20 19:00:00', 'Pendiente'),
(57, 57, 19, '2024-06-20 20:00:00', 'Pendiente'),
(58, 58, 22, '2024-06-20 21:00:00', 'Pendiente'),
(59, 59, 25, '2024-06-20 22:00:00', 'Pendiente'),
(60, 60, 28, '2024-06-20 23:00:00', 'Pendiente'),
(61, 61, 31, '2024-06-21 09:00:00', 'Pendiente'),
(62, 62, 34, '2024-06-21 10:00:00', 'Pendiente'),
(63, 63, 37, '2024-06-21 11:00:00', 'Pendiente'),
(64, 64, 40, '2024-06-21 12:00:00', 'Pendiente'),
(65, 65, 43, '2024-06-21 13:00:00', 'Pendiente'),
(66, 66, 46, '2024-06-21 14:00:00', 'Pendiente'),
(67, 67, 49, '2024-06-21 15:00:00', 'Pendiente'),
(68, 68, 52, '2024-06-21 16:00:00', 'Pendiente'),
(69, 69, 55, '2024-06-21 17:00:00', 'Pendiente'),
(70, 70, 58, '2024-06-21 18:00:00', 'Pendiente'),
(71, 71, 61, '2024-06-21 19:00:00', 'Pendiente'),
(72, 72, 64, '2024-06-21 20:00:00', 'Pendiente'),
(73, 73, 67, '2024-06-21 21:00:00', 'Pendiente'),
(74, 74, 70, '2024-06-21 22:00:00', 'Pendiente'),
(75, 75, 73, '2024-06-21 23:00:00', 'Pendiente'),
(76, 76, 76, '2024-06-22 09:00:00', 'Pendiente'),
(77, 77, 79, '2024-06-22 10:00:00', 'Pendiente'),
(78, 78, 82, '2024-06-22 11:00:00', 'Pendiente'),
(79, 79, 85, '2024-06-22 12:00:00', 'Pendiente'),
(80, 80, 88, '2024-06-22 13:00:00', 'Pendiente'),
(81, 81, 91, '2024-06-22 14:00:00', 'Pendiente'),
(82, 82, 94, '2024-06-22 15:00:00', 'Pendiente'),
(83, 83, 97, '2024-06-22 16:00:00', 'Pendiente'),
(84, 84, 100, '2024-06-22 17:00:00', 'Pendiente'),
(85, 85, 103, '2024-06-22 18:00:00', 'Pendiente'),
(86, 86, 106, '2024-06-22 19:00:00', 'Pendiente'),
(87, 87, 109, '2024-06-22 20:00:00', 'Pendiente'),
(88, 88, 112, '2024-06-22 21:00:00', 'Pendiente'),
(89, 89, 115, '2024-06-22 22:00:00', 'Pendiente'),
(90, 90, 118, '2024-06-22 23:00:00', 'Pendiente'),
(91, 91, 121, '2024-06-23 09:00:00', 'Pendiente'),
(92, 92, 124, '2024-06-23 10:00:00', 'Pendiente'),
(93, 93, 127, '2024-06-23 11:00:00', 'Pendiente'),
(94, 94, 130, '2024-06-23 12:00:00', 'Pendiente'),
(95, 95, 133, '2024-06-23 13:00:00', 'Pendiente'),
(96, 96, 136, '2024-06-23 14:00:00', 'Pendiente'),
(97, 97, 139, '2024-06-23 15:00:00', 'Pendiente'),
(98, 98, 142, '2024-06-23 16:00:00', 'Pendiente'),
(99, 99, 144, '2024-06-23 17:00:00', 'Pendiente'),
(100, 100, 143, '2024-06-23 18:00:00', 'Pendiente'),
(101, 101, 2, '2024-06-24 13:00:00', 'Pendiente'),
(102, 102, 5, '2024-06-24 14:00:00', 'Pendiente'),
(103, 103, 7, '2024-06-24 15:00:00', 'Pendiente'),
(104, 104, 10, '2024-06-24 16:00:00', 'Pendiente'),
(105, 105, 13, '2024-06-24 17:00:00', 'Pendiente'),
(106, 106, 16, '2024-06-24 18:00:00', 'Pendiente'),
(107, 107, 19, '2024-06-24 19:00:00', 'Pendiente'),
(108, 108, 22, '2024-06-24 20:00:00', 'Pendiente'),
(109, 109, 25, '2024-06-24 21:00:00', 'Pendiente'),
(110, 110, 28, '2024-06-24 22:00:00', 'Pendiente'),
(111, 111, 31, '2024-06-24 23:00:00', 'Pendiente'),
(112, 112, 34, '2024-06-25 09:00:00', 'Pendiente'),
(113, 113, 37, '2024-06-25 10:00:00', 'Pendiente'),
(114, 114, 40, '2024-06-25 11:00:00', 'Pendiente'),
(115, 115, 43, '2024-06-25 12:00:00', 'Pendiente'),
(116, 116, 46, '2024-06-25 13:00:00', 'Pendiente'),
(117, 117, 49, '2024-06-25 14:00:00', 'Pendiente'),
(118, 118, 52, '2024-06-25 15:00:00', 'Pendiente'),
(119, 119, 55, '2024-06-25 16:00:00', 'Pendiente'),
(120, 120, 58, '2024-06-25 17:00:00', 'Pendiente'),
(121, 121, 61, '2024-06-25 18:00:00', 'Pendiente'),
(122, 122, 64, '2024-06-25 19:00:00', 'Pendiente'),
(123, 123, 67, '2024-06-25 20:00:00', 'Pendiente'),
(124, 124, 70, '2024-06-25 21:00:00', 'Pendiente'),
(125, 125, 73, '2024-06-25 22:00:00', 'Pendiente'),
(126, 126, 76, '2024-06-25 23:00:00', 'Pendiente'),
(127, 127, 79, '2024-06-26 09:00:00', 'Pendiente'),
(128, 128, 82, '2024-06-26 10:00:00', 'Pendiente'),
(129, 129, 85, '2024-06-26 11:00:00', 'Pendiente'),
(130, 130, 88, '2024-06-26 12:00:00', 'Pendiente'),
(131, 131, 91, '2024-06-26 13:00:00', 'Pendiente'),
(132, 132, 94, '2024-06-26 14:00:00', 'Pendiente'),
(133, 133, 97, '2024-06-26 15:00:00', 'Pendiente'),
(134, 134, 100, '2024-06-26 16:00:00', 'Pendiente'),
(135, 135, 103, '2024-06-26 17:00:00', 'Pendiente'),
(136, 136, 106, '2024-06-26 18:00:00', 'Pendiente'),
(137, 137, 109, '2024-06-26 19:00:00', 'Pendiente'),
(138, 138, 112, '2024-06-26 20:00:00', 'Pendiente'),
(139, 139, 115, '2024-06-26 21:00:00', 'Pendiente'),
(140, 140, 118, '2024-06-26 22:00:00', 'Pendiente'),
(141, 141, 121, '2024-06-26 23:00:00', 'Pendiente'),
(142, 142, 124, '2024-06-27 09:00:00', 'Pendiente'),
(143, 143, 127, '2024-06-27 10:00:00', 'Pendiente'),
(144, 144, 130, '2024-06-27 11:00:00', 'Pendiente'),
(145, 145, 4, '2024-06-27 13:00:00', 'Pendiente'),
(146, 146, 8, '2024-06-27 14:00:00', 'Pendiente'),
(147, 147, 11, '2024-06-27 15:00:00', 'Pendiente'),
(148, 148, 14, '2024-06-27 16:00:00', 'Pendiente'),
(149, 149, 17, '2024-06-27 17:00:00', 'Pendiente'),
(150, 150, 20, '2024-06-27 18:00:00', 'Pendiente'),
(151, 151, 23, '2024-06-27 19:00:00', 'Pendiente'),
(152, 152, 26, '2024-06-27 20:00:00', 'Pendiente'),
(153, 153, 29, '2024-06-27 21:00:00', 'Pendiente'),
(154, 154, 32, '2024-06-27 22:00:00', 'Pendiente'),
(155, 155, 35, '2024-06-27 23:00:00', 'Pendiente'),
(156, 156, 38, '2024-06-28 09:00:00', 'Pendiente'),
(157, 157, 41, '2024-06-28 10:00:00', 'Pendiente'),
(158, 158, 44, '2024-06-28 11:00:00', 'Pendiente'),
(159, 159, 47, '2024-06-28 12:00:00', 'Pendiente'),
(160, 160, 50, '2024-06-28 13:00:00', 'Pendiente'),
(161, 161, 53, '2024-06-28 14:00:00', 'Pendiente'),
(162, 162, 56, '2024-06-28 15:00:00', 'Pendiente'),
(163, 163, 59, '2024-06-28 16:00:00', 'Pendiente'),
(164, 164, 62, '2024-06-28 17:00:00', 'Pendiente'),
(165, 165, 65, '2024-06-28 18:00:00', 'Pendiente'),
(166, 166, 68, '2024-06-28 19:00:00', 'Pendiente'),
(167, 167, 71, '2024-06-28 20:00:00', 'Pendiente'),
(168, 168, 74, '2024-06-28 21:00:00', 'Pendiente'),
(169, 169, 77, '2024-06-28 22:00:00', 'Pendiente'),
(170, 170, 80, '2024-06-28 23:00:00', 'Pendiente'),
(171, 171, 83, '2024-06-29 09:00:00', 'Pendiente'),
(172, 172, 86, '2024-06-29 10:00:00', 'Pendiente'),
(173, 173, 89, '2024-06-29 11:00:00', 'Pendiente'),
(174, 174, 92, '2024-06-29 12:00:00', 'Pendiente'),
(175, 175, 95, '2024-06-29 13:00:00', 'Pendiente'),
(176, 176, 98, '2024-06-29 14:00:00', 'Pendiente'),
(177, 177, 101, '2024-06-29 15:00:00', 'Pendiente'),
(178, 178, 104, '2024-06-29 16:00:00', 'Pendiente'),
(179, 179, 107, '2024-06-29 17:00:00', 'Pendiente'),
(180, 180, 110, '2024-06-29 18:00:00', 'Pendiente'),
(181, 181, 113, '2024-06-29 19:00:00', 'Pendiente'),
(182, 182, 116, '2024-06-29 20:00:00', 'Pendiente'),
(183, 183, 119, '2024-06-29 21:00:00', 'Pendiente'),
(184, 184, 122, '2024-06-29 22:00:00', 'Pendiente'),
(185, 185, 125, '2024-06-29 23:00:00', 'Pendiente'),
(186, 186, 128, '2024-06-30 09:00:00', 'Pendiente'),
(187, 187, 131, '2024-06-30 10:00:00', 'Pendiente'),
(188, 188, 134, '2024-06-30 11:00:00', 'Pendiente'),
(189, 189, 137, '2024-06-30 12:00:00', 'Pendiente'),
(190, 190, 140, '2024-06-30 13:00:00', 'Pendiente'),
(191, 191, 143, '2024-06-30 14:00:00', 'Pendiente'),
(192, 192, 1, '2024-06-30 15:00:00', 'Pendiente'),
(193, 193, 3, '2024-06-30 16:00:00', 'Pendiente'),
(194, 194, 6, '2024-06-30 17:00:00', 'Pendiente'),
(195, 195, 9, '2024-06-30 18:00:00', 'Pendiente'),
(196, 196, 12, '2024-06-30 19:00:00', 'Pendiente'),
(197, 197, 15, '2024-06-30 20:00:00', 'Pendiente'),
(198, 198, 18, '2024-06-30 21:00:00', 'Pendiente'),
(199, 199, 21, '2024-06-30 22:00:00', 'Pendiente'),
(200, 200, 24, '2024-06-30 23:00:00', 'Pendiente'),
(202, 202, 1, '2024-06-18 08:54:38', 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `idResultado` int(11) NOT NULL,
  `url` text NOT NULL,
  `idCita` int(11) NOT NULL,
  `nombreArchivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `servicio_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`servicio_id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'COMBO - RUTINA 1', 'Incluye: Glucosa, Colesterol, Triglicéridos, Ácido úrico, Hemograma más plaquetas, Examen General de Heces, Examen General de Orina', 26.00),
(2, 'COMBO - RUTINA 2', 'Incluye: Glucosa, Colesterol, Triglicéridos, Ácido úrico, Creatinina, Nitrógeno ureico, Hemograma más plaquetas, Examen General de Heces, Examen General de Orina', 34.00),
(3, 'COMBO - BÁSICO', 'Incluye: Hemograma más plaquetas, Examen General de Heces, Examen General de Orina', 10.00),
(4, 'COMBO - EJECUTIVO', 'Incluye: Glucosa, Colesterol total, Colesterol HDL-LDL, Ácido úrico, Creatinina, Nitrógeno ureico, Hemograma más plaquetas, Transaminasas TGPTGO, Bilirrubinas (Total, directa e indirecta), CEA (mujeres), PSA (hombres)', 108.00),
(5, 'COMBO - TIROIDEO TOTAL', 'Incluye: T3, T4, TSH', 25.00),
(6, 'COMBO - TIROIDEO LIBRE', 'Incluye: T3, T4, TSH', 35.00),
(7, 'COMBO - RENAL', 'Incluye: Ácido úrico, Hemograma más plaquetas, Nitrógeno ureico, Creatinina, Examen General de Orina', 21.00),
(8, 'COMBO - RENAL BÁSICO', 'Incluye: Creatinina, Nitrógeno ureico, Examen General de Orina', 10.00),
(9, 'COMBO - LIPÍDICO', 'Incluye: Colesterol total, Colesterol HDL-LDL, Triglicéridos', 22.00),
(10, 'PANCREÁTICO', 'Incluye: Hemograma más plaquetas, Glucosa, Amilasa, Lipasa, Transaminasas TGOTGP', 42.00),
(11, 'HEPÁTICO', 'Incluye: Transaminasas TGO y TGP, Bilirrubinas (Total, directa e indirecta), Proteínas totales y relación A-G, Gamma GGT', 35.00),
(12, 'CARDÍACO', 'Incluye: CPK total, CPK MB, LDH, Glucosa, Colesterol, Triglicéridos', 25.00),
(13, 'CORONARIO 1', 'Incluye: Glucosa, Colesterol, Triglicéridos, Ácido úrico', 14.00),
(14, 'CORONARIO 2', 'Incluye: Glucosa, Colesterol, Triglicéridos, Ácido úrico, Creatinina', 18.00),
(15, 'CORONARIO 3', 'Incluye: Glucosa, Colesterol total, Colesterol HDL-LDL, Triglicéridos, Ácido úrico, Creatinina, Nitrógeno ureico', 38.00),
(16, 'DIABÉTICO 1', 'Incluye: Glucosa, Hemoglobina glicosilada, Examen General de Orina', 18.00),
(17, 'DIABÉTICO 2', 'Incluye: Glucosa, Creatinina, Nitrógeno ureico, Hemoglobina glicosilada, Examen General de Orina', 26.00),
(18, 'TRABAJO 1', 'Incluye: Examen General de Heces, Examen General de Orina, VDRL', 8.00),
(19, 'TRABAJO 2', 'Incluye: Examen General de Heces, Examen General de Orina, Hemograma más plaquetas', 10.00),
(20, 'TRABAJO 3', 'Incluye: Examen General de Heces, Examen General de Orina, VDRL, BK', 15.00),
(21, 'TRABAJO 4', 'Incluye: Hemograma más plaquetas, Examen General de Heces, Examen General de Orina, VDRL', 17.00),
(22, 'TRABAJO 5', 'Incluye: Examen General de Heces, Examen General de Orina, VDRL, BK, Tipeo sanguíneo', 20.00),
(23, 'PRE - OPERATORIO 1', 'Incluye: Glucosa, Hemograma más plaquetas, Tiempo de sangramiento, Tiempo de coagulación', 20.00),
(24, 'PRE - OPERATORIO 2', 'Incluye: Glucosa, Hemograma más plaquetas, Tiempo de sangramiento, Tiempo de coagulación, VIH-VDRL', 48.00),
(25, 'PRENATAL', 'Incluye: Glucosa, Hemograma más plaquetas, Examen General de Orina, Examen General de Heces, Tipeo sanguíneo, VIH-VDRL', 36.00),
(26, 'DENTAL 1', 'Incluye: Hemograma más plaquetas, Tiempo de sangramiento, Tiempo de coagulación, Glucosa', 20.00),
(27, 'DENTAL 2', 'Incluye: Hemograma más plaquetas, TS-TC, TTP-TP, Glucosa', 36.00),
(28, 'ELECTROLÍTICO 1', 'Incluye: Sodio, Potasio', 10.00),
(29, 'ELECTROLÍTICO 2', 'Incluye: Sodio, Potasio, Cloro', 16.00),
(30, 'ELECTROLÍTICO 3', 'Incluye: Sodio, Potasio, Cloro, Magnesio, Calcio', 28.00),
(31, 'REUMATOIDEO', 'Incluye: Hemograma más plaquetas, Eritrosedimentación, Látex FR', 29.00),
(32, 'Glucosa', '', 4.00),
(33, 'Glucosa postprandial', '', 6.00),
(34, 'Test Sullivan', '', 15.00),
(35, 'Colesterol Total', '', 4.00),
(36, 'Colesterol Alta Densidad (HDL)', '', 8.00),
(37, 'Colesterol Baja Densidad (LDL)', '', 8.00),
(38, 'Hierro', '', 6.00),
(39, 'Lipasa', '', 12.00),
(40, 'Proteinas Totales con Relacion A/G', '', 8.00),
(41, 'Albumina', '', 5.00),
(42, 'Amilasa', '', 10.00),
(43, 'Deshidrogenasa Láctica (LDH)', '', 5.50),
(44, 'Fosfatasa Alcalina', '', 15.00),
(45, 'Transaminasa \"0\" (SGOT)', '', 6.00),
(46, 'Transaminasa \"P\" (SGPT)', '', 6.00),
(47, 'Gamma Glutamil Transferasa (GGT)', '', 10.00),
(48, 'Hemoglobina Glicosilada (HBAIC)', '', 13.00),
(49, 'Depuración de Creatinina en Orina 24 horas', '', 16.00),
(50, 'Colinesterasa', '', 13.00),
(51, 'Examen General de Orina', '', 2.50),
(52, 'Prueba de Embarazo en Orina', '', 5.00),
(53, 'Proteínas en Orina al Azar', '', 8.00),
(54, 'Prueba Embarazo Cuantitativo (BETA HCG)', '', 20.00),
(55, 'Tiroglobulina (Cáncer de Tiroides)', '', 55.00),
(56, 'PSA (Prueba rápida con Cassette)', '', 12.00),
(57, 'Testosterona', '', 20.00),
(58, 'T3 LIBRE', '', 11.00),
(59, 'T4 LIBRE', '', 11.00),
(60, 'TSH ULTRASENSIBLE', '', 12.00),
(61, 'T3 Total', '', 8.00),
(62, 'T4 Total', '', 15.00),
(63, 'TSH Total', '', 12.00),
(64, 'Tiempo de Sangramiento', '', 5.00),
(65, 'Tiempo de Coagulación', '', 5.00),
(66, 'Tiempo y Valor de Protrombina', '', 7.00),
(67, 'Tiempo de Tromboplastina Parcial', '', 10.00),
(68, 'Tiempo de Trombina', '', 16.00),
(69, 'Fibrinógeno', '', 14.00),
(70, 'Anticoagulante Lupido (Cuantitativo)', '', 55.00),
(71, 'Anticuerpos Antinucleares (ANA LATEX)', '', 25.00),
(72, 'Dimero D', '', 66.00),
(73, 'Tipeo Sanguíneo', NULL, 5.00),
(74, 'Prueba de Embarazo en Sangre', NULL, 8.00),
(75, 'Antiestreptolisina \"0\" Asto', NULL, 12.00),
(76, 'Coombs Directo', NULL, 10.00),
(77, 'Coombs Indirecto', NULL, 10.00),
(78, 'Proteínas \"C\" Reactiva (PCR)', NULL, 12.00),
(79, 'VDRL -RPR', NULL, 5.00),
(80, 'HIV (SIDA)', NULL, 12.00),
(81, 'HIV (ELIZA)', NULL, 24.00),
(82, 'Helicobacter Pylori en Sangre', NULL, 15.00),
(83, 'Helicobacter Pylori en Heces', NULL, 15.00),
(84, 'Prolactina', NULL, 15.00),
(85, 'Toxoplasma IgG, IgM', NULL, 24.00),
(86, 'Anticuerpos para Chagas', NULL, 25.00),
(87, 'Examen General de Heces', NULL, 2.50),
(88, 'Sangre Oculta en Heces', NULL, 8.00),
(89, 'Prueba de Azul de Metileno (PAM)', NULL, 7.00),
(90, 'Concentrado Heces', NULL, 10.00),
(91, 'PH Heces', NULL, 10.00),
(92, 'Sustancia reductoras en Heces', NULL, 20.00),
(93, 'Concentrado de Strout', NULL, 16.00),
(94, 'Hemograma', NULL, 7.00),
(95, 'HT - HB', NULL, 4.00),
(96, 'Leucograma', NULL, 8.00),
(97, 'Células L.E.', NULL, 10.00),
(98, 'Conteo de Plaquetas', NULL, 6.00),
(99, 'Eritrosedimentacion', NULL, 8.00),
(100, 'Gota Gruesa', NULL, 10.00),
(101, 'Frotis de Sangre Periférica', NULL, 13.00),
(102, 'Insulina Preprandrial', NULL, 22.00),
(103, 'Insulina Postprandrial', NULL, 22.00),
(104, 'Anticardiolipina', NULL, 44.00),
(105, 'Anticoagulante Lupido', NULL, 30.00),
(106, 'Proteínas \"C\" Reactiva Cardiaca', NULL, 21.00),
(107, 'Estradiol', NULL, 44.00),
(108, 'Progesterona', NULL, 44.00),
(109, 'CA-125 Ovario', NULL, 36.00),
(110, 'CA-15 (Cáncer de mama)', NULL, 36.00),
(111, 'CA-19-9 (páncreas, gastrointestinal)', NULL, 36.00),
(112, 'Antígeno Carcino Embrionario (CEA)', NULL, 30.00),
(113, 'Alfafetoproteinas (AFP-Cáncer de Higado)', NULL, 30.00),
(114, 'Cardiolipinas IgG Antifosfolípidos', NULL, 44.00),
(115, 'Cardiolipinas IgM Antifosfolípidos', NULL, 44.00),
(116, 'Vitamina D', NULL, 64.00),
(117, 'CA -15-3 (Mama)', NULL, 36.00),
(118, 'CA-15-9 (Colon, Páncreas, Vias Biliares, Gástrico)', NULL, 36.00),
(119, 'PSA Total', NULL, 25.00),
(120, 'PSA LIBRE', NULL, 45.00),
(121, 'Anticuerpo para Hepatitis \"B\"', NULL, 40.00),
(122, 'Anticuerpo para Hepatitis \"C\"', NULL, 40.00),
(123, 'Anticuerpos para Dengue IgM, IgG', NULL, 24.00),
(124, 'Factor Reumatoideo RF - LATEX', NULL, 12.00),
(125, 'Antigenos febriles', NULL, 22.00),
(126, 'Inmunoglobulina \"E\" Total', NULL, 28.00),
(127, 'Recuento de Eosinofilos en Secreción Nasal', NULL, 7.00),
(128, 'Prueba de alergia al Latex (Inm. E total)', NULL, 28.00),
(129, 'BACTERIOLOGIA', NULL, 12.00),
(130, 'Urocultivo', NULL, 12.00),
(131, 'Coprocultivo', NULL, 20.00),
(132, 'Hemocultivo', NULL, 13.00),
(133, 'Cultivo de Secreciones Varias', NULL, 25.00),
(134, 'Espermograma', NULL, 7.00),
(135, 'Baciloscopias', NULL, 30.00),
(136, 'DROGAS DE ABUSO', NULL, 30.00),
(137, 'Fenobarbital', NULL, 15.00),
(138, 'Acido Valproico', NULL, 15.00),
(139, 'Cocaína', NULL, 28.00),
(140, 'Marihuana/Cannabis', NULL, 10.00),
(141, 'ENZIMAS CARDIACAS', NULL, 10.00),
(142, 'Troponina 1', NULL, 10.00),
(143, 'CPK - MB', NULL, 10.00),
(144, 'CPK-NAC TOTAL', NULL, 10.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Direccion` text DEFAULT NULL,
  `Telefono` varchar(11) DEFAULT NULL,
  `dui` text NOT NULL,
  `CondicionesMedicas` varchar(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `FechaNacimiento`, `Direccion`, `Telefono`, `dui`, `CondicionesMedicas`, `password`, `rol_id`) VALUES
(1, 'admin', 'admin@admin.com', NULL, NULL, NULL, '', NULL, '$2y$10$gxsP1b0lkwF0q4N4y5BhIOjRrJL3tGYvZOHc1F1M4TQJz8dVSNj9O', 1),
(2, 'María García', 'mgarcia@example.com', '1990-05-15', 'Calle Principal #123', '2345-6789', '12345678-9', 'S', 'password123', 3),
(3, 'José Martínez', 'jmartinez@example.com', '1985-08-22', 'Avenida Central #456', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(4, 'Ana Rodríguez', 'arodriguez@example.com', '1982-12-10', 'Apartamento 2B, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(5, 'Carlos Sánchez', 'csanchez@example.com', '1995-04-03', 'Calle Secundaria #789', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(6, 'Laura López', 'llopez@example.com', '1988-11-28', 'Condominio Playa Azul', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(7, 'Daniel Pérez', 'dperez@example.com', '1993-07-17', 'Colonia Nueva #246', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(8, 'Sofía Gómez', 'sgomez@example.com', '1980-09-05', 'Casa 10, Calle Nueva', '8901-2345', '78901234-5', 'S', 'password456', 3),
(9, 'Javier Hernández', 'jhernandez@example.com', '1991-02-14', 'Apartado Postal 1234', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(10, 'Elena Díaz', 'ediaz@example.com', '1987-06-30', 'Apartamento 5A, Edificio Principal', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(11, 'Carlos Torres', 'ctorres@example.com', '1994-03-21', 'Calle del Bosque #789', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(12, 'María Rodríguez', 'mrodriguez@example.com', '1983-08-15', 'Calle Principal #234', '2345-6789', '12345678-9', 'N', 'password123', 3),
(13, 'Pedro Gutiérrez', 'pgutierrez@example.com', '1992-05-17', 'Avenida Norte #567', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(14, 'Laura Martínez', 'lmartinez@example.com', '1981-12-20', 'Casa 3, Calle Nueva', '4567-8901', '34567890-1', 'S', 'qwerty321', 3),
(15, 'Juan Torres', 'jtorres@example.com', '1996-04-13', 'Apartamento 3B, Edificio Moderno', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(16, 'Ana Sánchez', 'asanchez@example.com', '1989-11-30', 'Condominio Playa Linda', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(17, 'Roberto García', 'rgarcia@example.com', '1990-07-19', 'Calle Principal #678', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(18, 'María Pérez', 'mperez@example.com', '1980-10-25', 'Apartamento 8A, Edificio Azul', '8901-2345', '78901234-5', 'N', 'password456', 3),
(19, 'José Gómez', 'jgomez@example.com', '1991-03-14', 'Calle del Río #123', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(20, 'Sofía Hernández', 'shernandez@example.com', '1988-09-02', 'Apartado Postal 5678', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(21, 'Jorge López', 'jlopez@example.com', '1992-01-12', 'Calle Central #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(22, 'María Flores', 'mflores@example.com', '1987-04-25', 'Casa 5, Avenida Nueva', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(23, 'Carlos Ramírez', 'cramirez@example.com', '1984-11-18', 'Apartamento 10B, Edificio Azul', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(24, 'Laura Díaz', 'ldiaz@example.com', '1995-06-03', 'Condominio Playa Blanca', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(25, 'Juan García', 'jgarcia@example.com', '1989-09-20', 'Calle de la Montaña #123', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(26, 'Ana Martínez', 'amartinez@example.com', '1993-02-14', 'Apartamento 4C, Edificio Moderno', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(27, 'Pedro Rodríguez', 'prodriguez@example.com', '1981-07-07', 'Calle Principal #456', '8901-2345', '78901234-5', 'N', 'password456', 3),
(28, 'Sofía Pérez', 'sperez@example.com', '1990-03-30', 'Casa 7, Calle Nueva', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(29, 'Luisa Gómez', 'lgomez@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(30, 'Roberto Torres', 'rtorres@example.com', '1994-05-21', 'Condominio Las Palmas', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(31, 'Javier García', 'jgarcia2@example.com', '1991-10-15', 'Avenida Central #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(32, 'María Pérez', 'mperez2@example.com', '1980-12-22', 'Calle Principal #567', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(33, 'José Sánchez', 'jsanchez2@example.com', '1982-09-05', 'Apartamento 3A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(34, 'Laura Rodríguez', 'lrodriguez2@example.com', '1996-07-18', 'Colonia Nueva #123', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(35, 'Carlos Martínez', 'cmartinez2@example.com', '1987-11-28', 'Casa 12, Calle Secundaria', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(36, 'Ana Gutiérrez', 'agutierrez2@example.com', '1993-04-17', 'Apartamento 6B, Edificio Moderno', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(37, 'Pedro López', 'plopez2@example.com', '1980-08-05', 'Calle Principal #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(38, 'Sofía González', 'sgonzalez2@example.com', '1991-02-14', 'Condominio Vista Hermosa', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(39, 'Jorge Hernández', 'jhernandez2@example.com', '1988-06-30', 'Calle del Sol #456', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(40, 'María Flores', 'mflores2@example.com', '1994-03-21', 'Apartamento 2A, Edificio Principal', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(41, 'Luis Martínez', 'lmartinez2@example.com', '1992-11-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(42, 'Elena Ramírez', 'eramirez2@example.com', '1987-04-25', 'Apartamento 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(43, 'Andrés Díaz', 'adiaz2@example.com', '1984-11-18', 'Condominio Las Acacias', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(44, 'Carmen Gómez', 'cgomez2@example.com', '1995-06-03', 'Calle del Bosque #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(45, 'Francisco Rodríguez', 'frodriguez2@example.com', '1989-09-20', 'Apartamento 7A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(46, 'Lucía Pérez', 'lperez2@example.com', '1993-02-14', 'Casa 15, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(47, 'Diego Torres', 'dtorres2@example.com', '1981-07-07', 'Avenida Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(48, 'Paula Sánchez', 'psanchez2@example.com', '1990-03-30', 'Condominio Playa Dorada', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(49, 'Martín Ramírez', 'mramirez2@example.com', '1988-08-12', 'Calle del Sol #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(50, 'Silvia García', 'sgarcia2@example.com', '1994-05-21', 'Apartamento 3C, Edificio Nuevo', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(51, 'Raúl López', 'rlopez2@example.com', '1991-10-15', 'Colonia Nueva #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(52, 'Marina Martínez', 'mmartinez2@example.com', '1980-12-22', 'Calle Central #567', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(53, 'Manuel Sánchez', 'msanchez2@example.com', '1982-09-05', 'Condominio Playa Serena', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(54, 'Catalina Rodríguez', 'crodriguez2@example.com', '1996-07-18', 'Casa 20, Avenida Nueva', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(55, 'Joaquín Martínez', 'jmartinez3@example.com', '1987-11-28', 'Apartamento 8B, Edificio Moderno', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(56, 'Camila Gutiérrez', 'cgutierrez2@example.com', '1993-04-17', 'Calle del Río #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(57, 'Gonzalo López', 'glopez2@example.com', '1980-08-05', 'Condominio Vista Bella', '8901-2345', '78901234-5', 'S', 'password456', 3),
(58, 'Valentina González', 'vgonzalez2@example.com', '1991-02-14', 'Calle Principal #678', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(59, 'Mateo Hernández', 'mhernandez2@example.com', '1988-06-30', 'Apartado Postal 5678', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(60, 'Isabella Flores', 'iflores2@example.com', '1994-03-21', 'Calle del Mar #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(61, 'Emilio Martín', 'emartin2@example.com', '1992-01-12', 'Avenida Central #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(62, 'Rosa Ramírez', 'rramirez2@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(63, 'Matías Díaz', 'mdiaz2@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(64, 'Clara Gómez', 'cgomez3@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(65, 'Leonardo Rodríguez', 'lrodriguez3@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(66, 'Gabriela Pérez', 'gperez2@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(67, 'Fernando Torres', 'ftorres2@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(68, 'Valeria Sánchez', 'vsanchez2@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(69, 'Maximiliano Ramírez', 'mramirez3@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(70, 'Antonella García', 'agarcia2@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(71, 'Diego López', 'dlopez2@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(72, 'Marina Martínez', 'mmartinez3@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(73, 'Martín Sánchez', 'msanchez3@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(74, 'Camila Rodríguez', 'crodriguez3@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(75, 'Joaquín Martínez', 'jmartinez4@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(76, 'Camila Gutiérrez', 'cgutierrez3@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(77, 'Gonzalo López', 'glopez3@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(78, 'Valentina González', 'vgonzalez3@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(79, 'Mateo Hernández', 'mhernandez3@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(80, 'Isabella Flores', 'iflores3@example.com', '1994-03-21', 'Calle del Sol #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(81, 'Emilia Martín', 'emartin3@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(82, 'Rodrigo Ramírez', 'rramirez3@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(83, 'Valeria Díaz', 'vdiaz2@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(84, 'Martín Gómez', 'mgomez2@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(85, 'Luciana Rodríguez', 'lrodriguez4@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(86, 'Gabriel Pérez', 'gperez3@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(87, 'Florencia Torres', 'ftorres3@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(88, 'Santiago Sánchez', 'ssanchez2@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(89, 'Mariano Ramírez', 'mramirez4@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(90, 'Isabel García', 'igarcia2@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(91, 'Diego López', 'dlopez3@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(92, 'María Martínez', 'mmartinez4@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(93, 'Juan Sánchez', 'jsanchez3@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(94, 'Laura Rodríguez', 'lrodriguez5@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(95, 'Joaquín Martínez', 'jmartinez5@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(96, 'Camila Gutiérrez', 'cgutierrez4@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(97, 'Gonzalo López', 'glopez4@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(98, 'Valentina González', 'vgonzalez4@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(99, 'Mateo Hernández', 'mhernandez4@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(100, 'Isabella Flores', 'iflores4@example.com', '1994-03-21', 'Calle del Sol #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(101, 'Emilio Martín', 'emartin4@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(102, 'Rosa Ramírez', 'rramirez4@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(103, 'Martín Díaz', 'mdiaz3@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(104, 'Clara Gómez', 'cgomez4@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(105, 'Leonardo Rodríguez', 'lrodriguez6@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(106, 'Gabriela Pérez', 'gperez4@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(107, 'Fernando Torres', 'ftorres4@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(108, 'Valeria Sánchez', 'vsanchez3@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(109, 'Mariano Ramírez', 'mramirez5@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(110, 'Antonella García', 'agarcia3@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(111, 'Diego López', 'dlopez4@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(112, 'Marina Martínez', 'mmartinez5@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(113, 'Martín Sánchez', 'msanchez4@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(114, 'Camila Rodríguez', 'crodriguez4@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(115, 'Joaquín Martínez', 'jmartinez6@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(116, 'Camila Gutiérrez', 'cgutierrez5@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(117, 'Gonzalo López', 'glopez5@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(118, 'Valentina González', 'vgonzalez5@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(119, 'Mateo Hernández', 'mhernandez5@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(120, 'Isabella Flores', 'iflores5@example.com', '1994-03-21', 'Calle del Sol #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(121, 'Emilio Martín', 'emartin5@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(122, 'Rosa Ramírez', 'rramirez5@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(123, 'Martín Díaz', 'mdiaz4@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(124, 'Clara Gómez', 'cgomez5@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(125, 'Leonardo Rodríguez', 'lrodriguez7@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(126, 'Gabriela Pérez', 'gperez5@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(127, 'Fernando Torres', 'ftorres5@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(128, 'Valeria Sánchez', 'vsanchez4@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(129, 'Mariano Ramírez', 'mramirez6@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(130, 'Antonella García', 'agarcia4@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(131, 'Diego López', 'dlopez5@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(132, 'Marina Martínez', 'mmartinez6@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(133, 'Martín Sánchez', 'msanchez5@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(134, 'Camila Rodríguez', 'crodriguez5@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(135, 'Joaquín Martínez', 'jmartinez7@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(136, 'Camila Gutiérrez', 'cgutierrez6@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(137, 'Gonzalo López', 'glopez6@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(138, 'Valentina González', 'vgonzalez6@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(139, 'Mateo Hernández', 'mhernandez6@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(140, 'Isabella Flores', 'iflores6@example.com', '1994-03-21', 'Calle del Sol #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(141, 'Emilio Martín', 'emartin6@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(142, 'Rosa Ramírez', 'rramirez6@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(143, 'Martín Díaz', 'mdiaz5@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(144, 'Clara Gómez', 'cgomez6@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(145, 'Leonardo Rodríguez', 'lrodriguez8@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(146, 'Gabriela Pérez', 'gperez6@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(147, 'Fernando Torres', 'ftorres6@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(148, 'Valeria Sánchez', 'vsanchez5@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(149, 'Mariano Ramírez', 'mramirez7@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(150, 'Antonella García', 'agarcia5@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(151, 'Diego López', 'dlopez6@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(152, 'Marina Martínez', 'mmartinez7@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(153, 'Martín Sánchez', 'msanchez6@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(154, 'Camila Rodríguez', 'crodriguez6@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(155, 'Joaquín Martínez', 'jmartinez8@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(156, 'Camila Gutiérrez', 'cgutierrez7@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(157, 'Gonzalo López', 'glopez7@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(158, 'Valentina González', 'vgonzalez7@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(159, 'Mateo Hernández', 'mhernandez7@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(160, 'Isabella Flores', 'iflores7@example.com', '1994-03-21', 'Calle del Sol #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(161, 'Emilio Martín', 'emartin7@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(162, 'Rosa Ramírez', 'rramirez7@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(163, 'Martín Díaz', 'mdiaz6@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(164, 'Clara Gómez', 'cgomez7@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(165, 'Leonardo Rodríguez', 'lrodriguez9@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(166, 'Gabriela Pérez', 'gperez7@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(167, 'Fernando Torres', 'ftorres7@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(168, 'Valeria Sánchez', 'vsanchez6@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(169, 'Mariano Ramírez', 'mramirez8@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(170, 'Antonella García', 'agarcia6@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(171, 'Diego López', 'dlopez7@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(172, 'Marina Martínez', 'mmartinez8@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(173, 'Martín Sánchez', 'msanchez7@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(174, 'Camila Rodríguez', 'crodriguez7@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(175, 'Joaquín Martínez', 'jmartinez9@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(176, 'Camila Gutiérrez', 'cgutierrez8@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(177, 'Gonzalo López', 'glopez8@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(178, 'Valentina González', 'vgonzalez8@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(179, 'Mateo Hernández', 'mhernandez8@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(180, 'Isabella Flores', 'iflores8@example.com', '1994-03-21', 'Calle del Sol #123', '1234-5678', '01234567-8', 'S', 'abcd7890', 3),
(181, 'Emilio Martín', 'emartin8@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(182, 'Rosa Ramírez', 'rramirez8@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(183, 'Martín Díaz', 'mdiaz7@example.com', '1984-11-18', 'Condominio El Paraíso', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(184, 'Clara Gómez', 'cgomez8@example.com', '1995-06-03', 'Calle del Sol #456', '5678-9012', '45678901-2', 'N', 'pass123word', 3),
(185, 'Leonardo Rodríguez', 'lrodriguez10@example.com', '1989-09-20', 'Apartamento 9A, Edificio Moderno', '6789-0123', '56789012-3', 'S', 'abcde456', 3),
(186, 'Gabriela Pérez', 'gperez8@example.com', '1993-02-14', 'Casa 25, Calle Nueva', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(187, 'Fernando Torres', 'ftorres8@example.com', '1981-07-07', 'Calle Principal #789', '8901-2345', '78901234-5', 'N', 'password456', 3),
(188, 'Valeria Sánchez', 'vsanchez7@example.com', '1990-03-30', 'Condominio Playa Azul', '9012-3456', '89012345-6', 'S', '123456abc', 3),
(189, 'Mariano Ramírez', 'mramirez9@example.com', '1988-08-12', 'Calle del Bosque #789', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(190, 'Antonella García', 'agarcia7@example.com', '1994-05-21', 'Avenida Norte #789', '1234-5678', '01234567-8', 'N', 'abcd7890', 3),
(191, 'Diego López', 'dlopez8@example.com', '1991-10-15', 'Calle del Río #789', '2345-6789', '12345678-9', 'S', 'password123', 3),
(192, 'Marina Martínez', 'mmartinez9@example.com', '1980-12-22', 'Condominio Los Pinos', '3456-7890', '23456789-0', 'N', 'secret123', 3),
(193, 'Martín Sánchez', 'msanchez8@example.com', '1982-09-05', 'Apartamento 4A, Edificio Nuevo', '4567-8901', '34567890-1', 'N', 'qwerty321', 3),
(194, 'Camila Rodríguez', 'crodriguez8@example.com', '1996-07-18', 'Calle Principal #678', '5678-9012', '45678901-2', 'S', 'pass123word', 3),
(195, 'Joaquín Martínez', 'jmartinez10@example.com', '1987-11-28', 'Condominio Las Brisas', '6789-0123', '56789012-3', 'N', 'abcde456', 3),
(196, 'Camila Gutiérrez', 'cgutierrez9@example.com', '1993-04-17', 'Avenida Central #456', '7890-1234', '67890123-4', 'N', 'secure789', 3),
(197, 'Gonzalo López', 'glopez9@example.com', '1980-08-05', 'Calle del Mar #789', '8901-2345', '78901234-5', 'S', 'password456', 3),
(198, 'Valentina González', 'vgonzalez9@example.com', '1991-02-14', 'Apartamento 10C, Edificio Nuevo', '9012-3456', '89012345-6', 'N', '123456abc', 3),
(199, 'Mateo Hernández', 'mhernandez9@example.com', '1988-06-30', 'Condominio Las Palmeras', '0123-4567', '90123456-7', 'N', 'passpass123', 3),
(200, 'Emilio Martín', 'emartin9@example.com', '1992-01-12', 'Calle Principal #789', '2345-6789', '12345678-9', 'N', 'password123', 3),
(201, 'Rosa Ramírez', 'rramirez9@example.com', '1987-04-25', 'Casa 5B, Edificio Azul', '3456-7890', '23456789-0', 'S', 'secret123', 3),
(202, 'Paciente Prueba', 'paciente@paciente.com', '2006-02-07', '2da Ave Nte 2-8', '7676-7807', '12345678-9', 'N', '$2y$10$cxTckRrwfS66BHRxXv3DWuklsXmhGLKqQYcINUwDiqxqS9UWhfR32', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`cita_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `citas_servicios_FK` (`servicio_id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`idResultado`),
  ADD KEY `idCita` (`idCita`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`servicio_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `cita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `idResultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `servicio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `citas_servicios_FK` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`servicio_id`);

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`idCita`) REFERENCES `citas` (`cita_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
