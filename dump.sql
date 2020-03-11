-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2020 a las 19:51:56
-- Versión del servidor: 5.5.43
-- Versión de PHP: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelicula` int(11) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `puntuacion` float(18,2) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'PENDIENTE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `comentarios`
--

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_pelicula`, `mensaje`, `puntuacion`, `id_usuario`, `estado`) VALUES
(1, 1, 'La peor terminator de toda la saga', 2.00, 2, 'PENDIENTE'),
(2, 2, 'Muy entretenida, perfecta para niños en vacaciones', 5.00, 2, 'APROBADO'),
(3, 3, 'No la vi, pero me dijeron que es muy buena', 4.00, 2, 'RECHAZADO'),
(4, 6, 'Muy buena pelicula', 5.00, 3, 'PENDIENTE'),
(5, 10, 'Peliculon', 4.00, 3, 'PENDIENTE'),
(6, 1, 'Me encanto, buenisima', 3.00, 3, 'PENDIENTE'),
(7, 7, 'Muy buenos efectos especiales', 5.00, 3, 'PENDIENTE'),
(8, 2, 'A mi hijo le encanto', 5.00, 3, 'PENDIENTE'),
(9, 9, 'Es un crack el pollo', 5.00, 3, 'PENDIENTE'),
(10, 8, 'Es muy triste', 5.00, 3, 'PENDIENTE'),
(11, 8, 'Me parecio muy triste y no me gusto', 1.00, 4, 'PENDIENTE'),
(12, 7, 'Me encanta como maneja', 5.00, 4, 'PENDIENTE'),
(13, 2, 'Mi sobrino lloro toda la pelicula ', 1.00, 4, 'PENDIENTE'),
(14, 9, 'Muy buena pelicula', 4.00, 4, 'PENDIENTE');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elencos`
--

CREATE TABLE IF NOT EXISTS `elencos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelicula` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `elencos`
--

INSERT INTO `elencos` (`id`, `id_pelicula`, `nombre`) VALUES
(1, 1, 'Arnold Schwarzenegger'),
(2, 1, 'Linda Hamilton'),
(3, 2, 'Kallan Holley'),
(4, 2, 'Carter Thorne'),
(6, 2, 'Berkley Silverman'),
(7, 3, 'Keanu Reeves'),
(8, 4, 'Brad Pitt'),
(9, 4, 'Jason Statham'),
(10, 5, 'Jason Statham'),
(11, 6, 'Ewan McGregor'),
(12, 6, 'Johnny Lee Miller'),
(13, 7, 'Robert De Niro'),
(14, 8, 'Brad Pitt'),
(15, 9, 'Kelly Slater'),
(16, 10, 'Robin Williams'),
(17, 11, 'Robin Williams');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Aventuras'),
(3, 'Comedia'),
(4, 'Drama'),
(5, 'Musicales'),
(6, 'Terror'),
(7, 'Ciencia Ficción'),
(8, 'Suspenso'),
(9, 'Infantiles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `resumen` varchar(500) NOT NULL,
  `director` varchar(255) NOT NULL,
  `youtube_trailer` varchar(255) NOT NULL,
  `puntuacion` decimal(5,2) NOT NULL,
  `extension` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `id_genero`, `fecha_lanzamiento`, `resumen`, `director`, `youtube_trailer`, `puntuacion`, `extension`) VALUES
(1, 'Terminator: Dark Fate', 1, '2019-10-23', 'Un nuevo tipo de Terminator llega desde el futuro a la Ciudad de México para asesinar a una joven llamada Dani Ramos. Sin embargo, también viaja al presente desde el futuro Grace, un híbrido entre cyborg y humano que debe, con la ayuda de Sarah Connor, proteger a Ramos del aparentemente indestructible robot asesino.', 'Tim Miller', 'https://www.youtube.com/watch?v=oxy8udgWRmo', 0.00, 'jpg'),
(2, 'Paw Patrol: Mighty Pups', 9, '2019-04-04', 'El alcalde Humdinger pone en marcha uno de sus planes más audaces: ser el primer Alcalde en pisar la luna. Con la ayuda de su sobrino Harold, construye un cohete en el que pretende llegar hasta el satélite de la tierra. Pero, como siempre, su plan va mal y el cohete termina saliendo sin él. En el camino, el cohete desvía la ruta de un meteoro, haciendo que éste se dirija hacia la tierra. Los cachorros de la Patrulla Canina unen sus fuerzas para evacuar las calles y proteger a los ciudadanos de B', 'Charles E. Bastien', 'https://www.youtube.com/watch?v=PSJCZpGxrm8', 5.00, 'jpg'),
(3, 'The Matrix', 7, '1999-07-30', 'Un experto en computadoras descubre que su mundo es una simulación total creada con maliciosas intenciones por parte de la ciberinteligencia.', 'Lana Wachowski, Lilly Wachowski', '', 0.00, 'jpg'),
(4, 'Snatch', 2, '2001-04-11', 'Un grupo de ladrones lucha para encontrar un diamante robado de 84 quilates con un valor incalculable.', 'Guy Ritchie', '', 0.00, 'png'),
(5, 'Lock, Stock and Two Smoking Barrels', 1, '1998-08-28', 'Eddie convence a tres amigos para apostar todos sus ahorros en una partida de cartas contra un mafioso. Los cuatro pierden la partida y deben pagar una gran suma en tan solo una semana.', 'Guy Ritchie', '', 0.00, 'jpg'),
(6, 'Trainspotting', 4, '1996-02-23', 'Unos jóvenes de Edimburgo mantienen una dependencia intermitente a la heroína. Basado en la novela de Irvine Welsh.', 'Danny Boyle', '', 0.00, 'jpg'),
(7, 'Taxi Driver', 4, '1976-09-16', 'Un veterano de Vietnam inicia una confrontación violenta con los proxenetas que trabajan en las calles de Nueva York.', 'Martin Scorsese', '', 0.00, 'jpg'),
(8, 'Fight Club', 4, '1999-10-12', 'Un empleado de oficina busca de una manera de cambiar su vida se cruza con un vendedor y crean un club de lucha clandestino como forma de terapia.', 'David Fincher', '', 0.00, 'jpg'),
(9, 'Reyes de las olas', 9, '2007-08-11', 'Aventuras de unos pinguinos.', 'Chris Buck', '', 0.00, 'jpg'),
(10, 'Good Morning Vietnam', 4, '1998-01-15', 'En Saigón, 1965 el locutor de radio Adrian Cronauer, trae el buen humor a la estación de las FF.AA. en Vietnam.', 'Barry Levinson', '', 0.00, 'jpg'),
(11, 'La sociedad de los poetas muertos', 4, '1989-06-02', 'Un maestro en un colegio privado emplea métodos poco convencionales para inspirar las vidas de sus estudiantes.', 'Peter Weir', '', 0.00, 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `es_administrador` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usuarios_alias` (`alias`),
  KEY `idx_usuarios_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `alias`, `password`, `es_administrador`) VALUES
(1, 'admin@guia.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'test@test.com', 'Usuario de prueba', '098f6bcd4621d373cade4e832627b4f6', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
