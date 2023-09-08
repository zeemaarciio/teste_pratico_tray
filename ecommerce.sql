-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Set-2023 às 02:29
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int NOT NULL AUTO_INCREMENT,
  `sales_price` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sales_commission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `seller_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sales`
--

INSERT INTO `sales` (`sales_id`, `sales_price`, `sales_commission`, `seller_id`, `created_at`) VALUES
(6, '4500', '382.5', 20, '2023-09-07 13:27:50'),
(7, '10580', '899.3', 19, '2023-09-07 13:28:32'),
(4, '5000', '425', 21, '2023-09-07 13:05:55'),
(5, '5500', '467.5', 21, '2023-09-07 13:06:16'),
(8, '800', '68', 19, '2023-09-07 15:31:03'),
(9, '460', '39.1', 27, '2023-09-07 17:09:56'),
(10, '890', '75.65', 21, '2023-09-08 01:56:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `seller_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `seller_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sellers`
--

INSERT INTO `sellers` (`id`, `seller_name`, `seller_email`, `created_at`) VALUES
(20, 'Vendedor José', 'vendas.jose@gmail.com', '2023-09-07 13:05:25'),
(27, 'Roberto', 'vendas.roberto@gmail.com', '2023-09-07 16:21:39'),
(19, 'Vendedor Fernando', 'vendas.fernando@gmail.com', '2023-09-07 13:04:42'),
(21, 'Vendedora Maria', 'vendas.maria@gmail.com', '2023-09-07 13:05:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
