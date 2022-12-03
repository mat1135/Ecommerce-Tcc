-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2022 às 16:33
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
(6, 'matheus', '2222-02-21', '123421432143214', '32131233213', 'matzz@gmail.com', '123456', '13972187', 'Rua Rodrigues Alves', '11', 'Jardim Isaura', 'Itapira'),
(10, 'matheus borges', '2000-11-26', '19993998800', '44964875891', 'ma@gmail.com', '123456', '13972187', 'Rua Rodrigues Alves', '3241', 'Jardim Isaura', 'Itapira');

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
(41, 'Moletom Supreme ', 'supreme', '1231', 'roupas', 'Moletom Supreme azul', '420', '8a6346923df7fef19834e5f1ff6494d0.png'),
(42, 'Camiseta Bape', 'bape', '240', 'roupas', '', '189', '9481645ba627311cc505eedff787e656.png'),
(43, 'Fullzip Bape Rosa', 'bape', '500', 'roupas', '', '250', '26f71bff577faa911b8d82a25cfd93bc.png'),
(44, 'Camiseta Manga Longa Bape Cinza', 'bape', '260', 'roupas', '', '199', '88425bd4c25ffe8fbe3936daef73ce4a.png'),
(45, 'Fullzip Bape Cinza e Preto', 'bape', '500', 'roupas', '', '299', 'a4d5540eac566ed9283fa504567316c6.png'),
(46, 'Jaqueta Bape Preta', 'bape', '800', 'roupas', '', '499', '8eadc7f165c2fa002f0ea91b75c4cf97.png'),
(47, 'Camiseta Bape Preta e Azul', 'bape', '250', 'roupas', '', '199', '246c0fe497cf983b9eea3f6f97e598a4.png'),
(48, 'Camiseta OffWhite Preta', 'off', '250', 'roupas', '', '199', '4e6a15aa65c2d281e44f828ca893b85d.png'),
(49, 'Camiseta OffWhite Branca', 'off', '250', 'roupas', '', '199', '8e40a6e3ecf1b3e00b6c0c91b4fa581d.png'),
(50, 'Moletom OffWhite Preto', 'off', '500', 'roupas', '', '499', '3053a74d3819716c293432bf04eb15d8.png'),
(51, 'Moletom OffWhite Branco', 'off', '500', 'roupas', '', '499', '7a364eb135c9bc089a013aacf66bad37.png'),
(52, 'Moletom OffWhite Preto', 'off', '500', 'roupas', '', '499', '191c874de01e3a24a68b3a5c682030f3.png'),
(54, 'Camiseta OffWhite Preta', 'off', '250', 'roupas', '', '199', 'c6c4f66874ec0ac2b427dd318139fff6.png'),
(55, 'Moletom Cactus Preto', 'cactus', '500', 'roupas', '', '499', '0ac448a163eca8e4556d823d9ef31a2c.png'),
(56, 'Moletom Cactus Preto', 'cactus', '500', 'roupas', '', '499', 'ce5237e4c8612119dede46f7235f7f6d.png'),
(57, 'Moletom Cactus Preto', 'cactus', '500', 'roupas', '', '499', '8d32c914ccdf5c76c545ac24553c9574.png'),
(58, 'Camiseta Cactus Preta', 'cactus', '240', 'roupas', '', '199', 'e3a743115d7aadc7b8b5dc4ce343a2e2.png'),
(59, 'Camiseta Cactus Preta', 'cactus', '240', 'roupas', '', '199', '0a9f472849ade7182ffdb4199ff35f6b.png'),
(60, 'Camiseta Cactus Preta', 'cactus', '240', 'roupas', '', '199', 'fd3dfe480a510054067da48dfb7781f9.png'),
(61, 'Nike Dunk SB Sean Cliver', 'nike', '1500', 'tenis', '', '589', 'c5ce3561d5d2aed8a2d595358eb1d67f.jpg'),
(62, 'Nike Dunk SB Chicago', 'nike', '1500', 'tenis', '', '589', '5b926fa8d9272bf976bd1b90a4e6a4aa.jpg'),
(63, 'Nike Dunk SB Habibi', 'nike', '1500', 'tenis', '', '589', '8d424a7458e9a93799b220f54cd1d7d1.jpg'),
(64, 'Dunk Low Grey White', 'nike', '1500', 'tenis', '', '589', 'b17a23921a66fef377e9e32b130e2597.jpg'),
(65, 'Yeezy 350 Beluga v2', 'adidas', '1500', 'tenis', '', '539', '488ad16973551dad91dcbbafe1c3499c.jpg'),
(66, 'Yeezy 350 Bred v2', 'adidas', '1500', 'tenis', '', '539', 'dcca50145e87faa1075a0887dac706c9.jpg'),
(67, 'Yeezy 350 Cloud White v2', 'adidas', '1500', 'tenis', '', '539', 'a858e6599490d21638107335cd28ea36.jpg'),
(68, 'Yeezy 350 Triple White v2', 'adidas', '1500', 'tenis', '', '539', '0cdf02a427cfd43aabd2c7d353d15d6e.png'),
(69, 'Yeezy 350 Oreo v2', 'adidas', '1500', 'tenis', '', '539', 'c2dafde0ea7b711a0e51c5a0b6f55fec.jpg'),
(70, 'yeezy 350 Yecheil v2', 'adidas', '1500', 'tenis', '', '539', '44da306c44a12e16a892523b554db076.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_prod` varchar(60) NOT NULL,
  `marca_prod` varchar(60) DEFAULT NULL,
  `tamanho_prod` int(11) DEFAULT NULL,
  `tipo_prod` varchar(60) DEFAULT NULL,
  `qnt_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `nome_prod`, `marca_prod`, `tamanho_prod`, `tipo_prod`, `qnt_prod`) VALUES
(26, 'Air Jordan 1 Dark Mocha', 'nike', 41, 'tenis', 3),
(27, 'Camiseta Bape Preta e Azul', 'bape', 39, 'roupas', 1);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
