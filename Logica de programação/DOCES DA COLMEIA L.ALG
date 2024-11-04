Algoritmo "Doces da colmeia"
// COMPRA POR QUILO - BOLO
// DESCONTO (DESCONTO POR SITUAÇÃO)
// QUANTIDADE DE UNIDADES - DOCINHO

Var
opcao,fnalizarCarrinho, opcaoFinalizar : caractere
valorTotal : real

//ADICIONARCARRINHO
procedimento adicionarAoCarrinho()
 VAR
 nomep : caractere
 INICIO
  limpaTela()
      escreval("Digite o nome do produto: ")
      leia(nomep)
      escreval (" Item ", nomep, "adicionado !")
     valorTotal <- valorTotal + vp
     escreval ("Valor total da trufa R$:" , valorTotal)
fimProcedimento
//FIM ADICIONARCARRINHO

Inicio
finalizarCarrinho <- "n"
enquanto (finalizarCarrinho = "n") faca
   escreval("*******CATALOGO********")
   escreval("1 - TRUFA                     R$ 8,00 ")
   escreval("2 - BOLO NO POTE              R$ 10,00 ")
   escreval("3 - COPO DA FELICIDADE        R$ 15,00 ")
   escreval("4 - DOCINHO                   R$ 3,00")
   escreval("5 - PUDIM                     R$ 25,00")
   escreval("6 - CANCELAR")
   escreval("7 - CARRINHO")

leia(opcao)
// switch / case
   escolha(opcao)
     caso "1"
        adicionarAoCarrinho(8)
     caso "2"
       adicionarAoCarrinho(10)
     Caso "3"
       adicionarAoCarrinho(15)
     Caso "4"
       adicionarAoCarrinho(3)
     Caso "5"
     adicionarAoCarrinho(25)
     Caso "6"
         escreval("compra cancelada ")
     outrocaso
         escreval("Opção invalida")
 fimEscolha
 
 escreval ("Deseja adicionar mais alguma coisa?")
 escreval ("1 - Sim")
 escreval("2 - Não")
 leia(opcaoFinalizar)
 
 se(opcaoFinalizar = "1")entao
   finalizarCarrinho <- "n"
 senao
   finalizarCarrinho <- "s"
 fimSe
 limpaTela()
fimEnquanto

escreval("-----COMPRA FINALIZADA------")
escreval("Valor total ; R$", valorTotal)
escreval ("------------")
escreval " N° PEDIDO 1542")

Fimalgoritmo