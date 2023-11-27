-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/11/2023 às 05:46
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reservando`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `brindes`
--

CREATE TABLE `brindes` (
  `id_brinde` int(11) NOT NULL,
  `cod_brinde` varchar(255) NOT NULL,
  `status_brinde` varchar(255) NOT NULL,
  `usuario_idu` int(11) NOT NULL,
  `dataHoraCadastro` datetime DEFAULT NULL,
  `dataHoraColeta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `brindes`
--

INSERT INTO `brindes` (`id_brinde`, `cod_brinde`, `status_brinde`, `usuario_idu`, `dataHoraCadastro`, `dataHoraColeta`) VALUES
(53, '55543924', '2', 9, '2023-11-26 22:59:14', '2023-11-26 23:12:20'),
(55, '16328663', '1', 9, '2023-11-26 23:14:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargo`
--

CREATE TABLE `cargo` (
  `idc` int(11) NOT NULL,
  `ncargo` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `cargo`
--

INSERT INTO `cargo` (`idc`, `ncargo`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `id_status` int(11) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `estado`
--

INSERT INTO `estado` (`id_status`, `status`) VALUES
(1, 'PENDENTE'),
(2, 'EM ANDAMENTO'),
(3, 'FINALIZADO'),
(4, 'NÃO COMPARECEU');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horario`
--

CREATE TABLE `horario` (
  `idHorario` int(11) NOT NULL,
  `tempo` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `horario`
--

INSERT INTO `horario` (`idHorario`, `tempo`, `hora`) VALUES
(1, 'ALMOCO', '12:00 PM'),
(2, 'ALMOCO', '12:30 PM'),
(3, 'ALMOCO', '1:00 PM'),
(4, 'ALMOCO', '1:30 PM'),
(5, 'ALMOCO', '2:00 PM'),
(6, 'ALMOCO', '2:30 PM'),
(7, 'ALMOCO', '3:00 PM'),
(8, 'JANTAR', '6:00 PM'),
(9, 'JANTAR', '6:30 PM'),
(10, 'JANTAR', '7:00 PM'),
(11, 'JANTAR', '7:30 PM'),
(12, 'JANTAR', '8:00 PM'),
(13, 'JANTAR', '8:30 PM'),
(14, 'JANTAR', '9:00 PM'),
(15, 'JANTAR', '9:30 PM'),
(16, 'JANTAR', '10:00 PM'),
(17, 'JANTAR', '10:00 PM'),
(18, 'JANTAR', '10:30 PM'),
(19, 'JANTAR', '11:00 PM');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mesa`
--

CREATE TABLE `mesa` (
  `idm` int(11) NOT NULL,
  `quantidade` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `mesa`
--

INSERT INTO `mesa` (`idm`, `quantidade`) VALUES
(1, 40);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `idr` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fechar` date DEFAULT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado_id_status` int(11) NOT NULL,
  `usuario_idu` int(11) NOT NULL,
  `dataHoraCadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`idr`, `quantidade`, `fechar`, `tipo`, `hora`, `comentario`, `estado_id_status`, `usuario_idu`, `dataHoraCadastro`) VALUES
(26, 3, '2023-11-27', 'Almoco', '12:00 PM', 'Teste', 3, 9, '2023-11-26 22:55:44'),
(27, 3, '2023-11-27', 'Almoco', '12:30 PM', 'teste2', 3, 9, '2023-11-26 22:55:55'),
(28, 3, '2023-11-27', 'Jantar', '09:00 PM', 'teste3', 3, 9, '2023-11-26 22:56:03'),
(29, 3, '2023-11-27', 'Almoco', '12:00 PM', 'adasdadasdadas', 3, 9, '2023-11-26 23:13:21'),
(30, 3, '2023-11-27', 'Almoco', '12:00 PM', 't1xcasdc2', 3, 9, '2023-11-26 23:13:34'),
(31, 3, '2023-11-27', 'Almoco', '12:00 PM', '1312xcsd', 3, 9, '2023-11-26 23:13:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomes` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apelidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(20) NOT NULL,
  `numero` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direcao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pontos` int(30) NOT NULL,
  `estado_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo_idc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nomes`, `apelidos`, `dni`, `numero`, `fecha`, `email`, `direcao`, `password`, `pontos`, `estado_usuario`, `cargo_idc`) VALUES
(1, 'Vitor', 'Vitelo', 0, '984249222', '30/08/1997', 'admin@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 1),
(9, 'Mariana', 'Mari', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 420, 'ACTIVO', 2),
(10, 'Lucas', 'Lu', 71985652, '984249222', '2000-02-16', 'estefany@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2),
(11, 'Gabriela', 'Gabi', 71985653, '984249222', '1997-07-16', 'julio@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 30, 'ACTIVO', 2),
(12, 'Rafael', 'Rafa', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2),
(13, 'Fernanda', 'Nanda', 71985652, '984249222', '2000-02-16', 'estefany@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2),
(14, 'Gustavo', 'Gus', 71985653, '984249222', '1997-07-16', 'julio@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 30, 'ACTIVO', 2),
(15, 'Carolina', 'Carol', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2),
(16, 'Pedro', 'Peu', 71985652, '984249222', '2000-02-16', 'estefany@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2),
(17, 'Leticia', 'Leti', 71985653, '984249222', '1997-07-16', 'julio@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 30, 'ACTIVO', 2),
(18, 'Diego', 'Di', 0, '984249222', '30/08/1997', 'cliente@gmail.com', 'Jvlee', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'ACTIVO', 2),
(0, 'Vitor', 'Vitelo', 2147483647, '3123124124', '2002-05-28', 'hojejer128@dpsols.com', 'kajsdiqwjd918yn', '7c4a8d09ca3762af61e59520943dc26494f8941b', 10, 'ACTIVO', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `brindes`
--
ALTER TABLE `brindes`
  ADD PRIMARY KEY (`id_brinde`);

--
-- Índices de tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idc`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices de tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idHorario`);

--
-- Índices de tabela `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`idm`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `fk_solicitud_estado1_idx` (`estado_id_status`),
  ADD KEY `fk_solicitud_usuario1_idx` (`usuario_idu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `brindes`
--
ALTER TABLE `brindes`
  MODIFY `id_brinde` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
