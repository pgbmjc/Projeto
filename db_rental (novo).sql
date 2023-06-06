-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2023 às 07:30
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
-- Banco de dados: `db_rental`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agencia`
--

CREATE TABLE `agencia` (
  `codigo` int(11) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` int(11) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agencia`
--

INSERT INTO `agencia` (`codigo`, `cidade`, `rua`, `bairro`, `cep`, `complemento`) VALUES
(5, 'Manaus', 'Rua Joaquim Nabuco, 2219', 'Centro', 69000200, 'prox'),
(6, 'Fortaleza', 'Av Beira Mar, 1155', 'Iracema', 6982055, 'prox ao supermercado '),
(7, 'Belém', 'Av Tabajara, 55', 'Renascer', 6875555, 'xx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codigo` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codigo`, `categoria`) VALUES
(2, 'Cadastro Transporte'),
(3, 'Cadastro Pesado'),
(4, 'Cadastro Leve');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `cpf`, `telefone`, `usuario`, `senha`) VALUES
(2, 'Rafael Torquato', 222222, 99999999, 'rafa', '202cb962ac'),
(3, 'Paulo Giovani Barreto Mendes', 888888, 991939492, 'teste', '202cb962ac');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `codigo` int(11) NOT NULL,
  `tipo_pagamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`codigo`, `tipo_pagamento`) VALUES
(2, 'Cartão de Crédito'),
(3, 'Cartão de débito'),
(4, 'Dinheiro'),
(5, 'Pix1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portal_login`
--

CREATE TABLE `portal_login` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipo` int(11) NOT NULL,
  `telefone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `portal_login`
--

INSERT INTO `portal_login` (`codigo`, `nome`, `usuario`, `senha`, `tipo`, `telefone`) VALUES
(1, 'Paulo Giovani', 'admin', '202cb962ac59075b964b07152d234b70', 0, 991467767),
(2, 'Rafale Torquato', 'rafa', 'd9b1d7db4cd6e70935368a1efb10e377', 1, 99998888),
(5, 'Lucas Andre', 'luck', 'd9b1d7db4cd6e70935368a1efb10e377', 0, 929888888);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `codigo` int(11) NOT NULL,
  `dt_prev_retirada` datetime NOT NULL,
  `dt_prev_devolucao` datetime NOT NULL,
  `dt_reserva` date NOT NULL,
  `fk_cliente_codigo` int(11) DEFAULT NULL,
  `fk_veiculo_codigo` int(11) DEFAULT NULL,
  `fk_agencia_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`codigo`, `dt_prev_retirada`, `dt_prev_devolucao`, `dt_reserva`, `fk_cliente_codigo`, `fk_veiculo_codigo`, `fk_agencia_codigo`) VALUES
(3, '2023-10-10 10:10:00', '2023-10-12 11:11:00', '2023-10-10', 3, 7, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `codigo` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `fk_categoria_codigo` int(11) DEFAULT NULL,
  `fk_agencia_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`codigo`, `marca`, `modelo`, `descricao`, `ano`, `placa`, `fk_categoria_codigo`, `fk_agencia_codigo`) VALUES
(7, 'Volkwagen', 'Gol GV', 'Vermelho', 2023, 'jxr6655', 4, 5),
(8, 'Mercedes-Bens', 'Sprinter Truck 416', 'Prata ', 2022, 'jie3344', 3, 5),
(9, 'Mercedes-Bens', 'Vito Toure', 'Deluxe', 2023, 'jer3344', 2, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `portal_login`
--
ALTER TABLE `portal_login`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_reservas_2` (`fk_cliente_codigo`),
  ADD KEY `FK_reservas_3` (`fk_veiculo_codigo`),
  ADD KEY `FK_reservas_4` (`fk_agencia_codigo`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `placa` (`placa`),
  ADD KEY `FK_veiculo_2` (`fk_categoria_codigo`),
  ADD KEY `FK_veiculo_3` (`fk_agencia_codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agencia`
--
ALTER TABLE `agencia`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `portal_login`
--
ALTER TABLE `portal_login`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `FK_reservas_2` FOREIGN KEY (`fk_cliente_codigo`) REFERENCES `cliente` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_reservas_3` FOREIGN KEY (`fk_veiculo_codigo`) REFERENCES `veiculo` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_reservas_4` FOREIGN KEY (`fk_agencia_codigo`) REFERENCES `agencia` (`codigo`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `FK_veiculo_2` FOREIGN KEY (`fk_categoria_codigo`) REFERENCES `categoria` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_veiculo_3` FOREIGN KEY (`fk_agencia_codigo`) REFERENCES `agencia` (`codigo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
