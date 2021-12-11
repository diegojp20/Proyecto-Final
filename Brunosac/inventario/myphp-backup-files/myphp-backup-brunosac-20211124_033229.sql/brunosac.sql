CREATE DATABASE IF NOT EXISTS `brunosac`;

USE `brunosac`;

SET foreign_key_checks = 0;

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `razonSocial` varchar(200) NOT NULL,
  `ruc` bigint(20) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `cliente` VALUES (1,"REPRESENTACIONES DIERA S.A.C.",20553476462),
(2,"MODAS LOREN EIRL",20543248984),
(3,"BI GRAND CONFECCIONES S.A.C.",20553856451),
(4,"ARTROSCOPICTRAUMA S.A.C.",20538856674);


DROP TABLE IF EXISTS `entradaproducto`;

CREATE TABLE `entradaproducto` (
  `idEntProd` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `idRegPro` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `numeroFactura` varchar(20) NOT NULL,
  PRIMARY KEY (`idEntProd`),
  KEY `idRegPro` (`idRegPro`) USING BTREE,
  KEY `entradaProducto-proveedor` (`idProveedor`),
  CONSTRAINT `entradaProducto-proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`),
  CONSTRAINT `entradaProducto-registroProducto` FOREIGN KEY (`idRegPro`) REFERENCES `registrpproducto` (`idRegPro`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

INSERT INTO `entradaproducto` VALUES (27,"2021-10-13",1,"motor de 500w",5,2,0000001),
(29,"2021-10-13",11,"area de soporte",2,3,0000002),
(30,"2021-11-02",11,"cable calidad 30",8,2,0000003),
(31,"2021-10-10",10,"area de soporte",5,3,0000004),
(32,"2021-10-10",13,"recepcion",6,1,0000005),
(33,"2021-10-10",13,"area electrica",4,4,0000006),
(34,"2021-10-18",9,"demo",4,3,0000007),
(35,"2021-11-07",1,"oficina",8,1,0000008),
(36,"2021-11-07",9,"oficina 2C",10,4,0000009),
(37,"2021-11-07",1,"Almace 2B",11,1,00000010),
(38,"2021-11-08",14,"Lorem Ipsum is simply dummy text of the printing and typesetting",10,3,00000011);


DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `idInventario` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`idInventario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO `inventario` VALUES (1,"M01","Máquina Roscadora modelo 1224","20.5",110),
(2,"R01","Roscadora modelo 535","23.5",85),
(3,"M02","Máquina automática de fusión a tope V160 CNC 50MM-160MM","30.5",17),
(4,"M03","Máquina de fusión a tope hidráulica V160 BEE 50MM-160MM","16.5",18),
(5,"J01","Juego Peines Tarrajas Truper 13083 1-1/2","18.5",55),
(6,"P01","Peine Ridgid Para Tarraja 1 Npt R12","17.5",80),
(7,"A01","Anillos y mordazas de la serie estándar para MegaPress® de ½” a 2”","40.5",45),
(8,"M04","Mordazas compactas para MegaPress® de ½ in - 1 in","15.5",35),
(9,"M05","Máquina para fregaderos K-40",45,80),
(10,"C01","Cortatubos Press Snap™ para tubo de suelo",60,52),
(11,"L01","Limpiador de chorro de agua KJ-3100",30,12),
(13,"R02","Recortacables ACSR Modelo 87",66,70),
(14,"M06","motor6 hidráulica V160 BEE 50MM","81.88",15);


DROP TABLE IF EXISTS `proveedores`;

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL AUTO_INCREMENT,
  `razonSocial` varchar(200) NOT NULL,
  `ruc` bigint(20) NOT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `proveedores` VALUES (1,"REPARACION PARA MOTORES ELECTRICOS S.A.C",20552334036),
(2,"MANUFACTURA DE METALES Y ALUMINIO RECORD",20100074371),
(3,"INDUSTRIAL CROMOTEX S A",20100083281),
(4,"TECNICAS METALICAS INGENIEROS S.A.C.",20101145868),
(5,"AUSA ADUANAS S.A.",20102027010),
(6,"MAQUINARIAS S.A.",20160286068);


DROP TABLE IF EXISTS `registrpproducto`;

CREATE TABLE `registrpproducto` (
  `idRegPro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY (`idRegPro`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO `registrpproducto` VALUES (1,"M01","Máquina Roscadora modelo 1224","20.5"),
(2,"R01","Roscadora modelo 535","23.5"),
(3,"M02","Máquina automática de fusión a tope V160 CNC 50MM-160MM","30.5"),
(4,"M03","Máquina de fusión a tope hidráulica V160 BEE 50MM-160MM","16.5"),
(5,"J01","Juego Peines Tarrajas Truper 13083 1-1/2","18.5"),
(6,"P01","Peine Ridgid Para Tarraja 1 Npt R12","17.5"),
(7,"A01","Anillos y mordazas de la serie estándar para MegaPress® de ½” a 2”","40.5"),
(8,"M04","Mordazas compactas para MegaPress® de ½ in - 1 in","15.5"),
(9,"M05","Máquina para fregaderos K-40",45),
(10,"C01","Cortatubos Press Snap™ para tubo de suelo",60),
(11,"L01","Limpiador de chorro de agua KJ-3100",30),
(13,"R02","Recortacables ACSR Modelo 87",66),
(14,"M06","motor6 hidráulica V160 BEE 50MM","81.88");


DROP TABLE IF EXISTS `salidas`;

CREATE TABLE `salidas` (
  `idSalida` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `idRegPro` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `numeroFactura` varchar(200) NOT NULL,
  PRIMARY KEY (`idSalida`),
  KEY `salidaProCliente` (`idCliente`),
  KEY `salidaProProduc` (`idRegPro`),
  CONSTRAINT `salidaProCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  CONSTRAINT `salidaProProduc` FOREIGN KEY (`idRegPro`) REFERENCES `registrpproducto` (`idRegPro`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `salidas` VALUES (1,"2021-10-17",8,"cliente MODAS",5,2,0000001),
(2,"2021-10-17",6,"cliente BI GRAND",4,3,0000002),
(3,"2021-10-18",7,"cliente Artros",5,4,0000003),
(7,"2021-10-18",9,"cliente Artro",5,4,0000004),
(8,"2021-11-07",1,"Metro",4,1,0000005),
(9,"2021-11-07",8,"demos",7,1,0000006),
(10,"2021-11-08",14,"Lorem Ipsum is simply dummy text of the printing and typesetting",5,2,0000007),
(11,"2021-11-08",14,"Lorem Ipsum is simply dummy text of the printing and typesetting",8,1,0000008);


DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` VALUES (1,"bruno",123);


SET foreign_key_checks = 1;
