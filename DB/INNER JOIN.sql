# INNER JOIN:

-- Exemplo 1. Faça uma cosulta que tenha como resultado toda as colunas da tabela pedidos e as colunas Loja, Gerente  e Telefone.

SELECT * FROM  pedidos;
SELECT * FROM lojas;

-- Tabela A --> Tabela Fato --> Tabela pedidos
-- Tabela B --> Tabela Dimensão --> Tabela lojas

--  Chave Primária (Lojas) --> ID_Loja
--  Chave Estrageira (Pedidos) -- > ID_Loja

 SELECT
   pedidos.*,
   lojas.Loja,
   lojas.Gerente,
   lojas.Telefone
FROM pedidos
INNER JOIN lojas
  ON pedidos.ID_Lojs = lojas.ID_Loja
  
  
  

