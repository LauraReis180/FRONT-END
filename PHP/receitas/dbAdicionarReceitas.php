<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db/conexao.php';

 
    $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $receita = mysqli_real_escape_string($conexao, $_POST['receita']);
    $autor = mysqli_real_escape_string($conexao, $_POST['autor']);
    $tipoReceita = mysqli_real_escape_string($conexao, $_POST['tipoReceita']);
    
   
    $imagem = '';
    if ($_FILES['imagem']['name']) {
        $imagem = 'images/' . basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
    }

    
    $sql = "INSERT INTO receita (titulo, descricao, receita, autor, tipoReceita, imagem) 
            VALUES ('$titulo', '$descricao', '$receita', '$autor', '$tipoReceita', '$imagem')";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Receita adicionada com sucesso!";
        header('Location: index.php?menu=listaReceitas');
    } else {
        echo "Erro ao adicionar receita: " . mysqli_error($conexao);
    }
}
?>
