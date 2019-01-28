-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2018 a las 17:50:04
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
(136, 13, 'Vinces');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `ID_DOC` int(11) NOT NULL,
  `ID_ESTABL` int(11) NOT NULL,
  `TIPO_DOC` varchar(50) NOT NULL,
  `Espe_doc` varchar(50) DEFAULT NULL,
  `NOMBRE_DOC` varchar(50) NOT NULL,
  `APEL_DOC` varchar(50) NOT NULL,
  `TELEF_DOC` int(11) NOT NULL,
  `CEDUL_DOC` int(11) NOT NULL,
  `OBSERVACION_DOC` varchar(100) DEFAULT NULL,
  `Cod_Inec_D` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`ID_DOC`, `ID_ESTABL`, `TIPO_DOC`, `Espe_doc`, `NOMBRE_DOC`, `APEL_DOC`, `TELEF_DOC`, `CEDUL_DOC`, `OBSERVACION_DOC`, `Cod_Inec_D`) VALUES
(1, 1, 'Enfermero/a', '', 'PPP', 'vvv', 1215156454, 2147483647, 'xddfff', 0),
(2, 2, 'MÃ©dico', '', 'luis', 'f', 2147483647, 2147483647, 'aaaaa', 0),
(3, 3, 'Partero/a calificada', '', 'pepito', 'perez', 2147483647, 2147483647, '4sfsdfsfsdfsdx', 0),
(4, 4, 'MÃ©dico', '', 'qqq', 'ssss', 2147483647, 2147483647, '654456456', 0),
(5, 5, 'MÃ©dico', '', 'DFDSFDSSDF', 'ASDFFBG', 2147483647, 2147483647, '465455465646545665646sfd', 0),
(6, 6, 'Enfermero/a', '', 'djjqwdhqjhw', 'yuewuyuewyw', 2147483647, 1222222222, 'ojal valga', 0),
(7, 7, 'MÃ©dico', '', 'SHHJASH', 'NIJNI', 1222222222, 1222222222, 'JDBJKBEHEWBD', 0),
(8, 8, 'MÃ©dico', '', 'jkdncjkd', 'dksksd', 2147483647, 2147483647, 'jdksjjskjdksjdsjkdjs', 0),
(12, 9, 'MÃ©dico', '', 'eeeeeeeee', 'eeeeeeee', 2147483647, 2147483647, 'eeeeeeeeeeeeeeeeeee', 0),
(13, 10, 'MÃ©dico', '', 'eeeeeeeeeeeee', 'wwwwwwwwwww', 1222222222, 1222222222, 'xxxxxxxxxxxxxxxxxxx', 0),
(14, 11, 'Enfermero/a', '', 'wqqq', 'wqqqqqqqw', 1222222222, 2111111111, 'swwwwwwwwwww', 0),
(15, 12, 'MÃ©dico', '', 'wq', 'wq', 1222222222, 1211121211, 'wqqqqqqqqqqqqqqq', 0),
(16, 13, 'MÃ©dico', '', 'ewwww', 'weeee', 2147483647, 2147483647, '3edwew', 773249),
(17, 14, 'Enfermero/a', '', 'qwww', 'qwqw', 2111111111, 1222222222, 'dsssssssssssssssss', 333538),
(18, 15, 'Obstetriz/Obstetra', '', 'qw', 'qwwww', 1222222222, 2111111111, '2wssssssssssssssssssssssw', 257797),
(19, 16, 'Auxiliar de enfermerÃ­a', '', 'EW', 'EWWE', 2111111111, 2147483647, 'REWHBTTYKUJICJIU', 994333),
(20, 17, 'Enfermero/a', '', 'saaaaaaaaaa', 'saaaaaaaa', 2147483647, 2147483647, '3222222222222dewwwwwwwwww', 124179),
(21, 18, 'Obstetriz/Obstetra', '', 'qwqqwqw', 'qwqwkqwkqw', 1222222222, 1222222222, 'asklkaslkas', 772478),
(22, 19, 'Otro', 'medqw', 'jkasjasjjkas', 'asjjksajkas', 2020393929, 2147483647, 'ksdjdkjakjd', 950976),
(23, 20, 'Obstetriz/Obstetra', '', 'juan', 'rigoebhe', 1222222222, 1222222222, 'djwejdjweh', 568778);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento_de_salud`
--

CREATE TABLE `establecimiento_de_salud` (
  `ID_ESTABL` int(11) NOT NULL,
  `ID_FORM` int(11) NOT NULL,
  `TIPO_ESTABL` varchar(50) NOT NULL,
  `Espe_establ` varchar(50) DEFAULT NULL,
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

INSERT INTO `establecimiento_de_salud` (`ID_ESTABL`, `ID_FORM`, `TIPO_ESTABL`, `Espe_establ`, `NOMBRE_ESTABL`, `provincia_establ`, `canton_establ`, `PARROQUIA_ESTABL`, `LOCALIDAD_ESTABL`, `DIRECCION_ESTABL`, `TELEFONO_ESTABL`) VALUES
(1, 2, 'Hospital, clinica o consultorio', NULL, 'sdf', '', '', 'zzz', 'qqq', 'aaa', 1111111111),
(2, 3, 'Hospital, clinica o consultorio', NULL, 'aa', '', '', 'dddd', 'sdddd', 'dfff', 2147483647),
(3, 4, 'Hospital, clinica o consultorio', NULL, 'ZZZZ', '1', '3', 'AAAA', 'SADSF', 'scdfv516csd', 2147483647),
(4, 5, 'Otro', NULL, 'dsfdg', '11', '105', 'sdf', 'eff', 'sdfbg', 2147483647),
(5, 6, 'Hospital, clinica o consultorio', NULL, 'ssdasd', '2', '18', 'zsss', 'wdaddssd', 'dsfsdf', 2147483647),
(6, 7, 'Establecimiento de la junta de beneficencia ', NULL, 'dbhjbdjh', '1', '4', 'hjdbdhbdfhhds', 'hsjjdasbhdah', 'asahhashas', 2147483647),
(7, 8, 'Otro establecimiento pÃºblico ', NULL, 'AAAA', '5', '41', 'SAAAAAAA', 'WWWWWWWWW', 'EEEEEEEE', 1221212111),
(8, 6, 'Establecimiento del minesterio', NULL, 'dnsnsdnd', '1', '3', 'jksdjkas', 'jdsasjajsd', 'bdssdhsd', 2147483647),
(9, 12, 'Establecimiento del IESS', NULL, 'eddddddddd', '12', '113', 'eddddddddddd', 'eeeeeeeeeeeeee', 'wwwwwwwwww', 2147483647),
(10, 13, 'Hospital, clinica o consultorio', NULL, 'eeeeeee', '3', '26', 'eeeeeee', 'eeeeee', 'eeeeeeeee', 2147483647),
(11, 14, 'Establecimiento de la junta de beneficencia ', NULL, 'wqqqqq', '8', '69', 'wqq', 'qw', 'wqqqqqqqq', 2111111111),
(12, 15, 'Hospital, clinica o consultorio', NULL, 'wwwww', '13', '124', 'wwwwwwww', 'wwwwwwwww', 'wwwwww', 2147483647),
(13, 16, 'Establecimiento de la junta de beneficencia ', NULL, 'ewwewe', '1', '2', 'ewwwwwwww', 'edw', 'ewwe', 2147483647),
(14, 17, 'Establecimiento de la junta de beneficencia ', NULL, 'ewq', '3', '24', 'assa', 'sasaas', 'saassa', 2111111111),
(15, 18, 'Establecimiento del IESS', NULL, 'ewww', '6', '46', 'ew', 'ew', 'weee', 2147483647),
(16, 19, 'Casa', NULL, 'EEEEEEEEE', '13', '133', 'EWWWW', 'EWWWW', 'EW', 2147483647),
(17, 20, 'Otro establecimiento pÃºblico ', NULL, 'sa', '3', '25', 'saaaaaaa', 'saaaaaaa', 'saaaaaaaawq', 2111111111),
(18, 21, 'Otro establecimiento pÃºblico ', '', 'jasjsajjsajska', '9', '75', 'jsajkjksas', 'ksaaskkjs', 'ksaksaksa', 1222222222),
(19, 22, 'Otro', 'casaqw', 'sajsjjksa', '7', '53', 'sajaksjkasjksa', 'ashjhjashja', 'sjasjkjkasj', 1222222222),
(20, 23, 'Hospital, clinica o consultorio', '', 'saklsaklsa', '3', '25', 'ajskjkssa', 'sajkjsajksa', 'sajksjaksa', 1111111111);

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
(1, 2),
(2, 6),
(3, 8),
(4, 30),
(5, 69),
(6, 77),
(7, 23),
(8, 43),
(9, 5),
(10, 22),
(11, 2223),
(12, 5555555),
(13, 22222222),
(14, 21121221),
(15, 989898),
(16, 2323),
(17, 3),
(18, 2222222),
(19, 233323232),
(20, 4554454),
(21, 334),
(22, 3333),
(23, 344343);

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
  `Cod_InecM` int(20) NOT NULL,
  `Dpa_InecM` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `madre`
--

INSERT INTO `madre` (`ID_MADRE`, `ID_FORM`, `ID_DOC`, `NOMBRE_MADRE`, `APEL_MADRE`, `CEDUL_MADRE`, `FECHNACH_MADRE`, `EDAD_MADRE`, `CONTROLES_MADRE`, `HIJOSACTUAL_MADRE`, `HIJOSVIVMUER_MADRE`, `HIJOSMUER_MADRE`, `NACIONALIDAD_MADRE`, `PAISE_MADRE`, `NUMEMBARAZ_MADRE`, `NUMPARTOS_MADRE`, `ETNIA_MADRE`, `ESTADOCIVIL_MADRE`, `ALFABETISMO_MADRE`, `INSTRUCCION_MADRE`, `PROV_MADRE`, `CANTON_MADRE`, `PARROQUIA_MADRE`, `LOCALIDAD_MADRE`, `DIRECCIONDOM_MADRE`, `Cod_InecM`, `Dpa_InecM`) VALUES
(1, 2, 1, 'xxx', 'xxxx', '1726959595', '0000-00-00', 15, 45, 25, 10, 10, 'Ecuatoriana ', NULL, 44, 55, 'Mestiza', ' Casada', 'Si', 'EducaciÃ³n Media/Bachillerato', '', '', 'eee', 'rrrrq', 'efrghj', 0, 0),
(2, 3, 2, 'aaaa', 'wwww', '2147483647', '0000-00-00', 65, 65, 54, 54, 99, 'Ecuatoriana ', NULL, 56, 65, 'Blanca', 'Soltera', 'Si', 'Ninguno', '', '', 'wer', 'we', 'df', 0, 0),
(3, 4, 3, 'dddd', 'dasdasda', '2147483647', '0000-00-00', 56, 56, 55, 65, 65, 'Ecuatoriana ', NULL, 56, 56, 'Mestiza', 'Soltera', 'Si', 'Ninguno', '', '', 'pppp', 'efre', 'dffdsf', 0, 0),
(4, 5, 4, 'serfg', 'sdfg', '2147483647', '0000-00-00', 84, 89, 56, 55, 54, 'Extranjera', NULL, 87, 88, 'Negra', ' Casada', 'No', 'Ninguno', '1', '', 'cccc', 'xxxx', 'aaqq', 0, 0),
(5, 6, 5, 'aasdfg', 'sdfg', '2147483647', '0000-00-00', 64, 64, 45, 54, 65, 'Ecuatoriana ', NULL, 65, 56, 'Mulata', 'Divorciada', 'No', 'EducaciÃ³n BÃ¡sica', '3', '25', 'sad', 'qwdedf', 'qsdfbg', 0, 0),
(6, 7, 6, 'hjhhfdsj', 'jhsdhdhshjsd', '1213333333', '2018-02-14', 23, 4, 1, 0, 0, 'Extranjera', '', 4, 6, 'Negra', 'Soltera', 'Si', 'EducaciÃ³n Media/Bachillerato', '6', '48', 'nmdsbjhbjsa', 'sndhasb', 'hassdbash', 0, 0),
(7, 8, 7, 'HDSBHJFBSD', 'NDSBDSBHHV', '1222222222', '2017-07-19', 32, 1, 1, 0, 0, 'Extranjera', 'PERU', 1, 1, 'Montubia', ' Casada', 'Si', 'Ciclo postbachillerato', '12', '116', 'KJSDBABKSBD', 'SAJDHASHD', 'HASHSHAH', 0, 0),
(8, 6, 8, 'jjdjsjdkjdshf', 'jkdsjsdjjkds', '1222222222', '2018-02-14', 23, 3, 1, 1, 0, 'Ecuatoriana ', NULL, 1, 1, 'Negra', 'Soltera', 'Si', 'Superior', '3', '27', 'jehhjf', 'ejkwjkfehj', 'ehur473734', 0, 0),
(12, 12, 12, 'ed', 'eeeeeeeeeeeeeee', 'eeeeeeeeee', '0000-00-00', 16, 3, 32, 32, 32, 'Ecuatoriana ', '', 23, 23, 'Negra', 'Soltera', 'No', 'Centro de AlfabetizaciÃ³n', '3', '25', 'eeeeeeeeeeeeeee', 'eeeeeeeeeee', 'eeeeeeeee', 0, 0),
(13, 13, 13, 'x', 'de', 'ewwwwwwwww', '2018-02-07', 15, 1, 1, 1, 1, 'Ecuatoriana ', '', 0, 1, 'IndÃ­gena', 'Unida', 'Si', 'Centro de AlfabetizaciÃ³n', '3', '23', 'ewwwwwwwww', 'wwwwwwww', 'wwwwwwww', 0, 0),
(14, 14, 14, 'wqqqqqqqqqq', 'wqqqqqqqqqq', 'wq21111111', '2018-02-02', 15, 0, 22, 21, 21, 'Ecuatoriana ', '', 1, 1, ' Afroecuatoriana/Afrodescendiente', 'Soltera', 'No', 'Centro de AlfabetizaciÃ³n', '5', '41', 'wwwwwwwww', 'wqqqqqqqq', 'wqqqqqqqqqq', 0, 0),
(15, 15, 15, 'wwwwwww', 'wwwwwww', '2111111111', '2018-02-01', 15, 1, 1, 1, 1, 'Ecuatoriana ', '', 0, 0, 'Mulata', ' Casada', 'Si', 'Centro de AlfabetizaciÃ³n', '3', '25', 'wqqqqqqq', 'wqqqq', 'wqqqqq', 0, 0),
(16, 16, 16, 'eweee', 'weeeeeee', 'ew23333333', '2018-02-02', 32, 23, 1, 0, 0, 'Ecuatoriana ', '', 23, 23, ' Afroecuatoriana/Afrodescendiente', ' Casada', 'No', 'Centro de AlfabetizaciÃ³n', '1', '5', 'eeeeeeeee', 'ewwww', 'ewwwwwww', 132631, 917722),
(17, 17, 17, 'wqwqw', 'qwqwqw', '1222222222', '2018-02-08', 15, 0, 1, 1, 1, 'Ecuatoriana ', 'wqqqqqqqqq', 1, 1, 'IndÃ­gena', ' Casada', 'No', 'EducaciÃ³n BÃ¡sica', '3', '25', 'qwwww', 'wwqqqqqq', 'qwqww', 696810, 337966),
(18, 18, 18, 'eeeeeeeeeeeeee', 'ewwwwwww', '1222222222', '2018-02-08', 15, 0, 1, 1, 1, 'Ecuatoriana ', '', 0, 1, ' Afroecuatoriana/Afrodescendiente', 'Soltera', 'Si', 'Ninguno', '2', '17', 'swqqqq', 'ssssssssssss', 'qwwwwww', 619770, 867212),
(19, 19, 19, 'EEEEEEEEEEEEEEEEE', 'EWWWWWWWWWW', 'WQE32E32E2', '2018-02-15', 15, 0, 1, 1, 0, '', '', 0, 1, 'Negra', 'Unida', 'Si', 'Ninguno', '6', '47', 'EWWW', 'EWEW', 'EWEW', 5686, 30610),
(20, 20, 20, 'wwwwwwww', 'wwwwww', 'wqwq122222', '2018-02-08', 15, 0, 1, 0, 0, 'Ecuatoriana ', '', 0, 1, 'IndÃ­gena', 'Unida', 'Si', 'Ninguno', '6', '50', 'saaaaaa', 'saaaaaaaa', 'saaaaaaa', 885912, 85347),
(21, 21, 21, 'jksjjjajas', 'akskasksa', '1222222222', '2018-02-02', 15, 1, 1, 1, 1, 'Extranjera', 'chile', 1, 1, ' Afroecuatoriana/Afrodescendiente', 'Soltera', 'No', 'Ninguno', '2', '19', 'jasjkjkjs', 'sajakjsjas', 'sansaasj', 698902, 22684),
(22, 22, 22, 'jsdjkjkjkdssd', 'sdjkjksdjkdsds', '2111111111', '2018-02-07', 15, 1, 1, 1, 1, 'Ecuatoriana ', '', 1, 1, 'Negra', 'Soltera', 'Si', 'Primaria', '2', '18', 'nssjajajsa', 'sajasjsja', 'sahjhsahas', 346416, 348284),
(23, 23, 23, 'sahjsahsa', 'asjjsajsa', '1111111111', '2018-02-08', 21, 21, 23, 23, 32, 'Ecuatoriana ', '', 21, 12, 'Mulata', 'Unida', 'No', 'EducaciÃ³n Media/Bachillerato', '1', '2', 'njashjsaj', 'sajksjka', 'ashhsa', 618730, 779164);

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
  `Cod_InecNV` int(20) NOT NULL,
  `Dpa_InecNV` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacido_vivo`
