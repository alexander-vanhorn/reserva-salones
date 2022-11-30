-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2022 a las 04:58:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_distrito` (IN `i_operacion` CHAR(1), IN `i_filtro` INT)   BEGIN

IF i_operacion = 'B' THEN
	IF i_filtro is not null THEN
    	SELECT * FROM distrito
        WHERE id_provincia = i_filtro;
    ELSE
    	SELECT * FROM distrito;
    END IF;
END IF;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_provincia` (IN `i_operacion` CHAR(1))   BEGIN

IF i_operacion = 'B' THEN
    SELECT * FROM provincia;
END IF;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuario` (IN `i_operacion` CHAR(1), IN `i_nombre` VARCHAR(32), IN `i_apellido` VARCHAR(32), IN `i_correo` VARCHAR(100), IN `i_contrasena` VARCHAR(255), IN `i_foto` VARCHAR(128), IN `i_id_nivel` INT, IN `i_id_distrito` INT)   BEGIN

IF i_operacion = 'I' THEN
    INSERT INTO usuario VALUES
    (
        NULL, i_nombre, i_apellido, i_correo, i_contrasena, i_foto, i_id_nivel, i_id_distrito
    );
END IF;

IF i_operacion = 'L' THEN
    SELECT * FROM usuario
    WHERE email = i_correo
    AND pwd = i_contrasena;
END IF;

IF i_operacion = 'V' THEN
    SELECT * FROM usuario;
END IF;

IF i_operacion = 'U' THEN
    UPDATE usuario
    SET nombre = i_nombre,
    	apellido = i_apellido,
        foto = i_foto
    WHERE email = i_correo;
END IF;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id_distrito` int(11) NOT NULL,
  `nom_distrito` varchar(32) NOT NULL,
  `id_provincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id_distrito`, `nom_distrito`, `id_provincia`) VALUES
(1, 'Almirante', 1),
(2, 'Bocas del Toro', 1),
(3, 'Changuinola', 1),
(4, 'Chiriqui Grande', 1),
(5, 'Aguadulce', 2),
(6, 'Antón', 2),
(7, 'La Pintada', 2),
(8, 'Natá', 2),
(9, 'Olá', 2),
(10, 'Penonomé', 2),
(11, 'Colón', 3),
(12, 'Chagres', 3),
(13, 'Donoso', 3),
(14, 'Portobelo', 3),
(15, 'Santa Isabel', 3),
(16, 'Omar Torrijos Herrera', 3),
(17, 'Alanje', 4),
(18, 'Barú', 4),
(19, 'Boquerón', 4),
(20, 'Boquete', 4),
(21, 'Bugaba', 4),
(22, 'David', 4),
(23, 'Dolega', 4),
(24, 'Gualaca', 4),
(25, 'Remedios', 4),
(26, 'Renacimiento', 4),
(27, 'San Félix', 4),
(28, 'San Lorenzo', 4),
(29, 'Tierras Altas', 4),
(30, 'Tolé', 4),
(31, 'Chepigana', 5),
(32, 'Santa Fe', 5),
(33, 'Pinogana', 5),
(34, 'Chitré', 6),
(35, 'Las Minas', 6),
(36, 'Los Pozos', 6),
(37, 'Ocú', 6),
(38, 'Parita', 6),
(39, 'Pesé', 6),
(40, 'Santa María', 6),
(41, 'Guararé', 7),
(42, 'Las Tablas', 7),
(43, 'Los Santos', 7),
(44, 'Macaracas', 7),
(45, 'Pedasí', 7),
(46, 'Pocrí', 7),
(47, 'Tonosí', 7),
(48, 'Panamá', 8),
(49, 'Balboa', 8),
(50, 'Chepo', 8),
(51, 'Chimán', 8),
(52, 'San Miguelito', 8),
(53, 'Taboga', 8),
(54, 'Atalaya', 9),
(55, 'Calobre', 9),
(56, 'Cañazas', 9),
(57, 'La Mesa', 9),
(58, 'Las Palmas', 9),
(59, 'Mariato', 9),
(60, 'Montijo', 9),
(61, 'Río de Jesús', 9),
(62, 'San Francisco', 9),
(63, 'Santa Fe', 9),
(64, 'Santiago', 9),
(65, 'Soná', 9),
(66, 'Arraiján', 10),
(67, 'Capira', 10),
(68, 'Chame', 10),
(69, 'La Chorrera', 10),
(70, 'San Carlos', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `nom_nivel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` int(11) NOT NULL,
  `nom_provincia` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nom_provincia`) VALUES
(1, 'Bocas de Toro'),
(2, 'Coclé'),
(3, 'Colón'),
(4, 'Chiriquí'),
(5, 'Darién'),
(6, 'Herrera'),
(7, 'Los Santos'),
(8, 'Panamá'),
(9, 'Veraguas'),
(10, 'Panamá Oeste');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `id_distrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `pwd`, `foto`, `id_nivel`, `id_distrito`) VALUES
(2, 'Aixa', 'Lasso', 'Laaesp@yahoo.com', '$5$rounds=5000$usesomesillystri$bbvP0mg0izvK3XomWm.gdSSShlwj4p1WN7sjFVmbKP5', 'jugador.png', 1, 48),
(3, 'Federico', 'Biergolini', 'arturo.j.saavedra.h@gmail.com', '$5$rounds=5000$usesomesillystri$bbvP0mg0izvK3XomWm.gdSSShlwj4p1WN7sjFVmbKP5', 'palanca-de-mando.png', 1, 66);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id_distrito`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id_distrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
