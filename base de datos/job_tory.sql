-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2022 a las 23:51:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `job_tory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Software'),
(2, 'Marketing'),
(3, 'Negocios'),
(4, 'Ingeniería'),
(5, 'Química');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `titulo_trabajo` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `salario` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `contacto_usuario` varchar(255) NOT NULL,
  `contacto_email` varchar(255) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `id_categoria`, `empresa`, `titulo_trabajo`, `descripcion`, `salario`, `ubicacion`, `contacto_usuario`, `contacto_email`, `fecha`) VALUES
(2, 3, 'ABC-Company', 'Gerente para empresa de seguros', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', '$1.2k', 'Guayaquil', 'Juan Villalba', 'juanv@gmail.com', '2022-01-28'),
(4, 4, 'Alimentos S.A.S', 'Ingeniero de procesos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis au', '$890', 'Quito', 'Juan Castillo', 'juanc@gmail.com', '2022-01-29'),
(6, 5, 'Ecu Química S.A', 'Gerente de Laboratorio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '$900', 'Quito, Pichincha', 'Andrés Chávez', 'andreschavez@gmail.com', '2022-01-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
