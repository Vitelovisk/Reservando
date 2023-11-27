-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2023 a las 18:47:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idc` int(11) NOT NULL,
  `ncargo` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idc`, `ncargo`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_status` int(11) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_status`, `status`) VALUES
(1, 'PENDENTE'),
(2, 'EM ANDAMENTO'),
(3, 'FINALIZADO'),
(4, 'NÃO COMPARECEU');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idHorario` int(11) NOT NULL,
  `tempo` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idHorario`, `tempo`, `hora`) VALUES
(1, 'ALMOCO', '12:00 PM'),
(2, 'ALMOCO', '12:30 PM'),
(3, 'ALMOCO', '1:00 PM'),
(4, 'ALMOCO', '1:30 PM'),
(5, 'ALMOCO', '2:00 PM'),
(6, 'ALMOCO', '2:30 PM'),
(7, 'ALMOCO', '3:00 PM'),
(8, 'JANTAR', '6:00 PM'),
(9, 'JANTAR', '6:30 PM'),
(10, 'JANTAR', '7:00 PM'),
(11, 'JANTAR', '7:30 PM'),
(12, 'JANTAR', '8:00 PM'),
(13, 'JANTAR', '8:30 PM'),
(14, 'JANTAR', '9:00 PM'),
(15, 'JANTAR', '9:30 PM'),
(16, 'JANTAR', '10:00 PM'),
(17, 'JANTAR', '10:00 PM'),
(18, 'JANTAR', '10:30 PM'),
(19, 'JANTAR', '11:00 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `idm` int(11) NOT NULL,
  `quantidade` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`idm`, `quantidade`) VALUES
(1, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idr` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fechar` date DEFAULT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado_id_status` int(11) NOT NULL,
  `usuario_idu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idr`, `quantidade`, `fechar`, `tipo`, `hora`, `comentario`, `estado_id_status`, `usuario_idu`) VALUES
(1, 6, '2023-05-22', 'Almoco', '13:30', 'Descripcionn nuevo', 3, 2),
(6, 15, '2023-07-17', 'Almoco', '02:30 PM', 'Holaaaa', 3, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomes` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apelidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(20) NOT NULL,
  `numero` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direcao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pontos` int(30) NOT NULL,
  `estado_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo_idc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nomes`, `apelidos`, `dni`, `numero`, `fecha`, `email`, `direcao`, `password`, `pontos`, `estado_usuario`, `cargo_idc`) VALUES
(1, 'Sofia', 'sof', 0, '984249222', '30/08/1997', 'admin@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 1),
(9, 'Mariana', 'Mari', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2),
(10, 'Lucas', 'Lu', 71985652, '984249222', '2000-02-16', 'estefany@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2),
(11, 'Gabriela', 'Gabi', 71985653, '984249222', '1997-07-16', 'julio@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 30, 'ACTIVO', 2),
(12, 'Rafael', 'Rafa', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2),
(13, 'Fernanda', 'Nanda', 71985652, '984249222', '2000-02-16', 'estefany@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2),
(14, 'Gustavo', 'Gus', 71985653, '984249222', '1997-07-16', 'julio@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 30, 'ACTIVO', 2),
(15, 'Carolina', 'Carol', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2),
(16, 'Pedro', 'Peu', 71985652, '984249222', '2000-02-16', 'estefany@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2),
(17, 'Leticia', 'Leti', 71985653, '984249222', '1997-07-16', 'julio@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 30, 'ACTIVO', 2),
(18, 'Diego', 'Di', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idc`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idHorario`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`idm`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `fk_solicitud_estado1_idx` (`estado_id_status`),
  ADD KEY `fk_solicitud_usuario1_idx` (`usuario_idu`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuario_cargo_idx` (`cargo_idc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idHorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_solicitud_estado1` FOREIGN KEY (`estado_id_status`) REFERENCES `estado` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_solicitud_usuario1` FOREIGN KEY (`usuario_idu`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_cargo` FOREIGN KEY (`cargo_idc`) REFERENCES `cargo` (`idc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
