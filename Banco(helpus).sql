-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Set-2016 às 23:22
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `nome`, `mensagem`, `datahora`) VALUES
(1, 'g', 'a', '2016-09-01 15:40:30'),
(2, 'andre', 'blz', '2016-09-01 23:36:30'),
(3, 'i', 'v', '2016-09-02 10:01:11'),
(4, 'a', 'a', '2016-09-02 10:03:21'),
(5, 'Thati', 'Hello', '2016-09-02 10:10:31'),
(6, 'isaias', 'Oi seus otÃ¡rios', '2016-09-02 10:31:00'),
(7, 'Anna Raquel', 'Gente pelo amor de Deus, estou com duvida no BdD', '2016-09-02 10:33:58'),
(8, 'porra', 'corno', '2016-09-02 10:40:14'),
(9, 'porra', 'se vira\nfoda-se', '2016-09-02 10:40:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat2`
--

CREATE TABLE IF NOT EXISTS `chat2` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat3`
--

CREATE TABLE IF NOT EXISTS `chat3` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat4`
--

CREATE TABLE IF NOT EXISTS `chat4` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat5`
--

CREATE TABLE IF NOT EXISTS `chat5` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat6`
--

CREATE TABLE IF NOT EXISTS `chat6` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat7`
--

CREATE TABLE IF NOT EXISTS `chat7` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat8`
--

CREATE TABLE IF NOT EXISTS `chat8` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `chat8`
--

INSERT INTO `chat8` (`id`, `nome`, `mensagem`, `datahora`) VALUES
(1, 'Thati', 'Sou a primeira \\o/', '2016-09-02 10:12:31'),
(2, 'Anna Raquel', 'o que Ã© Movimento retilÃ­neo Uniforme?', '2016-09-02 10:34:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat9`
--

CREATE TABLE IF NOT EXISTS `chat9` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat10`
--

CREATE TABLE IF NOT EXISTS `chat10` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat11`
--

CREATE TABLE IF NOT EXISTS `chat11` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat12`
--

CREATE TABLE IF NOT EXISTS `chat12` (
`id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`, `email`, `area`, `imagem`) VALUES
(36, 'teste', 'teste', 'teste@gmail.com', 'Biologia', ''),
(66, 'chato', 'chato', 'a@gmail.com', 'Informatica', 'imagem2/chato.'),
(67, 'andre', 'andre', '1@gmail.com', 'Geografia', 'imagem2/'),
(68, '222', '222', 'a@gmail.com', 'FisÃ­ca', 'imagem2/'),
(69, '322', '322', 'andre-shippuden3711@hotmail.com', 'Geografia', 'imagem2/32.'),
(70, 'wi', 'wi', 'a@gmail.com', 'Agro-Industria', 'imagem2/'),
(71, 'teste2', 'teste2', 'a@gmail.com', 'Quimica', 'imagem2/teste2.'),
(72, 'teste3', 'teste3', 'a@gmail.com', 'Geografia', 'imagem2/teste3.jpeg'),
(73, '02', '02', 'a@gmail.com', 'Historia', 'imagem2/02.jpeg'),
(74, 'j', '1', '1@hotmail.com', 'Informatica', 'imagem2/j.jpeg'),
(75, 'v', 'v', 'a@gmail.com', 'Informatica', 'imagem2/v.jpeg'),
(76, 'andre', '01', 'andre-shippuden3711@hotmail.com', 'Informatica', 'imagem2/andre.jpeg'),
(77, 'as', 'as', 'a@gmail.com', 'Informatica', 'imagem2/as.jpeg'),
(78, 'a', 'a', 'a@gmail.com', 'Informatica', 'imagem2/a.jpeg'),
(79, 'JosÃ© Valter', '123456', '1@gmail.com', 'Informatica', 'imagem2/JosÃ© Valter.jpeg'),
(80, 'aaa', 'aaa', 'a@gmail.com', 'Informatica', 'imagem2/aaa.jpeg'),
(81, 'Thatiane de Oliveira Rosa', '12345678', 'thatiane@gmail.com', 'Informatica', 'imagem2/Thatiane de Oliveira Rosa.jpeg'),
(82, 'pantoja', '2020', 'pantoja@gmail.com', 'Informatica', 'imagem2/pantoja.jpeg'),
(83, 'Kely Cristina ', 'pazeamor123', 'kelycristinarios@gmail.com', 'Agro-Industria', 'imagem2/Kely Cristina .jpeg'),
(84, 'Isaias Alves', '123456', 'isaias.caldeira@hotmail.com', 'Informatica', 'imagem2/Isaias Alves.jpeg'),
(85, 'Anna Raquel', '92826475', 'ana@gmail.com', 'Informatica', 'imagem2/Anna Raquel Carvalho.jpeg'),
(86, 'PaulÃ£o', '123456', 'paulovitorxd072011@hotmail.com', 'Informatica', 'imagem2/PaulÃ£o.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat2`
--
ALTER TABLE `chat2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat3`
--
ALTER TABLE `chat3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat4`
--
ALTER TABLE `chat4`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat5`
--
ALTER TABLE `chat5`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat6`
--
ALTER TABLE `chat6`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat7`
--
ALTER TABLE `chat7`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat8`
--
ALTER TABLE `chat8`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat9`
--
ALTER TABLE `chat9`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat10`
--
ALTER TABLE `chat10`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat11`
--
ALTER TABLE `chat11`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat12`
--
ALTER TABLE `chat12`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chat2`
--
ALTER TABLE `chat2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat3`
--
ALTER TABLE `chat3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat4`
--
ALTER TABLE `chat4`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat5`
--
ALTER TABLE `chat5`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat6`
--
ALTER TABLE `chat6`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat7`
--
ALTER TABLE `chat7`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat8`
--
ALTER TABLE `chat8`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chat9`
--
ALTER TABLE `chat9`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat10`
--
ALTER TABLE `chat10`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat11`
--
ALTER TABLE `chat11`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat12`
--
ALTER TABLE `chat12`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
