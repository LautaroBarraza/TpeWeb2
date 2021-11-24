-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 19:01:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  `nota` int(11) NOT NULL,
  `id_deportista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `nota`, `id_deportista`) VALUES
(1, 'el mejor de todos los tiempos', 5, 6),
(26, 'hola', 0, 7),
(29, 'el mejor sin duda', 5, 6),
(31, 'Messi el mejor', 5, 6),
(38, 'el segundo mejor', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deporte`
--

CREATE TABLE `deporte` (
  `id_deporte` int(11) NOT NULL,
  `deporte` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deporte`
--

INSERT INTO `deporte` (`id_deporte`, `deporte`) VALUES
(4, 'tennis'),
(5, 'futbol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportistas`
--

CREATE TABLE `deportistas` (
  `id_deportista` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `edad` int(11) NOT NULL,
  `id_deporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deportistas`
--

INSERT INTO `deportistas` (`id_deportista`, `nombre`, `apellido`, `edad`, `id_deporte`) VALUES
(6, 'lionel', 'messi', 34, 5),
(7, 'Cristiano', 'Ronaldo', 36, 5),
(11, 'paulo', 'dybala', 27, 5),
(12, 'juan', 'del potro', 35, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombreUsuario` varchar(250) NOT NULL,
  `contrasenia` varchar(250) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombreUsuario`, `contrasenia`, `rol`) VALUES
(1, 'lau', '$2y$10$GXHZrDzwJIW9M97PBtQGj.rV0giIWlw73SjFwE3PMJUbzGM2Cgi5i', 1),
(2, 'jjj', '$2y$10$Uz6bI.afLQamMf5LviKAS.b8xOT9ccSd07m33wWAqeyJN0EqtYpEG', 0),
(4, 'lau2', '$2y$10$xSLcjnqQ/hZs1dl2TfiwA.rs05RXOzZZRec5DZuLGeUNKFvnFC9fq', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `FK_id_deportista` (`id_deportista`);

--
-- Indices de la tabla `deporte`
--
ALTER TABLE `deporte`
  ADD PRIMARY KEY (`id_deporte`);

--
-- Indices de la tabla `deportistas`
--
ALTER TABLE `deportistas`
  ADD PRIMARY KEY (`id_deportista`),
  ADD KEY `FK_id_deporte` (`id_deporte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `deporte`
--
ALTER TABLE `deporte`
  MODIFY `id_deporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `deportistas`
--
ALTER TABLE `deportistas`
  MODIFY `id_deportista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_deportista`) REFERENCES `deportistas` (`id_deportista`);

--
-- Filtros para la tabla `deportistas`
--
ALTER TABLE `deportistas`
  ADD CONSTRAINT `deportistas_ibfk_1` FOREIGN KEY (`id_deporte`) REFERENCES `deporte` (`id_deporte`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
