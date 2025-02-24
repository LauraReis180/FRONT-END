USE employees;
SELECT * FROM  employees;

-- CHAR LENGTH
SELECT first_name , CHAR_LENGTH(first_name) AS qtds_char FROM employees;

-- CONCAT( CONCATENA)
SELECT CONCAT (first_name,"nasceu em ", birth_date) AS data_nascimento FROM employees;

-- CONCAT_WS ( CONCATENA COM SEPARADOR)
SELECT CONCAT_WS ("*",first_name, last_name) FROM employees;

-- CASE
-- U-UPPER- MAIUSCULO
-- U-LOWER-MAINUSCULO

SELECT first_name, UCASE(first_name) FROM employees;

-- REPLACE (TERMO N QUER, TERMO DESEJADO)
SELECT REPLACE(first_name, "Georgi", " Um cara tranquilo"), last_name FROM employees WHERE emp_no = "10001";

-- LEFT *picotar quem e até onde
SELECT first_name, LEFT(first_name, 3) FROM employees;

SELECT hire_date, birth_date  FROM employees;
-- DATE DIFF diferença entre datas
SELECT  DATEDIFF( hire_date, birth_date ) FROM employees;

 SELECT (hire_date, "%d / %m / %y") FROM employees;
 
 CREATE TABLE emails(
 id INT PRIMARY KEY AUTO_INCREMENT,
 primario VARCHAR(255) NOT NULL
 );
 
 INSERT emails(primario) VALUES ("Laura da Silva Reis");
  INSERT emails(primario) VALUES ("       Laura da Silva Reis");
 SELECT * FROM emails;
 select TRIM(primario) FROM emails;
 
 