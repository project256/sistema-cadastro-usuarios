-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Dez-2019 às 04:31
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test123`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginsitedirack`
--

DROP TABLE IF EXISTS `loginsitedirack`;
CREATE TABLE IF NOT EXISTS `loginsitedirack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `fotoPerfil` varchar(150) NOT NULL DEFAULT 'bobo.jpg',
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `aprovado` enum('s','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `loginsitedirack`
--

INSERT INTO `loginsitedirack` (`id`, `usuario`, `senha`, `fotoPerfil`, `email`, `nome`, `sobrenome`, `aprovado`) VALUES
(6, 'Rodolfo', '827ccb0eea8a706c4c34a16891f84e7b', '6eeff298dbf2d6d470b0eda9c11d9f6a', 'rodolfo_profissional@hotmail.com', 'Rodolfo André Cardoso Neves', '', 'n'),
(7, 'teste', '827ccb0eea8a706c4c34a16891f84e7b', '88b5b303e168c8bb5002163749c950a5', 'teste@gmail.com', 'Teste Fulano da Silva Cicrano', '', 'n'),
(11, 'val', '202cb962ac59075b964b07152d234b70', '15765530375df84a4d43ccd.jpg', 'val@hotmail.com', 'Valcinei', '', 'n'),
(12, 'carlin', '202cb962ac59075b964b07152d234b70', '15764828975df73851d4cda.jpg', 'hakjog@gmail.com', 'Carlos Augusto', '', 'n'),
(13, 'gui', '202cb962ac59075b964b07152d234b70', 'bobo.jpg', 'guilhermepierre98@gmail.com', 'Guilherme', 'Souza', 'n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
