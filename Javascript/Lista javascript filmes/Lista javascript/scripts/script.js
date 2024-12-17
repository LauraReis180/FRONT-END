const filmes = [
    { titulo: "Interstellar", imagem: "images/interstellar.jpg" },
    { titulo: "A Origem", imagem: "images/inception.jpg" },
    { titulo: "O Senhor dos Anéis", imagem: "images/lotr.jpg" },
    { titulo: "Matrix", imagem: "images/matrix.jpg" },
    { titulo: "Avatar", imagem: "images/avatar.jpg" },
    { titulo: "Coringa", imagem: "images/joker.jpg" }
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
