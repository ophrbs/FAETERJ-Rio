-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Jul-2023 às 08:22
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
-- Banco de dados: `db_concurso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_candidatos`
--

DROP TABLE IF EXISTS `tabela_candidatos`;
CREATE TABLE IF NOT EXISTS `tabela_candidatos` (
  `id_candidato` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_candidato` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sala_candidato` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cpf_candidato` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `identidade_candidato` varchar(12) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email_candidato` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cargo_candidato` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id_candidato`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tabela_candidatos`
--

INSERT INTO `tabela_candidatos` (`id_candidato`, `nome_candidato`, `sala_candidato`, `cpf_candidato`, `identidade_candidato`, `email_candidato`, `cargo_candidato`) VALUES
(1, 'leandro', 'ABCD1224', '12345678999', '123456789888', 'leandro@email.com', 'Análise e Desenvolvimento'),
(2, 'zezinho', 'abdd7894', '12345678911', '123456789111', 'ze@email.com', 'Ciência da Computação'),
(3, 'bruno', 'ZAAB1234', '12345678933', '123456789333', 'bruno@email.com', 'Engenharia de Software'),
(4, 'testee', 'abdd7894', '12345678942', '123456789117', 'teste', 'Engenharia de Software'),
(5, 'ateste', 'AAAB1234', '12345678998', '123456789334', 'testando@mail.com', 'Jogos Digitais'),
(6, 'hamon', 'A14E', '1234', '4567', 'email@mail.com', 'Cientista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_fiscais`
--

DROP TABLE IF EXISTS `tabela_fiscais`;
CREATE TABLE IF NOT EXISTS `tabela_fiscais` (
  `id_fiscal` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_fiscal` varchar(255) NOT NULL,
  `sala_fiscal` varchar(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cpf_fiscal` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id_fiscal`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tabela_fiscais`
--

INSERT INTO `tabela_fiscais` (`id_fiscal`, `nome_fiscal`, `sala_fiscal`, `cpf_fiscal`) VALUES
(2, 'Andre', 'ABCD1234', '12345678911'),
(3, 'Leo', 'AAAA1111', '78945612385'),
(4, 'Leonardo', 'AAAA1111', '78945612385'),
(5, 'Teste1', 'ABCC3334', '12347486897'),
(6, 'Teste2', 'ABCC3334', '12347486897');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
