-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2024 a las 04:17:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoalmuerzos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Ingreso` (IN `Usuario` VARCHAR(100), IN `Clave` VARCHAR(100))   SELECT * FROM usuarios
WHERE nombre = Usuario 
AND contraseña = Clave$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `usuario` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `jornada` enum('Mañana','Tarde','Noche') DEFAULT NULL,
  `Tutor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `jornada`, `Tutor`) VALUES
(4001, 'ELECTRICIDAD ', 'Mañana', 'PEDRO VERGARA'),
(4002, 'ELECTRICIDAD', 'Mañana', 'MARTHA BARRERA'),
(4003, 'ARQUITECTURA', 'Mañana', 'CAROLINA SILVA'),
(4004, 'ARQUITECTURA', 'Mañana', 'YANET MUÑOZ'),
(4005, 'SOFTWARE', 'Mañana', 'SANDY CORTES'),
(4006, 'VENTAS', 'Mañana', 'MARTHA ROCIO ALVAREZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `curso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `curso_id`) VALUES
(1, 'Ardila Prieto 	Juan Sebastian ', 4005),
(2, 'Arenas Garay 	Brayan José  ', 4005),
(3, 'Buitrago Parra	Juan David ', 4005),
(4, 'Caicedo Delgado	Jose Efrain ', 4005),
(5, 'Cañon Salamanca	José Alberto ', 4005),
(6, 'Carreño Oliva 	Rosberely Camila  ', 4005),
(7, 'Castro Romero	Hernan Santiago ', 4005),
(8, 'Correa Navas	Diego Fernando  ', 4005),
(9, 'Espitia Villamil	Angel Simon ', 4005),
(10, 'Gonzalez Romero	Aalison Dallane ', 4005),
(11, 'Guerrero Palacios 	Harrison David ', 4005),
(12, 'Hurtado Mejía 	Santiago Eli  ', 4005),
(13, 'Martinez Macias 	Juan Esteban  ', 4005),
(14, 'Morales López	David Sneider ', 4005),
(15, 'Moreno Alayón	Juan Esteban ', 4005),
(16, 'Moreno Lopez	Daniel Steven ', 4005),
(17, 'Murcia Cañon	Evelyn Juliana ', 4005),
(18, 'Nieto Paredes	Heidy Solanguie ', 4005),
(19, 'Peralta Avendaño 	Esteban  ', 4005),
(20, 'Reina Molina	Evelyn Sofia ', 4005),
(21, 'Reyes Segura 	Cristofer  ', 4005),
(22, 'Rivera Bejarano	Danna Valeria ', 4005),
(23, 'Velandia Rojas	Dilan Stiven ', 4005),
(24, 'Villamarin Camargo	Jarith Carolina ', 4005),
(25, 'Acosta Malagon	Johan  Sebastian', 4001),
(26, 'Alvarez Hernádez Harold Steven', 4001),
(27, 'Arevalo Maria De Los Angel', 4001),
(28, 'Arias Benitez Derly Sofia', 4001),
(29, 'Calderon Cuellar Cristhian Fernando', 4001),
(30, 'Claros Campos Brandon Steve', 4001),
(31, 'Cortez Martinez Nicol Dayana', 4001),
(32, 'Díaz Vargas Karen Sofia', 4001),
(33, 'Figeroa Martinez Jojan Stiven', 4001),
(34, 'Fuelantala Camacho Juan Sebastián', 4001),
(35, 'Higuera Lopez Andres Felipe', 4001),
(36, 'López Cortes Heiner Farid', 4001),
(37, 'López Cortes Johan Camilo', 4001),
(38, 'Méndez Bohórquez Samuel Alejandro', 4001),
(39, 'Muñoz Poveda Andrés Stitch', 4001),
(40, 'Ortiz Torres Linda Gisel', 4001),
(41, 'Piñeros Triana Edwin Nicolas', 4001),
(42, 'Sanchez Vergara Queiner Eduardo', 4001),
(43, 'Silva Cristian', 4001),
(44, 'Tapiero Vega Jhonatan Albeiro', 4001),
(45, 'Tinjaca Rodríguez Sergio Antonio', 4001),
(46, 'Castiblanco Siatama	Kevin David', 4002),
(47, 'Clavijo Umaña Daniel Felipe', 4002),
(48, 'Gaitan Piraquive Sharid Natalia', 4002),
(49, 'Gonzalez Layton Fransy Mayerly', 4002),
(50, 'Hernández Galeano Jhoan Ferney', 4002),
(51, 'Hernandez Gutierrez Tomas Andred', 4002),
(52, 'Hernandez Riaño Mariana', 4002),
(53, 'Leon Najar Miguel Angel', 4002),
(54, 'Marin Vargas Juan Felipe', 4002),
(55, 'Mejía Bernal Hernán Camilo', 4002),
(56, 'Peña Castillo Harol Stiven', 4002),
(57, 'Perez Lopez Nicol Estefania', 4002),
(58, 'Prieto Parra Yesica Vanessa', 4002),
(59, 'Ramirez Bernal Sharit Valentina', 4002),
(60, 'Ramirez Delgadillo Daniel Andres', 4002),
(61, 'Ramos Soler Sharit Valentina', 4002),
(62, 'Rodriguez Reyes David Santiago', 4002),
(63, 'Rondon Mayorga Jhon Alejandro', 4002),
(64, 'Rubio Deivy Alejandro', 4002),
(65, 'Sanchez Suarez Alison Mariana', 4002),
(66, 'Tangarife Gonzalez Jose Angel', 4002),
(67, 'Tellez Zarza Samuel', 4002),
(68, 'Tolosa Barbosa Johan Esteban', 4002),
(69, 'Villamarin Pacalagua Fabian Estiben', 4002),
(70, 'Aristizabal Rusinque	Lindemeyer', 4003),
(71, 'Castro Romero Ana Maria', 4003),
(72, 'Dimate Mesa Luis Alejandro', 4003),
(73, 'Fuentes Buitrago Andrea Valentina Del Valle', 4003),
(74, 'Gomez Fonseca Nicoll Jasbleiddy', 4003),
(75, 'Gonzalez Novoa Juan Felipe', 4003),
(76, 'Guevara Betancur Laura Camila', 4003),
(77, 'Guzmán Estrella Juan José', 4003),
(78, 'Huertas Bernal David Felipe', 4003),
(79, 'Hurtado Piernagorda Karol Stefany', 4003),
(80, 'Lara Cardenas Johan David', 4003),
(81, 'Mateus Gómez Nicol Samanta', 4003),
(82, 'Perez Bernal Karen Jimena', 4003),
(83, 'Reyes Reinoso Heidy Yulieth', 4003),
(84, 'Rojas Villarraga Edwin Daniel', 4003),
(85, 'Rubio Ariza Karen Natalia', 4003),
(86, 'Ruiz Arias Camila Valentina', 4003),
(87, 'Salinas Mondragón Gorgin Ferney', 4003),
(88, 'Sierra Ascencio Valery Sofia', 4003),
(89, 'Torres Marbello Oscar Daniel', 4003),
(90, 'Wilches Mendez Lesly Valentina', 4003),
(91, 'Acevedo Aceros	Johan Samuel', 4004),
(92, 'Agredo Ruiz Jeimmy Lizeth', 4004),
(93, 'Arias Rodríguez Maria Paula', 4004),
(94, 'Atencio Luisa Fernanda', 4004),
(95, 'Castiblanco Castro Manuel Alexis', 4004),
(96, 'Fuya Suarez Miguel Ángel', 4004),
(97, 'Granados Guzmán Manuela', 4004),
(98, 'Guerrero Bermudez Dayana', 4004),
(99, 'Gutiérrez Caicedo Mara Sofía', 4004),
(100, 'Gutierrez Ramirez Joseph Joel', 4004),
(101, 'Mora Guzman Luna Alexandra', 4004),
(102, 'Olivero Díaz Juan Esteban', 4004),
(103, 'Ordoñez Vivas Jorge Andrés', 4004),
(104, 'Pérez Bermudes Andersson Jair', 4004),
(105, 'Petro Molina Sharon Nicole', 4004),
(106, 'Piñeros Sanchez Karen Sofia', 4004),
(107, 'Pinzón Aguirre Lina María', 4004),
(108, 'Ramos Soler Juan Nicolás', 4004),
(109, 'Rodríguez Catañeda Diana Katherine', 4004),
(110, 'Sanchez Martinez Jeisson Sebastian', 4004),
(111, 'Tabares Montero Valentina', 4004),
(112, 'Tarquino Holguin Lizeth Camila', 4004),
(113, 'Alfiz Cuervo Daniel Esteban', 4004),
(114, 'Argüello Caceres	Juan Andrés', 4006),
(115, 'Castillo Garzon Paula Ximena', 4006),
(116, 'Castro Fonseca Sarah Nicolle', 4006),
(117, 'Castro Gómez Ashley Julieth', 4006),
(118, 'Cusva Tovar Joseph David', 4006),
(119, 'Dachiardy Ramírez Dana Lizeth', 4006),
(120, 'Díaz Lozano Jenny Katherinne', 4006),
(121, 'Galicia Niño Danna Katerine', 4006),
(122, 'Garzon Alape Nelson Steven', 4006),
(123, 'Gomez Avella Deiby Santiago', 4006),
(124, 'Gonzalez Romero Deysi Stefania', 4006),
(125, 'López Baez Evelin Yurley', 4006),
(126, 'López Buitrago Juan Felipe', 4006),
(127, 'López Rodríguez Solangie', 4006),
(128, 'Muñoz Camacho Mariana', 4006),
(129, 'Paez Carvajal Eimmy Sofia', 4006),
(130, 'Palacios Palacios Karen Yineth', 4006),
(131, 'Pineda Rojas Karen Tatiana', 4006),
(132, 'Santofimio Martinez Sofia', 4006),
(133, 'Torres Sarmiento NICOL DAYAN', 4006),
(134, 'Velandia Ospina Maria Camila', 4006);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refrigerios`
--

CREATE TABLE `refrigerios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `distribuidor` varchar(50) DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(11) NOT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `cursoId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `rol` enum('Coordinador','Auxiliar') DEFAULT NULL,
  `estado` enum('Activo','Inactivo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `contraseña`, `rol`, `estado`) VALUES
(1, 'reyes@arp2', '123', 'Auxiliar', 'Inactivo'),
(3, 'C@ARP.EDU.CO', '123', 'Coordinador', 'Activo'),
(4, 'd@r', '123', 'Auxiliar', 'Activo'),
(5, 'A@ARP', '123', 'Auxiliar', 'Activo'),
(6, 'B@ARP', '123', 'Auxiliar', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Indices de la tabla `refrigerios`
--
ALTER TABLE `refrigerios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursoId` (`cursoId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4009;

--
-- AUTO_INCREMENT de la tabla `refrigerios`
--
ALTER TABLE `refrigerios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`cursoId`) REFERENCES `cursos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
