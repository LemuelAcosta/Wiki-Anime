-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2021 a las 17:36:24
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Apellido` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Documento` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nacionalidad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Raza` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ocupacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sexo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_nac` date DEFAULT NULL,
  `Poder` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Serie` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Biografia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`Id`, `Nombre`, `Apellido`, `Documento`, `Nacionalidad`, `Raza`, `Ocupacion`, `Sexo`, `Fecha_nac`, `Poder`, `Serie`, `Estado`, `Biografia`, `Foto`) VALUES
(39, 'Naruto ', 'Uzumaki', '1111', 'Aldea de la hoja', 'Humano', 'Profesor', 'Hombre', '2002-10-02', 'Zorro de las 9 colas', 'Naruto shipudden', 'Vivo', 'Esta es la bio de Naruto...', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
