-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 16:11:03
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_olimpiadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `DNI` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` bigint(100) NOT NULL,
  `id_facultad_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `apellido`, `DNI`, `email`, `celular`, `id_facultad_fk`) VALUES
(4, 'Viviana Ayelén', 'Diaz Bailey', 37926567, 'ayediazbailey@gmail.com', 2494559594, 4),
(5, 'Ailín', 'Kravos', 40291312, 'ailinkravos@gmail.com', 2494366445, 5),
(6, 'Maximiliano Ezequiel', 'Marsón', 37305453, 'marson.maximiliano@gmail.com', 2494337744, 3),
(9, 'Pedrito', 'Lopez', 7777, 'pedrito@gmail.com', 66, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `nombre_facultad` varchar(20) NOT NULL,
  `sede` varchar(50) NOT NULL,
  `historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datos de la facultad';

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id_facultad`, `nombre_facultad`, `sede`, `historia`) VALUES
(1, 'Agronomía', 'Azul', 'Por el momento no tienen una mascota definida.\r\n\r\nLos colores que utilizan son el bordó y el blanco.'),
(2, 'Arte', 'Tandil', 'Adoptaron como mascota al arlequín.\r\n\r\nSus colores varían entre las tonalidades del rojo. Sus camisetas suelen ser color azul violáceo y rojo.'),
(3, 'Derecho', 'Azul', 'Esta facultad si bien no tiene del todo definida su mascota, el logo de las remeras de sus equipos es un cuervo. Los jugadores decidieron poner esta mascota porque a los abogados se los suele identificar con ese animal.\r\n\r\nLos colores con lo que los vas a poder identificar son el magenta y el azul.'),
(4, 'Económicas', 'Tandil', 'Según cuenta la leyenda, los actuales contadores Gabriel Dadiego y Mario Cabitto fueron designados para establecer el apodo del Centro de estudiantes y los colores que se usarían en olimpiadas.\r\n\r\nEllos, hinchas de Estudiantes de La Plata uno y de Racing Club el otro, hicieron ostentación de esa condición para elegir el apodo de \"León\" y los colores celeste y blanco.'),
(5, 'Exactas', 'Tandil', 'Según el boca en boca, la facultad de Exactas es representada por el gallo debido a que hace mucho tiempo, veterinarias hizo una canción llamándoles gallinas y ellos les retrucaron con otra canción autoproclamándose gallos, alegando a la fiereza combativa de dicho animal.En cuanto a los colores, la historia se remonta a las primeras olimpiadas donde no existía ningún tipo de presupuesto para las remeras. Ante esto, el Club Santamarina les prestó remeras suyas de color oro y negro.'),
(6, 'Humanas', 'Tandil', 'Su mascota es Boxitracio, un personaje inventado por García Ferré para la serie Hijitus. El prefijo “Boxi” anticipa de alguna manera la condición de boxeador del animal.\r\n\r\nSus colores son el azul y el oro.'),
(7, 'Ingeniería', 'Olavarría', 'En el año 2016 se largó una encuesta por Facebook, para que los alumnos puedan decidir la misma, en donde la mascota que obtuvo más votos fue un Lobo.\r\n\r\nLos colores con los cuales lo vamos a encontrar son verde oscuro y blanco; éstos pueden ser combinados con azul en ciertas ocasiones, ya que este color forma parte del logo del centro de estudiantes.'),
(8, 'Quequén', 'Quequén', 'El origen de su mascota es reciente, la misma es un duende. La historia del porqué se eligió esta mascota viene dada porque en los alrededores del predio, donde se encuentra la sede, está rodeado de gnomos.\r\n\r\nTomando de esta misma manera sus colores, un azul marino, medio verdoso, por el mar.'),
(9, 'Salud', 'Olavarría', 'Se identifican con los colores verde y azul.\r\n\r\nNo tienen mascota por el momento.'),
(10, 'Sociales', 'Olavarría', 'Sus colores son el naranja y el negro.\r\n\r\nPor el momento no tienen definida una mascota.'),
(11, 'Veterinarias', 'Tandil', 'Son conocidos como los borrachos del tablón, no tienen una mascota bien definida, pero el resto de las facultades lo representan con un paisano. Por los equipos de futsal femenino y básquet se vienen representando con el chancho.\r\n\r\nSus colores vienen definidos porque mundialmente la cruz violeta es representativa de la veterinaria, junto con el blanco y negro.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`) VALUES
(2, 'Pocha', 'pocha@pocha', '$2y$10$cJ2HTfdYMO9g2JTmiHMcbONERDLhm1/KosxtoNov.c0OcYIIZilTC'),
(3, 'Viviana', 'ayediazbailey@gmail.com', '$2y$10$YCtAHmON6u9qBXrwZ1eM7uVC7ZS9nrF0Yx6huhLWJORCrpWnQ2GAa'),
(4, 'Viviana', 'prueba@gmail.com', '$2y$10$0miHQQVOD47dBSSbYfiEPuH9W17FYKOq1GmhgiF5ej9T/4exe.O9i');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `id_facultad_fk` (`id_facultad_fk`),
  ADD UNIQUE KEY `id_facultad_fk_2` (`id_facultad_fk`),
  ADD UNIQUE KEY `id_facultad_fk_3` (`id_facultad_fk`),
  ADD KEY `id_facultad_fk_4` (`id_facultad_fk`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_facultad_fk`) REFERENCES `facultad` (`id_facultad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
