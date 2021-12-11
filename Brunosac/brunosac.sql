-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 06:18:45
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `brunosac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `razonSocial` varchar(200) NOT NULL,
  `ruc` bigint(20) NOT NULL,
  `direccion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `razonSocial`, `ruc`, `direccion`) VALUES
(1, 'REPRESENTACIONES DIERA S.A.C.', 20553476462, ' Av Javier Prado Oeste, 595 Magdalena del Mar, Cercado de Lima 15076'),
(2, 'MODAS LOREN EIRL', 20543248984, 'Av. dos de Mayo 1002, San Isidro 15073'),
(3, 'BI GRAND CONFECCIONES S.A.C.', 20553856451, 'Av. Mariscal Andres de Sta. Cruz 898, Miraflores 15073'),
(4, 'ARTROSCOPICTRAUMA S.A.C.', 20538856674, 'Av. Gral. Salaverry 694, Jesús María 15072');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradaproducto`
--

CREATE TABLE `entradaproducto` (
  `idEntProd` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idRegPro` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `numeroFactura` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradaproducto`
--

INSERT INTO `entradaproducto` (`idEntProd`, `fecha`, `idRegPro`, `descripcion`, `cantidad`, `idProveedor`, `numeroFactura`) VALUES
(27, '2021-10-12', 1, 'motor de 500w', 5, 2, '0000001'),
(29, '2021-10-13', 11, 'area de soporte', 2, 3, '0000002'),
(30, '2021-11-02', 11, 'cable calidad 30', 8, 2, '0000003'),
(31, '2021-11-10', 10, 'area de soporte', 5, 3, '0000004'),
(32, '2021-11-10', 13, 'recepcion', 6, 1, '0000005'),
(33, '2021-11-10', 13, 'area electrica', 4, 4, '0000006'),
(34, '2021-11-18', 9, 'demo', 4, 3, '0000007'),
(35, '2021-11-27', 1, 'oficina', 8, 1, '0000008'),
(36, '2021-11-28', 9, 'oficina 2C', 10, 4, '0000009'),
(37, '2021-11-29', 1, 'Almace 2B', 11, 1, '00000010'),
(38, '2021-12-01', 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting', 10, 3, '00000011');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idInventario` int(11) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idInventario`, `codigo`, `nombre`, `precio`, `stock`) VALUES
(1, 'M01', 'Máquina Roscadora modelo 1224', 20.5, 110),
(2, 'R01', 'Roscadora modelo 535', 23.5, 85),
(3, 'M02', 'Máquina automática de fusión a tope V160 CNC 50MM-160MM', 30.5, 17),
(4, 'M03', 'Máquina de fusión a tope hidráulica V160 BEE 50MM-160MM', 16.5, 18),
(5, 'J01', 'Juego Peines Tarrajas Truper 13083 1-1/2', 18.5, 51),
(6, 'P01', 'Peine Ridgid Para Tarraja 1 Npt R12', 17.5, 80),
(7, 'A01', 'Anillos y mordazas de la serie estándar para MegaPress® de ½” a 2”', 40.5, 45),
(8, 'M04', 'Mordazas compactas para MegaPress® de ½ in - 1 in', 15.5, 35),
(9, 'M05', 'Máquina para fregaderos K-40', 45, 79),
(10, 'C01', 'Cortatubos Press Snap™ para tubo de suelo', 60, 52),
(11, 'L01', 'Limpiador de chorro de agua KJ-3100', 30, 12),
(13, 'R02', 'Recortacables ACSR Modelo 87', 66, 70),
(14, 'M06', 'motor6 hidráulica V160 BEE 50MM', 81.88, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `razonSocial` varchar(200) NOT NULL,
  `ruc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `razonSocial`, `ruc`) VALUES
