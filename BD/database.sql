-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 05:19:40
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idproducto` int(50) NOT NULL,
  `Tipo` int(5) NOT NULL,
  `Marca` int(5) NOT NULL,
  `Color` int(9) NOT NULL,
  `Talla` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idproducto`, `Tipo`, `Marca`, `Color`, `Talla`) VALUES
(121, 5, 2, 2, 1),
(231, 3, 2, 9, 4),
(312, 4, 3, 9, 4),
(412, 3, 4, 5, 1),
(555, 5, 3, 8, 3),
(676, 2, 2, 5, 2),
(1086, 3, 3, 4, 4),
(9890, 2, 3, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cedula` varchar(50) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre`, `telefono`, `direccion`) VALUES
('1071', 'Julian', '312512321', 'calle 6'),
('1085', 'Sebas', '3150283928', 'calle 13'),
('1086', 'Ana', '32051238', 'calle 22-5A'),
('1087', 'Pepe', '31231', 'calle 5'),
('1088', 'Daniel', '355122', 'calle 9'),
('10898', 'dfgh', '678', 'calle 22'),
('1090', 'Carmen', '31125231', 'calle 2'),
('1091', 'Diana', '51231', 'calle 12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `idColor` int(9) NOT NULL,
  `nombreColor` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`idColor`, `nombreColor`) VALUES
(1, 'azul'),
(2, 'amarillo'),
(3, 'rojo'),
(4, 'verde'),
(5, 'negro'),
(6, 'morado'),
(7, 'blanco'),
(8, 'gris'),
(9, 'cafe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(5) NOT NULL,
  `nombreMarca` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `nombreMarca`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Brahama'),
(4, 'Croidon'),
(5, 'Puma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codentrada` int(50) NOT NULL,
  `idprod` int(50) NOT NULL,
  `idprov` int(50) NOT NULL,
  `precio` varchar(50) COLLATE utf8_bin NOT NULL,
  `stock` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codentrada`, `idprod`, `idprov`, `precio`, `stock`) VALUES
(1, 676, 902, '215000', '20mil unidadess'),
(2, 1086, 521, '140000', '30mil unidades'),
(123, 555, 633, '159000', '22mil unidades'),
(321, 555, 633, '160000', '17mil unidades'),
(325, 121, 902, '230000', '13mil unidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(50) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(50) COLLATE utf8_bin NOT NULL,
  `web` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `nombre`, `telefono`, `direccion`, `web`) VALUES
(312, 'Alibaba', '3129423', 'cra 79', 'www.alibaba.com'),
(521, 'Closket', '31261232', 'cra 11', 'www.closket.com'),
(523, 'Amazon', '41257950', 'cra 8-11', 'www.amazon.com'),
(633, 'Chinelas', '4125903', 'cra 76', 'www.chinelas.com'),
(866, 'Nike', '31251232', 'cra 7-3', 'www.nike.com'),
(902, 'Parafarmic', '3199252', 'cra 12-6 ', 'www.parafarmic.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `idTalla` int(7) NOT NULL,
  `nombreTalla` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`idTalla`, `nombreTalla`) VALUES
(1, '28'),
(2, '30'),
(3, '32'),
(4, '34'),
(5, '36'),
(6, '38'),
(7, '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(5) NOT NULL,
  `nombreTipo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `nombreTipo`) VALUES
(1, 'Zapato-formal'),
(2, 'Tenis'),
(3, 'Tacones'),
(4, 'Botas'),
(5, 'Chanclas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL,
  `nick` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nick`, `telefono`, `tipo`) VALUES
(1, 'a@gmail.com', '$2y$10$GnuDIosHFxFnpYQPDzNXCO1zOjSOAZsKKkH3moP7gl0cQqLIvIsfu', 'Sebas7', '312423212', ''),
(2, 'qq@gmail.com', '$2y$10$QtXQxbtE2jI6jIyYFlRzIeQclgQkGV5u4LU6B05trkF5QHH2kR2w.', 'Sebas4', '3123213', ''),
(3, 'oo@gmail.com', '$2y$10$cr/BpKh7y/hqwpMcFxREYeZJv3Ub7I16xCA29O51uK4djFG.V3Nae', 'Vallejo', '312321', ''),
(4, 'jose@gmail.com', '$2y$10$XhniZD2oTIMYrP4oj/484eK/hj/QIGo618PS/WJR2nyq6WoMH2THO', 'Jose', '3123123', ''),
(5, 'm@gmail.com', '$2y$10$6/Zx.IXnWSGdBlfJZ8/63uls3olbMZA6cUUTalAUBgmVOtHCti3kO', 'User16', '1324123', ''),
(6, 'ww@gmail.com', '$2y$10$ePdQG3fhn/kG6zZycvdaCurfx/poLV6ChZ/WAItLWdahl7jbJt7mq', 'Sebas71', '312312', 'usuario'),
(7, 'qqq@gmail.com', '$2y$10$pQ0CD9T35bPahLHhXaPCH.vXMk561OD5g7jNrd89QAkkmMM3c6qAK', 'Sebas00', '312312', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idfactura` int(50) NOT NULL,
  `idproducto` int(50) NOT NULL,
  `cedcli` varchar(50) COLLATE utf8_bin NOT NULL,
  `fechaCompra` date NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_bin NOT NULL,
  `precio` varchar(50) COLLATE utf8_bin NOT NULL,
  `iva` varchar(50) COLLATE utf8_bin NOT NULL,
  `descuento` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idfactura`, `idproducto`, `cedcli`, `fechaCompra`, `cantidad`, `precio`, `iva`, `descuento`) VALUES
(321, 412, '1086', '2020-07-15', '90', '300000', '50000', '30000'),
(443, 231, '1086', '2020-07-01', '60', '500000', '3000', '380000'),
(523, 231, '1071', '2020-07-09', '20', '122', '1231', '1231'),
(699, 555, '1086', '2020-07-02', '55', '5500000', '30000', '1000000'),
(765, 121, '1091', '2020-07-01', '50', '553', '5234', '42343'),
(1091, 231, '1088', '2020-08-06', '123', '322', '123', '12323');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fk_color` (`Color`),
  ADD KEY `fk_marca` (`Marca`),
  ADD KEY `fk_talla` (`Talla`),
  ADD KEY `fk_tipo` (`Tipo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idColor`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codentrada`),
  ADD KEY `fk_idprod` (`idprod`),
  ADD KEY `fk_idprov` (`idprov`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`idTalla`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idfactura`),
  ADD KEY `fk_idproducto` (`idproducto`),
  ADD KEY `fk_cedcli` (`cedcli`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idproducto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9891;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `idColor` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codentrada` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4123;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `idTalla` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idfactura` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `fk_color` FOREIGN KEY (`Color`) REFERENCES `color` (`idColor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`Marca`) REFERENCES `marca` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_talla` FOREIGN KEY (`Talla`) REFERENCES `talla` (`idTalla`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`Tipo`) REFERENCES `tipo` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_idprod` FOREIGN KEY (`idprod`) REFERENCES `categoria` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idprov` FOREIGN KEY (`idprov`) REFERENCES `proveedor` (`idproveedor`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_cedcli` FOREIGN KEY (`cedcli`) REFERENCES `cliente` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idproducto` FOREIGN KEY (`idproducto`) REFERENCES `categoria` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
