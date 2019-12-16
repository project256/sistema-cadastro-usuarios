-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2019 at 10:49 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.1.33-2+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste123`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginSiteDirack`
--

CREATE TABLE `loginSiteDirack` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `fotoPerfil` varchar(150) NOT NULL DEFAULT 'bobo.jpg',
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `aprovado` enum('s','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginSiteDirack`
--

INSERT INTO `loginSiteDirack` (`id`, `usuario`, `senha`, `fotoPerfil`, `email`, `nome`, `aprovado`) VALUES
(6, 'Rodolfo', '827ccb0eea8a706c4c34a16891f84e7b', '6eeff298dbf2d6d470b0eda9c11d9f6a', 'rodolfo_profissional@hotmail.com', 'Rodolfo André Cardoso Neves', 'n'),
(7, 'teste', '827ccb0eea8a706c4c34a16891f84e7b', '88b5b303e168c8bb5002163749c950a5', 'teste@gmail.com', 'Teste Fulano da Silva Cicrano', 'n'),
(8, 'Fulano', '827ccb0eea8a706c4c34a16891f84e7b', 'bobo.jpg', 'fulano@gmail.com', 'Fulano Desconhecido das Neves', 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginSiteDirack`
--
ALTER TABLE `loginSiteDirack`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginSiteDirack`
--
ALTER TABLE `loginSiteDirack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
