-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2016 a las 06:39:01
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pruebaferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfc` text NOT NULL,
  `nombre` text NOT NULL,
  `direccion` text NOT NULL,
  `localidad` text NOT NULL,
  `codigo` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `clientes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `imagen` text NOT NULL,
  `ppublico` double NOT NULL,
  `cantidad` text NOT NULL,
  `subtotal` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numeroventa`, `nombre`, `imagen`, `ppublico`, `cantidad`, `subtotal`) VALUES
(1, 1, 'Cespol para lavabo ', '431305_cespol.gif', 247, '3', '741'),
(2, 1, 'Cepillo liso', '632263_cepillo liso.gif', 1176, '1', '1176'),
(3, 2, 'MÃ©nsulas de acero color blanco', '123810_mensulas.gif', 18, '5', '90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `marca` text NOT NULL,
  `medida` text NOT NULL,
  `pproveedor` double NOT NULL,
  `ppublico` double NOT NULL,
  `existencia` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `clave`, `nombre`, `marca`, `medida`, `pproveedor`, `ppublico`, `existencia`, `descripcion`, `imagen`) VALUES
(14, '44014', 'ME-148', 'MÃ©nsulas de acero color blanco', 'Fiero', '12'' X 14''', 14, 18, '7', 'Espesor de 1mm', '123810_mensulas.gif'),
(15, '49335', 'CE-207', 'Cespol para lavabo ', 'Foset', '1 1/4''', 189, 247, '1', 'Contra con rebosadero y con tapÃ³n y cadena', '431305_cespol.gif'),
(16, '12018', '6L', 'Cepillo liso', 'Truper', 'NÂª  6', 885, 1176, '2', 'Incluye 2 cuchillas con un ancho de corte de 2 3/8''', '632263_cepillo liso.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `empresa` text NOT NULL,
  `telempresa` text NOT NULL,
  `material` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `proveedor`, `telefono`, `correo`, `empresa`, `telempresa`, `material`) VALUES
(1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Usuario` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Usuario`, `Password`) VALUES
(1, 'Alfonso', 'Loaiza', 'Administrador', 'ferreteriavicasa301');
