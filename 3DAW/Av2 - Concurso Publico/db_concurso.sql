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
  `nome_candidato` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sala_candidato` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpf_candidato` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `identidade_candidato` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_candidato` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cargo_candidato` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_candidato`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tabela_candidatos`
--

INSERT INTO `tabela_candidatos` (`id_candidato`, `nome_candidato`, `sala_candidato`, `cpf_candidato`, `identidade_candidato`, `email_candidato`, `cargo_candidato`) VALUES
(1, 'Leandro', 'ABCD1224', '12345678999', '123456789888', 'leandro@email.com', 'Análise e Desenvolvimento'),
(2, 'Alberto', 'CDEF7894', '12345678911', '123456789111', 'alberto@sapo.pt', 'Ciência da Computação'),
(3, 'Bruno', 'ZAAB1234', '12345678933', '123456789333', 'bruno@email.com', 'Engenharia de Software'),
(4, 'Erik', 'ABDD7894', '12345678942', '123456789117', 'erik@mail.com', 'Engenharia de Software'),
(5, 'Pedro', 'AAAB1234', '12345678998', '123456789334', 'pedrinho@mail.com', 'Jogos Digitais'),
(6, 'Paulo', 'MTPL0001', '78998654321', '456778998657', 'paulo@mail.com', 'Engenharia de Software'),
(7, 'Leonardo', 'ABCD1224', '67891234599', '345671289888', 'leonardo@gmail.com', 'Análise e Desenvolvimento'),
(8, 'Vitor', 'MLTP0003', '12891134567', '456781239111', 'vitor@outlook.com', 'Ciência da Computação'),
(9, 'Lucas', 'MLTP0021', '14567823933', '567891234333', 'luckas@gmail.com', 'Engenharia de Software'),
(10, 'Nathalia', 'MLTP0021', '67894123452', '128913456717', 'natt@gmail.com', 'Engenharia de Software'),
(11, 'Gabriel', 'MLTP0003', '45678123998', '167893234534', 'gb@hotmail.com', 'Jogos Digitais'),
(12, 'Andrey', 'MTPL0001', '43217899865', '899864567757', 'a.andrey@mail.com', 'Engenharia de Software');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_fiscais`
--

DROP TABLE IF EXISTS `tabela_fiscais`;
CREATE TABLE IF NOT EXISTS `tabela_fiscais` (
  `id_fiscal` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_fiscal` varchar(255) NOT NULL,
  `sala_fiscal` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cpf_fiscal` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_fiscal`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tabela_fiscais`
--

INSERT INTO `tabela_fiscais` (`id_fiscal`, `nome_fiscal`, `sala_fiscal`, `cpf_fiscal`) VALUES
(2, 'Andre', 'ABCD1234', '12345678911'),
(3, 'Rafael', 'ABCD1234', '44415678911'),
(4, 'Leo', 'AAAA1111', '78945612385'),
(5, 'Ferlin', 'AAAA1111', '56857894123'),
(6, 'Maria Claudia', 'MLTP0021', '12347486897'),
(7, 'Galhanone', 'MLTP0021', '12868973474'),
(8, 'Boente', 'MLTP0003', '12347486897'),
(9, 'Marciano', 'MLTP0003', '12868973474');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
