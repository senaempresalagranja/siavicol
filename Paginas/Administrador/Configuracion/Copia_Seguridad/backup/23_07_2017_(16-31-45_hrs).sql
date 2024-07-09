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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO alimentacion VALUES("1","3","1","30","2017-07-05","21:22:16");
INSERT INTO alimentacion VALUES("2","3","1","30","2017-07-05","21:22:16");
INSERT INTO alimentacion VALUES("3","1","1","60","2017-07-05","21:23:04");
INSERT INTO alimentacion VALUES("4","1","1","60","2017-07-05","21:23:04");
INSERT INTO alimentacion VALUES("5","1","1","50","2017-07-05","21:24:01");
INSERT INTO alimentacion VALUES("6","3","1","30","2017-07-05","21:24:55");
INSERT INTO alimentacion VALUES("7","3","1","30","2017-07-05","21:24:55");
INSERT INTO alimentacion VALUES("8","3","1","30","2017-07-05","21:24:55");
INSERT INTO alimentacion VALUES("9","3","1","30","2017-07-05","21:24:55");
INSERT INTO alimentacion VALUES("10","3","1","30","2017-07-05","21:24:55");
INSERT INTO alimentacion VALUES("11","3","1","50","2017-07-05","21:27:49");
INSERT INTO alimentacion VALUES("12","3","1","50","2017-07-05","21:27:49");
INSERT INTO alimentacion VALUES("13","3","1","900","2017-07-05","21:27:49");
INSERT INTO alimentacion VALUES("14","3","1","60","2017-07-05","21:30:40");
INSERT INTO alimentacion VALUES("15","3","1","6","2017-07-05","21:30:40");
INSERT INTO alimentacion VALUES("16","3","1","600","2017-07-05","21:32:13");
INSERT INTO alimentacion VALUES("17","3","1","600","2017-07-05","21:32:13");
INSERT INTO alimentacion VALUES("18","3","1","600","2017-07-05","21:32:13");
INSERT INTO alimentacion VALUES("19","3","1","100","2017-07-05","21:36:21");
INSERT INTO alimentacion VALUES("20","3","1","30","2017-07-05","21:37:29");
INSERT INTO alimentacion VALUES("21","3","1","100000","2017-07-05","21:37:29");
INSERT INTO alimentacion VALUES("22","3","1","61","2017-07-05","21:39:44");
INSERT INTO alimentacion VALUES("23","3","1","80","2017-07-05","21:39:53");
INSERT INTO alimentacion VALUES("24","3","1","80","2017-07-05","21:39:53");
INSERT INTO alimentacion VALUES("25","3","1","80","2017-07-05","21:39:53");
INSERT INTO alimentacion VALUES("26","3","3","50","2017-07-05","21:43:15");
INSERT INTO alimentacion VALUES("27","3","3","50","2017-07-05","21:44:26");
INSERT INTO alimentacion VALUES("28","3","3","50","2017-07-05","21:56:24");
INSERT INTO alimentacion VALUES("29","3","3","50","2017-07-05","21:57:42");
INSERT INTO alimentacion VALUES("30","3","3","20","2017-07-05","21:59:51");
INSERT INTO alimentacion VALUES("31","3","3","20","2017-07-05","21:59:51");
INSERT INTO alimentacion VALUES("32","3","3","20","2017-07-05","21:59:51");
INSERT INTO alimentacion VALUES("33","3","3","20","2017-07-05","21:59:51");
INSERT INTO alimentacion VALUES("34","3","3","20","2017-07-05","21:59:51");
INSERT INTO alimentacion VALUES("35","3","3","20","2017-07-05","21:59:51");
INSERT INTO alimentacion VALUES("36","3","1","5","2017-07-05","22:50:01");
INSERT INTO alimentacion VALUES("37","3","1","2","2017-07-06","11:10:40");



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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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

INSERT INTO encasetamiento VALUES("1","1","1","2017-07-15","2018-07-17","250","16");



DROP TABLE IF EXISTS galpon;

