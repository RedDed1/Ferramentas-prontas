-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2021 às 02:59
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tasker`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apontamentos`
--

CREATE TABLE `apontamentos` (
  `idApontamento` int(11) NOT NULL,
  `horarioInicio` varchar(5) NOT NULL,
  `horarioTermino` varchar(5) NOT NULL,
  `descricaoServico` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `em_execucao`
--

CREATE TABLE `em_execucao` (
  `idApontamento` int(11) NOT NULL,
  `horarioInicio` varchar(5) NOT NULL,
  `descricaoServico` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apontamentos`
--
ALTER TABLE `apontamentos`
  ADD PRIMARY KEY (`idApontamento`);

--
-- Índices para tabela `em_execucao`
--
ALTER TABLE `em_execucao`
  ADD PRIMARY KEY (`idApontamento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apontamentos`
--
ALTER TABLE `apontamentos`
  MODIFY `idApontamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `em_execucao`
--
ALTER TABLE `em_execucao`
  MODIFY `idApontamento` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
