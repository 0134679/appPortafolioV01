CREATE TABLE `administrador` (
  `rut_admin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nombre_admin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`rut_admin`, `password`, `nombre_admin`) VALUES
('11111111-1', 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `rut_cliente` varchar(12) NOT NULL,
  `password` varchar(5) NOT NULL,
  `nombre_cliente` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`rut_cliente`, `password`, `nombre_cliente`) VALUES
('33333333-3', '14253', 'walala'),
('99999999-9', '12345', 'sofia');

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
('22222222-2', '54321', 'miguel');

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
  ADD PRIMARY KEY (`rut_cliente`);

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
COMMIT;