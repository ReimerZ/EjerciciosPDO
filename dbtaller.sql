-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2014 a las 03:27:30
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbtaller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(32) NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `sueldo` double NOT NULL,
  PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `nombres`, `departamento`, `sueldo`) VALUES
(1, 'Alejandra Molina Perez', 'Electronica', 120000),
(2, 'Mezut Ozil', 'Soporte Tecnico', 670000),
(3, 'Reimer Javier', 'Soporte Tecnico HelpDesk', 870000),
(4, 'Katerin Polanco', 'Servicios', 120000),
(5, 'Jefferson Gonzalo', 'Sistemas', 45678),
(6, 'Angel Lozano', 'Informatica', 50000),
(7, 'Pepita Perez', 'Seguridad', 120000),
(8, 'Sorangel Ramos', 'Administrativo', 580000),
(9, 'Juancarlos Garcia', 'Operativo', 5000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
