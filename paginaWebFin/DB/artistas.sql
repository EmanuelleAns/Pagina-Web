-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2019 a las 18:12:43
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `raperos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(20) NOT NULL,
  `artista` varchar(25) DEFAULT NULL,
  `cancion` varchar(25) DEFAULT NULL,
  `licencia` varchar(20) DEFAULT NULL,
  `reproduccion` text,
  `descarga` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `artista`, `cancion`, `licencia`, `reproduccion`, `descarga`) VALUES
(1, 'Charles Ans', 'Petalos', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica1.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica1.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(2, 'Eptos Uno', 'Un Momento', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica2.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica2.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(3, 'Gera MXM', 'Mi templo', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica3.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica3.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(4, 'Rels B', 'Es mejor', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica4.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica4.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(5, 'Canserbero', 'Pensando en ti', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica5.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica5.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(6, 'La banda Baston', 'Solo como amigos', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica6.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica6.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(7, 'Cartel de santa', 'El dolor de la micro', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica7.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica7.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(8, 'Ice cube', 'It was a good day', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica8.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica8.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(9, '2Pac', 'Ghetto gospel', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica9.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica9.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(10, 'Snoop dogg', 'Drop it like it\'s hot', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica10.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica10.mp3\"><img src=\"img/descarga.png\"></a>\r\n\r\n'),
(11, 'Bob marley', 'Is this love', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica11.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica11.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(12, 'Gera MXM', 'La calle que me gusta', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica12.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica12.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(13, 'Eptos Uno', 'Acapulco golden', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica13.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica13.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(14, 'Charles Ans', 'Cafe', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica14.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica14.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(15, 'Rels B', 'Baila Mas', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica15.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica15.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(16, 'Canserbero', 'Es epico', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica16.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica16.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(17, 'Cartel de santa', 'La pelotona', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica17.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica17.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(18, 'Bob marley', 'Three little birds', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica18.mp3\" type=\"audio/mpeg\" ></audio>', ' <a download href=\"musica/musica18.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(19, 'Charles Ans', 'No hay palabras bonitas', 'Free Audio Team', '<audio controls class=\"reproductor1\"><source src=\"musica/musica19.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica19.mp3\"><img src=\"img/descarga.png\"></a>\r\n'),
(20, 'Charles Ans', 'Corazon bohemio', 'Free Audio Team', '<audio controls class=\"reproductor2\"><source src=\"musica/musica20.mp3\" type=\"audio/mpeg\" ></audio>', '<a download href=\"musica/musica20.mp3\"><img src=\"img/descarga.png\"></a>\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
