-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2022 às 06:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario-frankle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosqq`
--

CREATE TABLE `usuariosqq` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_mae` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuariosqq`
--

INSERT INTO `usuariosqq` (`id`, `nome`, `username`, `telefone`, `sexo`, `data_nasc`, `nome_mae`, `password`) VALUES
(18, 'Debora Paixão', 'debyproa12@gmail.com', '11955451202', 'feminino', '1992-09-07', 'marivalda', 'senha123'),
(19, 'israel souza da zilva', 'is8579707@gmail.com', '11956567385', 'masculino', '1971-12-05', 'francisca', '2585senha'),
(20, 'Karen Ferreifra', 'Karengentilf@gmail.com', '11996708258', 'feminino', '2004-07-19', 'cintia carla', '08072003'),
(21, 'Marcus', 'marcus.araujo29@gmail.com', '11959418597', 'masculino', '2004-04-29', 'Luciana de Araujo Pinto', '12345678'),
(22, 'thiago Ferreira marques', 'thiagomarqueswork@gmail.com', '11958207664', 'masculino', '2002-07-31', 'neusair de fatima ', '958207664'),
(23, 'Isfrankle Souza', 'franklesousa38@gmail.com', '945591483', 'masculino', '1902-02-25', 'mae', 'teste123'),
(24, 'Isfrankle Souza', 'franklesousa38@gmail.com', '945591483', 'masculino', '1902-02-25', 'mae', 'teste123'),
(25, 'Isfrankle Souza', 'franklesousa38@gmail.com', '945591483', 'masculino', '1902-02-25', 'mae', 'gyuhkjhljk'),
(26, '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', ''),
(29, 'Isfrankle Souza', 'franklesousa38@gmail.com', '945591483', 'feminino', '1898-12-05', 'mae', '2121test'),
(30, 'Isfrankle Souza da Silva', 'franklesousa38@gmail.com', '11945591483', 'feminino', '0098-12-05', 'mae', 'teste123'),
(31, '', '', '', '', '', '', ''),
(32, 'Isfrankle Souza', 'franklesousa38@gmail.com', '945591483', 'feminino', '1998-03-13', 'hvyxjhk', ' hjkblnçm574'),
(33, 'Isfrankle Souza', 'franklesousa38@gmail.com', '945591483', 'feminino', '1998-03-13', 'hvyxjhk', ' hjkblnçm574'),
(34, 'Isfrankle Souza da Silva', 'franklesousa38@gmail.com', '11945591483', 'feminino', '1899-12-05', 'mgyu', '455616hjvghcfhvjb');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuariosqq`
--
ALTER TABLE `usuariosqq`
  ADD PRIMARY KEY (`id`,`password`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuariosqq`
--
ALTER TABLE `usuariosqq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
