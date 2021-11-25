-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 02:58:10
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, ' Novela'),
(2, 'Terror'),
(3, 'Ciencia Ficcion'),
(4, 'Aventura'),
(5, 'Policia'),
(6, 'Suspenso'),
(7, 'Fantansia'),
(8, 'Magia'),
(9, 'Cuento'),
(10, 'Leyenda'),
(11, 'Fabula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentarios`, `puntuacion`, `id_libro`, `id_user`) VALUES
(13, 'l;lk;lk', 1, 44, 1),
(14, 'sadfdsf', 2, 44, 1),
(15, 'asdas', 0, 44, 1),
(16, 'asd', 1, 40, 1),
(26, 'asdasda', 123123, 46, 1),
(30, 'Hola', 1, 45, 1),
(31, 'Que tal', 2, 45, 1),
(32, 'Todo bien', 3, 45, 1),
(33, 'Como va?', 4, 45, 1),
(34, 'jeje', 5, 45, 1),
(35, 'hola que tal', 4, 1, 1),
(36, 'Hola que tal', 5, 41, 1),
(37, 'aaaaaaa', 0, 41, 1),
(38, 'a', 3, 41, 1),
(39, 'a', 2, 41, 1),
(40, 'aaaaaaa', 1, 41, 1),
(41, 'a', 4, 41, 1),
(42, 'a', 2, 41, 1),
(43, 'a', 0, 41, 1),
(44, 'b', 0, 41, 1),
(45, 'ultimo', 2, 41, 1),
(46, 'aaaaaa', 3, 41, 1),
(47, 'a', 2, 1, 1),
(48, 'sdasdd', 5, 1, 1),
(55, 'asdasd', 2, 4, 1),
(56, 'aaaaa', 3, 4, 1),
(57, 'a', 4, 4, 1),
(58, 'aa', 2, 33, 1),
(59, 'aaaaa', 3, 33, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `nombre_libro` varchar(100) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `precio` double DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `autor`, `nombre_libro`, `descripcion`, `precio`, `id_categoria`, `imagen`) VALUES
(1, 'C.S. Lewis1', 'Las Crónicas de Narnia: El león, la bruja y el ropero1', '                                                                                 Las Crónicas de Narnia (título original en inglés: The Chronicles of Narnia) es una heptalogía de libros juveniles escrita por el escritor y profesor anglo-irlandés C. S. Lewis entre 1950 y 1956, e ilustrado, en su versión original, por Pauline Baynes. Re1\r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        \r\n        ', 35562, 3, 'img/portadas/619ec7da7f4a9.jpg'),
(2, 'C.S. Lewis', '\r\nLas crónicas de Narnia: el príncipe Caspian ', 'Las Crónicas de Narnia: El príncipe Caspian (título original en inglés: The Chronicles of Narnia: Prince Caspian) es una película de acción y fantasía dirigida por Andrew Adamson y basada en la novela homónima de C. S. Lewis. Producida por Walden Media y distribuida por Walt Disney Pictures, se estrenó el 16 de mayo de 2008 en Estados Unidos. Es la segunda entrega de la saga Las Crónicas de Narnia.', 4566, 7, ''),
(4, 'José Mauro de Vasconcelo', 'Mi planta de naranja lima', '          Mi planta de naranja lima (en portugués O Meu Pé de Laranja Lima) es una novela de José Mauro de Vasconcelos, una de las más leídas de la nueva literatura brasileña. El autor continúa la historia en Vamos a calentar el sol. Está narrada en primera persona y posee un altísimo nivel autobiográfico.\r\nEncabezó la lista de superventas en 1968, año de su primera edición. Posteriormente, la novela fue traducida a 32 idiomas y publicada en 19 países. Ha sido adoptado como texto lectura a nivel de enseñanza primaria.1​\r\nTres telenovelas se han realizado sobre la base de esta obra: en 1970 para la Rede Tupi, y en 1980 y 1998 para la Rede Bandeirantes. También se han realizado varias adaptaciones al cine, televisión y teatro, siendo dirigida por Aurelio Teixeira la primera para el cine en 1970.2​ En el 2011 se ha presentado su segunda versión cinematográfica.3​   \r\n        ', 11781, 5, NULL),
(31, 'garcia', 'asdasd11', '363edfgdfg', 222, 6, ''),
(32, 'garcia', 'sadda', '1', 2, 3, ''),
(33, 'asdasd1231', 'asdasdasdsa', '          657641\r\n        ', 11, 1, NULL),
(34, 'asdasd1231', 'asdasdasdsa', '657641', 11, 1, ''),
(35, 'asdasd1231', 'asdasdasdsa', '657641', 11, 1, ''),
(39, '123d1231', 'asdas213sa', 'lal3llala', 34567, 5, ''),
(40, 'asdas', 'asd', '          asdasd', 34, 5, ''),
(41, 'autor', 'asdasd', 'descrrp', 123456, 2, ''),
(42, 'autor', 'libros', 'descrip', 12, 2, ''),
(43, '1dsfgdsfg', 'Titulo nuevo', '                                           sdfgsdfg              1     \r\n        \r\n        \r\n        \r\n        \r\n        ', 123, 3, NULL),
(44, 'Peron', 'PEron', '                    Peron            \r\n        \r\n        ', 100, 2, NULL),
(45, 'cPEron Juena', 'PEron Juena', 'PEron Juena            `', 1100, 3, NULL),
(46, 'awsdwadaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'asdadw', '          sadfwadwad\r\n        ', 1231, 10, NULL),
(47, 'autor', 'Nuevo', 'asdasd            ', 111111, 3, NULL),
(48, 'AUTOR 18', 'LIBRO 18', '            LIASDSAD', 18, 6, NULL),
(49, 'A', 'A', '         A  ', 2, 6, NULL),
(50, 'A', 'A', '                   23   \r\n        ', 2, 5, NULL),
(52, 'a', 'a', '            aaa', 2, 6, NULL),
(53, 'asd', 'Ropero', '            ', 1, 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nombre_apellido` varchar(255) NOT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tipoUser` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `nombre_apellido`, `password`, `tipoUser`) VALUES
(1, 'admin@gmail.com', 'Admin', '$2y$10$ATqPXdv4tFHONS3xg9hQbOSWjExfYE2Q6VDQDUR3x93m7zwqO/DGa', 1),
(5, 'invitado@gmail.com', 'INVITADO', '$2y$10$6ci8LBfOoojsdKCu/Vz3beUqG./iyYwruf271sdafUa8binOTlD/S', 4),
(8, 'admin2@gmail.com', 'Agustin', '$2y$10$8rOU8grAE4JRzA5qquwcbemp4Ac95wdCpTjVKEGsPkxdbMWkhGgGi', 2),
(9, 'agustin@email.com', 'Agustin', '$2y$10$C4DBbL3lbPA0gSQeCXhwEOUlS/OnsOzOtnPKO4SxD7XP/TpVL41JO', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_categoria` (`id_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
