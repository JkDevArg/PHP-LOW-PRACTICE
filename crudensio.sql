-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 03:00:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudensio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multipledata`
--

CREATE TABLE `multipledata` (
  `id` int(11) NOT NULL,
  `checkBoxData` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `multipledata`
--

INSERT INTO `multipledata` (`id`, `checkBoxData`) VALUES
(1, 'React,HTML');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radiodata`
--

CREATE TABLE `radiodata` (
  `id` int(11) NOT NULL,
  `gender` enum('male','female','no binary','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `radiodata`
--

INSERT INTO `radiodata` (`id`, `gender`) VALUES
(2, 'no binary'),
(3, 'male'),
(4, 'female');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `selectdata`
--

CREATE TABLE `selectdata` (
  `id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `selectdata`
--

INSERT INTO `selectdata` (`id`, `place`) VALUES
(1, 'Mumbai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(21) NOT NULL,
  `multipleData` varchar(100) NOT NULL,
  `gender` enum('male','female','no binary','') NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phone`, `multipleData`, `gender`, `place`) VALUES
(1, 'aas', 'lkasd', 'asds@gmail.com', '123123123123', 'React,HTML', 'no binary', 'Bangalore'),
(2, 'pao', 'lita star', 'jmjhmjkuikui@hotmail.com', '987822645256456465456', 'JavaScript,React', 'female', ''),
(3, 'q bueno q funciona', 'este programa :vv', 'puntojotapeje@meme.com', '010101012', 'JavaScript,React', 'male', ''),
(6, 'asdkjasd', 'kasdk', 'asdasd@gmail.com', '123123131', '', 'male', ''),
(7, 'josh', 'jsohja', 'ajsjsa@gmail.com', '123123132', '', 'male', ''),
(9, 'akjsakjsd', 'asasasdasdmsa', 'asdasdq@asdad.com', '123123123', '', 'male', ''),
(10, 'ssadsd', 'jsohja', 'fefe@gmail.com', '1212323', 'React,HTML', 'male', ''),
(11, 'ueueue', 'ueueue', 'ueueue@ueue.com', '123123123', 'React', 'no binary', ''),
(12, 'jsohja', 'lkasdkl', 'klaksld@gmail.com', '12312132', 'React', 'female', 'Mysore'),
(13, 'souask', 'aslkasd', 'jkdeas@gmail.com', '12123123', 'React', 'female', 'Bangalore'),
(14, 'iakaka', 'iakaka', 'iakaka@iakaka.com', '01010101', '', 'male', 'Bangalore'),
(15, 'exanoke', 'exanaoke', 'eaxajs@gmail.com', '939393', 'HTML', 'no binary', 'Kolkata'),
(16, 'mkeire', 'mkaso', 'aaaka@gmail.com', '1293939393939393', '', 'female', 'Bangalore');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `multipledata`
--
ALTER TABLE `multipledata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `radiodata`
--
ALTER TABLE `radiodata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `selectdata`
--
ALTER TABLE `selectdata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `multipledata`
--
ALTER TABLE `multipledata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `radiodata`
--
ALTER TABLE `radiodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `selectdata`
--
ALTER TABLE `selectdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
