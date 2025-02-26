CREATE DATABASE revisaoCorrecao;
USE revisaoCorrecao;

CREATE TABLE Aluno( 
id_aluno INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR(100) NOT NULL UNIQUE,
email VARCHAR(255) NOT NULL UNIQUE,
data_nascimento DATE
);

SELECT * FROM Aluno;
INSERT INTO Aluno (nome,email,data_nascimento) VALUES ("Laura", "laurareis123@gmail.com","2006/06/18");

CREATE TABLE Professor( 
id_professor INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR(100) NOT NULL UNIQUE,
email VARCHAR(255) NOT NULL UNIQUE,
especialidade VARCHAR(50)
);

SELECT * FROM Professor;
INSERT INTO Professor (nome,email,especialidade) VALUES ("Laura", "laurareis123@gmail.com","FRONT END");

CREATE TABLE Curso( 
id_professor INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR(100) NOT NULL UNIQUE,
email VARCHAR(255) NOT NULL UNIQUE,
especialidade VARCHAR(50)
);


CREATE TABLE Curso( 
id_curso INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR(100),
descricao VARCHAR(255),
id_professor INT NOT NULL,
FOREIGN KEY (id_professor) REFERENCES Professor(id_professor)
);

CREATE TABLE Matricula( 
id_matricula INT PRIMARY KEY AUTO_INCREMENT, 
id_aluno INT NOT NULL,
id_curso INT NOT NULL,
data_matricula DATE,
FOREIGN KEY (id_aluno) REFERENCES Aluno(id_aluno),
FOREIGN KEY (id_curso) REFERENCES Curso(id_curso)
);



CREATE TABLE Avaliacao( 
id_avaliacao INT PRIMARY KEY AUTO_INCREMENT, 
id_matricula INT NOT NULL,
nota DECIMAL(6,2),
data_avaliacao DATE,
FOREIGN KEY (id_matricula) REFERENCES Matricula(id_matricula)
);

SELECT * FROM aluno;
SELECT Curso.nome




