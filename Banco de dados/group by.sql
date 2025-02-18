CREATE DATABASE JoinAula;
USE JoinAula;

CREATE TABLE pessoa(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100),
nacionalidade VARCHAR(5)
);

CREATE TABLE endereco (
id INT PRIMARY KEY AUTO_INCREMENT,
rua VARCHAR(255),
numero VARCHAR(100),
pessoa_id INT NOT NULL,
FOREIGN KEY (pessoa_id) REFERENCES pessoa(id)
);

INSERT INTO pessoa (nome, nacionalidade) VALUES ("Laura" , "BR");
INSERT INTO pessoa (nome, nacionalidade) VALUES ("Ana" , "USA");
INSERT INTO endereco(rua, numero, pessoa_id) VALUES ("Ceilandia P norte",  "QNQ 14",1);

-- INNER( INTERSENÇÃO OU "COMUM NAS DUAS COLUNAS")
SELECT pessoa.nome, endereco.rua FROM pessoa JOIN endereco ON pessoa.id = endereco.id;
-- RIGHT JOIN(JUNTA AS DUAS, PRIORIZADO A TABELA DA DIREITA)
SELECT pessoa.nome, endereco.rua FROM pessoa  RIGHT JOIN endereco ON pessoa.id = endereco.id;
-- LEFT JOIN(JUNTA AS DUAS, PRIORIZADO A TABELA DA ESQUERDA)
SELECT pessoa.nome, endereco.rua FROM pessoa  LEFT JOIN endereco ON pessoa.id = endereco.id;

USE employees;
SELECT * FROM employees;
SELECT * FROM dept_emp;

-- O QUE QUERO, DE ONDE , AGRUPAR QUEM?
SELECT gender AS genero, COUNT(gender) FROM employees GROUP BY gender;
SELECT dept_no, COUNT(dept_no) FROM dept_emp GROUP BY dept_no;
