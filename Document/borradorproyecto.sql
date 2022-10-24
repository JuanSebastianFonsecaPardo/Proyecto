-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 07:10:06
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
-- Base de datos: `borradorproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `id` int(11) NOT NULL,
  `TipoDocumento` varchar(50) NOT NULL,
  `Documento` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Categoria_Id` int(11) NOT NULL,
  `Estado` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`id`, `TipoDocumento`, `Documento`, `Nombres`, `Apellidos`, `Email`, `Telefono`, `Categoria_Id`, `Estado`) VALUES
(47, 'Cedula', '5189596952', 'Kenneth ', 'Russell', '5189596952@mail.com', '1737850569', 13, 'Inactivo'),
(48, 'Cedula', '1014034893', 'Carrie ', 'Hull', '1014034893@mail.com', '5006583878', 13, 'Activo'),
(49, 'Cedula', '3136921721', 'Steven ', 'Reynolds', '3136921721@mail.com', '8915887891', 13, 'Activo'),
(50, 'Cedula', '1795358881', 'Steve ', 'Burkhardt', '1795358881@mail.com', '4412468069', 13, 'Activo'),
(52, 'Cedula', '5822546559', 'Jonathan ', 'Marshall', '5822546559@mail.com', '3313862417', 14, 'Activo'),
(53, 'Cedula', '8074955105', 'Willie ', 'Tunstall', '8074955105@mail.com', '5246513924', 14, 'Activo'),
(54, 'Cedula', '4377548922', 'Casey ', 'Williams', '4377548922@mail.com', '7177751197', 14, 'Activo'),
(55, 'Cedula', '2510534549', 'Don', 'French', '2510534549@mail.com', '5792828978', 14, 'Activo'),
(56, 'Cedula', '5379416047', 'Michael ', 'Turner', '5379416047@mail.com', '9555518271', 14, 'Activo'),
(57, 'Cedula', '5598509062', 'Larry ', 'Kauffman', '5598509062@mail.com', '7814893272', 15, 'Activo'),
(58, 'Cedula', '6367368039', 'Calvin', 'Sanders', '6367368039@mail.com', '5847050473', 15, 'Activo'),
(59, 'Cedula', '8874959980', 'Ariel', 'Scott', '8874959980@mail.com', '9936359808', 15, 'Activo'),
(60, 'Cedula', '2277988317', 'Rosemarie ', 'Clark', '2277988317@mail.com', '7023849185', 15, 'Activo'),
(61, 'Cedula', '1682710248', 'Coy ', 'Brady', '1682710248@mail.com', '9781680285', 15, 'Activo'),
(62, 'Cedula', '7643552355', 'William ', 'McHugh', '7643552355@mail.com', '7626915067', 16, 'Activo'),
(63, 'Cedula', '8983307716', 'Bernadette ', 'Wolf', '8983307716@mail.com', '1607255065', 16, 'Activo'),
(64, 'Cedula', '2197681764', 'Jody ', 'Batista', '2197681764@mail.com', '9578253621', 16, 'Activo'),
(65, 'Cedula', '7105656893', 'Helen ', 'Goetz', '7105656893@mail.com', '4170676274', 16, 'Activo'),
(66, 'Cedula', '3003851021', 'James ', 'Roberts', '3003851021@mail.com', '1046305943', 16, 'Activo'),
(67, 'Cedula', '6395207668', 'Mark ', 'Thorpe', '6395207668@mail.com', '6982843549', 17, 'Activo'),
(68, 'Cedula', '5909358545', 'Phillip ', 'Gonzales', '5909358545@mail.com', '6522472609', 17, 'Activo'),
(69, 'Cedula', '4395743058', 'Rosalind ', 'Armenta', '4395743058@mail.com', '3413799598', 17, 'Activo'),
(70, 'Cedula', '7107477448', 'Steven ', 'Brown', '7107477448@mail.com', '1951782484', 17, 'Activo'),
(71, 'Cedula', '2156451098', 'Melissa ', 'Mooney', '2156451098@mail.com', '3932754142', 17, 'Activo'),
(74, 'Tarjeta identidad', '1011091238', 'Juan Sebastian', 'Fonseca Pardo', 'fonsecajuancho23@gmail.com', '3206046288', 17, 'Activo'),
(75, 'Cedula', '142142141', 'andres', 'pardo', 'jdnfksdn@gmail.com', '123213123', 14, 'Activo'),
(76, 'Cedula', '943294329', 'ndfdsnfj', 'njnjnj', 'safnsf@kmfkam', '123123', 22, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `IdFecha` int(11) NOT NULL,
  `IdAprendiz` int(11) NOT NULL,
  `Asistencia` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `IdFecha`, `IdAprendiz`, `Asistencia`, `Estado`) VALUES
