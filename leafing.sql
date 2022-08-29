-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-08-2022 a las 15:58:20
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leafing`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories_events`
--

CREATE TABLE `categories_events` (
  `id_categories_events` int(11) NOT NULL,
  `categories` varchar(500) NOT NULL,
  `categories_en` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories_events`
--

INSERT INTO `categories_events` (`id_categories_events`, `categories`, `categories_en`) VALUES
(1, 'reciclaje', 'recycling'),
(2, 'ríos', 'rivers'),
(3, 'lagunas', 'lagoons'),
(4, 'zonas en cuido', 'areas under care'),
(5, 'áreas verdes', 'green areas'),
(6, 'ecología', 'ecology'),
(7, 'taxonomía', 'taxonomy'),
(8, 'capacitaciones', 'trainings'),
(9, 'concientización', 'awareness'),
(10, ' pensamiento crítico', ' critical thinking'),
(11, 'otras', 'others'),
(12, 'Animales', 'Animals');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `coment` varchar(200) NOT NULL,
  `id_publisher` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coments`
--

INSERT INTO `coments` (`id`, `coment`, `id_publisher`, `id_event`, `date`) VALUES
(1, 'El tema esta muy interesante', 5, 1, '2022-08-29 02:30:05'),
(2, 'Muy buena iniciativa', 5, 2, '2022-08-29 02:30:31'),
(3, 'Es una caminata muy larga aprox. como dos horas. Me gusta!!!', 5, 3, '2022-08-29 02:31:10'),
(4, 'El profesor aristides es un exelente docente :)', 5, 5, '2022-08-29 02:32:22'),
(5, 'mmm interesante', 4, 7, '2022-08-29 02:53:25'),
(6, 'Que bonito se ve el evento', 3, 2, '2022-08-29 14:30:13'),
(7, 'El tema esta muy interesante\r\n\r\n', 3, 1, '2022-08-29 14:39:37'),
(8, 'hola, muy bonito evento', 3, 10, '2022-08-29 15:49:08'),
(9, 'diseño es el meta', 3, 10, '2022-08-29 15:50:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id_events` int(11) NOT NULL,
  `name_event` varchar(500) NOT NULL,
  `img_event` varchar(500) NOT NULL,
  `description_event` varchar(500) NOT NULL,
  `place_event` int(11) NOT NULL,
  `direccion_evento` varchar(500) NOT NULL,
  `date_event` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `id_categories_events` int(11) NOT NULL,
  `id_user_data` int(11) NOT NULL,
  `id_state_events` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id_events`, `name_event`, `img_event`, `description_event`, `place_event`, `direccion_evento`, `date_event`, `end_date`, `id_categories_events`, `id_user_data`, `id_state_events`) VALUES
(1, 'Aprende a cuidar las plantas', '1661737526_como_cuidar_las_plantas_de_interior_2688_orig.jpg', 'Una breve capacitacion sobre el porque es importante cuidar las plantas ya que son el ente principal del medio ambiente, profesores expertos en el area nos acompañaran siendo uno de ellos el profesor aristides el cual tiene 32 años de docencia en el area.', 10, 'El colegio don Bosco', '2022-09-06 08:00:00', '2022-09-06 12:00:00', 8, 4, 1),
(2, 'Limpieza las calles', '1661737833_operatore_ecologico.jpg', 'Una actividad simple pero importante que nos ayudara a evitar el mal olor y contaminacion u posteriores acontecimientos en el futuro', 8, 'Texistepeque, 2da avenida norte', '2022-09-10 08:50:00', '2022-09-10 15:00:00', 4, 4, 1),
(3, 'Limpieza en el cerro de Guazapa', '1661739673_Guazapa-min.jpg', 'Gracias a la organizacion de nuestro alcalde hemos organizado uan caminata hacia el cerro de guazapa y la cual aprovecharemos para limpiar todo su camino.', 4, 'San Jose Guayabal, Parque Central', '2022-09-03 06:00:00', '2022-09-03 16:00:00', 5, 4, 1),
(4, 'Limpieza del rio Lempa', '1661739840_lempa-portada.webp', 'Uno de los mayores rios de nuestra nacion necesita un merecido cuidado y por eso hemos organizado una limpiza de sus zonas mas importantes.', 3, 'Nueva Concepción, Parque central', '2022-09-06 10:00:00', '2022-09-06 16:50:00', 2, 4, 1),
(5, 'Capacitacion sobre ecologia', '1661740004_ecología-e1551739090805.jpg', 'El profesor Aristides vuelve para compartir una vez mas su conocimiento y en esta ocacion nos hablara sobre ecologia', 10, 'El colegio don Bosco', '2022-09-07 11:30:00', '2022-09-07 16:00:00', 6, 4, 1),
(6, 'Campaña de reciclaje', '1661740918_parque-central-cojutepeque.jpg', 'Cojuteoque es un lugar muy hermoso conocido por sus chorizos pero una cosa lo mata la cual es la contaminacion ultimamente se ve mucha basura en canales, calles, zonas verdes. AYUDANOS. Incluye comida.', 4, 'Cojutepeque, Parque central', '2022-08-31 07:00:00', '2022-08-31 15:00:00', 1, 5, 1),
(7, 'Consumo sostenible', '1661741478_58.jpg', 'El uso de modalidades de consumo y producción sostenibles aumenta la eficiencia y productividad asegura que las actividades humanas se mantengan dentro de la capacidad de sustentación del planeta y se respetan los derechos de las generaciones futuras.', 5, 'Surf city, playa el tunco', '2022-09-01 12:00:00', '2022-09-01 20:00:00', 8, 5, 1),
(8, 'MCDONALS ES VIDA BRO', '1661741964_Mcdonalds_logo.webp', 'MCDONALS ES VIDA BRO', 10, 'McDonalds, Escalón', '2022-08-30 08:00:00', '2022-09-08 12:02:00', 11, 4, 1),
(9, 'Salva a Añañin', '1661782853_Captura de pantalla (1).png', 'La increíble salvación de Añañin aña', 6, 'Mi casa en Apopa', '2022-08-29 08:00:00', '2022-08-30 02:00:00', 1, 3, 2),
(10, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkk', '1661788121_Captura de pantalla (2).png', 'llllllllllllllllllllllllllllllllllllllllllllllllll', 1, 'Colegio Don Bosco', '2022-09-23 03:21:00', '2022-12-31 03:21:00', 2, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id_inscriptions` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_persona_inscrita` int(11) NOT NULL,
  `date_inscriptions` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscriptions`
--

INSERT INTO `inscriptions` (`id_inscriptions`, `id_event`, `id_persona_inscrita`, `date_inscriptions`) VALUES
(1, 3, 5, '2022-08-29 02:31:14'),
(2, 5, 5, '2022-08-29 02:32:27'),
(3, 7, 4, '2022-08-29 02:53:32'),
(4, 10, 3, '2022-08-29 15:50:53'),
(5, 1, 3, '2022-08-29 15:51:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place_events`
--

CREATE TABLE `place_events` (
  `id_place` int(11) NOT NULL,
  `place` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `place_events`
--

INSERT INTO `place_events` (`id_place`, `place`) VALUES
(1, 'Ahuachapán'),
(2, 'Cabañas'),
(3, 'Chalatenango'),
(4, 'Cuscatlán'),
(5, 'La Libertad'),
(6, 'Morazán'),
(7, 'La Paz'),
(8, 'Santa Ana'),
(9, 'San Miguel'),
(10, 'San Salvador'),
(11, 'San Vicente'),
(12, 'Sonsonate'),
(13, 'La Unión'),
(14, 'Usulután'),
(15, 'Apopa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `random_curious_data`
--

CREATE TABLE `random_curious_data` (
  `id_curious_data` int(10) UNSIGNED NOT NULL,
  `title_curious_data` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `img_curious_data` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `content_curious_data` varchar(500) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `random_curious_data`
--

INSERT INTO `random_curious_data` (`id_curious_data`, `title_curious_data`, `img_curious_data`, `content_curious_data`) VALUES
(1, 'Tronco acumulador de agua', 'img.jpg', 'El baobab es un árbol del desierto que puede acumular hasta 1000 litros de agua\nen su tronco'),
(2, 'Volcanes submarinos', 'img.jpg', 'Cada año pueden hacer erupción entre 20 y 30 volcanes, pero la mayoría están\r\nbajo el agua'),
(3, 'Titan Arbol', 'img.jpg', 'El mayor árbol que podemos encontrar en el mundo es una secuoya gigante de California. Posee unos 85 metros de altura y 29 de diámetro de tronco.'),
(4, 'Las placas de hielo', 'img.jpg', 'La placa de hielo Antártico varía entre 3 y 5 km de grosor, cubre unos 18\r\nmillones de millas cuadradas y tiene temperaturas de -70 ºC.'),
(5, 'Impacto + meteorito = Lago', 'img.jpg', 'El lago Bosumtwi en Ghana fue creado por el impacto de un gran meteorito.'),
(6, 'La importancia de las plantas', 'img.jpg', 'La gran cantidad de oxígeno de la atmósfera procede del consumo de dióxido de carbono en las plantas durante la fotosíntesis, con lo que la vida no sería posible sin plantas.'),
(7, 'Ahorremos papel!!', 'img.jpg', 'Por cada tonelada de papel reciclado ahorramos más de 1.400 litros de petróleo.'),
(8, 'Uno de los mas longevos', 'img.jpg', 'Uno de los árboles más antiguos con vida se encuentra en California, en el Bosque Nacional Inyo, y es un pino de 4.850 años que se llama ‘Matusalén’.'),
(9, 'Viento a 372km/h !!!!', 'img.jpg', 'En 1934, una ráfaga de viento llegó a alcanzar los 372 km por hora en un monte de Washington, EE. UU.'),
(10, 'Son irreversibles', 'img.jpg', 'Los efectos dañinos del cambio climático son a mayormente irreversibles.'),
(11, 'Cuidemos el planeta', 'img.jpg', '. En un árbol o arbusto de Perú se hallan más especies de hormigas que en todas las islas británicas.'),
(12, 'Nuestra armosfera', 'img.jpg', 'La atmósfera de la Tierra está compuesta de 78% de nitrógeno, 21% de oxígeno y cantidades mínimas de otros gases, incluidos el argón y el dióxido de carbono.'),
(13, 'El CO2', 'img.jpg', 'La gran cantidad de oxígeno en la Tierra proviene del consumo de dióxido de carbono de nuestra vida vegetal durante la fotosíntesis.'),
(14, 'Mas caliente que el Sol', 'img.jpg', 'El núcleo interno de la Tierra tiene una temperatura entre 5400 y 6000 grados centígrados. Por lo tanto, esto significa que el núcleo es más caliente que la superficie del Sol (temperatura de la superficie: 5500 grados Celsius).'),
(15, 'El unico lugar', 'img.jpg', '. La Tierra también es el único lugar en el sistema solar donde el agua puede estar presente en los tres estados: sólido, líquido y gaseoso.'),
(16, 'Tan solo el 25%!!', 'img.jpg', '. Si sólo el 25% de las familias de Estados Unidos de Norteamérica utilizara menos de 10 bolsas de plástico al mes, se ahorrarían más de 2.5 millones de bolsas al año.'),
(17, 'Efectos de las plaguicidas', 'img.jpg', 'Más de 100 ingredientes de plaguicidas son sospechosos de causar defectos de nacimiento, cáncer y mutaciones genéticas.'),
(18, 'Se nos van 850M', 'img.jpg', '. Los estadounidenses utilizan 50 millones de toneladas de papel anualmente consumiendo más de 850 millones de árboles.'),
(19, 'Las bombillas eficientes', 'img.jpg', 'Una tonelada de dióxido de carbono que se libera en el aire puede evitarse mediante la sustitución de bombillas de 75 vatios con bombillas eficientes de energía.'),
(20, '50K especies anuales', 'img.jpg', 'Cada día, cerca de 137 especies de animales, plantas e insectos se extinguen debido a causas humanas, equivaliendo a 50.000 especies anuales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `random_curious_data_en`
--

CREATE TABLE `random_curious_data_en` (
  `id_curious_data` int(10) UNSIGNED NOT NULL,
  `title_curious_data` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `img_curious_data` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `content_curious_data` varchar(500) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `random_curious_data_en`
--

INSERT INTO `random_curious_data_en` (`id_curious_data`, `title_curious_data`, `img_curious_data`, `content_curious_data`) VALUES
(1, 'Water storage trunk', 'img.jpg', 'The baobab is a desert tree that can accumulate up to 1000 liters of water in its trunk.'),
(2, 'Underwater volcanoes', 'img.jpg', 'Between 20 and 30 volcanoes may erupt each year, but most are underwater.'),
(3, 'Titan Tree', 'img.jpg', 'The largest tree we can find in the world is a giant sequoia from California. It is about 85 meters high and has a trunk diameter of 29 meters.'),
(4, 'Ice sheets', 'img.jpg', 'The Antarctic ice sheet varies between 3 and 5 km in thickness, covers about 18 million square miles and has temperatures of -70 ºC.'),
(5, 'Impact + meteorite = Lake', 'img.jpg', 'Lake Bosumtwi in Ghana was created by the impact of a large meteorite.'),
(6, 'The importance of plants', 'img.jpg', 'The large amount of oxygen in the atmosphere comes from the consumption of carbon dioxide in plants during photosynthesis, so life would not be possible without plants.'),
(7, 'Let\'s save paper!', 'img.jpg', 'For every ton of paper recycled, we save more than 1,400 liters of oil.'),
(8, 'One of the longest-lived', 'img.jpg', 'One of the oldest living trees is found in California, in the Inyo National Forest, and is a 4,850-year-old pine named \'Methuselah\'.'),
(9, 'Wind at 372km/h !!!!', 'img.jpg', 'In 1934, a wind gust reached 372 km per hour on a mountain in Washington, USA.'),
(10, 'Are irreversible', 'img.jpg', 'The harmful effects of climate change are largely irreversible.'),
(11, 'Let\'s take care of the planet', 'img.jpg', 'In one tree or bush in Peru there are more species of ants than in all the British Isles.'),
(12, 'Our armosphere', 'img.jpg', 'The Earth\'s atmosphere is composed of 78% nitrogen, 21% oxygen and trace amounts of other gases, including argon and carbon dioxide.'),
(13, 'El CO2', 'img.jpg', 'The large amount of oxygen on Earth comes from the consumption of carbon dioxide by our plant life during photosynthesis.'),
(14, 'Hotter than the Sun', 'img.jpg', 'The Earth\'s inner core has a temperature between 5400 and 6000 degrees Celsius. Therefore, this means that the core is hotter than the surface of the Sun (surface temperature: 5500 degrees Celsius).'),
(15, 'The only place', 'img.jpg', 'Earth is also the only place in the solar system where water can be present in all three states: solid, liquid and gaseous.'),
(16, 'Only 25%!', 'img.jpg', 'If only 25% of U.S. households used fewer than 10 plastic bags per month, more than 2.5 million bags per year would be saved.'),
(17, 'Effects of pesticides', 'img.jpg', 'More than 100 pesticide ingredients are suspected of causing birth defects, cancer and genetic mutations.'),
(18, '850M are leaving us', 'img.jpg', 'Americans use 50 million tons of paper annually, consuming more than 850 million trees.'),
(19, 'Efficient light bulbs', 'img.jpg', 'One ton of carbon dioxide released into the air can be avoided by replacing 75-watt light bulbs with energy-efficient bulbs.'),
(20, '50K species per year', 'img.jpg', 'Every day, about 137 species of animals, plants and insects become extinct due to human causes, equivalent to 50,000 species per year.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE `reports` (
  `id_reports` int(11) NOT NULL,
  `report_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id_reports`, `report_name`) VALUES
(1, 'desnudos'),
(2, 'violencia'),
(3, 'acoso'),
(4, 'suicidio'),
(5, 'informacion_falsa'),
(6, 'spam'),
(7, 'lenguaje'),
(8, 'terrorismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports_transactional`
--

CREATE TABLE `reports_transactional` (
  `id_reports_transactional` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_report` int(11) NOT NULL,
  `date_report` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state_events`
--

CREATE TABLE `state_events` (
  `id_state_events` int(11) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `state_events`
--

INSERT INTO `state_events` (`id_state_events`, `state`) VALUES
(1, 'Activo'),
(2, 'Archivado'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_credentials`
--

CREATE TABLE `user_credentials` (
  `id` int(10) UNSIGNED NOT NULL,
  `mail_user` varchar(500) NOT NULL,
  `password_user` varchar(500) NOT NULL,
  `token` varchar(32) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_credentials`
--

INSERT INTO `user_credentials` (`id`, `mail_user`, `password_user`, `token`, `rol_id`) VALUES
(1, 'franc1sc0.sv.xd@gmail.com', '$2y$10$A4X5ZpYic0FA/QCVN1/e9uQ8CqHFc/3rESShK3aZT0dqePqQaEMxC', 'abd7c3380debc65c8569bc9910c41c99', 1),
(2, 'rodri123pineda@gmail.com', '$2y$10$hJqJ72fv2diDqC4tNNefUepnK81COQ8O0yTUS2FccAkvAyzIngIdC', 'cee8a1800ea3ecff8e888867a8331528', 1),
(3, 'escobaralberto381@gmail.com', '$2y$10$bg9D0PH5fsVbBc9LU6P7kuEon33ZqDqtW92iCLkBMm9svL8zu6KNS', 'b5c1364ee324ed0b224c55e3c0b96d01', 1),
(4, 'aniapancakes6@gmail.com', '$2y$10$R4mHvbR76iCva3r6wbN5SO5sLE0opo2ubQSyHwpuAxCYECTx.wMki', '87c83b40fb4b5943faeb05236f068b67', 2),
(5, 'juandanieljimenez302@gmail.com', '$2y$10$Krycp4P32EzVtwjrIt2CBug1JW8uAlC5uOLPbBL7FWhZybZWXFc7a', 'b63e46081d8fa5766d2a5fd227a5b9e8', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_data`
--

CREATE TABLE `user_data` (
  `id_user_data` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `borndate` date NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `about_me` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_data`
--

INSERT INTO `user_data` (`id_user_data`, `name`, `lastname`, `borndate`, `user_name`, `gender`, `img_path`, `about_me`) VALUES
(1, 'Francisco Josue', 'Hernandez Melendez', '2006-08-06', 'franc1sc0_sv', 'M', 'defaultImage.png', ''),
(2, 'Rodrigo Daniel', 'Pineda Ardon', '2006-06-08', 'Rodrogas UwU', 'M', 'defaultImage.png', ''),
(3, 'Leandro Alberto', 'Escobar Valencia ', '2003-05-06', 'Añañin', 'M', '1661787620_1661756324_kato.jpg', 'hola soy leandro'),
(4, 'Esteban ', 'Villeda', '2011-02-06', 'pepitOn60hz', 'M', 'defaultImage.png', ''),
(5, 'Juan Daniel', 'Jimenez Torres', '2004-04-08', 'DaniTorres', 'F', 'defaultImage.png', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories_events`
--
ALTER TABLE `categories_events`
  ADD PRIMARY KEY (`id_categories_events`);

--
-- Indices de la tabla `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_publisher` (`id_publisher`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_events`),
  ADD KEY `id_categories_events` (`id_categories_events`),
  ADD KEY `id_user-data` (`id_user_data`),
  ADD KEY `id_state-events` (`id_state_events`),
  ADD KEY `place_event` (`place_event`);

--
-- Indices de la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id_inscriptions`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `persona_inscrita` (`id_persona_inscrita`),
  ADD KEY `id_persona_inscrita` (`id_persona_inscrita`),
  ADD KEY `id_event_2` (`id_event`);

--
-- Indices de la tabla `place_events`
--
ALTER TABLE `place_events`
  ADD PRIMARY KEY (`id_place`);

--
-- Indices de la tabla `random_curious_data`
--
ALTER TABLE `random_curious_data`
  ADD PRIMARY KEY (`id_curious_data`);

--
-- Indices de la tabla `random_curious_data_en`
--
ALTER TABLE `random_curious_data_en`
  ADD PRIMARY KEY (`id_curious_data`);

--
-- Indices de la tabla `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_reports`);

--
-- Indices de la tabla `reports_transactional`
--
ALTER TABLE `reports_transactional`
  ADD PRIMARY KEY (`id_reports_transactional`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_report` (`id_report`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `state_events`
--
ALTER TABLE `state_events`
  ADD PRIMARY KEY (`id_state_events`);

--
-- Indices de la tabla `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id_user_data`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories_events`
--
ALTER TABLE `categories_events`
  MODIFY `id_categories_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id_inscriptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `place_events`
--
ALTER TABLE `place_events`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `random_curious_data`
--
ALTER TABLE `random_curious_data`
  MODIFY `id_curious_data` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `random_curious_data_en`
--
ALTER TABLE `random_curious_data_en`
  MODIFY `id_curious_data` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id_reports` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reports_transactional`
--
ALTER TABLE `reports_transactional`
  MODIFY `id_reports_transactional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `state_events`
--
ALTER TABLE `state_events`
  MODIFY `id_state_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_user_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coments`
--
ALTER TABLE `coments`
  ADD CONSTRAINT `coments_ibfk_1` FOREIGN KEY (`id_publisher`) REFERENCES `user_data` (`id_user_data`),
  ADD CONSTRAINT `coments_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_events`);

--
-- Filtros para la tabla `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `categories_events` FOREIGN KEY (`id_categories_events`) REFERENCES `categories_events` (`id_categories_events`),
  ADD CONSTRAINT `place_event` FOREIGN KEY (`place_event`) REFERENCES `place_events` (`id_place`),
  ADD CONSTRAINT `state` FOREIGN KEY (`id_state_events`) REFERENCES `state_events` (`id_state_events`),
  ADD CONSTRAINT `user_data(creator)` FOREIGN KEY (`id_user_data`) REFERENCES `user_data` (`id_user_data`);

--
-- Filtros para la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD CONSTRAINT `events_inscriptions` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_events`),
  ADD CONSTRAINT `user_data_events_inscriptions` FOREIGN KEY (`id_persona_inscrita`) REFERENCES `user_data` (`id_user_data`);

--
-- Filtros para la tabla `reports_transactional`
--
ALTER TABLE `reports_transactional`
  ADD CONSTRAINT `eventReport` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_events`),
  ADD CONSTRAINT `reportTransaccional` FOREIGN KEY (`id_report`) REFERENCES `reports` (`id_reports`);

--
-- Filtros para la tabla `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD CONSTRAINT `rol` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
