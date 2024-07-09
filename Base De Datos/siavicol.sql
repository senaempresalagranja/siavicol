-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2017 a las 03:16:15
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siavicol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentacion`
--

CREATE TABLE `alimentacion` (
  `idAlimentacion` bigint(20) NOT NULL,
  `idEncasetamiento` bigint(20) NOT NULL,
  `idArticulo` bigint(20) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` bigint(20) NOT NULL,
  `idTipoArticulo` bigint(20) NOT NULL,
  `idMarca` bigint(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `UnidadMedida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encasetamiento`
--

CREATE TABLE `encasetamiento` (
  `idEncasetamiento` bigint(20) NOT NULL,
  `idGalpon` bigint(20) NOT NULL,
  `IdManual` bigint(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `NumeroSemanaVida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galpon`
--

CREATE TABLE `galpon` (
  `idGalpon` bigint(11) NOT NULL,
  `NombreGalpon` varchar(30) NOT NULL,
  `ExtensionGalpon` int(11) NOT NULL,
  `CantidadAnimales` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `idinventario` bigint(20) NOT NULL,
  `idArticulo` bigint(20) NOT NULL,
  `Novedad` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

CREATE TABLE `manuales` (
  `IdManual` bigint(20) NOT NULL,
  `NombreManual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manuales`
--

INSERT INTO `manuales` (`IdManual`, `NombreManual`) VALUES
(1, 'Hy-Line-BROWN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` bigint(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mortalidad`
--

CREATE TABLE `mortalidad` (
  `idMortalidad` bigint(20) NOT NULL,
  `idEncasetamiento` bigint(20) NOT NULL,
  `NumeroAves` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Motivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `IdParametros` bigint(20) NOT NULL,
  `IdManual` bigint(20) NOT NULL,
  `semana` int(11) NOT NULL,
  `valor_menor_produccion` float NOT NULL,
  `valor_mayor_produccion` float NOT NULL,
  `porcentaje_mortalidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`IdParametros`, `IdManual`, `semana`, `valor_menor_produccion`, `valor_mayor_produccion`, `porcentaje_mortalidad`) VALUES
(1, 1, 18, 4, 14, 0),
(2, 1, 19, 24, 38, 0.1),
(3, 1, 20, 45, 72, 0.1),
(4, 1, 21, 75, 86, 0.2),
(5, 1, 22, 87, 92, 0.3),
(6, 1, 23, 92, 94, 0.3),
(7, 1, 24, 92, 95, 0.4),
(8, 1, 25, 93, 95, 0.4),
(9, 1, 26, 94, 96, 0.5),
(10, 1, 27, 95, 96, 0.6),
(11, 1, 28, 95, 96, 0.6),
(12, 1, 29, 95, 96, 20),
(13, 1, 30, 94, 96, 0.7),
(14, 1, 31, 94, 96, 0.8),
(15, 1, 32, 94, 95, 0.9),
(16, 1, 33, 94, 95, 0.9),
(17, 1, 34, 94, 95, 1),
(18, 1, 35, 94, 95, 1),
(19, 1, 36, 93, 94, 1.1),
(20, 1, 37, 93, 94, 1.2),
(21, 1, 38, 93, 94, 1.2),
(22, 1, 39, 92, 93, 1.3),
(23, 1, 40, 92, 93, 1.4),
(24, 1, 41, 91, 93, 1.4),
(25, 1, 42, 91, 92, 1.5),
(26, 1, 43, 90, 92, 1.6),
(27, 1, 44, 90, 92, 1.6),
(28, 1, 45, 89, 91, 1.7),
(29, 1, 46, 89, 91, 1.8),
(30, 1, 47, 88, 90, 1.9),
(31, 1, 48, 88, 90, 1.9),
(32, 1, 49, 88, 90, 2),
(33, 1, 50, 88, 89, 2.1),
(34, 1, 51, 87, 89, 2.1),
(35, 1, 52, 87, 89, 2.2),
(36, 1, 53, 87, 88, 2.3),
(37, 1, 54, 87, 88, 2.3),
(38, 1, 55, 86, 88, 2.4),
(39, 1, 56, 86, 87, 2.5),
(40, 1, 57, 85, 87, 2.6),
(41, 1, 58, 85, 87, 2.6),
(42, 1, 59, 85, 87, 2.7),
(43, 1, 60, 84, 86, 2.8),
(44, 1, 61, 84, 86, 2.9),
(45, 1, 62, 83, 86, 2.9),
(46, 1, 63, 83, 85, 3),
(47, 1, 64, 83, 85, 3.1),
(48, 1, 65, 83, 85, 3.2),
(49, 1, 66, 82, 84, 3.3),
(50, 1, 67, 81, 84, 3.4),
(51, 1, 68, 81, 83, 3.5),
(52, 1, 69, 81, 82, 3.7),
(53, 1, 70, 80, 82, 3.8),
(54, 1, 71, 79, 81, 3.9),
(55, 1, 72, 79, 81, 4),
(56, 1, 73, 78, 80, 4.1),
(57, 1, 74, 77, 80, 4.3),
(58, 1, 75, 76, 79, 4.4),
(59, 1, 76, 76, 78, 4.5),
(60, 1, 77, 75, 77, 4.7),
(61, 1, 78, 75, 77, 4.8),
(62, 1, 79, 74, 77, 5),
(63, 1, 80, 74, 76, 5.1),
(64, 1, 81, 74, 76, 5.3),
(65, 1, 82, 74, 76, 5.4),
(66, 1, 83, 73, 75, 5.6),
(67, 1, 84, 73, 75, 5.7),
(68, 1, 85, 73, 75, 5.9),
(69, 1, 86, 73, 75, 6),
(70, 1, 87, 72, 74, 6.2),
(71, 1, 88, 72, 74, 6.3),
(72, 1, 89, 72, 74, 6.5),
(73, 1, 90, 72, 74, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `idProduccion` bigint(20) NOT NULL,
  `idEncasetamiento` bigint(20) NOT NULL,
  `Reponsable` varchar(90) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Total_huevos` int(11) NOT NULL,
  `CantidadHuevosNoComerciales` int(11) NOT NULL,
  `CantidadTipoA` int(11) NOT NULL,
  `CantidadTipoB` int(11) NOT NULL,
  `CantidadTipoAA` int(11) NOT NULL,
  `CantidadTipoAAA` int(11) NOT NULL,
  `CantidadTipoC` int(11) NOT NULL,
  `CantidadTipoJumbo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoarticulos`
--

CREATE TABLE `tipoarticulos` (
  `idTipoArticulo` bigint(20) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` bigint(20) NOT NULL,
  `nombrePersona` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rolUsuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombreUsuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombrePersona`, `rolUsuario`, `nombreUsuario`, `contrasena`) VALUES
(1, 'ADOLFO NAVARRO', 'ADMINISTRADOR', 'admin', '2847531a849ef90caceefd914517b0bb'),
(2, 'APRENDIZ CONSULTA', 'USUARIO_CONSULTA', 'CONSU', 'd9b1d7db4cd6e70935368a1efb10e377'),
(3, 'APRENDIZ REG', 'USUARIO_REGISTRO', 'REGISTRO', 'd9b1d7db4cd6e70935368a1efb10e377');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD PRIMARY KEY (`idAlimentacion`),
  ADD KEY `idEncasetamiento` (`idEncasetamiento`),
  ADD KEY `idArticulo` (`idArticulo`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idTipoArticulo` (`idTipoArticulo`),
  ADD KEY `idMarca` (`idMarca`),
  ADD KEY `idMarca_2` (`idMarca`);

--
-- Indices de la tabla `encasetamiento`
--
ALTER TABLE `encasetamiento`
  ADD PRIMARY KEY (`idEncasetamiento`),
  ADD KEY `idGalpon` (`idGalpon`),
  ADD KEY `idraza` (`IdManual`);

--
-- Indices de la tabla `galpon`
--
ALTER TABLE `galpon`
  ADD PRIMARY KEY (`idGalpon`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`idinventario`),
  ADD KEY `idArticulo` (`idArticulo`),
  ADD KEY `idTposNovedad` (`Novedad`);

--
-- Indices de la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD PRIMARY KEY (`IdManual`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD PRIMARY KEY (`idMortalidad`),
  ADD KEY `idEncasetamiento` (`idEncasetamiento`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`IdParametros`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`idProduccion`),
  ADD KEY `idEncasetamiento` (`idEncasetamiento`);

--
-- Indices de la tabla `tipoarticulos`
--
ALTER TABLE `tipoarticulos`
  ADD PRIMARY KEY (`idTipoArticulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  MODIFY `idAlimentacion` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encasetamiento`
--
ALTER TABLE `encasetamiento`
  MODIFY `idEncasetamiento` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `galpon`
--
ALTER TABLE `galpon`
  MODIFY `idGalpon` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `idinventario` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `manuales`
--
ALTER TABLE `manuales`
  MODIFY `IdManual` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  MODIFY `idMortalidad` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parametros`
--
ALTER TABLE `parametros`
  MODIFY `IdParametros` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `idProduccion` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoarticulos`
--
ALTER TABLE `tipoarticulos`
  MODIFY `idTipoArticulo` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD CONSTRAINT `alimentacion_ibfk_1` FOREIGN KEY (`idEncasetamiento`) REFERENCES `encasetamiento` (`idEncasetamiento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`idTipoArticulo`) REFERENCES `tipoarticulos` (`idTipoArticulo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `encasetamiento`
--
ALTER TABLE `encasetamiento`
  ADD CONSTRAINT `encasetamiento_ibfk_1` FOREIGN KEY (`idGalpon`) REFERENCES `galpon` (`idGalpon`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD CONSTRAINT `inventarios_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD CONSTRAINT `mortalidad_ibfk_1` FOREIGN KEY (`idEncasetamiento`) REFERENCES `encasetamiento` (`idEncasetamiento`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
