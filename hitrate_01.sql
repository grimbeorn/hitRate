-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 01:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitrate.01`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividadingenieria`
--

CREATE TABLE `actividadingenieria` (
  `idActividad` int(11) NOT NULL,
  `nombreActividad` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipoActividad` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `asesorIngenieria` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaDeAtencion` date NOT NULL,
  `seguimiento` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actividadingenieria`
--

INSERT INTO `actividadingenieria` (`idActividad`, `nombreActividad`, `tipoActividad`, `asesorIngenieria`, `zona`, `fechaDeAtencion`, `seguimiento`) VALUES
(3, 'curso', 'curso', 'hmartinez', 'centro', '2017-12-31', 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `despachos`
--

CREATE TABLE `despachos` (
  `idDespacho` int(11) NOT NULL,
  `nombreDespacho` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giroDespacho` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numeroExterior` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numeroInterior` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `colonia` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigoPostal` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombreContacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono01Contacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono02Contacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correoContacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombreContacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono01Contacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono02Contacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correoContacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notas` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `despachos`
--

INSERT INTO `despachos` (`idDespacho`, `nombreDespacho`, `giroDespacho`, `calle`, `numeroExterior`, `numeroInterior`, `colonia`, `municipio`, `codigoPostal`, `estado`, `nombreContacto01`, `telefono01Contacto01`, `telefono02Contacto01`, `correoContacto01`, `nombreContacto02`, `telefono01Contacto02`, `telefono02Contacto02`, `correoContacto02`, `notas`) VALUES
(13, 'Manuel Torres Design', '', 'ArquÃ­medes', '199', '89', 'Polanco', 'Miguel Hidalgo', '11560', '', 'Alfonso SÃ¡nchez', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `distribuidorespanelrey`
--

CREATE TABLE `distribuidorespanelrey` (
  `idDistribuidor` int(11) NOT NULL,
  `nombre` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `calificacion` int(11) NOT NULL,
  `asesorIngenieria` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ejecutivoVentas` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numeroExterior` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numeroInterior` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `colonia` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigoPostal` varchar(40) NOT NULL,
  `estado` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombreContacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono01Contacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono02Contacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correoContacto01` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombreContacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono01Contacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefono02Contacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `correoContacto02` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seguimientoActividad` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribuidorespanelrey`
--

INSERT INTO `distribuidorespanelrey` (`idDistribuidor`, `nombre`, `zona`, `tipo`, `calificacion`, `asesorIngenieria`, `ejecutivoVentas`, `calle`, `numeroExterior`, `numeroInterior`, `colonia`, `municipio`, `codigoPostal`, `estado`, `nombreContacto01`, `telefono01Contacto01`, `telefono02Contacto01`, `correoContacto01`, `nombreContacto02`, `telefono01Contacto02`, `telefono02Contacto02`, `correoContacto02`, `seguimientoActividad`) VALUES
(1, 'Constructora y Distribuidora FM', 'norEste', 'instalador', 8, 'hmartinez', 'jnajar', 'Diego Becerra', '51', 'a', 'San Jose Insurgentes', 'Benito Juarez', '03900', '', 'Ing. David A. Fragoso Margain', '5660 6679', '044 55 5402 8469', 'f_m_david@yahoo.com.mx', 'L.S.C.A. Rolando Hernandez Maceda', '5660 6679', '5660 6340', 'constructorafmmex@yahoo.com.mx', '');

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE `proyectos` (
  `idProyecto` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clasificacion` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sistemaConstructivo` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `calle` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numeroExterior` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numeroInterior` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `colonia` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codigoPostal` int(11) NOT NULL,
  `estado` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zonaFisicaProyecto` varchar(80) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `zonaQueAtiendeProyecto` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `coordenadasDeObra` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipoEdificacion` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fuenteDeAlta` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `etapaProyecto` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `despachoEncargado` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `volumenEstimadoIngenieria` int(11) NOT NULL,
  `asesorIngenieria` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaRegistroIngenieria` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaAVentas` date NOT NULL,
  `bitacoraSeguimientoIngenieria` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `etapaActualProyectoIng` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaRecepcionObraPorVentas` date NOT NULL,
  `numeroDistribuidoresPart` int(11) NOT NULL,
  `ejecutivoVentas` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `volumenEstimadoVentas` int(11) NOT NULL,
  `bitacoraSeguimientoVentas` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `distribuidorCotizando` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaAsignacionDistribuidor` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `precioPropuesto` int(80) NOT NULL,
  `fechaCotizacion` date NOT NULL,
  `veredicto` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fechaDeVeredicto` date NOT NULL,
  `notasSeguimientoADistribuidor` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notasSeguimientoObra` varchar(2000) NOT NULL,
  `etapaActualProyectoVtas` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `materialRetirado` int(11) NOT NULL,
  `fechaRetiro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`idProyecto`, `nombre`, `clasificacion`, `sistemaConstructivo`, `calle`, `numeroExterior`, `numeroInterior`, `colonia`, `municipio`, `codigoPostal`, `estado`, `zonaFisicaProyecto`, `zonaQueAtiendeProyecto`, `coordenadasDeObra`, `tipoEdificacion`, `fuenteDeAlta`, `etapaProyecto`, `despachoEncargado`, `volumenEstimadoIngenieria`, `asesorIngenieria`, `fechaRegistroIngenieria`, `fechaAVentas`, `bitacoraSeguimientoIngenieria`, `etapaActualProyectoIng`, `fechaRecepcionObraPorVentas`, `numeroDistribuidoresPart`, `ejecutivoVentas`, `volumenEstimadoVentas`, `bitacoraSeguimientoVentas`, `distribuidorCotizando`, `fechaAsignacionDistribuidor`, `precioPropuesto`, `fechaCotizacion`, `veredicto`, `fechaDeVeredicto`, `notasSeguimientoADistribuidor`, `notasSeguimientoObra`, `etapaActualProyectoVtas`, `materialRetirado`, `fechaRetiro`) VALUES
(5, 'mitika', 'B.Mediano 2,501 a 5,000 hojas', 'muros exteriores', 'Rio Churubusco', '2000', '2222', 'Xoco', 'Benito Juarez', 3330, 'Ciudad de Mexico', 'centro', 'centro', '25, 25', 'mixto', 'panel rey', 'proyecto', 'Manuel Torres Design', 10000, 'hmartinez', '2017-12-19 00:20:59', '2016-12-12', 'obs ing', 'proyecto', '2016-12-12', 0, 'jnajar', 12000, 'obs ventas', 'Constructora y Distribuidora FM', '0000-00-00 00:00:00', 0, '0000-00-00', '', '0000-00-00', '', 'obs ventas', 'proyecto', 0, '0000-00-00'),
(6, 'torre enquentro', 'C.Pequeno - 500 a 2,500 hojas', 'plafones', 'manuel sotero', '22', 's/n', 'los altos', 'naucalpan', 53100, 'Ciudad de Mexico', 'centro', 'centro', '25,-24', 'mixto', 'panel rey', 'movimiento de tierras', 'Manuel Torres Design', 3000, 'agallardo', '2017-12-28 22:39:51', '2017-12-19', '', 'movimiento de tierras', '0000-00-00', 0, 'jnajar', 0, '', 'Constructora y Distribuidora FM', '0000-00-00 00:00:00', 0, '0000-00-00', '', '0000-00-00', '', '', 'proyecto', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `zona` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `privilegios` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `correo`, `contrasena`, `zona`, `area`, `privilegios`, `fechaCreacion`) VALUES
(1, 'hmartinez', 'Hernando', 'Martinez', 'Sanchez', 'hmartinez@gpromax.com', '12345', 'centro', 'ingenieria', 'administrador', '2017-12-04 21:32:11'),
(11, 'agallardo', 'Alejandro', 'Gallardo', 'Juarez', 'agallardo@gpromax.com', '1234', 'centro', 'ingenieria', 'ingenieria local', '2017-11-28 18:11:21'),
(13, 'jnajar', 'Javier', 'Najar', 'Gutierrez', 'jnajar@gpromax.com', '1234', 'centro', 'ventas', 'ventas local', '2017-12-04 15:07:24'),
(14, 'lgarcia', 'Luis', 'Garcia', 'Algo', 'lgarcia@gpromax.com', '1234', 'norEste', 'ingenieria nacional', 'ingenieria nacional', '2017-12-22 00:11:24'),
(15, 'alpha', 'beta', 'gamma', '', '', '', 'bajas', 'ingenieria', 'ingenieria local', '2017-12-27 15:42:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividadingenieria`
--
ALTER TABLE `actividadingenieria`
  ADD PRIMARY KEY (`idActividad`);

--
-- Indexes for table `despachos`
--
ALTER TABLE `despachos`
  ADD PRIMARY KEY (`idDespacho`);

--
-- Indexes for table `distribuidorespanelrey`
--
ALTER TABLE `distribuidorespanelrey`
  ADD PRIMARY KEY (`idDistribuidor`);

--
-- Indexes for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idProyecto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividadingenieria`
--
ALTER TABLE `actividadingenieria`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `despachos`
--
ALTER TABLE `despachos`
  MODIFY `idDespacho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `distribuidorespanelrey`
--
ALTER TABLE `distribuidorespanelrey`
  MODIFY `idDistribuidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
