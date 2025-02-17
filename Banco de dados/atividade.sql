create database Total_de_vendas;
use Total_de_vendas;

create table Vendas( 
id_venda INT PRIMARY KEY AUTO_INCREMENT,
id_produto INT,
quantidade INT, 
preco_unitario DECIMAL(6,2), 
id_categoria INT
);

