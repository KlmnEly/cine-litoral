-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2024 a las 04:24:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas`
--

CREATE TABLE `boletas` (
  `codigo` int(11) NOT NULL,
  `documento` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `pelicula` varchar(40) NOT NULL,
  `dia` varchar(30) NOT NULL,
  `entradas` int(5) NOT NULL,
  `valor_entrada` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `boletas`
--

INSERT INTO `boletas` (`codigo`, `documento`, `nombre`, `telefono`, `correo`, `pelicula`, `dia`, `entradas`, `valor_entrada`, `total`) VALUES
(1, 2354235, 'kelmin ely', 324245, 'jose_r@ht.com', 'Furiosa', 'viernes', 5, 9500.00, 47500.00),
(2, 12345, 'Joaco Guillen', 2147483647, 'hola@asda.com', 'Aladdin', 'martes', 10, 8500.00, 76500.00),
(3, 22233, 'Diomedes', 0, 'diomeSople@trago.com', 'Venom', 'sabado', 2, 12000.00, 24000.00),
(4, 22233, 'Diomedes', 0, 'diomeSople@trago.com', 'Venom', 'sabado', 2, 12000.00, 24000.00),
(5, 222, 'Teo', 22329, 'teo@sdga.com', 'BeetleJuice', 'lunes', 4, 7000.00, 28000.00),
(6, 8765, 'pepe', 112, 'frank@ht.com', 'RobotSalvaje', 'viernes', 1, 9500.00, 9500.00),
(7, 222, 'santoyo', 6543, 'andresSoyo@hola.com', 'Furiosa', 'viernes', 3, 9500.00, 28500.00),
(8, 222, 'asd', 33, 'jose_r@ht.com', 'BeetleJuice', 'martes', 1, 8500.00, 8500.00),
(9, 22370868, 'Juancho Rois', 555, 'romeo@qlkmmgv.com', 'Furiosa', 'domingo', 20, 12000.00, 240000.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletas`
--
ALTER TABLE `boletas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
