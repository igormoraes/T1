-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Abr-2018 às 18:43
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `CPF` varchar(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`CPF`),
  KEY `cod_cidade` (`cod_cidade`),
  KEY `cod_cidade_2` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`CPF`, `Nome`, `Email`, `Sexo`, `cod_cidade`) VALUES
('00000000001', 'Amanda', 'amanda@ifsp.com', 'F', 1),
('00000000002', 'Bento', 'bento@ifsp.com', 'M', 1),
('00000000003', 'Caroline', 'caroline@ifsp.com', 'F', 2),
('00000000004', 'Dalva', 'dalva@ifsp.com', 'F', 2),
('00000000005', 'Etelvino', 'etelvino@ifsp.com', 'M', 3),
('00000000006', 'Franciele', 'franciele@ifsp.com', 'F', 3),
('00000000007', 'Gabriel', 'gabriel@ifsp.com', 'M', 4),
('00000000008', 'Hernando', 'hernando@ifsp.com', 'M', 4),
('00000000009', 'Igor', 'igor@ifsp.com', 'M', 5),
('00000000010', 'Júlia', 'julia@ifsp.com', 'F', 5),
('00000000011', 'Karen', 'karen@ifsp.com', 'F', 6),
('00000000012', 'Larissa', 'larissa@ifsp.com', 'F', 6),
('00000000013', 'Matheus', 'matheus@ifsp.com', 'M', 7),
('00000000014', 'Natalia', 'natalia@ifsp.com', 'F', 7),
('00000000015', 'Odalinda', 'odalinda@ifsp.com', 'F', 8),
('00000000016', 'Paula', 'paula@ifsp.com', 'F', 8),
('00000000017', 'Raquel', 'raquel@ifsp.com', 'F', 9),
('00000000018', 'Sara', 'sara@ifsp.com', 'F', 9),
('00000000019', 'Teresa', 'teresa@ifsp.com', 'F', 10),
('00000000020', 'Ursula', 'ursula@ifsp.com', 'F', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL,
  `Nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `Nome_cidade`, `cod_estado`) VALUES
(1, 'Araraquara', 1),
(2, 'Campinas', 1),
(3, 'Ribeirão Preto', 1),
(4, 'São Carlos', 1),
(5, 'São Paulo', 1),
(6, 'Balneário Camburiú', 2),
(7, 'Camburiú', 2),
(8, 'Florianópolis', 2),
(9, 'Garopaba', 2),
(10, 'Joenville', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `Sigla` char(2) NOT NULL,
  `Nome_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `Sigla`, `Nome_estado`) VALUES
(1, 'SP', 'São Paulo'),
(2, 'SC', 'Santa Catarina');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`id_cidade`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
