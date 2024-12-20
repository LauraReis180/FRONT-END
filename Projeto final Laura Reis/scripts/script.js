// Função para destacar o botão clicado
function highlightButton(button) {
    let buttons = document.querySelectorAll('.btn');
    buttons.forEach(b => b.classList.remove('active'));
    button.classList.add('active');
  }
  

  document.addEventListener("DOMContentLoaded", () => {
    const rankingList = document.getElementById("ranking-list");
  
    // Dados das listas
    const rankings = {
      music: [
        { name: "Música 1", description: "Descrição da Música 1", image: "https://via.placeholder.com/150" },
        { name: "Música 2", description: "Descrição da Música 2", image: "https://via.placeholder.com/150" }
      ],
      artists: [
        { name: "Artista 1", description: "Descrição do Artista 1", image: "https://via.placeholder.com/150" },
        { name: "Artista 2", description: "Descrição do Artista 2", image: "https://via.placeholder.com/150" }
      ],
      week: [
        { name: "Hit 1", description: "Top da Semana 1", image: "https://via.placeholder.com/150" },
        { name: "Hit 2", description: "Top da Semana 2", image: "https://via.placeholder.com/150" }
      ]
    };
  
    const renderList = (type) => {
      rankingList.innerHTML = "";
      rankings[type].forEach(item => {
        rankingList.innerHTML += `
          <div class="col-md-4">
            <div class="card">
              <img src="${item.image}" class="card-img-top" alt="${item.name}">
              <div class="card-body text-center">
                <h5 class="card-title">${item.name}</h5>
                <p class="card-text">${item.description}</p>
                <button class="btn btn-primary">Play</button>
              </div>
            </div>
          </div>
        `;
      });
    };
  
    // Inicializar com Top Músicas
    renderList("music");
  
    // Botões de alternância
    document.getElementById("top-music").addEventListener("click", () => {
      renderList("music");
      toggleActiveButton("top-music");
    });
  
    document.getElementById("top-artists").addEventListener("click", () => {
      renderList("artists");
      toggleActiveButton("top-artists");
    });
  
    document.getElementById("top-week").addEventListener("click", () => {
      renderList("week");
      toggleActiveButton("top-week");
    });
  
    // Função para destacar o botão ativo
    const toggleActiveButton = (activeId) => {
      document.querySelectorAll(".ranking-btn").forEach(btn => {
        btn.classList.remove("btn-dark");
        btn.classList.add("btn-outline-dark");
      });
      document.getElementById(activeId).classList.add("btn-dark");
    };
  });

  
  // Dados das músicas, artistas e ranking semanal
const topMusicas = [
  {
    nome: " Top 1",
    imagem: "../images/Die with a smile.jpg",
    detalhes: " Bruno Mars e Lady Gaga - Die With A Smile"
  },
  {
    nome: "Top 2",
    imagem: "../images/MTG na Imaginação.jpg",
    detalhes: " MC Livinho e DJ Topo - MTG Na Imaginação"
  },
  {
    nome: "Top 3",
    imagem: "../images/All want for christmas is you.jpg",
    detalhes: " Mariah Carey - All I Want For Christmas Is You"
  }
];

const topArtistas = [
  {
    nome: "Artista 1",
    imagem: "https://via.placeholder.com/50",
    detalhes: "Detalhes do Artista 1"
  },
  {
    nome: "Artista 2",
    imagem: "https://via.placeholder.com/50",
    detalhes: "Detalhes do Artista 2"
  },
  {
    nome: "Artista 3",
    imagem: "https://via.placeholder.com/50",
    detalhes: "Detalhes do Artista 3"
  }
];

const topSemanal = [
  {
    nome: "Música Semanal 1",
    imagem: "https://via.placeholder.com/50",
    detalhes: "Detalhes da Música Semanal 1"
  },
  {
    nome: "Música Semanal 2",
    imagem: "https://via.placeholder.com/50",
    detalhes: "Detalhes da Música Semanal 2"
  },
  {
    nome: "Música Semanal 3",
    imagem: "https://via.placeholder.com/50",
    detalhes: "Detalhes da Música Semanal 3"
  }
];

// Função para exibir o ranking das Top Músicas
function exibirTopMusicas() {
  const listaContainer = document.getElementById("topMusicasList");
  listaContainer.innerHTML = ''; // Limpar qualquer conteúdo anterior

  topMusicas.forEach((musica) => {
    const item = document.createElement('a');
    item.classList.add('list-group-item', 'list-group-item-action');
    item.href = "#";

    item.innerHTML = `
      <img src="${musica.imagem}" class="img-thumbnail me-3" alt="Imagem da música">
      <span>${musica.nome}</span>
    `;
    
    item.addEventListener('click', function () {
      alert(musica.detalhes);
    });

    listaContainer.appendChild(item);
  });
}

// Função para exibir o ranking dos Top Artistas
function exibirTopArtistas() {
  const listaContainer = document.getElementById("topMusicasList");
  listaContainer.innerHTML = ''; // Limpar qualquer conteúdo anterior

  topArtistas.forEach((artista) => {
    const item = document.createElement('a');
    item.classList.add('list-group-item', 'list-group-item-action');
    item.href = "#";

    item.innerHTML = `
      <img src="${artista.imagem}" class="img-thumbnail me-3" alt="Imagem do artista">
      <span>${artista.nome}</span>
    `;
    
    item.addEventListener('click', function () {
      alert(artista.detalhes);
    });

    listaContainer.appendChild(item);
  });
}

// Função para exibir o ranking Top Semanal
function exibirTopSemanal() {
  const listaContainer = document.getElementById("topMusicasList");
  listaContainer.innerHTML = ''; // Limpar qualquer conteúdo anterior

  topSemanal.forEach((musica) => {
    const item = document.createElement('a');
    item.classList.add('list-group-item', 'list-group-item-action');
    item.href = "#";

    item.innerHTML = `
      <img src="${musica.imagem}" class="img-thumbnail me-3" alt="Imagem da música semanal">
      <span>${musica.nome}</span>
    `;
    
    item.addEventListener('click', function () {
      alert(musica.detalhes);
    });

    listaContainer.appendChild(item);
  });
}

// Chama a função para exibir as músicas assim que a página carrega
window.onload = exibirTopMusicas;

