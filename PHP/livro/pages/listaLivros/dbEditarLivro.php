<?php 
include('DB/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descrição']);
    $avaliacao = $_POST['avaliação'];


    $imagem = $_POST['imagem']; 
    $sql = "UPDATE livro SET nome='$nome', descrição='$descricao', avaliação='$avaliacao', imagem='$imagem' WHERE id='$id'";
    if (mysqli_query($conexao, $sql)) {
        echo "Livro atualizado com sucesso!";
        header("Location: index.php?menu=lista"); 
    } else {
        echo "Erro ao atualizar livro: " . mysqli_error($conexao);
    }
}
?>



