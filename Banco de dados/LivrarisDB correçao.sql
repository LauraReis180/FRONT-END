CREATE DATABASE LivrariaDB_correcao;
USE LivrariaDB_correcao;

CREATE TABLE Autores(
  id_autor INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR (100) NOT NULL,
  nacionalidade  VARCHAR(50)
);

CREATE TABLE Livros(
id_livro INT PRIMARY KEY AUTO_INCREMENT,
titulo VARCHAR(255)NOT NULL,
ano_publicacao YEAR,
id_autor_do_livro  INT NOT NULL,
FOREIGN KEY (id_autor_do_livro) REFERENCES Autores(Id_autor)
);


INSERT INTO Autores(nome, nacionalidade) VALUES ( "Augusto Cuya", "Brasileiro");
INSERT INTO Autores(nome, nacionalidade) VALUES ( "Rick Riordan", "Americano");

INSERT INTO Livros (titulo, ano_publicacao, id_autor_do_livro) VALUES ("Percy Jackson cap1", "2010",2 );
INSERT INTO Livros (titulo, ano_publicacao, id_autor_do_livro) VALUES ("Percy Jackson cap2", "2010",2 );
INSERT INTO Livros (titulo, ano_publicacao, id_autor_do_livro) VALUES ("Percy Jackson cap3", "2010",2 );
INSERT INTO Livros (titulo, ano_publicacao, id_autor_do_livro) VALUES ("Percy Jackson cap4", "2010",2 );
INSERT INTO Livros (titulo, ano_publicacao, id_autor_do_livro) VALUES ("Vendedor de sonhos", "2008",1 );

CREATE TABLE livros_autores(
  id_autor INT NOT NULL,
  id_livro INT NOT NULL,
  FOREIGN KEY (id_autor) REFERENCES Autores(Id_autor),
  FOREIGN KEY (id_livro) REFERENCES Autores(Id_livro)
  );
  
SELECT * FROM livros_autores;

INSERT INTO livros_autores(id_autor,id_livro) VALUES (1,1);
INSERT INTO livros_autores(id_autor,id_livro) VALUES (2,2);
INSERT INTO livros_autores(id_autor,id_livro) VALUES (2,3);
INSERT INTO livros_autores(id_autor,id_livro) VALUES (2,4);
 