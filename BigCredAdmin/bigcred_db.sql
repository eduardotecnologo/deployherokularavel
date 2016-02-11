-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2016 at 01:13 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bigcred_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banco`
--

CREATE TABLE IF NOT EXISTS `banco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `banco`
--

INSERT INTO `banco` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Brasil', '2016-01-14 17:43:03', NULL),
(2, 'Bradesco', '2016-01-14 17:58:31', NULL),
(4, 'BV', '2016-01-20 19:50:02', NULL),
(5, 'Bonsucesso', '2016-01-20 19:50:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `nascimento` datetime NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `matriculaII` varchar(20) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(5) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `ddd` varchar(3) NOT NULL,
  `telefone` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `orgao_id` int(11) NOT NULL,
  `valor_contrato` varchar(10) NOT NULL,
  `porc_comicao_promotor` varchar(10) NOT NULL,
  `valor_comicao` varchar(10) NOT NULL,
  `status_id` int(11) NOT NULL,
  `comicao_geral` varchar(10) NOT NULL,
  `valor_comicao_geral` varchar(10) NOT NULL,
  `anexo_proposta` varchar(200) NOT NULL,
  `anexo_documentos` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `status_comicao_id` int(11) NOT NULL,
  `promotor_id` int(11) NOT NULL,
  `parceiro_id` int(11) NOT NULL,
  `banco_id` int(11) NOT NULL,
  `tabela_id` int(11) NOT NULL,
  `prazo_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `categorias_id` int(11) NOT NULL,
  `observacoes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `rg`, `nascimento`, `matricula`, `matriculaII`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `email`, `ddd`, `telefone`, `celular`, `orgao_id`, `valor_contrato`, `porc_comicao_promotor`, `valor_comicao`, `status_id`, `comicao_geral`, `valor_comicao_geral`, `anexo_proposta`, `anexo_documentos`, `created`, `modified`, `status_comicao_id`, `promotor_id`, `parceiro_id`, `banco_id`, `tabela_id`, `prazo_id`, `tipo_id`, `categorias_id`, `observacoes`) VALUES
(1, 'Eduardo Alexandre ', '7272726271', '000000000', '0000-00-00 00:00:00', '828828828828', '2222222222222222', 'José Teixeira da Silva', '123', '312', 'Cidade do Sol', 'Juiz de Fora', 'MG', '36085-440', 'eduardotecnologo@hotmail.com', '32', '32237803', '87024149', 2, 'R$2.000.00', '15%', 'R$500.00', 0, 'R$5.000.00', 'R$10.000.0', '', '', '0000-00-00 00:00:00', '2016-01-19 00:00:00', 0, 2, 0, 2, 0, 0, 0, 0, ''),
(2, 'Leandro kemper', '98754321', '3333333333', '0000-00-00 00:00:00', '333333333333333333', '3333333333333333333', '3333333333333333', '22', '333', 'cidade do sol', 'Juiz de Fora', '', '', NULL, '', '', '', 1, '', '', '', 0, '', '', '', '', '2016-01-19 18:09:03', NULL, 1, 0, 0, 2, 2, 1, 2, 0, '<p>ssssssssssssssss</p>'),
(3, 'Suellen Nascimento', '98754321', '3333333333', '0000-00-00 00:00:00', '333333333333333333', '3333333333333333333', '3333333333333333', '22', '333', 'cidade do sol', 'Juiz de Fora', '', '', NULL, '', '328702414', '', 3, '', '', '', 0, '', '', '', '', '2016-01-19 18:14:37', NULL, 0, 0, 0, 2, 2, 2, 2, 0, '<p>ssssssssssssssssss</p>'),
(4, 'Pikachu', '98754321', '3333333333', '0000-00-00 00:00:00', '333333333333333333', '3333333333333333333', '3333333333333333', '22', '333', 'cidade do sol', 'Juiz de Fora', 'rf', '63636363', NULL, '32', '328702414', '87024148', 2, 'R$39,00', 'R$39,00', 'R$39,00', 0, 'R$39,00', '', '', '', '2016-01-19 18:19:02', NULL, 2, 0, 0, 1, 1, 1, 3, 0, '<p>zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz</p>'),
(5, 'cara louco', '98754321', '3333333333', '0000-00-00 00:00:00', '333333333333333333', '3333333333333333333', '3333333333333333', '22', '333', 'cidade do sol', 'Juiz de Fora', 'rf', '63636363', NULL, '32', '328702414', '87024148', 1, 'R$39,00', 'R$39,00', 'R$39,00', 0, 'R$39,00', '', '409166_2339477140976_1768492185_n.jpg', 'game.png', '2016-01-19 18:35:33', NULL, 2, 0, 0, 1, 2, 1, 3, 0, '<p>ggggggggggggggggggggggggggggggggggggggggggggggg</p>');

