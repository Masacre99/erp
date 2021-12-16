-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 08:10:49
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cmr_2`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `addEncuestas` (IN `_module_id` INT, IN `_id_user` INT)  BEGIN
    INSERT INTO encuestas (module_id, id_user, status) VALUES (_module_id, _id_user, 0);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `addUser` (IN `_rol` INT, IN `_nombre` VARCHAR(50), IN `_apellidos` VARCHAR(50), IN `_email` VARCHAR(50), IN `_tel` VARCHAR(50), IN `_password` TEXT)  BEGIN
	IF EXISTS( SELECT id FROM usuarios WHERE email = _email) THEN
		SELECT 0 status, 'El Email ya se encuentran registrados' mensaje;
    ELSE 
		INSERT INTO usuarios (rol, nombre, apellidos, email, tel, password)
        VALUES (_rol, _nombre, _apellidos, _email, _tel, AES_ENCRYPT(_password,'CMRAlean10122021$!%&'));
		SET @id_user = (SELECT last_insert_id());
        SELECT 1 status, @id_user id_user, 'El usuario se registro correctamente' mensaje;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `encuestaUser` (IN `_id_user` INT)  BEGIN
	SELECT enc.id, enc.document, enc.status, modu.name encuesta, modu.url
	FROM encuestas enc
	INNER JOIN modulos modu ON modu.id = enc.module_id
	WHERE enc.id_user = _id_user;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `_email` VARCHAR(100), IN `_password` VARCHAR(200))  BEGIN
    SELECT user.* FROM usuarios user
	WHERE (user.email = _email) AND user.password = AES_ENCRYPT(_password,'CMRAlean10122021$!%&');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modulos` ()  BEGIN
	SELECT * FROM modulos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEncuesta` (IN `_id` INT, IN `_document` VARCHAR(150))  BEGIN
    UPDATE encuestas SET document = _document, status = 1 WHERE id = _id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `document` varchar(150) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `module_id`, `id_user`, `document`, `status`) VALUES
(14, 1, 14, NULL, 0),
(15, 2, 14, NULL, 0),
(16, 3, 14, NULL, 0),
(17, 4, 14, NULL, 0),
(18, 5, 14, 'media/documents/14/inteligencias_multiples.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `name`, `url`) VALUES
(1, 'Preguntas de introduccion', 'introduccion'),
(2, 'Viabilidad Financiera', 'viabilidad'),
(3, 'Ventas', 'ventas'),
(4, 'Inteligencia financiera', 'inteligencia'),
(5, 'Las Inteligencias Múltiples', 'multiples');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `rol` tinyint(4) NOT NULL DEFAULT 1,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `password` blob NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `fecha_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rol`, `nombre`, `apellidos`, `email`, `tel`, `password`, `status`, `fecha_update`, `fecha_registro`) VALUES
(14, 2, 'Paquito', 'Rivas Radilla', 'dafneteamo@gmail.com', '5538315467', 0x6b7f70b6c38b7cb382e505f5c70e2e78, 1, '2021-11-25 09:09:01', '2021-11-25 09:09:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_module_encuesta` (`module_id`),
  ADD KEY `id_user_encuesta` (`id_user`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD CONSTRAINT `id_module_encuesta` FOREIGN KEY (`module_id`) REFERENCES `modulos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_encuesta` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
