<?php
include 'DB/conexao.php';

// Escapando e sanitizando os dados do formulário
$id = intval($_POST['id']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
$avaliacao = isset($_POST['avaliacao']) && $_POST['avaliacao'] !== '' ? floatval($_POST['avaliacao']) : 0;

// Verifica se a imagem foi alterada
$imagemSQL = '';
if (isset($_FILES['imagem']) && $_FILES['imagem']['name'] != '') {
    $imagem = basename($_FILES['imagem']['name']);
    $caminhoImagem = 'uploads/' . $imagem;
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem);
    $imagemSQL = ", imagem = '$imagem'";
}

// Atualiza os dados no banco
$sql = "UPDATE livro SET 
            nome = '$nome', 
            descricao = '$descricao', 
            avaliacao = $avaliacao
            $imagemSQL
        WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "<p>O livro foi atualizado com sucesso!</p>";
    echo "<a href='index.php?menu=lista'>Voltar para a lista de livros</a>";
} else {
    echo "<p>Erro ao atualizar o livro: " . mysqli_error($conn) . "</p>";
}
?>

