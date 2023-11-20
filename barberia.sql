-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 14:02:38
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
-- Base de datos: `barberia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `codigo` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_empleado` int(11) NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tipo_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`codigo`, `cod_cliente`, `cod_empleado`, `descripcion`, `fecha`, `hora`, `tipo_servicio`) VALUES
(1, 1, 1, 'perro esta es una prueba', '2023-11-17', '12:00:00', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasenia` varchar(150) NOT NULL,
  `telefono` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo`, `nombre`, `apellido`, `email`, `contrasenia`, `telefono`) VALUES
(1, 'andres', 'valencia', 'andres@andres.com', 'contraseña', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desglose`
--

CREATE TABLE `desglose` (
  `codigo` int(11) NOT NULL,
  `codigo_servicio` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `ocupado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desglose`
--

INSERT INTO `desglose` (`codigo`, `codigo_servicio`, `periodo`, `ocupado`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 2, 1, 1),
(4, 3, 1, 1),
(5, 4, 1, 1),
(6, 4, 2, 0),
(7, 4, 3, 1),
(8, 5, 1, 1),
(9, 5, 2, 0),
(10, 6, 1, 1),
(11, 6, 2, 0),
(12, 6, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_registro` date NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigo`, `nombre`, `apellido`, `fecha_registro`, `activo`) VALUES
(1, 'Andres', 'Vargas', '2023-11-16', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `codigo` int(11) NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`codigo`, `horario`) VALUES
(1, '10:00:00'),
(2, '10:15:00'),
(3, '10:30:00'),
(4, '10:45:00'),
(5, '11:00:00'),
(6, '11:15:00'),
(7, '11:30:00'),
(8, '11:45:00'),
(9, '12:00:00'),
(10, '12:15:00'),
(11, '12:30:00'),
(12, '12:45:00'),
(13, '13:00:00'),
(14, '13:15:00'),
(15, '13:30:00'),
(16, '13:45:00'),
(17, '14:00:00'),
(18, '14:15:00'),
(19, '14:30:00'),
(20, '14:45:00'),
(21, '15:00:00'),
(22, '15:15:00'),
(23, '15:30:00'),
(24, '15:45:00'),
(25, '16:00:00'),
(26, '16:15:00'),
(27, '16:30:00'),
(28, '16:45:00'),
(29, '17:00:00'),
(30, '17:15:00'),
(31, '17:30:00'),
(32, '17:45:00'),
(33, '18:00:00'),
(34, '18:15:00'),
(35, '18:30:00'),
(36, '18:45:00'),
(37, '19:00:00'),
(38, '19:15:00'),
(39, '19:30:00'),
(40, '19:45:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`codigo`, `nombre`, `precio`, `descripcion`, `activo`) VALUES
(1, 'Corte de cabello masculino', 15, 'Esto incluye una variedad de estilos, desde cortes clásicos hasta tendencias modernas.', 1),
(2, 'Afeitado de barba', 15, 'Ofrecer un afeitado clásico con navaja o una recortadora eléctrica para mantener la barba bien cuidada.', 1),
(3, 'Recorte de barba', 5, 'Ayudar a los clientes a dar forma y mantener su barba.', 1),
(4, 'Corte de cabello y barba', 20, 'Un servicio combinado que incluye un corte de cabello y un arreglo de barba.', 1),
(5, 'Limpieza facial', 15, 'Ofrecer una limpieza facial para eliminar impurezas y mejorar la salud de la piel.', 1),
(6, 'Tinte de barba o cabello', 60, 'Cambiar el color del cabello o la barba de un cliente según sus preferencias.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `citas_ibfk_1` (`cod_empleado`),
  ADD KEY `citas_ibfk_2` (`cod_cliente`),
  ADD KEY `citas_ibfk_3` (`tipo_servicio`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `desglose`
--
ALTER TABLE `desglose`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_servicio` (`codigo_servicio`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desglose`
--
ALTER TABLE `desglose`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`cod_empleado`) REFERENCES `empleados` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`tipo_servicio`) REFERENCES `servicio` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `desglose`
--
ALTER TABLE `desglose`
  ADD CONSTRAINT `desglose_ibfk_1` FOREIGN KEY (`codigo_servicio`) REFERENCES `servicio` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
