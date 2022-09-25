-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2022 a las 23:16:11
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
-- Base de datos: `centro_medico_davinci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `citFecha` date NOT NULL,
  `citHora` time NOT NULL,
  `citPaciente` int(11) NOT NULL,
  `citMedico` int(11) NOT NULL,
  `citConsultorio` int(11) NOT NULL,
  `citEstado` enum('Asignado','Atendido') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Asignado',
  `citObservaciones` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `citFecha`, `citHora`, `citPaciente`, `citMedico`, `citConsultorio`, `citEstado`, `citObservaciones`) VALUES
(13, '2021-09-09', '16:08:00', 24, 21, 1, 'Atendido', ' Paciente se le suministró acetaminofén'),
(14, '2021-09-10', '08:20:00', 25, 27, 1, 'Atendido', ' Cita de prueba'),
(2323, '2022-09-14', '23:40:37', 22, 39, 1, 'Asignado', 'obser');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `idConsultorio` int(11) NOT NULL,
  `conNombre` char(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`idConsultorio`, `conNombre`) VALUES
(1, 'CONSULTORIO-101'),
(2, 'CONSULTORIO-102'),
(3, 'CONSULTORIO-201'),
(4, 'CONSULTORIO-202');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idMedico` int(11) NOT NULL,
  `medIdentificacion` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medEspecialidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medTelefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medCorreo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idMedico`, `medIdentificacion`, `medNombres`, `medApellidos`, `medEspecialidad`, `medTelefono`, `medCorreo`) VALUES
(21, '01425', 'Harold', 'Aguirre', 'Medico General', '312569780', 'carlosa@gmail.com'),
(22, '8965', 'David', 'Hoyos', 'Dermatologo', '3107324131', 'davidha20@gmail.com'),
(24, '1053', 'Yuliana', 'Arbelaez', 'Medico General', '3107327432', 'yulianitaac@hotmail.com'),
(25, '10232', 'gonzalo', 'Arbelaez', 'Medico General', '3107327432', 'yulianitaac@hotmail.com'),
(26, '24323', 'Julieth', 'Caicedo', 'Pediatra', '315353', 'ati@gmail.com'),
(27, '12355', 'juan', 'nicolas', 'Medico General', '3107324131', 'ati@gmail.com'),
(29, '75097577', 'David', 'Arbelaez', 'Medico General', '3107324131', 'ati@gmail.com'),
(30, '75097578', 'David', 'Arbelaez', 'Medico General', '3107324131', 'yulianitaac@hotmail.com'),
(31, '75097575777', 'Andres Julian ', 'Hoyos Caicedo', 'Medico General', '3107324131', 'davidha20@gmail.com'),
(32, '102328985', 'Juan Carlos', 'Henao Vaencia', 'Medico General', '3587456741', 'jchenado@htomailc.om'),
(33, '2365', 'Claudia', 'Caicedo', 'Medico General', '3248718578', 'claudia@hotmail.com'),
(34, '896500', 'David', 'Arbelaez', 'Medico General', '3248718578', 'carlosa@gmail.com'),
(35, '123344', 'David', 'Hoyos Caicedo', 'Medico General', '3587456741', 'ati@gmail.com'),
(36, '75097575wwww', 'David', 'Arbelaez', 'Medico General', '3107327432', 'andresjhc@hotmail.com.co'),
(38, '7509757523443', 'David', 'Arbelaez', 'Medico General', 'sdfsd', 'andresjhc@hotmail.com'),
(39, '00001', 'Pepito', 'Pérez', 'Medico General', '3205693215', 'pepitoperez@gmail.com'),
(41, '9874', 'Andres Julian', 'Hoyos Caicedo', 'Medico General', '31025698', 'andres@hotmail.com'),
(42, '78988', 'Carlos', 'Arboleda', 'Medico General', '2117944', 'carlos@gmail.com'),
(44, '9999', 'Yuliana', 'Alzate', 'Medico General', '3254426', 'yuliana@gmail.com'),
(45, '785478', 'Javier', 'Londoño', 'Medico General', '325487874', 'javi@gmail.com'),
(48, '1022962149', 'sena', 'Sena', 'Medico General', '3196748729', 'medico@medico.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `pacIdentificacion` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `pacNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pacApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pacFechaNacimiento` date NOT NULL,
  `pacSexo` enum('Femenino','Masculino') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `pacIdentificacion`, `pacNombres`, `pacApellidos`, `pacFechaNacimiento`, `pacSexo`) VALUES
(22, '105613', 'Valentina', 'Hernández', '2011-05-27', 'Femenino'),
(24, '123', 'Pepito ', 'Pérez Osa', '1989-06-01', 'Masculino'),
(25, '987', 'Fulanitos', 'De Tal', '1981-06-14', 'Masculino'),
(30, '1000', 'haroldPaciente', 'harold', '2022-09-07', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Medico'),
(3, 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuPassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuEstado` enum('Activo','Inactivo') COLLATE utf8_spanish_ci NOT NULL,
  `usuRol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `usuRol`) VALUES
(14, 'andres11', 'bewe1234', 'Activo', 'Administrador'),
(16, 'Jugiro', '3806734b256c27e41ec2c6bffa26d9e7', 'Activo', 'Administrador'),
(17, 'Carolina', '84d2004bf28a2095230e8e14993d398d', 'Activo', 'Administrador'),
(1022962155, 'harodl', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(1022962159, 'ha', '925cc8d2953eba624b2bfedf91a91613', 'Activo', 'Rol del Sistema'),
(1022962160, 'medicoHarold', 'c4ca4238a0b923820dcc509a6f75849b', 'Activo', 'Medico'),
(1022962163, 'quepasa', 'f21f217ce0bd0026b1f7c44991e5bf0a', 'Activo', 'Paciente'),
(1022962164, 'garoldUsuarioPa', 'c4ca4238a0b923820dcc509a6f75849b', 'Activo', 'Paciente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_paciente` (`citPaciente`),
  ADD KEY `fk_medico` (`citMedico`),
  ADD KEY `fk_consultorio` (`citConsultorio`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`idConsultorio`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idMedico`),
  ADD UNIQUE KEY `medIdentificacion` (`medIdentificacion`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`),
  ADD UNIQUE KEY `pacIdentificacion` (`pacIdentificacion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `login` (`usuLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2326;

--
-- AUTO_INCREMENT de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `idConsultorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022962165;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_consultorios_idConsultorio` FOREIGN KEY (`citConsultorio`) REFERENCES `consultorios` (`idConsultorio`),
  ADD CONSTRAINT `fk_medicos_idMedico` FOREIGN KEY (`citMedico`) REFERENCES `medicos` (`idMedico`),
  ADD CONSTRAINT `fk_pacientes_idPaciente` FOREIGN KEY (`citPaciente`) REFERENCES `pacientes` (`idPaciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
