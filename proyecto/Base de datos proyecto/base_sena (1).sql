-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2022 a las 01:39:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_sena`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Add_auto` (IN `_placa` VARCHAR(6), IN `_marca` VARCHAR(11), IN `_modelo` VARCHAR(11), IN `_ID_cliente` INT(11))  BEGIN
	INSERT INTO auto (placa,marca,medelo,ID_clente) VALUES (_placa,_marca,_modelo,_ID_cliente);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `placa` varchar(6) NOT NULL,
  `marca` varchar(10) DEFAULT NULL,
  `modelo` varchar(10) DEFAULT NULL,
  `ID_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`placa`, `marca`, `modelo`, `ID_cliente`) VALUES
('awe246', 'ford', 'fiesta', 432587),
('cfr759', 'ford', 'focus rs', 554477),
('hgf854', 'ford', 'rs200', 913782),
('kar988', 'chevrolet', 'aveo', 193754),
('nhq524', 'honda', 'civic type', 981265),
('nlk258', 'ford', 'raptor', 785416),
('pas246', 'dodge', 'durango', 554472),
('rty126', 'audi', 'rs6 2003', 437619),
('swi343', 'chevrolet', 'spark', 124578),
('uio856', 'bmw', 'm3', 528736);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `codigo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `Placa_auto` varchar(10) NOT NULL,
  `ID_Empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`codigo`, `fecha`, `descripcion`, `ID_cliente`, `Placa_auto`, `ID_Empleado`) VALUES
(1, '2021-11-14', 'problemas en la transmision del auto en la parte trasera ', 528736, 'uio856', 3),
(3, '2021-11-14', 'cambio de bateria', 554477, 'cfr759', 2),
(4, '2021-11-14', 'repintado', 913782, 'hgf854', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(10) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `Cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `telefono`, `Cedula`) VALUES
('carlos', '320456875', 124578),
('jose', '536214758', 193754),
('andres', '320546987', 432587),
('marla', '555666777', 437619),
('gilberto', '546298755', 528736),
('pablo', '320558866', 554472),
('paco', '320554466', 554477),
('alberto', '1245639', 785416),
('manuel', '164978555', 913782),
('juan', '654789321', 981265);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadoadministrador`
--

CREATE TABLE `empleadoadministrador` (
  `ID_Empleado_administrador` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleadoadministrador`
--

INSERT INTO `empleadoadministrador` (`ID_Empleado_administrador`, `nombre`, `telefono`, `cargo`) VALUES
(1, 'angel', '315487965', 'pintura'),
(2, 'tristan', '548796555', 'mecanico'),
(3, 'german', '874236159', 'mecanico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`placa`),
  ADD UNIQUE KEY `ID_cliente` (`ID_cliente`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `ID_cliente` (`ID_cliente`),
  ADD UNIQUE KEY `Placa_auto` (`Placa_auto`),
  ADD UNIQUE KEY `ID_Empleado` (`ID_Empleado`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `empleadoadministrador`
--
ALTER TABLE `empleadoadministrador`
  ADD PRIMARY KEY (`ID_Empleado_administrador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleadoadministrador`
--
ALTER TABLE `empleadoadministrador`
  MODIFY `ID_Empleado_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `cliente-auto` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`Cedula`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita-cliente` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`Cedula`),
  ADD CONSTRAINT `cita-empleado` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleadoadministrador` (`ID_Empleado_administrador`),
  ADD CONSTRAINT `cita_auto` FOREIGN KEY (`Placa_auto`) REFERENCES `auto` (`placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
