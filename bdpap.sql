-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2023 às 13:10
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdpap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `User` varchar(50) NOT NULL,
  `Pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`User`, `Pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios1`
--

CREATE TABLE `horarios1` (
  `Nrsala` int(11) NOT NULL,
  `Codhora` varchar(11) NOT NULL,
  `segunda` varchar(20) NOT NULL,
  `terca` varchar(20) NOT NULL,
  `quarta` varchar(20) NOT NULL,
  `quinta` varchar(20) NOT NULL,
  `sexta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `horarios1`
--

INSERT INTO `horarios1` (`Nrsala`, `Codhora`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`) VALUES
(227, '08:30-09:15', '12GPSI - ABC', '', '', '12GPSI - FQ', '12GPSI - RC/PSI'),
(227, '09:15-10:00', '12GPSI - FQ', '12GPSI - PSI', '12GPSI - PSI', '12GPSI - FQ', '12GPSI - RC/PSI'),
(227, '10:15-11:00', '12GPSI - MAT', '12GPSI - EF', '12GPSI - SO', '12GPSI - AI', '12GPSI - RC/PSI'),
(227, '11:00-11:45', '12GPSI - MAT', '12GPSI - EF', '12GPSI - SO', '12GPSI - AI', '12GPSI - RC/PSI'),
(227, '11:55-12:40', '12GPSI - AI', '12GPSI - PORT', '12GPSI - PORT', '12GPSI - PORT', '12GPSI - RC/PSI'),
(227, '12:40-13:25', '12GPSI - AI', '12GPSI - PORT', '12GPSI - PORT', '12GPSI - PORT', '12GPSI - RC/PSI'),
(227, '13:40-14:25', '', '', '', '', ''),
(227, '14:25-15:10', '', '', '', '', ''),
(227, '15:25-16:10', '', '12GPSI - RC', '', '12GPSI - PSI', '12GPSI - MAT'),
(227, '16:10-16:55', '', '12GPSI - RC', '', '12GPSI - PSI', '12GPSI - MAT'),
(227, '17:00-17:45', '', '12GPSI - ING', '', '12GPSI - MAT', ''),
(227, '17:45-18:30', '', '12GPSI - ING', '', '', ''),
(244, '08:30-09:15', '12GPSI - PORT', '11F - ING', '12B - PORT', '11F - FQ', ''),
(244, '09:15-10:00', '12A - MAT', '', '12B - PORT', '11F - FQ', '11GPSI - RC'),
(244, '10:15-11:00', '12A - PORT', '12E - EF', '12B - PSI', '10A - PORT', '11GPSI - RC'),
(244, '11:00-11:45', '12A - PORT', '12E - EF', '12B - PSI', '10A - PORT', '11GPSI - RC'),
(244, '11:55-12:40', '', '', '11C - MAT', '10A - ING', '11GPSI - PORT'),
(244, '12:40-13:25', '', '', '11C - MAT', '10A - ING', '11GPSI - PORT'),
(244, '13:40-14:25', '', '', '', '10F - FQ', '12A - PORT'),
(244, '14:25-15:10', '', '', '', '10F - FQ', '12A - PORT'),
(244, '15:25-16:10', '', '', '', '11D - FQ', ''),
(244, '16:10-16:55', '', '', '', '11D - FQ', ''),
(244, '17:00-17:45', 'bbbb', '', '', '', ''),
(244, '17:45-18:30', 'asaaaa', '', '', '', 'aaaa'),
(999, '08:30-09:15', 'teste', 'teste', 'teste', 'teste', 'teste'),
(999, '09:15-10:00', '', '', '', '', ''),
(999, '10:15-11:00', '', '', '', '', ''),
(999, '11:00-11:45', '', '', '', '', ''),
(999, '11:55-12:40', '', '', '', '', ''),
(999, '12:40-13:25', '', '', '', '', ''),
(999, '13:40-14:25', '', '', '', '', ''),
(999, '14:25-15:10', '', '', '', '', ''),
(999, '15:25-16:10', '', '', '', '', ''),
(999, '16:10-16:55', '', '', '', '', ''),
(999, '17:00-17:45', '', '', '', '', ''),
(999, '17:45-18:30', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `NifProf` varchar(9) NOT NULL,
  `Morada` varchar(70) NOT NULL,
  `Telemovel` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Codpostal` varchar(8) NOT NULL,
  `User` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`NifProf`, `Morada`, `Telemovel`, `Email`, `Codpostal`, `User`) VALUES
('100100100', 'Rua Lousada', '919223481', 'pedro123@gmail.com', '4620566', '100'),
('111111111', 'Rua 1786', '919772772', 'aaa', '1234-431', 'Nelson Bessa'),
('123123123', 'Rua Lousada', '919232878', 'miguel123@gmail.com', '4620566', 'Joao'),
('123456789', 'Rua Lousada', '919223481', 'pedro123@gmail.com', '4620566', 'paulo'),
('222222222', 'Rua 123', '919919123', 'joel@gmail.com', '4620734', '222'),
('263239390', 'Rua Lousada', '919919919', 'pedrocosta@gmail.com', '4620566', 'paulo'),
('333333333', 'Rua Lousada', '919919919', 'pedrocosta@gmail.com', '4620566', '333'),
('333444555', 'rua 123', '111222333', 'paulo', '1234-123', 'Isabel'),
('351123456', 'Rua Lousada', '919232878', 'pedrocosta@gmail.com', '4620566', 'pedro'),
('444444444', 'Rua Lousada', '919223481', 'pedro123@gmail.com', '4620566', '333');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`User`);

--
-- Índices para tabela `horarios1`
--
ALTER TABLE `horarios1`
  ADD PRIMARY KEY (`Nrsala`,`Codhora`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`NifProf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
