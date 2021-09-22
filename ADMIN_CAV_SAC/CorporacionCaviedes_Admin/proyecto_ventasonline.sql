-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 01:55:24
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_ventasonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(11) NOT NULL,
  `usuarioAdmin` varchar(50) NOT NULL,
  `passAdmin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoanuncio`
--

CREATE TABLE `tipoanuncio` (
  `id_tipo_anuncio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `costo` decimal(7,3) NOT NULL,
  `metros` double NOT NULL,
  `numCuartos` int(11) NOT NULL,
  `numBathroom` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `distrito` varchar(200) NOT NULL,
  `departamento` varchar(200) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoanuncio`
--

INSERT INTO `tipoanuncio` (`id_tipo_anuncio`, `descripcion`, `costo`, `metros`, `numCuartos`, `numBathroom`, `direccion`, `distrito`, `departamento`, `thumb`, `fecha_publicacion`) VALUES
(2, 'Ipsum laborum ad eiusmod quis. Quis qui esse duis ad est mollit ex pariatur officia in eu ea. Irure ipsum reprehenderit Lorem dolore enim sit aliqua eiusmod nisi nulla pariatur qui. Est id laboris adi', '191.000', 80, 4, 4, 'Ubicado al final de la Av. Larco, en la intersección del Malecón de la Reserva ', 'San Isidro', 'Lima', 'img_1.jpg', '2021-09-07 21:41:22'),
(7, 'Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is ei', '19.000', 80, 2, 2, 'Av. José Larco 1150, Miraflores 15074', 'Prueba', 'Lima', 'img_2.jpg', '2021-09-14 15:30:43'),
(8, 'Ipsum laborum ad eiusmod quis. Quis qui esse duis ad est mollit ex pariatur officia in eu ea. Irure ipsum reprehenderit Lorem dolore enim sit aliqua eiusmod nisi nulla pariatur qui. Est id laboris adi', '30.000', 80, 2, 8, 'Av, Mal. de la Reserva 610, Miraflores', 'San Borja', 'Lima', 'img_3.jpg', '2021-09-14 15:41:11'),
(9, 'Ipsum laborum ad eiusmod quis. Quis qui esse duis ad est mollit ex pariatur officia in eu ea. Irure ipsum reprehenderit Lorem dolore enim sit aliqua eiusmod nisi nulla pariatur qui. Est id laboris adi', '19.000', 80, 2, 2, 'Av. José Larco 692-698, Miraflores 15074', 'Miraflores', 'Lima', 'img_4.jpg', '2021-09-14 19:55:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `NombreC` varchar(70) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoanuncio`
--
ALTER TABLE `tipoanuncio`
  ADD PRIMARY KEY (`id_tipo_anuncio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoanuncio`
--
ALTER TABLE `tipoanuncio`
  MODIFY `id_tipo_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
