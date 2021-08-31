-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-08-2021 a las 21:56:48
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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(36, '2021-09-01 02:56:00', '2021-09-01 02:56:00', 'Tortuga', 'Las tortugas o quelonios forman un orden de reptiles.'),
(34, '2021-09-01 02:51:00', '2021-09-01 02:51:00', 'Siganus', 'Los siganos son el género Siganus, el único de la familia Siganidae.'),
(33, '2021-09-01 02:49:50', '2021-09-01 02:49:50', 'Conejo', 'Es una especie de mamífero lagomorfo de la familia Leporidae.'),
(32, '2021-09-01 02:46:34', '2021-09-01 02:46:34', 'Gato', 'Es un mamífero carnívoro de la familia Felidae.'),
(31, '2021-09-01 02:45:12', '2021-09-01 02:45:12', 'Perro', 'Es un mamífero carnívoro de la familia de los cánidos.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
