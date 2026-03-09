-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2026 a las 21:47:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacionanimalandia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nombre`, `clave`) VALUES
(1, 'Kelly', '1097728666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `idDonacion` int(11) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `metodo` enum('efectivo','transferencia','nequi','daviplata','Bancolombia') NOT NULL,
  `Administrador_idadministrador` int(11) DEFAULT NULL,
  `nombreDonante` varchar(100) NOT NULL,
  `estado` enum('aprobado','pendiente','rechazada') NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`idDonacion`, `monto`, `fecha`, `metodo`, `Administrador_idadministrador`, `nombreDonante`, `estado`) VALUES
(1, 20000.00, '2026-02-13 17:05:31', 'nequi', NULL, 'Katherine Tobon', 'pendiente'),
(2, 20000.00, '2026-02-13 17:05:42', 'daviplata', NULL, 'Katherine Tobon', 'rechazada'),
(3, 20000.00, '2026-02-13 17:06:25', 'daviplata', NULL, 'Katherine Tobon', 'aprobado'),
(6, 25000.00, '2026-02-16 18:45:43', 'efectivo', NULL, 'Wesley Castañeda', 'aprobado'),
(7, 50000.00, '2026-02-16 19:25:24', 'efectivo', NULL, 'Kelly Jhoana Araque', 'aprobado'),
(8, 1000.00, '2026-02-28 21:48:36', 'nequi', NULL, 'Katherine Alcaráz', 'pendiente'),
(9, 1000.00, '2026-02-28 21:57:30', 'nequi', NULL, 'Sebastian', 'pendiente'),
(10, 2000.00, '2026-02-28 22:26:30', 'nequi', NULL, 'Wesley', 'pendiente'),
(11, 1000.00, '2026-02-28 23:25:33', 'nequi', NULL, 'Deisy Henao', 'pendiente'),
(12, 1000.00, '2026-02-28 23:29:17', 'nequi', NULL, 'Deisy Henao', 'pendiente'),
(13, 3000.00, '2026-02-28 23:41:09', 'nequi', NULL, 'Lesly Zapata', 'pendiente'),
(14, 1000.00, '2026-03-07 14:21:55', 'nequi', NULL, 'Wesley Castañeda', 'pendiente'),
(15, 1000.00, '2026-03-09 19:44:48', 'nequi', NULL, 'Judith Alcaraz', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticias` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` date NOT NULL,
  `Administrador_idadministrador` int(11) NOT NULL,
  `rutaFoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticias`, `titulo`, `contenido`, `fecha`, `Administrador_idadministrador`, `rutaFoto`) VALUES
(8, 'Esterelización- prueba de edicion 2', 'Hola, esto es una prueba inicial de conexión  a la BD', '2026-02-03', 1, 'donacion.jpg'),
(13, 'este es una prueba con validaciones', 'hola', '2026-02-08', 1, '1772897556_20250513_093452.jpg'),
(14, 'ensayo de texto largo', 'Jean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.\r\nJean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.\r\nJean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.\r\nJean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.Jean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.Jean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.Jean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.Jean Piaget fue un psicólogo suizo que revolucionó la manera de entender el aprendizaje infantil. Su teoría del desarrollo cognitivo propone que el ser humano construye activamente su conocimiento a medida que interactúa con su entorno.', '2026-02-08', 1, '1770582325_nuestra-historia.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`idDonacion`),
  ADD KEY `fk_Donacion_Administrador1` (`Administrador_idadministrador`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticias`,`Administrador_idadministrador`),
  ADD KEY `fk_Noticias_Administrador1_idx` (`Administrador_idadministrador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `idDonacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `fk_Donacion_Administrador1` FOREIGN KEY (`Administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_Noticias_Administrador1` FOREIGN KEY (`Administrador_idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
