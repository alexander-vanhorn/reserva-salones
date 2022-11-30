-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserva_salones`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar_usuario` (IN `id` VARCHAR(15), IN `nombre` VARCHAR(15), IN `pass` VARCHAR(256), IN `rol` VARCHAR(15))   INSERT INTO usuario VALUES(id,nombre,pass,rol)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `nom_equipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `nom_equipo`) VALUES
(10001, 'Tablero'),
(10002, 'Silla'),
(10003, 'Pupitre'),
(10004, 'Proyector');

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `id_hora` int(10) NOT NULL,
  `clase` varchar(60) NOT NULL,
  `hora_inicio` time(6) NOT NULL,
  `hora_final` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`id_hora`, `clase`, `hora_inicio`, `hora_final`) VALUES
(1, 'DS7', '12:50:00.000000', '01:35:00.000000'),
(2, '', '01:40:00.000000', '02:25:00.000000'),
(3, '', '02:30:00.000000', '03:15:00.000000'),
(4, 'DS8', '03:20:00.000000', '04:05:00.000000'),
(5, 'Sistemas Operativos', '04:10:00.000000', '04:55:00.000000'),
(6, '', '05:00:00.000000', '05:45:00.000000'),
(7, '', '05:50:00.000000', '06:35:00.000000'),
(8, 'Metodología de la Investigación', '06:40:00.000000', '07:25:00.000000'),
(9, 'Metodología de la Investigación', '07:30:00.000000', '08:15:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `motivo` varchar(150) NOT NULL,
  `cant_personas` int(11) NOT NULL,
  `usuario_id_usuario` varchar(15) NOT NULL,
  `salones_id_salon` int(11) NOT NULL,
  `horarios_id_hora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salones`
--

CREATE TABLE `salones` (
  `id_salon` int(11) NOT NULL,
  `nom_salon` varchar(7) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `tiene_ventanas` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salones`
--

INSERT INTO `salones` (`id_salon`, `nom_salon`, `capacidad`, `tiene_ventanas`) VALUES
(20001, '3-317', 35, 'si'),
(20002, '3-318', 40, 'si'),
(20003, '3-319', 35, 'si'),
(20004, '3-320', 38, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `salones_equipos`
--

CREATE TABLE `salones_equipos` (
  `salones_id_salon` int(11) NOT NULL,
  `equipos_id_equipo` int(11) NOT NULL,
  `cant_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salones_equipos`
--

INSERT INTO `salones_equipos` (`salones_id_salon`, `equipos_id_equipo`, `cant_equipo`) VALUES
(20001, 10001, 2),
(20001, 10002, 34),
(20001, 10003, 1),
(20001, 10004, 1),
(20002, 10001, 2),
(20002, 10002, 40),
(20002, 10003, 1),
(20002, 10004, 1),
(20003, 10001, 2),
(20003, 10002, 35),
(20003, 10003, 1),
(20003, 10004, 1),
(20004, 10001, 2),
(20004, 10002, 37),
(20004, 10003, 1),
(20004, 10004, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(15) NOT NULL,
  `nom_usuario` varchar(60) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `rol_usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nom_usuario`, `pass`, `rol_usuario`) VALUES
('0-000-000', 'admin', 'admin', 'admin'),
('6-666-666', 'Alexander', 'Vanhorn', 'admin'),
('8-888-888', 'Juan López', 'juan1234', 'estudiante'),
('9-999-999', 'Nancy Peña', 'nancy4567', 'docente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_hora`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_salones_id_salones` (`salones_id_salon`),
  ADD KEY `fk_usuario_id_usuario` (`usuario_id_usuario`),
  ADD KEY `fk_horarios_id_hora` (`horarios_id_hora`);

--
-- Indexes for table `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`id_salon`);

--
-- Indexes for table `salones_equipos`
--
ALTER TABLE `salones_equipos`
  ADD PRIMARY KEY (`salones_id_salon`,`equipos_id_equipo`),
  ADD KEY `fk_equipos_id_equipo` (`equipos_id_equipo`),
  ADD KEY `fk_salones_id_salon` (`salones_id_salon`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_horarios_id_hora` FOREIGN KEY (`horarios_id_hora`) REFERENCES `horarios` (`id_hora`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_salones_id_salones` FOREIGN KEY (`salones_id_salon`) REFERENCES `salones` (`id_salon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_id_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salones_equipos`
--
ALTER TABLE `salones_equipos`
  ADD CONSTRAINT `fk_equipos_id_equipo` FOREIGN KEY (`equipos_id_equipo`) REFERENCES `equipos` (`id_equipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_salones_id_salon` FOREIGN KEY (`salones_id_salon`) REFERENCES `salones` (`id_salon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
