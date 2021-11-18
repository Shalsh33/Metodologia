-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 21:32:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_reci_coop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `nombre` varchar(65) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `es_aceptado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre`, `descripcion`, `es_aceptado`) VALUES
(1, 'latas de aluminio', 'Los envases de lata de los alimentos y bebidas (deben estar limpias y aplastadas)', 1),
(2, 'Papel', 'Se puede reciclar el papel de los cuadernos, el periódico, los documentos de oficina. Estos deben estar sin residuos o cuerpo', 1),
(3, 'Papel', 'Se puede reciclar el papel de los cuadernos, el periódico, los documentos de oficina. Estos deben estar sin residuos o cuerpo', 1),
(4, 'Cartón', ' cajas y empaques de cartón (entregarlas desarmadas)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_materiales`
--

CREATE TABLE `registro_materiales` (
  `id` int(11) NOT NULL,
  `cartonero` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `peso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_materiales`
--

INSERT INTO `registro_materiales` (`id`, `cartonero`, `tipo`, `peso`) VALUES
(1, 1, 1, 12),
(2, 1, 1, 0),
(3, 3, 1, 22),
(4, 3, 3, 130);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiros_cartonero`
--

CREATE TABLE `retiros_cartonero` (
  `id_retiro_cartonero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(20) NOT NULL,
  `franja_horaria` varchar(20) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `retiros_cartonero`
--

INSERT INTO `retiros_cartonero` (`id_retiro_cartonero`, `nombre`, `apellido`, `direccion`, `telefono`, `franja_horaria`, `categoria`, `fecha_creacion`) VALUES
(5, 'Juan', '123', '123', 123, 'M', 'A', '0000-00-00'),
(6, '123123', '123123', '123123', 123123, 'M', 'A', '0000-00-00'),
(7, '123', 'q', 'wqweqw', 2147483647, 'M', 'A', '0000-00-00'),
(8, 'Tomas', '1', '123123', 2147483647, 'M', 'A', '0000-00-00'),
(9, 'PEPE', 'CARRERA', 'Cangallo554', 2147483647, 'M', 'A', '2021-11-17'),
(10, 'Golf', 'ALBION', '123', 2147483647, 'M', 'A', '2021-11-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `registro_materiales`
--
ALTER TABLE `registro_materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `retiros_cartonero`
--
ALTER TABLE `retiros_cartonero`
  ADD PRIMARY KEY (`id_retiro_cartonero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registro_materiales`
--
ALTER TABLE `registro_materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `retiros_cartonero`
--
ALTER TABLE `retiros_cartonero`
  MODIFY `id_retiro_cartonero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
