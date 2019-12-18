-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 04:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ade`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `telefonofijo` varchar(50) NOT NULL,
  `telefonocelular` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `legajo` varchar(50) NOT NULL,
  `cursoactual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `dni`, `telefonofijo`, `telefonocelular`, `mail`, `legajo`, `cursoactual`) VALUES
(1, 'Ezequiel', 'Pino', '42842874', '4223-2395', '15 2388-5043', 'ezequielquimey@yahoo.com.ar', 'morir', '7mo1ra'),
(6, 'Erik', 'Bianco', '999999', '11 2222-2222', '11 2222-2222', 'soy@piola.si', '12', '7mo2da'),
(19, 'Okay,', 'esto', 'es', 'epico', 'muy', 'buena', 'base', 'de datos jaja'),
(20, 'Alexis', 'Bareiro', '43ALEXISBAREIRO', 'Soy re piola-123', '0800 PIOL-ABOY', '234@pacienciacorta.correo', 'legajo', '7mopiola'),
(21, 'ðŸ˜ƒ', 'ðŸ˜‰', 'ðŸ’³', 'â˜Žï¸', 'ðŸ“±', 'ðŸ“§', 'ðŸ“š', 'ðŸ«'),
(22, 'Erik 2', 'Bianco VerA', '9494949494', '11 2388-0918', '5', 'soy@erikbianco.me', 'Legajo', 'Septimo Segunda'),
(23, 'Un Gamer', 'Super Piola', '12345679', '12345679', '23456789', 'capo@river.com', 'bruh', '7mo Copado');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `id` int(50) NOT NULL,
  `id_docente` int(50) NOT NULL,
  `id_preceptor` int(50) NOT NULL,
  `curso_num` int(50) NOT NULL,
  `nombredecurso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `telefonofijo_D` varchar(50) NOT NULL,
  `telefonocelular_D` varchar(50) NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `apellido`, `dni`, `telefonofijo_D`, `telefonocelular_D`, `mail`) VALUES
(1, 'Juan', 'Perez', '20805080', '4223-2323', '11 no se', 'soyundocente(nohomo)@gmail.com'),
(3, 'trulyepic', 'trulyepic', 'trulyepic', 'pinga', '2', 'g'),
(5, 'epico|', 'w', '', '', 'w', ''),
(6, '', 'podes creeroloÂ¡?', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `preceptores`
--

CREATE TABLE `preceptores` (
  `id_preceptor` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `telefonofijo_p` varchar(50) NOT NULL,
  `telefonocelular_p` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preceptores`
--

INSERT INTO `preceptores` (`id_preceptor`, `nombre`, `apellido`, `dni`, `telefonofijo_p`, `telefonocelular_p`, `mail`) VALUES
(1, 'Felipe', 'Despedite', '20850960', '011 2222-5150', '011 62553225', 'Eriktea_MO@gmail.com'),
(2, 'N', 'e', 'g', 'r', 'o', 's'),
(3, 'bitch', 'mcbitch2', '8008135', '0800-033-bitch', '11 248b-itch', 'a-bitch@bitchophone.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `perms` varchar(30) NOT NULL,
  `id` int(64) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `perms`, `id`, `photo`) VALUES
('Erik', 'biancoveraerik@gmail.com', '76bcfb761377e0b13af55dd6e825a2af', 'SUPER', 1, ''),
('UsuarioDos', 'user@ade.erikbianco.me', '', 'SUPER', 2, ''),
('Usuario', 'user@ade.com', 'e10adc3949ba59abbe56e057f20f883e', 'USER', 3, ''),
('revolucion rusa de 1816', 'userdos@ade.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'USER', 4, ''),
('Tomas', 'tomasyaciura616@gmail.com', '836bd85cd43b4bf806c990166b3990fc', 'USER', 5, ''),
('ErikBianco', 'soy@erikbianco.me', '76bcfb761377e0b13af55dd6e825a2af', 'USER', 7, ''),
('user', 'user@ade.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'SUPER', 9, ''),
('Un Humano Normal', 'a@normal.human', '76bcfb761377e0b13af55dd6e825a2af', 'USER', 10, ''),
('user', 'user@user.user', 'ee11cbb19052e40b07aac0ca060c23ee', 'USER', 11, ''),
('', 'cop@ad.o', 'd41d8cd98f00b204e9800998ecf8427e', 'USER', 12, ''),
('', 'h@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ADMIN', 13, ''),
('MiMayor', 'Mi@Mayor.com', 'd41d8cd98f00b204e9800998ecf8427e', 'USER', 14, ''),
('Usuario Regular', 'user@ade.com', 'd41d8cd98f00b204e9800998ecf8427e', 'USER', 15, ''),
('Administrador Regular', 'admin@ade.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ADMIN', 16, ''),
('Super usuario Regular', 'root@ade.com', 'd41d8cd98f00b204e9800998ecf8427e', 'SUPER', 17, ''),
('Test Vibro', 'test@vibro.com', 'c4ca4238a0b923820dcc509a6f75849b', 'USER', 18, ''),
('test', 'test@vibro.com.ar', '8126db4a06bf693c369866d4b9c24a9a', 'USER', 19, ''),
('Felipe PigÃ±a', 'Tumama@gmail.com', '274c3717a699d42cc89ce080650115a8', 'USER', 20, ''),
('Hola, Profe!', 'hola@profe.com', 'fae0b27c451c728867a567e8c1bb4e53', 'USER', 21, ''),
('Saint_Seiya_Fan_666', 'senseia@empiezael.ritual', '698d51a19d8a121ce581499d7b701668', 'USER', 22, ''),
('Fernando', 'uboat544@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'USER', 23, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD KEY `id` (`id`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_preceptor` (`id_preceptor`),
  ADD KEY `id_docente_2` (`id_docente`),
  ADD KEY `id_preceptor_2` (`id_preceptor`),
  ADD KEY `curso_num_2` (`curso_num`);

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
  ADD UNIQUE KEY `id_docente` (`id_docente`);

--
-- Indexes for table `preceptores`
--
ALTER TABLE `preceptores`
  ADD UNIQUE KEY `id_preceptor` (`id_preceptor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `curso_num` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preceptores`
--
ALTER TABLE `preceptores`
  MODIFY `id_preceptor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`id_preceptor`) REFERENCES `preceptores` (`id_preceptor`),
  ADD CONSTRAINT `curso_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`),
  ADD CONSTRAINT `curso_ibfk_4` FOREIGN KEY (`id`) REFERENCES `alumnos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
