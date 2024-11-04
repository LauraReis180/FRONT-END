Algoritmo "semnome"

Var
 nomes : vetor [1..3] de caractere
 valores : vetor [1..3] de real
 total, media : real
 i :inteiro


Inicio
para i de 1 ate 3 faca
 escreval("Informe o  nome da mercadoria", i )
  leia(nomes[i])
 escreval("Informe o  valor da mercadoria", i )
  leia (valores[i])
  total <- total + valores[i]
  fimPara
  
  media <- total / 3
  escreval("Qual o valor total da mercadoria?", total)
  escreval (" Qual e a media do valor das mercadorias ?,", media)
  
 
Fimalgoritmo