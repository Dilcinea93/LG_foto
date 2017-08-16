-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-02-2017 a las 18:11:13
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `l_g_fotografia2`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `clients`
-- 

CREATE TABLE `clients` (
  `naci` varchar(12) NOT NULL,
  `id_c` int(100) NOT NULL,
  `nombre_c` varchar(100) NOT NULL,
  `razon_s_c` varchar(100) NOT NULL,
  `telefono_c` varchar(100) NOT NULL,
  `email_c` varchar(100) NOT NULL,
  `direccion_c` varchar(200) NOT NULL,
  `rif` varchar(13) NOT NULL,
  `cod_a` int(5) NOT NULL,
  `estado` varchar(56) NOT NULL,
  `ciudad` varchar(56) NOT NULL,
  PRIMARY KEY  (`id_c`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `clients`
-- 

INSERT INTO `clients` VALUES ('E', 17530786, 'nercy padrino', 'DoydCorazon', '453-23-45', 'hrnwq@df.csd', '', 'J-93490398-7', 416, '10', 'Caracas');
INSERT INTO `clients` VALUES ('E', 25132257, 'victor laya', 'rtert', '123-12-31', 'jdasd@weq.wdw', '', 'B-42342342-6', 412, '4', 'Guanta');
INSERT INTO `clients` VALUES ('E', 34234234, 'dfgdg', 'dfgdg', '123-23-12', 'sds@sdfsfxc.xc', '', 'D-34234234-1', 414, '5', 'Santa Barbara');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estados`
-- 

CREATE TABLE `estados` (
  `id` int(23) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- 
-- Volcar la base de datos para la tabla `estados`
-- 

INSERT INTO `estados` VALUES (1, 'Aragua');
INSERT INTO `estados` VALUES (2, 'Apure');
INSERT INTO `estados` VALUES (3, 'Amazonas');
INSERT INTO `estados` VALUES (4, 'Anzoategui');
INSERT INTO `estados` VALUES (5, 'Barinas');
INSERT INTO `estados` VALUES (6, 'Bolivar');
INSERT INTO `estados` VALUES (7, 'Carabobo');
INSERT INTO `estados` VALUES (8, 'Cojedes');
INSERT INTO `estados` VALUES (9, 'Delta Amacuro');
INSERT INTO `estados` VALUES (10, 'Distrito Capital');
INSERT INTO `estados` VALUES (11, 'Falcón');
INSERT INTO `estados` VALUES (12, 'Guárico');
INSERT INTO `estados` VALUES (13, 'Lara');
INSERT INTO `estados` VALUES (14, 'Mérida');
INSERT INTO `estados` VALUES (15, 'Miranda');
INSERT INTO `estados` VALUES (16, 'Monagas');
INSERT INTO `estados` VALUES (17, 'Nueva Esparta');
INSERT INTO `estados` VALUES (18, 'Portuguesa');
INSERT INTO `estados` VALUES (19, 'Sucre');
INSERT INTO `estados` VALUES (20, 'Táchira');
INSERT INTO `estados` VALUES (21, 'Trujillo');
INSERT INTO `estados` VALUES (22, 'Vargas');
INSERT INTO `estados` VALUES (23, 'Yaracuy');
INSERT INTO `estados` VALUES (24, 'Zulia');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `eventos`
-- 

CREATE TABLE `eventos` (
  `id` int(67) NOT NULL auto_increment,
  `evento` varchar(200) NOT NULL,
  `detalles` varchar(300) NOT NULL,
  `hora` varchar(3) NOT NULL,
  `fecha` varchar(3) NOT NULL,
  `mes` varchar(54) NOT NULL,
  `am` varchar(6) NOT NULL,
  `ano` varchar(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `eventos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `gastos`
-- 

CREATE TABLE `gastos` (
  `id` int(20) NOT NULL,
  `transporte` int(20) NOT NULL,
  `refrigerio` int(20) NOT NULL,
  `equipos` int(20) NOT NULL,
  `alquileres` int(20) NOT NULL,
  `extras` int(20) NOT NULL,
  `fotografos` int(20) NOT NULL,
  `camarografos` int(20) NOT NULL,
  `asistentes` int(20) NOT NULL,
  `maquilladores` int(20) NOT NULL,
  `estilistas` int(20) NOT NULL,
  `coordinadores` int(20) NOT NULL,
  `experiencia` int(20) NOT NULL,
  `complicado` int(20) NOT NULL,
  `complejo` int(20) NOT NULL,
  `administrador` int(20) NOT NULL,
  `organizador` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `gastos`
-- 

INSERT INTO `gastos` VALUES (1, 56, 67, 12, 34, 0, 34, 56, 12, 23, 34, 23, 45, 1278, 78, 9, 67);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `modelos`
-- 

CREATE TABLE `modelos` (
  `cedula` int(34) NOT NULL,
  `nombre` varchar(34) NOT NULL,
  `edad` varchar(34) NOT NULL,
  `estado` varchar(34) NOT NULL,
  `ciudad` varchar(34) NOT NULL,
  `telefono` varchar(34) NOT NULL,
  `codi` varchar(34) NOT NULL,
  `naci` varchar(34) NOT NULL,
  `metro` varchar(34) NOT NULL,
  `altura` varchar(34) NOT NULL,
  `color` varchar(34) NOT NULL,
  `tipo_pelo` varchar(34) NOT NULL,
  `busto` varchar(34) NOT NULL,
  `cintura` varchar(34) NOT NULL,
  `cadera` varchar(34) NOT NULL,
  `color_pelo` varchar(34) NOT NULL,
  `foto` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  PRIMARY KEY  (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `modelos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `precios`
-- 

CREATE TABLE `precios` (
  `id` int(20) NOT NULL,
  `llamadas` varchar(12) NOT NULL,
  `emails` varchar(12) NOT NULL,
  `reunion_c` varchar(12) NOT NULL,
  `p_vestuario` varchar(12) NOT NULL,
  `p_maquillaje` varchar(12) NOT NULL,
  `extras` varchar(12) NOT NULL,
  `montaje` varchar(12) NOT NULL,
  `horas` varchar(12) NOT NULL,
  `desmontaje` varchar(12) NOT NULL,
  `extras_pro` varchar(12) NOT NULL,
  `retoque` varchar(12) NOT NULL,
  `edicion` varchar(12) NOT NULL,
  `correccion` varchar(12) NOT NULL,
  `reun_c_post` varchar(12) NOT NULL,
  `entrega` varchar(12) NOT NULL,
  `llamadas_post` varchar(12) NOT NULL,
  `email_post` varchar(12) NOT NULL,
  `iva` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `precios`
-- 

INSERT INTO `precios` VALUES (1, '23', '45', '23', '56', '783', '34', '45', '67', '23', '56', '45', '23', '45', '23', '56', '34', '56', 16);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `presupuesto`
-- 

CREATE TABLE `presupuesto` (
  `id_p` int(10) NOT NULL auto_increment,
  `ci_c` varchar(100) NOT NULL,
  `paquete` varchar(12) NOT NULL,
  `modo` varchar(12) NOT NULL,
  `plan` varchar(12) NOT NULL,
  `llamadas` varchar(12) NOT NULL,
  `emails` varchar(12) NOT NULL,
  `reunion_c` varchar(12) NOT NULL,
  `p_vestuario` varchar(12) NOT NULL,
  `p_maquillaje` varchar(12) NOT NULL,
  `extras` varchar(12) NOT NULL,
  `montaje` varchar(12) NOT NULL,
  `horas` varchar(12) NOT NULL,
  `desmontaje` varchar(12) NOT NULL,
  `extras_pro` varchar(12) NOT NULL,
  `retoque` varchar(12) NOT NULL,
  `edicion` varchar(12) NOT NULL,
  `correccion` varchar(12) NOT NULL,
  `reun_c_post` varchar(12) NOT NULL,
  `entrega` varchar(12) NOT NULL,
  `llamadas_post` varchar(12) NOT NULL,
  `email_post` varchar(12) NOT NULL,
  PRIMARY KEY  (`id_p`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `presupuesto`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proveedores`
-- 

CREATE TABLE `proveedores` (
  `naci` varchar(12) NOT NULL,
  `razon` varchar(34) NOT NULL,
  `ci_r` int(100) NOT NULL,
  `nombre_r` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `rif` varchar(12) NOT NULL,
  `cod_a` int(5) NOT NULL,
  `estado` varchar(54) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  PRIMARY KEY  (`ci_r`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `proveedores`
-- 

INSERT INTO `proveedores` VALUES ('E', 'API', 23622892, 'yohanna padrino', '453-45-23', 'programadora', 234234, 'N-23231231-2', 414, '15', 'Baruta');
INSERT INTO `proveedores` VALUES ('E', 'sdfsfd', 23622891, 'jose padrino', '231-23-12', 'Tecnico', 405005, 'C-23424112-3', 424, '7', 'Mariara');
INSERT INTO `proveedores` VALUES ('E', 'DoydCorazon', 17530786, 'nercy', '234-23-41', 'cantante', 23423423, 'N-39293900-2', 424, '6', 'Upata');
INSERT INTO `proveedores` VALUES ('E', 'Ncmikdf', 25317711, 'domingo', '345-41-23', 'fotografo', 3234234, 'D-34234234-2', 414, '5', 'SocopÃ³');
INSERT INTO `proveedores` VALUES ('E', 'sahkimusic', 13231231, 'shakira', '234-23-41', 'cantante', 2147483647, 'C-32423423-4', 426, '4', 'Guanta');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `registro_p`
-- 

CREATE TABLE `registro_p` (
  `razon` varchar(34) NOT NULL,
  `nombre_p` varchar(20) NOT NULL,
  `id_p` int(50) NOT NULL auto_increment,
  `id_c` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `plan` varchar(50) NOT NULL,
  `paquete` varchar(50) NOT NULL,
  `modo` varchar(50) NOT NULL,
  `oferta` varchar(50) NOT NULL,
  `compra` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_p`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `registro_p`
-- 

INSERT INTO `registro_p` VALUES ('DoydCorazon', 'nercy padrino', 1, '17530786', '234234', '2017-02-09', '', 'QuinceaÃ±eras', '', 'Premium', 'Foto');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(13) NOT NULL auto_increment,
  `nombre_usuario` varchar(10) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `pregunta` varchar(89) NOT NULL,
  `respuesta` varchar(89) NOT NULL,
  `ciuser` varchar(67) NOT NULL,
  `nombre` varchar(67) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'Nercyta', 'padrino', 'Comida Favorita', 'pizza', '17530786', 'nercy');
INSERT INTO `usuarios` VALUES (2, 'Vikttorly', 'qwerty', 'CanciÃ³n preferida', 'mess', '25132257', 'victor');
