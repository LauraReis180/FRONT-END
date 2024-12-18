// Função para destacar o botão clicado
function highlightButton(button) {
    let buttons = document.querySelectorAll('.btn');
    buttons.forEach(b => b.classList.remove('active'));
    button.classList.add('active');
  }
  
