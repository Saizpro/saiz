-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2015 a las 09:50:44
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `id_provincia` tinyint(3) unsigned NOT NULL,
  `dni` varchar(15) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `email`, `direccion`, `id_provincia`, `dni`, `usuario`, `password`, `sexo`, `fecha_nacimiento`) VALUES
(1, 'Ana Delia', 'Campo Sevil', '655555555', 'deliacampo@gmail.com', 'C/ Monasterio de Samos, 45, 3ºB', 50, '25463193P', 'anadelia', '6c4eb96ba89e915ab6b31378089d8ac6', 1, '1974-12-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE IF NOT EXISTS `comunidades` (
  `id_comunidad` tinyint(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_comunidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id_comunidad`, `nombre`) VALUES
(1, 'Andalucía'),
(2, 'Aragón'),
(3, 'Asturias, Principado de'),
(4, 'Balears, Illes'),
(5, 'Canarias'),
(6, 'Cantabria'),
(7, 'Castilla y León'),
(8, 'Castilla - La Mancha'),
(9, 'Catalunya'),
(10, 'Comunitat Valenciana'),
(11, 'Extremadura'),
(12, 'Galicia'),
(13, 'Madrid, Comunidad de'),
(14, 'Murcia, Región de'),
(15, 'Navarra, Comunidad Foral de'),
(16, 'País Vasco'),
(17, 'Rioja, La'),
(18, 'Ceuta'),
(19, 'Melilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_pedido`
--

CREATE TABLE IF NOT EXISTS `lineas_pedido` (
  `num_linea` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pedido` int(10) unsigned NOT NULL,
  `id_producto` int(10) unsigned NOT NULL,
  `id_talla` tinyint(3) unsigned NOT NULL,
  `cantidad` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`num_linea`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `lineas_pedido`
--

INSERT INTO `lineas_pedido` (`num_linea`, `id_pedido`, `id_producto`, `id_talla`, `cantidad`) VALUES
(1, 1, 1, 2, 1),
(2, 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mangas`
--

CREATE TABLE IF NOT EXISTS `mangas` (
  `id_manga` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `manga` varchar(30) NOT NULL,
  PRIMARY KEY (`id_manga`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `mangas`
--

INSERT INTO `mangas` (`id_manga`, `manga`) VALUES
(1, 'Manga larga'),
(2, 'Manga corta'),
(3, 'Tirantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int(10) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  `total` float(6,2) unsigned NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `fecha`, `total`) VALUES
(1, 1, '2015-05-13 12:48:50', 40.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `persona` varchar(15) NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `persona`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Bebé');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `referencia` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float(5,2) unsigned NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `referencia`, `descripcion`, `precio`, `foto`) VALUES
(1, 'M1/2015', 'Camiseta muy fresca para el verano. Composición: 100% algodón. No requiere planchado.', 20.00, 'm1-2015.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id_provincia` smallint(6) NOT NULL DEFAULT '0',
  `provincia` varchar(30) DEFAULT NULL,
  `id_comunidad` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_provincia`, `provincia`, `id_comunidad`) VALUES
(0, 'ïnsula barataria', 0),
(1, 'Araba/Álava', 0),
(2, 'Albacete', 0),
(3, 'Alicante', 0),
(4, 'Almería', 0),
(5, 'Ávila', 0),
(6, 'Badajoz', 0),
(7, 'Balears, Illes', 0),
(8, 'Barcelona', 0),
(9, 'Burgos', 0),
(10, 'Cáceres', 0),
(11, 'Cádiz', 0),
(12, 'Castellón/Castelló', 0),
(13, 'Ciudad Real', 0),
(14, 'Córdoba', 0),
(15, 'Coruña, A', 0),
(16, 'Cuenca', 0),
(17, 'Girona', 0),
(18, 'Granada', 0),
(19, 'Guadalajara', 0),
(20, 'Gipuzkoa', 0),
(21, 'Huelva', 0),
(22, 'Huesca', 2),
(23, 'Jaén', 0),
(24, 'León', 0),
(25, 'Lleida', 0),
(26, 'Rioja, La', 0),
(27, 'Lugo', 0),
(28, 'Madrid', 0),
(29, 'Málaga', 0),
(30, 'Murcia', 0),
(31, 'Navarra', 0),
(32, 'Ourense', 0),
(33, 'Asturias', 0),
(34, 'Palencia', 0),
(35, 'Palmas, Las', 0),
(36, 'Pontevedra', 0),
(37, 'Salamanca', 0),
(38, 'Santa Cruz de Tenerife', 0),
(39, 'Cantabria', 0),
(40, 'Segovia', 0),
(41, 'Sevilla', 0),
(42, 'Soria', 0),
(43, 'Tarragona', 0),
(44, 'Teruel', 2),
(45, 'Toledo', 0),
(46, 'Valencia/València', 0),
(47, 'Valladolid', 0),
(48, 'Bizkaia', 0),
(49, 'Zamora', 0),
(50, 'Zaragoza', 2),
(51, 'Ceuta', 0),
(52, 'Melilla', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id_stock` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) unsigned NOT NULL,
  `id_persona` tinyint(3) unsigned NOT NULL,
  `id_manga` tinyint(3) unsigned NOT NULL,
  `id_talla` tinyint(3) unsigned NOT NULL,
  `unidades` smallint(6) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id_stock`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `id_producto`, `id_persona`, `id_manga`, `id_talla`, `unidades`) VALUES
(1, 1, 2, 0, 0, 10),
(2, 1, 6, 0, 0, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE IF NOT EXISTS `tallas` (
  `id_talla` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `talla` varchar(20) NOT NULL,
  PRIMARY KEY (`id_talla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
