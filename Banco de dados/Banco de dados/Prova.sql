CREATE DATABASE loja;
USE loja;

 CREATE TABLE clientes(
 id_cliente INT PRIMARY KEY AUTO_INCREMENT,
 nome  VARCHAR(100) NOT NULL UNIQUE,
 email  VARCHAR(255) NOT NULL  UNIQUE ,
 telefone VARCHAR(25),
 endereco VARCHAR (100)
 );
 
 
 CREATE TABLE pedidos(
 id_pedido INT PRIMARY KEY AUTO_INCREMENT,
 id_cliente INT,
 data_pedido DATE,
 total DECIMAL(6,2),
 status_pedido VARCHAR(255),
 FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);
 
 
 CREATE TABLE fornecedores(
 id_fornecedor INT PRIMARY KEY AUTO_INCREMENT,
 nome_fornecedor  VARCHAR(100) NOT NULL,
 contato VARCHAR(100) NOT NULL,
 endereco VARCHAR (100)
);
 
 CREATE TABLE produtos(
 id_produto INT PRIMARY KEY AUTO_INCREMENT,
 nome_produto VARCHAR (255) NOT NULL  UNIQUE,
 preco DECIMAL(6,2),
 id_fornecedor INT,
 estoque INT,
 FOREIGN KEY (id_fornecedor) REFERENCES fornecedores(id_fornecedor)
);

CREATE TABLE pagamentos(
 id_pagamento INT PRIMARY KEY AUTO_INCREMENT,
 id_pedido INT,
 metodo_pagamento VARCHAR(100) NOT NULL,
 status_pagamento VARCHAR (255),
 valor_pago DECIMAL(6,2),
 FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido)
 );
 
 
 
 
