-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2025 a las 10:32:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `dni`, `nombre`) VALUES
(1, '12345678A', 'Juan Pérez'),
(2, '23456789B', 'María García'),
(3, '34567890C', 'Carlos López'),
(4, '45678901D', 'Ana Rodríguez'),
(5, '56789012E', 'Luis Martínez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum_asig`
--

CREATE TABLE `alum_asig` (
  `id_alumno` int(11) NOT NULL,
  `id_asig` int(11) NOT NULL,
  `nota` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `alum_asig`
--

INSERT INTO `alum_asig` (`id_alumno`, `id_asig`, `nota`) VALUES
(1, 1, 8.50),
(1, 2, 7.75),
(1, 3, 9.00),
(2, 4, 6.50),
(2, 5, 8.00),
(2, 6, 7.25),
(3, 7, 8.90),
(3, 8, 9.10),
(3, 9, 6.75),
(4, 1, 5.50),
(4, 2, 6.00),
(5, 3, 7.30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `modulo` varchar(50) DEFAULT NULL,
  `año` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id`, `nombre`, `modulo`, `año`) VALUES
(1, 'Programación', 'DAW', 1),
(2, 'Entornos de Desarrollo', 'DAW', 1),
(3, 'Bases de Datos', 'DAW', 1),
(4, 'Seguridad y Alta Disponibilidad', 'ASIR', 2),
(5, 'Administración de Sistemas Operativos', 'ASIR', 2),
(6, 'Implantación de Aplicaciones Web', 'ASIR', 2),
(7, 'Desarrollo de Interfaces', 'DAM', 2),
(8, 'Sistemas de Gestión Empresarial', 'DAM', 2),
(9, 'Multimedia y Videojuegos', 'DAM', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alum_asig`
--
ALTER TABLE `alum_asig`
  ADD PRIMARY KEY (`id_alumno`,`id_asig`),
  ADD KEY `id_asig` (`id_asig`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alum_asig`
--
ALTER TABLE `alum_asig`
  ADD CONSTRAINT `alum_asig_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alum_asig_ibfk_2` FOREIGN KEY (`id_asig`) REFERENCES `asignaturas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
