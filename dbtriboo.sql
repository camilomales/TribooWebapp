-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2016 a las 00:44:42
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbtriboo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunciantes`
--

CREATE TABLE IF NOT EXISTS `anunciantes` (
  `idAnunciante` int(11) NOT NULL,
  `establecimiento` varchar(60) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `local` varchar(20) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anunciantes`
--

INSERT INTO `anunciantes` (`idAnunciante`, `establecimiento`, `direccion`, `telefono`, `local`, `idUsuario`) VALUES
(3, 'Mas Fruta', 'Cra 33 A No 19-36 Versalles', 756456, 'local 1', 1),
(4, 'Exito', 'Calle 17 # 12 ', 7652312, 'local 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `palabrasClave` varchar(255) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `activo` bit(1) NOT NULL,
  `posicion` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombre`, `palabrasClave`, `fechaCreacion`, `activo`, `posicion`) VALUES
(1, 'Calzado', 'Zapatos - botas', '2015-08-18', b'1', 2),
(2, 'Comidas', 'restaurantes - comidas - heladerias - cafeterias', '2015-09-16', b'0', 1),
(3, 'Ropa', 'ropa - ropa deportiva', '2015-09-22', b'1', 3),
(4, 'electrónica', 'circuitos - electricidad ', '2015-09-24', b'1', 5),
(25, 'computadores', 'software - hardware', '2015-09-24', b'1', 7),
(32, 'Herramientas', 'clavos-martillos\r\n', '2015-09-28', b'1', 6),
(50, 'Accesorios', 'adornos, decoración', '2015-10-06', b'0', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `idCuenta` int(11) NOT NULL,
  `saldo` double NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interacciones`
--

CREATE TABLE IF NOT EXISTS `interacciones` (
  `idInteraccion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idMensaje` int(11) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `fechaInteraccion` datetime NOT NULL,
  `tipoInteraccion` int(11) NOT NULL,
  `monto` double NOT NULL,
  `codValidacion` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `interacciones`
--

INSERT INTO `interacciones` (`idInteraccion`, `idUsuario`, `idMensaje`, `latitud`, `longitud`, `fechaInteraccion`, `tipoInteraccion`, `monto`, `codValidacion`) VALUES
(27, 1, 2, 7651651, 75616515, '2015-11-19 17:55:45', 1, 40000, '2342'),
(28, 1, 12, 7651651, 75616515, '2015-11-19 17:57:05', 1, 150000, '3324'),
(29, 1, 9, 7651651, 75616515, '2015-11-19 17:57:40', 1, 40000, '232'),
(30, 1, 1, 7651651, 75616515, '2015-12-03 16:57:21', 1, 6000, '465'),
(31, 1, 13, 7651651, 75616515, '2015-12-03 18:08:41', 1, 75000, '48946');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intereses`
--

CREATE TABLE IF NOT EXISTS `intereses` (
  `idInteres` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `intereses`
--

INSERT INTO `intereses` (`idInteres`, `idUsuario`, `idCategoria`) VALUES
(117, 2, 4),
(118, 2, 3),
(121, 1, 50),
(123, 1, 3),
(128, 3, 50),
(129, 3, 25),
(130, 3, 3),
(131, 1, 25),
(132, 1, 32),
(133, 1, 4),
(134, 1, 2),
(135, 1, 1),
(136, 4, 1),
(137, 4, 2),
(138, 4, 3),
(139, 4, 4),
(140, 4, 25),
(141, 4, 32),
(142, 4, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE IF NOT EXISTS `listas` (
  `idLista` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `nombreLista` varchar(50) NOT NULL,
  `privada` bit(1) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`idLista`, `fechaCreacion`, `nombreLista`, `privada`, `idCategoria`) VALUES
(2, '2015-09-21', 'Zapatos deportivos', b'0', 1),
(3, '2015-09-19', 'Zapatos para dama', b'0', 1),
(4, '2015-09-22', 'Comida vegetariana', b'0', 2),
(5, '2015-09-22', 'Comidas rapidas', b'0', 2),
(6, '2015-09-21', 'Pantalones para hombre', b'0', 3),
(7, '2015-09-21', 'Chaquetas de cuero', b'0', 3),
(8, '2015-10-19', 'Muñecos para detalles', b'0', 50),
(9, '2015-10-13', 'Arreglo de computadores', b'0', 25),
(10, '2015-10-05', 'Desayunos', b'0', 2),
(11, '2015-10-18', 'Dulces', b'0', 2),
(12, '2015-10-05', 'Helados', b'0', 2),
(13, '2015-10-17', 'Ropa para dama', b'0', 3),
(14, '2015-10-20', 'Café ', b'0', 2),
(15, '2015-10-21', 'Sudaderas hombre', b'0', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `idMensaje` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `descripcion` varchar(144) CHARACTER SET utf8 NOT NULL,
  `palabrasClave` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `hrPubInicio` datetime DEFAULT NULL,
  `hrPubFin` datetime NOT NULL,
  `linkMasInfo` varchar(100) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `edad` varchar(30) DEFAULT NULL,
  `cumpleanos` bit(1) DEFAULT NULL,
  `idTipoMensaje` int(11) NOT NULL,
  `activo` bit(1) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `rutaImg` varchar(50) NOT NULL,
  `idLista` int(11) NOT NULL,
  `idAnunciante` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idMensaje`, `fechaCreacion`, `descripcion`, `palabrasClave`, `valor`, `fechaInicio`, `fechaFin`, `hrPubInicio`, `hrPubFin`, `linkMasInfo`, `sexo`, `edad`, `cumpleanos`, `idTipoMensaje`, `activo`, `idUsuario`, `rutaImg`, `idLista`, `idAnunciante`) VALUES
(1, '2015-10-19 09:17:14', 'Por la compra de un Makaco lleva otro gratis ', 'Makaco, promoción, promo del mes, cuentero, accesorios, muñecos, regalos, detalles', 6000, '2015-10-20', '2016-04-18', '2015-10-20 08:26:30', '2016-04-18 18:00:00', NULL, NULL, 'mayores de 15', b'0', 1, b'1', 1, 'images/screenshots/1.jpg', 8, 3),
(2, '2015-10-19 08:17:28', 'Aprovecha el 25% de descuento en mantenimiento ', 'computadores, mantenimiento, descuento, software, pc, laptops ', 40000, '2015-10-20', '2015-12-27', '2015-12-09 13:00:00', '2015-12-27 20:00:00', 'www.pc-bit.com', NULL, NULL, b'0', 2, b'1', 1, 'images/screenshots/2.jpg', 9, 4),
(3, '2015-10-12 07:00:00', '2 cereales con fruta por $5.000', 'mas fruta, desayunos, fruta, cereal, descuento  ', 5000, '2015-10-12', '2015-12-23', '2015-10-12 09:00:00', '2015-10-30 12:00:00', 'www.masfruta.com.co', NULL, NULL, NULL, 1, b'1', 1, 'images/screenshots/5.jpg', 10, 3),
(4, '2015-10-19 10:20:00', 'Reclama una tarjeta con una rosa ', 'chocolate, comidas, promoción, ChocoDeliciosos', 5000, '2015-10-19', '2015-10-25', '2015-10-19 14:00:00', '2015-10-25 15:00:00', NULL, 'F', NULL, NULL, 1, b'1', 1, 'images/screenshots/7.jpg', 11, 3),
(5, '2015-10-19 09:30:00', '2 granizados de frutas por $4900', 'promoción, bono, más fruta, helado, granizados, fruta', 4900, '2015-10-19', '2015-10-30', '2015-10-19 13:00:00', '2015-10-30 17:00:00', 'www.masfruta.com.co', NULL, NULL, NULL, 1, b'1', 1, 'images/screenshots/3.jpg', 12, 4),
(6, '2015-10-17 00:00:00', 'Recibe una limpieza facial \n', 'gratis, limpieza, Shaya, ropa, accesorios', 100000, '2015-10-19', '2015-10-23', '2015-10-20 08:00:00', '2015-10-20 20:00:00', 'www.facebook.com/shayatienda', 'F', NULL, NULL, 1, b'1', 1, 'images/screenshots/6.jpg', 13, 4),
(7, '2015-10-20 09:15:00', '2 aromáticas de frutas por $2.500', 'fruta, promoción, aromáticas, mas fruta, heladería, tardes', 2500, '2015-10-21', '2015-11-06', '2015-10-20 14:00:00', '2015-11-06 17:00:00', 'www.masfruta.com.co', NULL, NULL, NULL, 1, b'1', 1, 'images/screenshots/4.jpg', 14, 3),
(8, '2015-10-21 00:00:00', '50% de en camisetas y jeans', 'rebajas, quest, ropa, descuento', 50000, '2015-10-21', '2015-11-18', '2015-10-21 10:00:00', '2015-11-18 12:00:00', 'quest.com.co', 'M', NULL, NULL, 1, b'1', 1, 'images/screenshots/8.jpg', 6, 3),
(9, '2015-10-12 15:38:39', '30% de descuento en todo el calzado', 'zapatos, calzado, descuento, calzatodo, ', 40000, '2015-10-13', '2015-11-20', '2015-10-13 08:10:00', '2015-11-20 19:00:00', 'www.calzatodo.com.co', NULL, NULL, NULL, 1, b'1', 1, 'images/screenshots/9.jpg', 2, 4),
(10, '2015-10-22 10:00:00', '2 jeans para dama por solo $39.900', 'jeans´store, jeans, dama, oferta', 40000, '2015-10-23', '2015-10-23', '2015-10-23 09:10:00', '2015-10-23 19:00:00', 'www.jeansstore.com', 'F', 'mayores de edad', NULL, 1, b'1', 1, 'images/screenshots/3.jpg', 13, 3),
(11, '2015-10-21 08:45:00', 'Promoción sudaderas para hombre desde $75.000', 'sudaderas, hombre, promoción, arena', 75000, '2015-10-21', '2015-10-23', '2015-10-21 13:00:00', '2015-10-23 12:00:00', NULL, 'M', 'mayores de edad', NULL, 1, b'1', 1, 'images/screenshots/1.jpg', 15, 4),
(12, '2015-10-19 19:00:00', '15% de descuento en calzado NIKE', 'descuento, S & C STORE, nike, puma, fila, climbingland, calzado, zapatos ', 150000, '2015-10-20', '2015-12-16', '2015-10-20 09:10:00', '2015-12-16 19:00:00', NULL, NULL, NULL, NULL, 1, b'1', 1, 'images/screenshots/12.jpg', 2, 3),
(13, '2015-10-26 07:20:00', 'Pantalón casual para hombre desde $74.900', 'sale, precios especiales, pantalón, hombre, unicentro', 75000, '2015-10-26', '2015-10-28', '2015-10-26 09:00:00', '2015-10-28 17:00:00', NULL, 'M', 'mayores de edad', NULL, 1, b'1', 1, 'images/screenshots/2.jpg', 6, 4),
(28, '2016-04-07 22:39:21', 'sfasfdasfasfd', 'dsfafasf', 45.616, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:39:212016-04-072', 4, 3),
(29, '2016-04-07 22:40:46', 'kljkdljfl', 'jsfkasjflak', 746.546, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:40:462016-04-072', 4, 3),
(30, '2016-04-07 22:42:09', 'jkjkljlk', 'jkjljkljl', 5.165, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:42:092016-04-072', 4, 3),
(31, '2016-04-07 22:43:47', 'kjkljljl', 'jkjlkjl', 1.656, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:43:472016-04-072', 3, 3),
(32, '2016-04-07 22:45:22', 'kjksdjfkalf', 'kjkajfdlÃ±Ã±', 485.465, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:45:222016-04-072', 3, 3),
(33, '2016-04-07 22:46:39', 'kakfdsjÃ±l', 'kdsjfalklf', 1.564, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 1, b'1', 1, '/images/screenshots/2016-04-07 22:46:392016-04-072', 2, 3),
(34, '2016-04-07 22:49:06', 'asfafd', 'affdaf', 546.546, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:49:062016-04-072', 3, 3),
(35, '2016-04-07 22:50:55', 'jkjljl', 'jkjlkjl', 16.546, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:50:552016-04-072', 3, 3),
(36, '2016-04-07 22:53:55', 'jkljlkjlk', 'jkjkljljl', 454.654, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 22:53:552016-04-072', 3, 3),
(37, '2016-04-07 23:14:18', 'jnkljklj', 'jkjlkjklj', 1.213, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 1, b'1', 1, '/images/screenshots/2016-04-07 23:14:182016-04-072', 3, 3),
(38, '2016-04-07 23:16:30', 'jkljkljl', 'kjkljlkjlk', 15.616, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 1, b'1', 1, '/images/screenshots/2016-04-07 23:16:302016-04-072', 4, 3),
(39, '2016-04-07 23:17:52', 'jkjkljl', 'jkjlkjl', 11.656, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 1, b'1', 1, '/images/screenshots/2016-04-07 23:17:522016-04-072', 3, 3),
(40, '2016-04-07 23:21:10', 'jasfdkajsfl', 'jdkfsjaslkjfl', 5.165, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 23:21:102016-04-072', 3, 3),
(41, '2016-04-07 23:53:00', 'kjaksjflksfl', 'jkfjakslfjlk', 15.661, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-07 23:53:002016-04-072', 3, 3),
(42, '2016-04-08 00:12:53', 'jkjkjafsljkd', 'djksfjlaksjlkf', 54.546, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-08 00:12:532016-04-080', 3, 3),
(43, '2016-04-08 00:16:34', 'promocion', 'promo', 20, '2016-04-07', '2016-04-07', '2016-04-07 00:00:00', '0000-00-00 00:00:00', '', '', '', b'0', 2, b'1', 1, '/images/screenshots/2016-04-08 00:16:342016-04-080', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `idNivel` int(11) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `montoMin` double NOT NULL,
  `montoMax` double NOT NULL,
  `activo` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocionesqr`
--

CREATE TABLE IF NOT EXISTS `promocionesqr` (
  `idPromocion` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promocionesqr`
--

INSERT INTO `promocionesqr` (`idPromocion`, `nombre`, `imagen`) VALUES
('prmdwxlr65134977', 'TRIBOO', 'prm000'),
('prmdwxlr65145434', 'SHAYA', 'prmshawy39'),
('prmdwxlr65147536', 'SHAYA', 'prmshawy39'),
('prmdwxlr65148134', 'TRIBOO', 'prm000'),
('prmdwxlr65150533', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65152057', 'TRIBOO', 'prm000'),
('prmdwxlr65153181', 'SHAYA', 'prmshawy39'),
('prmdwxlr65180207', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65230954', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65258270', 'SHAYA', 'prmshawy39'),
('prmdwxlr65313958', 'TRIBOO', 'prm000'),
('prmdwxlr65318989', 'SHAYA', 'prmshawy39'),
('prmdwxlr65322267', 'SHAYA', 'prmshawy39'),
('prmdwxlr65331349', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65349022', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65368265', 'SHAYA', 'prmshawy39'),
('prmdwxlr65375721', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65377517', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65379095', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65391393', 'SHAYA', 'prmshawy39'),
('prmdwxlr65400406', 'TRIBOO', 'prm000'),
('prmdwxlr65405862', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65453545', 'SHAYA', 'prmshawy39'),
('prmdwxlr65489035', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65535777', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65536085', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65545593', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65555400', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65559054', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65571978', 'SHAYA', 'prmshawy39'),
('prmdwxlr65575569', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65579536', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65580608', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65594593', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65608716', 'DELEX', 'prmdwxlr65'),
('prmdwxlr6560981', 'TRIBOO', 'prm000'),
('prmdwxlr65650310', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65692458', 'SHAYA', 'prmshawy39'),
('prmdwxlr65699700', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65708520', 'DELEX', 'prmdwxlr65'),
('prmdwxlr65725871', 'TRIBOO', 'prm000'),
('prmdwxlr65738635', 'DELEX', 'prmdwxlr65'),
('prmdwxlr6574398', 'DELEX', 'prmdwxlr65'),
('prmdwxlr6576453', 'SHAYA', 'prmshawy39'),
('prmdwxlr65822322', 'TRIBOO', 'prm000'),
('prmdwxlr65834447', 'SHAYA', 'prmshawy39'),
('prmdwxlr65856274', 'TRIBOO', 'prm000'),
('prmdwxlr6587530', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmdwxlr65885820', 'SHAYA', 'prmshawy39'),
('prmdwxlr65938633', 'TRIBOO', 'prm000'),
('prmjthwy34115304', 'MAKACO', 'prmjthwy34'),
('prmjthwy34132561', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34164969', 'MAKACO', 'prmjthwy34'),
('prmjthwy34166305', 'MAKACO', 'prmjthwy34'),
('prmjthwy34254229', 'MAKACO', 'prmjthwy34'),
('prmjthwy34297823', 'MAKACO', 'prmjthwy34'),
('prmjthwy34298423', 'MAKACO', 'prmjthwy34'),
('prmjthwy34319836', 'MAKACO', 'prmjthwy34'),
('prmjthwy34320276', 'MAKACO', 'prmjthwy34'),
('prmjthwy34337235', 'MAKACO', 'prmjthwy34'),
('prmjthwy34346813', 'MAKACO', 'prmjthwy34'),
('prmjthwy34384007', 'MAKACO', 'prmjthwy34'),
('prmjthwy34433889', 'MAKACO', 'prmjthwy34'),
('prmjthwy34453633', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34520066', 'MAKACO', 'prmjthwy34'),
('prmjthwy34531624', 'MAKACO', 'prmjthwy34'),
('prmjthwy34533059', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34559969', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34567056', 'MAKACO', 'prmjthwy34'),
('prmjthwy34571223', 'MAKACO', 'prmjthwy34'),
('prmjthwy34581011', 'MAKACO', 'prmjthwy34'),
('prmjthwy34590626', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34608770', 'MAKACO', 'prmjthwy34'),
('prmjthwy34626485', 'MAKACO', 'prmjthwy34'),
('prmjthwy34645824', 'MAKACO', 'prmjthwy34'),
('prmjthwy34664238', 'MAKACO', 'prmjthwy34'),
('prmjthwy34682306', 'MAKACO', 'prmjthwy34'),
('prmjthwy34687043', 'MAKACO', 'prmjthwy34'),
('prmjthwy34701516', 'MAKACO', 'prmjthwy34'),
('prmjthwy34707204', 'MAKACO', 'prmjthwy34'),
('prmjthwy34716501', 'MAKACO', 'prmjthwy34'),
('prmjthwy3475230', 'MAKACO', 'prmjthwy34'),
('prmjthwy34797848', 'MAKACO', 'prmjthwy34'),
('prmjthwy34811221', 'MAKACO', 'prmjthwy34'),
('prmjthwy34812901', 'MAKACO', 'prmjthwy34'),
('prmjthwy34822546', 'MAKACO', 'prmjthwy34'),
('prmjthwy34823416', 'MAKACO', 'prmjthwy34'),
('prmjthwy34838622', 'MAKACO', 'prmjthwy34'),
('prmjthwy34844127', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34850167', 'MAKACO', 'prmjthwy34'),
('prmjthwy34858115', 'MAKACO', 'prmjthwy34'),
('prmjthwy34876620', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34891098', 'MAKACO', 'prmjthwy34'),
('prmjthwy34892475', 'MAKACO', 'prmjthwy34'),
('prmjthwy34895133', 'MAKACO', 'prmjthwy34'),
('prmjthwy34902539', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmjthwy34926442', 'MAKACO', 'prmjthwy34'),
('prmjthwy34948301', 'MAKACO', 'prmjthwy34'),
('prmjthwy34956030', 'MAKACO', 'prmjthwy34'),
('prmjthwy34965603', 'MAKACO', 'prmjthwy34'),
('prmwsijx21107631', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21108539', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21111170', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21111735', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21122303', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21145290', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21147902', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21149788', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21152416', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21153303', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21164548', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21164556', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21171258', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21171328', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21179974', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21182672', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21187377', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21193129', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21194532', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21201587', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21203716', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21212239', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21212451', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21235812', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21260526', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21261796', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21262513', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21272468', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21279347', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21279908', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21292212', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21297664', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21309030', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21327673', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmwsijx21343955', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21353244', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21359854', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21363944', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21364656', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21375206', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21375554', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21375585', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21382076', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21383260', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21384065', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21387889', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21388473', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21392452', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21400088', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21404899', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21405793', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21406691', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21408616', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21414345', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21416116', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21434252', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21435162', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21442435', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21451743', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21453027', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21465375', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21466362', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21476853', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21480006', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21481249', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21483379', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21488881', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21491581', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21496491', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21500815', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21527124', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21531785', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21538197', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21539140', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21539147', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21548583', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21552746', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21561344', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21563699', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21564775', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21573821', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21573979', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2158212', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21584825', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21586384', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21596388', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21605413', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21607308', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21614079', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21614779', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21618308', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21624292', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21624340', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21628577', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21634086', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21634800', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21644200', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21654309', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21659795', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21663653', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21669815', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21669925', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21670919', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21674099', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21677350', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21681238', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21691737', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2169624', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21707714', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2171392', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21722883', 'CHOCODELICIOSOS', 'prmchxyh21'),
('prmwsijx21729620', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2173302', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21733175', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2174031', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2175121', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21761441', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21762465', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21774826', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21777357', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21779548', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21781809', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21784121', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21785716', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21795960', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21800324', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21803990', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2181183', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21817717', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21819415', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21827883', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2183354', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21837614', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21844162', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21851671', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2185889', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21863218', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21874655', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21878246', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21881534', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21884595', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21898348', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21915690', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2191898', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21920988', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21929522', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21941347', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21951698', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx21959524', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijx2198253', 'MAS FRUTA P INF', 'prmwsijx21'),
('prmwsijy21223145', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21259925', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21265928', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21266705', 'TRIBOO', 'prm000'),
('prmwsijy21280974', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21283284', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21293781', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21302625', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21319430', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21340821', 'TRIBOO', 'prm000'),
('prmwsijy21341944', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21350155', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21364282', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21377882', 'TRIBOO', 'prm000'),
('prmwsijy21401686', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21417731', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21427296', 'TRIBOO', 'prm000'),
('prmwsijy21431666', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21434951', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21444050', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21447604', 'TRIBOO', 'prm000'),
('prmwsijy21451201', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21507477', 'TRIBOO', 'prm000'),
('prmwsijy21542120', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21556022', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21557684', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21575253', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21576192', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21595657', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21609677', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21611226', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21638315', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21673707', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21675745', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21692116', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21693419', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21697294', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21716873', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21744351', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21827116', 'SHAYA', 'prmshawy39'),
('prmwsijy21858686', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21859262', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21864359', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21868196', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21872276', 'PC-BIT', 'prmwsijy21'),
('prmwsijy2188120', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21923880', 'PC-BIT', 'prmwsijy21'),
('prmwsijy21935406', 'PC-BIT', 'prmwsijy21'),
('prmwsijy2193673', 'TRIBOO', 'prm000'),
('prmwsijy21947376', 'PC-BIT', 'prmwsijy21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomensaje`
--

CREATE TABLE IF NOT EXISTS `tipomensaje` (
  `idTipoMensaje` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipomensaje`
--

INSERT INTO `tipomensaje` (`idTipoMensaje`, `descripcion`) VALUES
(1, 'Promo del mes'),
(2, 'Hasta agotar códigos promocionales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE IF NOT EXISTS `ubicaciones` (
  `idUbicacion` int(11) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `municipio` int(11) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `fechaCreacion` date NOT NULL,
  `idMensaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `pws` varchar(10) DEFAULT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `feNacimiento` date DEFAULT NULL,
  `sexo` bit(1) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `acerca` varchar(144) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `mail`, `pws`, `nombres`, `apellidos`, `feNacimiento`, `sexo`, `user`, `web`, `acerca`) VALUES
(1, 'mail@mail.com', '81dc9bdb52', 'Camilo', 'Males', '2015-12-17', b'0', 'camilom', 'No', 'No'),
(2, 'andres@gmail.com', '81dc9bdb52', 'andres', 'Burbano', '2014-10-29', b'0', 'andres', 'No', 'No'),
(3, 'prueba@gmail.com', '81dc9bdb52', 'prueba', 'prue', '1993-02-12', b'0', 'pru', 'No', 'no'),
(4, 'camilomales@hotmail.com', '0aa0b6b320', 'Camilo', 'Males', '1993-03-01', b'0', 'camilom', 'No', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosqr`
--

CREATE TABLE IF NOT EXISTS `usuariosqr` (
  `idPromocion` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosqr`
--

INSERT INTO `usuariosqr` (`idPromocion`, `mail`, `nombre`, `fecha`) VALUES
('prmdwxlr6574398', 'pcdlunita@gmail.com', 'pcdlunita@gmail.com', '2015-08-18 08:05:15'),
('prmdwxlr65938633', 'andresmorarivera@gmail.com', 'andresmorarivera@gmail.com', '2015-07-02 10:58:52'),
('prmwsijx21152416', 'marlene2508@hotmail.com', 'marlene2508@hotmail.com', '2015-05-20 09:20:42'),
('prmwsijx21187377', 'marlene2508@hotmail.com', 'marlene2508@hotmail.com', '2015-05-22 08:49:13'),
('prmwsijx21363944', 'andres.after@gmail.com', 'andres.after@gmail.com', '2015-06-08 17:50:59'),
('prmwsijx21375206', 'davidego3@gmail.com', 'davidego3@gmail.com', '2015-05-12 12:33:05'),
('prmwsijx21491581', 'marlene2508@hotmail.com', 'marlene2508@hotmail.com', '2015-05-20 09:22:51'),
('prmwsijx21538197', 'm-villota@hotmail.com', 'm-villota@hotmail.com', '2015-06-11 14:35:37'),
('prmwsijx21539147', 'ticketlifefull@gmail.com', 'ticketlifefull@gmail.com', '2015-06-05 11:19:02'),
('prmwsijx21669925', 'fer@imagencreativa.com', 'fer@imagencreativa.com', '2015-06-09 16:10:55'),
('prmwsijx2171392', 'alepazs218@gmail.com', 'alepazs218@gmail.com', '2015-08-12 13:41:16'),
('prmwsijx21874655', 'pcdlunita@gmail.com', 'pcdlunita@gmail.com', '2015-06-27 15:34:15'),
('prmwsijy21266705', 'gersonortega@gmail.com', 'gersonortega@gmail.com', '2015-05-14 19:44:34'),
('prmwsijy21923880', 'daferaco@gmail.com', 'daferaco@gmail.com', '2015-04-30 17:06:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validaciones`
--

CREATE TABLE IF NOT EXISTS `validaciones` (
  `idValidacion` int(10) NOT NULL,
  `codValidacion` varchar(10) CHARACTER SET latin1 NOT NULL,
  `fechaVenta` date NOT NULL,
  `montoVenta` double NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `validaciones`
--

INSERT INTO `validaciones` (`idValidacion`, `codValidacion`, `fechaVenta`, `montoVenta`, `idUsuario`) VALUES
(1, '5555', '2015-09-23', 10000, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunciantes`
--
ALTER TABLE `anunciantes`
  ADD PRIMARY KEY (`idAnunciante`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idCuenta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `interacciones`
--
ALTER TABLE `interacciones`
  ADD PRIMARY KEY (`idInteraccion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idMensaje` (`idMensaje`);

--
-- Indices de la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD PRIMARY KEY (`idInteres`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`idLista`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idMensaje`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idLista` (`idLista`),
  ADD KEY `idTipoMensaje` (`idTipoMensaje`),
  ADD KEY `idAnunciante` (`idAnunciante`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indices de la tabla `promocionesqr`
--
ALTER TABLE `promocionesqr`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indices de la tabla `tipomensaje`
--
ALTER TABLE `tipomensaje`
  ADD PRIMARY KEY (`idTipoMensaje`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`idUbicacion`),
  ADD KEY `idMensaje` (`idMensaje`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuariosqr`
--
ALTER TABLE `usuariosqr`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indices de la tabla `validaciones`
--
ALTER TABLE `validaciones`
  ADD PRIMARY KEY (`idValidacion`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunciantes`
--
ALTER TABLE `anunciantes`
  MODIFY `idAnunciante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `interacciones`
--
ALTER TABLE `interacciones`
  MODIFY `idInteraccion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `intereses`
--
ALTER TABLE `intereses`
  MODIFY `idInteres` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `idLista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipomensaje`
--
ALTER TABLE `tipomensaje`
  MODIFY `idTipoMensaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `validaciones`
--
ALTER TABLE `validaciones`
  MODIFY `idValidacion` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anunciantes`
--
ALTER TABLE `anunciantes`
  ADD CONSTRAINT `anunciantes_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `interacciones`
--
ALTER TABLE `interacciones`
  ADD CONSTRAINT `interacciones_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interacciones_ibfk_2` FOREIGN KEY (`idMensaje`) REFERENCES `mensajes` (`idMensaje`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD CONSTRAINT `intereses_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `intereses_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `listas`
--
ALTER TABLE `listas`
  ADD CONSTRAINT `listas_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensajes_ibfk_3` FOREIGN KEY (`idLista`) REFERENCES `listas` (`idLista`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensajes_ibfk_4` FOREIGN KEY (`idTipoMensaje`) REFERENCES `tipomensaje` (`idTipoMensaje`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensajes_ibfk_5` FOREIGN KEY (`idAnunciante`) REFERENCES `anunciantes` (`idAnunciante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD CONSTRAINT `ubicaciones_ibfk_1` FOREIGN KEY (`idMensaje`) REFERENCES `mensajes` (`idMensaje`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `validaciones`
--
ALTER TABLE `validaciones`
  ADD CONSTRAINT `validaciones_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
