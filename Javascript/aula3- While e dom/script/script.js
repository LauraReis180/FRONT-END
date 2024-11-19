// DOM
// URL - LOCATION
// "BOTAO DE VOLTAR - HISTORY"
// "SITE / CONTEUDO" - DOCUMENT

// window.location.reload()
// window.location ="https://www.google.com"

// document- documento
// getElementById - busca o sujeito pelo id
// inner.. - coloca um elemento neutro
// se innerText - apenas texto
// se innerHTML - texto e codigo

document.getElementById('catalogo').innerHTML = "<h3>OI</h3>"
document.querySelector('#catalogo').innerHTML  = 'olá' 

function registrarNome(){
   nome = document.querySelector('#inputNome').value
  
   document.querySelector("#catalogo"). innerHTML=´
   <div id= "nomeDiv">
    eu ${nome} sou muito top e programado`
   </div>
   `
}