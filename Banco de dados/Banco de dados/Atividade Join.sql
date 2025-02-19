CREATE DATABASE Atividade;
USE Atividade

CREATE TABLE Clientes(
	id_cliente INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100)
);
CREATE TABLE Pedidos(
	id_pedido INT PRIMARY KEY AUTO_INCREMENT, 
	id_cliente INT,
	data_pedido INT,
    FOREIGN KEY id_cliente REFERENCES Clientes(id)
);

INSERT INTO Clientes (nome) VALUES ("Carlos"), ("Ana"), ("Bruna"), ("Jessica"),("Victor"),("Fernanda");
INSERT INTO Pedidos (data_pedido) VALUES (3,1,0,0,1,2);

SELECT *FROM COUNT(*)

