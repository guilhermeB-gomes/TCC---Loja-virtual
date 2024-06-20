-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2024 às 22:42
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `capa` varchar(255) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `valor` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `capa`, `nome`, `valor`, `data`) VALUES
(2, 'images/2024/06/2024-06-20-1718915152.jpeg', 'Fox Formen', 0, '2024-06-20 17:25:52'),
(3, 'images/2024/06/2024-06-20-1718915444.jpeg', 'Tônico FoxFormen', 0, '2024-06-20 17:30:44'),
(4, 'images/2024/06/2024-06-20-1718915490.jpeg', 'Pomada em PÓ Efeito Matte - Fox Formen', 0, '2024-06-20 17:31:30'),
(5, 'images/2024/06/2024-06-20-1718915754.jpeg', 'Creme Modelador Efeito Teia - Fox Formen', 0, '2024-06-20 17:35:54'),
(6, 'images/2024/06/2024-06-20-1718915783.jpeg', 'Pasta Premium', 0, '2024-06-20 17:36:23'),
(7, 'images/2024/06/2024-06-20-1718915806.jpeg', 'Balm para Barba', 0, '2024-06-20 17:36:46'),
(8, 'images/2024/06/2024-06-20-1718915830.jpeg', 'Pomada Efeito Matte', 0, '2024-06-20 17:37:10'),
(9, 'images/2024/06/2024-06-20-1718915868.jpeg', 'Wax Efeito Toque Seco', 0, '2024-06-20 17:37:49'),
(10, 'images/2024/06/2024-06-20-1718915888.jpeg', 'Pasta Coffee', 0, '2024-06-20 17:38:08'),
(11, 'images/2024/06/2024-06-20-1718915922.jpeg', 'Cera Hair Modeladora Caramelo', 0, '2024-06-20 17:38:42'),
(12, 'images/2024/06/2024-06-20-1718915966.jpeg', 'Pasta Black Premium', 0, '2024-06-20 17:39:26'),
(13, 'images/2024/06/2024-06-20-1718915992.jpeg', 'Pasta Orange', 0, '2024-06-20 17:39:52');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
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
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
