-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2023 a las 11:26:01
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
-- Base de datos: `huertabdv3.1`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Consultar_historico` ()   begin

SELECT id_his_her, Inventario_herramientas.nombre, usuario.nombres, historico_herramientas.fecha_entrega,fecha_devolucion, historico_herramientas.estado
FROM historico_herramientas
INNER JOIN usuario
ON usuario.id_usuario=historico_herramientas.id_usuario
INNER JOIN inventario_herramientas
ON inventario_herramientas.id_inv_her = historico_herramientas.id_inv_her;
                                                    

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `horas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_usuario`, `estado`, `fecha_asistencia`, `horas`) VALUES
(1, 234, 'Activo', '2023-07-16', 10),
(2, 234, 'Activo', '2023-07-17', 4),
(3, 234, 'Activo', '2023-07-18', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma_actividades`
--

CREATE TABLE `cronograma_actividades` (
  `id_cro_act` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_labor_social` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cronograma_actividades`
--

INSERT INTO `cronograma_actividades` (`id_cro_act`, `fecha_inicio`, `fecha_fin`, `id_labor_social`, `id_zona`) VALUES
(1, '2023-07-08', '2023-07-09', 1, 3),
(2, '2023-07-15', '2023-07-16', 8, 4),
(3, '2023-07-15', '2023-07-16', 5, 3),
(4, '2023-07-15', '2023-07-16', 10, 4),
(6, '2023-07-15', '2023-07-16', 9, 4),
(7, '2023-07-15', '2023-07-16', 2, 1),
(8, '2023-07-15', '2023-07-16', 7, 3),
(9, '2023-07-15', '2023-07-16', 4, 2),
(10, '2023-07-15', '2023-07-16', 11, 4),
(11, '2023-07-15', '2023-07-16', 6, 3),
(12, '2023-07-15', '2023-07-16', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `codigo_curso` varchar(5) NOT NULL,
  `nombre_curso` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `codigo_curso`, `nombre_curso`) VALUES
(1, '9', '901'),
(2, '9', '902'),
(3, '9', '903'),
(4, '9', '904'),
(5, '10', '1001'),
(6, '10', '1002'),
(7, '10', '1003'),
(8, '10', '1004'),
(9, '11', '1101'),
(10, '11', '1102'),
(11, '11', '1103'),
(12, '11', '1104');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_herramienta`
--

CREATE TABLE `estado_herramienta` (
  `id_est_her` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estado_herramienta`
--

INSERT INTO `estado_herramienta` (`id_est_her`, `nombre`) VALUES
(1, 'Bueno'),
(2, 'Regular'),
(3, 'Malo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_herramientas`
--

CREATE TABLE `historico_herramientas` (
  `id_his_her` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `estado` enum('Perdida','Cerrado','Activo') NOT NULL,
  `id_inv_her` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historico_herramientas`
--

INSERT INTO `historico_herramientas` (`id_his_her`, `id_usuario`, `fecha_entrega`, `fecha_devolucion`, `estado`, `id_inv_her`) VALUES
(5, 233, '2023-07-17', '0000-00-00', 'Perdida', 7),
(6, 233, '2023-07-17', '0000-00-00', 'Perdida', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_herramientas`
--

CREATE TABLE `inventario_herramientas` (
  `id_inv_her` int(11) NOT NULL,
  `id_est_her` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `estado` enum('Bueno','Reegular','Malo') NOT NULL,
  `disponibilidad` enum('disponible','no disponible') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario_herramientas`
--

INSERT INTO `inventario_herramientas` (`id_inv_her`, `id_est_her`, `nombre`, `estado`, `disponibilidad`) VALUES
(6, 1, 'Machete', 'Bueno', 'disponible'),
(7, 1, 'Achuela', 'Bueno', 'disponible'),
(8, 1, 'Tijera', 'Bueno', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `labor_social`
--

CREATE TABLE `labor_social` (
  `id_labor_social` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id_wiki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `labor_social`
--

INSERT INTO `labor_social` (`id_labor_social`, `nombre`, `descripcion`, `id_wiki`) VALUES
(1, 'Profesor', 'Profesor', 1),
(2, 'siembra de papa', '¿Quieres aprender a sembrar papa?', 1),
(3, 'siembra de fresa ', '¿Quieres aprender a sembrar fresa?', 1),
(4, 'Siembra de plantas medicinales 1', '¿Quieres aprender a sembrar plantas medicinales 1?', 1),
(5, 'siembra de curuba 1', '¿Quieres aprender a sembrar curuba 1?', 1),
(6, 'siembra de yuca', '¿Quieres aprender a sembrar yuca?', 1),
(7, 'siembra de pepino', '¿Quieres aprender a sembrar pepino?', 1),
(8, 'siembra de cebolla', '¿Quieres aprender a sembrar cebolla?', 1),
(9, 'siembra de lulo', '¿Quieres aprender a sembrar lulo?', 1),
(10, 'siembra de curuba 2', '¿Quieres aprender a sembrar curuba 2?', 1),
(11, 'siembra de plantas medicinales 2', '¿Quieres aprender a sembrar plantas medicinales 2?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`, `descripcion`) VALUES
(1, 'profesor', 'puede crear, colsultar, actualizar y eliminar'),
(2, 'estudiante', 'puede consultar etc'),
(3, 'admin', 'puede hacer lo que quiera en la CRUD de la bd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `documento` int(25) NOT NULL,
  `jornada` enum('mañana','tarde') NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_cro_act` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres`, `apellidos`, `documento`, `jornada`, `contrasena`, `estado`, `id_rol`, `id_curso`, `id_cro_act`) VALUES
(233, 'camilo andres', 'soriano segura', 1023371462, 'mañana', '$2y$10$M5wG9dqx0AbjmIwGS34sLeq8Vp/hJLBNo9AEzm.tLWONShYhx4ey6', 'activo', 1, 1, 1),
(234, 'Jhon', 'Gonzalez', 123456789, 'tarde', 'jhon123#', 'activo', 2, 4, 1),
(236, 'Andres Camilo ', 'Soriano', 1213141516, 'mañana', '$2y$10$.pRpY2mhiRgqXIAxVgv/Q.DXPsnAjOms8kTD8X4lExQdftf2T7yLO', 'activo', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wiki`
--

CREATE TABLE `wiki` (
  `id_wiki` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `referencias_web` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `wiki`
--

INSERT INTO `wiki` (`id_wiki`, `nombre`, `descripcion`, `referencias_web`) VALUES
(1, 'Profesor', 'Profesor', 'Profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id_zona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id_zona`, `nombre`, `descripcion`) VALUES
(1, 'zona 1', 'esta zona trabaja papa, fresa y zona de descanso'),
(2, 'zona 2', 'esta zona trabaja aula verde, inventario y medicina'),
(3, 'zona 3', 'esta zona trabaja curuba, yuca, pepino y compus'),
(4, 'zona 4', 'esta zona trabaja cebolla, lulo, curuba y medicina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_control_asistencia_fk` (`id_usuario`);

--
-- Indices de la tabla `cronograma_actividades`
--
ALTER TABLE `cronograma_actividades`
  ADD PRIMARY KEY (`id_cro_act`),
  ADD KEY `zona_idzona` (`id_zona`),
  ADD KEY `id_labor_social` (`id_labor_social`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `estado_herramienta`
--
ALTER TABLE `estado_herramienta`
  ADD PRIMARY KEY (`id_est_her`);

--
-- Indices de la tabla `historico_herramientas`
--
ALTER TABLE `historico_herramientas`
  ADD PRIMARY KEY (`id_his_her`),
  ADD KEY `usuario_idregistro` (`id_usuario`),
  ADD KEY `id_inv_her` (`id_inv_her`);

--
-- Indices de la tabla `inventario_herramientas`
--
ALTER TABLE `inventario_herramientas`
  ADD PRIMARY KEY (`id_inv_her`),
  ADD KEY `id_herramienta` (`id_est_her`);

--
-- Indices de la tabla `labor_social`
--
ALTER TABLE `labor_social`
  ADD PRIMARY KEY (`id_labor_social`),
  ADD KEY `id_wiki` (`id_wiki`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_idrol` (`id_rol`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_cro_act` (`id_cro_act`);

--
-- Indices de la tabla `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`id_wiki`),
  ADD KEY `plantas_idPlanta` (`referencias_web`),
  ADD KEY `usuario_idregistro` (`nombre`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cronograma_actividades`
--
ALTER TABLE `cronograma_actividades`
  MODIFY `id_cro_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estado_herramienta`
--
ALTER TABLE `estado_herramienta`
  MODIFY `id_est_her` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT de la tabla `historico_herramientas`
--
ALTER TABLE `historico_herramientas`
  MODIFY `id_his_her` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inventario_herramientas`
--
ALTER TABLE `inventario_herramientas`
  MODIFY `id_inv_her` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `labor_social`
--
ALTER TABLE `labor_social`
  MODIFY `id_labor_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT de la tabla `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id_wiki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2225;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `cronograma_actividades`
--
ALTER TABLE `cronograma_actividades`
  ADD CONSTRAINT `cronograma_actividades_ibfk_2` FOREIGN KEY (`id_zona`) REFERENCES `zona` (`id_zona`),
  ADD CONSTRAINT `cronograma_actividades_ibfk_3` FOREIGN KEY (`id_labor_social`) REFERENCES `labor_social` (`id_labor_social`);

--
-- Filtros para la tabla `historico_herramientas`
--
ALTER TABLE `historico_herramientas`
  ADD CONSTRAINT `historico_herramientas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `historico_herramientas_ibfk_2` FOREIGN KEY (`id_inv_her`) REFERENCES `inventario_herramientas` (`id_inv_her`);

--
-- Filtros para la tabla `inventario_herramientas`
--
ALTER TABLE `inventario_herramientas`
  ADD CONSTRAINT `inventario_herramientas_ibfk_1` FOREIGN KEY (`id_est_her`) REFERENCES `estado_herramienta` (`id_est_her`);

--
-- Filtros para la tabla `labor_social`
--
ALTER TABLE `labor_social`
  ADD CONSTRAINT `labor_social_ibfk_1` FOREIGN KEY (`id_wiki`) REFERENCES `wiki` (`id_wiki`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`id_cro_act`) REFERENCES `cronograma_actividades` (`id_cro_act`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
