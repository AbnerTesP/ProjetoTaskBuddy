-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Nov-2023 às 21:04
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `taskbuddybd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1700600521);

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1700494641, 1700494641),
('client', 1, NULL, NULL, NULL, 1700494641, 1700494641),
('criarCarrinho', 2, 'Adicionar um produto ao carrinho de compras', NULL, NULL, 1700494641, 1700494641),
('criarEncomenda', 2, 'Criar uma nova encomenda', NULL, NULL, 1700494641, 1700494641),
('criarMembro', 2, 'Criar um novo membro', NULL, NULL, 1700494641, 1700494641),
('criarMetodosExpedicao', 2, 'Criar um novo método de envio', NULL, NULL, 1700494641, 1700494641),
('criarMetodosPagamento', 2, 'Criar um novo método de pagamento', NULL, NULL, 1700494641, 1700494641),
('criarPerfilUtilizador', 2, 'Criar um novo perfil de utilizador', NULL, NULL, 1700494641, 1700494641),
('criarProduto', 2, 'Criar um novo produto', NULL, NULL, 1700494641, 1700494641),
('criarProdutoTipo', 2, 'Criar um novo tipo de produto', NULL, NULL, 1700494641, 1700494641),
('desativarMetodosExpedicao', 2, 'Desativar um método de envio', NULL, NULL, 1700494641, 1700494641),
('desativarMetodosPagamento', 2, 'Desativar um método de pagamento', NULL, NULL, 1700494641, 1700494641),
('desativarPerfilUtilizador', 2, 'Desativar um perfil de utilizador', NULL, NULL, 1700494641, 1700494641),
('desativarProdutoTipo', 2, 'Desativar um tipo de produto', NULL, NULL, 1700494641, 1700494641),
('editarPerfilUtilizador', 2, 'Atualizar detalhes de um perfil de utilizador', NULL, NULL, 1700494641, 1700494641),
('eleminarCarrinho', 2, 'Remover um produto do carrinho de compras', NULL, NULL, 1700494641, 1700494641),
('eleminarMembro', 2, 'Eliminar um perfil de cão', NULL, NULL, 1700494641, 1700494641),
('eleminarProduto', 2, 'Eliminar um produto', NULL, NULL, 1700494641, 1700494641),
('gestor', 1, NULL, NULL, NULL, 1700494641, 1700494641),
('lerCarrinho', 2, 'Ver o carrinho de compras', NULL, NULL, 1700494641, 1700494641),
('lerEncomendas', 2, 'Ver encomendas', NULL, NULL, 1700494641, 1700494641),
('lerMembro', 2, 'Visualizar detalhes de um membro', NULL, NULL, 1700494641, 1700494641),
('lerPerfilUtilizador', 2, 'Visualizar detalhes de um perfil de utilizador', NULL, NULL, 1700494641, 1700494641),
('lerProduto', 2, 'Visualizar detalhes de um produto', NULL, NULL, 1700494641, 1700494641),
('membro', 1, NULL, NULL, NULL, 1700494641, 1700494641),
('reactivarMetodosExpedicao', 2, 'Reativar um método de envio', NULL, NULL, 1700494641, 1700494641),
('reactivarProdutoTipo', 2, 'Reativar um tipo de produto', NULL, NULL, 1700494641, 1700494641),
('reativarMetodosPagamento', 2, 'Reativar um método de pagamento', NULL, NULL, 1700494641, 1700494641),
('reativarPerfilUtilizador', 2, 'Reativar um perfil de utilizador', NULL, NULL, 1700494641, 1700494641),
('updateCarrinho', 2, 'Atualizar detalhes de um produto no carrinho de compras', NULL, NULL, 1700494641, 1700494641),
('updateEncomendas', 2, 'Atualizar detalhes de uma encomenda', NULL, NULL, 1700494641, 1700494641),
('updateMembro', 2, 'Atualizar detalhes de um membro', NULL, NULL, 1700494641, 1700494641),
('updateMetodosExpedicao', 2, 'Atualizar detalhes de um método de envio', NULL, NULL, 1700494641, 1700494641),
('updateMetodosPagamento', 2, 'Atualizar detalhes de um método de pagamento', NULL, NULL, 1700494641, 1700494641),
('updateProduto', 2, 'Atualizar detalhes de um produto', NULL, NULL, 1700494641, 1700494641),
('updateProdutoTipo', 2, 'Atualizar detalhes de um tipo de produto', NULL, NULL, 1700494641, 1700494641),
('verEncomendas', 2, 'Visualizar todos os pacotes', NULL, NULL, 1700494641, 1700494641),
('verMembros', 2, 'Visualizar todos os membros', NULL, NULL, 1700494641, 1700494641),
('verMetodosExpedicao', 2, 'Visualizar todos os métodos de envio', NULL, NULL, 1700494641, 1700494641),
('verMetodosPagamento', 2, 'Visualizar todos os métodos de pagamento', NULL, NULL, 1700494641, 1700494641),
('verPerfilUtilizador', 2, 'Ver todos os perfis de Utilizador', NULL, NULL, 1700494641, 1700494641),
('verProdutos', 2, 'Visualizar todos os produtos', NULL, NULL, 1700494641, 1700494641),
('verTipoProduto', 2, 'Visualizar todos os tipos de produtos', NULL, NULL, 1700494641, 1700494641);

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'client'),
('client', 'criarCarrinho'),
('client', 'criarEncomenda'),
('client', 'criarMembro'),
('admin', 'criarMetodosExpedicao'),
('admin', 'criarMetodosPagamento'),
('admin', 'criarPerfilUtilizador'),
('gestor', 'criarProduto'),
('gestor', 'criarProdutoTipo'),
('admin', 'desativarMetodosExpedicao'),
('admin', 'desativarMetodosPagamento'),
('admin', 'desativarPerfilUtilizador'),
('gestor', 'desativarProdutoTipo'),
('client', 'editarPerfilUtilizador'),
('client', 'eleminarCarrinho'),
('client', 'eleminarMembro'),
('gestor', 'eleminarProduto'),
('admin', 'gestor'),
('client', 'lerCarrinho'),
('client', 'lerEncomendas'),
('gestor', 'lerEncomendas'),
('client', 'lerMembro'),
('membro', 'lerMembro'),
('client', 'lerPerfilUtilizador'),
('gestor', 'lerPerfilUtilizador'),
('membro', 'lerPerfilUtilizador'),
('client', 'lerProduto'),
('gestor', 'lerProduto'),
('admin', 'membro'),
('admin', 'reactivarMetodosExpedicao'),
('gestor', 'reactivarProdutoTipo'),
('admin', 'reativarMetodosPagamento'),
('admin', 'reativarPerfilUtilizador'),
('client', 'updateCarrinho'),
('client', 'updateEncomendas'),
('client', 'updateMembro'),
('admin', 'updateMetodosExpedicao'),
('admin', 'updateMetodosPagamento'),
('gestor', 'updateProduto'),
('gestor', 'updateProdutoTipo'),
('client', 'verEncomendas'),
('gestor', 'verEncomendas'),
('admin', 'verMetodosExpedicao'),
('admin', 'verMetodosPagamento'),
('admin', 'verPerfilUtilizador'),
('client', 'verProdutos'),
('gestor', 'verProdutos'),
('gestor', 'verTipoProduto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `idEncomenda` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valorPago` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idEncomenda`,`idProduto`),
  KEY `idProduto` (`idProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(250) NOT NULL,
  `status` int(11) DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

