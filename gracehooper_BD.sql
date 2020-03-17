-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2020 a las 19:56:56
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mycontacts`
--
CREATE DATABASE IF NOT EXISTS `gracehooper` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gracehooper`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contactos` int(3) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `direccion2` varchar(100) DEFAULT NULL,
  `favoritos` int(1) NOT NULL,
  `estado` int(1) DEFAULT NULL,
  `user_fk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contactos`, `nombre`, `apellido`, `foto`, `email`, `direccion1`, `direccion2`, `favoritos`, `estado`, `user_fk`) VALUES
(1, 'juan', 'casas', 'nofoto.jpg', 'juan@gmail.com', 'Passeig de Sant Joan Bosco, 42, 08017 Barcelona', 'Carrer de Muntaner, 505, 08022 Barcelona', 2, 1, 4),
(2, 'victor', 'martinez', 'nofoto.jpg', 'victor', 'Plaça Sagrada Família, 10, 08013 Barcelona', NULL, 1, 1, 4),
(3, 'paco', 'perez', 'user1.png', 'paco@gmail.com', 'Carrer Josep Maria Folch I Torres, 2, 43006 Tarragona', 'Carrer Vint, 16, 20, 43100 Tarragona', 2, 3, 2),
(4, 'pepe', 'gonzalez', 'user2.png', 'pepe@gmail.com', 'Avinguda Mare de Deu de Bellvitge, 100, 08907 Hospitalet de Llobregat, Barcelona', 'Avinguda Mare de Deu de Bellvitge, 10, 08907 Hospitalet de Llobregat, Barcelona', 1, 1, 2),
(5, 'carlos', 'lopez', 'nofoto.jpg', 'carlos@gmail.com', 'Carrer de Mallorca, 401, 08013 Barcelona', NULL, 2, 1, 2),
(6, 'luis', 'martinez', 'nofoto.jpg', 'luis@gmail.com', 'Carrer de Alvar Aalto, 08240 Manresa, Barcelona', NULL, 2, 1, 2),
(7, 'luisa', 'perez', 'nofoto.jpg', 'luisa@gmail.com', 'Carrer del Ponent, 18, 17820 Banyoles, Girona', 'Placeta de la Font, 11, 17820 Banyoles, Girona, Girona', 1, 1, 2),
(8, 'admin', 'admin', 'nofoto.jpg', 'admin', 'Ctra. Banyoles-Escala, km 7,5, 17468 Vilamari, Girona', 'Carrer Major, 4, 17134 La Tallada Emporda, Girona', 1, 1, 1),
(9, 'Joaquin', 'jimenez', 'nofoto.jpg', 'joa@gmail.com', 'Carrer de Binefar, 10, 08020 Barcelona', NULL, 2, 1, 4),
(10, 'Carla', 'martinez', 'nofoto.jpg', 'carla@gmail.com', 'Pl. de Lesseps, 20, 08023 Barcelona', NULL, 1, 1, 3),
(11, 'Laura', 'lopez', 'nofoto.jpg', 'sdf@KC', 'barcelona', 'madrid', 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(1) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'normal'),
(2, 'bloqueado'),
(3, 'eliminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favorito` int(1) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id_favorito`, `status`) VALUES
(1, 'Favorito'),
(2, 'No favorito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(3) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fk_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `user`, `password`, `fk_user`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'joel', '81dc9bdb52d04dc20036dbd8313ed055', 4),
(3, 'dani', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(4, 'jose', '81dc9bdb52d04dc20036dbd8313ed055', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id_telefono` int(3) NOT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `id_contacto` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `telefono`, `id_contacto`) VALUES
(14, '666222626', 3),
(15, '999999999', 4),
(16, '666666666', 3),
(17, '666666666', 2),
(18, '666565656', 2),
(19, '646462636', 6),
(20, '674859738', 6),
(21, '696098639', 7),
(22, '646646464', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `foto`, `nombre`, `apellidos`, `email`, `telefono`, `direccion1`, `estado`) VALUES
(1, 'nofoto.jpg', 'admin', 'admin', 'admin', '666666666', 'Barcelona', 1),
(2, 'user1.png', 'Dani', 'Sanchez', 'dani@gmail.com', '683682619', 'Madrid', 2),
(3, 'user2.png', 'Jose', 'Nuevo', 'jose@gmail.com', '654746936', 'Sevilla', 3),
(4, 'user4.png', 'Joel', 'Fandos', 'joel@gmail.com', '645727489', 'Valencia', 1),
(5, 'nofoto.jpg', 'carlos', 'carlos', 'carlos@hd', '666666666', 'Cordoba', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contactos`),
  ADD KEY `user_fk` (`user_fk`),
  ADD KEY `favoritos` (`favoritos`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_favorito`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `fk_user` (`fk_user`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `id_contacto` (`id_contacto`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `estado` (`estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contactos` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favorito` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `login` (`id_login`),
  ADD CONSTRAINT `contactos_ibfk_2` FOREIGN KEY (`favoritos`) REFERENCES `favoritos` (`id_favorito`),
  ADD CONSTRAINT `contactos_ibfk_3` FOREIGN KEY (`estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `telefonos_ibfk_1` FOREIGN KEY (`id_contacto`) REFERENCES `contactos` (`id_contactos`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;