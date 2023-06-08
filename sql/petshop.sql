-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 10:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_alteracao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `imagem`, `tipo`, `nome`, `descricao`, `preco`, `quantidade`, `data_criacao`, `data_alteracao`) VALUES
(3, 'ração.png', 'Ração', 'Pro Plan', 'Ração para cachorro adulto de porte grande', '80.00', 20, '2023-06-08 05:32:39', NULL),
(4, 'ração02.png', 'Ração', 'Pedigree para adulto', 'Ração para cachorro adulto de pequeno porte', '60.00', 30, '2023-06-08 21:17:41', NULL),
(5, 'gato-mix.png', 'Ração', 'Sandripet', 'Ração para gatos', '25.00', 30, '2023-06-08 22:11:04', NULL),
(6, 'briquedo01.png', 'Brinquedo', 'Cachorrinho', 'Grows fazenda cachorro com corda', '5.00', 20, '2023-06-08 22:31:50', NULL),
(7, 'brinquedos-pet.png', 'Brinquedo', 'Bola Cravinho', 'Bola Cravinho mini para Cães - Cores Sortidas', '10.00', 50, '2023-06-08 22:33:21', NULL),
(8, 'briquedo02.png', 'Brinquedo', 'Bola Maciça', '>Bola Maciça Colorida 50mm, Corda de 2 Nos Furacão', '15.00', 30, '2023-06-08 22:34:00', NULL),
(9, 'roupa01.png', 'Roupa', 'Roupa da duff', 'Roupa para cachorros de pequeno porte', '50.00', 15, '2023-06-08 22:35:38', NULL),
(10, 'roupafla.png', 'Roupa', 'Roupa Flamengo', 'Roupa do flamento para cachorros de pequeno porte', '55.00', 10, '2023-06-08 22:36:28', NULL),
(11, 'naruto-fofo.png', 'Roupa', 'Moletom Akatsuki', 'Moletom da akatsuki para cachorro de pequeno porte', '55.00', 20, '2023-06-08 22:38:29', NULL),
(12, 'ração03.png', 'Ração', 'Equilíbrio Veterinary', 'Melhora o PH uinitário e controla os níveis de sodio do cachorro', '70.00', 20, '2023-06-08 22:41:22', NULL),
(13, 'raçãogato.png', 'Ração', 'Whiskas', 'Ração para gatos filhotes de carne e leite', '100.00', 30, '2023-06-08 22:42:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
