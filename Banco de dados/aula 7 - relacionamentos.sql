CREATE DATABASE relacionamentos;
USE relacionamentos;

 
-- one to one (um para um)
CREATE TABLE alunos(
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 turma VARCHAR(5)
);

CREATE TABLE contatos (
 id INT PRIMARY KEY AUTO_INCREMENT,
 telefone VARCHAR(20),
 aluno_id INT NOT NULL,
 FOREIGN KEY (aluno_id) REFERENCES alunos(id)
);

INSERT INTO contatos(telefone,aluno_id) VALUES ("(61) 994545965", "1");
INSERT INTO contatos(telefone,aluno_id) VALUES ("(61) 994545965", "1");
INSERT INTO contatos(telefone,aluno_id) VALUES ("(61) 997645136", "2");
INSERT INTO contatos(telefone,aluno_id) VALUES ("(61) 995941329", "3");
INSERT INTO contatos(telefone,aluno_id) VALUES ("(61) 995941329", "3");
INSERT INTO contatos(telefone,aluno_id) VALUES ("(61) 995941329", "3");



INSERT INTO alunos(nome,turma) VALUES ("Laura", "002M");
INSERT INTO alunos(nome,turma) VALUES ("Monica", "003V");
INSERT INTO alunos(nome,turma) VALUES ("Danielle", "003V");

SELECT * FROM alunos;
SELECT * FROM contatos;
SELECT * FROM contatos WHERE aluno_id = 1;
SELECT *, alunos.nome, alunos.turma, contatos.telefone FROM alunos JOIN contatos ON contatos.aluno_id;

-- ONE TO MANY
CREATE TABLE clientes(
id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100)
);
-- MACETE, QUEM É O ESTRAGEIRO E DE ONDE VEM 
CREATE TABLE pedidos(
  id INT PRIMARY KEY AUTO_INCREMENT,
   valorTotal FLOAT,
   cliente_id INT NOT NULL,
   FOREIGN KEY(cliente_id) REFERENCES cliente(id)
);
INSERT INTO clientes(nome)VALUES ("George");
INSERT INTO pedidos(valorTotal,clientes_id) VALUES ("90","1");
INSERT INTO pedidos(valorTotal,clientes_id) VALUES ("80","1");
INSERT INTO pedidos(valorTotal,clientes_id) VALUES ("100","1");






