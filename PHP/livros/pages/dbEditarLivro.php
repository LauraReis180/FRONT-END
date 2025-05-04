<?php
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $nome = mysqli_real_escape_string($conn,$_POST['nome']);
    $descrição = mysqli_real_escape_string($conn,$_POST['descrição']);
    $avaliação = mysqli_real_escape_string($conn,$_POST['avaliação']);

    // Verifica se a imagem foi alterada
    if ($_FILES['imagem']['name'] != '') {
        $imagem = $_FILES['imagem']['name'];
        $caminhoImagem = "uploads/" . basename($imagem);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem);
        $imagemSQL = ", imagemLivro = '$caminhoImagem'";
    } else {
        $imagemSQL = "";
    }

    $sql = "UPDATE livro SET 
        nome = '{$nome}', 
        descrição = '{$descrição}', 
        avaliação= '{$avaliação}'
        {$imagemSQL}
        WHERE id = '{$id}'";

    mysqli_query($conn,$sql) or die ("Erro ao atualizar");

    echo "O livro foi atualizado!";
?>

