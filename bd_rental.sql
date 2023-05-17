-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2023 às 02:05
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
DROP DATABASE IF EXISTS `db_rental`;
CREATE DATABASE IF NOT EXISTS `db_rental` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_rental`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acao_devolucao`
--

CREATE TABLE `acao_devolucao` (
  `cod_devolucao` int(11) NOT NULL,
  `dt_hora_devolucao` datetime DEFAULT NULL,
  `avaria` varchar(100) DEFAULT NULL,
  `valor_pago` double DEFAULT NULL,
  `fk_acao_retirada_codigo` int(11) DEFAULT NULL,
  `fk_agencia_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acao_retirada`
--

CREATE TABLE `acao_retirada` (
  `codigo` int(11) NOT NULL,
  `dt_hora_retirada` datetime NOT NULL,
  `avaria` varchar(100) DEFAULT NULL,
  `km_atual` int(11) NOT NULL,
  `fk_agencia_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agencia`
--

CREATE TABLE `agencia` (
  `codigo` int(11) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` int(11) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `fk_cidade_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codigo` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `codigo` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `codigo` int(11) NOT NULL,
  `tipo_pagamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pode`
--

CREATE TABLE `pode` (
  `fk_reservas_codigo` int(11) DEFAULT NULL,
  `fk_acao_retirada_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portal_login`
--

CREATE TABLE `portal_login` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `tipo` int(11) NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `realiza`
--

CREATE TABLE `realiza` (
  `fk_pagamento_codigo` int(11) DEFAULT NULL,
  `fk_acao_devolucao_cod_devolucao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `codigo` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `descicao` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `fk_categoria_codigo` int(11) DEFAULT NULL,
  `fk_agencia_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acao_devolucao`
--
ALTER TABLE `acao_devolucao`
  ADD PRIMARY KEY (`cod_devolucao`),
  ADD KEY `FK_acao_devolucao_2` (`fk_acao_retirada_codigo`),
  ADD KEY `FK_acao_devolucao_3` (`fk_agencia_codigo`);

--
-- Índices para tabela `acao_retirada`
--
ALTER TABLE `acao_retirada`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_acao_retirada_2` (`fk_agencia_codigo`);

--
-- Índices para tabela `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_agencia_2` (`fk_cidade_codigo`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
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
-- Índices para tabela `pode`
--
ALTER TABLE `pode`
  ADD KEY `FK_pode_1` (`fk_reservas_codigo`),
  ADD KEY `FK_pode_2` (`fk_acao_retirada_codigo`);

--
-- Índices para tabela `portal_login`
--
ALTER TABLE `portal_login`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `realiza`
--
ALTER TABLE `realiza`
  ADD KEY `FK_realiza_1` (`fk_pagamento_codigo`),
  ADD KEY `FK_realiza_2` (`fk_acao_devolucao_cod_devolucao`);

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
-- AUTO_INCREMENT de tabela `acao_devolucao`
--
ALTER TABLE `acao_devolucao`
  MODIFY `cod_devolucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `acao_retirada`
--
ALTER TABLE `acao_retirada`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `agencia`
--
ALTER TABLE `agencia`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `portal_login`
--
ALTER TABLE `portal_login`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acao_devolucao`
--
ALTER TABLE `acao_devolucao`
  ADD CONSTRAINT `FK_acao_devolucao_2` FOREIGN KEY (`fk_acao_retirada_codigo`) REFERENCES `acao_retirada` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_acao_devolucao_3` FOREIGN KEY (`fk_agencia_codigo`) REFERENCES `agencia` (`codigo`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `acao_retirada`
--
ALTER TABLE `acao_retirada`
  ADD CONSTRAINT `FK_acao_retirada_2` FOREIGN KEY (`fk_agencia_codigo`) REFERENCES `agencia` (`codigo`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `agencia`
--
ALTER TABLE `agencia`
  ADD CONSTRAINT `FK_agencia_2` FOREIGN KEY (`fk_cidade_codigo`) REFERENCES `cidade` (`codigo`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pode`
--
ALTER TABLE `pode`
  ADD CONSTRAINT `FK_pode_1` FOREIGN KEY (`fk_reservas_codigo`) REFERENCES `reservas` (`codigo`),
  ADD CONSTRAINT `FK_pode_2` FOREIGN KEY (`fk_acao_retirada_codigo`) REFERENCES `acao_retirada` (`codigo`);

--
-- Limitadores para a tabela `realiza`
--
ALTER TABLE `realiza`
  ADD CONSTRAINT `FK_realiza_1` FOREIGN KEY (`fk_pagamento_codigo`) REFERENCES `pagamento` (`codigo`),
  ADD CONSTRAINT `FK_realiza_2` FOREIGN KEY (`fk_acao_devolucao_cod_devolucao`) REFERENCES `acao_devolucao` (`cod_devolucao`) ON DELETE SET NULL;

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