CREATE TABLE `galpon` (
  `idGalpon` bigint(11) NOT NULL AUTO_INCREMENT,
  `NombreGalpon` varchar(30) NOT NULL,
  `ExtensionGalpon` int(11) NOT NULL,
  `CantidadAnimales` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL,
  PRIMARY KEY (`idGalpon`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO galpon VALUES("1","GALPON SENA","31","250","Inactivo");
INSERT INTO galpon VALUES("2","ALEXIS","30","240","Activo");



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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO inventarios VALUES("1","1","Entrada","2017-06-21","07:44:28","4000");
INSERT INTO inventarios VALUES("2","1","Entrada","2017-06-21","08:16:33","30");
INSERT INTO inventarios VALUES("3","1","Entrada","2017-06-21","08:16:33","30");
INSERT INTO inventarios VALUES("4","1","Salida","2017-06-21","08:16:33","-30");
INSERT INTO inventarios VALUES("5","1","Salida","2017-06-21","08:16:33","-30");
INSERT INTO inventarios VALUES("6","1","Salida","2017-06-21","08:16:33","-30");
INSERT INTO inventarios VALUES("7","1","Salida","2017-06-21","08:16:33","-30");
INSERT INTO inventarios VALUES("8","1","Salida","2017-06-21","08:16:33","-30");
INSERT INTO inventarios VALUES("9","1","Salida","2017-06-21","08:16:33","-30");
INSERT INTO inventarios VALUES("10","1","Entrada","2017-06-21","08:18:51","300");
INSERT INTO inventarios VALUES("11","2","Entrada","2017-06-21","08:23:46","50");
INSERT INTO inventarios VALUES("12","2","Salida","2017-06-21","08:23:46","-20");
INSERT INTO inventarios VALUES("13","2","Salida","2017-06-21","08:23:46","-20");
INSERT INTO inventarios VALUES("14","2","Salida","2017-06-21","08:27:11","-8");
INSERT INTO inventarios VALUES("15","2","Salida","2017-06-21","08:27:36","-12");
INSERT INTO inventarios VALUES("16","1","Salida","2017-07-05","21:22:16","-30");
INSERT INTO inventarios VALUES("17","1","Salida","2017-07-05","21:22:16","-30");
INSERT INTO inventarios VALUES("18","1","Salida","2017-07-05","21:23:04","-60");
INSERT INTO inventarios VALUES("19","1","Salida","2017-07-05","21:23:04","-60");
INSERT INTO inventarios VALUES("20","1","Salida","2017-07-05","21:24:01","-50");
INSERT INTO inventarios VALUES("21","1","Salida","2017-07-05","21:24:55","-30");
INSERT INTO inventarios VALUES("22","1","Salida","2017-07-05","21:24:55","-30");
INSERT INTO inventarios VALUES("23","1","Salida","2017-07-05","21:24:55","-30");
INSERT INTO inventarios VALUES("24","1","Salida","2017-07-05","21:24:55","-30");
INSERT INTO inventarios VALUES("25","1","Salida","2017-07-05","21:24:55","-30");
INSERT INTO inventarios VALUES("26","1","Salida","2017-07-05","21:27:49","-50");
INSERT INTO inventarios VALUES("27","1","Salida","2017-07-05","21:27:49","-50");
INSERT INTO inventarios VALUES("28","1","Salida","2017-07-05","21:27:49","-900");
INSERT INTO inventarios VALUES("29","1","Salida","2017-07-05","21:30:40","-60");
INSERT INTO inventarios VALUES("30","1","Salida","2017-07-05","21:30:40","-6");
INSERT INTO inventarios VALUES("31","1","Salida","2017-07-05","21:32:13","-600");
INSERT INTO inventarios VALUES("32","1","Salida","2017-07-05","21:32:13","-600");
INSERT INTO inventarios VALUES("33","1","Salida","2017-07-05","21:32:13","-600");
INSERT INTO inventarios VALUES("34","1","Entrada","2017-07-05","21:36:05","50000");
INSERT INTO inventarios VALUES("35","1","Salida","2017-07-05","21:36:21","-100");
INSERT INTO inventarios VALUES("36","1","Entrada","2017-07-05","21:36:05","50000");
INSERT INTO inventarios VALUES("37","1","Salida","2017-07-05","21:37:29","-30");
INSERT INTO inventarios VALUES("38","1","Salida","2017-07-05","21:37:29","-100000");
INSERT INTO inventarios VALUES("39","1","Entrada","2017-07-05","21:36:05","20");
INSERT INTO inventarios VALUES("40","1","Salida","2017-07-05","21:39:44","-61");
INSERT INTO inventarios VALUES("41","1","Salida","2017-07-05","21:39:53","-80");
INSERT INTO inventarios VALUES("42","1","Salida","2017-07-05","21:39:53","-80");
INSERT INTO inventarios VALUES("43","1","Salida","2017-07-05","21:39:53","-80");
INSERT INTO inventarios VALUES("44","3","Entrada","2017-07-05","21:41:58","500");
INSERT INTO inventarios VALUES("45","3","Salida","2017-07-05","21:43:15","-50");
INSERT INTO inventarios VALUES("46","3","Salida","2017-07-05","21:44:26","-50");
INSERT INTO inventarios VALUES("47","3","Salida","2017-07-05","21:56:24","-50");
INSERT INTO inventarios VALUES("48","3","Salida","2017-07-05","21:57:42","-50");
INSERT INTO inventarios VALUES("49","3","Salida","2017-07-05","21:59:51","-20");
INSERT INTO inventarios VALUES("50","3","Salida","2017-07-05","21:59:51","-20");
INSERT INTO inventarios VALUES("51","3","Salida","2017-07-05","21:59:51","-20");
INSERT INTO inventarios VALUES("52","3","Salida","2017-07-05","21:59:51","-20");
INSERT INTO inventarios VALUES("53","3","Salida","2017-07-05","21:59:51","-20");
INSERT INTO inventarios VALUES("54","3","Salida","2017-07-05","21:59:51","-20");
INSERT INTO inventarios VALUES("55","3","Entrada","2017-07-05","22:06:56","5000");
INSERT INTO inventarios VALUES("56","3","Salida","2017-07-05","22:06:56","-5000");
INSERT INTO inventarios VALUES("57","3","Entrada","2017-07-05","22:06:56","50000");
INSERT INTO inventarios VALUES("58","3","Entrada","2017-07-05","22:06:56","500000000");
INSERT INTO inventarios VALUES("59","3","Salida","2017-07-05","22:06:56","-50693");
INSERT INTO inventarios VALUES("60","3","Salida","2017-07-05","22:06:56","-500000000");
INSERT INTO inventarios VALUES("61","3","Entrada","2017-07-05","22:06:56","5");
INSERT INTO inventarios VALUES("62","3","Salida","2017-07-05","22:06:56","-3");
INSERT INTO inventarios VALUES("63","1","Entrada","2017-07-05","10:18:13","300");
INSERT INTO inventarios VALUES("64","1","Salida","2017-07-05","10:18:13","-300");
INSERT INTO inventarios VALUES("65","1","Salida","2017-07-05","22:50:01","-35");
INSERT INTO inventarios VALUES("66","1","Salida","2017-07-06","11:10:40","-50");



DROP TABLE IF EXISTS manuales;

CREATE TABLE `manuales` (
  `IdManual` bigint(20) NOT NULL AUTO_INCREMENT,
  `NombreManual` varchar(50) NOT NULL,
  PRIMARY KEY (`IdManual`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO manuales VALUES("1","Hy-Line-BROWN");
INSERT INTO manuales VALUES("2","234234234");



DROP TABLE IF EXISTS marcas;

CREATE TABLE `marcas` (
  `idMarca` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO marcas VALUES("1","ALIMENTO BALANCEADO ");
INSERT INTO marcas VALUES("2","PAJARITO ");
INSERT INTO marcas VALUES("3","SENA 3");
INSERT INTO marcas VALUES("4","SENA");
INSERT INTO marcas VALUES("5","ALEXIS");
INSERT INTO marcas VALUES("6","ASDASD");



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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO mortalidad VALUES("1","4","30","2017-07-06","12:30:31","aborto ");
INSERT INTO mortalidad VALUES("2","4","10","2017-07-06","12:32:22","dfgdf");
INSERT INTO mortalidad VALUES("3","4","30","2017-07-06","12:33:56","cxvxdfgdf");
INSERT INTO mortalidad VALUES("4","4","30","2017-07-06","12:39:43","fsdfsd");
INSERT INTO mortalidad VALUES("5","4","30","2017-07-06","12:39:57","gccg");
INSERT INTO mortalidad VALUES("6","4","30","2017-07-06","13:20:33","jhvjhv");
INSERT INTO mortalidad VALUES("7","4","30","2017-07-06","13:20:33","jhvjhv");
INSERT INTO mortalidad VALUES("8","4","30","2017-07-06","13:20:33","jhvjhv");
INSERT INTO mortalidad VALUES("9","4","30","2017-07-06","13:20:33","jhvjhv");
INSERT INTO mortalidad VALUES("10","4","30","2017-07-06","13:20:33","jhvjhv");
INSERT INTO mortalidad VALUES("11","4","30","2017-07-06","13:20:33","jhvjhv");
INSERT INTO mortalidad VALUES("12","4","30","2017-07-06","13:20:33","jasdasd");
INSERT INTO mortalidad VALUES("13","3","20","2017-07-06","18:54:00","asdasdads");



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
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=latin1;

INSERT INTO produccion VALUES("1","1","ALEXI","2017-01-02","10:27:29","6","0","3","0","3","0","0","0");
INSERT INTO produccion VALUES("2","1","ALEXI","2017-01-02","22:28:22","9","0","3","0","3","0","3","0");
INSERT INTO produccion VALUES("3","1","ALEXI","2017-01-03","10:29:46","6","0","3","0","3","0","0","0");
INSERT INTO produccion VALUES("4","1","ALEXI","2017-01-03","22:30:48","17","0","6","0","6","0","5","0");
INSERT INTO produccion VALUES("5","1","ALEXI","2017-01-04","10:31:30","11","0","6","0","5","0","0","0");
INSERT INTO produccion VALUES("6","1","ALEXI","2017-01-04","22:33:41","21","0","10","0","10","1","0","0");
INSERT INTO produccion VALUES("7","1","ALEXI","2017-01-05","10:34:25","21","0","11","0","5","5","0","0");
INSERT INTO produccion VALUES("8","1","ALEXI","2017-01-05","22:35:18","10","0","5","0","5","0","0","0");
INSERT INTO produccion VALUES("9","1","ALEXI","2017-01-06","10:36:17","12","0","6","0","5","1","0","0");
INSERT INTO produccion VALUES("10","1","ALEXI","2017-01-06","22:37:46","34","0","14","5","10","5","0","0");
INSERT INTO produccion VALUES("11","1","ALEXI","2017-01-07","10:40:21","22","0","8","1","8","5","0","0");
INSERT INTO produccion VALUES("12","1","ALEXI","2017-01-07","22:42:06","32","0","12","0","10","0","10","0");
INSERT INTO produccion VALUES("13","1","ALEXI","2017-01-08","10:42:52","10","0","5","0","5","0","0","0");
INSERT INTO produccion VALUES("14","1","ALEXI","2017-01-08","22:43:36","7","0","3","1","3","0","0","0");
INSERT INTO produccion VALUES("15","1","ALEXI","2017-01-09","07:29:48","72","0","36","0","26","10","0","0");
INSERT INTO produccion VALUES("16","1","ALEXI","2017-01-09","19:31:23","46","0","25","0","5","2","14","0");
INSERT INTO produccion VALUES("17","1","ALEXI","2017-01-10","07:33:26","33","0","13","0","15","0","5","0");
INSERT INTO produccion VALUES("18","1","ALEXI","2017-01-10","19:34:34","58","0","20","8","13","6","9","2");
INSERT INTO produccion VALUES("19","1","ALEXI","2017-01-11","07:36:56","64","0","20","20","10","10","0","4");
INSERT INTO produccion VALUES("20","1","ALEXI","2017-01-11","19:38:17","47","0","12","0","12","20","3","0");
INSERT INTO produccion VALUES("21","1","ALEXI","2017-01-12","07:45:13","82","0","20","1","20","20","20","1");
INSERT INTO produccion VALUES("22","1","ALEXI","2017-01-12","19:46:10","37","0","10","10","10","2","5","0");
INSERT INTO produccion VALUES("23","1","ALEXI","2017-01-13","07:52:22","83","0","21","20","20","2","20","0");
INSERT INTO produccion VALUES("24","1","ALEXI","2017-01-13","19:54:14","64","0","20","20","20","2","2","0");
INSERT INTO produccion VALUES("25","1","ALEXI","2017-01-14","07:56:13","90","0","30","13","30","2","15","0");
INSERT INTO produccion VALUES("26","1","ALEXI","2017-01-14","19:59:06","9","0","3","0","3","0","1","2");
INSERT INTO produccion VALUES("27","1","ALEXI","2017-01-15","08:08:22","60","0","22","3","12","1","22","0");
INSERT INTO produccion VALUES("28","1","ALEXI","2017-01-15","20:09:15","50","0","10","10","10","10","10","0");
INSERT INTO produccion VALUES("29","1","ALEXI","2017-01-16","08:20:33","90","0","30","30","20","0","10","0");
INSERT INTO produccion VALUES("30","1","ALEXI","2017-01-16","20:21:18","50","0","10","10","10","0","20","0");
INSERT INTO produccion VALUES("31","1","ALEXI","2017-01-17","08:24:05","107","0","30","10","30","7","20","10");
INSERT INTO produccion VALUES("32","1","ALEXI","2017-01-17","20:25:44","71","0","20","11","20","0","20","0");
INSERT INTO produccion VALUES("33","1","ALEXI","2017-01-18","08:27:25","120","0","30","30","30","10","10","10");
INSERT INTO produccion VALUES("34","1","ALEXI","2017-01-18","20:28:47","11","0","5","1","2","2","1","0");
INSERT INTO produccion VALUES("35","1","ALEXI","2017-01-19","08:31:04","135","0","50","10","10","25","35","5");
INSERT INTO produccion VALUES("36","1","ALEXI","2017-01-19","20:33:56","21","0","10","2","5","2","2","0");
INSERT INTO produccion VALUES("37","1","ALEXI","2017-01-20","08:35:32","120","0","30","10","30","10","30","10");
INSERT INTO produccion VALUES("38","1","ALEXI","2017-01-20","20:37:52","63","0","20","10","10","10","10","3");
INSERT INTO produccion VALUES("39","1","ALEXI","2017-01-21","08:42:31","150","0","50","20","30","10","30","10");
INSERT INTO produccion VALUES("40","1","ALEXI","2017-01-21","20:45:51","42","0","10","5","10","10","5","2");
INSERT INTO produccion VALUES("41","1","ALEXI","2017-01-22","08:53:33","181","0","50","30","50","10","30","11");
INSERT INTO produccion VALUES("42","1","ALEXI","2017-01-22","20:54:51","28","0","8","5","8","1","5","1");
INSERT INTO produccion VALUES("43","1","ALEXI","2017-01-23","09:15:16","196","0","50","30","30","30","50","6");
INSERT INTO produccion VALUES("44","1","ALEXI","2017-01-23","21:27:07","30","10","10","10","10","0","0","0");
INSERT INTO produccion VALUES("45","1","ALEXI","2017-01-24","09:28:41","220","0","50","50","50","10","50","10");
INSERT INTO produccion VALUES("46","1","ALEXI","2017-01-24","21:30:26","31","0","10","1","10","0","10","0");
INSERT INTO produccion VALUES("47","1","ALEXI","2017-01-25","09:33:52","190","0","50","30","60","10","20","20");
INSERT INTO produccion VALUES("48","1","ALEXI","2017-01-25","21:35:15","24","0","10","3","3","3","3","2");
INSERT INTO produccion VALUES("49","1","ALEXI","2017-01-26","09:37:47","140","0","35","30","35","30","5","5");
INSERT INTO produccion VALUES("50","1","ALEXI","2017-01-26","21:39:18","35","0","20","5","5","0","5","0");
INSERT INTO produccion VALUES("51","1","ALEXI","2017-01-27","09:42:09","213","0","30","30","60","50","30","13");
INSERT INTO produccion VALUES("52","1","ALEXI","2017-01-27","21:43:37","50","10","10","10","10","10","10","0");
INSERT INTO produccion VALUES("53","1","ALEXI","2017-01-28","09:45:51","206","0","50","50","10","40","50","6");
INSERT INTO produccion VALUES("54","1","ALEXI","2017-01-28","21:47:55","44","0","14","10","10","0","10","0");
INSERT INTO produccion VALUES("55","1","ALEXI","2017-01-29","09:50:08","229","0","60","30","40","20","50","29");
INSERT INTO produccion VALUES("56","1","ALEXI","2017-01-29","21:51:57","22","0","5","5","5","2","5","0");
INSERT INTO produccion VALUES("57","1","ALEXI","2017-01-30","10:07:25","225","0","55","50","50","10","50","10");
INSERT INTO produccion VALUES("58","1","ALEXI","2017-01-30","22:08:30","35","0","10","5","10","5","5","0");
INSERT INTO produccion VALUES("59","1","ALEXI","2017-01-31","10:11:20","198","0","58","30","30","30","30","20");
INSERT INTO produccion VALUES("60","1","ALEXI","2017-01-31","22:14:05","27","0","5","5","5","5","5","2");
INSERT INTO produccion VALUES("61","1","ALEXI","2017-02-01","10:16:52","118","0","50","12","20","10","20","6");
INSERT INTO produccion VALUES("62","1","ALEXI","2017-02-01","22:18:46","118","0","50","12","20","10","20","6");
INSERT INTO produccion VALUES("63","1","ALEXI","2017-02-02","10:21:34","109","0","30","20","20","10","20","9");
INSERT INTO produccion VALUES("64","1","ALEXI","2017-02-02","22:22:41","109","0","30","20","20","10","20","9");
INSERT INTO produccion VALUES("65","1","ALEXI","2017-02-03","10:24:19","119","0","30","10","30","10","30","9");
INSERT INTO produccion VALUES("66","1","ALEXI","2017-02-03","22:26:01","119","0","30","10","30","10","30","9");
INSERT INTO produccion VALUES("67","1","ALEXI","2017-02-04","10:27:21","142","0","32","30","30","10","30","10");
INSERT INTO produccion VALUES("68","1","ALEXI","2017-02-04","22:28:17","143","0","33","30","30","10","30","10");
INSERT INTO produccion VALUES("69","1","ALEXI","2017-02-05","10:29:56","143","0","33","30","30","10","30","10");
INSERT INTO produccion VALUES("70","1","ALEXI","2017-02-05","22:31:04","142","0","32","30","30","10","30","10");
INSERT INTO produccion VALUES("71","1","ALEXI","2017-02-06","10:37:58","85","0","25","20","15","5","15","5");
INSERT INTO produccion VALUES("72","1","ALEXI","2017-02-06","22:39:17","85","0","25","20","15","5","15","5");
INSERT INTO produccion VALUES("73","1","ALEXI","2017-02-07","10:40:39","119","0","59","10","30","5","10","5");
INSERT INTO produccion VALUES("74","1","ALEXI","2017-02-07","22:41:17","119","0","59","10","30","5","10","5");
INSERT INTO produccion VALUES("75","1","ALEXI","2017-02-08","10:43:57","110","0","35","20","20","10","15","10");
INSERT INTO produccion VALUES("76","1","ALEXI","2017-02-08","22:45:09","111","0","36","20","20","10","15","10");
INSERT INTO produccion VALUES("77","1","ALEXI","2017-02-09","10:48:30","115","0","36","20","24","10","15","10");
INSERT INTO produccion VALUES("78","1","ALEXI","2017-02-09","22:49:32","115","0","36","20","24","10","15","10");
INSERT INTO produccion VALUES("79","1","ALEXI","2017-02-10","10:51:52","106","0","30","20","21","10","15","10");
INSERT INTO produccion VALUES("80","1","ALEXI","2017-02-10","22:52:42","106","0","30","20","21","10","15","10");
INSERT INTO produccion VALUES("81","1","ALEXI","2017-02-11","10:55:19","119","0","36","20","28","10","15","10");
INSERT INTO produccion VALUES("82","1","ALEXI","2017-02-11","22:56:16","120","0","36","20","28","10","15","11");
INSERT INTO produccion VALUES("83","1","ALEXI","2017-02-12","10:59:04","149","0","36","25","38","20","19","11");
INSERT INTO produccion VALUES("84","1","ALEXI","2017-02-12","22:59:55","149","0","36","25","38","20","19","11");
INSERT INTO produccion VALUES("85","1","ALEXI","2017-02-13","11:08:31","105","0","30","20","10","20","15","10");
INSERT INTO produccion VALUES("86","1","ALEXI","2017-02-13","23:09:58","105","0","30","20","10","20","15","10");
INSERT INTO produccion VALUES("87","1","ALEXI","2017-02-14","11:11:51","80","0","30","20","10","5","10","5");
INSERT INTO produccion VALUES("88","1","ALEXI","2017-02-14","23:12:56","80","0","30","20","10","5","10","5");
INSERT INTO produccion VALUES("89","1","ALEXI","2017-02-15","11:15:35","61","0","34","20","5","2","0","0");
INSERT INTO produccion VALUES("90","1","ALEXI","2017-02-15","23:17:15","61","0","34","20","5","2","0","0");
INSERT INTO produccion VALUES("91","1","ALEXI","2017-02-16","11:20:18","108","0","44","20","10","12","10","12");
INSERT INTO produccion VALUES("92","1","ALEXI","2017-02-16","23:21:12","108","0","44","20","10","12","10","12");
INSERT INTO produccion VALUES("93","1","ALEXI","2017-02-17","11:23:43","105","0","41","20","10","12","10","12");
INSERT INTO produccion VALUES("94","1","ALEXI","2017-02-17","23:24:29","105","0","41","20","10","12","10","12");
INSERT INTO produccion VALUES("95","1","ALEXI","2017-02-18","11:26:50","104","0","40","20","10","12","10","12");
INSERT INTO produccion VALUES("96","1","ALEXI","2017-02-18","23:27:43","104","0","40","20","10","12","10","12");
INSERT INTO produccion VALUES("97","1","ALEXI","2017-02-19","11:28:43","124","0","40","20","20","12","20","12");
INSERT INTO produccion VALUES("98","1","ALEXI","2017-02-19","23:29:34","123","0","40","20","20","12","20","11");
INSERT INTO produccion VALUES("99","1","ALEXI","2017-02-20","11:57:52","121","0","40","20","20","12","20","9");
INSERT INTO produccion VALUES("100","1","ALEXI","2017-02-20","23:58:43","121","0","40","20","20","12","20","9");
INSERT INTO produccion VALUES("101","1","ALEXI","2017-02-21","07:00:19","125","0","42","20","20","12","20","11");
INSERT INTO produccion VALUES("102","1","ALEXI","2017-02-21","19:01:21","115","0","32","20","20","12","20","11");
INSERT INTO produccion VALUES("103","1","ALEXI","2017-02-22","07:03:54","103","0","30","20","20","10","20","3");
INSERT INTO produccion VALUES("104","1","ALEXI","2017-02-22","19:06:07","140","0","45","20","30","20","20","5");
INSERT INTO produccion VALUES("105","1","ALEXI","2017-02-23","07:08:53","102","0","32","20","10","20","10","10");
INSERT INTO produccion VALUES("106","1","ALEXI","2017-02-23","19:10:09","124","0","34","20","20","20","20","10");
INSERT INTO produccion VALUES("107","1","ALEXI","2017-02-24","07:13:07","107","0","37","20","10","20","10","10");
INSERT INTO produccion VALUES("108","1","ALEXI","2017-02-24","19:14:31","132","0","42","20","20","20","20","10");
INSERT INTO produccion VALUES("109","1","ALEXI","2017-02-25","07:18:18","118","0","28","20","20","20","20","10");
INSERT INTO produccion VALUES("110","1","ALEXI","2017-02-25","19:19:31","122","0","28","20","22","20","20","12");
INSERT INTO produccion VALUES("111","1","ALEXI","2017-02-26","07:21:33","105","0","20","20","20","20","20","5");
INSERT INTO produccion VALUES("112","1","ALEXI","2017-02-26","19:23:04","131","0","50","30","20","5","21","5");
INSERT INTO produccion VALUES("113","1","ALEXI","2017-02-27","07:54:02","112","0","30","30","20","5","22","5");
INSERT INTO produccion VALUES("114","1","ALEXI","2017-02-27","19:56:11","123","0","40","30","20","5","23","5");
INSERT INTO produccion VALUES("115","1","ALEXI","2017-02-28","07:57:57","117","0","30","30","20","9","23","5");
INSERT INTO produccion VALUES("116","1","ALEXI","2017-02-28","19:59:29","105","0","30","30","20","5","15","5");
INSERT INTO produccion VALUES("117","1","ALEXI","2017-03-01","08:01:10","102","0","27","30","20","5","15","5");
INSERT INTO produccion VALUES("118","1","ALEXI","2017-03-01","20:02:38","126","0","41","30","20","5","25","5");
INSERT INTO produccion VALUES("119","1","ALEXI","2017-03-02","08:03:35","111","0","31","30","20","5","20","5");
INSERT INTO produccion VALUES("120","1","ALEXI","2017-03-02","20:04:40","115","0","31","30","20","9","20","5");
INSERT INTO produccion VALUES("121","1","ALEXI","2017-03-03","08:06:52","98","0","31","33","10","9","10","5");
INSERT INTO produccion VALUES("122","1","ALEXI","2017-03-03","20:09:01","124","0","31","33","20","15","20","5");
INSERT INTO produccion VALUES("123","1","ALEXI","2017-03-04","08:11:16","111","0","31","20","30","5","20","5");
INSERT INTO produccion VALUES("124","1","ALEXI","2017-03-04","20:12:59","110","0","30","20","30","5","20","5");
INSERT INTO produccion VALUES("125","1","ALEXI","2017-03-05","08:14:51","112","0","30","22","30","5","20","5");
INSERT INTO produccion VALUES("126","1","ALEXI","2017-03-05","20:15:33","114","0","32","22","30","5","20","5");
INSERT INTO produccion VALUES("127","1","ALEXI","2017-03-06","08:29:07","106","0","30","21","30","5","20","0");
INSERT INTO produccion VALUES("128","1","ALEXI","2017-03-06","20:30:28","119","0","40","21","30","5","20","3");
INSERT INTO produccion VALUES("129","1","ALEXI","2017-03-07","08:31:24","107","0","30","21","30","5","20","1");
INSERT INTO produccion VALUES("130","1","ALEXI","2017-03-07","20:32:37","111","0","40","21","20","10","20","0");
INSERT INTO produccion VALUES("131","1","ALEXI","2017-03-08","08:35:11","127","0","50","21","30","5","20","1");
INSERT INTO produccion VALUES("132","1","ALEXI","2017-03-08","20:37:43","101","0","30","20","30","1","20","0");
INSERT INTO produccion VALUES("133","1","ALEXI","2017-03-09","08:38:42","122","0","30","20","30","21","20","1");
INSERT INTO produccion VALUES("134","1","ALEXI","2017-03-09","20:39:49","101","0","30","20","30","1","20","0");
INSERT INTO produccion VALUES("135","1","ALEXI","2017-03-10","08:42:40","132","0","50","30","30","1","20","1");
INSERT INTO produccion VALUES("136","1","ALEXI","2017-03-10","20:43:42","99","0","30","18","30","1","20","0");
INSERT INTO produccion VALUES("137","1","ALEXI","2017-03-11","08:44:45","106","0","35","20","30","1","20","0");
INSERT INTO produccion VALUES("138","1","ALEXI","2017-03-11","20:46:13","120","0","35","30","30","1","20","4");
INSERT INTO produccion VALUES("139","1","ALEXI","2017-03-12","08:50:07","107","0","35","20","30","2","20","0");
INSERT INTO produccion VALUES("140","1","ALEXI","2017-03-12","20:52:11","120","0","40","30","28","2","20","0");
INSERT INTO produccion VALUES("141","1","ALEXI","2017-03-13","08:59:22","109","0","35","20","30","2","20","2");
INSERT INTO produccion VALUES("142","1","ALEXI","2017-03-13","21:02:55","109","0","35","20","30","2","20","2");
INSERT INTO produccion VALUES("143","1","ALEXI","2017-03-14","09:04:51","115","0","30","30","30","3","20","2");
INSERT INTO produccion VALUES("144","1","ALEXI","2017-03-14","21:06:39","111","0","30","30","30","1","20","0");
INSERT INTO produccion VALUES("145","1","ALEXI","2017-03-15","09:10:05","112","0","30","30","30","1","20","1");
INSERT INTO produccion VALUES("146","1","ALEXI","2017-03-15","21:10:51","112","0","30","30","30","1","20","1");
INSERT INTO produccion VALUES("147","1","ALEXI","2017-03-16","09:12:41","96","0","33","20","20","3","20","0");
INSERT INTO produccion VALUES("148","1","ALEXI","2017-03-16","21:14:11","126","0","33","30","30","3","30","0");
INSERT INTO produccion VALUES("149","1","ALEXI","2017-03-17","09:17:03","102","0","35","20","20","3","20","4");
INSERT INTO produccion VALUES("150","1","ALEXI","2017-03-17","21:18:58","119","0","35","30","20","3","27","4");
INSERT INTO produccion VALUES("151","1","ALEXI","2017-03-18","09:20:12","106","0","35","20","20","5","20","6");
INSERT INTO produccion VALUES("152","1","ALEXI","2017-03-18","21:21:07","105","0","35","20","20","5","20","5");
INSERT INTO produccion VALUES("153","1","ALEXI","2017-03-19","09:22:43","96","0","35","20","20","1","20","0");
INSERT INTO produccion VALUES("154","1","ALEXI","2017-03-19","21:24:16","120","0","37","20","20","13","20","10");
INSERT INTO produccion VALUES("155","1","ALEXI","2017-03-20","09:32:24","60","0","30","10","10","0","10","0");
INSERT INTO produccion VALUES("156","1","ALEXI","2017-03-20","21:34:09","120","0","40","30","20","5","20","5");
INSERT INTO produccion VALUES("157","1","ALEXI","2017-03-21","09:35:11","90","0","35","10","20","5","20","0");
INSERT INTO produccion VALUES("158","1","ALEXI","2017-03-21","21:36:49","120","0","45","30","20","5","20","0");
INSERT INTO produccion VALUES("159","1","ALEXI","2017-03-22","09:38:40","86","0","35","10","20","5","10","6");
INSERT INTO produccion VALUES("160","1","ALEXI","2017-03-22","21:39:36","110","0","35","30","20","5","20","0");
INSERT INTO produccion VALUES("161","1","ALEXI","2017-03-23","09:41:38","91","0","26","20","20","5","20","0");
INSERT INTO produccion VALUES("162","1","ALEXI","2017-03-23","21:42:31","116","0","35","30","20","5","20","6");
INSERT INTO produccion VALUES("163","1","ALEXI","2017-03-24","09:48:14","126","0","45","30","20","5","20","6");
INSERT INTO produccion VALUES("164","1","ALEXI","2017-03-24","21:49:07","96","0","25","20","20","5","20","6");
INSERT INTO produccion VALUES("165","1","ALEXI","2017-03-25","09:51:36","94","0","25","20","20","5","20","4");
INSERT INTO produccion VALUES("166","1","ALEXI","2017-03-25","21:53:53","130","0","35","20","30","10","30","5");
INSERT INTO produccion VALUES("167","1","ALEXI","2017-03-26","09:55:31","124","0","34","20","30","10","30","0");
INSERT INTO produccion VALUES("168","1","ALEXI","2017-03-26","21:57:16","98","0","25","20","18","10","20","5");
INSERT INTO produccion VALUES("169","1","ALEXI","2017-03-27","10:14:00","118","0","35","10","20","13","30","10");
INSERT INTO produccion VALUES("170","1","ALEXI","2017-03-27","22:16:39","103","0","25","20","20","8","30","0");
INSERT INTO produccion VALUES("171","1","ALEXI","2017-03-28","10:19:00","114","0","33","10","30","10","30","1");
INSERT INTO produccion VALUES("172","1","ALEXI","2017-03-28","22:19:55","114","0","33","10","30","10","30","1");
INSERT INTO produccion VALUES("173","1","ALEXI","2017-03-29","10:21:54","108","0","33","10","20","10","30","5");
INSERT INTO produccion VALUES("174","1","ALEXI","2017-03-29","22:22:58","109","0","33","10","20","10","30","6");
INSERT INTO produccion VALUES("175","1","ALEXI","2017-03-30","10:25:58","123","0","33","20","20","20","30","0");
INSERT INTO produccion VALUES("176","1","ALEXI","2017-03-30","22:27:13","97","0","33","8","20","10","20","6");
INSERT INTO produccion VALUES("177","1","ALEXI","2017-03-31","10:28:02","96","0","33","8","20","10","20","5");
INSERT INTO produccion VALUES("178","1","ALEXI","2017-03-31","22:29:34","126","0","43","28","20","10","20","5");
INSERT INTO produccion VALUES("179","1","ALEXI","2017-04-01","10:31:44","109","0","43","20","20","4","20","2");
INSERT INTO produccion VALUES("180","1","ALEXI","2017-04-01","22:32:48","107","0","43","20","20","2","20","2");
INSERT INTO produccion VALUES("181","1","ALEXI","2017-04-02","10:35:04","137","0","43","30","30","2","30","2");
INSERT INTO produccion VALUES("182","1","ALEXI","2017-04-02","22:36:05","86","0","20","20","10","20","10","6");
INSERT INTO produccion VALUES("183","1","ALEXI","2017-04-03","08:33:46","114","0","43","20","20","9","20","2");
INSERT INTO produccion VALUES("184","1","ALEXI","2017-04-03","20:35:27","77","0","20","4","25","6","20","2");
INSERT INTO produccion VALUES("185","1","ALEXI","2017-04-04","08:37:31","95","0","41","10","20","4","20","0");
INSERT INTO produccion VALUES("186","1","ALEXI","2017-04-04","20:38:53","125","0","41","30","30","2","20","2");
INSERT INTO produccion VALUES("187","1","ALEXI","2017-04-05","08:41:07","131","0","40","30","30","11","20","0");
INSERT INTO produccion VALUES("188","1","ALEXI","2017-04-05","20:44:12","99","0","41","30","10","5","10","3");
INSERT INTO produccion VALUES("189","1","ALEXI","2017-04-06","08:45:33","93","0","41","24","10","5","10","3");
INSERT INTO produccion VALUES("190","1","ALEXI","2017-04-06","20:50:44","119","0","41","20","30","6","20","2");
INSERT INTO produccion VALUES("191","1","ALEXI","2017-04-07","08:57:23","131","0","47","30","30","2","20","2");
INSERT INTO produccion VALUES("192","1","ALEXI","2017-04-07","20:58:43","89","0","25","20","20","2","20","2");
INSERT INTO produccion VALUES("193","1","ALEXI","2017-04-08","09:00:58","111","0","37","20","30","2","20","2");
INSERT INTO produccion VALUES("194","1","ALEXI","2017-04-08","21:01:56","114","0","40","20","30","2","20","2");
INSERT INTO produccion VALUES("195","1","ALEXI","2017-04-09","09:05:06","110","0","31","30","20","7","20","2");
INSERT INTO produccion VALUES("196","1","ALEXI","2017-04-09","21:06:03","100","0","30","20","30","0","20","0");



DROP TABLE IF EXISTS tipoarticulos;

CREATE TABLE `tipoarticulos` (
  `idTipoArticulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`idTipoArticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tipoarticulos VALUES("1","ALIMENTACION");
INSERT INTO tipoarticulos VALUES("2","COMIDA 23");
INSERT INTO tipoarticulos VALUES("3","ALIMENTACION 2");
INSERT INTO tipoarticulos VALUES("4","ASDASDA");
INSERT INTO tipoarticulos VALUES("5","ASDASDASD");
INSERT INTO tipoarticulos VALUES("6","ASDASD");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idUsuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrePersona` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rolUsuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombreUsuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO usuarios VALUES("4","Alexi Espinosa ","ADMINISTRADOR","Alexi_Admin","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("16","VALENTINA ESPINOSA","USUARIO_CONSULTA","VALENTINA es fea ","14e1b600b1fd579f47433b88e8d85291");
INSERT INTO usuarios VALUES("18","SFSDFSS","ADMINISTRADOR","DFSDFS","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("19","ALEXIS ESPINOSA VIDAL","USUARIO_REGISTRO","JUANITO ","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("20","JUANITO 123","ADMINISTRADOR","HOLA MUNDO","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("21","ANDREZ HENAO SALAZAR","USUARIO_CONSULTA","AFHENAO","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("22","CRISTIAN SERRANO ","USUARIO_REGISTRO","CRSERRANO","d9b1d7db4cd6e70935368a1efb10e377");
INSERT INTO usuarios VALUES("24","ADOLFO NAVARRO","ADMINISTRADOR","ADMIN","70873e8580c9900986939611618d7b1e");
INSERT INTO usuarios VALUES("25","PRUEBA","ADMINISTRADOR","PRUEBA","d9b1d7db4cd6e70935368a1efb10e377");



SET FOREIGN_KEY_CHECKS=1;