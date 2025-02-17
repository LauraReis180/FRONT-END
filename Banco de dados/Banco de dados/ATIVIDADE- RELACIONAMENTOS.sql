CREATE  DATABASE LivrariaDB;
Use LivrariaDB;

CREATE TABLE Autores(
id_autor INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (100) NOT NULL,
nacionalidade  VARCHAR(100)
);

CREATE TABLE Livros(
id_livro INT PRIMARY KEY AUTO_INCREMENT,
titulo VARCHAR(100)NOT NULL,
ano_publicacao INT,
id_autor  INT,
FOREIGN KEY (id_autor) REFERENCES Autores(Id_autor)
);

INSERT INTO Autores(id_autor, nome, nacionalidade) VALUES (1, "Clarice Lispector", "Brasileira"),(2, 'Machado De Assis', 'Brasileiro'),(3,"John Green", 'Estadunidense');

INSERT INTO Autores(id_livro,titulo,ano_publicado,id_autor) VALUES("A Hora da Estrela", 1977, 1),("A Culpa é das Estrelas", 2012, 3), ("Quem é Você, Alasca?", 2005, 3),("Dom Casmurro", 1899,3),("Memórias Póstumas de Brás Cubas", 1881,3);  

SELECT Livros.titulo, Livros.ano_publicacao, Autores.nome_autor
FROM Livros
JOIN Autores ON Livros.id_autor = Autores.id_autor;




