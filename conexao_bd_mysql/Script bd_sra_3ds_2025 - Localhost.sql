--  Atualizado: 28/04/2025


-- Banco de dados: `bd_sra_3ds_2025`
--
DROP DATABASE IF EXISTS `bd_sra_3ds_2025`;
CREATE DATABASE IF NOT EXISTS `bd_sra_3ds_2025` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_sra_3ds_2025`;

-- Estrutura para tabela `tb_alunos`


DROP TABLE IF EXISTS `tb_alunos`;
CREATE TABLE `tb_alunos` (
  `alu_codigo` int(10) NOT NULL,
  `alu_nome` varchar(60) DEFAULT NULL,
  `alu_endereco` varchar(60) DEFAULT NULL,
  `alu_telefone` varchar(15) DEFAULT NULL,
  `alu_celular` varchar(15) DEFAULT NULL,
  `alu_email` varchar(60) DEFAULT NULL,
  `alu_data_nascimento` varchar(15) DEFAULT NULL,
  `alu_rg` varchar(15) DEFAULT NULL,
  `alu_cpf` varchar(15) DEFAULT NULL,
  `alu_cod_turma` varchar(5) DEFAULT NULL,
  `alu_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`alu_codigo`);

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `alu_codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


