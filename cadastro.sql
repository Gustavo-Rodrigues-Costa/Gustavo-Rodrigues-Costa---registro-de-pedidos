-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2022 às 05:37
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `pedido` varchar(300) NOT NULL,
  `nome_cliente` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(200) DEFAULT NULL,
  `email_cliente` varchar(200) DEFAULT NULL,
  `sexo` char(10) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `endereço` varchar(220) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `pedido`, `nome_cliente`, `sobrenome`, `email_cliente`, `sexo`, `data_nasc`, `pais`, `endereço`, `cidade`, `estado`, `telefone`) VALUES
(1, 'Fones - AirPods', 'Greg', 'Ferreira de Lima', 'Greg@microsoft.com', 'Masculino', '2000-10-12', 'Brazil', 'R. João Freitas dos Santos	', 'Taubaté	', 'SP', '(12) 987019280'),
(2, 'Controle-PS5', 'Leandro', 'Gonçales', 'leandro@microsoft.com', 'Masculino', '1998-10-24', 'USA', 'James Petterson Street', 'Jersey City', 'New Jersey', '(110) 982280129'),
(3, 'Policorte', 'Erick', 'de Souza Alves', 'erickdesouza@gmail.com', 'Masculino', '1990-10-02', 'Brazil', 'R. Matheus Gomes de Oliveira', 'São Paulo', 'SP', '(11) 988761290'),
(4, 'Kit chave catraca', 'Luis', 'Fernando', 'luisbragag@gmail.com', 'Masculino', '2000-09-24', 'USA', 'Jerredy Molden Street', 'Miami', 'Flórida', '(110) 957019280'),
(5, 'Máquina de Solda', 'Tiago', ' ', 'tiago@gmail.com', 'Masculino', '1990-10-07', 'Brazil', 'R. Gonalves', 'São José dos Campos', 'SP', '(11) 983280129'),
(6, 'Repetidor Wireless', 'Felipe', ' ', 'felipe@gmail.com', 'Masculino', '1990-10-24', 'Brazil', 'R. Dinho Alves', 'São Paulo', 'SP', '(11) 988345290'),
(7, 'Furadeira', 'Gabriel', ' ', 'gabriel@gmail.com', 'Masculino', '2000-07-24', 'Brazil', 'R. Jonas Galileu', 'Caçapava	', 'SP', '(12) 987017650'),
(8, 'Cronômetro', 'Miguel', '', 'miguel@microsoft.com', 'Masculino', '2000-10-24', 'USA', 'Petterson Salvage', 'Jersey City', 'New Jersey', '(110) 988760129'),
(9, 'Termõmetro', 'Vitor', 'Matos', 'vitormatos@gmail.com', 'Masculino', '2002-04-24', 'Brazil', 'Av. Peitro Torres', 'Taubaté', 'SP', '(11) 987623290'),
(11, 'Lixadeira', 'Pedro', 'Monteiro', 'pedro@gmail.com', 'Masculino', '2001-09-01', 'Brazil', 'R. Rafael Guimarães', 'São Paulo', 'SP', '(11) 987564880');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email_login` varchar(142) NOT NULL,
  `senha_login` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `email_login`, `senha_login`) VALUES
(0, 'teste@teste.com', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_nasc`) VALUES
(1, 'Greg Ferreira de Lima', 'Greg@microsoft.com', '123456', '2000-10-12'),
(2, 'Leandro Gonçales ', 'leandro@microsoft.com', '398432', '1998-10-24'),
(3, 'Erick de Souza Alves', 'erickdesouza@gmail.com', '28374423', '1990-10-02'),
(4, 'Luis Fernando', 'Luisbraga@gmail.com', '35734547', '2000-09-24'),
(5, 'Tiago', 'tiago@gmail.com', '435667', '1990-10-07'),
(6, 'Felipe', 'felipe@gmail.com', '238472374', '1990-10-24'),
(7, 'Gabriel', 'gabriel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-07-24'),
(8, 'Miguel', 'miguel@microsoft.com', '202cb962ac59075b964b07152d234b70', '2000-10-24'),
(9, 'Vitor Matos', 'vitormatos@gmail.com', '238473243', '2002-04-24'),
(11, 'Pedro Monteiro', 'pedro@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2001-09-01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_cliente` (`email_cliente`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
