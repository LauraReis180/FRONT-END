class Usuario{
    //id, @ , nome, email, bio, genero
    constructor(id, apelido , nome , email , bio , genero){
    this.id = id;
    this.apelido = apelido;
    this.nome = nome;
    this.email = email;
    this.bio = bio;
    this.genero = genero;
    this.postar = function(pensamento){
        document.querySelector("#resposta"). innerHTML 
        += `

    <div class="post">
       <h3>${this.apelido}</h3>
       <p>${pensamento}</p>
    </div>
    
    `

   }
  }
}
var user1 = new Usuario (1, 'LauraReis180', 'Laura', 'Lauradasilvareis09@gmail.com', 'Estudante' , 'Feminino')
var user2 = new Usuario (1, 'Dark', 'Laura', 'Dark@gmail.com', 'PERFIL PESSOAL' , 'Feminino')

function postarFeed(){
    alert("POSTADO COM SUCESSO!")
    pensamento = document.querySelector('#pensamento').value

    user1.postar(pensamento)
}