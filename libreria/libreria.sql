-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2023 a las 02:35:43
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `correo` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `fecha`, `correo`, `nombre`, `asunto`, `comentario`) VALUES
(1, '2023-08-02', 'saf', 'Torre Nicaragua', 'fsff', 'kbkub'),
(2, '2023-08-02', '', '', '', ''),
(3, '2023-08-02', 'balaclao@gmail.com', 'bacalao', 'Oferta para escribir un libro', 'te tengo una oferta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_autores`
--

CREATE TABLE `tbl_autores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `f_nacimiento` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_autores`
--

INSERT INTO `tbl_autores` (`id`, `nombre`, `nacionalidad`, `f_nacimiento`, `genero`) VALUES
(1, 'George Orwell', 'Británico', '1903-06-25', 'Masculino'),
(2, 'Jane Austen', 'Británica', '1775-12-16', 'Femenino'),
(3, 'Gabriel García Márquez', 'Colombiano', '1927-03-06', 'Masculino'),
(4, 'J.R.R. Tolkien', 'Británico', '1892-01-03', 'Masculino'),
(5, 'J.K. Rowling', 'Británica', '1965-07-31', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_libros`
--

CREATE TABLE `tbl_libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_libros`
--

INSERT INTO `tbl_libros` (`id`, `titulo`, `autor`, `anio`, `genero`) VALUES
(1, '1984', 'George Orwell', '1949', 'Novela distópica'),
(2, 'Orgullo y prejuicio', 'Jane Austen', '1813', 'Novela romántica'),
(3, '1984', 'George Orwell', '1949', 'Novela distópica'),
(4, 'Orgullo y prejuicio', 'Jane Austen', '1813', 'Novela romántica'),
(5, 'Cien años de soledad', 'Gabriel García Márquez', '1967', 'Novela mágico-realismo'),
(6, 'El señor de los anillos', 'J.R.R. Tolkien', '1954', 'Fantasía épica'),
(7, 'Harry Potter y la piedra filosofal', 'J.K. Rowling', '1997', 'Fantasía juvenil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_autores`
--
ALTER TABLE `tbl_autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_libros`
--
ALTER TABLE `tbl_libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_autores`
--
ALTER TABLE `tbl_autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_libros`
--
ALTER TABLE `tbl_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
