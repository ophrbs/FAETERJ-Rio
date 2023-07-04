-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Jul-2023 às 14:45
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_perguntas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_multipla`
--

DROP TABLE IF EXISTS `tabela_multipla`;
CREATE TABLE IF NOT EXISTS `tabela_multipla` (
  `id_multipla` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `pergunta_multipla` varchar(255) NOT NULL,
  `opcao1_multipla` varchar(255) NOT NULL,
  `opcao2_multipla` varchar(255) NOT NULL,
  `opcao3_multipla` varchar(255) NOT NULL,
  `resposta_multipla` varchar(255) NOT NULL,
  PRIMARY KEY (`id_multipla`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_texto`
--

DROP TABLE IF EXISTS `tabela_texto`;
CREATE TABLE IF NOT EXISTS `tabela_texto` (
  `id_texto` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `pergunta_texto` varchar(255) NOT NULL,
  `resposta_texto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_texto`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
