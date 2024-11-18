n1 = Number(prompt("Informe o primeiro numero "));
n2 = Number(prompt("Informe o segundo numero "))
operacao = prompt(" Qual é a operacao?");
resultado = 0;





switch (operacao){
   case 'soma' :
    resultado = n1+ n2;
   break

   case 'subtracao':
    resultado = n1 -n2;
   break

   case 'multiplicacao':
    resultado = n1* n2;
   break

   case 'divisao':
    resultado = n1 /n2;
   break
   default:
    alert("operacao invalida")
    break
}

alert(" O  resultado é :"+resultado)