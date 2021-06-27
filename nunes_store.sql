-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2021 às 08:26
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nunes_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Marvel'),
(5, 'dc comics'),
(7, 'wolverine'),
(8, 'homem aranha'),
(9, 'batman'),
(10, 'green lantern'),
(11, 'superman'),
(12, 'green arrow'),
(13, 'thor'),
(14, 'silver surfer'),
(15, 'captain america'),
(16, 'captain marvel'),
(17, 'human torch');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `preco` float(7,2) DEFAULT NULL,
  `fk_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `estoque`, `description`, `foto`, `preco`, `fk_category`) VALUES
(1, 'Wizard', 7, 'Wolverine Ã© tÃ­pico dos muitos anti-herÃ³is resistentes que emergiram na cultura popular americana apÃ³s a Guerra do VietnÃ£;', '../../../public/img/products/item1.jpg', 23.90, 7),
(3, 'Green lantern and green arrow', 3, 'Nessas histÃ³rias, o Lanterna Verde Hal Jordan continuou suas aventuras cÃ³smicas enquanto usava seu incrÃ­vel Anel de Poder para policiar o Setor 2814 contra ameaÃ§as que ameaÃ§avam o universo.', '../../../public/img/products/item2.jpg', 19.90, 10),
(4, 'Action comics #1', 1, 'considerada o \"marco zero\" das histÃ³rias em quadrinhos americanas de super-herÃ³i e Ã© um dos, se nÃ£o \"o\" mais valioso item colecionÃ¡vel de todo o mercado.   ', '../../../public/img/products/item3.jpg', 99999.00, 11),
(5, 'The once and future', 6, ' Thor Ã© virtualmente um deus de outra realidade, possuindo vastos poderes. Desta maneira, possui uma enorme forÃ§a e velocidade sobre-humanas.', '../../../public/img/products/item4.jpg', 23.90, 13),
(6, 'wolverine vs spider-man', 1, 'wolverine e homem aranha estÃ£o na alemanha em uma corrida para salvar carlos magno, amigo prÃ³ximo de wolverine.', '../../../public/img/products/item5.jpg', 65.00, 7),
(7, 'The blazing mag', 5, ' Johnny Storm, o aventureiro adolescente impulsivo e em busca de emoÃ§Ã£o do Quarteto FantÃ¡stico incendiou o mundo com suas histÃ³rias solo escaldantes!', '../../../public/img/products/item6.jpg', 45.00, 17),
(8, 'sentinel of the spaceways', 2, 'O Surfista Prateado pesquisa o Universo desde o Big Bang atÃ© o presente, testemunhando eventos galÃ¡cticos de CampeÃµes presos em uma espiral interminÃ¡vel de violÃªncia.', '../../../public/img/products/item7.jpg', 120.00, 14),
(9, 'batman 66', 1, ' Medo. O londrino lorde ffogg e seu gÃ¡s de controle mental trazem uma pÃ©ssima previsÃ£o: nublado com chance de pÃ¢nico em gotham city.', '../../../public/img/products/item8.jpg', 250.00, 9),
(10, 'Living legend', 8, 'Quando uma estaÃ§Ã£o de pesquisa orbital ultrassecreta Ã© arrastada do cÃ©u por uma forÃ§a alienÃ­gena desconhecida, Steve Rogers se vÃª preso entre duas superpotÃªncias globais Ã  beira da guerra!', '../../../public/img/products/item9.jpg', 65.00, 15),
(11, 'Earths Mightest Hero', 2, 'Quando ecos malignos do passado dos herÃ³is mais poderosos da Terra surgem por toda Manhattan, Carol Danvers se recusa a ser aterrorizada por sua recente e misteriosa perda de poder.', '../../../public/img/products/item10.jpg', 85.00, 16),
(12, 'the showdown of the century', 1, 'Os herÃ³is mais poderosos da DC Comics e da Marvel Comics colidem em uma batalha Ã©pica que gera um novo universo fundido.', '../../../public/img/products/item11.jpg', 350.00, 1),
(13, 'o cavaleiro das trevas', 1, 'Batman tem mantido a ordem na cidade de Gotham, mas um jovem e anÃ¡rquico criminoso conhecido como Coringa ganha forÃ§a e decide instaurar um verdadeiro caos na cidade. ', '../../../public/img/products/item12.jpg', 200.00, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pic` varchar(70) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`fk_category`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`fk_category`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
