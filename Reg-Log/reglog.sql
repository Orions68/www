-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2022 a las 10:18:49
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reglog`
--
CREATE DATABASE IF NOT EXISTS `reglog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `reglog`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'César Matelat', 'matelat@gmail.com', '$2y$10$jb10m2.wauP26w2Z0n1oKuA.g6zeC2qiVv86kn/69Wc6vKCE1vZOi'),
(2, 'Otro Usuario', '1@1.com', '$2y$10$YXQlTjYbBvZdEzt860BkROrKzB0pUhKeBPz5IwJprMoSxQXPY8xyq'),
(3, 'Tercer Usuario', '3@3.com', '$2y$10$.lBxN/JBw.iPlYO9yu1AyeYMCcooIQiavGW2qRuPI8Jt4ztVWex7O'),
(4, 'Cuarto Usuario', '4@4.com', '$2y$10$MycrRQcCdIefjgL0wn6CLuE0zMtlg9.XmdkNcuLyE0V2G1dVzdM3.'),
(5, 'Quinto Usuario', '5@5.com', '$2y$10$0ofnSEDS.yYN1Xe3jg5WyO6Uk5iSOD9plo0i1qRp0hJ7owf.iH/kK'),
(6, 'Yo Otra Vez', 'orions68@gmail.com', '$2y$10$UsE3E9T9hPY6RX7GQQSOtuGGl/66tYf5Dn4kQ7PmwU1E9xgnc2Px6'),
(7, 'El Último', '6@6.com', '$2y$20$uTBxUBXv5v2nXqSrbAfNTOp5E9EYxLrg/XrTTR5lSgEPm3qCZ8tIK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
