-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 04:29:54
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
(1, 'Novela'),
(2, 'Terror'),
(3, 'Ciencia Ficcion'),
(4, 'Aventura'),
(5, 'Policia'),
(6, 'Suspenso'),
(7, 'Fantansia'),
(8, 'Magia'),
(9, 'Cuento'),
(10, 'Leyenda'),
(11, 'Fabula'),
(12, 'Fantasmal'),
(27, 'Heroico');

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
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `autor`, `nombre_libro`, `descripcion`, `precio`, `id_categoria`) VALUES
(1, 'C.S. Lewis1', 'Las Crónicas de Narnia: El león, la bruja y el ropero1', ' Las Crónicas de Narnia (título original en inglés: The Chronicles of Narnia) es una heptalogía de libros juveniles escrita por el escritor y profesor anglo-irlandés C. S. Lewis entre 1950 y 1956, e ilustrado, en su versión original, por Pauline Baynes. Re1', 35562, 3),
(2, 'C.S. Lewis', '\r\nLas crónicas de Narnia: el príncipe Caspian ', 'Las Crónicas de Narnia: El príncipe Caspian (título original en inglés: The Chronicles of Narnia: Prince Caspian) es una película de acción y fantasía dirigida por Andrew Adamson y basada en la novela homónima de C. S. Lewis. Producida por Walden Media y distribuida por Walt Disney Pictures, se estrenó el 16 de mayo de 2008 en Estados Unidos. Es la segunda entrega de la saga Las Crónicas de Narnia.', 4566, 7),
(4, 'José Mauro de Vasconcelo', 'Mi planta de naranja lima', 'Mi planta de naranja lima (en portugués O Meu Pé de Laranja Lima) es una novela de José Mauro de Vasconcelos, una de las más leídas de la nueva literatura brasileña. El autor continúa la historia en Vamos a calentar el sol. Está narrada en primera persona y posee un altísimo nivel autobiográfico.\r\nEncabezó la lista de superventas en 1968, año de su primera edición. Posteriormente, la novela fue traducida a 32 idiomas y publicada en 19 países. Ha sido adoptado como texto lectura a nivel de enseñanza primaria.1​\r\nTres telenovelas se han realizado sobre la base de esta obra: en 1970 para la Rede Tupi, y en 1980 y 1998 para la Rede Bandeirantes. También se han realizado varias adaptaciones al cine, televisión y teatro, siendo dirigida por Aurelio Teixeira la primera para el cine en 1970.2​ En el 2011 se ha presentado su segunda versión cinematográfica.3​   ', 11781, 5),
(31, 'garcia', 'asdasd11', '363edfgdfg', 222, 6),
(32, 'garcia', 'sadda', '1', 2, 3),
(33, 'asdasd1231', 'asdasdasdsa', '657641', 11, 1),
(34, 'asdasd1231', 'asdasdasdsa', '657641', 11, 1),
(35, 'asdasd1231', 'asdasdasdsa', '657641', 11, 1),
(36, 'asdasd1231', 'asdasdasdsa', '657641', 11, 1),
(37, 'garcia', 'azul mar', 'adasd', 1231, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
