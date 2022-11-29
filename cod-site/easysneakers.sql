-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 01:45
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
('1matzz', '123456');

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
  `nome` varchar(255) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `peso` varchar(200) DEFAULT NULL,
  `tipo` varchar(40) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `peso`, `tipo`, `descricao`, `preco`, `imagem`) VALUES
(32, 'Air Jordan 1 Dark Mocha', 'nike', '1500', 'tenis', 'O Air Jordan 1 “Dark Mocha” desenvolve a associação da silhueta atemporal com tons de terra usáveis. A inspiração para o “Dark Mocha”, um lançamento do outono de 2020.', '550', '3453fff3ea01e90e3c4d004158f1b5bc.jpg'),
(34, 'Air Jordan 1 Smoke Grey', 'nike', '1232', 'tenis', 'O Air Jordan 1 “Light Smoke Grey” é um lançamento do verão 2020 que capta a atenção dos fãs de tênis e colecionadores. \r\n', '650', '365b7ffb9b6cb1c792c488f71900b49b.jpg'),
(35, 'Camiseta Supreme ', 'supreme', '445', 'roupas', 'Camiseta Supreme preta\r\n', '329', '128f3c05f338617805ca58ed6404846f.png'),
(36, 'Camiseta Supreme ', 'supreme', '1231', 'roupas', 'Camiseta Supreme preta\r\n', '122', '0280799c62ad7e0baa8a94d65a17df45.png'),
(37, 'Camiseta Supreme ', 'supreme', '231', 'roupas', 'Camiseta Supreme preta', '420', '041af3c3de4c0d7bef97c4f6bb76314f.png'),
(38, 'Camiseta Supreme ', 'supreme', '445', 'roupas', 'Camiseta Supreme branca', '155', '8d95e7bb7a79deb569f924f54d616465.png'),
(40, 'Gorro Supreme', 'supreme', '231', 'acessorios', 'Gorro Supreme preto', '420', '9b36475971bdbdffb6a26878271929dd.png'),
(41, 'Moletom Supreme ', 'supreme', '1231', 'roupas', 'Moletom Supreme azul', '420', '8a6346923df7fef19834e5f1ff6494d0.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_prod` varchar(60) DEFAULT NULL,
  `marca_prod` varchar(60) DEFAULT NULL,
  `tamanho_prod` int(11) DEFAULT NULL,
  `tipo_prod` varchar(60) DEFAULT NULL,
  `qnt_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `nome_prod`, `marca_prod`, `tamanho_prod`, `tipo_prod`, `qnt_prod`) VALUES
(2, '', '', 40, '', 0);

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
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
