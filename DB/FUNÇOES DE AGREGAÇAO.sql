-- COUNT, COUNT(*), COUNT(DISTICT)
SELECT * FROM clientes;
SELECT 
   COUNT(nome)
FROM clientes;
SELECT 
   COUNT(*)
FROM clientes;
SELECT 
   COUNT(DISTINCT Escolaridade)
FROM clientes;

-- SUM, AVG, MIN e MAX
SELECT 
    *
FROM pedidos;
SELECT 
  SUM (nomeDaColuna) AS ' nome temporário (apelido)',
  AVG (nomeDaColuna) AS 'nome temporário (apelido)',
  MIN (nomeDaColuna) AS ' nome temporário (apelido)',
  MAX (nomeDaColuna) AS  'nome temporário (apelido)',
FROM pedidos;





