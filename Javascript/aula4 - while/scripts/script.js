function testes(){
    // enquanto condicao faca
    // para de tanto ate tanto faca
    contador = 0

    // while (contador < 3){
    // alert(`QUE MANEIRO!!!' FIZ ${contador+1} vezes`)
    // contador++
    // }

    for(var i = 0;i < 3; i++){
        alert(`QUE MANEIRO!!!' FIZ ${i+1} vezes`)
    }
}

// testes()

function carregarCatalogo(){
    var livros =[
    ['images/livros/COMO EU ERA ANTES DE VOCE.jpg','COMO EU ERA ANTES DE VOCE' ],
    ['images/livros/a cinco passos de voce.jpg','A CINCO PASSOS DE VOCÊ'],
    ['images/livros/ORGULHO E PRECONCEITO.jpg','ORGULHO E PRECONCEITO'],
    ['images/livros/1984.jpg', '1984'],
    ['images/livros/13 razões do por que.jpg', '13 REASONS WHY']
]
       livros.forEach(cadaLivro =>{
        document.getElementById('catalogo').innerHTML += `
        <div class="livro">
            <img src="${cadaLivro[0]}" alt="">
    
            <h4>${cadaLivro[1]}</h4>
 <button>
        Adicionar
        <img src="" alt="">
    </button>
</div>
        `
    })
}

carregarCatalogo()
