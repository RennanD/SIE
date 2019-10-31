-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/03/2017 às 18:32
-- Versão do servidor: 10.1.21-MariaDB
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sie`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `tuma` int(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `setor` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `curso`, `tuma`, `matricula`, `cpf`, `setor`) VALUES
(28, 'Rennan Douglas de Oliveira Machado', 'InformÃ¡tica', 304, '20121iif0175', '06533625365', 'Setor TÃ©cnico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `aluno` varchar(250) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `empresa` varchar(250) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `telefone` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `contratos`
--

INSERT INTO `contratos` (`id`, `aluno`, `cpf`, `matricula`, `empresa`, `cnpj`, `telefone`) VALUES
(28, 'Rennan Douglas de Oliveira Machado', '06533625365', '20121iif0175', 'Teste', '11111111000111', '32323232');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `ramo` varchar(100) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `rumuneracao` double NOT NULL,
  `duracao` varchar(25) NOT NULL,
  `carga` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `cnpj`, `ramo`, `telefone`, `rumuneracao`, `duracao`, `carga`) VALUES
(28, 'Teste', '11111111000111', 'Teste', '32323232', 500, '2 anos', '20 horas semanais');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `senha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `matricula` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `matricula`) VALUES
(1, 'SUPORTE', 'abe6db4c9f5484fae8d79f2e868a673c', '01032017'),
(2, 'Rennan Douglas', '37c66957bf4e74e6e28cd36f1016202a', '09032017');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de tabela `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
