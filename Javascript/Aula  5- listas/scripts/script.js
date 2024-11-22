//var fruta1 = 'Melancia'
//var fruta2 = 'Tomate'
//var fruta3 = 'Melão'
//var fruta4 = 'Maracujá'
//var fruta5 = 'Mexirica'

fruta = ['Melancia','Tomate','Melão','Maracujá', 'Mexirica']

teste = Array()
teste[0] = 'olha'
teste[1] = 'que'
teste[2] = 'top'

console.log(fruta)
console.log(fruta[1])

// PUSH 'EMPURRAR' - ADICIONAR NA LISTA
fruta.push('Uva')
console.log(fruta)

// UNSHIFT - ADICIONAR NO COMEÇO NA LISTA
fruta.unshift('Abacate')
console.log(fruta)

//POP - REMOVER O ULTIMO
fruta.pop()
console.log(fruta)

//SHIFT- REMOVER O PRIMEIRO
fruta.shift()
console.log(fruta)

fruta.push('Abacaxi')

//SPLICE - REMOVER, ADICIONA E ATUALIZA
//ONDE?? (INDICE), QUANTOS VOU DELETAR??
// SE NENHUM O QUE VOU ADICIONAR???
fruta.splice(2,3)
fruta.splice(2,0, 'Morango')
fruta.splice(2,1,'Maracujá')
console.log(fruta)

for(var i=0; i <fruta.lenght; i++){
     document.getElementById('resposta').
     innerHTML += `
     ${fruta[i]}
     `

}

fruta.forEach(cadafruta => {
    document.getElementById('resposta').
     innerHTML += ` 
     ${cadafruta} <br>
     `

})
