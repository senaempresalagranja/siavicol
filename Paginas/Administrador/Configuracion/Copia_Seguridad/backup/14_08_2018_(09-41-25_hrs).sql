SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS siavicol;

USE siavicol;

DROP TABLE IF EXISTS alimentacion;

CREATE TABLE `alimentacion` (
  `idAlimentacion` bigint(20) NOT NULL AUTO_INCREMENT,
  `idEncasetamiento` bigint(20) NOT NULL,
  `idArticulo` bigint(20) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  PRIMARY KEY (`idAlimentacion`),
  KEY `idEncasetamiento` (`idEncasetamiento`),
  KEY `idArticulo` (`idArticulo`),
  CONSTRAINT `alimentacion_ibfk_1` FOREIGN KEY (`idEncasetamiento`) REFERENCES `encasetamiento` (`idEncasetamiento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO alimentacion VALUES("1","1","1","12","2018-03-02","10:54:29");



DROP TABLE IF EXISTS articulos;

CREATE TABLE `articulos` (
  `idArticulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `idTipoArticulo` bigint(20) NOT NULL,
  `idMarca` bigint(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `UnidadMedida` varchar(30) NOT NULL,
  PRIMARY KEY (`idArticulo`),
  KEY `idTipoArticulo` (`idTipoArticulo`),
  KEY `idMarca` (`idMarca`),
  KEY `idMarca_2` (`idMarca`),
  CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE,
  CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`idTipoArticulo`) REFERENCES `tipoarticulos` (`idTipoArticulo`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO articulos VALUES("1","1","1","Consentrado","BULTOS ");



DROP TABLE IF EXISTS encasetamiento;

CREATE TABLE `encasetamiento` (
  `idEncasetamiento` bigint(20) NOT NULL AUTO_INCREMENT,
  `idGalpon` bigint(20) NOT NULL,
  `IdManual` bigint(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `NumeroSemanaVida` int(11) NOT NULL,
  PRIMARY KEY (`idEncasetamiento`),
  KEY `idGalpon` (`idGalpon`),
  KEY `idraza` (`IdManual`),
  CONSTRAINT `encasetamiento_ibfk_1` FOREIGN KEY (`idGalpon`) REFERENCES `galpon` (`idGalpon`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO encasetamiento VALUES("1","1","1","2018-02-05","2018-03-31","212","78");



DROP TABLE IF EXISTS galpon;

CREATE TABLE `galpon` (
  `idGalpon` bigint(11) NOT NULL AUTO_INCREMENT,
  `NombreGalpon` varchar(30) NOT NULL,
  `ExtensionGalpon` int(11) NOT NULL,
  `CantidadAnimales` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL,
  PRIMARY KEY (`idGalpon`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO galpon VALUES("1","SENA 1","30","240","Inactivo");



DROP TABLE IF EXISTS inventarios;

CREATE TABLE `inventarios` (
  `idinventario` bigint(20) NOT NULL AUTO_INCREMENT,
  `idArticulo` bigint(20) NOT NULL,
  `Novedad` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idinventario`),
  KEY `idArticulo` (`idArticulo`),
  KEY `idTposNovedad` (`Novedad`),
  CONSTRAINT `inventarios_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO inventarios VALUES("1","1","Entrada","2017-12-27","02:59:26","50");
INSERT INTO inventarios VALUES("2","1","Entrada","2018-03-02","10:54:14","63");
INSERT INTO inventarios VALUES("3","1","Salida","2018-03-02","10:54:29","-12");



DROP TABLE IF EXISTS manuales;

CREATE TABLE `manuales` (
  `IdManual` bigint(20) NOT NULL AUTO_INCREMENT,
  `NombreManual` varchar(50) NOT NULL,
  PRIMARY KEY (`IdManual`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO manuales VALUES("1","Hy-Line-BROWN");



DROP TABLE IF EXISTS marcas;

CREATE TABLE `marcas` (
  `idMarca` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO marcas VALUES("1","ITALCOL PONEDORA");



DROP TABLE IF EXISTS mortalidad;

CREATE TABLE `mortalidad` (
  `idMortalidad` bigint(20) NOT NULL AUTO_INCREMENT,
  `idEncasetamiento` bigint(20) NOT NULL,
  `NumeroAves` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Motivo` varchar(50) NOT NULL,
  PRIMARY KEY (`idMortalidad`),
  KEY `idEncasetamiento` (`idEncasetamiento`),
  CONSTRAINT `mortalidad_ibfk_1` FOREIGN KEY (`idEncasetamiento`) REFERENCES `encasetamiento` (`idEncasetamiento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO mortalidad VALUES("1","1","1","2018-03-01","14:22:40","ESTRÃ‰S calorico");
INSERT INTO mortalidad VALUES("2","1","1","2018-02-20","09:36:50","EXCESO DE CALCIO");
INSERT INTO mortalidad VALUES("3","1","1","2018-03-31","14:50:46","ESTRES CALORICO");
INSERT INTO mortalidad VALUES("4","1","1","2018-04-03","10:51:15","INFARTO");
INSERT INTO mortalidad VALUES("5","1","1","2018-04-07","07:52:10","ESTRES CALORICO");



DROP TABLE IF EXISTS parametros;

CREATE TABLE `parametros` (
  `IdParametros` bigint(20) NOT NULL AUTO_INCREMENT,
  `IdManual` bigint(20) NOT NULL,
  `semana` int(11) NOT NULL,
  `valor_menor_produccion` float NOT NULL,
  `valor_mayor_produccion` float NOT NULL,
  `porcentaje_mortalidad` float NOT NULL,
  PRIMARY KEY (`IdParametros`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO parametros VALUES("1","1","18","4","14","0");
INSERT INTO parametros VALUES("2","1","19","24","38","0.1");
INSERT INTO parametros VALUES("3","1","20","45","72","0.1");
INSERT INTO parametros VALUES("4","1","21","75","86","0.2");
INSERT INTO parametros VALUES("5","1","22","87","92","0.3");
INSERT INTO parametros VALUES("6","1","23","92","94","0.3");
INSERT INTO parametros VALUES("7","1","24","92","95","0.4");
INSERT INTO parametros VALUES("8","1","25","93","95","0.4");
INSERT INTO parametros VALUES("9","1","26","94","96","0.5");
INSERT INTO parametros VALUES("10","1","27","95","96","0.6");
INSERT INTO parametros VALUES("11","1","28","95","96","0.6");
INSERT INTO parametros VALUES("12","1","29","95","96","20");
INSERT INTO parametros VALUES("13","1","30","94","96","0.7");
INSERT INTO parametros VALUES("14","1","31","94","96","0.8");
INSERT INTO parametros VALUES("15","1","32","94","95","0.9");
INSERT INTO parametros VALUES("16","1","33","94","95","0.9");
INSERT INTO parametros VALUES("17","1","34","94","95","1");
INSERT INTO parametros VALUES("18","1","35","94","95","1");
INSERT INTO parametros VALUES("19","1","36","93","94","1.1");
INSERT INTO parametros VALUES("20","1","37","93","94","1.2");
INSERT INTO parametros VALUES("21","1","38","93","94","1.2");
INSERT INTO parametros VALUES("22","1","39","92","93","1.3");
INSERT INTO parametros VALUES("23","1","40","92","93","1.4");
INSERT INTO parametros VALUES("24","1","41","91","93","1.4");
INSERT INTO parametros VALUES("25","1","42","91","92","1.5");
INSERT INTO parametros VALUES("26","1","43","90","92","1.6");
INSERT INTO parametros VALUES("27","1","44","90","92","1.6");
INSERT INTO parametros VALUES("28","1","45","89","91","1.7");
INSERT INTO parametros VALUES("29","1","46","89","91","1.8");
INSERT INTO parametros VALUES("30","1","47","88","90","1.9");
INSERT INTO parametros VALUES("31","1","48","88","90","1.9");
INSERT INTO parametros VALUES("32","1","49","88","90","2");
INSERT INTO parametros VALUES("33","1","50","88","89","2.1");
INSERT INTO parametros VALUES("34","1","51","87","89","2.1");
INSERT INTO parametros VALUES("35","1","52","87","89","2.2");
INSERT INTO parametros VALUES("36","1","53","87","88","2.3");
INSERT INTO parametros VALUES("37","1","54","87","88","2.3");
INSERT INTO parametros VALUES("38","1","55","86","88","2.4");
INSERT INTO parametros VALUES("39","1","56","86","87","2.5");
INSERT INTO parametros VALUES("40","1","57","85","87","2.6");
INSERT INTO parametros VALUES("41","1","58","85","87","2.6");
INSERT INTO parametros VALUES("42","1","59","85","87","2.7");
INSERT INTO parametros VALUES("43","1","60","84","86","2.8");
INSERT INTO parametros VALUES("44","1","61","84","86","2.9");
INSERT INTO parametros VALUES("45","1","62","83","86","2.9");
INSERT INTO parametros VALUES("46","1","63","83","85","3");
INSERT INTO parametros VALUES("47","1","64","83","85","3.1");
INSERT INTO parametros VALUES("48","1","65","83","85","3.2");
INSERT INTO parametros VALUES("49","1","66","82","84","3.3");
INSERT INTO parametros VALUES("50","1","67","81","84","3.4");
INSERT INTO parametros VALUES("51","1","68","81","83","3.5");
INSERT INTO parametros VALUES("52","1","69","81","82","3.7");
INSERT INTO parametros VALUES("53","1","70","80","82","3.8");
INSERT INTO parametros VALUES("54","1","71","79","81","3.9");
INSERT INTO parametros VALUES("55","1","72","79","81","4");
INSERT INTO parametros VALUES("56","1","73","78","80","4.1");
INSERT INTO parametros VALUES("57","1","74","77","80","4.3");
INSERT INTO parametros VALUES("58","1","75","76","79","4.4");
INSERT INTO parametros VALUES("59","1","76","76","78","4.5");
INSERT INTO parametros VALUES("60","1","77","75","77","4.7");
INSERT INTO parametros VALUES("61","1","78","75","77","4.8");
INSERT INTO parametros VALUES("62","1","79","74","77","5");
INSERT INTO parametros VALUES("63","1","80","74","76","5.1");
INSERT INTO parametros VALUES("64","1","81","74","76","5.3");
INSERT INTO parametros VALUES("65","1","82","74","76","5.4");
INSERT INTO parametros VALUES("66","1","83","73","75","5.6");
INSERT INTO parametros VALUES("67","1","84","73","75","5.7");
INSERT INTO parametros VALUES("68","1","85","73","75","5.9");
INSERT INTO parametros VALUES("69","1","86","73","75","6");
INSERT INTO parametros VALUES("70","1","87","72","74","6.2");
INSERT INTO parametros VALUES("71","1","88","72","74","6.3");
INSERT INTO parametros VALUES("72","1","89","72","74","6.5");
INSERT INTO parametros VALUES("73","1","90","72","74","5");



DROP TABLE IF EXISTS produccion;

CREATE TABLE `produccion` (
  `idProduccion` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `CantidadTipoJumbo` int(11) NOT NULL,
  PRIMARY KEY (`idProduccion`),
  KEY `idEncasetamiento` (`idEncasetamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

INSERT INTO produccion VALUES("1","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-05","09:11:00","77","10","32","7","31","7","0","0");
INSERT INTO produccion VALUES("2","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-05","15:17:17","54","0","38","9","7","0","0","0");
INSERT INTO produccion VALUES("3","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-06","09:01:35","120","8","69","10","36","5","0","0");
INSERT INTO produccion VALUES("4","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-06","14:02:47","41","1","24","11","3","2","1","0");
INSERT INTO produccion VALUES("5","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-07","09:08:40","85","2","40","10","30","5","0","0");
INSERT INTO produccion VALUES("6","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-07","14:09:02","58","0","40","9","9","0","0","0");
INSERT INTO produccion VALUES("7","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-08","11:21:15","86","3","40","12","26","8","0","0");
INSERT INTO produccion VALUES("8","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-08","14:06:50","51","1","33","10","8","0","0","0");
INSERT INTO produccion VALUES("9","1","LEIDY KATETIN LABRADOR VASQUEZ","2018-02-09","10:40:04","76","1","30","3","32","11","0","0");
INSERT INTO produccion VALUES("10","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-09","15:04:56","79","1","50","12","15","2","0","0");
INSERT INTO produccion VALUES("11","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-10","09:07:01","45","0","30","3","12","0","0","0");
INSERT INTO produccion VALUES("12","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-10","14:10:25","96","0","47","15","30","4","0","0");
INSERT INTO produccion VALUES("13","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-11","09:07:06","65","0","30","11","21","3","0","0");
INSERT INTO produccion VALUES("14","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-11","14:05:38","77","0","42","12","21","2","0","0");
INSERT INTO produccion VALUES("15","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-12","09:02:14","61","0","27","3","24","7","0","0");
INSERT INTO produccion VALUES("16","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-12","15:05:42","90","0","45","12","29","4","0","0");
INSERT INTO produccion VALUES("17","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-13","11:17:41","73","0","37","8","24","4","0","0");
INSERT INTO produccion VALUES("18","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-14","02:05:42","58","0","27","14","16","1","0","0");
INSERT INTO produccion VALUES("19","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-14","16:18:30","54","9","27","20","5","2","0","0");
INSERT INTO produccion VALUES("20","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-15","09:29:45","54","9","27","20","5","2","0","0");
INSERT INTO produccion VALUES("21","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-15","14:26:21","48","9","25","17","5","1","0","0");
INSERT INTO produccion VALUES("22","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-16","11:18:24","33","0","17","12","3","1","0","0");
INSERT INTO produccion VALUES("23","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-17","09:07:16","14","0","4","8","2","0","0","0");
INSERT INTO produccion VALUES("24","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-17","14:08:23","23","0","16","5","2","0","0","0");
INSERT INTO produccion VALUES("25","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-18","09:10:04","7","0","1","2","4","0","0","0");
INSERT INTO produccion VALUES("26","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-18","14:11:15","6","0","4","2","0","0","0","0");
INSERT INTO produccion VALUES("27","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-19","09:06:21","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("28","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-19","14:08:07","16","0","6","8","1","1","0","0");
INSERT INTO produccion VALUES("29","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-20","09:10:27","3","0","0","3","0","0","0","0");
INSERT INTO produccion VALUES("30","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-20","14:11:34","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("31","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-21","09:06:51","7","0","4","2","1","0","0","0");
INSERT INTO produccion VALUES("32","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-21","14:07:49","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("33","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-22","09:09:31","1","0","1","0","0","0","0","0");
INSERT INTO produccion VALUES("34","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-22","14:10:29","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("35","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-23","09:11:26","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("36","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-02-24","09:04:30","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("37","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-24","14:03:38","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("38","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-25","09:06:20","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("39","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-25","14:08:37","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("40","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-26","09:09:44","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("41","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-26","14:10:43","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("42","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-27","09:11:49","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("43","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-27","14:12:25","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("44","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-28","09:14:23","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("45","1","LEIDY KATERIN LABRADOR VASQUEZ	","2018-02-28","14:15:19","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("46","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-01","09:37:32","2","0","2","0","0","0","0","0");
INSERT INTO produccion VALUES("47","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-02","09:36:41","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("48","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-02","14:28:54","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("49","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-03","09:29:46","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("50","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-03-03","14:35:36","9","0","2","6","1","0","0","0");
INSERT INTO produccion VALUES("51","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-03-04","09:38:41","5","0","1","2","2","0","0","0");
INSERT INTO produccion VALUES("52","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-03-04","14:40:07","8","0","0","8","0","0","0","0");
INSERT INTO produccion VALUES("53","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-05","09:41:23","18","0","9","8","1","0","0","0");
INSERT INTO produccion VALUES("54","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-03-05","14:43:10","6","0","3","2","1","0","0","0");
INSERT INTO produccion VALUES("55","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-03-01","14:44:54","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("56","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-02-13","14:49:27","59","0","38","9","12","0","0","0");
INSERT INTO produccion VALUES("57","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-02-16","14:53:14","63","0","28","28","6","1","0","0");
INSERT INTO produccion VALUES("58","1","LEIDY KATERIN LABRADOR VASQUEZ ","2018-02-23","14:54:21","0","0","0","0","0","0","0","0");
INSERT INTO produccion VALUES("59","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-06","09:23:25","26","0","14","6","5","1","0","0");
INSERT INTO produccion VALUES("60","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-06","16:13:49","14","1","9","4","1","0","0","0");
INSERT INTO produccion VALUES("61","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-08","09:58:34","51","0","29","8","12","2","0","0");
INSERT INTO produccion VALUES("62","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-08","14:03:18","13","0","10","2","1","0","0","0");
INSERT INTO produccion VALUES("63","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-07","10:06:27","32","0","15","10","7","0","0","0");
INSERT INTO produccion VALUES("64","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-07","14:09:24","24","0","11","5","8","0","0","0");
INSERT INTO produccion VALUES("65","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-09","09:02:51","39","0","19","4","10","6","0","0");
INSERT INTO produccion VALUES("66","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-09","15:04:14","36","0","20","9","7","0","0","0");
INSERT INTO produccion VALUES("67","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-10","15:06:12","16","0","9","2","5","0","0","0");
INSERT INTO produccion VALUES("68","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-10","09:07:58","51","0","24","7","20","0","0","0");
INSERT INTO produccion VALUES("69","1","LEIDY KATERIN LABRADOR VASQUEZLEIDY KATERIN LABRADOR VASQUEZ","2018-03-11","09:13:12","101","0","50","7","36","8","0","0");
INSERT INTO produccion VALUES("70","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-11","15:14:51","36","0","19","3","14","0","0","0");
INSERT INTO produccion VALUES("71","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-12","15:15:42","45","0","23","4","15","3","0","0");
INSERT INTO produccion VALUES("72","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-12","10:16:46","41","0","12","3","22","4","0","0");
INSERT INTO produccion VALUES("73","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-13","09:30:30","57","0","30","0","17","10","0","0");
INSERT INTO produccion VALUES("74","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-13","14:35:45","56","0","31","1","21","3","0","0");
INSERT INTO produccion VALUES("75","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-14","09:37:29","88","0","37","6","36","9","0","0");
INSERT INTO produccion VALUES("76","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-14","14:43:06","47","0","22","5","20","0","0","0");
INSERT INTO produccion VALUES("77","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-15","09:50:10","90","0","35","3","35","17","0","0");
INSERT INTO produccion VALUES("78","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-15","14:55:21","54","0","24","5","21","4","0","0");
INSERT INTO produccion VALUES("79","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-16","09:32:39","54","0","23","0","19","12","0","0");
INSERT INTO produccion VALUES("80","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-16","14:34:46","34","0","12","3","13","6","0","0");
INSERT INTO produccion VALUES("81","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-17","09:35:59","75","0","30","4","31","10","0","0");
INSERT INTO produccion VALUES("82","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-17","14:36:55","49","0","25","4","17","3","0","0");
INSERT INTO produccion VALUES("83","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-18","09:38:09","83","0","41","3","37","2","0","0");
INSERT INTO produccion VALUES("84","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-18","14:40:05","87","0","42","5","28","12","0","0");
INSERT INTO produccion VALUES("85","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-19","09:42:26","81","0","34","5","32","10","0","0");
INSERT INTO produccion VALUES("86","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-19","14:43:59","73","0","32","3","35","3","0","0");
INSERT INTO produccion VALUES("87","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-20","09:46:24","79","1","23","2","41","13","0","0");
INSERT INTO produccion VALUES("88","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-20","14:47:56","71","0","33","4","27","7","0","0");
INSERT INTO produccion VALUES("89","1","LEIDY  KATERIN LABRADOR VASQUEZ","2018-03-21","09:49:44","91","0","30","0","46","15","0","0");
INSERT INTO produccion VALUES("90","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-21","15:34:09","62","0","30","0","27","5","0","0");
INSERT INTO produccion VALUES("91","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-22","14:43:45","62","0","30","0","27","5","0","0");
INSERT INTO produccion VALUES("92","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-21","14:52:08","62","0","30","0","27","5","0","0");
INSERT INTO produccion VALUES("93","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-22","09:55:04","94","0","37","2","48","7","0","0");
INSERT INTO produccion VALUES("94","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-23","09:59:03","76","0","29","2","35","10","0","0");
INSERT INTO produccion VALUES("95","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-23","15:01:43","81","0","36","2","38","5","0","0");
INSERT INTO produccion VALUES("96","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-24","09:04:20","87","0","29","2","42","14","0","0");
INSERT INTO produccion VALUES("97","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-24","14:07:51","79","0","32","7","36","4","0","0");
INSERT INTO produccion VALUES("98","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-25","09:24:13","76","0","25","0","46","5","0","0");
INSERT INTO produccion VALUES("99","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-25","14:26:06","62","0","22","0","37","3","0","0");
INSERT INTO produccion VALUES("100","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-26","09:27:40","94","0","37","0","47","10","0","0");
INSERT INTO produccion VALUES("101","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-26","15:41:38","84","0","39","0","43","2","0","0");
INSERT INTO produccion VALUES("102","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-27","09:43:47","89","0","36","0","34","19","0","0");
INSERT INTO produccion VALUES("103","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-27","14:46:56","100","0","44","0","37","19","0","0");
INSERT INTO produccion VALUES("104","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-28","09:48:59","62","0","30","0","15","17","0","0");
INSERT INTO produccion VALUES("105","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-28","14:49:58","111","0","65","0","42","4","0","0");
INSERT INTO produccion VALUES("106","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-29","09:53:39","73","0","32","0","32","9","0","0");
INSERT INTO produccion VALUES("107","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-29","15:55:12","80","0","42","0","36","2","0","0");
INSERT INTO produccion VALUES("108","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-30","09:56:28","87","0","32","0","50","5","0","0");
INSERT INTO produccion VALUES("109","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-30","14:59:53","75","0","42","0","31","2","0","0");
INSERT INTO produccion VALUES("110","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-31","09:22:47","73","0","32","0","35","6","0","0");
INSERT INTO produccion VALUES("111","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-03-31","14:23:32","47","0","22","0","24","1","0","0");
INSERT INTO produccion VALUES("112","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-01","09:26:13","58","0","22","0","32","4","0","0");
INSERT INTO produccion VALUES("113","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-01","14:28:49","65","0","30","5","30","0","0","0");
INSERT INTO produccion VALUES("114","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-02","09:31:29","105","0","39","8","38","20","0","0");
INSERT INTO produccion VALUES("115","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-02","14:32:14","63","0","34","1","25","3","0","0");
INSERT INTO produccion VALUES("116","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-03","09:33:59","92","0","29","5","47","11","0","0");
INSERT INTO produccion VALUES("117","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-03","14:35:28","54","0","25","1","26","2","0","0");
INSERT INTO produccion VALUES("118","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-04","09:36:21","71","0","28","3","29","11","0","0");
INSERT INTO produccion VALUES("119","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-04","14:37:21","61","0","26","1","0","34","0","0");
INSERT INTO produccion VALUES("120","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-05","09:39:35","125","0","49","4","59","13","0","0");
INSERT INTO produccion VALUES("121","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-05","14:40:20","43","0","21","6","13","3","0","0");
INSERT INTO produccion VALUES("122","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-06","09:44:28","102","0","36","3","56","7","0","0");
INSERT INTO produccion VALUES("123","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-06","14:45:10","47","0","19","0","24","4","0","0");
INSERT INTO produccion VALUES("124","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-07","09:50:21","94","0","35","0","46","13","0","0");
INSERT INTO produccion VALUES("125","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-07","15:52:27","65","0","27","0","35","3","0","0");
INSERT INTO produccion VALUES("126","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-08","10:36:41","114","0","38","7","45","24","0","0");
INSERT INTO produccion VALUES("127","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-08","14:37:55","48","0","21","2","22","3","0","0");
INSERT INTO produccion VALUES("128","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-09","09:39:01","83","0","40","0","40","3","0","0");
INSERT INTO produccion VALUES("129","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-09","14:39:42","58","0","20","5","29","4","0","0");
INSERT INTO produccion VALUES("130","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-10","09:41:31","86","0","28","1","45","12","0","0");
INSERT INTO produccion VALUES("131","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-10","15:42:53","73","0","36","5","25","7","0","0");
INSERT INTO produccion VALUES("132","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-11","09:45:14","81","0","22","3","36","20","0","0");
INSERT INTO produccion VALUES("133","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-11","15:46:03","87","0","47","3","30","7","0","0");
INSERT INTO produccion VALUES("134","1","LEIDY KATERIN LABRADOR VASQUEZ","2018-04-12","09:48:23","89","0","45","2","42","0","0","0");



DROP TABLE IF EXISTS tipoarticulos;

CREATE TABLE `tipoarticulos` (
  `idTipoArticulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`idTipoArticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tipoarticulos VALUES("1","ALIMENTO BALANCEADO");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idUsuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrePersona` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rolUsuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombreUsuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO usuarios VALUES("1","ADOLFO NAVARRO","ADMINISTRADOR","admin","2847531a849ef90caceefd914517b0bb");
INSERT INTO usuarios VALUES("2","APRENDIZ CONSULTA","USUARIO_CONSULTA","CONSU","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("3","APRENDIZ REG","USUARIO_REGISTRO","REGISTRO","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("4","LINA ROCIO VARGAS MENDOZA","ADMINISTRADOR","LINA VARGAS","2e90c01388845cd30ca2e503539e8cc8");



SET FOREIGN_KEY_CHECKS=1;