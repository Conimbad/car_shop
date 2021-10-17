-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2021 a las 22:50:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `car_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `matricula` varchar(150) NOT NULL,
  `cilindrada` double NOT NULL,
  `potencia` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `motor` varchar(20) NOT NULL,
  `precio` double NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cars`
--

INSERT INTO `cars` (`id`, `marca`, `modelo`, `matricula`, `cilindrada`, `potencia`, `color`, `motor`, `precio`, `foto`) VALUES
(5, 'Opel', 'Astra', '1478CCA', 1.7, 80, 'AMAR10', 'Diesel', 3200, '1634437840_7a032380e7eb550613bb.png'),
(6, 'Peugeot', '206 HDI', '9345VPP', 1.6, 90, 'GRAN10', 'Diesel', 6500, '1634437952_325d380f662afc56b164.png'),
(7, 'Cietröen', 'Saxo', '5848EEA', 1.5, 60, 'GRAN10', 'Diesel', 4000, '1634438028_6c8b08f5568221766f02.png'),
(8, 'Renault', '19 TSE Chamade', '1111 - BAB', 1.4, 82, 'GRISMAR10', 'Gasolina', 700, '1634447149_f54e287cd164311f4467.png'),
(9, 'Renault', 'Megane Europa', '8523BPA', 1.9, 120, 'AZMAR10', 'Diesel', 10000, '1634502078_b826441e314dac377642.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
