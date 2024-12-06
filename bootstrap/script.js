lista_categorias = []

class Categoria {
    constructor(titulo,img,desc,marca){
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('SUCOS','https://p2.trrsf.com/image/fget/cf/1200/630/middle/images.terra.com/2023/09/25/831755353-sucos-funcionais.jpeg','Suco para todos os gostos, frescor em cada sabor!','Suco feito por @Marca'))


lista_categorias.push(new Categoria('SMOOTHIES','https://domf5oio6qrcr.cloudfront.net/medialibrary/8931/Smoothie-post.jpg','Smoothies: todos os sabores,para todos os momentos!','feito por @Blendy'))

lista_categorias.push(new Categoria('DRINKS','https://www.jornaldocomercio.com/_midias/jpg/2021/01/27/20200803_spoiler_fotosvariadas_95_editar-9238212.jpg','mais diversos sucos! Laranja, morango e muito mais.','Suco feito por @Marca'))


lista_categorias.forEach(categoria => {
    document.querySelector('#categoriaItems').innerHTML += `
    
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="${categoria.img}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">${categoria.titulo}</h5>
                    <p class="card-text">${categoria.desc}</p>
                    <p class="card-text"><small class="text-body-secondary">${categoria.marca}</small></p>
                </div>
            </div>
        </div>
    </div>
    
    `
});