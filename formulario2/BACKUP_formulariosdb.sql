-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2016 a las 13:13:04
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulariosdb`
--
DROP DATABASE `formulariosdb`;
CREATE DATABASE IF NOT EXISTS `formulariosdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `formulariosdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `per_rut` int(9) NOT NULL COMMENT 'este es el RUT del usuario del sistema sin su digito verificador',
  `per_dv` int(2) NOT NULL,
  `per_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `per_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `per_sexo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `per_comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `per_comuna` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `per_estado` int(2) NOT NULL COMMENT '1: activo / 0: inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='registran todos los datos necesarios de las personas';

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`per_rut`, `per_dv`, `per_nombre`, `per_email`, `per_sexo`, `per_comentario`, `per_comuna`, `per_estado`) VALUES
(12345678, 9, 'MARIA', 'maria@gmail.com', 'femenino', 'este es un comentario de prueba', 'Santiago', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`per_rut`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
