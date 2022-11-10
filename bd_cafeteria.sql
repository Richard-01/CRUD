-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 19:33:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(25) DEFAULT NULL,
  `referencia` varchar(50) DEFAULT NULL,
  `precio` int(20) DEFAULT NULL,
  `peso` int(25) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha`) VALUES
(4, 'sDAD', 'sdfsdfsd', 3424, 12, 'mecato', 5, '2022-11-09'),
(5, 'trululu ', 'tsgg', 213, 123, 'mecato', 80, '2022-11-09'),
(11, 'bombonbum', '2521-M', 700, 2, 'mecato', 20, '2022-11-09'),
(16, 'trululu ', 'gomitas', 758, 587, 'mecato', 20, '2022-11-09'),
(17, 'bombon', '2521-M', 600, 4, 'mecato', 15, '2022-11-10'),
(18, 'bombon', '2521-M', 600, 4, 'mecato', 15, '2022-11-10'),
(19, 'paleta', '2521-M', 1200, 5, 'confites', 10, '2022-11-10'),
(20, 'bombon', '2521-M', 5000, 12, 'mecato', 15, '2022-11-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(30) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_producto`, `stock`, `fecha`) VALUES
(5, 1, 10, '2022-11-09 19:44:26'),
(6, 1, 1, '2022-11-09 19:46:02'),
(7, 3, 2, '2022-11-09 19:46:07'),
(8, 3, 3, '2022-11-09 19:46:11'),
(9, 3, 2, '2022-11-09 19:46:13'),
(10, 3, 1, '2022-11-09 19:46:16'),
(11, 4, 40, '2022-11-09 20:05:48'),
(12, 3, 1, '2022-11-09 20:42:52'),
(13, 4, 1, '2022-11-09 20:44:42'),
(14, 5, 20, '2022-11-09 21:11:12'),
(15, 4, 1, '2022-11-09 21:11:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
