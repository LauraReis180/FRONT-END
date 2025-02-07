use employees;
SET SQL_SAFE_UPDATES = 0;
update employees set last_name = "Reis" where last_name = "Da Silva Reis";
SELECT * FROM employees where last_name = "Reis";