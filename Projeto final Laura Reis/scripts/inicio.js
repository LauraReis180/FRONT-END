// Função para alterar o banner dinamicamente
function alterarBanner(estilo, descricao) {
  // Atualiza o título e a descrição do banner
  document.getElementById('banner-title').textContent = `Música ${estilo}`;
  document.getElementById('banner-description').textContent = descricao;
  
  // Define a imagem de acordo com o estilo
  var bannerImage = document.getElementById('banner-image');
  if (estilo === 'Rock') {
    bannerImage.src = 'rock-banner.jpg';  // Aqui você define o caminho da imagem para o Rock
    bannerImage.style.display = 'block'; // Exibe a imagem
  } else {
    bannerImage.style.display = 'none'; // Esconde a imagem caso não seja Rock
  }

  // Atualiza o texto do botão
  document.getElementById('banner-button').textContent = 'Ouvir';
  
  // Esconde os cards
  document.getElementById('musical-cards').style.display = 'none';  // Esconde os cards
}

// Exemplo de função para o botão "Ouvir"
function ouvirMusica() {
  alert('Abrindo a música selecionada...');
}
