-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Out-2023 às 10:52
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `franquia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `cpf`, `telefone`, `created_at`, `updated_at`) VALUES
(1, 'Carlos José', 'jose@gmail.com', '78665', '68596969', NULL, NULL),
(2, 'Tainá Miranda', 'tainaferreira23@outlook.com', '252.647.585-96', '(83) 74848-4888', '2023-09-14 17:31:16', '2023-09-14 17:31:16'),
(3, 'Felipe Leo', 'tainaferreira23@outlook.com', '252.647.585-96', '(83) 74848-4888', '2023-09-21 20:40:54', '2023-09-21 20:40:54'),
(4, 'John Victor', 'johnviti@outlook.com', '133.647.585-96', '(83) 88888-4888', '2023-09-21 20:40:54', '2023-09-21 20:40:54');


-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--
INSERT INTO `fornecedor` (`id`, `nome`, `email`, `cpf_cnpj`, `cep`, `telefone`, `created_at`, `updated_at`) VALUES
(1, 'Motos Pereira Ltda.', 'motospereira@gmail.com', '12345678901', '25364-747', '83748484888', NULL, NULL),
(2, 'Miranda Motos S.A.', 'mirandamotos@email.com', '23456789012', '94848', '68596969', NULL, NULL),
(3, 'Fornecedora de Peças Silva', 'fornecedorasilva@email.com', '34567890123', '66666-666', '1234567890', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `email`, `telefone`, `cpf`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Pereira', 'jose@gmail.com', '', '', NULL, NULL),
(2, 'Maria da Silva', 'maria@gmail.com', '555-5555', '12345678901', NULL, NULL),
(3, 'João Souza', 'joao@gmail.com', '555-5556', '23456789012', NULL, NULL),
(4, 'Ana Santos', 'ana@gmail.com', '555-5557', '34567890123', NULL, NULL),
(5, 'Pedro Ferreira', 'pedro@gmail.com', '555-5558', '45678901234', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

DROP TABLE IF EXISTS `loja`;
CREATE TABLE IF NOT EXISTS `loja` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcionario_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id`, `nome`, `estado`, `cidade`, `bairro`, `complemento`, `rua`, `cep`, `funcionario_id`, `created_at`, `updated_at`) VALUES
(1, 'Dream Moto', 'alagoas', 'maceió', 'feitosa', 'perto do shopping', 'rua da caixa', '94848', '1', NULL, NULL),
(2, 'Motos Tainá', 'alagoas', 'maceio', 'feitosa', 'nada', 'sao joao', '25364-747', '1', '2023-09-14 17:10:08', '2023-09-14 17:10:08'),
(3, 'Carvalho Motos', 'São Paulo', 'Santos', 'Barra', 'Muitos Próximo', 'Neymar', '25364-747', '1', '2023-09-16 17:44:18', '2023-09-16 17:44:18'),
(4, 'Felipe Alves Motos', 'alagoas', 'maceio', 'feitosa', 'nada', 'sao joao', '25364-747', '1', '2023-09-21 20:12:46', '2023-09-21 20:12:46'),
(5, 'Santos Motos', 'alagoas', 'maceio', 'feitosa', 'nada', 'Neymar', '25364-747', '1', '2023-09-21 20:13:11', '2023-09-21 20:13:11'),
(6, 'Beto Motos', 'alagoas', 'maceio', 'Barra', 'nada', 'Neymar', '25364-747', '1', '2023-09-21 20:40:31', '2023-09-21 20:40:31'),
(7, 'John Dream Motos', 'alagoas', 'maceio', 'Barra', 'nada', 'Neymar', '25364-747', '1', '2023-09-21 20:40:31', '2023-09-21 20:40:31');



-- --------------------------------------------------------

--
-- Estrutura da tabela `metodos`
--

DROP TABLE IF EXISTS `metodos`;
CREATE TABLE IF NOT EXISTS `metodos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodo_pagamento`
--

DROP TABLE IF EXISTS `metodo_pagamento`;
CREATE TABLE IF NOT EXISTS `metodo_pagamento` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `metodo_pagamento`
--

