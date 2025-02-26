CREATE DATABASE revisao;
USE revisao;

CREATE TABLE Aluno( 
id_aluno INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR(100),
email VARCHAR(255),
data_nascimento DATE
);


CREATE TABLE Professor( 
id_professor INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR(100),
email VARCHAR(255),
especialidade  VARCHAR(255)
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




