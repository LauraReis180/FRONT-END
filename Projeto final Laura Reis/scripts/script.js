
function highlightButton(button) {
    let buttons = document.querySelectorAll('.btn');
    buttons.forEach(b => b.classList.remove('active'));
    button.classList.add('active');
  }
  

  document.addEventListener("DOMContentLoaded", () => {
    const rankingList = document.getElementById("ranking-list");
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
  
    renderList("music");
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
  
    
    const toggleActiveButton = (activeId) => {
      document.querySelectorAll(".ranking-btn").forEach(btn => {
        btn.classList.remove("btn-dark");
        btn.classList.add("btn-outline-dark");
      });
      document.getElementById(activeId).classList.add("btn-dark");
    };
  });

  const topMusicas = [
  {
    nome: " Bruno Mars e Lady Gaga - Die With A Smile",
    imagem: "../images/Die with a smile.jpg",
    detalhes: " TOP 1"
  },
  {
    nome: "MC Livinho e DJ Topo - MTG Na Imaginação",
    imagem: "../images/MTG na Imaginação.jpg",
    detalhes: " TOP 2"
  },
  {
    nome: "Mariah Carey - All I Want For Christmas Is You",
    imagem: "../images/All want for christmas is you.jpg",
    detalhes: " TOP 3"
  }
];

const topArtistas = [
  {
    nome: "The Weeknd",
    imagem: "../images/artista 1 .jpg",
    detalhes: "TOP 1"
  },
  {
    nome: "Eminem",
    imagem: "../images/artista 2 .jpg",
    detalhes: "TOP 2"
  },
  {
    nome: "Jorge & Mateus",
    imagem: "../images/artista 3 .jpg",
    detalhes: "TOP 3"
  }
];

const topSemanal = [
  {
    nome: " Lua - Alok, Ana Castela e Hungria Hip Hop",
    imagem: "../images/top semanal 1.jpg",
    detalhes: "TOP 1"
  },
  {
    nome: "RAM TCHUM -  Ana Castela, DENNIS e MC GW",
    imagem: "../images/top semanal 2.jpg",
    detalhes: "TOP 2"
  },
  {
    nome: "Haverá Sinais - Jorge & Mateus e Lauana Prado",
    imagem: "../images/top semanal 3.jpg",
    detalhes: "TOP 3"
  }
];


function exibirTopMusicas() {
  const listaContainer = document.getElementById("topMusicasLista");
  listaContainer.innerHTML = ''; 

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

function exibirTopArtistas() {
  const listaContainer = document.getElementById("topMusicasLista");
  listaContainer.innerHTML = ''; 

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

function exibirTopSemanal() {
  const listaContainer = document.getElementById("topMusicasLista");
  listaContainer.innerHTML = ''; 

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


window.onload = exibirTopMusicas;

