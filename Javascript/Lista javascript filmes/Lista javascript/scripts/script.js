const filmes = [
    { titulo: "Interstellar", imagem: "images/Interstellar_Filme.png" },
    { titulo: "Robin Hood - A Origem", imagem: "images/Robin hood -  A origem.jpg" },
    { titulo: "Jogos Vorazes", imagem: "images/jogos vorazes.jpg" },
    { titulo: "Matrix", imagem: "images/Matrix.jpg" },
    { titulo: "Avatar", imagem: "images/Avatar.jpg" },
    { titulo: "Coringa", imagem: "images/coringa.jpg" },
    
];

const catalogo = document.getElementById("catalogo");

filmes.forEach(filme => {
    const filmeDiv = document.createElement("div");
    filmeDiv.classList.add("filme");

    filmeDiv.innerHTML = `
        <img src="${filme.imagem}" alt="${filme.titulo}">
        <h3>${filme.titulo}</h3>
    `;

    catalogo.appendChild(filmeDiv);
});
