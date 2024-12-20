function alterarBanner(titulo, descricao, imagem) {
  const banner = document.getElementById('banner');
  const bannerImage = document.getElementById('banner-image');

  
  bannerImage.src = imagem;
  bannerImage.alt = `Imagem do estilo ${titulo}`;

 
  banner.style.display = 'block';
}


document.getElementById('btnEntrar').addEventListener('click', function(event) {
  event.preventDefault(); 

 
  alert("Você entrou com sucesso!");


  var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
  myModal.hide(); 

  window.location.href = "ranking.html"; 
});


