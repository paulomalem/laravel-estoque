-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jan-2017 às 01:51
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `estoque` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `preco` double(10,2) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `estoque`, `nome`, `preco`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(30, 11, 'Balde', 2.50, 'Ótimo Balde', '2017-01-16 02:47:17', '2017-01-16 02:49:58', NULL),
(31, 100, 'Lápis', 1.50, 'Lápis de cor.', '2017-01-16 02:47:34', '2017-01-16 02:47:34', NULL),
(32, 3, 'Cadeira', 15.50, 'Cadeira com quatro pernas.', '2017-01-16 02:48:06', '2017-01-16 02:48:06', NULL),
(33, 4, 'Mesa', 60.00, 'Mesa de madeira.', '2017-01-16 02:48:30', '2017-01-16 02:48:30', NULL),
(34, 1, 'Celular', 1000.00, 'Celular novo.', '2017-01-16 02:49:04', '2017-01-16 02:49:57', NULL),
(35, 7, 'Esfera do Dragão', 500.00, 'rsrs', '2017-01-16 02:49:46', '2017-01-16 02:49:46', NULL),
(36, 0, 'Laptop', 3000.00, 'Laptop Novinho.', '2017-01-16 02:50:22', '2017-01-16 02:50:22', NULL),
(37, 0, 'Peruca', 50.00, 'Peruca loira.', '2017-01-16 02:50:47', '2017-01-16 02:50:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
