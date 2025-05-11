<?php
include('DB/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $avaliacao = $_POST['avaliacao'];

   
    $imagem = $_POST['imagem'];  

    $sql = "INSERT INTO livro (`nome`, `descrição`, `avaliação`, `imagem`) 
            VALUES ('$nome', '$descricao', '$avaliacao', '$imagem')";

    if (mysqli_query($conexao, $sql)) {
        echo "Livro adicionado com sucesso!";
        header("Location: index.php?menu=lista");
        exit();
    } else {
        echo "Erro ao adicionar livro: " . mysqli_error($conexao);
    }
}
?>
