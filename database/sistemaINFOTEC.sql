-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2023 at 05:28 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotec`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_clentes`
--

CREATE TABLE `cadastro_clentes` (
  `id_clentes` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `cpf` int NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_funcionarios`
--

CREATE TABLE `cadastro_funcionarios` (
  `id_cadastro_funcionario` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` int NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cargo_funcionaonario` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrinhos`
--

CREATE TABLE `carrinhos` (
  `nome_produto` varchar(50) NOT NULL,
  `descriaco` varchar(50) NOT NULL,
  `quantidade` int NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `preco_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doacao`
--

CREATE TABLE `doacao` (
  `id_docao` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` int NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `renda` int NOT NULL,
  `decricao_equipanto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fonecedore` int NOT NULL,
  `cpj` varchar(50) NOT NULL,
  `razao_social` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `ramo_atividade` varchar(100) NOT NULL,
  `condico_pagamento` varchar(30) NOT NULL,
  `produtos_fonecidos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paginas_compras`
--

CREATE TABLE `paginas_compras` (
  `id_paginas_compra` int NOT NULL,
  `endereco_entrega` varchar(50) NOT NULL,
  `forma_pagamento` decimal(10,0) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `cod_produto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registo_pedidos`
--

CREATE TABLE `registo_pedidos` (
  `id_pedido` int NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `preco_total` decimal(10,0) NOT NULL,
  `status_pedidos` varchar(100) NOT NULL,
  `endereco_entrega` varchar(50) NOT NULL,
  `forma_pagamento` decimal(10,0) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `categoria_pedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_clentes`
--
ALTER TABLE `cadastro_clentes`
  ADD PRIMARY KEY (`id_clentes`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fonecedore`);

--
-- Indexes for table `paginas_compras`
--
ALTER TABLE `paginas_compras`
  ADD PRIMARY KEY (`id_paginas_compra`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `registo_pedidos`
--
ALTER TABLE `registo_pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_clentes`
--
ALTER TABLE `cadastro_clentes`
  MODIFY `id_clentes` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fonecedore` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paginas_compras`
--
ALTER TABLE `paginas_compras`
  MODIFY `id_paginas_compra` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registo_pedidos`
--
ALTER TABLE `registo_pedidos`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