-- --------------------------------------------------------

--
-- Table structure for table `dados_bancarios`
--

CREATE TABLE IF NOT EXISTS `dados_bancarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banco` varchar(15) NOT NULL,
  `agencia` varchar(15) NOT NULL,
  `operacao` varchar(15) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `despesas`
--

CREATE TABLE IF NOT EXISTS `despesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nivel_acessos`
--

CREATE TABLE IF NOT EXISTS `nivel_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '0000-00-00 00:00:00', '2015-12-11 00:00:00'),
(2, 'Usuario', '2016-01-09 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orgao`
--

CREATE TABLE IF NOT EXISTS `orgao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orgao`
--

INSERT INTO `orgao` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'INSS', '2016-01-14 16:30:42', NULL),
(2, 'SEPLAG', '2016-01-14 16:32:07', NULL),
(3, 'IPSEMG', '2016-01-15 14:00:51', NULL),
(4, 'IPSM', '2016-01-18 16:11:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parceiro`
--

CREATE TABLE IF NOT EXISTS `parceiro` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parceiro`
--

INSERT INTO `parceiro` (`id`, `nome`, `created`, `modified`) VALUES
(0, 'AMERICAN TRUST', '2016-01-14 16:42:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prazo`
--

CREATE TABLE IF NOT EXISTS `prazo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prazo`
--

INSERT INTO `prazo` (`id`, `nome`, `created`, `modified`) VALUES
(1, '1', '2016-01-14 16:44:49', NULL),
(2, '2', '2016-01-14 16:44:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotor`
--

CREATE TABLE IF NOT EXISTS `promotor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `promotor`
--

INSERT INTO `promotor` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Naila', '2016-01-14 16:48:50', NULL),
(2, 'Nancy', '2016-01-14 16:49:07', NULL),
(3, 'Leandro kemper', '2016-01-14 16:49:21', NULL),
(4, 'Gabriela', '2016-01-14 16:49:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'A PAGAR', '0000-00-00 00:00:00', NULL),
(2, 'PAGA', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_comicao`
--

CREATE TABLE IF NOT EXISTS `status_comicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status_comicao`
--

INSERT INTO `status_comicao` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'A PAGAR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'PAGA', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabela`
--

CREATE TABLE IF NOT EXISTS `tabela` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tabela`
--

INSERT INTO `tabela` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'NORMAL', '2016-01-14 17:11:38', NULL),
(2, 'FLEX 1', '2016-01-18 17:46:17', NULL),
(3, 'FLEX 2', '2016-01-18 18:35:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'NOVO', '2016-01-14 16:39:44', '0000-00-00 00:00:00'),
(2, 'Refinanciamento', '2016-01-14 18:34:15', '0000-00-00 00:00:00'),
(3, 'Re-Compra', '2016-01-15 14:01:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `nivel_acessos_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `nivel_acessos_id`, `created`, `modified`) VALUES
(1, 'Eduardo Alexandre ', 'edudeveloperctk@gmail.com', 'edudeveloper', '123', 1, '2016-01-09 00:00:00', NULL),
(10, 'Pikachu Louco', 'pikachu@pikachu', 'Pikamon', 'novo', 2, '2016-01-11 13:11:35', NULL),
(11, 'Lohann Nascimento', 'lohan@lohan', 'lohann', '123', 1, '2016-01-14 16:09:34', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
