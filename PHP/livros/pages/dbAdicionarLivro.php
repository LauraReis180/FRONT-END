<?php
// Verifica se o diretório de uploads existe, senão cria
if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

// Verifica se um arquivo foi enviado
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $imagem = $_FILES['imagem']['name'];
    $caminhoTemporario = $_FILES['imagem']['tmp_name'];
    $caminhoDestino = '../uploads/' . $imagem;

    move_uploaded_file($caminhoTemporario, $caminhoDestino);
} else {
    $imagem = ''; // Se nenhuma imagem foi enviada
}

// Conecta ao banco de dados
include 'DB/conexao.php';

// Pega os dados do formulário
$nome = $_POST['nome'] ?? '';
$descrição = $_POST['descrição'] ?? '';
$avaliação = isset($_POST['avaliação']) && $_POST['avaliação'] !== '' ? intval($_POST['avaliação']) : 0;

// Insere os dados na tabela 'livro'
$sql = "INSERT INTO livro (nome, imagem, descrição, avaliação)
        VALUES ('$nome', '$imagem', '$descrição', $avaliação)";

mysqli_query($conn, $sql) or die(mysqli_error($conn));

echo "Livro adicionado com sucesso!";
?>