(737, 14, 67, 'Asistio', 'Activo'),
(740, 14, 68, 'Falto', 'Activo'),
(741, 16, 48, 'Asistio', 'Activo'),
(742, 16, 49, 'Falto', 'Activo'),
(743, 16, 50, 'Falto', 'Activo'),
(744, 17, 57, 'Asistio', 'Activo'),
(745, 17, 58, 'Falto', 'Activo'),
(746, 17, 61, 'Falto', 'Activo'),
(747, 17, 59, 'Asistio', 'Activo'),
(748, 17, 60, 'Asistio', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `IdEmpleado` int(11) NOT NULL,
  `Estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `Nombre`, `Descripcion`, `IdEmpleado`, `Estado`) VALUES
(13, 'Menores 10', 'Categoria para menores de 10 años', 108, 'Activo'),
(14, 'Menores de 16', 'Categoria para menores de 16 años', 149, 'Activo'),
(15, 'Menores 18', 'Categoria para menores de 18 años pero mayores a 16 años', 115, 'Activo'),
(16, 'Menores 20', 'Categoria para menores de 20 años pero mayores de 18', 66, 'Activo'),
(17, 'Mayores', 'Categoria para mayores a los 20 años', 65, 'Activo'),
(22, 'Mayores de 18 años', 'Categoria diseñada para aprendices mayores a 18 años', 120, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `Rol` varchar(50) NOT NULL,
  `TipoDocumento` varchar(50) NOT NULL,
  `Documento` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `Rol`, `TipoDocumento`, `Documento`, `Nombres`, `Apellidos`, `Email`, `Telefono`, `Estado`, `password`) VALUES
(65, 'Director Deportivo', 'Tarjeta identidad', '1011091238', 'Juan Sebastian', 'Fonseca Pardo', 'fonsecajuancho23@gmail.com', '3206046288', 'Activo', '21232f297a57a5a743894a0e4a801fc3'),
(66, 'Instructor', 'Tarjeta identidad', '1022936029', 'Alejandra ', 'Espejo Chamorro', 'Alejaespejo6@gmail.com', '3025240362', 'Activo', 'adc021e26542638aadba518b807c673f'),
(106, 'Director Deportivo', 'Cedula', '10110921237', 'Mateo', 'Morales', 'MateoMorales@mail.com', '1235817397', 'Activo', '6c4f67f6fa1b6745835f9f5bd6bee4a9'),
(107, 'Director Deportivo', 'Cedula', '5059139844', 'Luis ', 'Callahan', 'LuisRCallahan@gustr.com', '5059139844', 'Activo', 'b532ea3442f49fbdead50f9b639a3c5f'),
(108, 'Director Deportivo', 'Cedula', '4871257300', 'Melvin ', 'Cote', 'MelvinCote@mail.com', '6692361590', 'Activo', '640857e4c0df7dd15becd0fad1ed3beb'),
(109, 'Director Deportivo', 'Cedula', '5785668198', 'Timothy ', 'Olivas', 'TimothyOlivas@mail.com', '7006891915', 'Activo', 'a08eb7c6804d726a4191796243e7acff'),
(110, 'Director Deportivo', 'Cedula', '5555318393', 'Kimberly', 'Lee', 'KimberlyLee@mail.com', '7571505253', 'Activo', 'bdf2bca7f021cf3a479b093f739906e1'),
(111, 'Director Deportivo', 'Cedula', '3111138694', 'Lola', 'Bryant', 'LolaBryant@mail.com', '4804342034', 'Activo', 'b684abf08f1fc9485c6097b933eebe64'),
(112, 'Director Deportivo', 'Cedula', '3103284080', 'Edith', 'Small', 'EdithSmaill@mail.com', '5027011370', 'Activo', '49f60e3c8774a35eca01d1169a2f7bfc'),
(113, 'Director Deportivo', 'Cedula', '6323857416', 'John', 'Higdon', 'JohnHigdon@mail.com', '6339877809', 'Activo', 'b01320a7a587ea395ef4849a5f5f3420'),
(114, 'Director Deportivo', 'Cedula', '6665900405', 'William', 'Underwood', 'WilliamUnderwood@mail.com', '6479808105', 'Activo', '714fa6c6a8e9822e1af89181b22a694c'),
(115, 'Director Deportivo', 'Cedula', '7465997539', 'Lisa', 'Bryden', 'LisaBryden@mail.com', '2272429214', 'Activo', '2f1c1f3177b093345c36affc1af912de'),
(116, 'Director Deportivo', 'Cedula', '1262858684', 'Danny', 'Fendley', 'DannyFendley@mail.com', '5742271637', 'Activo', 'aefb13310d241d3cf619f3d226af5b33'),
(117, 'Director Deportivo', 'Cedula', '6258419113', 'Hillary', 'Broom', 'HillaryBroom@mail.com', '5761444544', 'Activo', 'b48b4dad1a0c109ec0ac8662b9daaeb2'),
(118, 'Director Deportivo', 'Cedula', '9973958132', 'Stacey', 'Ames', 'StaceyAmes@mail.com', '5998653074', 'Activo', '9a18df216428784880efd748a0d369ca'),
(119, 'Director Deportivo', 'Cedula', '5123330133', 'Norma', 'Ellis', 'NormaEllis@mail.com', '2378734835', 'Activo', '0e6893766b2ac6bcbe0070414f137584'),
(120, 'Director Deportivo', 'Cedula', '7763420314', 'Robert', 'Anton', 'RobertAnton@mail.com', '5090664524', 'Activo', 'cb8c4b37cf21aab9d72175cc68694107'),
(121, 'Director Deportivo', 'Cedula', '9436472279', 'Phyllis', 'Curry', 'PhyllisCurry@mail.com', '9493140901', 'Activo', '8f74fb5b933cc5cbdfef1f6d06b38b23'),
(122, 'Director Deportivo', 'Cedula', '6130029138', 'Charles', 'Bates', 'CharlesBates@mail.com', '4004632518', 'Activo', '0785946275b91be0f31fad4a225ecfc2'),
(123, 'Director Deportivo', 'Cedula', '4667272903', 'Norbert', 'Martinez', 'NorbetMartinez@mail.com', '7984105084', 'Activo', '2fd694611291af03b82940161e4c522f'),
(124, 'Instructor', 'Cedula', '3755623475', 'Liliana', 'Holt', 'Holt@MAIL.COM', '2069773146', 'Activo', '997fb8064cff9e8b7efd11ec6edc35fc'),
(125, 'Director Deportivo', 'Cedula', '8332332705', 'Tyrone ', 'Butts', 'Butts@mail.com', '7613790899', 'Activo', '0012e264db6741aaaf6082905b29f63b'),
(126, 'Director Deportivo', 'Cedula', '2166647336', 'Tyrone ', 'Butts', 'Butts@mail.com', '7559916992', 'Activo', 'c2a9df8a94dc5f8fd96d90cf7b2a000a'),
(127, 'Director Deportivo', 'Cedula', '8772681785', 'Meredith ', 'Coon', 'Coon@mail.com', '1212594271', 'Activo', 'b46110fc0074505d2172d29729c2dcd1'),
(128, 'Director Deportivo', 'Cedula', '6513433562', 'Sarah ', 'Thomas', 'Thomas@mail.com', '2124813723', 'Activo', '22a4a521add9d923373f3c358aeef876'),
(129, 'Director Deportivo', 'Cedula', '6572410861', 'Robin ', 'Phillips', 'Phillips@mail.com', '2970834949', 'Activo', 'ea2fdcfa77341c92a0e0035777753f23'),
(130, 'Director Deportivo', 'Cedula', '4612626742', 'James ', 'Alexander', 'Alexander@mail.com', '7793888516', 'Activo', 'ee00a1aef38245a4001cf3169bb56e68'),
(131, 'Director Deportivo', 'Cedula', '3062146095', 'Lorena ', 'Smith', 'Smith@mail.com', '3224508486', 'Activo', '354d69292f09e41d6077e06e31903b04'),
(132, 'Director Deportivo', 'Cedula', '6216668316', 'Paula ', 'Sanchez', 'Sanchez@mail.com', '8709907389', 'Activo', 'f1ba99909f08391631cc8f49156dfc30'),
(133, 'Director Deportivo', 'Cedula', '8997581799', 'Virginia ', 'Lehman', 'Lehman@mail.com', '6803282237', 'Activo', '31928d4f4e8f8695e98fb40593538735'),
(134, 'Director Deportivo', 'Cedula', '9974735080', 'Barbara ', 'Logan', 'Logan@mail.com', '5876155366', 'Activo', 'f28f67c1a0a2fab6cbb17ea927b1c14c'),
(135, 'Director Deportivo', 'Cedula', '3937417903', 'Melissa', 'Hebert', 'Hebert@mail.com', '9531095833', 'Activo', '2507e0e5af7f4c6bef436c8cd0e90bc3'),
(136, 'Director Deportivo', 'Cedula', '9866007008', 'Angela ', 'Simmons', 'Simmons@mail.com', '9143525351', 'Activo', '76fc50d0a189a2048e113c070940a1f9'),
(137, 'Director Deportivo', 'Cedula', '5746747918', 'Vivian ', 'Brown', 'Brown@mail.com', '8238285807', 'Activo', 'ba615bc48a6c8d046a2871323e5407dd'),
(138, 'Director Deportivo', 'Cedula', '1888363449', 'Shirley ', 'Resendez', 'Resendez@mail.com', '3991608030', 'Activo', 'f2f570ed4d178953b2309adde73ecd50'),
(139, 'Director Deportivo', 'Cedula', '4099337637', 'Patricia', 'Gonzales', 'Gonzales@mail.com', '5245942247', 'Activo', 'cbce2adba5c07e4ccf2a29e43451714c'),
(140, 'Director Deportivo', 'Cedula', '3606196042', 'Phyllis ', 'Hamilton', 'Hamilton@mail.com', '1624433161', 'Activo', '8e7a8eddbc13e4afbea9e4a12d50eea2'),
(141, 'Director Deportivo', 'Cedula', '4802044148', 'Mary ', 'Hodgdon', 'Hodgdon@mail.com', '8389648401', 'Activo', 'ff256fea8133f3534aec8d592448beec'),
(142, 'Director Deportivo', 'Cedula', '5179690063', 'Pauline ', 'Smart', 'Smart@mail.com', '4067368388', 'Activo', 'dc0f791dfb122fe15cf8aa972d2202e5'),
(143, 'Director Deportivo', 'Cedula', '9142793580', 'Joseph ', 'Smith', 'Smith@mail.com', '7504702339', 'Activo', '0116704c79dbda949002823577479c72'),
(144, 'Director Deportivo', 'Cedula', '6531266542', 'Rodolfo ', 'Booher', 'Booher@mail.com', '6180815176', 'Activo', 'f7d36795cda7d181c3cea0c5a9c10d44'),
(145, 'Director Deportivo', 'Cedula', '2917911530', 'Olivia ', 'Spenser', 'Spenser@mail.com', '4779693598', 'Activo', 'e0281d7b9abd36e27af4bb2c4b914d9e'),
(146, 'Director Deportivo', 'Cedula', '1430806641', 'Joseph ', 'Burns', 'Burns@mail.com', '8349179450', 'Activo', '890b0edf2171a10a768cbd3762883206'),
(147, 'Director Deportivo', 'Cedula', '7759935269', 'Sophie ', 'Dietz', 'Dietz@mil.com', '8679249966', 'Activo', '6cc20bf1cc5308a411b9f367075d86ed'),
(148, 'Director Deportivo', 'Cedula', '7490065472', 'Wayne ', 'Cockrell', 'Cockrell@mail.com', '1262610118', 'Activo', '7496b714bf91b9abfdce339642f893b4'),
(149, 'Director Deportivo', 'Cedula', '4949000601', 'David ', 'Perry', 'Perry@mail.com', '4748717746', 'Activo', '553e1e3a7ace3bceed0f883cb1624a42'),
(150, 'Director Deportivo', 'Cedula', '4804224244', 'Elias ', 'Cady', 'Cady@mail.com', '3279375109', 'Activo', '92b7799b47b7756863f3378853ae33f3'),
(151, 'Director Deportivo', 'Cedula', '1579054571', 'Kathleen ', 'Green', 'Green@mail.com', '6416274606', 'Activo', 'f1e1eae24f56bc1564f5d440524d25d9'),
(152, 'Director Deportivo', 'Cedula', '4374064358', 'Guillermina ', 'Hatley', 'Hatley@mail.com', '1983765717', 'Activo', '468dea71fef1a0b9d44832174401a35e'),
(155, 'Director Deportivo', 'Cedula', '9502401152', 'Felipe', 'Rodrigo', 'Rodrigo@mail.com', '4506353943', 'Activo', '9f1c019a72fc548528b11bb0f9059766'),
(158, 'Director Deportivo', 'Cedula', '112345678', 'pivoot', 'administrador', 'pivoot23@gmail.com', '14321412421', 'Activo', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `IdCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`id`, `Nombre`, `Fecha`, `IdCategoria`) VALUES
(14, 'Clase', '2022-10-23', 17),
(16, 'Clase', '2022-10-24', 13),
(17, 'Clase', '2022-10-25', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Categoria_Id` (`Categoria_Id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdAprendiz` (`IdAprendiz`),
  ADD KEY `IdFecha` (`IdFecha`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdEmpleado` (`IdEmpleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdCategoria` (`IdCategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=749;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `aprendiz_ibfk_1` FOREIGN KEY (`Categoria_Id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_3` FOREIGN KEY (`IdAprendiz`) REFERENCES `aprendiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_4` FOREIGN KEY (`IdFecha`) REFERENCES `fecha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`IdEmpleado`) REFERENCES `empleado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD CONSTRAINT `fecha_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