--

INSERT INTO `nacido_vivo` (`ID_NV`, `ID_MADRE`, `NOMBRE_NV`, `APEL_NV`, `SEXO_NV`, `FECH_NV`, `TALLA_NV`, `CEDULA_NV`, `PESO_NV`, `SEMANASG_NV`, `TIPOPARTO_NV`, `APGAR_NV`, `APGAR_NV5`, `PRODUCEMBAR_NV`, `Cod_InecNV`, `Dpa_InecNV`) VALUES
(1, 1, 'luis', 'falconi', 'Hombre', '0000-00-00', 88, 2147483647, 5411, 11, 'Normal', 11, 0, 'Simple', 0, 0),
(2, 2, 'xxxxx', 'zzzzz', 'Hombre', '0000-00-00', 11, 2147483647, 1111, 15, 'Normal', 44, 0, 'Simple', 0, 0),
(3, 3, 'LUIS', 'F', 'Hombre', '0000-00-00', 11, 2147483647, 1555, 65, 'Normal', 88, 0, 'Simple', 0, 0),
(4, 4, 'asdv', 'sdfv', 'Hombre', '0000-00-00', 32, 0, 1545, 56, 'Normal', 45, 0, 'Doble', 0, 0),
(5, 5, '5sadsa', 'asdsads', 'Hombre', '0000-00-00', 54, 0, 2548, 54, 'Normal', 1, 8, 'Simple', 0, 0),
(6, 6, 'ahhshashj', 'as bnabbsa', 'Mujer', '0000-00-00', 38, 2111111111, 500, 22, 'Normal', 4, 4, 'Simple', 0, 0),
(7, 7, 'dhjbjhsbvjhvjhWE', 'HSHDVASHD', 'Mujer', '0000-00-00', 40, 1222222222, 503, 25, 'Cesarea', 3, 5, 'Doble', 0, 0),
(8, 8, 'kekdkjew', 'djkhfejhd', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 0, 0, 'Simple', 0, 0),
(9, 12, 'eeeeeeeeeee', 'eeeeeeeeeee', 'Hombre', '0000-00-00', 40, 2111111111, 502, 25, 'Normal', 1, 2, 'Triple', 0, 0),
(10, 13, 'eeeeeeeeeee', 'eeeeeeeee', 'Hombre', '0000-00-00', 47, 1212222222, 500, 22, 'Cesarea', 1, 1, 'Triple', 0, 0),
(11, 14, 'sa', 'as', 'Hombre', '0000-00-00', 38, 2122222222, 500, 22, 'Normal', 1, 1, 'Doble', 0, 0),
(12, 15, 'sa', 'sa', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 1, 1, 'Triple', 0, 0),
(13, 16, 'ewe', 'eddddw', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 1, 1, 'Simple', 920325, 0),
(14, 17, 'asss', 'as', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 1, 1, 'Doble', 159717, 0),
(15, 18, 'ew', 'ew', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 1, 1, 'Doble', 653903, 784750),
(16, 19, 'EWEW', 'EWEW', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 1, 1, 'Triple', 731850, 606261),
(17, 20, 'vvvvv', 'vvvvvvvvvvvvvv', 'Hombre', '0000-00-00', 38, 2147483647, 500, 22, 'Normal', 1, 1, 'Doble', 407378, 15782),
(18, 21, 'lksksakas', 'kaskkaskas', 'Hombre', '0000-00-00', 38, 1212323333, 500, 22, 'Normal', 1, 1, 'Simple', 572205, 235162),
(19, 22, 'jsjjsajkas', 'jasjasjkas', 'Hombre', '0000-00-00', 38, 1212121122, 500, 22, 'Normal', 1, 1, 'Doble', 33922, 438009),
(20, 23, 'djksdddddjj', 'hsdjj', 'Hombre', '0000-00-00', 38, 1222222222, 500, 22, 'Normal', 1, 1, 'Simple', 891722, 541197);

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
  `Cod_Inec_R` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_civil`
--

INSERT INTO `registro_civil` (`ID_REGIS`, `ID_FORM`, `OFICINA_REGIS`, `provincia_regis`, `canton_regis`, `PARROQUIA_REGIS`, `FECHAINS_REGIS`, `ACTA_REGIS`, `Cod_Inec_R`) VALUES
(1, 1, 'aaa', '', '', 'zzzzz', '0000-00-00', 0, 0),
(2, 3, 'aaa', '1', '5', 'aaaa', '0000-00-00', 123, 0),
(3, 4, 'qqq', '13', '133', 'chillo', '0000-00-00', 1111, 0),
(4, 5, 'dsdsda', '6', '48', 'srf', '0000-00-00', 51, 0),
(5, 6, 'aaaa', '1', '3', '', '0000-00-00', 5, 0),
(6, 7, 'jdwejdne', '1', '8', 'jkdwejkbdkjwebff', '0000-00-00', 1, 0),
(7, 8, 'fhdsjdhjds', '13', '131', 'dhhfgsdhghdf', '0000-00-00', 2, 0),
(8, 6, 'jsjjdjasd', '1', '4', 'ewjwjeew', '0000-00-00', 2, 0),
(9, 9, 'po favor', '3', '25', 'wweewe', '0000-00-00', 2, 0),
(10, 10, 'eewewfewfe', '13', '131', 'sddddddd', '0000-00-00', 1, 0),
(11, 11, 'ghvgtvhhgvvghhgvgffcg', '12', '119', 'assssssss', '0000-00-00', 2, 0),
(12, 12, 'ee34', '6', '48', 'ewrrrr', '0000-00-00', 4, 0),
(13, 13, '3333333', '13', '132', '', '0000-00-00', 23, 0),
(14, 14, 'eeeeeeeeeee', '8', '68', 'sa', '0000-00-00', 1, 17097),
(15, 15, 'swwsw', '4', '33', 'assssssss', '0000-00-00', 1, 660973),
(16, 16, 'wewe', '4', '32', 'wee', '0000-00-00', 1, 909200),
(17, 17, 'djknfhdshjs', '1', '7', 'asssss', '0000-00-00', 1, 303597),
(18, 18, 'weeeeeee', '1', '4', 'weeeeee', '0000-00-00', 2, 814919),
(19, 19, 'EEEE', '1', '5', 'EWE', '0000-00-00', 1, 32392),
(20, 20, 'ccccccccccccccc', '11', '103', 'cccccc', '0000-00-00', 1, 546646),
(21, 21, 'jdjshdjs', '1', '2', 'sjakakask', '0000-00-00', 1, 129168),
(22, 22, '2323', '3', '24', 'jsjsjjasjkskjsa', '0000-00-00', 1, 414333),
(23, 23, 'jehfjhekfh', '4', '33', '', '0000-00-00', 1, 893230);

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
(1, 'user', '123456', 'civil'),
(2, 'administrador', '123456', 'salud');

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
  MODIFY `ID_CANTON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `ID_DOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `establecimiento_de_salud`
--
ALTER TABLE `establecimiento_de_salud`
  MODIFY `ID_ESTABL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID_FORM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `madre`
--
ALTER TABLE `madre`
  MODIFY `ID_MADRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `nacido_vivo`
--
ALTER TABLE `nacido_vivo`
  MODIFY `ID_NV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `ID_PROV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `registro_civil`
--
ALTER TABLE `registro_civil`
  MODIFY `ID_REGIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
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
