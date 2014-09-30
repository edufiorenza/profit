# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: mydb
# Generation Time: 2014-09-30 11:36:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aerobios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aerobios`;

CREATE TABLE `aerobios` (
  `cod_aerobios` int(11) NOT NULL AUTO_INCREMENT,
  `cod_exercicios` int(11) DEFAULT NULL,
  `tempo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_aerobios`),
  KEY `fk_aerobios_exercicios_idx` (`cod_exercicios`),
  CONSTRAINT `fk_aerobios_exercicios` FOREIGN KEY (`cod_exercicios`) REFERENCES `exercicios` (`cod_exercicios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table alimentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alimentos`;

CREATE TABLE `alimentos` (
  `cod_alimentos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_alimentos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `alimentos` WRITE;
/*!40000 ALTER TABLE `alimentos` DISABLE KEYS */;

INSERT INTO `alimentos` (`cod_alimentos`, `descricao`)
VALUES
	(1,'Esteira'),
	(2,'Aipim'),
	(3,'Leite desnatado'),
	(4,'Batata Branca'),
	(5,'Teste');

/*!40000 ALTER TABLE `alimentos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table alunos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alunos`;

CREATE TABLE `alunos` (
  `cod_alunos` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pessoas` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`cod_alunos`),
  KEY `fk_alunos_pessoas_idx` (`cod_pessoas`),
  CONSTRAINT `fk_alunos_pessoas` FOREIGN KEY (`cod_pessoas`) REFERENCES `pessoas` (`cod_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table alunos_nutricionistas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alunos_nutricionistas`;

CREATE TABLE `alunos_nutricionistas` (
  `cod_alunos` int(11) NOT NULL,
  `cod_nutricionistas` int(11) NOT NULL,
  `data_inclusao` datetime DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_alunos`,`cod_nutricionistas`),
  KEY `fk_alunonutricionistas2_idx` (`cod_nutricionistas`),
  CONSTRAINT `fk_alunonutricionistas` FOREIGN KEY (`cod_alunos`) REFERENCES `alunos` (`cod_alunos`),
  CONSTRAINT `fk_alunonutricionistas2` FOREIGN KEY (`cod_nutricionistas`) REFERENCES `nutricionistas` (`cod_nutricionistas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table alunos_professores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alunos_professores`;

CREATE TABLE `alunos_professores` (
  `cod_professores` int(11) NOT NULL,
  `cod_alunos` int(11) NOT NULL,
  `data_inclusao` datetime DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`cod_professores`,`cod_alunos`),
  KEY `fk_alunosprofessores_idx` (`cod_alunos`),
  CONSTRAINT `fk_alunosprofessores` FOREIGN KEY (`cod_alunos`) REFERENCES `alunos` (`cod_alunos`),
  CONSTRAINT `fk_alunosprofessores2` FOREIGN KEY (`cod_professores`) REFERENCES `professores` (`cod_professores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table anaerobios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `anaerobios`;

CREATE TABLE `anaerobios` (
  `cod_anaerobios` int(11) NOT NULL AUTO_INCREMENT,
  `cod_exercicios` int(11) DEFAULT NULL,
  `series` varchar(45) DEFAULT NULL,
  `repeticoes` varchar(45) DEFAULT NULL,
  `carga` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_anaerobios`),
  KEY `fk_anaerobios_exercicios_idx` (`cod_exercicios`),
  CONSTRAINT `fk_anaerobios_exercicios` FOREIGN KEY (`cod_exercicios`) REFERENCES `exercicios` (`cod_exercicios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table aparelhos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aparelhos`;

CREATE TABLE `aparelhos` (
  `cod_aparelhos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_aparelhos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `aparelhos` WRITE;
/*!40000 ALTER TABLE `aparelhos` DISABLE KEYS */;

INSERT INTO `aparelhos` (`cod_aparelhos`, `descricao`)
VALUES
	(1,'Esteira'),
	(2,'Voador'),
	(3,'Bicicleta Ergométrica'),
	(4,'Teste 3'),
	(5,'Supino');

/*!40000 ALTER TABLE `aparelhos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cidades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cidades`;

CREATE TABLE `cidades` (
  `cod_cidades` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `cod_estados` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_cidades`),
  KEY `fk_cidades_estados_idx` (`cod_estados`),
  CONSTRAINT `fk_cidades_estados` FOREIGN KEY (`cod_estados`) REFERENCES `estados` (`cod_estados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table dietas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dietas`;

CREATE TABLE `dietas` (
  `cod_dietas` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `cod_alunos` int(11) DEFAULT NULL,
  `nutricionista_responsavel` char(1) DEFAULT 'N',
  PRIMARY KEY (`cod_dietas`),
  KEY `fk_dietas_alunos_idx` (`cod_alunos`),
  CONSTRAINT `fk_dietas_alunos` FOREIGN KEY (`cod_alunos`) REFERENCES `alunos` (`cod_alunos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table estados
# ------------------------------------------------------------

DROP TABLE IF EXISTS `estados`;

CREATE TABLE `estados` (
  `cod_estados` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `sigla` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`cod_estados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table exercicios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `exercicios`;

CREATE TABLE `exercicios` (
  `cod_exercicios` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `tipo_exercicio` char(1) DEFAULT NULL,
  `cod_aparelhos` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_exercicios`),
  KEY `fk_exercicios_aparelhos_idx` (`cod_aparelhos`),
  CONSTRAINT `fk_exercicios_aparelhos` FOREIGN KEY (`cod_aparelhos`) REFERENCES `aparelhos` (`cod_aparelhos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `exercicios` WRITE;
/*!40000 ALTER TABLE `exercicios` DISABLE KEYS */;

INSERT INTO `exercicios` (`cod_exercicios`, `descricao`, `tipo_exercicio`, `cod_aparelhos`)
VALUES
	(1,'Corrida','A',1),
	(2,'Bicicleta','A',3),
	(3,'Voador Invertido','M',2),
	(4,'Supino Inclinado Barra','M',5),
	(5,'Novo Exercício','A',2);

/*!40000 ALTER TABLE `exercicios` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nutricionistas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nutricionistas`;

CREATE TABLE `nutricionistas` (
  `cod_nutricionistas` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pessoas` int(11) DEFAULT NULL,
  `crn` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_nutricionistas`),
  KEY `fk_nutricionistas_pessoas_idx` (`cod_pessoas`),
  CONSTRAINT `fk_nutricionistas_pessoas` FOREIGN KEY (`cod_pessoas`) REFERENCES `pessoas` (`cod_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pessoas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pessoas`;

CREATE TABLE `pessoas` (
  `cod_pessoas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cpfcnpj` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `ultimo_acesso` datetime DEFAULT NULL,
  `ip` varchar(25) DEFAULT NULL,
  `administrador` char(1) DEFAULT 'N',
  PRIMARY KEY (`cod_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;

INSERT INTO `pessoas` (`cod_pessoas`, `nome`, `cpfcnpj`, `email`, `senha`, `data_cadastro`, `ultimo_acesso`, `ip`, `administrador`)
VALUES
	(1,'Eduardo Dornelles','00527310069','eduardornelles@gmail.com','14e1b600b1fd579f47433b88e8d85291',NULL,NULL,NULL,'S');

/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pessoascontatos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pessoascontatos`;

CREATE TABLE `pessoascontatos` (
  `cod_pessoascontatos` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pessoas` int(11) DEFAULT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_pessoascontatos`),
  KEY `fk_contatos_pessoas_idx` (`cod_pessoas`),
  CONSTRAINT `fk_contatos_pessoas` FOREIGN KEY (`cod_pessoas`) REFERENCES `pessoas` (`cod_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pessoasenderecos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pessoasenderecos`;

CREATE TABLE `pessoasenderecos` (
  `cod_pessoasenderecos` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pessoas` int(11) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cod_cidades` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_pessoasenderecos`),
  KEY `fk_enderecos_pessoas_idx` (`cod_pessoas`),
  KEY `fk_enderecos_cidades_idx` (`cod_cidades`),
  CONSTRAINT `fk_enderecos_cidades` FOREIGN KEY (`cod_cidades`) REFERENCES `cidades` (`cod_cidades`),
  CONSTRAINT `fk_enderecos_pessoas` FOREIGN KEY (`cod_pessoas`) REFERENCES `pessoas` (`cod_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table professores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `professores`;

CREATE TABLE `professores` (
  `cod_professores` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pessoas` int(11) DEFAULT NULL,
  `cref` varchar(45) DEFAULT NULL,
  `academia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_professores`),
  KEY `fk_professores_pessoas_idx` (`cod_pessoas`),
  CONSTRAINT `fk_professores_pessoas` FOREIGN KEY (`cod_pessoas`) REFERENCES `pessoas` (`cod_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table receitas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `receitas`;

CREATE TABLE `receitas` (
  `cod_receitas` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `ingredientes` text,
  `preparo` text,
  `calorias` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`cod_receitas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table refeicoes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `refeicoes`;

CREATE TABLE `refeicoes` (
  `cod_refeicoes` int(11) NOT NULL AUTO_INCREMENT,
  `cod_dietas` int(11) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_refeicoes`),
  KEY `fk_refeicoes_dietas_idx` (`cod_dietas`),
  CONSTRAINT `fk_refeicoes_dietas` FOREIGN KEY (`cod_dietas`) REFERENCES `dietas` (`cod_dietas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table refeicoes_alimentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `refeicoes_alimentos`;

CREATE TABLE `refeicoes_alimentos` (
  `cod_refeicoes` int(11) NOT NULL,
  `cod_alimentos` int(11) NOT NULL,
  PRIMARY KEY (`cod_refeicoes`,`cod_alimentos`),
  KEY `fk_refeicoesitens_alimentos_idx` (`cod_alimentos`),
  CONSTRAINT `fk_refeicoesitens_alimentos` FOREIGN KEY (`cod_alimentos`) REFERENCES `alimentos` (`cod_alimentos`),
  CONSTRAINT `fk_refeicoesitens_refeicoes` FOREIGN KEY (`cod_refeicoes`) REFERENCES `refeicoes` (`cod_refeicoes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table refeicoes_receitas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `refeicoes_receitas`;

CREATE TABLE `refeicoes_receitas` (
  `cod_refeicoes` int(11) NOT NULL,
  `cod_receitas` int(11) NOT NULL,
  PRIMARY KEY (`cod_refeicoes`,`cod_receitas`),
  KEY `fk_refeicoesreceitas_receitas_idx` (`cod_receitas`),
  CONSTRAINT `fk_refeicoesreceitas_receitas` FOREIGN KEY (`cod_receitas`) REFERENCES `receitas` (`cod_receitas`),
  CONSTRAINT `fk_refeicoesreceitas_refeicoes` FOREIGN KEY (`cod_refeicoes`) REFERENCES `refeicoes` (`cod_refeicoes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table treinos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `treinos`;

CREATE TABLE `treinos` (
  `cod_treinos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `cod_alunos` int(11) DEFAULT NULL,
  `professor_responsavel` char(1) DEFAULT 'N',
  PRIMARY KEY (`cod_treinos`),
  KEY `fk_treinos_alunos_idx` (`cod_alunos`),
  CONSTRAINT `fk_treinos_alunos` FOREIGN KEY (`cod_alunos`) REFERENCES `alunos` (`cod_alunos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table treinos_exercicios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `treinos_exercicios`;

CREATE TABLE `treinos_exercicios` (
  `cod_treinos` int(11) NOT NULL,
  `cod_exercicios` int(11) NOT NULL,
  PRIMARY KEY (`cod_treinos`,`cod_exercicios`),
  KEY `fk_treinosexercicios_exercicios_idx` (`cod_exercicios`),
  CONSTRAINT `fk_treinosexercicios_exercicios` FOREIGN KEY (`cod_exercicios`) REFERENCES `exercicios` (`cod_exercicios`),
  CONSTRAINT `fk_treinosexercicios_treinos` FOREIGN KEY (`cod_treinos`) REFERENCES `treinos` (`cod_treinos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
