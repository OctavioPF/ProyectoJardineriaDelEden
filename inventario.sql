-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 18:30:43
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `macetas`
--

CREATE TABLE `macetas` (
  `bd_codigo` int(11) NOT NULL,
  `bd_categoria` varchar(255) NOT NULL,
  `bd_precio` int(11) NOT NULL,
  `bd_cantidad` int(11) NOT NULL,
  `bd_observaciones` varchar(255) NOT NULL,
  `bd_tamano` varchar(255) NOT NULL,
  `bd_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `macetas`
--

INSERT INTO `macetas` (`bd_codigo`, `bd_categoria`, `bd_precio`, `bd_cantidad`, `bd_observaciones`, `bd_tamano`, `bd_color`) VALUES
(1, 'Maceta 501', 2, 2, 'HOLA', 'Chica', 'Negro'),
(2, '', 0, 0, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `macetas`
--
ALTER TABLE `macetas`
  ADD PRIMARY KEY (`bd_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `macetas`
--
ALTER TABLE `macetas`
  MODIFY `bd_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