INSERT INTO `metodo_pagamento` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Dinheiro', NULL, NULL),
(2, 'Cartão', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2023_09_07_162644_create_loja_table', 1),
(4, '2023_09_07_162707_create_moto_table', 1),
(5, '2023_09_07_162752_create_venda_table', 1),
(6, '2023_09_07_162824_create_fornecedor_table', 1),
(7, '2023_09_07_163023_create_cliente_table', 1),
(8, '2023_09_07_165832_create_funcionario_table', 1),
(9, '2023_09_07_165854_create_metodos_table', 1),
(10, '2023_09_07_165942_create_metodo_pagamento_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `moto`
--

DROP TABLE IF EXISTS `moto`;
CREATE TABLE IF NOT EXISTS `moto` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` date NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loja_id` int(11) NOT NULL,
  `fornecedor_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `moto`
--

INSERT INTO `moto` (`id`, `nome`, `ano`, `marca`, `modelo`, `preco`, `loja_id`, `fornecedor_id`, `created_at`, `updated_at`) VALUES
(1, 'Titan', '2023-09-12', 'HONDA', 'xw', '16.000', 1, 1, NULL, NULL),
(2, 'Fz25', '2023-09-19', 'HONDA', '47474', '47585', 1, 1, '2023-09-14 17:59:57', '2023-09-14 17:59:57'),
(3, 'FAN', '2023-09-13', 'YAMAHA', '654647', '50.000', 2, 1, '2023-09-16 18:16:37', '2023-09-16 18:16:37'),
(4, 'Fz15', '2023-09-19', 'YAMAHA', '654647', '60.000', 3, 1, '2023-09-16 18:17:18', '2023-09-16 18:17:18'),
(5, 'XRE', '2023-09-19', 'YAMAHA', '47474', '80000', 4, 3, '2023-09-21 20:41:37', '2023-09-21 20:41:37'),
(6, 'Ninja ZX-6R', '2023-09-25', 'KAWASAKI', 'ZX-6R', '12,999', 5, 2, NULL, NULL),
(7, 'GSX-R750', '2023-09-26', 'SUZUKI', 'GSX-R750', '13,499', 6, 2, NULL, NULL),
(8, 'CBR1000RR', '2023-09-27', 'HONDA', 'CBR1000RR', '16,799', 7, 3, NULL, NULL),
(9, 'Panigale V4', '2023-09-28', 'DUCATI', 'Panigale V4', '21,195', 8, 3, NULL, NULL),
(10, 'R1', '2023-09-29', 'YAMAHA', 'YZF-R1', '16,799', 9, 4, NULL, NULL);


-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_total` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `funcionario_id` int(11) NOT NULL,
  `loja_id` int(11) NOT NULL,
  `moto_id` int(11) NOT NULL,
  `metodo_pagamento_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `descricao`, `valor_total`, `cliente_id`, `funcionario_id`, `loja_id`, `moto_id`, `metodo_pagamento_id`, `created_at`, `updated_at`) VALUES
(1, 'Venda em 10 parcelas', 16000, 1, 1, 1, 1, 1, '2023-11-01 08:00:00', NULL),
(2, 'Compra de teste', 19000, 1, 1, 1, 2, 1, '2023-10-02 14:30:00', '2023-10-02 14:30:00'),
(3, 'Compra de teste', 18000, 1, 1, 2, 2, 1, '2023-09-03 10:15:00', '2023-09-03 10:15:00'),
(4, 'Venda especial', 19000, 2, 1, 1, 3, 2, '2023-12-04 16:45:00', '2023-12-04 16:45:00'),
(5, 'Moto econômica', 18000, 2, 1, 1, 3, 1, '2023-12-05 09:20:00', '2023-12-05 09:20:00'),
(6, 'Compra de teste', 18000, 2, 1, 3, 2, 1, '2023-10-06 15:10:00', '2023-10-06 15:10:00'),
(7, 'Compra divertida', 18000, 1, 1, 3, 3, 1, '2023-09-07 11:05:00', '2023-09-07 11:05:00'),
(8, 'Teste de compra', 17000, 2, 1, 5, 4, 2, '2023-11-08 12:30:00', '2023-11-08 12:30:00'),
(9, 'Compra OK', 18500, 1, 1, 4, 3, 1, '2023-09-09 17:50:00', '2023-09-09 17:50:00'),
(10, 'Teste de compra com valor elevado', 18000, 1, 1, 5, 2, 2, '2023-12-10 14:15:00', '2023-12-10 14:15:00'),
(11, 'Descrição da compra', 17000, 3, 1, 4, 5, 1, '2023-11-11 18:30:00', '2023-11-11 18:30:00'),
(12, 'Compra de teste', 19000, 1, 1, 1, 2, 1, '2023-11-02 14:30:00', '2023-11-02 14:30:00'),
(13, 'Compra de teste', 18000, 1, 1, 2, 2, 1, '2023-11-03 10:15:00', '2023-11-03 10:15:00'),
(14, 'Venda especial', 19000, 2, 1, 1, 3, 2, '2023-11-04 16:45:00', '2023-11-04 16:45:00'),
(15, 'Moto econômica', 18000, 2, 1, 1, 3, 1, '2023-11-05 09:20:00', '2023-11-05 09:20:00'),
(16, 'Compra de teste', 18000, 2, 1, 3, 2, 1, '2023-11-06 15:10:00', '2023-11-06 15:10:00'),
(17, 'Compra divertida', 18000, 1, 1, 3, 3, 1, '2023-11-07 11:05:00', '2023-11-07 11:05:00'),
(18, 'Teste de compra', 17000, 2, 1, 5, 4, 2, '2023-11-08 12:30:00', '2023-11-08 12:30:00'),
(19, 'Compra OK', 18500, 1, 1, 4, 3, 1, '2023-11-09 17:50:00', '2023-11-09 17:50:00'),
(20, 'Teste de compra com valor elevado', 18000, 1, 1, 5, 2, 2, '2023-11-10 14:15:00', '2023-11-10 14:15:00'),
(21, 'Descrição da compra', 17000, 3, 1, 4, 5, 1, '2023-11-11 18:30:00', '2023-11-11 18:30:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
