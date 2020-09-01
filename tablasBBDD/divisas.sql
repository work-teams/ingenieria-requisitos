-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2020 a las 17:34:27
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_mysql_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisas`
--

CREATE TABLE `divisas` (
  `id` int(22) NOT NULL,
  `precioDolar` float NOT NULL,
  `precioEuro` float NOT NULL,
  `compra` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `descuento` varchar(22) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `divisas`
--

INSERT INTO `divisas` (`id`, `precioDolar`, `precioEuro`, `compra`, `fecha`, `descuento`) VALUES
(115, 0, 0, '', '2020-08-31 01:42:24', ''),
(116, 0, 0, '', '2020-08-31 01:42:49', ''),
(124, 3.03, 4.03, '$ 3.96', '2020-08-31 04:19:44', 'S/ 12'),
(125, 3.67, 4.67, 'S/ 2129.52', '2020-08-31 04:19:49', '€ 456'),
(126, 3.12, 4.12, 'S/ 3781.44', '2020-08-31 04:19:55', '$ 1212'),
(127, 3.22, 4.22, 'S/ 5114.64', '2020-08-31 04:20:10', '€ 1212'),
(128, 3.11, 4.11, 'S/ 37696997.31', '2020-08-31 04:20:18', '$ 12121221'),
(129, 3.53, 4.53, 'S/ 4278.36', '2020-08-31 04:20:23', '$ 1212');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `divisas`
--
ALTER TABLE `divisas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `divisas`
--
ALTER TABLE `divisas`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
