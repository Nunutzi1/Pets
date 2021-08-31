-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-08-2021 a las 19:30:25
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

DROP TABLE IF EXISTS `pets`;
CREATE TABLE IF NOT EXISTS `pets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(1, '2021-08-31 09:46:46', '2021-08-31 10:25:19', 'Perro', 'Ejemplo'),
(4, '2021-08-31 12:03:10', '2021-08-31 12:03:10', 'Gato', 'Ejemplo'),
(5, '2021-08-31 12:08:14', '2021-08-31 12:08:14', 'Rana', 'Ejemplo'),
(6, '2021-08-31 12:08:43', '2021-08-31 12:08:43', 'Rana', 'Ejemplo'),
(7, '2021-08-31 23:21:04', '2021-08-31 23:21:04', 'Tigre', 'Ejemplo'),
(8, '2021-08-31 23:21:37', '2021-08-31 23:21:37', 'Grillo', 'Ejemplo'),
(9, '2021-08-31 23:31:19', '2021-08-31 23:31:19', 'Tigre', 'Ejemplo'),
(10, '2021-08-31 23:32:14', '2021-08-31 23:32:14', 'Tigre', 'Ejemplo'),
(11, '2021-08-31 23:34:26', '2021-08-31 23:34:26', 'dasad', 'Ejemplo'),
(12, '2021-08-31 23:35:07', '2021-08-31 23:35:07', 'Vaca', 'Ejemplo'),
(13, '2021-08-31 23:42:49', '2021-08-31 23:51:29', 'Foca2', 'Ejemplo'),
(14, '2021-08-31 23:45:54', '2021-08-31 23:50:52', 'Jirafa', 'Ejemplo'),
(20, '2021-08-31 23:55:10', '2021-08-31 23:55:10', 'Foca', 'Ejemplo'),
(17, '2021-08-31 23:50:18', '2021-08-31 23:50:18', 'Foca', 'Ejemplo'),
(18, '2021-08-31 23:51:29', '2021-08-31 23:51:29', 'Foca', 'Ejemplo'),
(19, '2021-08-31 23:54:46', '2021-08-31 23:54:46', 'Foca', 'Ejemplo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
