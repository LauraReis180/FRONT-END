document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    alert('Você se cadastrou com sucesso!');
    window.location.href = 'ranking.html';
});
