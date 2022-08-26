-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Ago-2022 às 16:17
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `live_search`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `searchperson`
--

CREATE TABLE `searchperson` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `searchperson`
--

INSERT INTO `searchperson` (`id`, `name`, `age`, `country`, `email`, `occupation`) VALUES
(1, 'ale', '36', 'brasil', 'ale@gmail.com', 'ti'),
(2, 'bruno', '36', 'estados unidos', 'bruno@gmail.com', 'adm'),
(3, 'jac', '34', 'Argentina', 'jac@gmail.com', 'secretaria'),
(4, 'adriele', '1', 'Portugal', 'drica@gmail.com', 'diretora'),
(5, 'drica', '1', 'Espanha', 'driquinha@gmail.com', 'mesa tenista');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `searchperson`
--
ALTER TABLE `searchperson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `searchperson`
--
ALTER TABLE `searchperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
