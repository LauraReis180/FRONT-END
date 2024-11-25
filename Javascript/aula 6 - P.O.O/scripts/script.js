// var clienteNome = 'Leo'
// var clienteCpf = 99999999
// var clienteEmail =  'email@email'
// var clienteTelefone =  88888888
// var clienteTipoConta = 'Fisico'
// var clientesaldo = 0

//var clienteNome2 = 'alessandra'



class Cliente{
    nome;
    dataNascimento;
    cpf;
    email;
    telefone;
    tipoDeConta;
    saldo;
    depositar(valor){
        if (valor <= 0){
            console.log('Operação não permitida!')    
        }else{
          this.saldo += valor
          console.log('O valor de ${valor} foi depositado com sucesso!')
        }
    

    }
    // argumento - é valor passado
    // paramentro - é a palavra que vai salvar o argumento
    pix(valor){
        if(this.saldo <valor){
            console.log(" Saldo insuficiente")    
        }else{
        this.saldo -= valor
        console.log('Pix de valor ${valor} foi efetuado com sucesso!')
    }

}
}

var cliente1 = new Cliente
cliente1.nome = 'Leo'
cliente1.dataNascimento = '11//03/1998'
cliente1.cpf = 88888888-88
cliente1.email = 'leozingodgamer@gmail.com'
cliente1.saldo = 0

cliente1.pix(100)

console.log(cliente1)