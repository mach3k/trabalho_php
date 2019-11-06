-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 11-Out-2019 às 19:26
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `duracao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `nivel`, `duracao`) VALUES
(1, 'Tecnologia em Sistemas para Internet', 'Superior', '36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `nome` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `cargahoraria` int(11) DEFAULT NULL,
  `semestre` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `codigo`, `nome`, `cargahoraria`, `semestre`, `curso_id`) VALUES
(1, 'STB0301', 'Matemática Elementar', 60, 1, 1),
(2, 'STB0302', 'Inglês Instrumental', 60, 1, 1),
(3, 'STB0303', 'Introdução à Computação', 30, 1, 1),
(4, 'STB0304', 'Introdução à Programação Web', 60, 1, 1),
(5, 'STB0305', 'Algoritmos e Técnicas de Programação', 90, 1, 1),
(6, 'STB0306', 'Estrutura de Dados', 60, 2, 1),
(7, 'STB0307', 'Banco de Dados I', 60, 2, 1),
(8, 'STB0308', 'Sistemas Operacionais', 60, 2, 1),
(9, 'STB0309', 'Engenharia de Software I', 60, 2, 1),
(10, 'STB0310', 'Programação Web', 60, 2, 1),
(11, 'STB0311', 'Programação Orientada a Objetos I', 60, 3, 1),
(12, 'STB0312', 'Design Gráfico', 60, 3, 1),
(13, 'STB0313', 'Sociologia', 30, 3, 1),
(14, 'STB0314', 'Legislação Aplicada a Informática', 30, 3, 1),
(15, 'STB0315', 'Banco de Dados II', 60, 3, 1),
(16, 'STB0316', 'Fundamentos de Redes de Computadores', 60, 3, 1),
(17, 'STB0317', 'Gestão Empresarial', 30, 4, 1),
(18, 'STB0318', 'Programação Orientada a Objetos', 60, 4, 1),
(19, 'STB0319', 'Engenharia de Software II', 60, 4, 1),
(20, 'STB0320', 'Administração de Servidores', 60, 4, 1),
(21, 'STB0321', 'Filosofia da Tecnologia', 30, 4, 1),
(22, 'STB0322', 'Gerenciamento de Projetos', 60, 4, 1),
(23, 'STB0323', 'Programação para Dispositivos Móveis', 60, 5, 1),
(24, 'STB0324', 'Marketing Digital', 30, 5, 1),
(25, 'STB0325', 'Optativa I', 60, 5, 1),
(26, 'STB0326', 'Processos de Pesquisa em Tecnologias', 30, 5, 1),
(27, 'STB0327', 'Gestão e Inovação', 60, 5, 1),
(28, 'STB0328', 'Projeto Integrador I', 150, 5, 1),
(29, 'STB0329', 'Segurança da Informação', 60, 6, 1),
(30, 'STB0330', 'Optativa II', 60, 6, 1),
(31, 'STB0331', 'Tópicos Avançados em Programação Web', 60, 6, 1),
(32, 'STB0332', 'Web Services', 60, 6, 1),
(33, 'STB0333', 'Marketing Experiencial', 30, 6, 1),
(34, 'STB0334', 'Projeto Integrador II', 200, 6, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_professor`
--

CREATE TABLE `disciplina_professor` (
  `id_disciplina` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `disciplina_professor`
--

INSERT INTO `disciplina_professor` (`id_disciplina`, `id_professor`) VALUES
(16, 1),
(20, 1),
(29, 1),
(32, 1),
(15, 2),
(22, 2),
(25, 2),
(28, 2),
(34, 2),
(14, 3),
(23, 4),
(26, 5),
(30, 5),
(34, 5),
(12, 6),
(13, 7),
(9, 8),
(19, 8),
(2, 9),
(17, 11),
(27, 11),
(4, 12),
(10, 12),
(11, 12),
(18, 12),
(28, 12),
(31, 12),
(32, 12),
(34, 12),
(1, 13),
(3, 14),
(5, 14),
(5, 15),
(7, 17),
(8, 17),
(6, 18),
(21, 20),
(24, 21),
(33, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `foto` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `foto`) VALUES
(1, 'Alexandre de Aguiar Amaral', 'alexandre.amaral@ifc.edu.br', ''),
(2, 'André Fabiano de Moraes', 'andre.moraes@ifc.edu.br', NULL),
(3, 'Caroline Paula Verona e Freitas', 'caroline.freitas@ifc.edu.br', NULL),
(4, 'Daniel de Andrade Varela', 'daniel.varela@ifc.edu.br', NULL),
(5, 'Daniel Fernando Anderle', 'daniel.anderle@ifc.edu.br', NULL),
(6, 'Elisete da Silva', 'elisete.silva@ifc.edu.br', NULL),
(7, 'Fabio Alves dos Santos Dias', 'fabio.dias@ifc.edu.br', NULL),
(8, 'Joaquim M. M. Valverde', 'joaquim.valverde@ifc.edu.br', NULL),
(9, 'Luciana Colussi', 'luciana.colussi@ifc.edu.br', NULL),
(10, 'Mozara Dias Kohler', 'mozara.kohler@ifc.edu.br', NULL),
(11, 'Gianfranco da Silva Araújo', 'gianfranco.araujo@ifc.edu.br', NULL),
(12, 'Rafael de Moura Speroni', 'rafael.speroni@ifc.edu.br', NULL),
(13, 'Rafael Carlos Velez Benito', 'rafael.benito@ifc.edu.br', NULL),
(14, 'Karila Palma Silva', 'karila.silva@ifc.edu.br', NULL),
(15, 'Fabio Biff Goularte', 'fabio.goularte@ifc.edu.br', NULL),
(16, 'Jefferson Fernandes da Silva', 'jefferson.silva@ifc.edu.br', NULL),
(17, 'Rodrigo Ribeiro', 'rodrigo.ribeiro@ifc.edu.br', NULL),
(18, 'Marcelo Fernando Rauber', 'marcelo.rauber@ifc.edu.br', NULL),
(19, 'Lidiane Visintin', 'lidiane.visintin@ifc.edu.br', NULL),
(20, 'Everson Deon', 'everson.deon@ifc.edu.br', NULL),
(21, 'Elisangela da Silva Rocha', 'elisangela.rocha@ifc.edu.br', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_disciplina_curso_idx` (`curso_id`);

--
-- Indexes for table `disciplina_professor`
--
ALTER TABLE `disciplina_professor`
  ADD PRIMARY KEY (`id_disciplina`,`id_professor`),
  ADD KEY `fk_disciplina_has_professor_professor1_idx` (`id_professor`),
  ADD KEY `fk_disciplina_has_professor_disciplina1_idx` (`id_disciplina`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `fk_disciplina_curso` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplina_professor`
--
ALTER TABLE `disciplina_professor`
  ADD CONSTRAINT `fk_disciplina_has_professor_disciplina1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disciplina_has_professor_professor1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
