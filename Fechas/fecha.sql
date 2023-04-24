-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2023 a las 22:48:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fecha`
--
CREATE DATABASE IF NOT EXISTS `fecha` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `fecha`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ID` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `surname` varchar(24) NOT NULL,
  `surname2` varchar(24) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `bday` int(11) NOT NULL,
  `path` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`ID`, `name`, `surname`, `surname2`, `gender`, `phone`, `email`, `pass`, `bday`, `path`) VALUES
(1, 'César Osvaldo', 'Matelat', 'Borneo', 1, '664774821', 'orions@gmx.net', '$2y$10$t2qvali4tr4YtHlABReRiOiWPfxqyF0GV8msVoSFH6W4f18bGA7C.', 1, 'alumno/1/pic/perfil.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `ID` int(11) NOT NULL,
  `day_name` varchar(12) NOT NULL,
  `day` tinyint(1) NOT NULL,
  `month_name` varchar(10) NOT NULL,
  `year` smallint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`ID`, `day_name`, `day`, `month_name`, `year`, `date`) VALUES
(1, 'Viernes', 5, 'Abril', 1968, '1968-04-05'),
(2, 'Jueves', 1, 'Enero', 1970, '1970-01-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FK bday Hace referencia a ID de la tabla fecha.` (`bday`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `date` (`date`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`bday`) REFERENCES `fecha` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
