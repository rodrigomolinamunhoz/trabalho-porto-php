-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jul-2019 às 23:07
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhao`
--

CREATE TABLE `caminhao` (
  `Id` int(11) NOT NULL,
  `Placa` varchar(7) NOT NULL,
  `TransportadoraId` int(11) NOT NULL,
  `Descarregou` tinyint(1) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caminhao`
--

INSERT INTO `caminhao` (`Id`, `Placa`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES
(12, '1234', 5, 0, 1),
(13, '9789789', 2, 0, 1),
(14, 'yrytrty', 2, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `container`
--

CREATE TABLE `container` (
  `Id` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `TransportadoraOrigemId` int(11) NOT NULL,
  `OrigemRemetente` int(11) NOT NULL,
  `TipoDestinatario` int(11) NOT NULL,
  `TransportadoraDestinoId` int(11) NOT NULL,
  `Matricula` int(11) DEFAULT NULL,
  `Placa` varchar(7) DEFAULT NULL,
  `DataEntrada` date NOT NULL,
  `DataSaida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fila_caminhao`
--

CREATE TABLE `fila_caminhao` (
  `Id` int(11) NOT NULL,
  `CaminhaoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fila_navio`
--

CREATE TABLE `fila_navio` (
  `Id` int(11) NOT NULL,
  `NavioId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fila_navio`
--

INSERT INTO `fila_navio` (`Id`, `NavioId`) VALUES
(1, 8),
(2, 9),
(3, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `navio`
--

CREATE TABLE `navio` (
  `Id` int(11) NOT NULL,
  `Matricula` varchar(7) NOT NULL,
  `TransportadoraId` int(11) NOT NULL,
  `Descarregou` tinyint(1) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `navio`
--

INSERT INTO `navio` (`Id`, `Matricula`, `TransportadoraId`, `Descarregou`, `Ativo`) VALUES
(8, 'xgfd', 2, 0, 0),
(9, 'ytyutyu', 2, 0, 1),
(11, 'kijoijo', 2, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `NomeCompleto` varchar(100) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `TipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `NomeCompleto`, `Login`, `Senha`, `TipoUsuario`) VALUES
(1, 'Tranportadora', 'transportadora', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Transportadora2', 'transportador2', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Transportadora3', 'transportador3', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(4, 'operador', 'Operador', 'e10adc3949ba59abbe56e057f20f883e', 2),
(5, 'Transportadora4', 'transportadora4', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caminhao`
--
ALTER TABLE `caminhao`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD KEY `FK_CAMINHAO_TRANSPORTADORA` (`TransportadoraId`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fila_caminhao`
--
ALTER TABLE `fila_caminhao`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_FILACAMINHAO_CAMINHAO` (`CaminhaoId`);

--
-- Indexes for table `fila_navio`
--
ALTER TABLE `fila_navio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_FILANAVIO_NAVIO` (`NavioId`);

--
-- Indexes for table `navio`
--
ALTER TABLE `navio`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Matricula` (`Matricula`),
  ADD KEY `FK_NAVIO_TRANSPORTADORA` (`TransportadoraId`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caminhao`
--
ALTER TABLE `caminhao`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fila_caminhao`
--
ALTER TABLE `fila_caminhao`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fila_navio`
--
ALTER TABLE `fila_navio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `navio`
--
ALTER TABLE `navio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `caminhao`
--
ALTER TABLE `caminhao`
  ADD CONSTRAINT `FK_CAMINHAO_TRANSPORTADORA` FOREIGN KEY (`TransportadoraId`) REFERENCES `usuario` (`Id`);

--
-- Limitadores para a tabela `fila_caminhao`
--
ALTER TABLE `fila_caminhao`
  ADD CONSTRAINT `FK_FILACAMINHAO_CAMINHAO` FOREIGN KEY (`CaminhaoId`) REFERENCES `caminhao` (`Id`);

--
-- Limitadores para a tabela `fila_navio`
--
ALTER TABLE `fila_navio`
  ADD CONSTRAINT `FK_FILANAVIO_NAVIO` FOREIGN KEY (`NavioId`) REFERENCES `navio` (`Id`);

--
-- Limitadores para a tabela `navio`
--
ALTER TABLE `navio`
  ADD CONSTRAINT `FK_NAVIO_TRANSPORTADORA` FOREIGN KEY (`TransportadoraId`) REFERENCES `usuario` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
