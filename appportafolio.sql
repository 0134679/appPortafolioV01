-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2024 a las 18:55:49
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
-- Base de datos: `appportafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `rut_admin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nombre_admin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`rut_admin`, `password`, `nombre_admin`) VALUES
('11111111-1', 'admin', 'admin1'),
('22222222-2', 'admin', 'admin2'),
('33333333-3', 'admin', 'admin3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `rut` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `codigoPostal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`rut`, `nombre`, `password`, `email`, `telefono`, `direccion`, `ciudad`, `codigoPostal`, `created_at`) VALUES
('', '', '$2y$10$ZF1dVyoZ0YuIcHVLta5PM.h9cD7jHf.ai2NityOoSD9HJWRGcxB2G', '', '', '', '', '', '2024-06-02 15:16:35'),
('11111111-1', 'efsfesfsefse', '$2y$10$N5rx78KxYuoBn62n1OVeNOGejWrgyizmeT.09XnO8BZkTG1HAN2e6', 'dfs@sdfsfd.cl', '+56922443355', 'sfsfd223423', 'fsfdf', '123333333', '2024-06-02 20:30:14'),
('11421111-1', 'wdawdwad', '$2y$10$p5lTf1ykyVkE31GDQbVWWeXy/KPotK3mwEx85DXEzvokZAVIia1ZO', 'fsdfs@fsdf.cl', '+56911332244', 'fgdfg 543', 'fsd f43', '123455334', '2024-06-02 16:09:49'),
('12333333-4', 'efsfsefse', '$2y$10$7Uwo0g439yttzAlvCvAXzO9cOvEX5IKEpL7s1NJUhcbURpRzDJe.G', 'sdfs@fsf.cl', '+56922334455', 'fdsad34234', 'dfgd5345', '23221321', '2024-06-02 16:00:52'),
('12345678-9', 'Juan Pérez', '$2y$10$rj8YbMTVy8Hjn5Fu3BaMyOsRryT3w7PBHxpCfAGDo9SNlHYqX0Fy6', 'juan@example.com', '+56987654321', 'Avenida de los Ejemplos 123', 'Santiago', '7500000', '2024-06-02 15:58:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `contenido`, `imagen`, `fecha_publicacion`) VALUES
(1, 'Noticia 1', 'Contenido de la noticia 1...', 'https://example.com/imagen1.jpg', '2024-06-02 20:27:55'),
(2, 'Noticia 2', 'Contenido de la noticia 2...', 'https://example.com/imagen2.jpg', '2024-06-02 20:27:55'),
(3, 'Noticia 3', 'Contenido de la noticia 3...', 'https://example.com/imagen3.jpg', '2024-06-02 20:27:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id_publicidad` int(3) NOT NULL,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `contenido` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`id_publicidad`, `titulo`, `subtitulo`, `contenido`, `imagen`) VALUES
(1, 'noticia1', 'subtitulo1', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat arcu et ipsum lacinia vestibulum. Sed vitae nibh in odio aliquam imperdiet. Vivamus eu quam ante. Suspendisse dui massa, scelerisque at nibh quis, pharetra suscipit sem. Quis', 'https://img.freepik.com/foto-gratis/hombre-tiro-medio-gafas-vr_23-2149126949.jpg?t=st=1714756381~exp=1714759981~hmac=e45c732bbe29dd9fdd26fad82229ca11209a066482ac16bb525796df008075c9&w=1380');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `rut_vendedor` varchar(12) NOT NULL,
  `password` varchar(5) NOT NULL,
  `nombre_vendedor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`rut_vendedor`, `password`, `nombre_vendedor`) VALUES
('12122123-0', '12345', 'ElTioG'),
('22222222-2', '54321', 'miguel'),
('31300300-3', '12345', 'CochinoLarryCorp'),
('31909090-0', '12345', 'El Tio Cosaa'),
('80100100-1', '12345', 'el mamalon'),
('90900900-9', '12345', 'El Mamerto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `rut` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `codigoPostal` varchar(255) NOT NULL,
  `rutNegocio` varchar(255) NOT NULL,
  `nombreNegocio` varchar(255) NOT NULL,
  `telefonoNegocio` varchar(255) NOT NULL,
  `urlNegocio` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`rut`, `nombre`, `password`, `email`, `telefono`, `direccion`, `ciudad`, `codigoPostal`, `rutNegocio`, `nombreNegocio`, `telefonoNegocio`, `urlNegocio`, `created_at`) VALUES
('', '', '$2y$10$TJjWeFVsiz9mID/WNAYyvev8lJ1A.DSgjOolt/ERfOO8eX0sY26VC', '', '', '', '', '', '', '', '', '', '2024-06-04 16:46:52'),
('11111111-1', 'fedfsefsefs e ert erf', '$2y$10$mYRNWXur8KtI.DYtFS/0WOkWJjPxQtKY2iuJ5bZTop118v5MlMRu6', 'fsefse@vendedor.cl', '+5693432443', 'fsef 12354', 'santiago', '234234234', 'neneinc@inc.inc', 'nene', '+5621312312', '13231231231231www.', '2024-06-04 16:46:53'),
('11111111-2', 'wadawdawdaw', '$2y$10$hps9hyCT4zy.8w5N9zY6Hu8K4iQwGhrzeUdh8lwDSL9pclbnCaN36', 'fsef@sfsf.cl', '+5674324342', 'esfsef 654', 'lucuma', '152463540', '1321312312-8', 'ELJejeInc', 'Incjeje@jeje.cl', 'http://www.jejeInc.cl', '2024-06-04 16:48:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`rut_admin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id_publicidad`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`rut_vendedor`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
