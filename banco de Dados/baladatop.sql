-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2018 às 02:15
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baladatop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `baladas`
--

CREATE TABLE `baladas` (
  `id` int(11) NOT NULL,
  `balada` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `baladas`
--

INSERT INTO `baladas` (`id`, `balada`, `endereco`, `telefone`, `link`, `descricao`, `horario`) VALUES
(1, 'Winner', 'R. Venezuela, 148 - Espinheiro, Recife - PE, 52020-170', '(81)99813-7574', 'https://pt-br.facebook.com/winnersportsbar/', 'boemia estilosa em ambiente acolhedor descontraÃ­do com porÃ§Ãµes mistas, lanches artesanais, e temas esportivos', '16:00:00'),
(2, 'Uk Pub', 'R. Francisco da Cunha, 165 - Boa Viagem, Recife - PE, 51020-050', '(81) 3465-1088', 'https://pt-br.facebook.com/UkPubRecife', 'Boemia contemporÃ¢nea e sofisticada com coquetÃ©is, petiscos, deck e palco de pocket shows e comÃ©dia stand up.', '21:00:00'),
(3, 'Liverpool', 'R. Cap. Rebelinho, 440 - Pina, Recife - PE, 51011-000', '(81) 3037-0074', 'https://pt-br.facebook.com/liverpoolrecife/', 'Casa noturna animada por bandas de estilos populares diversos com pista eletrÃ´nica, espaÃ§os intimistas e bar.', '20:00:00'),
(4, 'Manny Deck', 'R. do Sol, 468 - Carmo, Olinda - PE, 53120-000', '(81) 3318-0226', 'https://pt-br.facebook.com/mannydeckbar/', 'boemia contemporanea e sofisticada com coquetéis, petiscos, deck e palco de pocket shows e comedia.', '17:00:00'),
(5, 'Tardezinha pub', 'Av. Floresta, 357 - Artur Lundgren L, Paulista - PE, 53417-160', '(81) 98688-8765', 'https://www.facebook.com/Tardezinha-Pub-751294065055847/', 'Bares, bar, pub, musica ao vivo, caldinho, bar com pagode e mpb', '17:00:00'),
(6, 'Clube Metrópole', ' R. das Ninfas, 125 - Boa Vista, Recife - PE, 50070-050', ' (81) 3423-0123', 'https://pt-br.facebook.com/clubemetropole/', 'Um espaço sem preconceito, com pessoas bonitas e música boa, ambiente incrível.\"', '17:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(100) NOT NULL,
  `texto` varchar(100) NOT NULL,
  `usuarios_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `texto`, `usuarios_id`) VALUES
(6, 'kkkk', 19),
(7, '2', 19),
(8, '2', 19),
(9, '2', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `nome`, `imagem`) VALUES
(1, 'Pedro', 'preto.jpg'),
(2, 'Pedro', 'vestido-de-formatura-longo-dourado-e-vermelho-escuro-D_NQ_NP_240315-MLB25218138895_122016-F.jpg'),
(3, 'kkkk', 'preto.jpg'),
(4, 'Ana', 'preto.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `balada` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `balada`, `role`) VALUES
(16, 'rafael', '123', 'sim', 'adm'),
(17, 'joao', '4321', 'nao', 'user'),
(19, 'manu', '12345', 'sim', 'adm'),
(20, 'leo', '123', 'sim', 'user'),
(21, 'lucas', '12', 'sim', 'user'),
(22, 'miguel', '123', 'sim', 'adm'),
(23, 'abraao', '123', 'sim', 'user'),
(26, 'pedro lucas', '1234', 'sim', 'user'),
(27, 'carlos', '123', 'sim', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baladas`
--
ALTER TABLE `baladas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baladas`
--
ALTER TABLE `baladas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
