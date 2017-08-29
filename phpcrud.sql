-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2017 a las 00:57:38
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpcrud`
--
CREATE DATABASE IF NOT EXISTS `phpcrud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpcrud`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `datetime`, `description`) VALUES
(1, '2017-08-29 16:50:22', 'Example description Task number 1'),
(2, '2017-08-29 16:50:26', 'Example description Task number 2'),
(3, '2017-08-29 16:50:30', 'Example description Task number 3'),
(4, '2017-08-29 16:50:35', 'Example description Task number 4 Updated'),
(7, '2017-08-29 16:42:56', 'Do homework'),
(8, '2017-08-29 16:43:20', 'Drink coffe'),
(9, '2017-08-29 16:43:25', 'Drink beer'),
(10, '2017-08-29 16:43:30', 'Use computer'),
(11, '2017-08-29 16:43:37', 'Play videogames'),
(12, '2017-08-29 16:46:22', 'Program software'),
(13, '2017-08-29 16:46:53', 'More tasks'),
(14, '2017-08-29 16:47:00', 'Pagination'),
(15, '2017-08-29 16:48:19', 'Cooking chicken'),
(16, '2017-08-29 16:48:07', 'Buy coca cola'),
(17, '2017-08-29 16:48:13', 'Buy chicken'),
(18, '2017-08-29 16:48:27', 'Go to school'),
(20, '2017-08-29 16:48:42', 'Go to office'),
(21, '2017-08-29 16:48:50', 'Go to market'),
(22, '2017-08-29 16:48:55', 'Buy fish'),
(23, '2017-08-29 16:49:12', 'Buy beer'),
(24, '2017-08-29 16:49:16', 'Drink more beer'),
(25, '2017-08-29 16:49:40', 'Go to cinema'),
(26, '2017-08-29 16:49:45', 'Watch a movie'),
(27, '2017-08-29 16:49:49', 'Buy soda'),
(28, '2017-08-29 16:49:55', 'Buy fruits'),
(29, '2017-08-29 16:50:01', 'Buy the gift'),
(30, '2017-08-29 16:50:06', 'Go to the party'),
(31, '2017-08-29 16:50:10', 'Eat cake');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
