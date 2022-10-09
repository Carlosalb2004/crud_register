-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2022 a las 05:51:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_register`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `name` text NOT NULL,
  `phone_number` int(9) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `dni`, `name`, `phone_number`, `address`, `email`) VALUES
(33, 75412832, 'Pepe', 956328417, 'Calle Bolivar 152', 'pepe@gmail.com'),
(34, 26531425, 'Pedro', 975486258, 'Avenida Ejercito', 'pedrito69@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviceclients`
--

CREATE TABLE `serviceclients` (
  `id_sc` int(200) NOT NULL,
  `id_u` int(200) NOT NULL,
  `id_c` int(200) NOT NULL,
  `id_s` int(200) NOT NULL,
  `monto` int(200) NOT NULL,
  `realizado` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `serviceclients`
--

INSERT INTO `serviceclients` (`id_sc`, `id_u`, `id_c`, `id_s`, `monto`, `realizado`, `fecha`) VALUES
(17, 1, 33, 28, 300, 'SI', '2022-10-09 10:48:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `costo` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `nombre`, `costo`) VALUES
(26, 'Limpieza', 150),
(27, 'Seguridad', 200),
(28, 'Cocinera', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `last_name`, `birthday`, `username`, `password`) VALUES
(1, 'Carlos', 'Alberto', 'Avila Gutierrez', '2022-10-04', 'carlos', 'carlos'),
(17, 'Junior', 'Anderson', 'Palomino', '2022-10-01', 'junior', 'junior'),
(18, 'Josue', 'Santiago', 'Laurente', '2022-10-04', 'josue', 'josue');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serviceclients`
--
ALTER TABLE `serviceclients`
  ADD PRIMARY KEY (`id_sc`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_s` (`id_s`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `serviceclients`
--
ALTER TABLE `serviceclients`
  MODIFY `id_sc` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `serviceclients`
--
ALTER TABLE `serviceclients`
  ADD CONSTRAINT `FK_SC-CLIENTS` FOREIGN KEY (`id_c`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SC-SERVICES` FOREIGN KEY (`id_s`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SC-USERS` FOREIGN KEY (`id_u`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