DROP TABLE IF EXISTS `encomendas`;
CREATE TABLE IF NOT EXISTS `encomendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valorTotal` decimal(8,2) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `finalizada` varchar(3) DEFAULT 'nao',
  `idExpedicao` int(11) DEFAULT NULL,
  `idPagamento` int(11) DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT 'pendente',
  PRIMARY KEY (`id`),
  KEY `idExpedicao` (`idExpedicao`),
  KEY `idPagamento` (`idPagamento`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

DROP TABLE IF EXISTS `membros`;
CREATE TABLE IF NOT EXISTS `membros` (
  `idMembro` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(90) NOT NULL,
  `Nome do utilizador` varchar(90) NOT NULL,
  `Palavra Passe` varchar(255) NOT NULL,
  `idUtilizador` int(11) NOT NULL,
  PRIMARY KEY (`idMembro`),
  UNIQUE KEY `nomeutlizador_unique` (`Nome do utilizador`),
  KEY `fkidutilizador_member` (`idUtilizador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1698089976),
('m130524_201442_init', 1698089979),
('m190124_110200_add_verification_token_column_to_user_table', 1698089979),
('m140506_102106_rbac_init', 1698090891),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1698090891),
('m180523_151638_rbac_updates_indexes_without_prefix', 1698090891),
('m200409_110543_rbac_update_mssql_trigger', 1698090891);

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivos`
--

DROP TABLE IF EXISTS `objetivos`;
CREATE TABLE IF NOT EXISTS `objetivos` (
  `idObjetivos` int(11) NOT NULL AUTO_INCREMENT,
  `descrição` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL,
  PRIMARY KEY (`idObjetivos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfilutilizador`
--

DROP TABLE IF EXISTS `perfilutilizador`;
CREATE TABLE IF NOT EXISTS `perfilutilizador` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `codigopostal` varchar(8) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `contacto` int(9) NOT NULL,
  `nif` int(9) NOT NULL,
  `verificado` tinyint(1) NOT NULL DEFAULT '0',
  `idUtilizador` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif_UNIQUE` (`nif`),
  KEY `fkidutilizador` (`idUtilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfilutilizador`
--

INSERT INTO `perfilutilizador` (`id`, `nome`, `morada`, `codigopostal`, `genero`, `contacto`, `nif`, `verificado`, `idUtilizador`) VALUES
(1, 'Admin', 'rua do admin', '4820-645', 'masculino', 914253254, 12312321, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(250) DEFAULT NULL,
  `designacao` varchar(250) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '10',
  `descricao` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

DROP TABLE IF EXISTS `tarefa`;
CREATE TABLE IF NOT EXISTS `tarefa` (
  `idTarefa` int(11) NOT NULL AUTO_INCREMENT,
  `descrição` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `recorrencia` int(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `fotografia` varchar(255) DEFAULT NULL,
  `pontos` int(11) NOT NULL,
  `idMembro` int(11) NOT NULL,
  `idUtilizador` int(11) NOT NULL,
  PRIMARY KEY (`idTarefa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposexpedicao`
--

DROP TABLE IF EXISTS `tiposexpedicao`;
CREATE TABLE IF NOT EXISTS `tiposexpedicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(50) NOT NULL,
  `custo` decimal(8,2) NOT NULL,
  `tempoMedio` varchar(10) NOT NULL,
  `status` int(11) DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipospagamento`
--

DROP TABLE IF EXISTS `tipospagamento`;
CREATE TABLE IF NOT EXISTS `tipospagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(250) NOT NULL,
  `status` int(11) DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '5Owtf1RzsbH1bX3f_8n8T3bSY3LZCDSn', '$2y$13$utlIGRRktYjZrjTfgzh5q.Um4dYuknu1579c/OuOtUwTcA1jl3Pmu', NULL, 'admin@admin.com', 10, 1700600521, 1700600521, 'WMw8njN1MDWSj3m7X3neUAEPOJo1MKSG_1700600521');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `membros`
--
ALTER TABLE `membros`
  ADD CONSTRAINT `fkidutilizador_member` FOREIGN KEY (`idUtilizador`) REFERENCES `perfilutilizador` (`id`);

--
-- Limitadores para a tabela `perfilutilizador`
--
ALTER TABLE `perfilutilizador`
  ADD CONSTRAINT `fkidutilizador` FOREIGN KEY (`idUtilizador`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
