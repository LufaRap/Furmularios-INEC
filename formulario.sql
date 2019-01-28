-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2018 a las 18:08:16
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `Id_formulario` int(10) NOT NULL,
  `nombre_oficina` varchar(50) NOT NULL,
  `numero_acta` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `fecha_de_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`Id_formulario`, `nombre_oficina`, `numero_acta`, `usuario`, `fecha_de_registro`) VALUES
(30, 'oficina 10', 25, 'admin', '2018-02-20'),
(34, 'oficina 74', 14, 'admin', '2018-02-20'),
(35, 'oficina 77', 25, 'admin', '2018-02-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canton`
--

CREATE TABLE `canton` (
  `ID_CANTON` int(11) NOT NULL,
  `ID_PROV` int(11) NOT NULL,
  `NOMBRE_CANTON` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canton`
--

INSERT INTO `canton` (`ID_CANTON`, `ID_PROV`, `NOMBRE_CANTON`) VALUES
(1, 1, 'Cuenca'),
(2, 1, 'Camilo Ponce Enríquez'),
(3, 1, ' Chordeleg'),
(4, 1, 'El Pan'),
(5, 1, 'Girón'),
(6, 1, 'Guachapala'),
(7, 1, 'Gualaceo'),
(8, 1, 'Nabón'),
(9, 1, 'Oña'),
(10, 1, 'Paute'),
(11, 1, 'Pucará'),
(12, 1, 'San Fernando'),
(13, 1, 'Santa Isabel'),
(14, 1, 'Sevilla de Oro'),
(15, 1, 'Sígsig'),
(16, 2, 'Guaranda'),
(17, 2, 'Caluma'),
(18, 2, 'Chillanes'),
(19, 2, 'Chimbo'),
(20, 2, 'Echeandía'),
(21, 2, 'Las Naves'),
(22, 2, 'San Miguel'),
(23, 3, 'Azogues'),
(24, 3, 'Biblián'),
(25, 3, 'Cañar'),
(26, 3, 'Déleg'),
(27, 3, 'El Tambo'),
(28, 3, 'La Troncal'),
(29, 3, 'Suscal'),
(30, 4, 'Tulcán'),
(31, 4, 'Bolívar'),
(32, 4, 'Espejo'),
(33, 4, 'Mira'),
(34, 4, 'Montúfar'),
(35, 4, 'Huaca'),
(36, 5, 'Riobamba'),
(37, 5, 'Alausí'),
(38, 5, 'Chambo'),
(39, 5, 'Chunchi'),
(40, 5, 'Colta'),
(41, 5, 'Cumandá'),
(42, 5, 'Guamote'),
(43, 5, 'Guano'),
(44, 5, 'Pallatanga'),
(45, 5, 'Penipe'),
(46, 6, 'Latacunga'),
(47, 6, 'La Maná'),
(48, 6, 'Pangua'),
(49, 6, 'Pujilí'),
(50, 6, 'Salcedo'),
(51, 6, 'Saquisilí'),
(52, 6, 'Sigchos'),
(53, 7, 'Machala'),
(54, 7, 'Arenillas'),
(55, 7, 'Atahualpa'),
(56, 7, 'Balsas'),
(57, 7, 'Chilla'),
(58, 7, 'El Guabo'),
(59, 7, 'Huaquillas'),
(60, 7, ' Las Lajas'),
(61, 7, 'Marcabelí'),
(62, 7, 'Pasaje'),
(63, 7, 'Piñas'),
(64, 7, 'Portovelo'),
(65, 7, 'Santa Rosa'),
(66, 7, 'Zaruma'),
(67, 8, 'Esmeraldas'),
(68, 8, 'Atacames'),
(69, 8, 'Eloy Alfaro'),
(70, 8, 'Muisne'),
(71, 8, 'Quinindé'),
(72, 8, 'Rioverde'),
(73, 8, 'San Lorenzo'),
(74, 9, 'San Cristóbal'),
(75, 9, 'Isabela'),
(76, 9, 'Santa Cruz'),
(77, 10, 'Guayaquil'),
(78, 10, 'Alfredo Baquerizo'),
(79, 10, 'Balao'),
(80, 10, 'Balzar'),
(81, 10, 'Colimes'),
(82, 10, 'Daule'),
(83, 10, 'Durán'),
(84, 10, 'El Empalme'),
(85, 10, 'El Triunfo'),
(86, 10, 'General Antonio Elizalde'),
(87, 10, 'Isidro Ayora'),
(88, 10, ' Lomas de Sargentillo'),
(89, 10, ' Marcelino Maridueña'),
(90, 10, 'Milagro'),
(91, 10, 'Naranjal'),
(92, 10, 'Naranjito'),
(93, 10, 'Nobol'),
(94, 10, 'Palestina'),
(95, 10, 'Pedro Carbo'),
(96, 10, 'Playas'),
(97, 10, 'Salitre'),
(98, 10, 'Samborondón'),
(99, 10, 'Santa Lucía'),
(100, 10, 'Simón Bolívar'),
(101, 10, 'Yaguachi'),
(102, 11, 'Ibarra'),
(103, 11, ' Antonio Ante'),
(104, 11, 'Cotacachi'),
(105, 11, ' Otavalo'),
(106, 11, 'Pimampiro'),
(107, 11, 'San Miguel de Urcuquí'),
(108, 12, 'Loja'),
(109, 12, 'Calvas'),
(110, 12, 'Catamayo'),
(111, 12, 'Celica'),
(112, 12, 'Chaguarpamba'),
(113, 12, 'Espíndola'),
(114, 12, 'Gonzanamá'),
(115, 12, 'Macará'),
(116, 12, 'Olmedo'),
(117, 12, 'Paltas'),
(118, 12, 'Pindal'),
(119, 12, 'Puyango'),
(120, 12, 'Quilanga'),
(121, 12, 'Saraguro'),
(122, 12, 'Sozoranga'),
(123, 12, 'Zapotillo'),
(124, 13, 'Babahoyo'),
(125, 13, 'Baba'),
(126, 13, 'Buena Fe'),
(127, 13, 'Mocache'),
(128, 13, 'Montalvo'),
(129, 13, 'Palenque'),
(130, 13, 'Puebloviejo'),
(131, 13, 'Quevedo'),
(132, 13, 'Quinsaloma'),
(133, 13, 'Urdaneta'),
(134, 13, 'Valencia'),
(135, 13, 'Ventanas'),
(136, 13, 'Vinces'),
(137, 19, 'Quito'),
(138, 19, 'Cayambe'),
(139, 19, 'Mejia'),
(140, 19, 'Puerto Quito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `ID_DOC` int(11) NOT NULL,
  `ID_ESTABL` int(11) NOT NULL,
  `TIPO_DOC` varchar(50) NOT NULL,
  `Espe_Doc` varchar(50) NOT NULL,
  `NOMBRE_DOC` varchar(50) NOT NULL,
  `APEL_DOC` varchar(50) NOT NULL,
  `TELEF_DOC` int(11) NOT NULL,
  `CEDUL_DOC` int(11) NOT NULL,
  `OBSERVACION_DOC` varchar(100) DEFAULT NULL,
  `Cod_Inec_D` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`ID_DOC`, `ID_ESTABL`, `TIPO_DOC`, `Espe_Doc`, `NOMBRE_DOC`, `APEL_DOC`, `TELEF_DOC`, `CEDUL_DOC`, `OBSERVACION_DOC`, `Cod_Inec_D`) VALUES
(13, 13, 'Partero/a calificada', '', 'rthyj', 'tyhjk', 2147483647, 2147483647, 'yuikol;', 585282),
(14, 14, 'Enfermero/a', '', 'juan', 'carlos', 2147483647, 2147483647, 'ssdfbgn', 791340),
(15, 15, 'Otro', 'Madre', 'Marcos', 'Quishpe', 2147483647, 2147483647, 'ninguna', 292283),
(17, 17, 'Enfermero/a', '', 'dsvvfg', 'sdfb', 2147483647, 2147483647, 'aesdfdvfvb', 255572),
(20, 20, 'Auxiliar de enfermería', '', 'saf', 'sdf', 2147483647, 2147483647, 'sdv', 434421),
(26, 26, 'Auxiliar de enfermería', '', 'sdf', 'dsf', 2147483647, 2147483647, '53asdf', 193437),
(27, 27, 'Partero/a calificada', '', 'a', 's', 2147483647, 2147483647, 'afg', 794899),
(28, 28, 'Auxiliar de enfermería', '', 'sdf', 'sdv', 2147483647, 2147483647, 'scv', 126701),
(29, 29, 'Partero/a calificada', '', 'aae', 'sdf', 2147483647, 2147483647, '546546456546465456456', 833039),
(30, 30, 'Otro', 'familia', 'pedro', 'martinez', 2147483647, 1874555664, 'ninguna', 158068),
(31, 31, 'Auxiliar de enfermería', 'no hay especificación', 'pedro', 'martinez', 2147483647, 1745465465, 'ninguna', 772277);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento_de_salud`
--

CREATE TABLE `establecimiento_de_salud` (
  `ID_ESTABL` int(11) NOT NULL,
  `ID_FORM` int(11) NOT NULL,
  `TIPO_ESTABL` varchar(50) NOT NULL,
  `Espe_Establ` varchar(50) NOT NULL,
  `NOMBRE_ESTABL` varchar(50) NOT NULL,
  `provincia_establ` varchar(50) NOT NULL,
  `canton_establ` varchar(50) NOT NULL,
  `PARROQUIA_ESTABL` varchar(50) NOT NULL,
  `LOCALIDAD_ESTABL` varchar(50) NOT NULL,
  `DIRECCION_ESTABL` varchar(50) NOT NULL,
  `TELEFONO_ESTABL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `establecimiento_de_salud`
--

INSERT INTO `establecimiento_de_salud` (`ID_ESTABL`, `ID_FORM`, `TIPO_ESTABL`, `Espe_Establ`, `NOMBRE_ESTABL`, `provincia_establ`, `canton_establ`, `PARROQUIA_ESTABL`, `LOCALIDAD_ESTABL`, `DIRECCION_ESTABL`, `TELEFONO_ESTABL`) VALUES
(13, 16, 'Hospital, clinica o consultorio', '', 'thjm', '13', '130', 'ghn', 'fghjm', 'rfghn', 2147483647),
(14, 17, 'Casa', '', 'aaa', '9', '74', 'eee', 'oooo', 'av.Diciembre', 1459684876),
(15, 18, 'Otro', 'hotel', 'Las Colinas', 'Guayas', 'El Empalme', 'ppp', 'asss', 'av.Diciembre', 2147483647),
(17, 20, 'Casa', '', 'asdfq', '5', '40', 'dsf', 'sdf', 'sdd', 2147483647),
(20, 23, 'Casa', '', 'safd', 'Cotopaxi', 'Pujilí', 'dsdff', 'sdf', 'asdf', 2147483647),
(26, 29, 'Hospital, clinica o consultorio', '', 'dsfg', 'Loja', 'Espíndola', 'ds', 'sdq', 'sd', 1684888888),
(27, 30, 'Otro establecimiento público ', '', 'sa', 'Carchi', 'Tulcán', 's', 'c', 's', 2147483647),
(28, 31, 'Otro establecimiento público ', '', 'd', 'Cotopaxi', 'Pangua', 'sd', 'sd', 'c', 1111111111),
(29, 33, 'Otro establecimiento público ', '', 'ss', 'Bolívar', 'Chimbo', 'dsf', 'sdff', 'sdf', 2147483647),
(30, 34, 'Casa', '', 'Eugenio Espejo', 'Pichincha', 'Quito', 'naciones unidas', 'qqq', 'av.6 de diciembre', 230000505),
(31, 35, 'Casa', 'no hay especificación', 'df', 'Chimborazo', 'Cumandá', 'dsf', 'sdfg', '	dfvb', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `ID_FORM` int(11) NOT NULL,
  `NUM_FORM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`ID_FORM`, `NUM_FORM`) VALUES
(15, 1),
(16, 16),
(17, 17),
(18, 18),
(20, 19),
(23, 21),
(29, 24),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madre`
--

CREATE TABLE `madre` (
  `ID_MADRE` int(11) NOT NULL,
  `ID_FORM` int(11) NOT NULL,
  `ID_DOC` int(11) NOT NULL,
  `NOMBRE_MADRE` varchar(50) NOT NULL,
  `APEL_MADRE` varchar(50) NOT NULL,
  `CEDUL_MADRE` varchar(11) NOT NULL,
  `FECHNACH_MADRE` date NOT NULL,
  `EDAD_MADRE` int(11) NOT NULL,
  `CONTROLES_MADRE` int(11) NOT NULL,
  `HIJOSACTUAL_MADRE` int(11) NOT NULL,
  `HIJOSVIVMUER_MADRE` int(11) NOT NULL,
  `HIJOSMUER_MADRE` int(11) NOT NULL,
  `NACIONALIDAD_MADRE` varchar(50) NOT NULL,
  `PAISE_MADRE` varchar(50) DEFAULT NULL,
  `NUMEMBARAZ_MADRE` int(11) NOT NULL,
  `NUMPARTOS_MADRE` int(11) NOT NULL,
  `ETNIA_MADRE` varchar(50) NOT NULL,
  `ESTADOCIVIL_MADRE` varchar(50) NOT NULL,
  `ALFABETISMO_MADRE` varchar(50) NOT NULL,
  `INSTRUCCION_MADRE` varchar(50) NOT NULL,
  `PROV_MADRE` varchar(50) NOT NULL,
  `CANTON_MADRE` varchar(50) NOT NULL,
  `PARROQUIA_MADRE` varchar(50) NOT NULL,
  `LOCALIDAD_MADRE` varchar(50) NOT NULL,
  `DIRECCIONDOM_MADRE` varchar(50) NOT NULL,
  `Cod_InecM` int(10) NOT NULL,
  `Dpa_InecM` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `madre`
--

INSERT INTO `madre` (`ID_MADRE`, `ID_FORM`, `ID_DOC`, `NOMBRE_MADRE`, `APEL_MADRE`, `CEDUL_MADRE`, `FECHNACH_MADRE`, `EDAD_MADRE`, `CONTROLES_MADRE`, `HIJOSACTUAL_MADRE`, `HIJOSVIVMUER_MADRE`, `HIJOSMUER_MADRE`, `NACIONALIDAD_MADRE`, `PAISE_MADRE`, `NUMEMBARAZ_MADRE`, `NUMPARTOS_MADRE`, `ETNIA_MADRE`, `ESTADOCIVIL_MADRE`, `ALFABETISMO_MADRE`, `INSTRUCCION_MADRE`, `PROV_MADRE`, `CANTON_MADRE`, `PARROQUIA_MADRE`, `LOCALIDAD_MADRE`, `DIRECCIONDOM_MADRE`, `Cod_InecM`, `Dpa_InecM`) VALUES
(13, 16, 13, 'dfgh', 'dfgh', '5555553535', '2018-02-23', 25, 74, 4, 4, 4, 'Ecuatoriana ', '', 3, 46, 'Negra', ' Casada', 'Si', 'Ninguno', '6', '51', 'u', 'rtyu', 'tryujk', 234971, 155518),
(14, 17, 14, 'maria', 'padilla', '8864636456', '2018-02-21', 25, 41, 42, 2, 0, 'Ecuatoriana ', '', 52, 20, 'Negra', 'Soltera', 'Si', 'Primaria', '4', '35', 'ddsf', 'sdcvb ', 'cvb a', 559876, 74111),
(15, 18, 15, 'Maria', 'Cortez', '8645124656', '2018-02-08', 25, 14, 54, 86, 86, 'Extranjera', 'Panama', 75, 52, 'Negra', ' Casada', 'Si', 'Primaria', 'Esmeraldas', 'Eloy Alfaro', 'ppp', 'sdf', 'aasdvb', 133529, 298085),
(17, 20, 17, 'sdf', 'sdf', '5255466654', '2018-02-07', 15, 42, 4, 4, 4, 'Ecuatoriana ', '', 4, 5, 'IndÃ­gena', 'Soltera', 'No', 'Ninguno', '5', '40', 'sad', 'asdf', 'sadf', 365223, 595096),
(20, 23, 20, 'sadf', 'sdf', '1111111111', '2018-01-31', 15, 5, 5, 0, 5, 'Ecuatoriana ', '', 5, 5, 'Mulata', 'Unida', 'Si', 'Educación Básica', 'Cañar', 'Cañar', 'sdfg', 'dvfdv', 'asdvc', 123693, 11071),
(26, 29, 26, 'sdf', 'dfq', 'sddf555555', '2018-02-08', 15, 5, 5, 5, 5, 'Ecuatoriana ', '', 5, 5, 'Indígena', 'Soltera', 'No', 'Ninguno', 'Cotopaxi', 'Latacunga', 'sdf', 'asdf', 'sdf', 701171, 955146),
(27, 30, 27, 'a', 's', '5444444444', '2018-02-01', 15, 5, 5, 5, 5, 'Ecuatoriana ', '', 5, 5, 'Blanca', 'Viuda', 'No', 'Primaria', 'Cotopaxi', 'Pujilí', 's', 's', 's', 630973, 978678),
(28, 31, 28, 'sas', 'sasd', '4544444444', '2018-02-08', 15, 4, 4, 4, 4, 'Ecuatoriana ', '', 4, 4, 'Mulata', 'Separada', 'Si', 'Ninguno', 'El  Oro', 'Atahualpa', 'cdsdd', 'sdv', 'sdcv', 536155, 164667),
(29, 33, 29, 'sddf', 'sdf', '5646445645', '2018-02-07', 18, 15, 5, 5, 5, 'Ecuatoriana ', '', 5, 5, 'Indígena', ' Casada', 'No', 'Ninguno', 'Esmeraldas', 'Quinindé', 'sdf', 'df', 'sdf', 533283, 118990),
(30, 34, 30, 'maria', 'Jimenez', '1726959595', '2018-02-08', 25, 1, 2, 0, 0, 'Extranjera', 'Venezuela', 5, 1, 'Mestiza', 'Soltera', 'No', 'Centro de Alfabetización', 'Carchi', 'Huaca', 'aaa', 'ttt', 'sddd', 761312, 835120),
(31, 35, 31, 'sdf', 'sdff', '2156346488', '2018-02-08', 25, 5, 5, 5, 5, 'Ecuatoriana ', 'no hay especificación', 5, 5, 'Montubia', 'Soltera', 'No', 'Ninguno', 'Cotopaxi', 'Pujilí', 'sacddf', 'ssdfg', 'qfdghnn', 336605, 209882);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacido_vivo`
--

CREATE TABLE `nacido_vivo` (
  `ID_NV` int(11) NOT NULL,
  `ID_MADRE` int(11) NOT NULL,
  `NOMBRE_NV` varchar(50) NOT NULL,
  `APEL_NV` varchar(50) NOT NULL,
  `SEXO_NV` varchar(15) NOT NULL,
  `FECH_NV` date NOT NULL,
  `TALLA_NV` int(11) NOT NULL,
  `CEDULA_NV` int(11) NOT NULL,
  `PESO_NV` int(11) NOT NULL,
  `SEMANASG_NV` int(11) NOT NULL,
  `TIPOPARTO_NV` varchar(15) NOT NULL,
  `APGAR_NV` int(11) NOT NULL,
  `APGAR_NV5` int(11) NOT NULL,
  `PRODUCEMBAR_NV` varchar(30) NOT NULL,
  `Cod_InecNV` int(10) NOT NULL,
  `Dpa_InecNV` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacido_vivo`
--

INSERT INTO `nacido_vivo` (`ID_NV`, `ID_MADRE`, `NOMBRE_NV`, `APEL_NV`, `SEXO_NV`, `FECH_NV`, `TALLA_NV`, `CEDULA_NV`, `PESO_NV`, `SEMANASG_NV`, `TIPOPARTO_NV`, `APGAR_NV`, `APGAR_NV5`, `PRODUCEMBAR_NV`, `Cod_InecNV`, `Dpa_InecNV`) VALUES
(13, 13, 'sdfgf', 'asdff', 'Hombre', '0000-00-00', 39, 2147483647, 5425, 23, 'Normal', 3, 3, 'Cuadruple', 611160, 472041),
(14, 14, 'Luis', 'alcon', 'Hombre', '0000-00-00', 40, 2147483647, 1111, 25, 'Normal', 10, 10, 'Simple', 241729, 231906),
(15, 15, 'Matias', 'Deldago', 'Hombre', '2018-02-06', 45, 2147483647, 5600, 42, 'Normal', 5, 3, 'Doble', 450842, 281070),
(17, 17, 'sdf', 'sdf', 'Hombre', '0000-00-00', 47, 2147483647, 2546, 25, 'Normal', 2, 2, 'Simple', 133427, 559894),
(26, 26, 'df', 'cvb', 'Hombre', '2018-02-01', 47, 2147483647, 4444, 25, 'Normal', 4, 4, 'Simple', 150697, 363502),
(27, 27, 'a', 's', 'Hombre', '2018-02-03', 47, 1111111111, 8888, 25, 'Normal', 1, 1, 'Simple', 720185, 213391),
(28, 28, 'h', 'h', 'Mujer', '2018-02-02', 47, 1111111111, 6555, 25, 'Cesarea', 4, 5, 'Doble', 187357, 706361),
(29, 29, 'sdf', 'asdf', 'Hombre', '2018-02-08', 47, 2147483647, 4564, 25, 'Normal', 2, 8, 'Simple', 186293, 677018),
(30, 30, 'pedro', 'martines', 'Hombre', '2018-02-07', 47, 1726752072, 855, 25, 'Normal', 5, 4, 'Doble', 220420, 135795),
(31, 31, 'Matias', 'zapata', 'Hombre', '2018-02-07', 47, 1764646464, 555, 25, 'Normal', 10, 5, 'Doble', 901033, 749911);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `ID_PROV` int(11) NOT NULL,
  `NOMBRE_PROV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`ID_PROV`, `NOMBRE_PROV`) VALUES
(1, 'Azuay'),
(2, 'Bolívar'),
(3, 'Cañar'),
(4, 'Carchi'),
(5, 'Chimborazo'),
(6, 'Cotopaxi'),
(7, 'El  Oro'),
(8, 'Esmeraldas'),
(9, 'Galápagos'),
(10, 'Guayas'),
(11, 'Imbabura'),
(12, 'Loja'),
(13, 'Los Rios'),
(14, 'Manabí'),
(15, 'Morona Santiago'),
(16, 'Napo'),
(17, 'Orellana'),
(18, 'Pastaza'),
(19, 'Pichincha'),
(20, 'Santa Elena'),
(21, 'Santo Domingo de los Tsáchilas'),
(22, 'Sucumbíos'),
(23, 'Tungurahua'),
(24, 'Zamora Chinchipe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_civil`
--

CREATE TABLE `registro_civil` (
  `ID_REGIS` int(11) NOT NULL,
  `ID_FORM` int(11) NOT NULL,
  `OFICINA_REGIS` varchar(50) NOT NULL,
  `provincia_regis` varchar(50) NOT NULL,
  `canton_regis` varchar(50) NOT NULL,
  `PARROQUIA_REGIS` varchar(50) NOT NULL,
  `FECHAINS_REGIS` date NOT NULL,
  `ACTA_REGIS` int(11) NOT NULL,
  `Cod_Inec_R` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_civil`
--

INSERT INTO `registro_civil` (`ID_REGIS`, `ID_FORM`, `OFICINA_REGIS`, `provincia_regis`, `canton_regis`, `PARROQUIA_REGIS`, `FECHAINS_REGIS`, `ACTA_REGIS`, `Cod_Inec_R`) VALUES
(13, 16, 'aaa', '8', '67', 'qwdf', '0000-00-00', 5, 900053),
(14, 17, '10', '9', '74', 'chillogallo', '0000-00-00', 11, 403658),
(15, 18, '12', 'Galápagos', 'San Cristóbal', 'ttt', '2018-02-18', 23, 984643),
(17, 20, 'sadf', '6', '48', 'sadf', '0000-00-00', 6, 589685),
(20, 23, 'ds', 'El  Oro', 'El Guabo', 'dsf', '2018-02-07', 5, 568574),
(26, 29, 'sad', 'Galápagos', 'Isabela', 'sdf', '2018-02-08', 4, 189090),
(27, 30, 'ofi 10', 'Los Rios', 'Babahoyo', 'a', '2018-02-08', 1, 32300),
(28, 31, 'ofi 11', 'Cotopaxi', 'Latacunga', 'z', '2018-02-07', 5, 202593),
(29, 32, 'ofi10', 'pichincha', 'quito', 'chillogallo', '2018-02-20', 20, 11111),
(45, 23, '1', 'sd', 'sd', 'sd', '2018-02-20', 10, 10),
(55, 20, '10', 's', 's', 'd', '2018-02-20', 10, 10),
(56, 33, '25', 'Carchi', 'Bolívar', 'sadfdgsdfg', '2018-02-15', 5, 342286),
(57, 30, 'oficina 10', 's', 's', 'd', '2018-02-12', 25, 888),
(58, 34, 'oficina 74', 'Pichincha', 'Quito', 'chillogallo', '2018-02-20', 14, 644076),
(59, 35, 'oficina 77', 'Imbabura', 'Pimampiro', 'aaaa', '2018-02-13', 25, 640251);

--
-- Disparadores `registro_civil`
--
DELIMITER $$
CREATE TRIGGER `InsertarRegistro` AFTER INSERT ON `registro_civil` FOR EACH ROW INSERT INTO auditoria (id_formulario, nombre_oficina, numero_acta, usuario, fecha_de_registro)VALUES(new.id_form, new.oficina_regis, new.acta_regis, 'admin', now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `tipo_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario_user`, `password_user`, `tipo_user`) VALUES
(1, 'usuario', '12345', 'civil'),
(2, 'admin', '12345', 'salud');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`ID_CANTON`),
  ADD KEY `FK_PERTENECE_2` (`ID_PROV`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`ID_DOC`),
  ADD KEY `FK_ATIENDE` (`ID_ESTABL`);

--
-- Indices de la tabla `establecimiento_de_salud`
--
ALTER TABLE `establecimiento_de_salud`
  ADD PRIMARY KEY (`ID_ESTABL`),
  ADD KEY `FK_PERTENECE_1` (`ID_FORM`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`ID_FORM`);

--
-- Indices de la tabla `madre`
--
ALTER TABLE `madre`
  ADD PRIMARY KEY (`ID_MADRE`),
  ADD KEY `FK_ASISTE` (`ID_DOC`),
  ADD KEY `FK_REGISTRA` (`ID_FORM`);

--
-- Indices de la tabla `nacido_vivo`
--
ALTER TABLE `nacido_vivo`
  ADD PRIMARY KEY (`ID_NV`),
  ADD KEY `FK_TIENE` (`ID_MADRE`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`ID_PROV`);

--
-- Indices de la tabla `registro_civil`
--
ALTER TABLE `registro_civil`
  ADD PRIMARY KEY (`ID_REGIS`),
  ADD KEY `FK_PERTENECE` (`ID_FORM`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canton`
--
ALTER TABLE `canton`
  MODIFY `ID_CANTON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `ID_DOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `establecimiento_de_salud`
--
ALTER TABLE `establecimiento_de_salud`
  MODIFY `ID_ESTABL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID_FORM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `madre`
--
ALTER TABLE `madre`
  MODIFY `ID_MADRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `nacido_vivo`
--
ALTER TABLE `nacido_vivo`
  MODIFY `ID_NV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `ID_PROV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `registro_civil`
--
ALTER TABLE `registro_civil`
  MODIFY `ID_REGIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canton`
--
ALTER TABLE `canton`
  ADD CONSTRAINT `FK_PERTENECE_2` FOREIGN KEY (`ID_PROV`) REFERENCES `provincia` (`ID_PROV`);

--
-- Filtros para la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `FK_ATIENDE` FOREIGN KEY (`ID_ESTABL`) REFERENCES `establecimiento_de_salud` (`ID_ESTABL`);

--
-- Filtros para la tabla `establecimiento_de_salud`
--
ALTER TABLE `establecimiento_de_salud`
  ADD CONSTRAINT `FK_PERTENECE_1` FOREIGN KEY (`ID_FORM`) REFERENCES `formulario` (`ID_FORM`);

--
-- Filtros para la tabla `madre`
--
ALTER TABLE `madre`
  ADD CONSTRAINT `FK_ASISTE` FOREIGN KEY (`ID_DOC`) REFERENCES `doctor` (`ID_DOC`),
  ADD CONSTRAINT `FK_REGISTRA` FOREIGN KEY (`ID_FORM`) REFERENCES `formulario` (`ID_FORM`);

--
-- Filtros para la tabla `nacido_vivo`
--
ALTER TABLE `nacido_vivo`
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`ID_MADRE`) REFERENCES `madre` (`ID_MADRE`);

--
-- Filtros para la tabla `registro_civil`
--
ALTER TABLE `registro_civil`
  ADD CONSTRAINT `FK_PERTENECE` FOREIGN KEY (`ID_FORM`) REFERENCES `formulario` (`ID_FORM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
