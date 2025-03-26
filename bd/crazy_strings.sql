-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 03:55:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crazy_strings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`ID`, `titulo`, `descripcion`, `imagen`) VALUES
(7, 'Explorando la Pasión Musical en Crazy String\'s', 'En Crazy String\'s no sólo vendemos música e instrumentos, respiramos y vivimos la pasión por el arte sonoro. Nuestra tienda es mucho más que un lugar donde comprar instrumentos; Es un santuario para los amantes de la música, donde cada cuerda, cada nota y cada melodía se entrelazan para crear una experiencia única.', '1700444976_1.jpg'),
(8, 'Equipándote para la Magia Musical en Crazy String\'s', 'En Crazy String\'s, creemos que la música tiene el poder de transformar vidas y conectar almas. Es por eso que nos esforzamos por ofrecerle una amplia gama de instrumentos y equipos de las marcas más confiables y reconocidas de la industria musical. Desde guitarras vibrantes hasta teclados mágicos, desde baterías enérgicas hasta equipos de grabación de última generación, estamos comprometidos a brindarle todo lo que necesita para expresar su creatividad y alcanzar nuevas alturas musicales.', '1700444990_2.jpg'),
(9, 'Bienvenido a la Familia Crazy String: Tu Viaje Musical Comienza Aquí', 'Gracias por unirte a la familia Crazy String. Estamos emocionados de ser parte de tu viaje musical y ayudarte a alcanzar tus objetivos artísticos. ¡Deja que la música te guíe y las cuerdas te lleven a lugares inimaginables!', '1700445000_3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `puesto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`ID`, `imagen`, `nombre_completo`, `puesto`) VALUES
(6, '1700445587_2.jpg', 'Samuel \"El Armonizador\"', 'Especialista en Teclados: Samuel es nuestro experto en teclados y pianos. Con una formación sólida en música clásica y contemporánea, está aquí para guiarte en la elección del teclado perfecto para tus necesidades y para ofrecer clases que te ayudarán a dominar las teclas.'),
(7, '1700445634_1.jpg', 'Daniel \"El Melódico\"', 'Fundador y Director: Con una trayectoria en la industria musical, Daniel fundó Crazy String\'s con la visión de crear un espacio donde la pasión por la música se fusionara con la calidad de los instrumentos. Es un amante de la guitarra y ha dedicado su vida a compartir su amor por la música con otros.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `portafolio`
--

INSERT INTO `portafolio` (`ID`, `titulo`, `subtitulo`, `imagen`, `descripcion`, `categoria`, `ubicacion`) VALUES
(18, 'Cort G250 Negra', 'Guitarra Eléctrica', '1700446295_Guitarra Electrica.jpg', 'Una guitarra diseñada para producir sonidos amplificados mediante pastillas eléctricas. Ideal para géneros como el rock, blues y metal.', 'Instrumento musical ', 'Soacha.'),
(19, 'Estuche para Guitarra Eléctrica GE1', 'Funda', '1700446409_Guitarra naranja.jpg', 'Funda resistente que protege la guitarra de golpes y condiciones climáticas adversas durante el transporte.', 'Accesorio', 'Soacha.'),
(20, 'Fender Rumble 100', 'Amplificador para bajo eléctrico', '1700446489_Amplificador Fender.jpg', 'Dispositivo que amplifica el sonido de un bajo eléctrico, proporcionando potencia y control sobre el tono.', 'Equipo de sonido', 'Soacha.'),
(21, 'Strap para Guitarra Eléctrica PALMER #2 GM0040', 'Correa', '1700446608_Correa.jpg', 'Correa ajustable que se coloca alrededor del cuello o hombros para sostener la guitarra mientras se toca de pie.', 'Accesorio', 'Soacha.'),
(22, 'Fender FT-1 PRO CLIP', 'Afinador Cromático', '1700446768_Afinador.jpg', 'Dispositivo que ayuda a afinar instrumentos musicales, detectando y mostrando la frecuencia de la nota.', 'Accesorio', 'Soacha.'),
(23, 'AUDIO-TECHNICA AT2020 ', 'Micrófono', '1700446963_Microfono.jpg', 'Descripción: Un micrófono sensible que captura sonidos con gran detalle, ideal para grabaciones de estudio, vocales e instrumentos.', 'Equipo de grabación', 'Soacha.'),
(24, 'At-lp120xusbbk Negro', 'Tocadiscos', '1700447055_Tocadiscos.jpg', 'Dispositivo para reproducir discos de vinilo, permitiendo disfrutar de la calidad analógica de la música.', 'Equipo de sonido', 'Soacha.'),
(25, '\"Discovery\" de Daft Punk ', 'Vinilo', '1700447141_Vinilo.jpg', 'Cuarto álbum de estudio que presenta un enfoque más melódico, incluyendo hits como \"One More Time\" y \"Digital Love\".', '', ''),
(26, 'Conector Jack Hembra de 3.5 mm con 4 Salidas de Jack Macho', 'Cable', '1700447203_Cables.jpg', 'Cable utilizado para conectar instrumentos musicales a amplificadores u otros dispositivos de audio.', 'Accesorio', 'Soacha.'),
(27, 'KORG B2SP', 'Piano Digital ', '1700447307_Piano mecanico.jpg', 'Instrumento que emula el sonido y la sensación de un piano acústico, pero con la ventaja de ser portátil y tener funciones electrónicas.', 'Instrumento musical', 'Soacha.'),
(28, 'KORG MS-20 FS GREEN', 'Sintetizador Analógico ', '1700447440_Teclado raro.jpg', 'Instrumento electrónico que genera sonidos mediante la manipulación de ondas sonoras, ofreciendo posibilidades creativas para la producción musical.', 'Instrumento musical ', 'Soacha.'),
(29, 'MIDI NOVATION FLKEY MINI', 'Teclado', '1700447512_Teclado Midi.jpg', 'Un teclado musical que se conecta a dispositivos electrónicos para la creación y edición de música mediante señales MIDI.', 'Equipo de grabación', 'Soacha.'),
(30, 'Pioneer DDJ-SR2 portátil de 2 canales para Serato', 'Controlador de DJ', '1700447635_Mesa dj.jpg', 'Interfaz que permite a los DJ \'s controlar y manipular música digital durante sus actuaciones en vivo.', 'Equipo de DJ', 'Soacha.'),
(31, 'AKG K72', 'Auriculares de Estudio ', '1700447704_Audifonos.jpg', 'Auriculares diseñados para ofrecer una reproducción de audio precisa, ideales para grabaciones y mezclas en estudio.', 'Equipo de grabación', 'Soacha.'),
(32, 'NUX MG-400', 'Pedalera Multi-efectos para guitarra y bajo', '1700447810_Pedal con wami.jpg', 'Dispositivo que modifica el sonido de la guitarra mediante efectos como distorsión, delay o chorus.', 'Accesorio', 'Soacha.'),
(33, 'Yamaha SBP2F5', 'Batería', '1700447908_Bateria Yamaha.jpg', 'Un conjunto de tambores y platillos diseñados para ser tocados con baquetas. Perfecto para músicos de estilos como el jazz, rock y pop.', 'Instrumento musical ', 'Soacha.'),
(34, 'NOVA N2BN', 'Baquetas para Batería ', '1700447973_Baquetas.jpg', 'Palillos utilizados para tocar la batería, disponibles en diferentes materiales y pesos según las preferencias del baterista.', 'Accesorio', 'Soacha.'),
(35, 'Hércules Bs-118bb', 'Atril Soporte Para Partitura', '1700448058_Atril.jpg', 'Estructura ajustable que sostiene partituras durante la interpretación musical, proporcionando comodidad al músico.', 'Accesorio', ''),
(36, 'GREKO VW323', 'Violín', '1700448123_Violinchelo.jpg', 'Instrumento de cuerda frotada que produce sonidos mediante el rozamiento de un arco sobre las cuerdas.', 'Instrumento musical', 'Soacha.'),
(37, 'BOSS TUNER TU -3', 'Pedal Afinador Cromático para Guitarra Eléctrica', '1700448207_Pedal.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID` int(11) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID`, `icono`, `titulo`, `descripcion`) VALUES
(8, 'fa-headphones', 'Venta de Instrumentos Musicales:', 'Ofrecemos una cuidadosa selección de instrumentos musicales de alta calidad, desde guitarras y bajos hasta teclados, baterías y más. Nuestro objetivo es proporcionarte los instrumentos que necesitas para expresar tu creatividad y llevar tu música al siguiente nivel.'),
(9, 'fa-wrench', ' Reparación y Mantenimiento:', 'En Crazy String\'s, comprendemos la importancia de mantener tus instrumentos en perfecto estado. Ofrecemos servicios de reparación y mantenimiento realizados por expertos técnicos que cuidarán de tus instrumentos como si fueran propios. Desde cambios de cuerdas hasta reparaciones más complejas, estamos aquí para asegurarnos de que tu equipo esté siempre listo para tocar.'),
(10, 'fa-question-circle', 'Asesoramiento Personalizado:', 'Nuestro equipo de expertos está siempre disponible para ofrecer asesoramiento personalizado. Ya sea que estés buscando el instrumento perfecto, necesites orientación sobre equipos de grabación o simplemente busques consejos sobre cómo mejorar tu técnica, estamos aquí para ayudarte.'),
(11, 'fa-question-circle', 'Clases y Talleres:', 'Queremos ser parte de tu viaje musical desde el principio. Por eso, ofrecemos clases y talleres impartidos por profesionales experimentados. Ya seas un principiante que está dando sus primeros pasos en el mundo de la música o un músico experimentado que busca perfeccionar sus habilidades, tenemos programas adaptados a todos los niveles.'),
(12, 'fa-money', 'Alquiler de Equipos:', 'Si estás explorando nuevos sonidos o necesitas un equipo específico para un evento especial, ofrecemos servicios de alquiler de equipos musicales. Desde amplificadores hasta sistemas de sonido completos, te proporcionamos las herramientas que necesitas para destacar en cualquier actuación.'),
(13, 'fa-calendar', 'Eventos y Jam Sessions:', 'En Crazy String\'s, creemos en la importancia de construir una comunidad musical sólida. Organizamos eventos, jam sessions y actividades sociales para que puedas conectar con otros músicos, compartir experiencias y aprender de la diversidad musical que nos rodea.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `usuario`, `password`, `correo`) VALUES
(5, 'Daniel-M', '159', 'daniel.murillo-r@uniminuto.edu.co'),
(6, 'Samuel-J', '951', 'samuel.jimenez-l@uniminuto.edu.co');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
