-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2020 a las 23:20:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesjur`
--

CREATE TABLE `clientesjur` (
  `cedula` varchar(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientesjur`
--

INSERT INTO `clientesjur` (`cedula`, `nombres`, `celular`, `correo`) VALUES
('11111111111', '', '', ''),
('1212', '1212', '1212', '1212'),
('222222', '1111111', '111111', 'DDDDDDDDDDDDD'),
('30776464', 'estelly espinosa', '3008932453', 'sthly@hotmail.com'),
('33333333', '333333', '333333', '333333333333'),
('444', '4444444444', '44444444444', '444444444444'),
('777', '777777', '77777', '77777'),
('9288264', 'carlos jose ayola ca', '3004956562', '11111111'),
('9288265', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientesjur`
--
ALTER TABLE `clientesjur`
  ADD PRIMARY KEY (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
