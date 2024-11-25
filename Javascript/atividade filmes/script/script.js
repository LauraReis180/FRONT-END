function testes(){

    contador = 0

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
       livros.forEach(cadaFilme =>{
        document.getElementById('catalogo').innerHTML += `
        <div class="Filmes">
            <img src="${cadaFilme[0]}" alt="">
    
            <h4>${cadafilme[1]}</h4>
 <button>
        Adicionar
        <img src="" alt="">
    </button>
</div>
        `
    })
}

carregarCatalogo()