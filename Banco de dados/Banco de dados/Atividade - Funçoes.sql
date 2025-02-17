CREATE DATABASE atividade;
USE atividade;

CREATE TABLE Vendas(
id_venda INT PRIMARY KEY AUTO_INCREMENT,
id_produto INT, 
quantidade INT , 
preco_unitario DECIMAL(6,2), 
id_categoria INT
);
INSERT INTO Vendas (id_venda, id_produto, quantidade, preco_unitario, id_categoria) VALUES (1, 5, 2, 10.00, 4), (2, 6, 3, 16.50, 3), (3, 7, 4, 29.99, 2),(4, 8, 1, 18.00, 4);

SELECT  
    id_categoria,
    SUM(quantidade * preco_unitario) AS TotalDeVendas
    FROM  Vendas
GROUP BY id_categoria;

CREATE TABLE produtos(
 id_produto INT PRIMARY KEY AUTO_INCREMENT, 
 nome_produto VARCHAR (100), 
 preco DECIMAL(6,2), 
 estoque INT
 );
 
INSERT INTO produtos(id_produto, nome_produto, preco, estoque) VALUES (1, "Smartphone", 1500.00, 10), (2, "Smartwatch", 300.00, 15),(3, "Televisao", 4000.00, 17);
  
SELECT id_produto,nome_produto FROM produtos WHERE nome_produto LIKE "%Smart%";

CREATE TABLE Clientes(
  id_cliente INT PRIMARY KEY AUTO_INCREMENT, 
  nome_cliente VARCHAR(100), 
  estado VARCHAR (100)
  );
  
  INSERT INTO Clientes (id_cliente, nome_cliente, estado) VALUES (1, "Fernando", 'SP'),(2, "Laura", 'DF'),(3, "Ana", 'RJ'),(4,"Lorrany", 'MG'),(5,"Gustavo", 'RJ'),(6,"Carlos", 'SP'), (7,"Janny", 'SP'),(8,"Beatriz", 'MG');

SELECT estado FROM Clientes WHERE estado IN ('SP', 'RJ','MG');



  
  
 
 




