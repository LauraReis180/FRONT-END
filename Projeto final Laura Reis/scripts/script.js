// Seleciona os elementos
const loginBtn = document.getElementById('login-btn');
const loginBox = document.getElementById('login-box');

// Função para exibir a caixa de login
loginBtn.addEventListener('click', () => {
    loginBox.style.display = 'block';
});

// Fechar a caixa de login quando o usuário clicar em qualquer área fora dela (opcional)
window.addEventListener('click', (e) => {
    if (e.target === loginBox) {
        loginBox.style.display = 'none';
    }
});
document.addEventListener("DOMContentLoaded", function() {
    // Abrir o dropdown assim que a página for carregada
    const dropdown = new bootstrap.Dropdown(document.querySelector('.dropdown-toggle'));
    dropdown.show();
  });
  