(1, 'REPARACION PARA MOTORES ELECTRICOS S.A.C', 20552334036),
(2, 'MANUFACTURA DE METALES Y ALUMINIO RECORD', 20100074371),
(3, 'INDUSTRIAL CROMOTEX S A', 20100083281),
(4, 'TECNICAS METALICAS INGENIEROS S.A.C.', 20101145868),
(5, 'AUSA ADUANAS S.A.', 20102027010),
(6, 'MAQUINARIAS S.A.', 20160286068);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrpproducto`
--

CREATE TABLE `registrpproducto` (
  `idRegPro` int(11) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrpproducto`
--

INSERT INTO `registrpproducto` (`idRegPro`, `codigo`, `nombre`, `precio`) VALUES
(1, 'M01', 'Máquina Roscadora modelo 1224', 20.5),
(2, 'R01', 'Roscadora modelo 535', 23.5),
(3, 'M02', 'Máquina automática de fusión a tope V160 CNC 50MM-160MM', 30.5),
(4, 'M03', 'Máquina de fusión a tope hidráulica V160 BEE 50MM-160MM', 16.5),
(5, 'J01', 'Juego Peines Tarrajas Truper 13083 1-1/2', 18.5),
(6, 'P01', 'Peine Ridgid Para Tarraja 1 Npt R12', 17.5),
(7, 'A01', 'Anillos y mordazas de la serie estándar para MegaPress® de ½” a 2”', 40.5),
(8, 'M04', 'Mordazas compactas para MegaPress® de ½ in - 1 in', 15.5),
(9, 'M05', 'Máquina para fregaderos K-40', 45),
(10, 'C01', 'Cortatubos Press Snap™ para tubo de suelo', 60),
(11, 'L01', 'Limpiador de chorro de agua KJ-3100', 30),
(13, 'R02', 'Recortacables ACSR Modelo 87', 66),
(14, 'M06', 'motor6 hidráulica V160 BEE 50MM', 81.88);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `idSalida` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idRegPro` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `numeroFactura` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`idSalida`, `fecha`, `idRegPro`, `descripcion`, `cantidad`, `idCliente`, `numeroFactura`) VALUES
(1, '2021-10-17', 8, 'cliente, MODAS', 5, 2, '0000001'),
(2, '2021-10-17', 6, 'cliente BI GRAND', 4, 3, '0000002'),
(3, '2021-10-18', 7, 'cliente Artros', 5, 4, '0000003'),
(7, '2021-10-18', 9, 'cliente Artro', 5, 4, '0000004'),
(8, '2021-11-07', 1, 'Metro', 4, 1, '0000005'),
(9, '2021-11-07', 8, 'demos', 7, 1, '0000006'),
(10, '2021-11-08', 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting', 5, 2, '0000007'),
(11, '2021-11-08', 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting', 8, 1, '0000008'),
(12, '2021-12-05', 5, 'demo', 4, 1, '0000009'),
(13, '2021-12-10', 9, 'demo 2', 1, 1, '00000010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'bruno', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `entradaproducto`
--
ALTER TABLE `entradaproducto`
  ADD PRIMARY KEY (`idEntProd`),
  ADD KEY `idRegPro` (`idRegPro`) USING BTREE,
  ADD KEY `entradaProducto-proveedor` (`idProveedor`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idInventario`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `registrpproducto`
--
ALTER TABLE `registrpproducto`
  ADD PRIMARY KEY (`idRegPro`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`idSalida`),
  ADD KEY `salidaProCliente` (`idCliente`),
  ADD KEY `salidaProProduc` (`idRegPro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entradaproducto`
--
ALTER TABLE `entradaproducto`
  MODIFY `idEntProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idInventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registrpproducto`
--
ALTER TABLE `registrpproducto`
  MODIFY `idRegPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `idSalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradaproducto`
--
ALTER TABLE `entradaproducto`
  ADD CONSTRAINT `entradaProducto-proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`),
  ADD CONSTRAINT `entradaProducto-registroProducto` FOREIGN KEY (`idRegPro`) REFERENCES `registrpproducto` (`idRegPro`);

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `salidaProCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `salidaProProduc` FOREIGN KEY (`idRegPro`) REFERENCES `registrpproducto` (`idRegPro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
