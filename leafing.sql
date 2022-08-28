-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-08-2022 a las 16:56:04
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.1.7

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
(1, 'Laguna', 'Lagoon'),
(2, 'Rios', 'Rivers'),
(3, 'Espacios verdes', 'Green spaces'),
(5, 'Lagos', 'Lakes'),
(6, 'Otras', 'Other'),
(7, 'Tratamiento de aguas', 'Water treatment');

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
(1, 'Limpieza del cerro de Guazapa', '1661695966_Guazapa.jpg', 'Sera una caminata comunitara en la que limpiaremos el camino hacia el cerro de guazapa', 3, 'San Jose Guayabal', '2022-09-07 09:00:00', '2022-09-07 16:00:00', 3, 5, 1);

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
(1, 'San Salvador'),
(2, 'La libertad'),
(3, 'Cuscatlan'),
(4, 'San Miguel'),
(5, 'Chalatenango'),
(6, 'San Vicente'),
(7, 'Soyapango');

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
(3, 'leandroescobar360@gmail.com', '$2y$10$gDF5K3oUG/lmS.Y63vnGm.lf.QfpaayzZFxhUGWKuXd9rNSomG1je', '77a6bde4a1566dcbffb5e0f236759407', 1),
(4, 'correo.prueba@gmail.com', '$2y$10$JsskLroB8cDHsmTZDRWl9eVyDm2Jlp6lgf89P6yKKyw3HqShrv5fK', '2342a52562b575985b4fc8fb1f5f8501', 2),
(5, 'franelcrack16@gmail.com', '$2y$10$ab0duxiYFeVGFKHty5GqCOA2zRpRYqlwO/EHlmKq/ADL6/Bh1uNYG', 'e9d397b44535120eda781dcc56b924b2', 2),
(6, 'axgagsgasgsg@gmail.com', '$2y$10$OsGi4G7E1PGFcHh3Bn0pMun7ApEn9KI5bmOK4kwiaoa3si3x6RHsu', '8477b5a982eb7d7c52045cf7a78cd364', 2);

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
  `img_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_data`
--

INSERT INTO `user_data` (`id_user_data`, `name`, `lastname`, `borndate`, `user_name`, `gender`, `img_path`) VALUES
(1, 'Francisco Josue', 'Hernandez Melendez', '2006-08-06', 'franc1sc0_sv', 'M', 'defaultImage.png'),
(2, 'Rodrigo Daniel', 'Pineda Ardon', '2006-06-08', 'Rodrogas UwU', 'M', 'defaultImage.png'),
(3, 'Leandro Alberto', 'Valencia Escobar', '2003-05-06', 'Leansttar', 'M', 'defaultImage.png'),
(4, 'Juan', 'Perez', '2006-06-08', 'JuanCaballo', 'M', 'defaultImage.png'),
(5, 'Adrian', 'Saz', '2006-02-06', 'AdrianXSaz', 'M', 'defaultImage.png'),
(6, 'Shouko', 'Komi', '2006-02-06', 'Komisan', 'F', 'defaultImage.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories_events`
--
ALTER TABLE `categories_events`
  ADD PRIMARY KEY (`id_categories_events`);

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
  MODIFY `id_categories_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id_events` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id_inscriptions` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `place_events`
--
ALTER TABLE `place_events`
  MODIFY `id_place` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_user_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

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
