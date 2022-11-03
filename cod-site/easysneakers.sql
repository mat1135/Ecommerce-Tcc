-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2022 às 23:28
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `easysneakers`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`user`, `password`) VALUES
('1matzz', 'M@7hu%5198');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `datanasc` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `datanasc`, `telefone`, `cpf`, `email`, `senha`, `cep`, `rua`, `numero`, `bairro`, `cidade`) VALUES
(1, 'Matheus Felipe', '2004-11-26', '993998800', '44964875865', 'matzzlinguini@gmail.com', '123456', '13972-187', 'Rua Rodrigues Alves', '56', 'Jardim Isaura', 'Itapira'),
(2, 'Kaue Osti', '2000-02-11', '19993991199', '44964875893', 'kaueosti123@gmail.com', '98765', '13972186', 'Rua Allan Kardec', '21', 'Jardim Isaura', 'Itapira'),
(6, 'matheus', '2222-02-21', '123421432143214', '32131233213', 'matzz@gmail.com', '123456', '13972187', 'Rua Rodrigues Alves', '11', 'Jardim Isaura', 'Itapira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `peso` varchar(200) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `peso`, `tipo`, `descricao`, `preco`, `imagem`) VALUES
(13, 'Yeezy 350 V2', 'adidas', '800g', 'tenis', 'Yeezy 350 V2 beluga size 40', '400', '1546eeaf1125225052baa7876c39a146.jpg'),
(14, 'Air jordan', 'nike', '800g', 'Tenis', 'air jordan 1 shadow', '200', '65ff5e32bad00eab253ca4ce395634ee.jpg'),
(16, 'Yeezy 350 V2', 'adidas', '750g', 'DSA', 'dadsdsa', '400', '9c04f8c608202cd69e1c0a79ee29d8e6.jpg'),
(18, 'Air jordan 1', 'nike', '750g', 'Tenis', 'air jordan 1', '200', '0cc1ab0fa36f6bfb7099eac3b4079778.jpg'),
(19, 'Air jordan 1', 'nike', '750g', 'Tenis', 'sada', '400', 'ff10877a21a56ef9c45bfe9d640507c7.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`user`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
