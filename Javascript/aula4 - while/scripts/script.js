function testes(){
    // enquanto condicao faca
    // para de tanto ate tanto faca
    contador = 0

    // while (contador < 3){
    // alert(`QUE MANEIRO!!!' FIZ ${contador+1} vezes`)
    // contador++
    // }

    for(var i = 0;i < 3;i++){
        alert(`QUE MANEIRO!!!' FIZ ${i+1} vezes`)
    }
}

// testes()

function carregarCatalogo(){
    for (let i = 0;i < 8;i++){
        document.getElementById('catalogo').innerHTML += `
        <div class="livro">
            <img src="" alt="">
            <h4>COMO EU ERA ANTES DE VOCE</h4>

            <button>
                Adicionar
                <img src="" alt="">
            </button>
        </div>
        
        `
    }
}

carregarCatalogo()