lista_categorias = []

class Categoria {
    constructor(titulo,img,desc,marca){
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('SUCOS','images/drinks.','Suco para todos os gostos, frescor em cada sabor!','Suco feito por @Blendy'))

lista_categorias.push(new Categoria('SMOOTHIES','https://domf5oio6qrcr.cloudfront.net/medialibrary/8931/Smoothie-post.jpg','Smoothies: todos os sabores,para todos os momentos!','feito por @Blendy'))

lista_categorias.push(new Categoria('DRINKS ','images/drink.png','Sabor que refresca! Descubra nossos drinks deliciosos e inovadores, feitos para todos os gostos!','feito por @Blendy'))

lista_categorias.push(new Categoria('REFRIGERANTES NATURAIS','http://127.0.0.1:5500/images/MacBook%20Air%20-%201%20(9).png','Refresque-se com o melhor da natureza! Nossos refrigerantes naturais trazem o sabor fresco e saudável que você procura.','feito por @Blendy'))

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