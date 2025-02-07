CREATE DATABASE correcao_cadastro;
USE correcao_cadastro;
CREATE TABLE pessoas(nome VARCHAR(100),rg INT(20),cpf INT(20),idade INT(4));
ALTER TABLE pessoas ADD saldo decimal(6,2);