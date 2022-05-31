CREATE DATABASE IF NOT EXISTS `db_aula_tai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula_tai`;

-- Copiando estrutura para tabela db_aula_tai.usuario
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `sobrenome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `cpf` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone1` varchar(20) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `tipo_telefone1` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone2` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `tipo_telefone2` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `email` VARCHAR(200) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_aula_tai.usuario: ~6 rows (aproximadamente)
INSERT INTO `contato` (`id`, `nome`, `sobrenome`, `cpf`, `telefone1`, `tipo_telefone1`, `telefone2`, `tipo_telefone2`, `email`) VALUES
	(1, 'Jackson', 'Da Silva', '888888', '49 5555-0000', 'Casa', '49 5555-0000', 'Fixo', 'aleatorio@hotmail.com'),
	(2, 'Maria', 'Da Silva', '999999999999', '49 5555-0000', 'Casa', '49 5555-0000', 'Fixo', 'aleatorio2@hotmail.com'),
	(3, 'Jean', 'Da Silva', '444', '49 5555-0000', 'Casa', '49 5555-0000', 'Fixo', 'aleatorio3@hotmail.com'),
	(5, 'Chiquinha', 'Da Silva', '7777', '49 5555-0000', 'Casa', '49 5555-0000', 'Fixo', 'aleatorio4@hotmail.com'),
	(6, 'Kiko', 'Da Silva', '77777', '49 5555-0000', 'Casa', '49 5555-0000', 'Fixo', 'aleatorio5@hotmail.com');


CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `data_inicio` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `hora_inicio` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `data_fim` varchar(20) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `hora_fim` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `lugar` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `descricao` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `convidado_id` VARCHAR(200) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
)

-- Copiando dados para a tabela db_aula_tai.usuario: ~6 rows (aproximadamente)
INSERT INTO `agenda` (`id`, `titulo`, `data_inicio`, `hora_inicio`, `data_fim`, `hora_fim`, `lugar`, `descricao`, `convidado_id`) VALUES
	(1, 'Aniver','23', '3', '4', '6', 'Casa', 'Aniversário', '1'),
	(2, 'Aniver','23', '3', '4', '6', 'Casa', 'Aniversário', '2'),
	(3, 'Aniver','23', '3', '4', '6', 'Casa', 'Aniversário', '3'),
	(4, 'Aniver','23', '3', '4', '6', 'Casa', 'Aniversário', '4'),
	(5, 'Aniver','23', '3', '4', '6', 'Casa', 'Aniversário', '5');
	(6, 'Aniver','23', '3', '4', '6', 'Casa', 'Aniversário', '6');