-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2020 a las 07:05:29
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examplepdo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `nameC` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `nameC`, `status_id`) VALUES
(1, 'terror', 1),
(2, 'amor', 2),
(3, 'accion', 1),
(4, 'deportes', 1),
(5, 'intriga', 2),
(6, 'ciencia ficcion', 1),
(7, 'wester', 2),
(8, 'animacion', 1),
(9, 'aventura', 2),
(10, 'belica', 1),
(11, 'Suspenso', 1),
(13, 'suspensooooooo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_movie`
--

CREATE TABLE `category_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category_movie`
--

INSERT INTO `category_movie` (`id`, `movie_id`, `category_id`) VALUES
(1, 5, 11),
(2, 5, 9),
(3, 6, 11),
(4, 6, 9),
(23, 22, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) UNSIGNED NOT NULL,
  `nameM` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `nameM`, `description`, `status_id`, `user_id`) VALUES
(5, 'EL DEWFWEFEFFWEF', 'DSFSDFSDF', 1, 2),
(6, 'EL DEWFWEFEFFWEF', 'DSFSDFSDF', 1, 2),
(7, 'EL DEWFWEFEFFWEF', 'DSFSDFSDF', 1, 2),
(8, 'EL DEWFWEFEFFWEF', 'DSFSDFSDF', 1, 2),
(22, 'anabell', 'FYJFJGJ', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie_rental`
--

CREATE TABLE `movie_rental` (
  `id` int(11) UNSIGNED NOT NULL,
  `movie_id` int(11) UNSIGNED NOT NULL,
  `rental_id` int(11) UNSIGNED NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movie_rental`
--

INSERT INTO `movie_rental` (`id`, `movie_id`, `rental_id`, `price`) VALUES
(1, 22, 4, NULL),
(2, 22, 5, NULL),
(3, 8, 5, NULL),
(4, 6, 5, NULL),
(5, 22, 7, NULL),
(6, 5, 7, NULL),
(7, 22, 8, NULL),
(8, 8, 8, NULL),
(9, 22, 9, NULL),
(10, 8, 9, NULL),
(11, 22, 10, NULL),
(12, 8, 10, NULL),
(13, 5, 10, NULL),
(14, 22, 11, NULL),
(15, 8, 11, NULL),
(16, 6, 11, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentails`
--

CREATE TABLE `rentails` (
  `id` int(11) UNSIGNED NOT NULL,
  `star_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rentails`
--

INSERT INTO `rentails` (`id`, `star_date`, `end_date`, `total`, `status_id`, `user_id`) VALUES
(1, '2020-09-08', '2020-09-17', '60000', 1, 2),
(3, '2020-08-31', '2020-09-24', '500000000', 1, 3),
(4, '2020-08-31', '2020-09-24', '500000000', 1, 3),
(5, '2020-08-26', '2020-09-21', '20000', 1, 3),
(7, '2020-09-17', '2020-09-24', '488888777', 1, 3),
(8, '2020-09-03', '2020-09-30', '8900', 1, 3),
(9, '2020-09-09', '2020-09-18', '800000', 1, 3),
(10, '2020-09-09', '2020-09-18', '666', 1, 3),
(11, '2020-09-02', '2020-09-25', '30000', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `status_id`) VALUES
(1, 'Administrador', 1),
(2, 'Empleado', 1),
(3, 'Cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `type_status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `type_status_id`) VALUES
(1, 'Activo', 1),
(2, 'Inactivo', 1),
(3, 'Bloqueado', 2),
(4, 'Alquilado', 3),
(5, 'Disponible', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_statuses`
--

CREATE TABLE `type_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `type_statuses`
--

INSERT INTO `type_statuses` (`id`, `name`) VALUES
(1, 'General'),
(2, 'Usuario'),
(3, 'Peliculas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status_id`, `role_id`) VALUES
(2, 'andres lopeez', 'andres@andres.coooooo', '123', 1, 2),
(3, 'SANTIAGO', 'san@san', '123', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indices de la tabla `category_movie`
--
ALTER TABLE `category_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category_movie_movies` (`movie_id`),
  ADD KEY `FK_category_movie_categories` (`category_id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_movies_users` (`user_id`),
  ADD KEY `FK_movies_statuses` (`status_id`);

--
-- Indices de la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rental` (`rental_id`),
  ADD KEY `fk_movie` (`movie_id`);

--
-- Indices de la tabla `rentails`
--
ALTER TABLE `rentails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_rentails_users` (`user_id`),
  ADD KEY `FK_rentails_statuses` (`status_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_roles_statuses` (`status_id`);

--
-- Indices de la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_statuses_type_statuses` (`type_status_id`) USING BTREE;

--
-- Indices de la tabla `type_statuses`
--
ALTER TABLE `type_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FK_users_statuses` (`status_id`),
  ADD KEY `FK_users_roles` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `category_movie`
--
ALTER TABLE `category_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `rentails`
--
ALTER TABLE `rentails`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `type_statuses`
--
ALTER TABLE `type_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`Id`);

--
-- Filtros para la tabla `category_movie`
--
ALTER TABLE `category_movie`
  ADD CONSTRAINT `FK_category_movie_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_category_movie_movies` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `FK_movies_statuses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_movies_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  ADD CONSTRAINT `fk_movie` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_rental` FOREIGN KEY (`rental_id`) REFERENCES `rentails` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rentails`
--
ALTER TABLE `rentails`
  ADD CONSTRAINT `FK_rentails_statuses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_rentails_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `FK_roles_statuses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `FK_statuses_type_statuses` FOREIGN KEY (`type_status_id`) REFERENCES `type_statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_users_statuses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
