function explicacao1(){
   // SE CONDIÇAO / SENAO
   escolha = confirm ('DESEJA RODAR TRUE OU FALSE?')
  
   
   
   if (escolha) {
    // console.log("FIZ O SE")
    alert(' VOCE ESCOLHEU  TRUE')
    }else{
     //console.log ("SENAO")
     alert('VOCE ESCOLHEU  FALSE')
   
   }
 }

 function explicacaoa2(){
    alert('SEJA BEM-VINDO A LOJINHA!')
    escolha = prompt('A) Bolo no pote R$ 10, B) Açai R$ 20 , C) TORTA R$ 15')


        switch (escolha){
            case 'A':
               alert('Voce escolheu bolo no pote')
               break
            case 'B':
                alert('Voce escolheu  açai')
                break
            case 'C':
                alert('Voce escolheu Torta')
                break

        }
    
    
 }
function explicacao3(){
    //idade = parseInt() 
    idade = Number(prompt('Digite a sua idade:'))

    if (idade>= 18){

        alert('Seja Bem-vindo(a) ao website!')
        // DOCUMENT - DOCUMENTO HTML
        // QUERYSELECTOR - "BUSCADOR"
        // INNERHTML = "DENTRO DO ELEMENTO"
        document.querySelector('body').innerHTML = "VIVA!!!!"
        
    }else{
        alert('Idade invalida!')
        // WINDOW - JANELA
        // LOCATION - "URL"
        window.location = 'https://www.google.com'

    }
    
}