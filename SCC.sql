-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela scc.movimento_gs
CREATE TABLE IF NOT EXISTS `movimento_gs` (
  `movimentoGs_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('E','S') DEFAULT NULL,
  `motivo` varchar(150) NOT NULL DEFAULT '',
  `valor` double NOT NULL,
  `data` date NOT NULL,
  KEY `movimentoGs_id` (`movimentoGs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scc.movimento_gs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `movimento_gs` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimento_gs` ENABLE KEYS */;

-- Copiando estrutura para tabela scc.movimento_rs
CREATE TABLE IF NOT EXISTS `movimento_rs` (
  `movimentoRs_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` enum('E','S') DEFAULT NULL,
  `motivo` varchar(150) NOT NULL,
  `valor` double NOT NULL DEFAULT '0',
  `data` date NOT NULL,
  KEY `movimentoRs_id` (`movimentoRs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scc.movimento_rs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `movimento_rs` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimento_rs` ENABLE KEYS */;

-- Copiando estrutura para tabela scc.movimento_us
CREATE TABLE IF NOT EXISTS `movimento_us` (
  `movimentoUs_id` int(11) DEFAULT NULL,
  `tipo` enum('E','S') DEFAULT NULL,
  `motivo` varchar(150) NOT NULL,
  `valor` double NOT NULL,
  `data` date NOT NULL,
  KEY `movimentoUs_id` (`movimentoUs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scc.movimento_us: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `movimento_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimento_us` ENABLE KEYS */;

-- Copiando estrutura para tabela scc.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela scc.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usuario_id`, `usuario`, `senha`) VALUES
	(1, 'lucas', '123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
