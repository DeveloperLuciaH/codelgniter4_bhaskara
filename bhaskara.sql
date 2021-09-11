-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2021 às 04:34
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bhaskara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bhaskara`
--

CREATE TABLE `bhaskara` (
  `id` int(11) NOT NULL,
  `a` float NOT NULL,
  `b` float NOT NULL,
  `c` float NOT NULL,
  `delta` float NOT NULL,
  `x1` float DEFAULT NULL,
  `x2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bhaskara`
--

INSERT INTO `bhaskara` (`id`, `a`, `b`, `c`, `delta`, `x1`, `x2`) VALUES
(1, 3, 12, 7, 60, -0.709006, -3.29099),
(2, 3, 12, 7, 60, -0.709006, -3.29099),
(3, 3, 3, 3, -27, 0, 0),
(5, 12, 13, 0, 169, 0, -1.08333),
(6, 12, 22, 2, 388, -0.0959285, -1.7374);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bhaskara`
--
ALTER TABLE `bhaskara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bhaskara`
--
ALTER TABLE `bhaskara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
