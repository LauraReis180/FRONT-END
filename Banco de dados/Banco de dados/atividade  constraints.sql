create database Banco;
use Banco;

CREATE TABLE contas (
    id INT PRIMARY KEY NOT NULL,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    saldo DECIMAL(6,2) NOT NULL,
    dataNas VARCHAR(100)
);
insert into contas(id,nome,sobrenome,saldo,dataNas) values (1, "Laura", "Reis",150.00,"18/06/2006");
insert into contas(id,nome,sobrenome,saldo,dataNas) values (2, "Lorrany", "Oliveira",130.00,"18/08/2002");
insert into contas(id,nome,sobrenome,saldo,dataNas) values (3, "Liz", "Santos", 150.00,"20/06/2000");
